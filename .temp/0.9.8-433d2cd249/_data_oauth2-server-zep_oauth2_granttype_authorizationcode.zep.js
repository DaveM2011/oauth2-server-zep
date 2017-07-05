[
    {
        "type": "comment",
        "value": "**\n * @package \\OAuth2\\GrantType\n * @author Brent Shaffer <bshafs at gmail dot com>\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
        "line": 7,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\GrantType",
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
        "line": 9,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Storage\\AuthorizationCodeInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                "line": 9,
                "char": 46
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
        "line": 10,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\ResponseType\\AccessTokenInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                "line": 10,
                "char": 45
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
        "line": 11,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\RequestInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                "line": 11,
                "char": 28
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
        "line": 12,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\ResponseInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                "line": 12,
                "char": 29
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
        "line": 14,
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
                "value": "GrantTypeInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                "line": 15,
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
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                    "line": 17,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "authCode",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                    "line": 21,
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
                                "value": "AuthorizationCodeInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 22,
                                "char": 68
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 22,
                            "char": 69
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
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 24,
                                        "char": 36
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 24,
                                    "char": 36
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 25,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param OAuth2\\Storage\\AuthorizationCodeInterface storage REQUIRED Storage class for retrieving authorization code information\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                    "line": 22,
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
                                "value": "authorization_code",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 29,
                                "char": 36
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 28,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                        "line": 28,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                    "line": 27,
                    "last-line": 32,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 32,
                                "char": 62
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 32,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 32,
                                "char": 92
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 32,
                            "char": 93
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "code",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 34,
                                    "char": 17
                                },
                                {
                                    "variable": "authCode",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 34,
                                    "char": 27
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 36,
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
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 36,
                                        "char": 21
                                    },
                                    "name": "request",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "string",
                                                "value": "code",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 36,
                                                "char": 36
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 36,
                                            "char": 36
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 36,
                                    "char": 38
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 36,
                                "char": 38
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 37,
                                            "char": 22
                                        },
                                        "name": "setError",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "400",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 37,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 37,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "invalid_request",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 37,
                                                    "char": 54
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 37,
                                                "char": 54
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Missing parameter: \\\"code\\\" is required",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 37,
                                                    "char": 97
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 37,
                                                "char": 97
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 37,
                                        "char": 98
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 38,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 38,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 39,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 41,
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
                                            "value": "request",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 41,
                                            "char": 28
                                        },
                                        "name": "request",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "code",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 41,
                                                    "char": 43
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 41,
                                                "char": 43
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 41,
                                        "char": 44
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 41,
                                    "char": 44
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 42,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "authCode",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 42,
                                                "char": 29
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "storage",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 42,
                                                "char": 38
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 42,
                                            "char": 38
                                        },
                                        "name": "getAuthorizationCode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "code",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 42,
                                                    "char": 64
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 42,
                                                "char": 64
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 42,
                                        "char": 65
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 42,
                                    "char": 65
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 44,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "authCode",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 44,
                                    "char": 22
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 44,
                                "char": 22
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 45,
                                            "char": 22
                                        },
                                        "name": "setError",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "400",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 45,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 45,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "invalid_grant",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 45,
                                                    "char": 52
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 45,
                                                "char": 52
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Authorization code doesn't exist or is invalid for the client",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 45,
                                                    "char": 117
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 45,
                                                "char": 117
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 45,
                                        "char": 118
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 46,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 46,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 47,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 51,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "isset",
                                    "left": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "authCode",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 51,
                                            "char": 26
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "redirect_uri",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 51,
                                            "char": 41
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 51,
                                        "char": 44
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 51,
                                    "char": 44
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "authCode",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 51,
                                        "char": 54
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "redirect_uri",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 51,
                                        "char": 69
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 51,
                                    "char": 71
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 51,
                                "char": 71
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "or",
                                        "left": {
                                            "type": "not",
                                            "left": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "request",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 52,
                                                    "char": 25
                                                },
                                                "name": "request",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "redirect_uri",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                            "line": 52,
                                                            "char": 48
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                        "line": 52,
                                                        "char": 48
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 52,
                                                "char": 51
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 52,
                                            "char": 51
                                        },
                                        "right": {
                                            "type": "not-equals",
                                            "left": {
                                                "type": "fcall",
                                                "name": "urldecode",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "mcall",
                                                            "variable": {
                                                                "type": "variable",
                                                                "value": "request",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                                "line": 52,
                                                                "char": 71
                                                            },
                                                            "name": "request",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "string",
                                                                        "value": "redirect_uri",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                                        "line": 52,
                                                                        "char": 94
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                                    "line": 52,
                                                                    "char": 94
                                                                }
                                                            ],
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                            "line": 52,
                                                            "char": 95
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                        "line": 52,
                                                        "char": 95
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 52,
                                                "char": 98
                                            },
                                            "right": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "authCode",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 52,
                                                    "char": 108
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "redirect_uri",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 52,
                                                    "char": 123
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 52,
                                                "char": 125
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 52,
                                            "char": 125
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 52,
                                        "char": 125
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 53,
                                                    "char": 26
                                                },
                                                "name": "setError",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "400",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                            "line": 53,
                                                            "char": 39
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                        "line": 53,
                                                        "char": 39
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "redirect_uri_mismatch",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                            "line": 53,
                                                            "char": 64
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                        "line": 53,
                                                        "char": 64
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "The redirect URI is missing or do not match",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                            "line": 53,
                                                            "char": 111
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                        "line": 53,
                                                        "char": 111
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "#section-4.1.3",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                            "line": 53,
                                                            "char": 129
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                        "line": 53,
                                                        "char": 129
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 53,
                                                "char": 130
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 54,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 54,
                                                "char": 29
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 55,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 56,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 58,
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
                                            "value": "authCode",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 58,
                                            "char": 27
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "expires",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 58,
                                            "char": 37
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 58,
                                        "char": 39
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 58,
                                    "char": 39
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 58,
                                "char": 39
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Storage must return authcode with a value for \\\"expires\\\"",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 59,
                                                    "char": 93
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 59,
                                                "char": 93
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 59,
                                        "char": 94
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 60,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 62,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "less",
                                "left": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "authCode",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 62,
                                        "char": 20
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "expires",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 62,
                                        "char": 30
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 62,
                                    "char": 32
                                },
                                "right": {
                                    "type": "fcall",
                                    "name": "time",
                                    "call-type": 1,
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 62,
                                    "char": 41
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 62,
                                "char": 41
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 63,
                                            "char": 22
                                        },
                                        "name": "setError",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "400",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 63,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 63,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "invalid_grant",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 63,
                                                    "char": 52
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 63,
                                                "char": 52
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "The authorization code has expired",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 63,
                                                    "char": 90
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 63,
                                                "char": 90
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 63,
                                        "char": 91
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 64,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 64,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 65,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 67,
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
                                            "value": "authCode",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 67,
                                            "char": 27
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "code",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 67,
                                            "char": 34
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 67,
                                        "char": 36
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 67,
                                    "char": 36
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 67,
                                "char": 36
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "authCode",
                                            "index-expr": [
                                                {
                                                    "type": "string",
                                                    "value": "code",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 69,
                                                    "char": 32
                                                }
                                            ],
                                            "expr": {
                                                "type": "variable",
                                                "value": "code",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 69,
                                                "char": 40
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 69,
                                            "char": 40
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 70,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 72,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "authCode",
                                    "expr": {
                                        "type": "variable",
                                        "value": "authCode",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 72,
                                        "char": 38
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 72,
                                    "char": 38
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 74,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 74,
                                "char": 20
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 75,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 33,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                        "line": 33,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                    "line": 32,
                    "last-line": 77,
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
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 79,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "authCode",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 79,
                                        "char": 30
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 79,
                                    "char": 30
                                },
                                "right": {
                                    "type": "string",
                                    "value": "client_id",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 79,
                                    "char": 42
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 79,
                                "char": 43
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 80,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 77,
                                "char": 45
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 78,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                        "line": 78,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                    "line": 77,
                    "last-line": 82,
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
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 84,
                                                "char": 27
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "authCode",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 84,
                                                "char": 36
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 84,
                                            "char": 36
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "scope",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 84,
                                            "char": 44
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 84,
                                        "char": 46
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 84,
                                    "char": 46
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 84,
                                            "char": 53
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "authCode",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 84,
                                            "char": 62
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 84,
                                        "char": 62
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "scope",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 84,
                                        "char": 70
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 84,
                                    "char": 72
                                },
                                "extra": {
                                    "type": "null",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 84,
                                    "char": 78
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 84,
                                "char": 78
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 85,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 82,
                                "char": 42
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 83,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                        "line": 83,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                    "line": 82,
                    "last-line": 87,
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
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 89,
                                                "char": 27
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "authCode",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 89,
                                                "char": 36
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 89,
                                            "char": 36
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "user_id",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 89,
                                            "char": 46
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 89,
                                        "char": 48
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 89,
                                    "char": 48
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 89,
                                            "char": 55
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "authCode",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 89,
                                            "char": 64
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 89,
                                        "char": 64
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "user_id",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 89,
                                        "char": 74
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 89,
                                    "char": 76
                                },
                                "extra": {
                                    "type": "null",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 89,
                                    "char": 82
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 89,
                                "char": 82
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 90,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 87,
                                "char": 43
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 88,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                        "line": 88,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                    "line": 87,
                    "last-line": 92,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 92,
                                "char": 72
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 92,
                            "char": 73
                        },
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 92,
                            "char": 92
                        },
                        {
                            "type": "parameter",
                            "name": "user_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 92,
                            "char": 109
                        },
                        {
                            "type": "parameter",
                            "name": "scope",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 92,
                            "char": 124
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "token",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 94,
                                    "char": 18
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 95,
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
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 95,
                                            "char": 33
                                        },
                                        "name": "createAccessToken",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "client_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 95,
                                                    "char": 61
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 95,
                                                "char": 61
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "user_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 95,
                                                    "char": 70
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 95,
                                                "char": 70
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "scope",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 95,
                                                    "char": 77
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 95,
                                                "char": 77
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 95,
                                        "char": 78
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 95,
                                    "char": 78
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 96,
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
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 96,
                                        "char": 14
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "storage",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 96,
                                        "char": 23
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                    "line": 96,
                                    "char": 23
                                },
                                "name": "expireAuthorizationCode",
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
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 96,
                                                    "char": 53
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "authCode",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                    "line": 96,
                                                    "char": 62
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 96,
                                                "char": 62
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "code",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                                "line": 96,
                                                "char": 69
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                            "line": 96,
                                            "char": 70
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                        "line": 96,
                                        "char": 70
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 96,
                                "char": 71
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                            "line": 97,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "token",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 97,
                                "char": 21
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                                "line": 93,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                        "line": 93,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
                    "line": 92,
                    "last-line": 99,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
            "line": 14,
            "char": 5
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/authorizationcode.zep",
        "line": 14,
        "char": 5
    }
]