[
    {
        "type": "comment",
        "value": "**\n * @package \\OAuth2\\GrantType\n * @author Brent Shaffer <bshafs at gmail dot com>\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
        "line": 7,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\GrantType",
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
        "line": 9,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Storage\\RefreshTokenInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                "line": 9,
                "char": 41
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
        "line": 10,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\ResponseType\\AccessTokenInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                "line": 10,
                "char": 45
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
        "line": 11,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\RequestInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                "line": 11,
                "char": 28
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
        "line": 12,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\ResponseInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                "line": 12,
                "char": 29
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
        "line": 14,
        "char": 5
    },
    {
        "type": "class",
        "name": "RefreshToken",
        "abstract": 0,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "GrantTypeInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
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
                    "name": "refreshToken",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                    "line": 17,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "storage",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                    "line": 18,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "config",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                    "line": 28,
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
                                "value": "RefreshTokenInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 29,
                                "char": 63
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 29,
                            "char": 64
                        },
                        {
                            "type": "parameter",
                            "name": "config",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 29,
                                "char": 83
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 29,
                            "char": 83
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
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 31,
                                        "char": 36
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 31,
                                    "char": 36
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 32,
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
                                                                "value": "always_issue_new_refresh_token",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                                "line": 33,
                                                                "char": 45
                                                            },
                                                            "value": {
                                                                "type": "bool",
                                                                "value": "false",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                                "line": 34,
                                                                "char": 9
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                            "line": 34,
                                                            "char": 9
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                    "line": 34,
                                                    "char": 10
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 34,
                                                "char": 10
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "config",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                    "line": 34,
                                                    "char": 18
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 34,
                                                "char": 18
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 34,
                                        "char": 19
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 34,
                                    "char": 19
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 35,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param OAuth2\\Storage\\RefreshTokenInterface storage REQUIRED Storage class for retrieving refresh token information\n     * @param array config  OPTIONAL Configuration options for the server\n     * <code>\n     * $config = array(\n     * \"always_issue_new_refresh_token\": true, \/\/ whether to issue a new refresh token upon successful token request\n     * );\n     * <\/code>\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                    "line": 29,
                    "last-line": 37,
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
                                "value": "refresh_token",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 39,
                                "char": 31
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 40,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 38,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                        "line": 38,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                    "line": 37,
                    "last-line": 42,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 42,
                                "char": 62
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 42,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 42,
                                "char": 92
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 42,
                            "char": 93
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "refreshToken",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 44,
                                    "char": 25
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 46,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "variable",
                                        "value": "request",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 46,
                                        "char": 21
                                    },
                                    "name": "request",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "string",
                                                "value": "refresh_token",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 46,
                                                "char": 45
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                            "line": 46,
                                            "char": 45
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 46,
                                    "char": 47
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 46,
                                "char": 47
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                            "line": 47,
                                            "char": 22
                                        },
                                        "name": "setError",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "400",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                    "line": 47,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 47,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "invalid_request",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                    "line": 47,
                                                    "char": 54
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 47,
                                                "char": 54
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Missing parameter: \\\"refresh_token\\\" is required",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                    "line": 47,
                                                    "char": 106
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 47,
                                                "char": 106
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 47,
                                        "char": 107
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 48,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 48,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 49,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 51,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "refreshToken",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 51,
                                                "char": 33
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "storage",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 51,
                                                "char": 42
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                            "line": 51,
                                            "char": 42
                                        },
                                        "name": "getRefreshToken",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "request",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                        "line": 51,
                                                        "char": 67
                                                    },
                                                    "name": "request",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "string",
                                                                "value": "refresh_token",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                                "line": 51,
                                                                "char": 91
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                            "line": 51,
                                                            "char": 91
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                    "line": 51,
                                                    "char": 92
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 51,
                                                "char": 92
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 51,
                                        "char": 93
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 51,
                                    "char": 93
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 52,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "refreshToken",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 52,
                                    "char": 26
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 52,
                                "char": 26
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                            "line": 53,
                                            "char": 22
                                        },
                                        "name": "setError",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "400",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                    "line": 53,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 53,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "invalid_grant",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                    "line": 53,
                                                    "char": 52
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 53,
                                                "char": 52
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Invalid refresh token",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                    "line": 53,
                                                    "char": 77
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 53,
                                                "char": 77
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 53,
                                        "char": 78
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 54,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 54,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 55,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 57,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "greater",
                                    "left": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "refreshToken",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                            "line": 57,
                                            "char": 24
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "expires",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                            "line": 57,
                                            "char": 34
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 57,
                                        "char": 36
                                    },
                                    "right": {
                                        "type": "int",
                                        "value": "0",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 57,
                                        "char": 41
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 57,
                                    "char": 41
                                },
                                "right": {
                                    "type": "less",
                                    "left": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "refreshToken",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                            "line": 57,
                                            "char": 55
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "expires",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                            "line": 57,
                                            "char": 65
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 57,
                                        "char": 67
                                    },
                                    "right": {
                                        "type": "fcall",
                                        "name": "time",
                                        "call-type": 1,
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 57,
                                        "char": 76
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 57,
                                    "char": 76
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 57,
                                "char": 76
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                            "line": 58,
                                            "char": 22
                                        },
                                        "name": "setError",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "400",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                    "line": 58,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 58,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "invalid_grant",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                    "line": 58,
                                                    "char": 52
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 58,
                                                "char": 52
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Refresh token has expired",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                    "line": 58,
                                                    "char": 81
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 58,
                                                "char": 81
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 58,
                                        "char": 82
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 59,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 59,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 60,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 63,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "refreshToken",
                                    "expr": {
                                        "type": "variable",
                                        "value": "refreshToken",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 63,
                                        "char": 46
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 63,
                                    "char": 46
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 65,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 65,
                                "char": 20
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 66,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 43,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                        "line": 43,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                    "line": 42,
                    "last-line": 68,
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
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 70,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "refreshToken",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 70,
                                        "char": 34
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 70,
                                    "char": 34
                                },
                                "right": {
                                    "type": "string",
                                    "value": "client_id",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 70,
                                    "char": 46
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 70,
                                "char": 47
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 71,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 68,
                                "char": 45
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 69,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                        "line": 69,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                    "line": 68,
                    "last-line": 73,
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
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 75,
                                                "char": 27
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "refreshToken",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 75,
                                                "char": 40
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                            "line": 75,
                                            "char": 40
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "user_id",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                            "line": 75,
                                            "char": 50
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 75,
                                        "char": 52
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 75,
                                    "char": 52
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                            "line": 75,
                                            "char": 59
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "refreshToken",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                            "line": 75,
                                            "char": 72
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 75,
                                        "char": 72
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "user_id",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 75,
                                        "char": 82
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 75,
                                    "char": 84
                                },
                                "extra": {
                                    "type": "null",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 75,
                                    "char": 90
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 75,
                                "char": 90
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 76,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 73,
                                "char": 43
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 74,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                        "line": 74,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                    "line": 73,
                    "last-line": 78,
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
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 80,
                                                "char": 27
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "refreshToken",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 80,
                                                "char": 40
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                            "line": 80,
                                            "char": 40
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "scope",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                            "line": 80,
                                            "char": 48
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 80,
                                        "char": 50
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 80,
                                    "char": 50
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                            "line": 80,
                                            "char": 57
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "refreshToken",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                            "line": 80,
                                            "char": 70
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 80,
                                        "char": 70
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "scope",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 80,
                                        "char": 78
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 80,
                                    "char": 80
                                },
                                "extra": {
                                    "type": "null",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 80,
                                    "char": 86
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 80,
                                "char": 86
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 81,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 78,
                                "char": 42
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 79,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                        "line": 79,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                    "line": 78,
                    "last-line": 83,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 83,
                                "char": 72
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 83,
                            "char": 73
                        },
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 83,
                            "char": 92
                        },
                        {
                            "type": "parameter",
                            "name": "user_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 83,
                            "char": 109
                        },
                        {
                            "type": "parameter",
                            "name": "scope",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 83,
                            "char": 124
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "issueNewRefreshToken",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 85,
                                    "char": 33
                                },
                                {
                                    "variable": "token",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 85,
                                    "char": 40
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 90,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "issueNewRefreshToken",
                                    "expr": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 90,
                                                "char": 41
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "config",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 90,
                                                "char": 48
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                            "line": 90,
                                            "char": 48
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "always_issue_new_refresh_token",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                            "line": 90,
                                            "char": 81
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 90,
                                        "char": 82
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 90,
                                    "char": 82
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 91,
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
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "accessToken",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                            "line": 91,
                                            "char": 33
                                        },
                                        "name": "createAccessToken",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "client_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                    "line": 91,
                                                    "char": 61
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 91,
                                                "char": 61
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "user_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                    "line": 91,
                                                    "char": 70
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 91,
                                                "char": 70
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "scope",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                    "line": 91,
                                                    "char": 77
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 91,
                                                "char": 77
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "issueNewRefreshToken",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                    "line": 91,
                                                    "char": 99
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 91,
                                                "char": 99
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 91,
                                        "char": 100
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 91,
                                    "char": 100
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 93,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "variable",
                                "value": "issueNewRefreshToken",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 93,
                                "char": 33
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 94,
                                                "char": 18
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "storage",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 94,
                                                "char": 27
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                            "line": 94,
                                            "char": 27
                                        },
                                        "name": "unsetRefreshToken",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                            "line": 94,
                                                            "char": 51
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "refreshToken",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                            "line": 94,
                                                            "char": 64
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                        "line": 94,
                                                        "char": 64
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "refresh_token",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                        "line": 94,
                                                        "char": 80
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                    "line": 94,
                                                    "char": 81
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                                "line": 94,
                                                "char": 81
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                        "line": 94,
                                        "char": 82
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                    "line": 95,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 97,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "token",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 97,
                                "char": 21
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                            "line": 98,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                                "line": 84,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                        "line": 84,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
                    "line": 83,
                    "last-line": 99,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
            "line": 14,
            "char": 5
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/refreshtoken.zep",
        "line": 14,
        "char": 5
    }
]