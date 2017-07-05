[
    {
        "type": "comment",
        "value": "**\n *  This controller is called when a token is being requested.\n *  it is called to handle all grant types the application supports.\n *  It also validates the client's credentials\n *\n *  ex:\n *  > $tokenController->handleTokenRequest(OAuth2\\Request::createFromGlobals(), $response = new OAuth2\\Response());\n *  > $response->send();\n *\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/tokencontrollerinterface.zep",
        "line": 12,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\Controller",
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/tokencontrollerinterface.zep",
        "line": 14,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\RequestInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/tokencontrollerinterface.zep",
                "line": 14,
                "char": 28
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/tokencontrollerinterface.zep",
        "line": 15,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\ResponseInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/tokencontrollerinterface.zep",
                "line": 15,
                "char": 29
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/tokencontrollerinterface.zep",
        "line": 17,
        "char": 9
    },
    {
        "type": "interface",
        "name": "TokenControllerInterface",
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "handleTokenRequest",
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/tokencontrollerinterface.zep",
                                "line": 25,
                                "char": 65
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/tokencontrollerinterface.zep",
                            "line": 25,
                            "char": 66
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/tokencontrollerinterface.zep",
                                "line": 25,
                                "char": 95
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/tokencontrollerinterface.zep",
                            "line": 25,
                            "char": 96
                        }
                    ],
                    "docblock": "**\n     * handleTokenRequest\n     *\n     * @param OAuth2\\RequestInterface request - The current http request\n     * @param OAuth2\\ResponseInterface response- An instance of OAuth2\\ResponseInterface to contain the response data\n     *",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/tokencontrollerinterface.zep",
                        "line": 25,
                        "char": 105
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/tokencontrollerinterface.zep",
                    "line": 25,
                    "last-line": 32,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "grantAccessToken",
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/tokencontrollerinterface.zep",
                                "line": 33,
                                "char": 63
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/tokencontrollerinterface.zep",
                            "line": 33,
                            "char": 64
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/tokencontrollerinterface.zep",
                                "line": 33,
                                "char": 93
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/tokencontrollerinterface.zep",
                            "line": 33,
                            "char": 94
                        }
                    ],
                    "docblock": "**\n     * grantAccessToken\n     *\n     * @param OAuth2\\RequestInterface request - The current http request\n     * @param OAuth2\\ResponseInterface response- An instance of OAuth2\\ResponseInterface to contain the response data\n     *",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/tokencontrollerinterface.zep",
                        "line": 33,
                        "char": 103
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/tokencontrollerinterface.zep",
                    "line": 33,
                    "last-line": 34,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/tokencontrollerinterface.zep",
            "line": 34,
            "char": 1
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/tokencontrollerinterface.zep",
        "line": 0,
        "char": 0
    }
]