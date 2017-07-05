[
    {
        "type": "comment",
        "value": "**\n *  This controller is called when a user should be authorized\n *  by an authorization server.  As OAuth2 does not handle\n *  authorization directly, this controller ensures the request is valid, but\n *  requires the application to determine the value of $is_authorized\n *\n *  ex:\n *  > $user_id = $this->somehowDetermineUserId();\n *  > $is_authorized = $this->somehowDetermineUserAuthorization();\n *  > $response = new OAuth2\\Response();\n *  > $authorizeController->handleAuthorizeRequest(\n *  >     OAuth2\\Request::createFromGlobals(),\n *  >     $response,\n *  >     $is_authorized,\n *  >     $user_id);\n *  > $response->send();\n *\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
        "line": 21,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\Controller",
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
        "line": 23,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\RequestInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                "line": 23,
                "char": 28
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
        "line": 24,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\ResponseInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                "line": 24,
                "char": 29
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
        "line": 26,
        "char": 9
    },
    {
        "type": "interface",
        "name": "AuthorizeControllerInterface",
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "handleAuthorizeRequest",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "request",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "RequestInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                                "line": 46,
                                "char": 69
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                            "line": 46,
                            "char": 70
                        },
                        {
                            "type": "parameter",
                            "name": "response",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "ResponseInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                                "line": 46,
                                "char": 99
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                            "line": 46,
                            "char": 100
                        },
                        {
                            "type": "parameter",
                            "name": "is_authorized",
                            "const": 0,
                            "data-type": "bool",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                            "line": 46,
                            "char": 123
                        },
                        {
                            "type": "parameter",
                            "name": "user_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                                "line": 46,
                                "char": 147
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                            "line": 46,
                            "char": 147
                        }
                    ],
                    "docblock": "**\n     * @param OAuth2\\RequestInterface request - The current http request\n     * @param OAuth2\\ResponseInterface response- An instance of OAuth2\\ResponseInterface to contain the response data\n     * @param boolean is_authorized\n     * @param string user_id\n     *",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                        "line": 46,
                        "char": 156
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                    "line": 46,
                    "last-line": 52,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "validateAuthorizeRequest",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "request",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "RequestInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                                "line": 53,
                                "char": 71
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                            "line": 53,
                            "char": 72
                        },
                        {
                            "type": "parameter",
                            "name": "response",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "ResponseInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                                "line": 53,
                                "char": 101
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                            "line": 53,
                            "char": 102
                        }
                    ],
                    "docblock": "**\n     * @param OAuth2\\RequestInterface request - The current http request\n     * @param OAuth2\\ResponseInterface response- An instance of OAuth2\\ResponseInterface to contain the response data\n     * @return boolean\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                                "line": 53,
                                "char": 114
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                        "line": 53,
                        "char": 114
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                    "line": 53,
                    "last-line": 54,
                    "char": 19
                }
            ],
            "constants": [
                {
                    "type": "const",
                    "name": "RESPONSE_TYPE_AUTHORIZATION_CODE",
                    "default": {
                        "type": "string",
                        "value": "code",
                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                        "line": 37,
                        "char": 52
                    },
                    "docblock": "**\n     * List of possible authentication response types.\n     * The \"authorization_code\" mechanism exclusively supports \"code\"\n     * and the \"implicit\" mechanism exclusively supports \"token\".\n     *\n     * @var string\n     * @see http:\/\/tools.ietf.org\/html\/rfc6749#section-4.1.1\n     * @see http:\/\/tools.ietf.org\/html\/rfc6749#section-4.2.1\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                    "line": 38,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "RESPONSE_TYPE_ACCESS_TOKEN",
                    "default": {
                        "type": "string",
                        "value": "token",
                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                        "line": 38,
                        "char": 47
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
                    "line": 45,
                    "char": 6
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
            "line": 54,
            "char": 1
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontrollerinterface.zep",
        "line": 0,
        "char": 0
    }
]