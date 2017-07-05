[
    {
        "type": "namespace",
        "name": "OAuth2\\TokenType",
        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/tokentypeinterface.zep",
        "line": 4,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\RequestInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/tokentypeinterface.zep",
                "line": 4,
                "char": 28
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/tokentypeinterface.zep",
        "line": 5,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\ResponseInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/tokentypeinterface.zep",
                "line": 5,
                "char": 29
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/tokentypeinterface.zep",
        "line": 7,
        "char": 9
    },
    {
        "type": "interface",
        "name": "TokenTypeInterface",
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getTokenType",
                    "docblock": "**\n     * Token type identification string\n     *\n     * ex: \"bearer\" or \"mac\"\n     * @return string\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/tokentypeinterface.zep",
                                "line": 15,
                                "char": 45
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/tokentypeinterface.zep",
                        "line": 15,
                        "char": 45
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/tokentypeinterface.zep",
                    "line": 15,
                    "last-line": 20,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getAccessTokenParameter",
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/tokentypeinterface.zep",
                                "line": 21,
                                "char": 70
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/tokentypeinterface.zep",
                            "line": 21,
                            "char": 71
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/tokentypeinterface.zep",
                                "line": 21,
                                "char": 100
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/tokentypeinterface.zep",
                            "line": 21,
                            "char": 101
                        }
                    ],
                    "docblock": "**\n     * Retrieves the token string from the request object\n     * @return string\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/tokentypeinterface.zep",
                                "line": 21,
                                "char": 112
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/tokentypeinterface.zep",
                        "line": 21,
                        "char": 112
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/tokentypeinterface.zep",
                    "line": 21,
                    "last-line": 22,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/tokentypeinterface.zep",
            "line": 22,
            "char": 1
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/tokentypeinterface.zep",
        "line": 0,
        "char": 0
    }
]