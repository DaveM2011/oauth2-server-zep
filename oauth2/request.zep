namespace OAuth2;

use LogicException;

/**
 * OAuth2\Request
 * This class is taken from the Symfony2 Framework and is part of the Symfony package.
 * See Symfony\Component\HttpFoundation\Request (https://github.com/symfony/symfony)
 */
class Request implements RequestInterface
{
    public attributes;
    public request;
    public query;
    public server;
    public files;
    public cookies;
    public headers;
    public content;

    /**
     * Constructor.
     *
     * @param array  $query      - The GET parameters
     * @param array  $request    - The POST parameters
     * @param array  $attributes - The request attributes (parameters parsed from the PATH_INFO, ...)
     * @param array  $cookies    - The COOKIE parameters
     * @param array  $files      - The FILES parameters
     * @param array  $server     - The SERVER parameters
     * @param string $content    - The raw body data
     * @param array  $headers    - The headers
     *
     * @api
     */
    public function __construct(array query = [], array request = [], array attributes = [], array cookies = [], array files = [], array server = [], content = null, array headers = null)
    {
        this->initialize(query, request, attributes, cookies, files, server, content, headers);
    }

    /**
     * Sets the parameters for this request.
     *
     * This method also re-initializes all properties.
     *
     * @param array  $query      - The GET parameters
     * @param array  $request    - The POST parameters
     * @param array  $attributes - The request attributes (parameters parsed from the PATH_INFO, ...)
     * @param array  $cookies    - The COOKIE parameters
     * @param array  $files      - The FILES parameters
     * @param array  $server     - The SERVER parameters
     * @param string $content    - The raw body data
     * @param array  $headers    - The headers
     *
     * @api
     */
    public function initialize(array query = [], array request = [], array attributes = [], array cookies = [], array files = [], array server = [], content = null, array headers = null)
    {
        let this->request = request;
        let this->query = query;
        let this->attributes = attributes;
        let this->cookies = cookies;
        let this->files = files;
        let this->server = server;
        let this->content = content;
        let this->headers = is_null(headers) ? this->getHeadersFromServer(this->server) : headers;
    }

    /**
     * @param string $name
     * @param mixed  $default
     * @return mixed
     */
    public function query(name, _default = null)
    {
        return isset this->query[name] ? this->query[name] : _default;
    }

    /**
     * @param string $name
     * @param mixed  $default
     * @return mixed
     */
    public function request(name, _default = null)
    {
        return isset this->request[name] ? this->request[name] : _default;
    }

    /**
     * @param string $name
     * @param mixed  $default
     * @return mixed
     */
    public function server(name, _default = null)
    {
        return isset this->server[name] ? this->server[name] : _default;
    }

    /**
     * @param string $name
     * @param mixed  $default
     * @return mixed
     */
    public function headers(name, _default = null)
    {
        var headers;
        let headers = array_change_key_case(this->headers);
        let name = strtolower(name);

        return isset headers[name] ? headers[name] : _default;
    }

    /**
     * @return array
     */
    public function getAllQueryParameters()
    {
        return this->query;
    }

    /**
     * Returns the request body content.
     *
     * @param boolean $asResource - If true, a resource will be returned
     * @return string|resource    - The request body content or a resource to read the body stream.
     *
     * @throws LogicException
     */
    public function getContent(asResource = false)
    {
        if false === this->content || (true == asResource && null !== this->content) {
            throw new LogicException("getContent() can only be called once when using the resource return type.");
        }

        if true == asResource {
            let this->content = false;

            return fopen("php://input", "rb");
        }

        if null == this->content {
            let this->content = file_get_contents("php://input");
        }

        return this->content;
    }

    /**
     * @param array $server
     * @return array
     */
    private function getHeadersFromServer(server)
    {
        var headers = [], key, value;
        for key, value in server {
            if 0 == strpos(key, "HTTP_") {
                let headers[substr(key, 5)] = value;
            }
            // CONTENT_* are not prefixed with HTTP_
            elseif in_array(key, ["CONTENT_LENGTH", "CONTENT_MD5", "CONTENT_TYPE"]) {
                let headers[key] = value;
            }
        }
        
        if isset server["PHP_AUTH_USER"] {
            let headers["PHP_AUTH_USER"] = server["PHP_AUTH_USER"];
            let headers["PHP_AUTH_PW"] = isset server["PHP_AUTH_PW"] ? server["PHP_AUTH_PW"] : "";
        } else {
            /*
             * php-cgi under Apache does not pass HTTP Basic user/pass to PHP by default
             * For this workaround to work, add this line to your .htaccess file:
             * RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
             *
             * A sample .htaccess file:
             * RewriteEngine On
             * RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
             * RewriteCond %{REQUEST_FILENAME} !-f
             * RewriteRule ^(.*)$ app.php [QSA,L]
             */

            var authorizationHeader;
            if isset server["HTTP_AUTHORIZATION"] {
                let authorizationHeader = server["HTTP_AUTHORIZATION"];
            } elseif isset server["REDIRECT_HTTP_AUTHORIZATION"] {
                let authorizationHeader = server["REDIRECT_HTTP_AUTHORIZATION"];
            } elseif function_exists("apache_request_headers") {
                var requestHeaders;
                let requestHeaders = call_user_func("apache_request_headers");

                // Server-side fix for bug in old Android versions (a nice side-effect of this fix means we don't care about capitalization for Authorization)
                let requestHeaders = array_combine(array_map("ucwords", array_keys(requestHeaders)), array_values(requestHeaders));

                if isset requestHeaders["Authorization"] {
                    let authorizationHeader = trim(requestHeaders["Authorization"]);
                }
            }

            if null != authorizationHeader {
                let headers["AUTHORIZATION"] = authorizationHeader;
                // Decode AUTHORIZATION header into PHP_AUTH_USER and PHP_AUTH_PW when authorization header is basic
                if 0 == stripos(authorizationHeader, "basic") {
                    var exploded;
                    let exploded = explode(":", base64_decode(substr(authorizationHeader, 6)));
                    if count(exploded) == 2 {
                        //list(headers["PHP_AUTH_USER"], headers["PHP_AUTH_PW"]) = exploded;
                        let headers["PHP_AUTH_USER"] = exploded[0];
                        let headers["PHP_AUTH_PW"] = exploded[1];
                    }
                }
            }
        }

        // PHP_AUTH_USER/PHP_AUTH_PW
        if isset headers["PHP_AUTH_USER"] {
            let headers["AUTHORIZATION"] = "Basic ".base64_encode(headers["PHP_AUTH_USER"].":".headers["PHP_AUTH_PW"]);
        }

        return headers;
    }

    /**
     * Creates a new request with values from PHP's super globals.
     *
     * @return Request - A new request
     *
     * @api
     */
    public static function createFromGlobals()
    {
        var request, contentType, requestMethod, data;

        /** @var Request $request */
        let request = create_instance_params(get_called_class(), [_GET, _POST, [], _COOKIE, _FILES, _SERVER]);
        
        let contentType = request->server("CONTENT_TYPE", "");
        let requestMethod = request->server("REQUEST_METHOD", "GET");
        if 0 === strpos(contentType, "application/x-www-form-urlencoded") && in_array(strtoupper(requestMethod), ["PUT", "DELETE"]) {
            parse_str(request->getContent(), data);
            let request->request = data;
        } elseif 0 === strpos(contentType, "application/json") && in_array(strtoupper(requestMethod), ["POST", "PUT", "DELETE"]) {
            let data = json_decode(request->getContent(), true);
            let request->request = data;
        }

        return request;
    }
}
