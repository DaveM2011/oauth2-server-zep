[
    {
        "type": "comment",
        "value": "**\n * @package \\OAuth2\\ResponseType\n * @author Brent Shaffer <bshafs at gmail dot com>\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
        "line": 7,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\ResponseType",
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
        "line": 9,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Storage\\AuthorizationCodeInterface",
                "alias": "AuthorizationCodeStorageInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                "line": 9,
                "char": 83
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
        "line": 11,
        "char": 5
    },
    {
        "type": "class",
        "name": "AuthorizationCode",
        "abstract": 0,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "AuthorizationCodeInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                "line": 12,
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
                    "name": "storage",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                    "line": 14,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "config",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
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
                            "name": "storage",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "AuthorizationCodeStorageInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                "line": 16,
                                "char": 75
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 16,
                            "char": 76
                        },
                        {
                            "type": "parameter",
                            "name": "config",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                "line": 16,
                                "char": 95
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 16,
                            "char": 95
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
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 18,
                                        "char": 36
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                    "line": 18,
                                    "char": 36
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 19,
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
                                                                "value": "enforce_redirect",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                "line": 20,
                                                                "char": 33
                                                            },
                                                            "value": {
                                                                "type": "bool",
                                                                "value": "false",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                "line": 20,
                                                                "char": 40
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                            "line": 20,
                                                            "char": 40
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "auth_code_lifetime",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                "line": 21,
                                                                "char": 33
                                                            },
                                                            "value": {
                                                                "type": "int",
                                                                "value": "30",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                "line": 22,
                                                                "char": 9
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                            "line": 22,
                                                            "char": 9
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 22,
                                                    "char": 10
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                "line": 22,
                                                "char": 10
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "config",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 22,
                                                    "char": 18
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                "line": 22,
                                                "char": 18
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 22,
                                        "char": 19
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                    "line": 22,
                                    "char": 19
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 23,
                            "char": 5
                        }
                    ],
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                    "line": 16,
                    "last-line": 25,
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
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 25,
                            "char": 52
                        },
                        {
                            "type": "parameter",
                            "name": "user_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                "line": 25,
                                "char": 75
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 25,
                            "char": 75
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "result",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                    "line": 27,
                                    "char": 19
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 30,
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
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 30,
                                                    "char": 30
                                                },
                                                "value": {
                                                    "type": "empty-array",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 30,
                                                    "char": 34
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                "line": 30,
                                                "char": 34
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 30,
                                        "char": 35
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                    "line": 30,
                                    "char": 35
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 32,
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
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                "line": 33,
                                                                "char": 20
                                                            },
                                                            "value": {
                                                                "type": "null",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                "line": 33,
                                                                "char": 26
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                            "line": 33,
                                                            "char": 26
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "state",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                "line": 34,
                                                                "char": 20
                                                            },
                                                            "value": {
                                                                "type": "null",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                "line": 35,
                                                                "char": 9
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                            "line": 35,
                                                            "char": 9
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 35,
                                                    "char": 10
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                "line": 35,
                                                "char": 10
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "params",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 35,
                                                    "char": 18
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                "line": 35,
                                                "char": 18
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 35,
                                        "char": 19
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                    "line": 35,
                                    "char": 19
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 37,
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
                                            "value": "query",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 37,
                                            "char": 27
                                        },
                                        {
                                            "type": "string",
                                            "value": "code",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 37,
                                            "char": 35
                                        }
                                    ],
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 37,
                                            "char": 44
                                        },
                                        "name": "createAuthorizationCode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "params",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                        "line": 37,
                                                        "char": 75
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "client_id",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                        "line": 37,
                                                        "char": 87
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 37,
                                                    "char": 88
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                "line": 37,
                                                "char": 88
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "user_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 37,
                                                    "char": 97
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                "line": 37,
                                                "char": 97
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "params",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                        "line": 37,
                                                        "char": 105
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "redirect_uri",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                        "line": 37,
                                                        "char": 120
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 37,
                                                    "char": 121
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                "line": 37,
                                                "char": 121
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "params",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                        "line": 37,
                                                        "char": 129
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "scope",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                        "line": 37,
                                                        "char": 137
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 37,
                                                    "char": 138
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                "line": 37,
                                                "char": 138
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 37,
                                        "char": 139
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                    "line": 37,
                                    "char": 139
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 39,
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
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 39,
                                        "char": 24
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "state",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 39,
                                        "char": 32
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                    "line": 39,
                                    "char": 34
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                "line": 39,
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
                                                    "value": "query",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 40,
                                                    "char": 31
                                                },
                                                {
                                                    "type": "string",
                                                    "value": "state",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 40,
                                                    "char": 40
                                                }
                                            ],
                                            "expr": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "params",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 40,
                                                    "char": 50
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "state",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 40,
                                                    "char": 58
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                "line": 40,
                                                "char": 59
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 40,
                                            "char": 59
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                    "line": 41,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 43,
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
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                "line": 43,
                                                "char": 23
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "redirect_uri",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                "line": 43,
                                                "char": 38
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 43,
                                            "char": 39
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 43,
                                        "char": 39
                                    },
                                    {
                                        "value": {
                                            "type": "variable",
                                            "value": "result",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 43,
                                            "char": 47
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 43,
                                        "char": 47
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                "line": 43,
                                "char": 48
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 44,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                "line": 26,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                        "line": 26,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                    "line": 25,
                    "last-line": 58,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "createAuthorizationCode",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 59,
                            "char": 62
                        },
                        {
                            "type": "parameter",
                            "name": "user_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 59,
                            "char": 79
                        },
                        {
                            "type": "parameter",
                            "name": "redirect_uri",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 59,
                            "char": 101
                        },
                        {
                            "type": "parameter",
                            "name": "scope",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                "line": 59,
                                "char": 123
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 59,
                            "char": 123
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "code",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                    "line": 61,
                                    "char": 17
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 63,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "code",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 63,
                                            "char": 25
                                        },
                                        "name": "generateAuthorizationCode",
                                        "call-type": 1,
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 63,
                                        "char": 53
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                    "line": 63,
                                    "char": 53
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 64,
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
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 64,
                                        "char": 14
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "storage",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 64,
                                        "char": 23
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                    "line": 64,
                                    "char": 23
                                },
                                "name": "setAuthorizationCode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "code",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 64,
                                            "char": 49
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 64,
                                        "char": 49
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "client_id",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 64,
                                            "char": 60
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 64,
                                        "char": 60
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "user_id",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 64,
                                            "char": 69
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 64,
                                        "char": 69
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "redirect_uri",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 64,
                                            "char": 83
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 64,
                                        "char": 83
                                    },
                                    {
                                        "parameter": {
                                            "type": "add",
                                            "left": {
                                                "type": "fcall",
                                                "name": "time",
                                                "call-type": 1,
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                "line": 64,
                                                "char": 92
                                            },
                                            "right": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                        "line": 64,
                                                        "char": 99
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "config",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                        "line": 64,
                                                        "char": 106
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 64,
                                                    "char": 106
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "auth_code_lifetime",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 64,
                                                    "char": 127
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                "line": 64,
                                                "char": 128
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 64,
                                            "char": 128
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 64,
                                        "char": 128
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "scope",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 64,
                                            "char": 135
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 64,
                                        "char": 135
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                "line": 64,
                                "char": 136
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 66,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "code",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                "line": 66,
                                "char": 20
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 67,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Handle the creation of the authorization code.\n     *\n     * @param string client_id Client identifier related to the authorization code\n     * @param string user_id User ID associated with the authorization code\n     * @param string redirect_uri An absolute URI to which the authorization server will redirect the\n     * user-agent to when the end-user authorization step is completed.\n     * @param string scope (optional) Scopes to be stored in space-separated string.\n     * @return strin\n     *\n     * @see http:\/\/tools.ietf.org\/html\/rfc6749#section-4\n     * @ingroup oauth2_section_4\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                "line": 60,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                        "line": 60,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                    "line": 59,
                    "last-line": 71,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "enforceRedirect",
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
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 74,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "config",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 74,
                                        "char": 28
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                    "line": 74,
                                    "char": 28
                                },
                                "right": {
                                    "type": "string",
                                    "value": "enforce_redirect",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                    "line": 74,
                                    "char": 47
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                "line": 74,
                                "char": 48
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 75,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @return boolean  TRUE if the grant type requires a redirect_uri, FALSE if not\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                "line": 73,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                        "line": 73,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                    "line": 72,
                    "last-line": 86,
                    "char": 19
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "generateAuthorizationCode",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "randomData",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                    "line": 89,
                                    "char": 23
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 90,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "int",
                            "variables": [
                                {
                                    "variable": "tokenLen",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                    "line": 90,
                                    "char": 21
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 92,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "tokenLen",
                                    "expr": {
                                        "type": "int",
                                        "value": "40",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 92,
                                        "char": 26
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                    "line": 92,
                                    "char": 26
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 94,
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
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 94,
                                            "char": 46
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 94,
                                        "char": 46
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                "line": 94,
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
                                                            "value": "100",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                            "line": 95,
                                                            "char": 50
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                        "line": 95,
                                                        "char": 50
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "constant",
                                                            "value": "MCRYPT_DEV_URANDOM",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                            "line": 95,
                                                            "char": 70
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                        "line": 95,
                                                        "char": 70
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                "line": 95,
                                                "char": 71
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 95,
                                            "char": 71
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                    "line": 96,
                                    "char": 9
                                }
                            ],
                            "elseif_statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "fcall",
                                            "name": "function_exists",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "string",
                                                        "value": "openssl_random_pseudo_bytes",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                        "line": 96,
                                                        "char": 64
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 96,
                                                    "char": 64
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 96,
                                            "char": 65
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 96,
                                        "char": 67
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
                                                                    "value": "100",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                    "line": 97,
                                                                    "char": 61
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                "line": 97,
                                                                "char": 61
                                                            }
                                                        ],
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                        "line": 97,
                                                        "char": 62
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 97,
                                                    "char": 62
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 98,
                                            "char": 9
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                    "line": 98,
                                    "char": 16
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "fcall",
                                            "name": "file_exists",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "string",
                                                        "value": "\/dev\/urandom",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                        "line": 98,
                                                        "char": 45
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 98,
                                                    "char": 45
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 98,
                                            "char": 46
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 98,
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
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "fcall",
                                                            "name": "file_get_contents",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "string",
                                                                        "value": "\/dev\/urandom",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                        "line": 100,
                                                                        "char": 62
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                    "line": 100,
                                                                    "char": 62
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "bool",
                                                                        "value": "false",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                        "line": 100,
                                                                        "char": 69
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                    "line": 100,
                                                                    "char": 69
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "null",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                        "line": 100,
                                                                        "char": 75
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                    "line": 100,
                                                                    "char": 75
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "int",
                                                                        "value": "0",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                        "line": 100,
                                                                        "char": 78
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                    "line": 100,
                                                                    "char": 78
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "int",
                                                                        "value": "100",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                        "line": 100,
                                                                        "char": 83
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                    "line": 100,
                                                                    "char": 83
                                                                }
                                                            ],
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                            "line": 100,
                                                            "char": 85
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
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                        "line": 100,
                                                                        "char": 103
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                    "line": 100,
                                                                    "char": 103
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "bool",
                                                                        "value": "true",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                        "line": 100,
                                                                        "char": 109
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                    "line": 100,
                                                                    "char": 109
                                                                }
                                                            ],
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                            "line": 100,
                                                            "char": 110
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                        "line": 100,
                                                        "char": 110
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 100,
                                                    "char": 110
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 101,
                                            "char": 9
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                    "line": 101,
                                    "char": 14
                                }
                            ],
                            "else_statements": [
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
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                    "line": 102,
                                                                    "char": 40
                                                                },
                                                                "right": {
                                                                    "type": "fcall",
                                                                    "name": "mt_rand",
                                                                    "call-type": 1,
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                    "line": 102,
                                                                    "char": 52
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                "line": 102,
                                                                "char": 52
                                                            },
                                                            "right": {
                                                                "type": "fcall",
                                                                "name": "mt_rand",
                                                                "call-type": 1,
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                "line": 102,
                                                                "char": 64
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                            "line": 102,
                                                            "char": 64
                                                        },
                                                        "right": {
                                                            "type": "fcall",
                                                            "name": "mt_rand",
                                                            "call-type": 1,
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                            "line": 102,
                                                            "char": 76
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                        "line": 102,
                                                        "char": 76
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
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                    "line": 102,
                                                                    "char": 92
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                "line": 102,
                                                                "char": 92
                                                            }
                                                        ],
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                        "line": 102,
                                                        "char": 94
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 102,
                                                    "char": 94
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
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                "line": 102,
                                                                "char": 112
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                            "line": 102,
                                                            "char": 112
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "bool",
                                                                "value": "true",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                                "line": 102,
                                                                "char": 118
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                            "line": 102,
                                                            "char": 118
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 102,
                                                    "char": 119
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                "line": 102,
                                                "char": 119
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 102,
                                            "char": 119
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                    "line": 103,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 105,
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
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                        "line": 105,
                                                        "char": 36
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 105,
                                                    "char": 36
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "randomData",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                        "line": 105,
                                                        "char": 48
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                                    "line": 105,
                                                    "char": 48
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 105,
                                            "char": 49
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 105,
                                        "char": 49
                                    },
                                    {
                                        "parameter": {
                                            "type": "int",
                                            "value": "0",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 105,
                                            "char": 52
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 105,
                                        "char": 52
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "tokenLen",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                            "line": 105,
                                            "char": 62
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                        "line": 105,
                                        "char": 62
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                "line": 105,
                                "char": 63
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                            "line": 106,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Generates an unique auth code.\n     *\n     * Implementing classes may want to override this function to implement\n     * other auth code generation schemes.\n     *\n     * @return string An unique auth code.\n     *\n     * @ingroup oauth2_section_4\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                                "line": 88,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                        "line": 88,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
                    "line": 87,
                    "last-line": 107,
                    "char": 22
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
            "line": 11,
            "char": 5
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcode.zep",
        "line": 11,
        "char": 5
    }
]