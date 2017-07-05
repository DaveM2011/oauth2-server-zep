[
    {
        "type": "comment",
        "value": "**\n * Validate a client via Http Basic authentication\n *\n * @author Brent Shaffer <bshafs at gmail dot com>\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
        "line": 8,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\ClientAssertionType",
        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
        "line": 10,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Storage\\ClientCredentialsInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                "line": 10,
                "char": 46
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
        "line": 11,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\RequestInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                "line": 11,
                "char": 28
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
        "line": 12,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\ResponseInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                "line": 12,
                "char": 29
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
        "line": 14,
        "char": 5
    },
    {
        "type": "class",
        "name": "HttpBasic",
        "abstract": 0,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "ClientAssertionTypeInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
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
                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                    "line": 17,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "storage",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                    "line": 18,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "config",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                    "line": 30,
                    "char": 6
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                "line": 31,
                                "char": 68
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                            "line": 31,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                "line": 31,
                                "char": 88
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                            "line": 31,
                            "char": 88
                        }
                    ],
                    "statements": [
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "storage",
                                    "expr": {
                                        "type": "variable",
                                        "value": "storage",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 33,
                                        "char": 36
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 33,
                                    "char": 36
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                            "line": 34,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "config",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "array_merge",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "allow_credentials_in_request_body",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                                "line": 35,
                                                                "char": 48
                                                            },
                                                            "value": {
                                                                "type": "bool",
                                                                "value": "true",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                                "line": 35,
                                                                "char": 54
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 35,
                                                            "char": 54
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "allow_public_clients",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                                "line": 36,
                                                                "char": 35
                                                            },
                                                            "value": {
                                                                "type": "bool",
                                                                "value": "true",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                                "line": 37,
                                                                "char": 9
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 37,
                                                            "char": 9
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 37,
                                                    "char": 10
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 37,
                                                "char": 10
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "config",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 37,
                                                    "char": 18
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 37,
                                                "char": 18
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 37,
                                        "char": 19
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 37,
                                    "char": 19
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                            "line": 38,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param \\OAuth2\\Storage\\ClientCredentialsInterface clientStorage\n     * REQUIRED Storage class for retrieving client credentials information\n     * @param array config OPTIONAL Configuration options for the server\n     * <code>\n     * $config = array(\n     * \"allow_credentials_in_request_body\" => true, \/\/ whether to look for credentials in the POST body in addition to the Authorize HTTP Header\n     * \"allow_public_clients\"  => true \/\/ if true, \"public clients\" (clients without a secret) may be authenticated\n     * );\n     * <\/code>\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                    "line": 31,
                    "last-line": 40,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                "line": 40,
                                "char": 62
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                            "line": 40,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                "line": 40,
                                "char": 92
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                            "line": 40,
                            "char": 93
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "clientData",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 42,
                                    "char": 23
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                            "line": 44,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "clientData",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 44,
                                            "char": 31
                                        },
                                        "name": "getClientCredentials",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "request",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 44,
                                                    "char": 60
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 44,
                                                "char": 60
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 44,
                                                    "char": 70
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 44,
                                                "char": 70
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 44,
                                        "char": 71
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 44,
                                    "char": 71
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                            "line": 45,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "clientData",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 45,
                                    "char": 24
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                "line": 45,
                                "char": 24
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 46,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 47,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                            "line": 49,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "isset",
                                    "left": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "clientData",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 49,
                                            "char": 29
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "client_id",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 49,
                                            "char": 41
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 49,
                                        "char": 43
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 49,
                                    "char": 43
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                "line": 49,
                                "char": 43
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\LogicException",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "The clientData array must have \\\"client_id\\\" set",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 50,
                                                    "char": 89
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 50,
                                                "char": 89
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 50,
                                        "char": 90
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 51,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                            "line": 54,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "empty",
                                "left": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "clientData",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 54,
                                        "char": 28
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "client_secret",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 54,
                                        "char": 44
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 54,
                                    "char": 46
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                "line": 54,
                                "char": 46
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "isset",
                                            "left": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 55,
                                                        "char": 28
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "config",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 55,
                                                        "char": 35
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 55,
                                                    "char": 35
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "allow_public_clients",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 55,
                                                    "char": 58
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 55,
                                                "char": 60
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 55,
                                            "char": 60
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 55,
                                        "char": 60
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 56,
                                                    "char": 26
                                                },
                                                "name": "setError",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "400",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 56,
                                                            "char": 39
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 56,
                                                        "char": 39
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "invalid_client",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 56,
                                                            "char": 57
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 56,
                                                        "char": 57
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "client credentials are required",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 56,
                                                            "char": 92
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 56,
                                                        "char": 92
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 56,
                                                "char": 93
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 57,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 57,
                                                "char": 29
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 58,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 60,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 60,
                                                    "char": 22
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "storage",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 60,
                                                    "char": 31
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 60,
                                                "char": 31
                                            },
                                            "name": "isPublicClient",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "array-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "clientData",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 60,
                                                            "char": 57
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "client_id",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 60,
                                                            "char": 69
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 60,
                                                        "char": 70
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 60,
                                                    "char": 70
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 60,
                                            "char": 72
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 60,
                                        "char": 72
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 61,
                                                    "char": 26
                                                },
                                                "name": "setError",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "400",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 61,
                                                            "char": 39
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 61,
                                                        "char": 39
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "invalid_client",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 61,
                                                            "char": 57
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 61,
                                                        "char": 57
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "This client is invalid or must authenticate using a client secret",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 61,
                                                            "char": 126
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 61,
                                                        "char": 126
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 61,
                                                "char": 127
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 62,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 62,
                                                "char": 29
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 63,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 64,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "identical",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 65,
                                                    "char": 21
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "storage",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 65,
                                                    "char": 30
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 65,
                                                "char": 30
                                            },
                                            "name": "checkClientCredentials",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "array-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "clientData",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 65,
                                                            "char": 64
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "client_id",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 65,
                                                            "char": 76
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 65,
                                                        "char": 77
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 65,
                                                    "char": 77
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "array-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "clientData",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 65,
                                                            "char": 89
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "client_secret",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 65,
                                                            "char": 105
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 65,
                                                        "char": 106
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 65,
                                                    "char": 106
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 65,
                                            "char": 110
                                        },
                                        "right": {
                                            "type": "bool",
                                            "value": "false",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 65,
                                            "char": 118
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 65,
                                        "char": 118
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 66,
                                                    "char": 26
                                                },
                                                "name": "setError",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "400",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 66,
                                                            "char": 39
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 66,
                                                        "char": 39
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "invalid_client",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 66,
                                                            "char": 57
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 66,
                                                        "char": 57
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "The client credentials are invalid",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 66,
                                                            "char": 95
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 66,
                                                        "char": 95
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 66,
                                                "char": 96
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 67,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 67,
                                                "char": 29
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 68,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 69,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                            "line": 71,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "clientData",
                                    "expr": {
                                        "type": "variable",
                                        "value": "clientData",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 71,
                                        "char": 42
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 71,
                                    "char": 42
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                            "line": 73,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                "line": 73,
                                "char": 20
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                            "line": 74,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                "line": 41,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                        "line": 41,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                    "line": 40,
                    "last-line": 76,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getClientId",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "array-access",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 78,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "clientData",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 78,
                                        "char": 32
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 78,
                                    "char": 32
                                },
                                "right": {
                                    "type": "string",
                                    "value": "client_id",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 78,
                                    "char": 44
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                "line": 78,
                                "char": 45
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                            "line": 79,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                "line": 77,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                        "line": 77,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                    "line": 76,
                    "last-line": 100,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getClientCredentials",
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                "line": 101,
                                "char": 67
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                            "line": 101,
                            "char": 68
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                "line": 101,
                                "char": 97
                            },
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                "line": 101,
                                "char": 105
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                            "line": 101,
                            "char": 105
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "message",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 103,
                                    "char": 20
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                            "line": 105,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "not-identical",
                                    "left": {
                                        "type": "typeof",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "request",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 105,
                                                "char": 27
                                            },
                                            "name": "headers",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "string",
                                                        "value": "PHP_AUTH_USER",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 105,
                                                        "char": 51
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 105,
                                                    "char": 51
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 105,
                                            "char": 55
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 105,
                                        "char": 55
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "null",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 105,
                                        "char": 65
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 105,
                                    "char": 65
                                },
                                "right": {
                                    "type": "not-identical",
                                    "left": {
                                        "type": "typeof",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "request",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 105,
                                                "char": 82
                                            },
                                            "name": "headers",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "string",
                                                        "value": "PHP_AUTH_PW",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 105,
                                                        "char": 104
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 105,
                                                    "char": 104
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 105,
                                            "char": 108
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 105,
                                        "char": 108
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "null",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 105,
                                        "char": 117
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 105,
                                    "char": 117
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                "line": 105,
                                "char": 117
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "array",
                                        "left": [
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "client_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 107,
                                                    "char": 28
                                                },
                                                "value": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "request",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 107,
                                                        "char": 38
                                                    },
                                                    "name": "headers",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "string",
                                                                "value": "PHP_AUTH_USER",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                                "line": 107,
                                                                "char": 62
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 107,
                                                            "char": 62
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 107,
                                                    "char": 63
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 107,
                                                "char": 63
                                            },
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "client_secret",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 108,
                                                    "char": 32
                                                },
                                                "value": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "request",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 108,
                                                        "char": 42
                                                    },
                                                    "name": "headers",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "string",
                                                                "value": "PHP_AUTH_PW",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                                "line": 108,
                                                                "char": 64
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 108,
                                                            "char": 64
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 109,
                                                    "char": 13
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 109,
                                                "char": 13
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 109,
                                        "char": 14
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 110,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                            "line": 112,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "isset",
                                "left": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 112,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "config",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 112,
                                            "char": 30
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 112,
                                        "char": 30
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "allow_credentials_in_request_body",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 112,
                                        "char": 66
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 112,
                                    "char": 68
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                "line": 112,
                                "char": 68
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not-equals",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "request",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 114,
                                                "char": 24
                                            },
                                            "name": "request",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "string",
                                                        "value": "client_id",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 114,
                                                        "char": 44
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 114,
                                                    "char": 44
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "null",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 114,
                                                        "char": 50
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 114,
                                                    "char": 50
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 114,
                                            "char": 53
                                        },
                                        "right": {
                                            "type": "null",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 114,
                                            "char": 60
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 114,
                                        "char": 60
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "array",
                                                "left": [
                                                    {
                                                        "key": {
                                                            "type": "string",
                                                            "value": "client_id",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 118,
                                                            "char": 32
                                                        },
                                                        "value": {
                                                            "type": "mcall",
                                                            "variable": {
                                                                "type": "variable",
                                                                "value": "request",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                                "line": 118,
                                                                "char": 42
                                                            },
                                                            "name": "request",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "string",
                                                                        "value": "client_id",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                                        "line": 118,
                                                                        "char": 62
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                                    "line": 118,
                                                                    "char": 62
                                                                }
                                                            ],
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 118,
                                                            "char": 63
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 118,
                                                        "char": 63
                                                    },
                                                    {
                                                        "key": {
                                                            "type": "string",
                                                            "value": "client_secret",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 119,
                                                            "char": 36
                                                        },
                                                        "value": {
                                                            "type": "mcall",
                                                            "variable": {
                                                                "type": "variable",
                                                                "value": "request",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                                "line": 119,
                                                                "char": 46
                                                            },
                                                            "name": "request",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "string",
                                                                        "value": "client_secret",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                                        "line": 119,
                                                                        "char": 70
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                                    "line": 119,
                                                                    "char": 70
                                                                }
                                                            ],
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 120,
                                                            "char": 17
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 120,
                                                        "char": 17
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 120,
                                                "char": 18
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 121,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 122,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                            "line": 124,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "variable",
                                "value": "response",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                "line": 124,
                                "char": 21
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "message",
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
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                                "line": 125,
                                                                "char": 38
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "config",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                                "line": 125,
                                                                "char": 45
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 125,
                                                            "char": 45
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "allow_credentials_in_request_body",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                            "line": 125,
                                                            "char": 81
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 125,
                                                        "char": 83
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 125,
                                                    "char": 83
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": " or body",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 125,
                                                    "char": 96
                                                },
                                                "extra": {
                                                    "type": "string",
                                                    "value": "",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 125,
                                                    "char": 100
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 125,
                                                "char": 100
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 125,
                                            "char": 100
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 126,
                                    "char": 20
                                },
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                            "line": 126,
                                            "char": 22
                                        },
                                        "name": "setError",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "400",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 126,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 126,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "invalid_client",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 126,
                                                    "char": 53
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 126,
                                                "char": 53
                                            },
                                            {
                                                "parameter": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "string",
                                                        "value": "Client credentials were not found in the headers",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 126,
                                                        "char": 106
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "message",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                        "line": 126,
                                                        "char": 115
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                    "line": 126,
                                                    "char": 115
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                                "line": 126,
                                                "char": 115
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                        "line": 126,
                                        "char": 116
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                    "line": 127,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                            "line": 129,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                "line": 129,
                                "char": 20
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                            "line": 130,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Internal function used to get the client credentials from HTTP basic\n     * auth or POST data.\n     *\n     * According to the spec (draft 20), the client_id can be provided in\n     * the Basic Authorization header (recommended) or via GET\/POST.\n     *\n     * @return array\n     * A list containing the client identifier and password, for example\n     * @code\n     * return array(\n     *     \"client_id\"     => CLIENT_ID,        \/\/ REQUIRED the client id\n     *     \"client_secret\" => CLIENT_SECRET,    \/\/ OPTIONAL the client secret (may be omitted for public clients)\n     * );\n     * @endcode\n     *\n     * @see http:\/\/tools.ietf.org\/html\/rfc6749#section-2.3.1\n     *\n     * @ingroup oauth2_section_2\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "array",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                "line": 101,
                                "char": 116
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                                "line": 102,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                        "line": 102,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
                    "line": 101,
                    "last-line": 131,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
            "line": 14,
            "char": 5
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/clientassertiontype\/httpbasic.zep",
        "line": 14,
        "char": 5
    }
]