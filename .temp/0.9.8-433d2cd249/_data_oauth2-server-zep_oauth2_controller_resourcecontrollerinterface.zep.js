[
    {
        "type": "comment",
        "value": "**\n *  This controller is called when a \"resource\" is requested.\n *  call verifyResourceRequest in order to determine if the request\n *  contains a valid token.\n *\n *  ex:\n *  > if (!$resourceController->verifyResourceRequest(OAuth2\\Request::createFromGlobals(), $response = new OAuth2\\Response())) {\n *  >     $response->send(); \/\/ authorization failed\n *  >     die();\n *  > }\n *  > return json_encode($resource); \/\/ valid token!  Send the stuff!\n *\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
        "line": 16,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\Controller",
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
        "line": 18,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\RequestInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
                "line": 18,
                "char": 28
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
        "line": 19,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\ResponseInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
                "line": 19,
                "char": 29
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
        "line": 21,
        "char": 9
    },
    {
        "type": "interface",
        "name": "ResourceControllerInterface",
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "verifyResourceRequest",
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
                                "line": 29,
                                "char": 68
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
                            "line": 29,
                            "char": 69
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
                                "line": 29,
                                "char": 98
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
                            "line": 29,
                            "char": 99
                        },
                        {
                            "type": "parameter",
                            "name": "scope",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
                                "line": 29,
                                "char": 121
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
                            "line": 29,
                            "char": 121
                        }
                    ],
                    "docblock": "**\n     * @param OAuth2\\RequestInterface request - The current http request\n     * @param OAuth2\\ResponseInterface response- An instance of OAuth2\\ResponseInterface to contain the response data\n     * @param string scope\n     * @return boolean\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
                                "line": 29,
                                "char": 130
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
                        "line": 29,
                        "char": 130
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
                    "line": 29,
                    "last-line": 35,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getAccessTokenData",
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
                                "line": 36,
                                "char": 65
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
                            "line": 36,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
                                "line": 36,
                                "char": 95
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
                            "line": 36,
                            "char": 96
                        }
                    ],
                    "docblock": "**\n     * @param OAuth2\\RequestInterface request - The current http request\n     * @param OAuth2\\ResponseInterface response- An instance of OAuth2\\ResponseInterface to contain the response data\n     * @return string | null\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
                                "line": 36,
                                "char": 108
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
                                "line": 36,
                                "char": 114
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
                        "line": 36,
                        "char": 114
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
                    "line": 36,
                    "last-line": 37,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
            "line": 37,
            "char": 1
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/resourcecontrollerinterface.zep",
        "line": 0,
        "char": 0
    }
]