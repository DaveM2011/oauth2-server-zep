[
    {
        "type": "comment",
        "value": "**\n * Interface for all OAuth2 Client Assertion Types\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/clientassertiontypeinterface.zep",
        "line": 6,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\ClientAssertionType",
        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/clientassertiontypeinterface.zep",
        "line": 8,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\RequestInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/clientassertiontypeinterface.zep",
                "line": 8,
                "char": 28
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/clientassertiontypeinterface.zep",
        "line": 9,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\ResponseInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/clientassertiontypeinterface.zep",
                "line": 9,
                "char": 29
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/clientassertiontypeinterface.zep",
        "line": 11,
        "char": 9
    },
    {
        "type": "interface",
        "name": "ClientAssertionTypeInterface",
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "validateRequest",
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/clientassertiontypeinterface.zep",
                                "line": 13,
                                "char": 62
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/clientassertiontypeinterface.zep",
                            "line": 13,
                            "char": 63
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/clientassertiontypeinterface.zep",
                                "line": 13,
                                "char": 92
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/clientassertiontypeinterface.zep",
                            "line": 13,
                            "char": 93
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/clientassertiontypeinterface.zep",
                                "line": 13,
                                "char": 105
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/clientassertiontypeinterface.zep",
                        "line": 13,
                        "char": 105
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/clientassertiontypeinterface.zep",
                    "line": 13,
                    "last-line": 14,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getClientId",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/clientassertiontypeinterface.zep",
                                "line": 14,
                                "char": 44
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/clientassertiontypeinterface.zep",
                        "line": 14,
                        "char": 44
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/clientassertiontypeinterface.zep",
                    "line": 14,
                    "last-line": 15,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/clientassertiontypeinterface.zep",
            "line": 15,
            "char": 1
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/clientassertiontypeinterface.zep",
        "line": 0,
        "char": 0
    }
]