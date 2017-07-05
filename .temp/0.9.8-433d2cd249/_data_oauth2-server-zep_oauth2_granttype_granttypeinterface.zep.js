[
    {
        "type": "comment",
        "value": "**\n * Interface for all OAuth2 Grant Types\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
        "line": 6,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\GrantType",
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
        "line": 8,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\ResponseType\\AccessTokenInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                "line": 8,
                "char": 45
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
        "line": 9,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\RequestInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                "line": 9,
                "char": 28
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
        "line": 10,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\ResponseInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                "line": 10,
                "char": 29
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
        "line": 12,
        "char": 9
    },
    {
        "type": "interface",
        "name": "GrantTypeInterface",
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getQuerystringIdentifier",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                                "line": 14,
                                "char": 57
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                        "line": 14,
                        "char": 57
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                    "line": 14,
                    "last-line": 15,
                    "char": 19
                },
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                                "line": 15,
                                "char": 62
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                            "line": 15,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                                "line": 15,
                                "char": 92
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                            "line": 15,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                                "line": 15,
                                "char": 105
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                        "line": 15,
                        "char": 105
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                    "line": 15,
                    "last-line": 16,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                                "line": 16,
                                "char": 45
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                                "line": 16,
                                "char": 51
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                        "line": 16,
                        "char": 51
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                    "line": 16,
                    "last-line": 17,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getUserId",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                                "line": 17,
                                "char": 43
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                                "line": 17,
                                "char": 49
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                        "line": 17,
                        "char": 49
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                    "line": 17,
                    "last-line": 18,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getScope",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                                "line": 18,
                                "char": 42
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                                "line": 18,
                                "char": 48
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                        "line": 18,
                        "char": 48
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                    "line": 18,
                    "last-line": 19,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "createAccessToken",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "accessToken",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "AccessTokenInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                                "line": 19,
                                "char": 72
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                            "line": 19,
                            "char": 73
                        },
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                            "line": 19,
                            "char": 92
                        },
                        {
                            "type": "parameter",
                            "name": "user_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                            "line": 19,
                            "char": 109
                        },
                        {
                            "type": "parameter",
                            "name": "scope",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                            "line": 19,
                            "char": 124
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                                "line": 19,
                                "char": 135
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                        "line": 19,
                        "char": 135
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
                    "line": 19,
                    "last-line": 20,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
            "line": 20,
            "char": 1
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/granttypeinterface.zep",
        "line": 0,
        "char": 0
    }
]