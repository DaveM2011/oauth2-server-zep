[
    {
        "type": "comment",
        "value": "**\n * @package \\OAuth2\\ResponseType\n * @author Brent Shaffer <bshafs at gmail dot com>\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
        "line": 7,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\ResponseType",
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
        "line": 9,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Storage\\AccessTokenInterface",
                "alias": "AccessTokenStorageInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                "line": 9,
                "char": 71
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
        "line": 10,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Storage\\RefreshTokenInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                "line": 10,
                "char": 41
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
        "line": 12,
        "char": 5
    },
    {
        "type": "class",
        "name": "AccessToken",
        "abstract": 0,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "AccessTokenInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                "line": 13,
                "char": 1
            }
        ],
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "tokenStorage",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                    "line": 15,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "refreshStorage",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                    "line": 16,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "config",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                    "line": 29,
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
                            "name": "tokenStorage",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "AccessTokenStorageInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                "line": 30,
                                "char": 74
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 30,
                            "char": 75
                        },
                        {
                            "type": "parameter",
                            "name": "refreshStorage",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "RefreshTokenInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                "line": 30,
                                "char": 114
                            },
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                "line": 30,
                                "char": 122
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 30,
                            "char": 122
                        },
                        {
                            "type": "parameter",
                            "name": "config",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                "line": 30,
                                "char": 141
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 30,
                            "char": 141
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
                                    "property": "tokenStorage",
                                    "expr": {
                                        "type": "variable",
                                        "value": "tokenStorage",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 32,
                                        "char": 46
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 32,
                                    "char": 46
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 33,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "refreshStorage",
                                    "expr": {
                                        "type": "variable",
                                        "value": "refreshStorage",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 33,
                                        "char": 50
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 33,
                                    "char": 50
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 35,
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
                                                                "value": "token_type",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                                "line": 36,
                                                                "char": 37
                                                            },
                                                            "value": {
                                                                "type": "string",
                                                                "value": "bearer",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                                "line": 36,
                                                                "char": 47
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 36,
                                                            "char": 47
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "access_lifetime",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                                "line": 37,
                                                                "char": 37
                                                            },
                                                            "value": {
                                                                "type": "int",
                                                                "value": "3600",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                                "line": 37,
                                                                "char": 43
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 37,
                                                            "char": 43
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "refresh_token_lifetime",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                                "line": 38,
                                                                "char": 37
                                                            },
                                                            "value": {
                                                                "type": "int",
                                                                "value": "1209600",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                                "line": 39,
                                                                "char": 9
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 39,
                                                            "char": 9
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 39,
                                                    "char": 10
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 39,
                                                "char": 10
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "config",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 39,
                                                    "char": 18
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 39,
                                                "char": 18
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 39,
                                        "char": 19
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 39,
                                    "char": 19
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 40,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param OAuth2\\Storage\\AccessTokenInterface tokenStorage Storage class for saving access token information\n     * @param OAuth2\\Storage\\RefreshTokenInterface refreshStorage OPTIONAL Storage class for saving refresh token information\n     * @param array config OPTIONAL Configuration options for the server\n     * <code>\n     * $config = array(\n     * \"token_type\": \"bearer\",              \/\/ token type identifier\n     * \"access_lifetime\": 3600,             \/\/ time before access token expires\n     * \"refresh_token_lifetime\": 1209600,   \/\/ time before refresh token expires\n     * );\n     * <\/endcode>\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                    "line": 30,
                    "last-line": 42,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getAuthorizeResponse",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "params",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 42,
                            "char": 52
                        },
                        {
                            "type": "parameter",
                            "name": "user_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                "line": 42,
                                "char": 76
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 42,
                            "char": 76
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "result",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 44,
                                    "char": 19
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 45,
                            "char": 15
                        },
                        {
                            "type": "declare",
                            "data-type": "bool",
                            "variables": [
                                {
                                    "variable": "includeRefreshToken",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 45,
                                    "char": 36
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 48,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "result",
                                    "expr": {
                                        "type": "array",
                                        "left": [
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "query",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 48,
                                                    "char": 30
                                                },
                                                "value": {
                                                    "type": "empty-array",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 48,
                                                    "char": 34
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 48,
                                                "char": 34
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 48,
                                        "char": 35
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 48,
                                    "char": 35
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 50,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "params",
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
                                                                "value": "scope",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                                "line": 51,
                                                                "char": 20
                                                            },
                                                            "value": {
                                                                "type": "null",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                                "line": 51,
                                                                "char": 26
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 51,
                                                            "char": 26
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "state",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                                "line": 52,
                                                                "char": 20
                                                            },
                                                            "value": {
                                                                "type": "null",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                                "line": 53,
                                                                "char": 9
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 53,
                                                            "char": 9
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 53,
                                                    "char": 10
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 53,
                                                "char": 10
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "params",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 53,
                                                    "char": 18
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 53,
                                                "char": 18
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 53,
                                        "char": 19
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 53,
                                    "char": 19
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 57,
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
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 57,
                                        "char": 40
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 57,
                                    "char": 40
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 58,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "array-index",
                                    "operator": "assign",
                                    "variable": "result",
                                    "index-expr": [
                                        {
                                            "type": "string",
                                            "value": "fragment",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 58,
                                            "char": 30
                                        }
                                    ],
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 58,
                                            "char": 39
                                        },
                                        "name": "createAccessToken",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "params",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 58,
                                                        "char": 64
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "client_id",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 58,
                                                        "char": 76
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 58,
                                                    "char": 77
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 58,
                                                "char": 77
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "user_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 58,
                                                    "char": 86
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 58,
                                                "char": 86
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "params",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 58,
                                                        "char": 94
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "scope",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 58,
                                                        "char": 102
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 58,
                                                    "char": 103
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 58,
                                                "char": 103
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "includeRefreshToken",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 58,
                                                    "char": 124
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 58,
                                                "char": 124
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 58,
                                        "char": 125
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 58,
                                    "char": 125
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 60,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "isset",
                                "left": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "params",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 60,
                                        "char": 24
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "state",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 60,
                                        "char": 32
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 60,
                                    "char": 34
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                "line": 60,
                                "char": 34
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "result",
                                            "index-expr": [
                                                {
                                                    "type": "string",
                                                    "value": "fragment",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 61,
                                                    "char": 34
                                                },
                                                {
                                                    "type": "string",
                                                    "value": "state",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 61,
                                                    "char": 43
                                                }
                                            ],
                                            "expr": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "params",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 61,
                                                    "char": 53
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "state",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 61,
                                                    "char": 61
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 61,
                                                "char": 62
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 61,
                                            "char": 62
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 62,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 64,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "array",
                                "left": [
                                    {
                                        "value": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "params",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 64,
                                                "char": 23
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "redirect_uri",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 64,
                                                "char": 38
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 64,
                                            "char": 39
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 64,
                                        "char": 39
                                    },
                                    {
                                        "value": {
                                            "type": "variable",
                                            "value": "result",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 64,
                                            "char": 47
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 64,
                                        "char": 47
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                "line": 64,
                                "char": 48
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 65,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "array",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                "line": 43,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                        "line": 43,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                    "line": 42,
                    "last-line": 78,
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
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 79,
                            "char": 56
                        },
                        {
                            "type": "parameter",
                            "name": "user_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 79,
                            "char": 73
                        },
                        {
                            "type": "parameter",
                            "name": "scope",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                "line": 79,
                                "char": 95
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 79,
                            "char": 95
                        },
                        {
                            "type": "parameter",
                            "name": "includeRefreshToken",
                            "const": 0,
                            "data-type": "bool",
                            "mandatory": 0,
                            "default": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                "line": 79,
                                "char": 131
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 79,
                            "char": 131
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "token",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 81,
                                    "char": 18
                                },
                                {
                                    "variable": "expires",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 81,
                                    "char": 27
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 83,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "token",
                                    "expr": {
                                        "type": "array",
                                        "left": [
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "access_token",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 84,
                                                    "char": 27
                                                },
                                                "value": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 84,
                                                        "char": 34
                                                    },
                                                    "name": "generateAccessToken",
                                                    "call-type": 1,
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 84,
                                                    "char": 56
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 84,
                                                "char": 56
                                            },
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "expires_in",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 85,
                                                    "char": 27
                                                },
                                                "value": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 85,
                                                            "char": 34
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "config",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 85,
                                                            "char": 41
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 85,
                                                        "char": 41
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "access_lifetime",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 85,
                                                        "char": 59
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 85,
                                                    "char": 60
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 85,
                                                "char": 60
                                            },
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "token_type",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 86,
                                                    "char": 27
                                                },
                                                "value": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 86,
                                                            "char": 34
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "config",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 86,
                                                            "char": 41
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 86,
                                                        "char": 41
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "token_type",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 86,
                                                        "char": 54
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 86,
                                                    "char": 55
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 86,
                                                "char": 55
                                            },
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "scope",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 87,
                                                    "char": 27
                                                },
                                                "value": {
                                                    "type": "variable",
                                                    "value": "scope",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 88,
                                                    "char": 9
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 88,
                                                "char": 9
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 88,
                                        "char": 10
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 88,
                                    "char": 10
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 90,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 90,
                                        "char": 14
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "tokenStorage",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 90,
                                        "char": 28
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 90,
                                    "char": 28
                                },
                                "name": "setAccessToken",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "token",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 90,
                                                "char": 49
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "access_token",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 90,
                                                "char": 64
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 90,
                                            "char": 65
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 90,
                                        "char": 65
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "client_id",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 90,
                                            "char": 76
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 90,
                                        "char": 76
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "user_id",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 90,
                                            "char": 85
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 90,
                                        "char": 85
                                    },
                                    {
                                        "parameter": {
                                            "type": "ternary",
                                            "left": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 90,
                                                        "char": 92
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "config",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 90,
                                                        "char": 99
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 90,
                                                    "char": 99
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "access_lifetime",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 90,
                                                    "char": 117
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 90,
                                                "char": 119
                                            },
                                            "right": {
                                                "type": "add",
                                                "left": {
                                                    "type": "fcall",
                                                    "name": "time",
                                                    "call-type": 1,
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 90,
                                                    "char": 128
                                                },
                                                "right": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 90,
                                                            "char": 135
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "config",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 90,
                                                            "char": 142
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 90,
                                                        "char": 142
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "access_lifetime",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 90,
                                                        "char": 160
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 90,
                                                    "char": 162
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 90,
                                                "char": 162
                                            },
                                            "extra": {
                                                "type": "null",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 90,
                                                "char": 168
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 90,
                                            "char": 168
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 90,
                                        "char": 168
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "scope",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 90,
                                            "char": 175
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 90,
                                        "char": 175
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                "line": 90,
                                "char": 176
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 95,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "variable",
                                    "value": "includeRefreshToken",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 95,
                                    "char": 33
                                },
                                "right": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 95,
                                        "char": 40
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "refreshStorage",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 95,
                                        "char": 56
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 95,
                                    "char": 56
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                "line": 95,
                                "char": 56
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "token",
                                            "index-expr": [
                                                {
                                                    "type": "string",
                                                    "value": "refresh_token",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 96,
                                                    "char": 38
                                                }
                                            ],
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 96,
                                                    "char": 47
                                                },
                                                "name": "generateRefreshToken",
                                                "call-type": 1,
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 96,
                                                "char": 70
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 96,
                                            "char": 70
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 97,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "expires",
                                            "expr": {
                                                "type": "int",
                                                "value": "0",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 97,
                                                "char": 28
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 97,
                                            "char": 28
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 98,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "greater",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 98,
                                                    "char": 21
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "config",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 98,
                                                    "char": 28
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 98,
                                                "char": 28
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "refresh_token_lifetime",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 98,
                                                "char": 53
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 98,
                                            "char": 55
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "0",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 98,
                                            "char": 59
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 98,
                                        "char": 59
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "expires",
                                                    "expr": {
                                                        "type": "add",
                                                        "left": {
                                                            "type": "fcall",
                                                            "name": "time",
                                                            "call-type": 1,
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 99,
                                                            "char": 38
                                                        },
                                                        "right": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "property-access",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "this",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                                    "line": 99,
                                                                    "char": 45
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "config",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                                    "line": 99,
                                                                    "char": 52
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                                "line": 99,
                                                                "char": 52
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "refresh_token_lifetime",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                                "line": 99,
                                                                "char": 77
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 99,
                                                            "char": 78
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 99,
                                                        "char": 78
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 99,
                                                    "char": 78
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 100,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 101,
                                    "char": 16
                                },
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 101,
                                                "char": 18
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "refreshStorage",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 101,
                                                "char": 34
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 101,
                                            "char": 34
                                        },
                                        "name": "setRefreshToken",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "token",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 101,
                                                        "char": 56
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "refresh_token",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 101,
                                                        "char": 72
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 101,
                                                    "char": 73
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 101,
                                                "char": 73
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "client_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 101,
                                                    "char": 84
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 101,
                                                "char": 84
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "user_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 101,
                                                    "char": 93
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 101,
                                                "char": 93
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "expires",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 101,
                                                    "char": 102
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 101,
                                                "char": 102
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "scope",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 101,
                                                    "char": 109
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 101,
                                                "char": 109
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 101,
                                        "char": 110
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 102,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 104,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "token",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                "line": 104,
                                "char": 21
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 105,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Handle the creation of access token, also issue refresh token if supported \/ desirable.\n     *\n     * @param string client_id client identifier related to the access token.\n     * @param string user_id user ID associated with the access token\n     * @param $scope OPTIONAL scopes to be stored in space-separated string.\n     * @param bool includeRefreshToken if true, a new refresh_token will be added to the response\n     * @return string\n     *\n     * @see http:\/\/tools.ietf.org\/html\/rfc6749#section-5\n     * @ingroup oauth2_section_5\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                "line": 80,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                        "line": 80,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                    "line": 79,
                    "last-line": 116,
                    "char": 19
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "generateAccessToken",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "randomData",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 119,
                                    "char": 23
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 121,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "function_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "mcrypt_create_iv",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 121,
                                            "char": 46
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 121,
                                        "char": 46
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                "line": 121,
                                "char": 48
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "randomData",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "mcrypt_create_iv",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "20",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 122,
                                                            "char": 49
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 122,
                                                        "char": 49
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "constant",
                                                            "value": "MCRYPT_DEV_URANDOM",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 122,
                                                            "char": 69
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 122,
                                                        "char": 69
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 122,
                                                "char": 70
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 122,
                                            "char": 70
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 123,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "and",
                                        "left": {
                                            "type": "not-identical",
                                            "left": {
                                                "type": "variable",
                                                "value": "randomData",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 123,
                                                "char": 29
                                            },
                                            "right": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 123,
                                                "char": 38
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 123,
                                            "char": 38
                                        },
                                        "right": {
                                            "type": "identical",
                                            "left": {
                                                "type": "fcall",
                                                "name": "strlen",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "randomData",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 123,
                                                            "char": 57
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 123,
                                                        "char": 57
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 123,
                                                "char": 61
                                            },
                                            "right": {
                                                "type": "int",
                                                "value": "20",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 123,
                                                "char": 66
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 123,
                                            "char": 66
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 123,
                                        "char": 66
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "bin2hex",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "randomData",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 124,
                                                            "char": 42
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 124,
                                                        "char": 42
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 124,
                                                "char": 43
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 125,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 126,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 128,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "function_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "openssl_random_pseudo_bytes",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 128,
                                            "char": 57
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 128,
                                        "char": 57
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                "line": 128,
                                "char": 59
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "randomData",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "openssl_random_pseudo_bytes",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "20",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 129,
                                                            "char": 60
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 129,
                                                        "char": 60
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 129,
                                                "char": 61
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 129,
                                            "char": 61
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 130,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "and",
                                        "left": {
                                            "type": "not-identical",
                                            "left": {
                                                "type": "variable",
                                                "value": "randomData",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 130,
                                                "char": 29
                                            },
                                            "right": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 130,
                                                "char": 38
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 130,
                                            "char": 38
                                        },
                                        "right": {
                                            "type": "identical",
                                            "left": {
                                                "type": "fcall",
                                                "name": "strlen",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "randomData",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 130,
                                                            "char": 57
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 130,
                                                        "char": 57
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 130,
                                                "char": 61
                                            },
                                            "right": {
                                                "type": "int",
                                                "value": "20",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 130,
                                                "char": 66
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 130,
                                            "char": 66
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 130,
                                        "char": 66
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "bin2hex",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "randomData",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 131,
                                                            "char": 42
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 131,
                                                        "char": 42
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 131,
                                                "char": 43
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 132,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 133,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 135,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "file_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "\/dev\/urandom",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 135,
                                            "char": 38
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 135,
                                        "char": 38
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                "line": 135,
                                "char": 40
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "randomData",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "file_get_contents",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "\/dev\/urandom",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 137,
                                                            "char": 62
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 137,
                                                        "char": 62
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "bool",
                                                            "value": "false",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 137,
                                                            "char": 69
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 137,
                                                        "char": 69
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "null",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 137,
                                                            "char": 75
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 137,
                                                        "char": 75
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "0",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 137,
                                                            "char": 78
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 137,
                                                        "char": 78
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "20",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 137,
                                                            "char": 82
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 137,
                                                        "char": 82
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 137,
                                                "char": 83
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 137,
                                            "char": 83
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 138,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "and",
                                        "left": {
                                            "type": "not-identical",
                                            "left": {
                                                "type": "variable",
                                                "value": "randomData",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 138,
                                                "char": 29
                                            },
                                            "right": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 138,
                                                "char": 38
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 138,
                                            "char": 38
                                        },
                                        "right": {
                                            "type": "identical",
                                            "left": {
                                                "type": "fcall",
                                                "name": "strlen",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "randomData",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 138,
                                                            "char": 57
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 138,
                                                        "char": 57
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 138,
                                                "char": 61
                                            },
                                            "right": {
                                                "type": "int",
                                                "value": "20",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 138,
                                                "char": 66
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 138,
                                            "char": 66
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 138,
                                        "char": 66
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "bin2hex",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "randomData",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 139,
                                                            "char": 42
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 139,
                                                        "char": 42
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 139,
                                                "char": 43
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 140,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 141,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 144,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "randomData",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "concat",
                                            "left": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "fcall",
                                                            "name": "mt_rand",
                                                            "call-type": 1,
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 144,
                                                            "char": 36
                                                        },
                                                        "right": {
                                                            "type": "fcall",
                                                            "name": "mt_rand",
                                                            "call-type": 1,
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 144,
                                                            "char": 48
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 144,
                                                        "char": 48
                                                    },
                                                    "right": {
                                                        "type": "fcall",
                                                        "name": "mt_rand",
                                                        "call-type": 1,
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 144,
                                                        "char": 60
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 144,
                                                    "char": 60
                                                },
                                                "right": {
                                                    "type": "fcall",
                                                    "name": "mt_rand",
                                                    "call-type": 1,
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 144,
                                                    "char": 72
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 144,
                                                "char": 72
                                            },
                                            "right": {
                                                "type": "fcall",
                                                "name": "microtime",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "bool",
                                                            "value": "true",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                            "line": 144,
                                                            "char": 88
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 144,
                                                        "char": 88
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                "line": 144,
                                                "char": 90
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 144,
                                            "char": 90
                                        },
                                        "right": {
                                            "type": "fcall",
                                            "name": "uniqid",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "fcall",
                                                        "name": "mt_rand",
                                                        "call-type": 1,
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 144,
                                                        "char": 108
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 144,
                                                    "char": 108
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "bool",
                                                        "value": "true",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 144,
                                                        "char": 114
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 144,
                                                    "char": 114
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 144,
                                            "char": 115
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 144,
                                        "char": 115
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 144,
                                    "char": 115
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 146,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "substr",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "fcall",
                                            "name": "hash",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "string",
                                                        "value": "sha512",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 146,
                                                        "char": 36
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 146,
                                                    "char": 36
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "randomData",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                        "line": 146,
                                                        "char": 48
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                                    "line": 146,
                                                    "char": 48
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 146,
                                            "char": 49
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 146,
                                        "char": 49
                                    },
                                    {
                                        "parameter": {
                                            "type": "int",
                                            "value": "0",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 146,
                                            "char": 52
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 146,
                                        "char": 52
                                    },
                                    {
                                        "parameter": {
                                            "type": "int",
                                            "value": "40",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                            "line": 146,
                                            "char": 56
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                        "line": 146,
                                        "char": 56
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                "line": 146,
                                "char": 57
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 147,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Generates an unique access token.\n     *\n     * Implementing classes may want to override this function to implement\n     * other access token generation schemes.\n     *\n     * @return string An unique access token.\n     *\n     * @ingroup oauth2_section_4\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                "line": 118,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                        "line": 118,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                    "line": 117,
                    "last-line": 159,
                    "char": 22
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "generateRefreshToken",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                    "line": 163,
                                    "char": 21
                                },
                                "name": "generateAccessToken",
                                "call-type": 1,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                "line": 163,
                                "char": 43
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                            "line": 164,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Generates an unique refresh token\n     *\n     * Implementing classes may want to override this function to implement\n     * other refresh token generation schemes.\n     *\n     * @return string An unique refresh.\n     *\n     * @ingroup oauth2_section_4\n     * @see OAuth2::generateAccessToken()\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                                "line": 161,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                        "line": 161,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
                    "line": 160,
                    "last-line": 165,
                    "char": 22
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
            "line": 12,
            "char": 5
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstoken.zep",
        "line": 12,
        "char": 5
    }
]