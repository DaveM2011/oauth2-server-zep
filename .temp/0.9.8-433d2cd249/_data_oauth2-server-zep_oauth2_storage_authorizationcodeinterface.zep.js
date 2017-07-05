[
    {
        "type": "comment",
        "value": "**\n * Implement this interface to specify where the OAuth2 Server\n * should get\/save authorization codes for the \"Authorization Code\"\n * grant type\n *\n * @author Brent Shaffer <bshafs at gmail dot com>\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
        "line": 9,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\Storage",
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
        "line": 11,
        "char": 9
    },
    {
        "type": "interface",
        "name": "AuthorizationCodeInterface",
        "extends": [
            {
                "type": "variable",
                "value": "StorageInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
                "line": 12,
                "char": 1
            }
        ],
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getAuthorizationCode",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "code",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
                            "line": 47,
                            "char": 54
                        }
                    ],
                    "docblock": "**\n     * Fetch authorization code data (probably the most common grant type).\n     *\n     * Retrieve the stored data for the given authorization code.\n     *\n     * Required for OAuth2::GRANT_TYPE_AUTH_CODE.\n     *\n     * @param string code Authorization code to be check with.\n     *\n     * @return array\n     * An associative array as below, and NULL if the code is invalid\n     * @code\n     * return array(\n     *     \"client_id\"    => CLIENT_ID,      \/\/ REQUIRED Stored client identifier\n     *     \"user_id\"      => USER_ID,        \/\/ REQUIRED Stored user identifier\n     *     \"expires\"      => EXPIRES,        \/\/ REQUIRED Stored expiration in unix timestamp\n     *     \"redirect_uri\" => REDIRECT_URI,   \/\/ REQUIRED Stored redirect URI\n     *     \"scope\"        => SCOPE,          \/\/ OPTIONAL Stored scope values in space-separated string\n     * );\n     * @endcode\n     *\n     * @see http:\/\/tools.ietf.org\/html\/rfc6749#section-4.1\n     *\n     * @ingroup oauth2_section_4\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "array",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
                                "line": 47,
                                "char": 64
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
                        "line": 47,
                        "char": 64
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
                    "line": 47,
                    "last-line": 68,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setAuthorizationCode",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "code",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
                            "line": 69,
                            "char": 54
                        },
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
                            "line": 69,
                            "char": 73
                        },
                        {
                            "type": "parameter",
                            "name": "user_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
                            "line": 69,
                            "char": 90
                        },
                        {
                            "type": "parameter",
                            "name": "redirect_uri",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
                            "line": 69,
                            "char": 112
                        },
                        {
                            "type": "parameter",
                            "name": "expires",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
                            "line": 69,
                            "char": 125
                        },
                        {
                            "type": "parameter",
                            "name": "scope",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
                                "line": 69,
                                "char": 147
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
                            "line": 69,
                            "char": 147
                        }
                    ],
                    "docblock": "**\n     * Take the provided authorization code values and store them somewhere.\n     *\n     * This function should be the storage counterpart to getAuthCode().\n     *\n     * If storage fails for some reason, we're not currently checking for\n     * any sort of success\/failure, so you should bail out of the script\n     * and provide a descriptive fail message.\n     *\n     * Required for OAuth2::GRANT_TYPE_AUTH_CODE.\n     *\n     * @param string code Authorization code to be stored.\n     * @param string client_id Client identifier to be stored.\n     * @param string user_id User identifier to be stored.\n     * @param string redirect_uri Redirect URI(s) to be stored in a space-separated string.\n     * @param int expires Expiration to be stored as a Unix timestamp.\n     * @param string scope OPTIONAL Scopes to be stored in space-separated string.\n     *\n     * @ingroup oauth2_section_4\n     *",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
                        "line": 69,
                        "char": 156
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
                    "line": 69,
                    "last-line": 83,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "expireAuthorizationCode",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "code",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
                            "line": 84,
                            "char": 57
                        }
                    ],
                    "docblock": "**\n     * once an Authorization Code is used, it must be exipired\n     *\n     * @param string code\n     * @see http:\/\/tools.ietf.org\/html\/rfc6749#section-4.1.2\n     *\n     *    The client MUST NOT use the authorization code\n     *    more than once.  If an authorization code is used more than\n     *    once, the authorization server MUST deny the request and SHOULD\n     *    revoke (when possible) all tokens previously issued based on\n     *    that authorization code\n     *\n     *",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
                        "line": 84,
                        "char": 66
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
                    "line": 84,
                    "last-line": 85,
                    "char": 19
                }
            ],
            "constants": [
                {
                    "type": "const",
                    "name": "RESPONSE_TYPE_CODE",
                    "default": {
                        "type": "string",
                        "value": "code",
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
                        "line": 20,
                        "char": 38
                    },
                    "docblock": "**\n     * The Authorization Code grant type supports a response type of \"code\".\n     *\n     * @var string\n     * @see http:\/\/tools.ietf.org\/html\/rfc6749#section-1.4.1\n     * @see http:\/\/tools.ietf.org\/html\/rfc6749#section-4.2\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
                    "line": 46,
                    "char": 6
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
            "line": 85,
            "char": 1
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/authorizationcodeinterface.zep",
        "line": 0,
        "char": 0
    }
]