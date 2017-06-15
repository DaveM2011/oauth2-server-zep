namespace OAuth2\Controller;

use OAuth2\Storage\ClientInterface;
use OAuth2\ScopeInterface;
use OAuth2\RequestInterface;
use OAuth2\ResponseInterface;
use OAuth2\Scope;
use InvalidArgumentException;

/**
 * @see AuthorizeControllerInterface
 */
class AuthorizeController implements AuthorizeControllerInterface
{
    private scope;
    private state;
    private client_id;
    private redirect_uri;
    private response_type;
    protected clientStorage;
    protected responseTypes;
    protected config;
    protected scopeUtil;

    /**
     * Constructor
     *
     * @param ClientInterface $clientStorage REQUIRED Instance of OAuth2\Storage\ClientInterface to retrieve client information
     * @param array           $responseTypes OPTIONAL Array of OAuth2\ResponseType\ResponseTypeInterface objects.  Valid array
     *                                       keys are "code" and "token"
     * @param array           $config        OPTIONAL Configuration options for the server:
     * @param ScopeInterface  $scopeUtil     OPTIONAL Instance of OAuth2\ScopeInterface to validate the requested scope
     * @code
     *     $config = array(
     *         "allow_implicit" => false,            // if the controller should allow the "implicit" grant type
     *         "enforce_state"  => true              // if the controller should require the "state" parameter
     *         "require_exact_redirect_uri" => true, // if the controller should require an exact match on the "redirect_uri" parameter
     *         "redirect_status_code" => 302,        // HTTP status code to use for redirect responses
     *     );
     * @endcode
     */
    public function __construct(<ClientInterface> clientStorage, array responseTypes = [], array config = [], <ScopeInterface> scopeUtil = null)
    {
        let this->clientStorage = clientStorage;
        let this->responseTypes = responseTypes;
        let this->config = array_merge([
            "allow_implicit": false,
            "enforce_state": true,
            "require_exact_redirect_uri": true,
            "redirect_status_code": 302
        ], config);

        if is_null(scopeUtil) {
            let scopeUtil = new Scope();
        }
        let this->scopeUtil = scopeUtil;
    }

    /**
     * Handle the authorization request
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param boolean           $is_authorized
     * @param mixed             $user_id
     * @return mixed|void
     * @throws InvalidArgumentException
     */
    public function handleAuthorizeRequest(<RequestInterface> request, <ResponseInterface> response, boolean is_authorized, user_id = null)
    {
        // We repeat this, because we need to re-validate. The request could be POSTed
        // by a 3rd-party (because we are not internally enforcing NONCEs, etc)
        if !this->validateAuthorizeRequest(request, response) {
            return;
        }
        var clientData, registered_redirect_uri, redirect_uri, params, authResult, uri, uri_params;
        // If no redirect_uri is passed in the request, use client"s registered one
        if empty this->redirect_uri {
            let clientData = this->clientStorage->getClientDetails(this->client_id);
            let registered_redirect_uri = clientData["redirect_uri"];
        }
        
        // the user declined access to the client"s application
        if is_authorized == false {
            let redirect_uri = this->redirect_uri ? this->redirect_uri : registered_redirect_uri;
            this->setNotAuthorizedResponse(request, response, redirect_uri, user_id);

            return;
        }

        // build the parameters to set in the redirect URI
        let params = this->buildAuthorizeParameters(request, response, user_id);
        if !params {
            return;
        }

        let authResult = this->responseTypes[this->response_type]->getAuthorizeResponse(params, user_id);
        let redirect_uri = authResult[0];
        let uri_params = authResult[1];
        //list(redirect_uri, uri_params) = authResult;

        if empty redirect_uri && !empty registered_redirect_uri {
            let redirect_uri = registered_redirect_uri;
        }

        let uri = this->buildUri(redirect_uri, uri_params);

        // return redirect response
        response->setRedirect(this->config["redirect_status_code"], uri);
    }

    /**
     * Set not authorized response
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param string            $redirect_uri
     * @param mixed             $user_id
     */
    protected function setNotAuthorizedResponse(<RequestInterface> request, <ResponseInterface> response, redirect_uri, user_id = null)
    {
        var error = "access_denied", error_message = "The user denied access to your application";
        response->setRedirect(this->config["redirect_status_code"], redirect_uri, this->state, error, error_message);
    }

    /**
     * We have made this protected so this class can be extended to add/modify
     * these parameters
     *
     * @TODO: add dependency injection for the parameters in this method
     *
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @param mixed $user_id
     * @return array
     */
    protected function buildAuthorizeParameters(request, response, user_id)
    {
        return [
            "scope": this->scope,
            "state": this->state,
            "client_id": this->client_id,
            "redirect_uri": this->redirect_uri,
            "response_type": this->response_type
        ];
    }

    /**
     * Validate the OAuth request
     *
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @return bool
     */
    public function validateAuthorizeRequest(<RequestInterface> request, <ResponseInterface> response)
    {
        var client_id, clientData, registered_redirect_uri, supplied_redirect_uri, parts, redirect_uri;
        // Make sure a valid client id was supplied (we can not redirect because we were unable to verify the URI)
        let client_id = request->query("client_id", request->request("client_id"));
        if !client_id {
            // We don"t have a good URI to use
            response->setError(400, "invalid_client", "No client id supplied");

            return false;
        }

        // Get client details
        let clientData = this->clientStorage->getClientDetails(client_id);
        if !clientData {
            response->setError(400, "invalid_client", "The client id supplied is invalid");

            return false;
        }

        let registered_redirect_uri = isset clientData["redirect_uri"] ? clientData["redirect_uri"] : "";

        // Make sure a valid redirect_uri was supplied. If specified, it must match the clientData URI.
        // @see http://tools.ietf.org/html/rfc6749#section-3.1.2
        // @see http://tools.ietf.org/html/rfc6749#section-4.1.2.1
        // @see http://tools.ietf.org/html/rfc6749#section-4.2.2.1
        let supplied_redirect_uri = request->query("redirect_uri", request->request("redirect_uri"));
        if supplied_redirect_uri {
            // validate there is no fragment supplied
            let parts = parse_url(supplied_redirect_uri);
            if isset parts["fragment"] && parts["fragment"] {
                response->setError(400, "invalid_uri", "The redirect URI must not contain a fragment");

                return false;
            }

            // validate against the registered redirect uri(s) if available
            if registered_redirect_uri && !this->validateRedirectUri(supplied_redirect_uri, registered_redirect_uri) {
                response->setError(400, "redirect_uri_mismatch", "The redirect URI provided is missing or does not match", "#section-3.1.2");

                return false;
            }
            let redirect_uri = supplied_redirect_uri;
        } else {
            // use the registered redirect_uri if none has been supplied, if possible
            if !registered_redirect_uri {
                response->setError(400, "invalid_uri", "No redirect URI was supplied or stored");

                return false;
            }

            if count(explode(" ", registered_redirect_uri)) > 1 {
                response->setError(400, "invalid_uri", "A redirect URI must be supplied when multiple redirect URIs are registered", "#section-3.1.2.3");

                return false;
            }
            let redirect_uri = registered_redirect_uri;
        }
        var response_type, types, state;
        // Select the response type
        let response_type = request->query("response_type", request->request("response_type"));

        // for multiple-valued response types - make them alphabetical
        if false !== strpos(response_type, " ") {
            let types = explode(" ", response_type);
            sort(types);
            let response_type = ltrim(implode(" ", types));
        }

        let state = request->query("state", request->request("state"));

        // type and client_id are required
        if !response_type || !in_array(response_type, this->getValidResponseTypes()) {
            response->setRedirect(this->config["redirect_status_code"], redirect_uri, state, "invalid_request", "Invalid or missing response type", null);

            return false;
        }

        if response_type == self::RESPONSE_TYPE_AUTHORIZATION_CODE {
            if !isset this->responseTypes["code"] {
                response->setRedirect(this->config["redirect_status_code"], redirect_uri, state, "unsupported_response_type", "authorization code grant type not supported", null);

                return false;
            }
            if !this->clientStorage->checkRestrictedGrantType(client_id, "authorization_code") {
                response->setRedirect(this->config["redirect_status_code"], redirect_uri, state, "unauthorized_client", "The grant type is unauthorized for this client_id", null);

                return false;
            }
            if this->responseTypes["code"]->enforceRedirect() && !redirect_uri {
                response->setError(400, "redirect_uri_mismatch", "The redirect URI is mandatory and was not supplied");

                return false;
            }
        } else {
            if !this->config["allow_implicit"] {
                response->setRedirect(this->config["redirect_status_code"], redirect_uri, state, "unsupported_response_type", "implicit grant type not supported", null);

                return false;
            }
            if !this->clientStorage->checkRestrictedGrantType(client_id, "implicit") {
                response->setRedirect(this->config["redirect_status_code"], redirect_uri, state, "unauthorized_client", "The grant type is unauthorized for this client_id", null);

                return false;
            }
        }
        var requestedScope, clientScope, defaultScope;
        // validate requested scope if it exists
        let requestedScope = this->scopeUtil->getScopeFromRequest(request);

        if requestedScope {
            // restrict scope by client specific scope if applicable,
            // otherwise verify the scope exists
            let clientScope = this->clientStorage->getClientScope(client_id);
            if (empty clientScope && !this->scopeUtil->scopeExists(requestedScope)) || (!empty clientScope && !this->scopeUtil->checkScope(requestedScope, clientScope)) {
                response->setRedirect(this->config["redirect_status_code"], redirect_uri, state, "invalid_scope", "An unsupported scope was requested", null);

                return false;
            }
        } else {
            // use a globally-defined default scope
            let defaultScope = this->scopeUtil->getDefaultScope(client_id);

            if false === defaultScope {
                response->setRedirect(this->config["redirect_status_code"], redirect_uri, state, "invalid_client", "This application requires you specify a scope parameter", null);

                return false;
            }

            let requestedScope = defaultScope;
        }

        // Validate state parameter exists (if configured to enforce this)
        if this->config["enforce_state"] && !state {
            response->setRedirect(this->config["redirect_status_code"], redirect_uri, null, "invalid_request", "The state parameter is required");

            return false;
        }

        // save the input data and return true
        let this->scope = requestedScope;
        let this->state = state;
        let this->client_id = client_id;
        // Only save the SUPPLIED redirect URI (@see http://tools.ietf.org/html/rfc6749#section-4.1.3)
        let this->redirect_uri = supplied_redirect_uri;
        let this->response_type = response_type;

        return true;
    }

    /**
     * Build the absolute URI based on supplied URI and parameters.
     *
     * @param string $uri    An absolute URI.
     * @param array  $params Parameters to be append as GET.
     *
     * @return string
     * An absolute URI with supplied parameters.
     *
     * @ingroup oauth2_section_4
     */
    private function buildUri(uri, params)
    {
        var parse_url, k, v;
        let parse_url = parse_url(uri);

        // Add our params to the parsed uri
        for k, v in params {
            if isset parse_url[k] {
                let parse_url[k] .= "&" . http_build_query(v, "", "&");
            } else {
                let parse_url[k] = http_build_query(v, "", "&");
            }
        }

        // Put the uri back together
        return
              (isset parse_url["scheme"] ? parse_url["scheme"] . "://" : "")
            . (isset parse_url["user"] ? parse_url["user"]
            . (isset parse_url["pass"] ? ":" . parse_url["pass"] : "") . "@" : "")
            . (isset parse_url["host"] ? parse_url["host"] : "")
            . (isset parse_url["port"] ? ":" . parse_url["port"] : "")
            . (isset parse_url["path"] ? parse_url["path"] : "")
            . (isset parse_url["query"] && !empty parse_url["query"] ? "?" . parse_url["query"] : "")
            . (isset parse_url["fragment"] ? "#" . parse_url["fragment"] : "")
        ;
    }

    protected function getValidResponseTypes()
    {
        return [self::RESPONSE_TYPE_ACCESS_TOKEN, self::RESPONSE_TYPE_AUTHORIZATION_CODE];
    }

    /**
     * Internal method for validating redirect URI supplied
     *
     * @param string $inputUri The submitted URI to be validated
     * @param string $registeredUriString The allowed URI(s) to validate against.  Can be a space-delimited string of URIs to
     *                                    allow for multiple URIs
     * @return bool
     * @see http://tools.ietf.org/html/rfc6749#section-3.1.2
     */
    protected function validateRedirectUri(inputUri, registeredUriString)
    {
        if !inputUri || !registeredUriString {
            return false; // if either one is missing, assume INVALID
        }
        var registered_uris, registered_uri;
        let registered_uris = explode(" ", registeredUriString);

        for registered_uri in registered_uris {
            if this->config["require_exact_redirect_uri"] {
                // the input uri is validated against the registered uri using exact match
                if strcmp(inputUri, registered_uri) === 0 {
                    return true;
                }
            } else {
                var registered_uri_length;
                let registered_uri_length = strlen(registered_uri);
                if registered_uri_length === 0 {
                    return false;
                }

                // the input uri is validated against the registered uri using case-insensitive match of the initial string
                // i.e. additional query parameters may be applied
                if strcasecmp(substr(inputUri, 0, registered_uri_length), registered_uri) === 0 {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * Convenience method to access the scope
     *
     * @return string
     */
    public function getScope()
    {
        return this->scope;
    }

    /**
     * Convenience method to access the state
     *
     * @return int
     */
    public function getState()
    {
        return this->state;
    }

    /**
     * Convenience method to access the client id
     *
     * @return mixed
     */
    public function getClientId()
    {
        return this->client_id;
    }

    /**
     * Convenience method to access the redirect url
     *
     * @return string
     */
    public function getRedirectUri()
    {
        return this->redirect_uri;
    }

    /**
     * Convenience method to access the response type
     *
     * @return string
     */
    public function getResponseType()
    {
        return this->response_type;
    }
}
