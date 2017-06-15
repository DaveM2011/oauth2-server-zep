
/**
* Server class for OAuth2
* This class serves as a convience class which wraps the other Controller classes
*
* @see OAuth2\Controller\ResourceController
* @see OAuth2\Controller\AuthorizeController
* @see OAuth2\Controller\TokenController
*/

namespace OAuth2;


// use OAuth2\OpenID\Controller\UserInfoControllerInterface;
// use OAuth2\OpenID\Controller\UserInfoController;
// use OAuth2\OpenID\Controller\AuthorizeController as OpenIDAuthorizeController;
// use OAuth2\OpenID\ResponseType\AuthorizationCode as OpenIDAuthorizationCodeResponseType;
// use OAuth2\OpenID\Storage\AuthorizationCodeInterface as OpenIDAuthorizationCodeInterface;
// use OAuth2\OpenID\GrantType\AuthorizationCode as OpenIDAuthorizationCodeGrantType;
// use OAuth2\OpenID\ResponseType\IdToken;
// use OAuth2\OpenID\ResponseType\IdTokenToken;

use OAuth2\Controller\AuthorizeControllerInterface;
use OAuth2\Controller\AuthorizeController;
use OAuth2\Controller\ResourceControllerInterface;
use OAuth2\Controller\ResourceController;
use OAuth2\Controller\TokenControllerInterface;
use OAuth2\Controller\TokenController;
use OAuth2\ClientAssertionType\ClientAssertionTypeInterface;
use OAuth2\ClientAssertionType\HttpBasic;
use OAuth2\ResponseType\ResponseTypeInterface;
use OAuth2\ResponseType\AuthorizationCode as AuthorizationCodeResponseType;
use OAuth2\ResponseType\AccessToken;
use OAuth2\ResponseType\JwtAccessToken;
use OAuth2\TokenType\TokenTypeInterface;
use OAuth2\TokenType\Bearer;
use OAuth2\GrantType\GrantTypeInterface;
use OAuth2\GrantType\UserCredentials;
use OAuth2\GrantType\ClientCredentials;
use OAuth2\GrantType\RefreshToken;
use OAuth2\GrantType\AuthorizationCode;
use OAuth2\Storage\ClientInterface;
use OAuth2\Storage\ClientCredentialsInterface;
use OAuth2\Storage\JwtAccessToken as JwtAccessTokenStorage;
use OAuth2\Storage\JwtAccessTokenInterface;
use OAuth2\Storage\StorageInterface;

abstract class Server implements ResourceControllerInterface,
    AuthorizeControllerInterface,
    TokenControllerInterface
{
    // misc properties
    protected response;
    protected config;
    protected storages;

    // servers
    protected authorizeController;
    protected tokenController;
    protected resourceController;
    protected userInfoController;

    // config classes
    protected grantTypes;
    protected responseTypes;
    protected tokenType;
    protected scopeUtil;
    protected clientAssertionType;

    /**
     * @var array
     */
    protected storageMap = [];
    protected responseTypeMap = [];

    /**
     * @param mixed storage       (array or OAuth2\Storage) - single object or array of objects implementing the
     *                             required storage types (ClientCredentialsInterface and AccessTokenInterface as a minimum)
     * @param array $config        specify a different token lifetime, token header name, etc
     * @param array $grantTypes    An array of OAuth2\GrantType\GrantTypeInterface to use for granting access tokens
     * @param array $responseTypes Response types to use.  array keys should be "code" and and "token" for
     *                             Access Token and Authorization Code response types
     * @param OAuth2\TokenType\TokenTypeInterface                     $tokenType           The token type object to use. Valid token types are "bearer" and "mac"
     * @param OAuth2\ScopeInterface                                   $scopeUtil           The scope utility class to use to validate scope
     * @param OAuth2\ClientAssertionType\ClientAssertionTypeInterface $clientAssertionType The method in which to verify the client identity.  Default is HttpBasic
     *
     * @ingroup oauth2_section_7
     */
    public function __construct(array storage = [], array config = [], array grantTypes = [], array responseTypes = [], <TokenTypeInterface> tokenType = null, <ScopeInterface> scopeUtil = null, <ClientAssertionTypeInterface> clientAssertionType = null)
    {
        var key, service, type;

        let this->storageMap =    [
            "access_token"      : "OAuth2\\Storage\\AccessTokenInterface",
            "authorization_code": "OAuth2\\Storage\\AuthorizationCodeInterface",
            "client_credentials": "OAuth2\\Storage\\ClientCredentialsInterface",
            "client"            : "OAuth2\\Storage\\ClientInterface",
            "refresh_token"     : "OAuth2\\Storage\\RefreshTokenInterface",
            "user_credentials"  : "OAuth2\\Storage\\UserCredentialsInterface",
            "user_claims"       : "OAuth2\\OpenID\\Storage\\UserClaimsInterface",
            "public_key"        : "OAuth2\\Storage\\PublicKeyInterface",
            "jwt_bearer"        : "OAuth2\\Storage\\JWTBearerInterface",
            "scope"             : "OAuth2\\Storage\\ScopeInterface"
        ];

        let this->responseTypeMap = [
            "token"         : "OAuth2\\ResponseType\\AccessTokenInterface",
            "code"          : "OAuth2\\ResponseType\\AuthorizationCodeInterface",
            "id_token"      : "OAuth2\\OpenID\\ResponseType\\IdTokenInterface",
            "id_token token": "OAuth2\\OpenID\\ResponseType\\IdTokenTokenInterface"
        ];

        let this->storages = [];

        if typeof storage != "array" {
            let storage = [storage];
        }
        for key, service in storage {
            this->addStorage(service, key);
        }

        // merge all config values.  These get passed to our controller objects
        let this->config = array_merge([
            "use_jwt_access_tokens"            : false,
            "store_encrypted_token_string"     : true,
            "use_openid_connect"               : false,
            "id_lifetime"                      : 3600,
            "access_lifetime"                  : 3600,
            "www_realm"                        : "Service",
            "token_param_name"                 : "access_token",
            "token_bearer_header_name"         : "Bearer",
            "enforce_state"                    : true,
            "require_exact_redirect_uri"       : true,
            "allow_implicit"                   : false,
            "allow_credentials_in_request_body": true,
            "allow_public_clients"             : true,
            "always_issue_new_refresh_token"   : false
        ], config);

        for key, type in grantTypes {
            this->addGrantType(type, key);
        }

        for key, type in responseTypes {
            this->addResponseType(type, key);
        }

        let this->tokenType = tokenType;
        let this->scopeUtil = scopeUtil;
        let this->clientAssertionType = clientAssertionType;
    }

    /**
     * Set a storage object for the server
     *
     * @param OAuth\Storage\StorageInterface storage An object implementing one of the Storage interfaces
     * @param string key If null, the storage is set to the key of each storage interface it implements
     *
     * @see storageMap
     */
    public function addStorage(storage, string! key = null) -> void
    {
        bool setStorage;
        var type, interfaceClass;

        // if explicitly set to a valid key, do not "magically" set below
        if isset this->storageMap[key] {
            if storage != null && !is_subclass_of(storage, this->storageMap[key]) {
                throw new \InvalidArgumentException(sprintf("storage of type \"%s\" must implement interface \"%s\"", key, this->storageMap[key]));
            }
            let this->storages[key] = storage;

            // special logic to handle "client" and "client_credentials" strangeness
            if key === "client" && !isset this->storages["client_credentials"] {
                if is_subclass_of(storage, "OAuth2\\Storage\\ClientCredentialsInterface") {
                    let this->storages["client_credentials"] = storage;
                }
            } elseif (key === "client_credentials" && !isset this->storages["client"]) {
                if is_subclass_of(storage, "OAuth2\\Storage\\ClientInterface") {
                    let this->storages["client"] = storage;
                }
            }
        } elseif (typeof key != "null" && !is_numeric(key)) {
            throw new \InvalidArgumentException(sprintf("unknown storage key \"%s\", must be one of [%s]", key, implode(", ", array_keys(this->storageMap))));
        } else {
            let setStorage = false;
            for type, interfaceClass in this->storageMap {
                if is_subclass_of(storage, interfaceClass) {
                    let this->storages[type] = storage;
                    let setStorage = true;
                }
            }

            if !setStorage {
                throw new \InvalidArgumentException(sprintf("storage of class \"%s\" must implement one of [%s]", get_class(storage), implode(", ", this->storageMap)));
            }
        }
    }

    public function addGrantType(<GrantTypeInterface> grantType, string! key = null) -> void
    {
        if typeof key == "string" {
            let this->grantTypes[key] = grantType;
        } else {
            let this->grantTypes[grantType->getQuerystringIdentifier()] = grantType;
        }
        // persist added grant type down to TokenController
        //if this->tokenController != null {
            this->getTokenController()->addGrantType(grantType);
        //}
    }

    public function addResponseType(responseType, string! key = null) -> void
    {
        bool setResponse = false;
        var type, interfaceClass;

        let key = this->normalizeResponseType(key);

        if isset this->responseTypeMap[key] {
            if !is_subclass_of(responseType, this->responseTypeMap[key]) {
                throw new \InvalidArgumentException(sprintf("responseType of type \"%s\" must implement interface \"%s\"", key, this->responseTypeMap[key]));
            }
            let this->responseTypes[key] = responseType;
        } elseif (key != null && !is_numeric(key)) {
            throw new \InvalidArgumentException(sprintf("unknown responseType key \"%s\", must be one of [%s]", key, implode(", ", array_keys(this->responseTypeMap))));
        } else {
            let setResponse = false;
            for type, interfaceClass in this->responseTypeMap {
                if is_subclass_of(responseType, interfaceClass) {
                    let this->responseTypes[type] = responseType;
                    let setResponse = true;
                }
            }

            if !setResponse {
                throw new \InvalidArgumentException(sprintf("Unknown response type %s.  Please implement one of [%s]", get_class(responseType), implode(", ", this->responseTypeMap)));
            }
        }
    }

    public function setAuthorizeController(<AuthorizeControllerInterface> authorizeController) -> void
    {
        let this->authorizeController = authorizeController;
    }

    public function getAuthorizeController() -> <AuthorizeControllerInterface>
    {
        if typeof this->authorizeController == "null" {
            let this->authorizeController = this->createDefaultAuthorizeController();
        }
        return this->authorizeController;
    }

    public function setTokenController(<TokenControllerInterface> tokenController) -> void
    {
        let this->tokenController = tokenController;
    }

    public function getTokenController() -> <TokenControllerInterface>
    {
        if this->tokenController == null {
            let this->tokenController = this->createDefaultTokenController();
        }
        return this->tokenController;
    }

    public function setResourceController(<ResourceControllerInterface> resourceController) -> void
    {
        let this->resourceController = resourceController;
    }

    public function getResourceController() -> <ResourceControllerInterface>
    {
        if typeof this->resourceController == "null" {
            let this->resourceController = this->{"createDefaultResourceController"}();
        }
        return this->resourceController;
    }

    protected function normalizeResponseType(string! name) -> string
    {
        var types;

        // for multiple-valued response types - make them alphabetical
        if !empty name && strpos(name, " ") !== false {
            let types = explode(" ", name);
            sort(types);
            let name = implode(" ", types);
        }

        return name;
    }

    protected function createDefaultAuthorizeController()
    {
        if !isset this->storages["client"] {
            throw new \LogicException("You must supply a storage object implementing \OAuth2\Storage\ClientInterface to use the authorize server");
        }
        if 0 == count(this->responseTypes) {
            let this->responseTypes = this->getDefaultResponseTypes();
        }
        if this->config["use_openid_connect"] && !isset this->responseTypes["id_token"] {
            let this->responseTypes["id_token"] = this->createDefaultIdTokenResponseType();
            if this->config["allow_implicit"] {
                let this->responseTypes["id_token token"] = this->createDefaultIdTokenTokenResponseType();
            }
        }
        var config;
        let config = array_intersect_key(this->config, array_flip(explode(" ", "allow_implicit enforce_state require_exact_redirect_uri")));

        if this->config["use_openid_connect"] {
            return new OpenIDAuthorizeController(this->storages["client"], this->responseTypes, config, this->getScopeUtil());
        }

        return new AuthorizeController(this->storages["client"], this->responseTypes, config, this->getScopeUtil());
    }

    protected function createDefaultTokenController()
    {
        if 0 == count(this->grantTypes) {
            let this->grantTypes = this->getDefaultGrantTypes();
        }

        if is_null(this->clientAssertionType) {
            var grantType, config;
            // see if HttpBasic assertion type is requred.  If so, then create it from storage classes.
            for grantType in this->grantTypes {
                if !(grantType instanceof ClientAssertionTypeInterface) {
                    if !isset this->storages["client_credentials"] {
                        throw new \LogicException("You must supply a storage object implementing OAuth2\Storage\ClientCredentialsInterface to use the token server");
                    }
                    let config = array_intersect_key(this->config, array_flip(explode(" ", "allow_credentials_in_request_body allow_public_clients")));
                    let this->clientAssertionType = new HttpBasic(this->storages["client_credentials"], config);
                    break;
                }
            }
        }

        if !isset this->storages["client"] {
            throw new \LogicException("You must supply a storage object implementing OAuth2\Storage\ClientInterface to use the token server");
        }
        var accessTokenResponseType;
        let accessTokenResponseType = this->getAccessTokenResponseType();

        return new TokenController(accessTokenResponseType, this->storages["client"], this->grantTypes, this->clientAssertionType, this->getScopeUtil());
    }

    protected function getDefaultResponseTypes()
    {
        var responseTypes = [];

        if this->config["allow_implicit"] {
            let responseTypes["token"] = this->getAccessTokenResponseType();
        }

        if this->config["use_openid_connect"] {
            let responseTypes["id_token"] = this->getIdTokenResponseType();
            if this->config["allow_implicit"] {
                let responseTypes["id_token token"] = this->getIdTokenTokenResponseType();
            }
        }

        if isset this->storages["authorization_code"] {
            var config;
            let config = array_intersect_key(this->config, array_flip(explode(" ", "enforce_redirect auth_code_lifetime")));
            if this->config["use_openid_connect"] {
                if !(this->storages["authorization_code"] instanceof OpenIDAuthorizationCodeInterface) {
                    throw new \LogicException("Your authorization_code storage must implement OAuth2\OpenID\Storage\AuthorizationCodeInterface to work when 'use_openid_connect' is true");
                }
                let responseTypes["code"] = new OpenIDAuthorizationCodeResponseType(this->storages["authorization_code"], config);
                let responseTypes["code id_token"] = new CodeIdToken(responseTypes["code"], responseTypes["id_token"]);
            } else {
                let responseTypes["code"] = new AuthorizationCodeResponseType(this->storages["authorization_code"], config);
            }
        }

        if count(responseTypes) == 0 {
            throw new \LogicException("You must supply an array of response_types in the constructor or implement a OAuth2\Storage\AuthorizationCodeInterface storage object or set 'allow_implicit' to true and implement a OAuth2\Storage\AccessTokenInterface storage object");
        }

        return responseTypes;
    }

    protected function createDefaultResourceController()
    {
        if this->config["use_jwt_access_tokens"] {
            // overwrites access token storage with crypto token storage if "use_jwt_access_tokens" is set
            if !isset this->storages["access_token"] || !(this->storages["access_token"] instanceof JwtAccessTokenInterface) {
                let this->storages["access_token"] = this->createDefaultJwtAccessTokenStorage();
            }
        } elseif !isset this->storages["access_token"] {
            throw new \LogicException("You must supply a storage object implementing OAuth2\Storage\AccessTokenInterface or use JwtAccessTokens to use the resource server");
        }

        if !this->tokenType {
            let this->tokenType = this->getDefaultTokenType();
        }

        var config;
        let config = array_intersect_key(this->config, ["www_realm": ""]);

        return new ResourceController(this->tokenType, this->storages["access_token"], config, this->getScopeUtil());
    }

    protected function createDefaultUserInfoController()
    {
        if this->config["use_jwt_access_tokens"] {
            // overwrites access token storage with crypto token storage if "use_jwt_access_tokens" is set
            if !isset this->storages["access_token"] || !(this->storages["access_token"] instanceof JwtAccessTokenInterface) {
                let this->storages["access_token"] = this->createDefaultJwtAccessTokenStorage();
            }
        } elseif !isset this->storages["access_token"] {
            throw new \LogicException("You must supply a storage object implementing OAuth2\Storage\AccessTokenInterface or use JwtAccessTokens to use the UserInfo server");
        }

        if !isset this->storages["user_claims"] {
            throw new \LogicException("You must supply a storage object implementing OAuth2\OpenID\Storage\UserClaimsInterface to use the UserInfo server");
        }

        if !this->tokenType {
            let this->tokenType = this->getDefaultTokenType();
        }

        var config;
        let config = array_intersect_key(this->config, ["www_realm": ""]);

        return new UserInfoController(this->tokenType, this->storages["access_token"], this->storages["user_claims"], config, this->getScopeUtil());
    }


    protected function getDefaultGrantTypes()
    {
        var grantTypes = [], config;

        if isset this->storages["user_credentials"] {
            let grantTypes["password"] = new UserCredentials(this->storages["user_credentials"]);
        }

        if isset this->storages["client_credentials"] {
            let config = array_intersect_key(this->config, ["allow_credentials_in_request_body": ""]);
            let grantTypes["client_credentials"] = new ClientCredentials(this->storages["client_credentials"], config);
        }

        if isset this->storages["refresh_token"] {
            let config = array_intersect_key(this->config, array_flip(explode(" ", "always_issue_new_refresh_token unset_refresh_token_after_use")));
            let grantTypes["refresh_token"] = new RefreshToken(this->storages["refresh_token"], config);
        }

        if isset this->storages["authorization_code"] {
            if this->config["use_openid_connect"] {
                if !(this->storages["authorization_code"] instanceof OpenIDAuthorizationCodeInterface) {
                    throw new \LogicException("Your authorization_code storage must implement OAuth2\OpenID\Storage\AuthorizationCodeInterface to work when 'use_openid_connect' is true");
                }
                let grantTypes["authorization_code"] = new OpenIDAuthorizationCodeGrantType(this->storages["authorization_code"]);
            } else {
                let grantTypes["authorization_code"] = new AuthorizationCode(this->storages["authorization_code"]);
            }
        }

        if count(grantTypes) == 0 {
            throw new \LogicException("Unable to build default grant types - You must supply an array of grant_types in the constructor");
        }

        return grantTypes;
    }

    protected function getAccessTokenResponseType()
    {
        if isset this->responseTypes["token"] {
            return this->responseTypes["token"];
        }

        if this->config["use_jwt_access_tokens"] {
            return this->createDefaultJwtAccessTokenResponseType();
        }

        return this->createDefaultAccessTokenResponseType();
    }

    protected function getIdTokenResponseType()
    {
        if isset this->responseTypes["id_token"] {
            return this->responseTypes["id_token"];
        }

        return this->createDefaultIdTokenResponseType();
    }

    protected function getIdTokenTokenResponseType()
    {
        if isset this->responseTypes["id_token token"] {
            return this->responseTypes["id_token token"];
        }

        return this->createDefaultIdTokenTokenResponseType();
    }

    public function getScopeUtil()
    {
        if !this->scopeUtil {
            var storage;
            let storage = isset this->storages["scope"] ? this->storages["scope"] : null;
            let this->scopeUtil = new Scope(storage);
        }
        return this->scopeUtil;
    }

    protected function getDefaultTokenType()
    {
        var config;
        let config = array_intersect_key(this->config, array_flip(explode(" ", "token_param_name token_bearer_header_name")));

        return new Bearer(config);
    }

    protected function createDefaultJwtAccessTokenStorage()
    {
        if !isset this->storages["public_key"] {
            throw new \LogicException("You must supply a storage object implementing OAuth2\Storage\PublicKeyInterface to use crypto tokens");
        }
        var tokenStorage = null;
        if !empty this->config["store_encrypted_token_string"] && isset this->storages["access_token"] {
            let tokenStorage = this->storages["access_token"];
        }
        // wrap the access token storage as required.
        return new JwtAccessTokenStorage(this->storages["public_key"], tokenStorage);
    }

    protected function createDefaultJwtAccessTokenResponseType()
    {
        if !isset this->storages["public_key"] {
            throw new \LogicException("You must supply a storage object implementing OAuth2\Storage\PublicKeyInterface to use crypto tokens");
        }

        var tokenStorage = null;
        if isset this->storages["access_token"] {
            let tokenStorage = this->storages["access_token"];
        }

        var refreshStorage = null;
        if isset this->storages["refresh_token"] {
            let refreshStorage = this->storages["refresh_token"];
        }

        var config;
        let config = array_intersect_key(this->config, array_flip(explode(" ", "store_encrypted_token_string issuer access_lifetime refresh_token_lifetime")));

        return new JwtAccessToken(this->storages["public_key"], tokenStorage, refreshStorage, config);
    }

    protected function createDefaultAccessTokenResponseType()
    {
        if !isset this->storages["access_token"] {
            throw new \LogicException("You must supply a response type implementing OAuth2\ResponseType\AccessTokenInterface, or a storage object implementing OAuth2\Storage\AccessTokenInterface to use the token server");
        }

        var refreshStorage = null;
        if isset this->storages["refresh_token"] {
            let refreshStorage = this->storages["refresh_token"];
        }
        
        var config;
        let config = array_intersect_key(this->config, array_flip(explode(" ", "access_lifetime refresh_token_lifetime")));
        let config["token_type"] = this->tokenType ? this->tokenType->getTokenType() :  this->getDefaultTokenType()->getTokenType();

        return new AccessToken(this->storages["access_token"], refreshStorage, config);
    }

    protected function createDefaultIdTokenResponseType()
    {
        if !isset this->storages["user_claims"] {
            throw new \LogicException("You must supply a storage object implementing OAuth2\OpenID\Storage\UserClaimsInterface to use openid connect");
        }
        if !isset this->storages["public_key"] {
            throw new \LogicException("You must supply a storage object implementing OAuth2\Storage\PublicKeyInterface to use openid connect");
        }

        var config;
        let config = array_intersect_key(this->config, array_flip(explode(" ", "issuer id_lifetime")));

        return new IdToken(this->storages["user_claims"], this->storages["public_key"], config);
    }

    protected function createDefaultIdTokenTokenResponseType()
    {
        return new IdTokenToken(this->getAccessTokenResponseType(), this->getIdTokenResponseType());
    }

}
