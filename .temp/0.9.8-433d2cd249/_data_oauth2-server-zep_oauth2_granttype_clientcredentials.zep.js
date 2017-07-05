[
    {
        "type": "comment",
        "value": "**\n * @author Brent Shaffer <bshafs at gmail dot com>\n *\n * @see OAuth2\\ClientAssertionType_HttpBasic\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
        "line": 8,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\GrantType",
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
        "line": 10,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\ClientAssertionType\\HttpBasic",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                "line": 10,
                "char": 41
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
        "line": 11,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\ResponseType\\AccessTokenInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                "line": 11,
                "char": 45
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
        "line": 12,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Storage\\ClientCredentialsInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                "line": 12,
                "char": 46
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
        "line": 14,
        "char": 5
    },
    {
        "type": "class",
        "name": "ClientCredentials",
        "abstract": 0,
        "final": 0,
        "extends": "HttpBasic",
        "implements": [
            {
                "type": "variable",
                "value": "GrantTypeInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                "line": 15,
                "char": 1
            }
        ],
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "clientData",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                    "line": 18,
                    "char": 10
                }
            ],
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__construct",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "storage",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "ClientCredentialsInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                "line": 18,
                                "char": 68
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                            "line": 18,
                            "char": 69
                        },
                        {
                            "type": "parameter",
                            "name": "config",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                "line": 18,
                                "char": 88
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                            "line": 18,
                            "char": 88
                        }
                    ],
                    "statements": [
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "array-index",
                                    "operator": "assign",
                                    "variable": "config",
                                    "index-expr": [
                                        {
                                            "type": "string",
                                            "value": "allow_public_clients",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                            "line": 22,
                                            "char": 42
                                        }
                                    ],
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                        "line": 22,
                                        "char": 51
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                    "line": 22,
                                    "char": 51
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                            "line": 24,
                            "char": 14
                        },
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "parent",
                                "dynamic": 0,
                                "name": "__construct",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "storage",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                            "line": 24,
                                            "char": 36
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                        "line": 24,
                                        "char": 36
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "config",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                            "line": 24,
                                            "char": 44
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                        "line": 24,
                                        "char": 44
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                "line": 24,
                                "char": 45
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                            "line": 25,
                            "char": 5
                        }
                    ],
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                    "line": 18,
                    "last-line": 27,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getQuerystringIdentifier",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "string",
                                "value": "client_credentials",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                "line": 29,
                                "char": 36
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                            "line": 30,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                "line": 28,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                        "line": 28,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                    "line": 27,
                    "last-line": 32,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getScope",
                    "statements": [
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                    "line": 34,
                                    "char": 14
                                },
                                "name": "loadClientData",
                                "call-type": 1,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                "line": 34,
                                "char": 31
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                            "line": 35,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "ternary",
                                "left": {
                                    "type": "isset",
                                    "left": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                                "line": 35,
                                                "char": 27
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "clientData",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                                "line": 35,
                                                "char": 38
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                            "line": 35,
                                            "char": 38
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "scope",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                            "line": 35,
                                            "char": 46
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                        "line": 35,
                                        "char": 48
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                    "line": 35,
                                    "char": 48
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                            "line": 35,
                                            "char": 55
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "clientData",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                            "line": 35,
                                            "char": 66
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                        "line": 35,
                                        "char": 66
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "scope",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                        "line": 35,
                                        "char": 74
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                    "line": 35,
                                    "char": 76
                                },
                                "extra": {
                                    "type": "null",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                    "line": 35,
                                    "char": 82
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                "line": 35,
                                "char": 82
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                            "line": 36,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                "line": 32,
                                "char": 42
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                "line": 33,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                        "line": 33,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                    "line": 32,
                    "last-line": 38,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getUserId",
                    "statements": [
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                    "line": 40,
                                    "char": 14
                                },
                                "name": "loadClientData",
                                "call-type": 1,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                "line": 40,
                                "char": 31
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                            "line": 41,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "ternary",
                                "left": {
                                    "type": "isset",
                                    "left": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                                "line": 41,
                                                "char": 27
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "clientData",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                                "line": 41,
                                                "char": 38
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                            "line": 41,
                                            "char": 38
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "user_id",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                            "line": 41,
                                            "char": 48
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                        "line": 41,
                                        "char": 50
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                    "line": 41,
                                    "char": 50
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                            "line": 41,
                                            "char": 57
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "clientData",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                            "line": 41,
                                            "char": 68
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                        "line": 41,
                                        "char": 68
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "user_id",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                        "line": 41,
                                        "char": 78
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                    "line": 41,
                                    "char": 80
                                },
                                "extra": {
                                    "type": "null",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                    "line": 41,
                                    "char": 86
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                "line": 41,
                                "char": 86
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                            "line": 42,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                "line": 38,
                                "char": 43
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                "line": 39,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                        "line": 39,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                    "line": 38,
                    "last-line": 44,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                "line": 44,
                                "char": 72
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                            "line": 44,
                            "char": 73
                        },
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                            "line": 44,
                            "char": 92
                        },
                        {
                            "type": "parameter",
                            "name": "user_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                            "line": 44,
                            "char": 109
                        },
                        {
                            "type": "parameter",
                            "name": "scope",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                            "line": 44,
                            "char": 124
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "bool",
                            "variables": [
                                {
                                    "variable": "includeRefreshToken",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                    "line": 48,
                                    "char": 36
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                            "line": 49,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "includeRefreshToken",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                        "line": 49,
                                        "char": 40
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                    "line": 49,
                                    "char": 40
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                            "line": 51,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "accessToken",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                    "line": 51,
                                    "char": 28
                                },
                                "name": "createAccessToken",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "client_id",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                            "line": 51,
                                            "char": 56
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                        "line": 51,
                                        "char": 56
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "user_id",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                            "line": 51,
                                            "char": 65
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                        "line": 51,
                                        "char": 65
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "scope",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                            "line": 51,
                                            "char": 72
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                        "line": 51,
                                        "char": 72
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "includeRefreshToken",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                            "line": 51,
                                            "char": 93
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                        "line": 51,
                                        "char": 93
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                "line": 51,
                                "char": 94
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                            "line": 52,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                "line": 45,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                        "line": 45,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                    "line": 44,
                    "last-line": 54,
                    "char": 19
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "method",
                    "name": "loadClientData",
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                        "line": 56,
                                        "char": 18
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "clientData",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                        "line": 56,
                                        "char": 30
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                    "line": 56,
                                    "char": 30
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                "line": 56,
                                "char": 30
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "clientData",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                                        "line": 57,
                                                        "char": 41
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "storage",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                                        "line": 57,
                                                        "char": 50
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                                    "line": 57,
                                                    "char": 50
                                                },
                                                "name": "getClientDetails",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "mcall",
                                                            "variable": {
                                                                "type": "variable",
                                                                "value": "this",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                                                "line": 57,
                                                                "char": 73
                                                            },
                                                            "name": "getClientId",
                                                            "call-type": 1,
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                                            "line": 57,
                                                            "char": 87
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                                        "line": 57,
                                                        "char": 87
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                                "line": 57,
                                                "char": 88
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                            "line": 57,
                                            "char": 88
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                                    "line": 58,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                            "line": 59,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                        "line": 55,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
                    "line": 54,
                    "last-line": 60,
                    "char": 20
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
            "line": 14,
            "char": 5
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/clientcredentials.zep",
        "line": 14,
        "char": 5
    }
]