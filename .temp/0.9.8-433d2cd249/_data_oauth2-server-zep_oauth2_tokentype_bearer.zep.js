[
    {
        "type": "comment",
        "value": "**\n * Bearer token\n * @package \\OAuth2\\TokenType\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
        "line": 7,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\TokenType",
        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
        "line": 9,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\RequestInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                "line": 9,
                "char": 28
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
        "line": 10,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\ResponseInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                "line": 10,
                "char": 29
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
        "line": 12,
        "char": 5
    },
    {
        "type": "class",
        "name": "Bearer",
        "abstract": 0,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "TokenTypeInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                "line": 13,
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
                    "name": "config",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                    "line": 16,
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
                            "name": "config",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                "line": 16,
                                "char": 50
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                            "line": 16,
                            "char": 50
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
                                                                "value": "token_param_name",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                "line": 19,
                                                                "char": 39
                                                            },
                                                            "value": {
                                                                "type": "string",
                                                                "value": "access_token",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                "line": 19,
                                                                "char": 55
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 19,
                                                            "char": 55
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "token_bearer_header_name",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                "line": 20,
                                                                "char": 39
                                                            },
                                                            "value": {
                                                                "type": "string",
                                                                "value": "Bearer",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                "line": 21,
                                                                "char": 9
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 21,
                                                            "char": 9
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 21,
                                                    "char": 10
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 21,
                                                "char": 10
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "config",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 21,
                                                    "char": 18
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 21,
                                                "char": 18
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                        "line": 21,
                                        "char": 19
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 21,
                                    "char": 19
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                            "line": 22,
                            "char": 5
                        }
                    ],
                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                    "line": 16,
                    "last-line": 24,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getTokenType",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "string",
                                "value": "Bearer",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                "line": 26,
                                "char": 24
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                            "line": 27,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                "line": 25,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                        "line": 25,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                    "line": 24,
                    "last-line": 35,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "requestHasToken",
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                "line": 36,
                                "char": 62
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                            "line": 36,
                            "char": 63
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "headers",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 38,
                                    "char": 20
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                            "line": 39,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "headers",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "request",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 39,
                                            "char": 31
                                        },
                                        "name": "headers",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "AUTHORIZATION",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 39,
                                                    "char": 55
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 39,
                                                "char": 55
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                        "line": 39,
                                        "char": 56
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 39,
                                    "char": 56
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                            "line": 42,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "or",
                                "left": {
                                    "type": "or",
                                    "left": {
                                        "type": "not",
                                        "left": {
                                            "type": "empty",
                                            "left": {
                                                "type": "variable",
                                                "value": "headers",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 42,
                                                "char": 32
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 42,
                                            "char": 32
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                        "line": 42,
                                        "char": 32
                                    },
                                    "right": {
                                        "type": "cast",
                                        "left": "bool",
                                        "right": {
                                            "type": "list",
                                            "left": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "request",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 42,
                                                    "char": 53
                                                },
                                                "name": "request",
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
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                    "line": 42,
                                                                    "char": 67
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "config",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                    "line": 42,
                                                                    "char": 74
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                "line": 42,
                                                                "char": 74
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "token_param_name",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                "line": 42,
                                                                "char": 93
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 42,
                                                            "char": 94
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 42,
                                                        "char": 94
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 42,
                                                "char": 95
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 42,
                                            "char": 98
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                        "line": 42,
                                        "char": 98
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 42,
                                    "char": 98
                                },
                                "right": {
                                    "type": "cast",
                                    "left": "bool",
                                    "right": {
                                        "type": "list",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "request",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 42,
                                                "char": 119
                                            },
                                            "name": "query",
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
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                "line": 42,
                                                                "char": 131
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "config",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                "line": 42,
                                                                "char": 138
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 42,
                                                            "char": 138
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "token_param_name",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 42,
                                                            "char": 157
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 42,
                                                        "char": 158
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 42,
                                                    "char": 158
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 42,
                                            "char": 159
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                        "line": 42,
                                        "char": 160
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 42,
                                    "char": 160
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                "line": 42,
                                "char": 160
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                            "line": 43,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Check if the request has supplied token\n     *\n     * @param \\OAuth2\\RequestInterface request\n     * @return boolean\n     * @see https:\/\/github.com\/bshaffer\/oauth2-server-php\/issues\/349#issuecomment-37993588\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                "line": 37,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                        "line": 37,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                    "line": 36,
                    "last-line": 69,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                "line": 70,
                                "char": 70
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                            "line": 70,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                "line": 70,
                                "char": 100
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                            "line": 70,
                            "char": 101
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "headers",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 72,
                                    "char": 20
                                },
                                {
                                    "variable": "methodsUsed",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 72,
                                    "char": 33
                                },
                                {
                                    "variable": "matches",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 72,
                                    "char": 42
                                },
                                {
                                    "variable": "contentType",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 72,
                                    "char": 55
                                },
                                {
                                    "variable": "pos",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 72,
                                    "char": 60
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                            "line": 74,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "headers",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "request",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 74,
                                            "char": 31
                                        },
                                        "name": "headers",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "AUTHORIZATION",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 74,
                                                    "char": 55
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 74,
                                                "char": 55
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                        "line": 74,
                                        "char": 56
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 74,
                                    "char": 56
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                            "line": 78,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "methodsUsed",
                                    "expr": {
                                        "type": "add",
                                        "left": {
                                            "type": "add",
                                            "left": {
                                                "type": "cast",
                                                "left": "int",
                                                "right": {
                                                    "type": "list",
                                                    "left": {
                                                        "type": "empty",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "headers",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 78,
                                                            "char": 46
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 78,
                                                        "char": 46
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 78,
                                                    "char": 48
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 78,
                                                "char": 48
                                            },
                                            "right": {
                                                "type": "cast",
                                                "left": "bool",
                                                "right": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "request",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 78,
                                                        "char": 65
                                                    },
                                                    "name": "query",
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
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                        "line": 78,
                                                                        "char": 77
                                                                    },
                                                                    "right": {
                                                                        "type": "variable",
                                                                        "value": "config",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                        "line": 78,
                                                                        "char": 84
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                    "line": 78,
                                                                    "char": 84
                                                                },
                                                                "right": {
                                                                    "type": "string",
                                                                    "value": "token_param_name",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                    "line": 78,
                                                                    "char": 103
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                "line": 78,
                                                                "char": 104
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 78,
                                                            "char": 104
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 78,
                                                    "char": 106
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 78,
                                                "char": 106
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 78,
                                            "char": 106
                                        },
                                        "right": {
                                            "type": "cast",
                                            "left": "bool",
                                            "right": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "request",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 78,
                                                    "char": 123
                                                },
                                                "name": "request",
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
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                    "line": 78,
                                                                    "char": 137
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "config",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                    "line": 78,
                                                                    "char": 144
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                "line": 78,
                                                                "char": 144
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "token_param_name",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                "line": 78,
                                                                "char": 163
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 78,
                                                            "char": 164
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 78,
                                                        "char": 164
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 78,
                                                "char": 165
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 78,
                                            "char": 165
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                        "line": 78,
                                        "char": 165
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 78,
                                    "char": 165
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                            "line": 80,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "greater",
                                "left": {
                                    "type": "variable",
                                    "value": "methodsUsed",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 80,
                                    "char": 24
                                },
                                "right": {
                                    "type": "int",
                                    "value": "1",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 80,
                                    "char": 28
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                "line": 80,
                                "char": 28
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 81,
                                            "char": 22
                                        },
                                        "name": "setError",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "400",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 81,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 81,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "invalid_request",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 81,
                                                    "char": 54
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 81,
                                                "char": 54
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Only one method may be used to authenticate at a time (Auth header, GET or POST)",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 81,
                                                    "char": 138
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 81,
                                                "char": 138
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                        "line": 81,
                                        "char": 139
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 82,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                        "line": 82,
                                        "char": 24
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 83,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                            "line": 87,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "variable",
                                    "value": "methodsUsed",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 87,
                                    "char": 25
                                },
                                "right": {
                                    "type": "int",
                                    "value": "0",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 87,
                                    "char": 29
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                "line": 87,
                                "char": 29
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 88,
                                            "char": 22
                                        },
                                        "name": "setStatusCode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "401",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 88,
                                                    "char": 40
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 88,
                                                "char": 40
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                        "line": 88,
                                        "char": 41
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 89,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                        "line": 89,
                                        "char": 24
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 90,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                            "line": 93,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "empty",
                                    "left": {
                                        "type": "variable",
                                        "value": "headers",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                        "line": 93,
                                        "char": 27
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 93,
                                    "char": 27
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                "line": 93,
                                "char": 27
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "matches",
                                            "expr": {
                                                "type": "null",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 94,
                                                "char": 31
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 94,
                                            "char": 31
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 95,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "fcall",
                                            "name": "preg_match",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "string",
                                                                "value": "\/",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                "line": 95,
                                                                "char": 32
                                                            },
                                                            "right": {
                                                                "type": "array-access",
                                                                "left": {
                                                                    "type": "property-access",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "this",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                        "line": 95,
                                                                        "char": 39
                                                                    },
                                                                    "right": {
                                                                        "type": "variable",
                                                                        "value": "config",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                        "line": 95,
                                                                        "char": 46
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                    "line": 95,
                                                                    "char": 46
                                                                },
                                                                "right": {
                                                                    "type": "string",
                                                                    "value": "token_bearer_header_name",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                    "line": 95,
                                                                    "char": 73
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                "line": 95,
                                                                "char": 75
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 95,
                                                            "char": 75
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "\\\\s(\\\\S+)\/",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 95,
                                                            "char": 89
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 95,
                                                        "char": 89
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 95,
                                                    "char": 89
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "headers",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 95,
                                                        "char": 98
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 95,
                                                    "char": 98
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "matches",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 95,
                                                        "char": 107
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 95,
                                                    "char": 107
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 95,
                                            "char": 109
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                        "line": 95,
                                        "char": 109
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 96,
                                                    "char": 26
                                                },
                                                "name": "setError",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "400",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 96,
                                                            "char": 39
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 96,
                                                        "char": 39
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "invalid_request",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 96,
                                                            "char": 58
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 96,
                                                        "char": 58
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "Malformed auth header",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 96,
                                                            "char": 83
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 96,
                                                        "char": 83
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 96,
                                                "char": 84
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 97,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "null",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 97,
                                                "char": 28
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 98,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 100,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "matches",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 100,
                                            "char": 27
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "1",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 100,
                                            "char": 29
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                        "line": 100,
                                        "char": 30
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 101,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                            "line": 103,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "request",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 103,
                                    "char": 20
                                },
                                "name": "request",
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
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 103,
                                                    "char": 34
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "config",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 103,
                                                    "char": 41
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 103,
                                                "char": 41
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "token_param_name",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 103,
                                                "char": 60
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 103,
                                            "char": 61
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                        "line": 103,
                                        "char": 61
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                "line": 103,
                                "char": 63
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "fcall",
                                            "name": "in_array",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "request",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 105,
                                                            "char": 34
                                                        },
                                                        "name": "server",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "string",
                                                                    "value": "REQUEST_METHOD",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                    "line": 105,
                                                                    "char": 58
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                "line": 105,
                                                                "char": 58
                                                            }
                                                        ],
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 105,
                                                        "char": 59
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 105,
                                                    "char": 59
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "array",
                                                        "left": [
                                                            {
                                                                "value": {
                                                                    "type": "string",
                                                                    "value": "POST",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                    "line": 105,
                                                                    "char": 68
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                "line": 105,
                                                                "char": 68
                                                            },
                                                            {
                                                                "value": {
                                                                    "type": "string",
                                                                    "value": "PUT",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                    "line": 105,
                                                                    "char": 75
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                "line": 105,
                                                                "char": 75
                                                            }
                                                        ],
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 105,
                                                        "char": 76
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 105,
                                                    "char": 76
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 105,
                                            "char": 78
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                        "line": 105,
                                        "char": 78
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 106,
                                                    "char": 26
                                                },
                                                "name": "setError",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "400",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 106,
                                                            "char": 39
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 106,
                                                        "char": 39
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "invalid_request",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 106,
                                                            "char": 58
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 106,
                                                        "char": 58
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "When putting the token in the body, the method must be POST or PUT",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 106,
                                                            "char": 128
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 106,
                                                        "char": 128
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "#section-2.2",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 106,
                                                            "char": 144
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 106,
                                                        "char": 144
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 106,
                                                "char": 145
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 107,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "null",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 107,
                                                "char": 28
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 108,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 110,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "contentType",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "request",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 110,
                                                    "char": 39
                                                },
                                                "name": "server",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "CONTENT_TYPE",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 110,
                                                            "char": 61
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 110,
                                                        "char": 61
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 110,
                                                "char": 62
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 110,
                                            "char": 62
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 111,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "pos",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "strpos",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "contentType",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 111,
                                                            "char": 41
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 111,
                                                        "char": 41
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": ";",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 111,
                                                            "char": 46
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 111,
                                                        "char": 46
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 111,
                                                "char": 47
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 111,
                                            "char": 47
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 112,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not-identical",
                                        "left": {
                                            "type": "variable",
                                            "value": "pos",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 112,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "bool",
                                            "value": "false",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 112,
                                            "char": 30
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                        "line": 112,
                                        "char": 30
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "contentType",
                                                    "expr": {
                                                        "type": "fcall",
                                                        "name": "substr",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "contentType",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                    "line": 113,
                                                                    "char": 53
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                "line": 113,
                                                                "char": 53
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "int",
                                                                    "value": "0",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                    "line": 113,
                                                                    "char": 56
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                "line": 113,
                                                                "char": 56
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "pos",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                    "line": 113,
                                                                    "char": 61
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                                "line": 113,
                                                                "char": 61
                                                            }
                                                        ],
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 113,
                                                        "char": 62
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 113,
                                                    "char": 62
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 114,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 116,
                                    "char": 14
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
                                                    "type": "variable",
                                                    "value": "contentType",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 116,
                                                    "char": 37
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 116,
                                                "char": 37
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "null",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 116,
                                                "char": 47
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 116,
                                            "char": 47
                                        },
                                        "right": {
                                            "type": "not-equals",
                                            "left": {
                                                "type": "variable",
                                                "value": "contentType",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 116,
                                                "char": 62
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "application\/x-www-form-urlencoded",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 116,
                                                "char": 100
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 116,
                                            "char": 100
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                        "line": 116,
                                        "char": 100
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 119,
                                                    "char": 26
                                                },
                                                "name": "setError",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "400",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 119,
                                                            "char": 39
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 119,
                                                        "char": 39
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "invalid_request",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 119,
                                                            "char": 58
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 119,
                                                        "char": 58
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "The content type for POST requests must be \\\"application\/x-www-form-urlencoded\\\"",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 119,
                                                            "char": 142
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 119,
                                                        "char": 142
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 119,
                                                "char": 143
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 120,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "null",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 120,
                                                "char": 28
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 121,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 123,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "request",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 123,
                                            "char": 28
                                        },
                                        "name": "request",
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
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 123,
                                                            "char": 42
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "config",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                            "line": 123,
                                                            "char": 49
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 123,
                                                        "char": 49
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "token_param_name",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                        "line": 123,
                                                        "char": 68
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 123,
                                                    "char": 69
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 123,
                                                "char": 69
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                        "line": 123,
                                        "char": 70
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 124,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                            "line": 127,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "request",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                    "line": 127,
                                    "char": 24
                                },
                                "name": "query",
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
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 127,
                                                    "char": 36
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "config",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                    "line": 127,
                                                    "char": 43
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 127,
                                                "char": 43
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "token_param_name",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                                "line": 127,
                                                "char": 62
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                            "line": 127,
                                            "char": 63
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                        "line": 127,
                                        "char": 63
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                "line": 127,
                                "char": 64
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                            "line": 128,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * This is a convenience function that can be used to get the token, which can then\n     * be passed to getAccessTokenData(). The constraints specified by the draft are\n     * attempted to be adheared to in this method.\n     *\n     * As per the Bearer spec (draft 8, section 2) - there are three ways for a client\n     * to specify the bearer token, in order of preference: Authorization Header,\n     * POST and GET.\n     *\n     * NB: Resource servers MUST accept tokens via the Authorization scheme\n     * (http:\/\/tools.ietf.org\/html\/rfc6750#section-2).\n     *\n     * @param \\OAuth2\\RequestInterface request\n     * @param \\OAuth2\\ResponseInterface request\n     * @return string\n     * @todo Should we enforce TLS\/SSL in this function?\n     *\n     * @see http:\/\/tools.ietf.org\/html\/rfc6750#section-2.1\n     * @see http:\/\/tools.ietf.org\/html\/rfc6750#section-2.2\n     * @see http:\/\/tools.ietf.org\/html\/rfc6750#section-2.3\n     *\n     * Old Android version bug (at least with version 2.2)\n     * @see http:\/\/code.google.com\/p\/android\/issues\/detail?id=6684\n     *\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                "line": 70,
                                "char": 113
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                                "line": 71,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                        "line": 71,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
                    "line": 70,
                    "last-line": 129,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
            "line": 12,
            "char": 5
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/tokentype\/bearer.zep",
        "line": 12,
        "char": 5
    }
]