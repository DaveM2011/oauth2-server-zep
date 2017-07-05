[
    {
        "type": "namespace",
        "name": "OAuth2\\Controller",
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
        "line": 3,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Storage\\ClientInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                "line": 3,
                "char": 35
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
        "line": 4,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\ScopeInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                "line": 4,
                "char": 26
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
        "line": 5,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\RequestInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                "line": 5,
                "char": 28
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
        "line": 6,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\ResponseInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                "line": 6,
                "char": 29
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
        "line": 7,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Scope",
                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                "line": 7,
                "char": 17
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
        "line": 8,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "InvalidArgumentException",
                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                "line": 8,
                "char": 29
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
        "line": 12,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * @see AuthorizeControllerInterface\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
        "line": 13,
        "char": 5
    },
    {
        "type": "class",
        "name": "AuthorizeController",
        "abstract": 0,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "AuthorizeControllerInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                "line": 14,
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
                    "name": "scope",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 16,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "state",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 17,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "client_id",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 18,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "redirect_uri",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 19,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "response_type",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 20,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "clientStorage",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 21,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "responseTypes",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 22,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "config",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 23,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "scopeUtil",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 41,
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
                            "name": "clientStorage",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "ClientInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 42,
                                "char": 63
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 42,
                            "char": 64
                        },
                        {
                            "type": "parameter",
                            "name": "responseTypes",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 42,
                                "char": 90
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 42,
                            "char": 90
                        },
                        {
                            "type": "parameter",
                            "name": "config",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 42,
                                "char": 109
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 42,
                            "char": 109
                        },
                        {
                            "type": "parameter",
                            "name": "scopeUtil",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "ScopeInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 42,
                                "char": 136
                            },
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 42,
                                "char": 144
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 42,
                            "char": 144
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
                                    "property": "clientStorage",
                                    "expr": {
                                        "type": "variable",
                                        "value": "clientStorage",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 44,
                                        "char": 48
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 44,
                                    "char": 48
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 45,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "responseTypes",
                                    "expr": {
                                        "type": "variable",
                                        "value": "responseTypes",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 45,
                                        "char": 48
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 45,
                                    "char": 48
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 46,
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
                                                                "value": "allow_implicit",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 47,
                                                                "char": 29
                                                            },
                                                            "value": {
                                                                "type": "bool",
                                                                "value": "false",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 47,
                                                                "char": 36
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 47,
                                                            "char": 36
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "enforce_state",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 48,
                                                                "char": 28
                                                            },
                                                            "value": {
                                                                "type": "bool",
                                                                "value": "true",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 48,
                                                                "char": 34
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 48,
                                                            "char": 34
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "require_exact_redirect_uri",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 49,
                                                                "char": 41
                                                            },
                                                            "value": {
                                                                "type": "bool",
                                                                "value": "true",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 49,
                                                                "char": 47
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 49,
                                                            "char": 47
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "redirect_status_code",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 50,
                                                                "char": 35
                                                            },
                                                            "value": {
                                                                "type": "int",
                                                                "value": "302",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 51,
                                                                "char": 9
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 51,
                                                            "char": 9
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 51,
                                                    "char": 10
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 51,
                                                "char": 10
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "config",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 51,
                                                    "char": 18
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 51,
                                                "char": 18
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 51,
                                        "char": 19
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 51,
                                    "char": 19
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 53,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "is_null",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "scopeUtil",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 53,
                                            "char": 29
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 53,
                                        "char": 29
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 53,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "scopeUtil",
                                            "expr": {
                                                "type": "new",
                                                "class": "Scope",
                                                "dynamic": 0,
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 54,
                                                "char": 40
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 54,
                                            "char": 40
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 55,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 56,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "scopeUtil",
                                    "expr": {
                                        "type": "variable",
                                        "value": "scopeUtil",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 56,
                                        "char": 40
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 56,
                                    "char": 40
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 57,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Constructor\n     *\n     * @param ClientInterface $clientStorage REQUIRED Instance of OAuth2\\Storage\\ClientInterface to retrieve client information\n     * @param array           $responseTypes OPTIONAL Array of OAuth2\\ResponseType\\ResponseTypeInterface objects.  Valid array\n     *                                       keys are \"code\" and \"token\"\n     * @param array           $config        OPTIONAL Configuration options for the server:\n     * @param ScopeInterface  $scopeUtil     OPTIONAL Instance of OAuth2\\ScopeInterface to validate the requested scope\n     * @code\n     *     $config = array(\n     *         \"allow_implicit\" => false,            \/\/ if the controller should allow the \"implicit\" grant type\n     *         \"enforce_state\"  => true              \/\/ if the controller should require the \"state\" parameter\n     *         \"require_exact_redirect_uri\" => true, \/\/ if the controller should require an exact match on the \"redirect_uri\" parameter\n     *         \"redirect_status_code\" => 302,        \/\/ HTTP status code to use for redirect responses\n     *     );\n     * @endcode\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 42,
                    "last-line": 68,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "handleAuthorizeRequest",
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 69,
                                "char": 69
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 69,
                            "char": 70
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 69,
                                "char": 99
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 69,
                            "char": 100
                        },
                        {
                            "type": "parameter",
                            "name": "is_authorized",
                            "const": 0,
                            "data-type": "bool",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 69,
                            "char": 123
                        },
                        {
                            "type": "parameter",
                            "name": "user_id",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 69,
                                "char": 139
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 69,
                            "char": 139
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 73,
                                        "char": 18
                                    },
                                    "name": "validateAuthorizeRequest",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "request",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 73,
                                                "char": 51
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 73,
                                            "char": 51
                                        },
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "response",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 73,
                                                "char": 61
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 73,
                                            "char": 61
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 73,
                                    "char": 63
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 73,
                                "char": 63
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 75,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 76,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "clientData",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 76,
                                    "char": 23
                                },
                                {
                                    "variable": "registered_redirect_uri",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 76,
                                    "char": 48
                                },
                                {
                                    "variable": "redirect_uri",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 76,
                                    "char": 62
                                },
                                {
                                    "variable": "params",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 76,
                                    "char": 70
                                },
                                {
                                    "variable": "authResult",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 76,
                                    "char": 82
                                },
                                {
                                    "variable": "uri",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 76,
                                    "char": 87
                                },
                                {
                                    "variable": "uri_params",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 76,
                                    "char": 99
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 78,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "empty",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 78,
                                        "char": 23
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "redirect_uri",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 78,
                                        "char": 37
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 78,
                                    "char": 37
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 78,
                                "char": 37
                            },
                            "statements": [
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
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 79,
                                                        "char": 35
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "clientStorage",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 79,
                                                        "char": 50
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 79,
                                                    "char": 50
                                                },
                                                "name": "getClientDetails",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "property-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "this",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 79,
                                                                "char": 73
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "client_id",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 79,
                                                                "char": 83
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 79,
                                                            "char": 83
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 79,
                                                        "char": 83
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 79,
                                                "char": 84
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 79,
                                            "char": 84
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 80,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "registered_redirect_uri",
                                            "expr": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "clientData",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 80,
                                                    "char": 53
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "redirect_uri",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 80,
                                                    "char": 68
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 80,
                                                "char": 69
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 80,
                                            "char": 69
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 81,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 84,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "variable",
                                    "value": "is_authorized",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 84,
                                    "char": 27
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "false",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 84,
                                    "char": 35
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 84,
                                "char": 35
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "redirect_uri",
                                            "expr": {
                                                "type": "ternary",
                                                "left": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 85,
                                                        "char": 37
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "redirect_uri",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 85,
                                                        "char": 51
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 85,
                                                    "char": 51
                                                },
                                                "right": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 85,
                                                        "char": 58
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "redirect_uri",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 85,
                                                        "char": 72
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 85,
                                                    "char": 72
                                                },
                                                "extra": {
                                                    "type": "variable",
                                                    "value": "registered_redirect_uri",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 85,
                                                    "char": 97
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 85,
                                                "char": 97
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 85,
                                            "char": 97
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 86,
                                    "char": 16
                                },
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 86,
                                            "char": 18
                                        },
                                        "name": "setNotAuthorizedResponse",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "request",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 86,
                                                    "char": 51
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 86,
                                                "char": 51
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 86,
                                                    "char": 61
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 86,
                                                "char": 61
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "redirect_uri",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 86,
                                                    "char": 75
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 86,
                                                "char": 75
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "user_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 86,
                                                    "char": 84
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 86,
                                                "char": 84
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 86,
                                        "char": 85
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 88,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 89,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 92,
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
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 92,
                                            "char": 27
                                        },
                                        "name": "buildAuthorizeParameters",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "request",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 92,
                                                    "char": 60
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 92,
                                                "char": 60
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 92,
                                                    "char": 70
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 92,
                                                "char": 70
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "user_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 92,
                                                    "char": 79
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 92,
                                                "char": 79
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 92,
                                        "char": 80
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 92,
                                    "char": 80
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 93,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "params",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 93,
                                    "char": 20
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 93,
                                "char": 20
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 95,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 97,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "authResult",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 97,
                                                    "char": 31
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "responseTypes",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 97,
                                                    "char": 45
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 97,
                                                "char": 45
                                            },
                                            "right": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 97,
                                                    "char": 51
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "response_type",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 97,
                                                    "char": 65
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 97,
                                                "char": 65
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 97,
                                            "char": 67
                                        },
                                        "name": "getAuthorizeResponse",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "params",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 97,
                                                    "char": 95
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 97,
                                                "char": 95
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "user_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 97,
                                                    "char": 104
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 97,
                                                "char": 104
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 97,
                                        "char": 105
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 97,
                                    "char": 105
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 98,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "redirect_uri",
                                    "expr": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "authResult",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 98,
                                            "char": 38
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "0",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 98,
                                            "char": 40
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 98,
                                        "char": 41
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 98,
                                    "char": 41
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 99,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "uri_params",
                                    "expr": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "authResult",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 99,
                                            "char": 36
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "1",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 99,
                                            "char": 38
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 99,
                                        "char": 39
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 99,
                                    "char": 39
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 102,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "empty",
                                    "left": {
                                        "type": "variable",
                                        "value": "redirect_uri",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 102,
                                        "char": 32
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 102,
                                    "char": 32
                                },
                                "right": {
                                    "type": "not",
                                    "left": {
                                        "type": "empty",
                                        "left": {
                                            "type": "variable",
                                            "value": "registered_redirect_uri",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 102,
                                            "char": 65
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 102,
                                        "char": 65
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 102,
                                    "char": 65
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 102,
                                "char": 65
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "redirect_uri",
                                            "expr": {
                                                "type": "variable",
                                                "value": "registered_redirect_uri",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 103,
                                                "char": 55
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 103,
                                            "char": 55
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 104,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 106,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "uri",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 106,
                                            "char": 24
                                        },
                                        "name": "buildUri",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "redirect_uri",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 106,
                                                    "char": 46
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 106,
                                                "char": 46
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "uri_params",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 106,
                                                    "char": 58
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 106,
                                                "char": 58
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 106,
                                        "char": 59
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 106,
                                    "char": 59
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 109,
                            "char": 16
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "response",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 109,
                                    "char": 18
                                },
                                "name": "setRedirect",
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
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 109,
                                                    "char": 36
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "config",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 109,
                                                    "char": 43
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 109,
                                                "char": 43
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "redirect_status_code",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 109,
                                                "char": 66
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 109,
                                            "char": 67
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 109,
                                        "char": 67
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "uri",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 109,
                                            "char": 72
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 109,
                                        "char": 72
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 109,
                                "char": 73
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 110,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Handle the authorization request\n     *\n     * @param RequestInterface  $request\n     * @param ResponseInterface $response\n     * @param boolean           $is_authorized\n     * @param mixed             $user_id\n     * @return mixed|void\n     * @throws InvalidArgumentException\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 69,
                    "last-line": 119,
                    "char": 19
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "setNotAuthorizedResponse",
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 120,
                                "char": 74
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 120,
                            "char": 75
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 120,
                                "char": 104
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 120,
                            "char": 105
                        },
                        {
                            "type": "parameter",
                            "name": "redirect_uri",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 120,
                            "char": 119
                        },
                        {
                            "type": "parameter",
                            "name": "user_id",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 120,
                                "char": 135
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 120,
                            "char": 135
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "error",
                                    "expr": {
                                        "type": "string",
                                        "value": "access_denied",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 122,
                                        "char": 36
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 122,
                                    "char": 36
                                },
                                {
                                    "variable": "error_message",
                                    "expr": {
                                        "type": "string",
                                        "value": "The user denied access to your application",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 122,
                                        "char": 98
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 122,
                                    "char": 98
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 123,
                            "char": 16
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "response",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 123,
                                    "char": 18
                                },
                                "name": "setRedirect",
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
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 123,
                                                    "char": 36
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "config",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 123,
                                                    "char": 43
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 123,
                                                "char": 43
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "redirect_status_code",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 123,
                                                "char": 66
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 123,
                                            "char": 67
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 123,
                                        "char": 67
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "redirect_uri",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 123,
                                            "char": 81
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 123,
                                        "char": 81
                                    },
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 123,
                                                "char": 88
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "state",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 123,
                                                "char": 94
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 123,
                                            "char": 94
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 123,
                                        "char": 94
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "error",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 123,
                                            "char": 101
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 123,
                                        "char": 101
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "error_message",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 123,
                                            "char": 116
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 123,
                                        "char": 116
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 123,
                                "char": 117
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 124,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Set not authorized response\n     *\n     * @param RequestInterface  $request\n     * @param ResponseInterface $response\n     * @param string            $redirect_uri\n     * @param mixed             $user_id\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 120,
                    "last-line": 136,
                    "char": 22
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "buildAuthorizeParameters",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "request",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 137,
                            "char": 56
                        },
                        {
                            "type": "parameter",
                            "name": "response",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 137,
                            "char": 66
                        },
                        {
                            "type": "parameter",
                            "name": "user_id",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 137,
                            "char": 75
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "array",
                                "left": [
                                    {
                                        "key": {
                                            "type": "string",
                                            "value": "scope",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 140,
                                            "char": 20
                                        },
                                        "value": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 140,
                                                "char": 27
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "scope",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 140,
                                                "char": 33
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 140,
                                            "char": 33
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 140,
                                        "char": 33
                                    },
                                    {
                                        "key": {
                                            "type": "string",
                                            "value": "state",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 141,
                                            "char": 20
                                        },
                                        "value": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 141,
                                                "char": 27
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "state",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 141,
                                                "char": 33
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 141,
                                            "char": 33
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 141,
                                        "char": 33
                                    },
                                    {
                                        "key": {
                                            "type": "string",
                                            "value": "client_id",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 142,
                                            "char": 24
                                        },
                                        "value": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 142,
                                                "char": 31
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "client_id",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 142,
                                                "char": 41
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 142,
                                            "char": 41
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 142,
                                        "char": 41
                                    },
                                    {
                                        "key": {
                                            "type": "string",
                                            "value": "redirect_uri",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 143,
                                            "char": 27
                                        },
                                        "value": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 143,
                                                "char": 34
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "redirect_uri",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 143,
                                                "char": 47
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 143,
                                            "char": 47
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 143,
                                        "char": 47
                                    },
                                    {
                                        "key": {
                                            "type": "string",
                                            "value": "response_type",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 144,
                                            "char": 28
                                        },
                                        "value": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 144,
                                                "char": 35
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "response_type",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 145,
                                                "char": 9
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 145,
                                            "char": 9
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 145,
                                        "char": 9
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 145,
                                "char": 10
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 146,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * We have made this protected so this class can be extended to add\/modify\n     * these parameters\n     *\n     * @TODO: add dependency injection for the parameters in this method\n     *\n     * @param RequestInterface $request\n     * @param ResponseInterface $response\n     * @param mixed $user_id\n     * @return array\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 137,
                    "last-line": 154,
                    "char": 22
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "validateAuthorizeRequest",
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 155,
                                "char": 71
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 155,
                            "char": 72
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 155,
                                "char": 101
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 155,
                            "char": 102
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "client_id",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 157,
                                    "char": 22
                                },
                                {
                                    "variable": "clientData",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 157,
                                    "char": 34
                                },
                                {
                                    "variable": "registered_redirect_uri",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 157,
                                    "char": 59
                                },
                                {
                                    "variable": "supplied_redirect_uri",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 157,
                                    "char": 82
                                },
                                {
                                    "variable": "parts",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 157,
                                    "char": 89
                                },
                                {
                                    "variable": "redirect_uri",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 157,
                                    "char": 103
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 159,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "client_id",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "request",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 159,
                                            "char": 33
                                        },
                                        "name": "query",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "client_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 159,
                                                    "char": 51
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 159,
                                                "char": 51
                                            },
                                            {
                                                "parameter": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "request",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 159,
                                                        "char": 61
                                                    },
                                                    "name": "request",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "string",
                                                                "value": "client_id",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 159,
                                                                "char": 81
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 159,
                                                            "char": 81
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 159,
                                                    "char": 82
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 159,
                                                "char": 82
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 159,
                                        "char": 83
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 159,
                                    "char": 83
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 160,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "client_id",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 160,
                                    "char": 23
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 160,
                                "char": 23
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 162,
                                            "char": 22
                                        },
                                        "name": "setError",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "400",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 162,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 162,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "invalid_client",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 162,
                                                    "char": 53
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 162,
                                                "char": 53
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "No client id supplied",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 162,
                                                    "char": 78
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 162,
                                                "char": 78
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 162,
                                        "char": 79
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 164,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 164,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 165,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 168,
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
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 168,
                                                "char": 31
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "clientStorage",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 168,
                                                "char": 46
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 168,
                                            "char": 46
                                        },
                                        "name": "getClientDetails",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "client_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 168,
                                                    "char": 73
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 168,
                                                "char": 73
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 168,
                                        "char": 74
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 168,
                                    "char": 74
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 169,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "clientData",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 169,
                                    "char": 24
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 169,
                                "char": 24
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 170,
                                            "char": 22
                                        },
                                        "name": "setError",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "400",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 170,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 170,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "invalid_client",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 170,
                                                    "char": 53
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 170,
                                                "char": 53
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "The client id supplied is invalid",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 170,
                                                    "char": 90
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 170,
                                                "char": 90
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 170,
                                        "char": 91
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 172,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 172,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 173,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 175,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "registered_redirect_uri",
                                    "expr": {
                                        "type": "ternary",
                                        "left": {
                                            "type": "isset",
                                            "left": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "clientData",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 175,
                                                    "char": 55
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "redirect_uri",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 175,
                                                    "char": 70
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 175,
                                                "char": 72
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 175,
                                            "char": 72
                                        },
                                        "right": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "clientData",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 175,
                                                "char": 84
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "redirect_uri",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 175,
                                                "char": 99
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 175,
                                            "char": 101
                                        },
                                        "extra": {
                                            "type": "string",
                                            "value": "",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 175,
                                            "char": 105
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 175,
                                        "char": 105
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 175,
                                    "char": 105
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 181,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "supplied_redirect_uri",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "request",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 181,
                                            "char": 45
                                        },
                                        "name": "query",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "redirect_uri",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 181,
                                                    "char": 66
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 181,
                                                "char": 66
                                            },
                                            {
                                                "parameter": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "request",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 181,
                                                        "char": 76
                                                    },
                                                    "name": "request",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "string",
                                                                "value": "redirect_uri",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 181,
                                                                "char": 99
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 181,
                                                            "char": 99
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 181,
                                                    "char": 100
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 181,
                                                "char": 100
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 181,
                                        "char": 101
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 181,
                                    "char": 101
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 182,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "variable",
                                "value": "supplied_redirect_uri",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 182,
                                "char": 34
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "parts",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "parse_url",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "supplied_redirect_uri",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 184,
                                                            "char": 56
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 184,
                                                        "char": 56
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 184,
                                                "char": 57
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 184,
                                            "char": 57
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 185,
                                    "char": 14
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
                                                    "value": "parts",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 185,
                                                    "char": 27
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "fragment",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 185,
                                                    "char": 38
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 185,
                                                "char": 41
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 185,
                                            "char": 41
                                        },
                                        "right": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "parts",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 185,
                                                "char": 48
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "fragment",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 185,
                                                "char": 59
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 185,
                                            "char": 61
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 185,
                                        "char": 61
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 186,
                                                    "char": 26
                                                },
                                                "name": "setError",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "400",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 186,
                                                            "char": 39
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 186,
                                                        "char": 39
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "invalid_uri",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 186,
                                                            "char": 54
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 186,
                                                        "char": 54
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "The redirect URI must not contain a fragment",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 186,
                                                            "char": 102
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 186,
                                                        "char": 102
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 186,
                                                "char": 103
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 188,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 188,
                                                "char": 29
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 189,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 192,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "and",
                                        "left": {
                                            "type": "variable",
                                            "value": "registered_redirect_uri",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 192,
                                            "char": 41
                                        },
                                        "right": {
                                            "type": "not",
                                            "left": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 192,
                                                    "char": 49
                                                },
                                                "name": "validateRedirectUri",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "supplied_redirect_uri",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 192,
                                                            "char": 91
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 192,
                                                        "char": 91
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "registered_redirect_uri",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 192,
                                                            "char": 116
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 192,
                                                        "char": 116
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 192,
                                                "char": 118
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 192,
                                            "char": 118
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 192,
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
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 193,
                                                    "char": 26
                                                },
                                                "name": "setError",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "400",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 193,
                                                            "char": 39
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 193,
                                                        "char": 39
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "redirect_uri_mismatch",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 193,
                                                            "char": 64
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 193,
                                                        "char": 64
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "The redirect URI provided is missing or does not match",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 193,
                                                            "char": 122
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 193,
                                                        "char": 122
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "#section-3.1.2",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 193,
                                                            "char": 140
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 193,
                                                        "char": 140
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 193,
                                                "char": 141
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 195,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 195,
                                                "char": 29
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 196,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 197,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "redirect_uri",
                                            "expr": {
                                                "type": "variable",
                                                "value": "supplied_redirect_uri",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 197,
                                                "char": 53
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 197,
                                            "char": 53
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 198,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "variable",
                                            "value": "registered_redirect_uri",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 200,
                                            "char": 41
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 200,
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
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 201,
                                                    "char": 26
                                                },
                                                "name": "setError",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "400",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 201,
                                                            "char": 39
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 201,
                                                        "char": 39
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "invalid_uri",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 201,
                                                            "char": 54
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 201,
                                                        "char": 54
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "No redirect URI was supplied or stored",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 201,
                                                            "char": 96
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 201,
                                                        "char": 96
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 201,
                                                "char": 97
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 203,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 203,
                                                "char": 29
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 204,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 206,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "greater",
                                        "left": {
                                            "type": "fcall",
                                            "name": "count",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "fcall",
                                                        "name": "explode",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "string",
                                                                    "value": " ",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 206,
                                                                    "char": 33
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 206,
                                                                "char": 33
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "registered_redirect_uri",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 206,
                                                                    "char": 58
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 206,
                                                                "char": 58
                                                            }
                                                        ],
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 206,
                                                        "char": 59
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 206,
                                                    "char": 59
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 206,
                                            "char": 61
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "1",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 206,
                                            "char": 65
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 206,
                                        "char": 65
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 207,
                                                    "char": 26
                                                },
                                                "name": "setError",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "400",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 207,
                                                            "char": 39
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 207,
                                                        "char": 39
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "invalid_uri",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 207,
                                                            "char": 54
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 207,
                                                        "char": 54
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "A redirect URI must be supplied when multiple redirect URIs are registered",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 207,
                                                            "char": 132
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 207,
                                                        "char": 132
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "#section-3.1.2.3",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 207,
                                                            "char": 152
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 207,
                                                        "char": 152
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 207,
                                                "char": 153
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 209,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 209,
                                                "char": 29
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 210,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 211,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "redirect_uri",
                                            "expr": {
                                                "type": "variable",
                                                "value": "registered_redirect_uri",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 211,
                                                "char": 55
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 211,
                                            "char": 55
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 212,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 213,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "response_type",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 213,
                                    "char": 26
                                },
                                {
                                    "variable": "types",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 213,
                                    "char": 33
                                },
                                {
                                    "variable": "state",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 213,
                                    "char": 40
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 215,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "response_type",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "request",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 215,
                                            "char": 37
                                        },
                                        "name": "query",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "response_type",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 215,
                                                    "char": 59
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 215,
                                                "char": 59
                                            },
                                            {
                                                "parameter": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "request",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 215,
                                                        "char": 69
                                                    },
                                                    "name": "request",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "string",
                                                                "value": "response_type",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 215,
                                                                "char": 93
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 215,
                                                            "char": 93
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 215,
                                                    "char": 94
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 215,
                                                "char": 94
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 215,
                                        "char": 95
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 215,
                                    "char": 95
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 218,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-identical",
                                "left": {
                                    "type": "bool",
                                    "value": "false",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 218,
                                    "char": 20
                                },
                                "right": {
                                    "type": "fcall",
                                    "name": "strpos",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "response_type",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 218,
                                                "char": 42
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 218,
                                            "char": 42
                                        },
                                        {
                                            "parameter": {
                                                "type": "string",
                                                "value": " ",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 218,
                                                "char": 47
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 218,
                                            "char": 47
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 218,
                                    "char": 49
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 218,
                                "char": 49
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "types",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "explode",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": " ",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 219,
                                                            "char": 36
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 219,
                                                        "char": 36
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "response_type",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 219,
                                                            "char": 51
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 219,
                                                        "char": 51
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 219,
                                                "char": 52
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 219,
                                            "char": 52
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 220,
                                    "char": 16
                                },
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "sort",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "types",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 220,
                                                    "char": 23
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 220,
                                                "char": 23
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 220,
                                        "char": 24
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 221,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "response_type",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "ltrim",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "fcall",
                                                            "name": "implode",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "string",
                                                                        "value": " ",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                        "line": 221,
                                                                        "char": 50
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 221,
                                                                    "char": 50
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "types",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                        "line": 221,
                                                                        "char": 57
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 221,
                                                                    "char": 57
                                                                }
                                                            ],
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 221,
                                                            "char": 58
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 221,
                                                        "char": 58
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 221,
                                                "char": 59
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 221,
                                            "char": 59
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 222,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 224,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "state",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "request",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 224,
                                            "char": 29
                                        },
                                        "name": "query",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "state",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 224,
                                                    "char": 43
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 224,
                                                "char": 43
                                            },
                                            {
                                                "parameter": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "request",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 224,
                                                        "char": 53
                                                    },
                                                    "name": "request",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "string",
                                                                "value": "state",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 224,
                                                                "char": 69
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 224,
                                                            "char": 69
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 224,
                                                    "char": 70
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 224,
                                                "char": 70
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 224,
                                        "char": 71
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 224,
                                    "char": 71
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 227,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "or",
                                "left": {
                                    "type": "not",
                                    "left": {
                                        "type": "variable",
                                        "value": "response_type",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 227,
                                        "char": 28
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 227,
                                    "char": 28
                                },
                                "right": {
                                    "type": "not",
                                    "left": {
                                        "type": "fcall",
                                        "name": "in_array",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "response_type",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 227,
                                                    "char": 53
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 227,
                                                "char": 53
                                            },
                                            {
                                                "parameter": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 227,
                                                        "char": 60
                                                    },
                                                    "name": "getValidResponseTypes",
                                                    "call-type": 1,
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 227,
                                                    "char": 84
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 227,
                                                "char": 84
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 227,
                                        "char": 86
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 227,
                                    "char": 86
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 227,
                                "char": 86
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 228,
                                            "char": 22
                                        },
                                        "name": "setRedirect",
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
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 228,
                                                            "char": 40
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "config",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 228,
                                                            "char": 47
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 228,
                                                        "char": 47
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "redirect_status_code",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 228,
                                                        "char": 70
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 228,
                                                    "char": 71
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 228,
                                                "char": 71
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "redirect_uri",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 228,
                                                    "char": 85
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 228,
                                                "char": 85
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "state",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 228,
                                                    "char": 92
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 228,
                                                "char": 92
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "invalid_request",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 228,
                                                    "char": 111
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 228,
                                                "char": 111
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Invalid or missing response type",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 228,
                                                    "char": 147
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 228,
                                                "char": 147
                                            },
                                            {
                                                "parameter": {
                                                    "type": "null",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 228,
                                                    "char": 153
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 228,
                                                "char": 153
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 228,
                                        "char": 154
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 230,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 230,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 231,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 233,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "variable",
                                    "value": "response_type",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 233,
                                    "char": 27
                                },
                                "right": {
                                    "type": "static-constant-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "self",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 233,
                                        "char": 68
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "RESPONSE_TYPE_AUTHORIZATION_CODE",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 233,
                                        "char": 68
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 233,
                                    "char": 68
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 233,
                                "char": 68
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
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 234,
                                                        "char": 28
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "responseTypes",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 234,
                                                        "char": 42
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 234,
                                                    "char": 42
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "code",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 234,
                                                    "char": 49
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 234,
                                                "char": 51
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 234,
                                            "char": 51
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 234,
                                        "char": 51
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 235,
                                                    "char": 26
                                                },
                                                "name": "setRedirect",
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
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 235,
                                                                    "char": 44
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "config",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 235,
                                                                    "char": 51
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 235,
                                                                "char": 51
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "redirect_status_code",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 235,
                                                                "char": 74
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 235,
                                                            "char": 75
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 235,
                                                        "char": 75
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "redirect_uri",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 235,
                                                            "char": 89
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 235,
                                                        "char": 89
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "state",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 235,
                                                            "char": 96
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 235,
                                                        "char": 96
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "unsupported_response_type",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 235,
                                                            "char": 125
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 235,
                                                        "char": 125
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "authorization code grant type not supported",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 235,
                                                            "char": 172
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 235,
                                                        "char": 172
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "null",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 235,
                                                            "char": 178
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 235,
                                                        "char": 178
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 235,
                                                "char": 179
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 237,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 237,
                                                "char": 29
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 238,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 239,
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
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 239,
                                                    "char": 22
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "clientStorage",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 239,
                                                    "char": 37
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 239,
                                                "char": 37
                                            },
                                            "name": "checkRestrictedGrantType",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "client_id",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 239,
                                                        "char": 72
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 239,
                                                    "char": 72
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "string",
                                                        "value": "authorization_code",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 239,
                                                        "char": 94
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 239,
                                                    "char": 94
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 239,
                                            "char": 96
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 239,
                                        "char": 96
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 240,
                                                    "char": 26
                                                },
                                                "name": "setRedirect",
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
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 240,
                                                                    "char": 44
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "config",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 240,
                                                                    "char": 51
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 240,
                                                                "char": 51
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "redirect_status_code",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 240,
                                                                "char": 74
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 240,
                                                            "char": 75
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 240,
                                                        "char": 75
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "redirect_uri",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 240,
                                                            "char": 89
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 240,
                                                        "char": 89
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "state",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 240,
                                                            "char": 96
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 240,
                                                        "char": 96
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "unauthorized_client",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 240,
                                                            "char": 119
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 240,
                                                        "char": 119
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "The grant type is unauthorized for this client_id",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 240,
                                                            "char": 172
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 240,
                                                        "char": 172
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "null",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 240,
                                                            "char": 178
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 240,
                                                        "char": 178
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 240,
                                                "char": 179
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 242,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 242,
                                                "char": 29
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 243,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 244,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "and",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 244,
                                                        "char": 21
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "responseTypes",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 244,
                                                        "char": 35
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 244,
                                                    "char": 35
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "code",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 244,
                                                    "char": 42
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 244,
                                                "char": 44
                                            },
                                            "name": "enforceRedirect",
                                            "call-type": 1,
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 244,
                                            "char": 64
                                        },
                                        "right": {
                                            "type": "not",
                                            "left": {
                                                "type": "variable",
                                                "value": "redirect_uri",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 244,
                                                "char": 80
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 244,
                                            "char": 80
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 244,
                                        "char": 80
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 245,
                                                    "char": 26
                                                },
                                                "name": "setError",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "400",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 245,
                                                            "char": 39
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 245,
                                                        "char": 39
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "redirect_uri_mismatch",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 245,
                                                            "char": 64
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 245,
                                                        "char": 64
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "The redirect URI is mandatory and was not supplied",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 245,
                                                            "char": 118
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 245,
                                                        "char": 118
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 245,
                                                "char": 119
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 247,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 247,
                                                "char": 29
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 248,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 249,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 250,
                                                    "char": 22
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "config",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 250,
                                                    "char": 29
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 250,
                                                "char": 29
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "allow_implicit",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 250,
                                                "char": 46
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 250,
                                            "char": 48
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 250,
                                        "char": 48
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 251,
                                                    "char": 26
                                                },
                                                "name": "setRedirect",
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
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 251,
                                                                    "char": 44
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "config",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 251,
                                                                    "char": 51
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 251,
                                                                "char": 51
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "redirect_status_code",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 251,
                                                                "char": 74
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 251,
                                                            "char": 75
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 251,
                                                        "char": 75
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "redirect_uri",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 251,
                                                            "char": 89
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 251,
                                                        "char": 89
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "state",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 251,
                                                            "char": 96
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 251,
                                                        "char": 96
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "unsupported_response_type",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 251,
                                                            "char": 125
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 251,
                                                        "char": 125
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "implicit grant type not supported",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 251,
                                                            "char": 162
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 251,
                                                        "char": 162
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "null",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 251,
                                                            "char": 168
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 251,
                                                        "char": 168
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 251,
                                                "char": 169
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 253,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 253,
                                                "char": 29
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 254,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 255,
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
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 255,
                                                    "char": 22
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "clientStorage",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 255,
                                                    "char": 37
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 255,
                                                "char": 37
                                            },
                                            "name": "checkRestrictedGrantType",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "client_id",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 255,
                                                        "char": 72
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 255,
                                                    "char": 72
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "string",
                                                        "value": "implicit",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 255,
                                                        "char": 84
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 255,
                                                    "char": 84
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 255,
                                            "char": 86
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 255,
                                        "char": 86
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 256,
                                                    "char": 26
                                                },
                                                "name": "setRedirect",
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
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 256,
                                                                    "char": 44
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "config",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 256,
                                                                    "char": 51
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 256,
                                                                "char": 51
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "redirect_status_code",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 256,
                                                                "char": 74
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 256,
                                                            "char": 75
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 256,
                                                        "char": 75
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "redirect_uri",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 256,
                                                            "char": 89
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 256,
                                                        "char": 89
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "state",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 256,
                                                            "char": 96
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 256,
                                                        "char": 96
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "unauthorized_client",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 256,
                                                            "char": 119
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 256,
                                                        "char": 119
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "The grant type is unauthorized for this client_id",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 256,
                                                            "char": 172
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 256,
                                                        "char": 172
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "null",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 256,
                                                            "char": 178
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 256,
                                                        "char": 178
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 256,
                                                "char": 179
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 258,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 258,
                                                "char": 29
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 259,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 260,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 261,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "requestedScope",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 261,
                                    "char": 27
                                },
                                {
                                    "variable": "clientScope",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 261,
                                    "char": 40
                                },
                                {
                                    "variable": "defaultScope",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 261,
                                    "char": 54
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 263,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "requestedScope",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 263,
                                                "char": 35
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "scopeUtil",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 263,
                                                "char": 46
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 263,
                                            "char": 46
                                        },
                                        "name": "getScopeFromRequest",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "request",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 263,
                                                    "char": 74
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 263,
                                                "char": 74
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 263,
                                        "char": 75
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 263,
                                    "char": 75
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 265,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "variable",
                                "value": "requestedScope",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 265,
                                "char": 27
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "clientScope",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 268,
                                                        "char": 36
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "clientStorage",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 268,
                                                        "char": 51
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 268,
                                                    "char": 51
                                                },
                                                "name": "getClientScope",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "client_id",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 268,
                                                            "char": 76
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 268,
                                                        "char": 76
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 268,
                                                "char": 77
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 268,
                                            "char": 77
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 269,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "or",
                                        "left": {
                                            "type": "list",
                                            "left": {
                                                "type": "and",
                                                "left": {
                                                    "type": "empty",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "clientScope",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 269,
                                                        "char": 36
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 269,
                                                    "char": 36
                                                },
                                                "right": {
                                                    "type": "not",
                                                    "left": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "property-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "this",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 269,
                                                                "char": 44
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "scopeUtil",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 269,
                                                                "char": 55
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 269,
                                                            "char": 55
                                                        },
                                                        "name": "scopeExists",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "requestedScope",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 269,
                                                                    "char": 82
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 269,
                                                                "char": 82
                                                            }
                                                        ],
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 269,
                                                        "char": 83
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 269,
                                                    "char": 83
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 269,
                                                "char": 83
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 269,
                                            "char": 86
                                        },
                                        "right": {
                                            "type": "list",
                                            "left": {
                                                "type": "and",
                                                "left": {
                                                    "type": "not",
                                                    "left": {
                                                        "type": "empty",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "clientScope",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 269,
                                                            "char": 109
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 269,
                                                        "char": 109
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 269,
                                                    "char": 109
                                                },
                                                "right": {
                                                    "type": "not",
                                                    "left": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "property-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "this",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 269,
                                                                "char": 117
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "scopeUtil",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 269,
                                                                "char": 128
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 269,
                                                            "char": 128
                                                        },
                                                        "name": "checkScope",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "requestedScope",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 269,
                                                                    "char": 154
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 269,
                                                                "char": 154
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "clientScope",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 269,
                                                                    "char": 167
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 269,
                                                                "char": 167
                                                            }
                                                        ],
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 269,
                                                        "char": 168
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 269,
                                                    "char": 168
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 269,
                                                "char": 168
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 269,
                                            "char": 170
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 269,
                                        "char": 170
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 270,
                                                    "char": 26
                                                },
                                                "name": "setRedirect",
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
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 270,
                                                                    "char": 44
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "config",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 270,
                                                                    "char": 51
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 270,
                                                                "char": 51
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "redirect_status_code",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 270,
                                                                "char": 74
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 270,
                                                            "char": 75
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 270,
                                                        "char": 75
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "redirect_uri",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 270,
                                                            "char": 89
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 270,
                                                        "char": 89
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "state",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 270,
                                                            "char": 96
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 270,
                                                        "char": 96
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "invalid_scope",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 270,
                                                            "char": 113
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 270,
                                                        "char": 113
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "An unsupported scope was requested",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 270,
                                                            "char": 151
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 270,
                                                        "char": 151
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "null",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 270,
                                                            "char": 157
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 270,
                                                        "char": 157
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 270,
                                                "char": 158
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 272,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 272,
                                                "char": 29
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 273,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 274,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "defaultScope",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 276,
                                                        "char": 37
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "scopeUtil",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 276,
                                                        "char": 48
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 276,
                                                    "char": 48
                                                },
                                                "name": "getDefaultScope",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "client_id",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 276,
                                                            "char": 74
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 276,
                                                        "char": 74
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 276,
                                                "char": 75
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 276,
                                            "char": 75
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 278,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "identical",
                                        "left": {
                                            "type": "bool",
                                            "value": "false",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 278,
                                            "char": 24
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "defaultScope",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 278,
                                            "char": 39
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 278,
                                        "char": 39
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 279,
                                                    "char": 26
                                                },
                                                "name": "setRedirect",
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
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 279,
                                                                    "char": 44
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "config",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 279,
                                                                    "char": 51
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 279,
                                                                "char": 51
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "redirect_status_code",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 279,
                                                                "char": 74
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 279,
                                                            "char": 75
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 279,
                                                        "char": 75
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "redirect_uri",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 279,
                                                            "char": 89
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 279,
                                                        "char": 89
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "state",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 279,
                                                            "char": 96
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 279,
                                                        "char": 96
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "invalid_client",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 279,
                                                            "char": 114
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 279,
                                                        "char": 114
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "This application requires you specify a scope parameter",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 279,
                                                            "char": 173
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 279,
                                                        "char": 173
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "null",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 279,
                                                            "char": 179
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 279,
                                                        "char": 179
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 279,
                                                "char": 180
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 281,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 281,
                                                "char": 29
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 282,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 284,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "requestedScope",
                                            "expr": {
                                                "type": "variable",
                                                "value": "defaultScope",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 284,
                                                "char": 46
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 284,
                                            "char": 46
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 285,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 288,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 288,
                                            "char": 17
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "config",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 288,
                                            "char": 24
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 288,
                                        "char": 24
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "enforce_state",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 288,
                                        "char": 40
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 288,
                                    "char": 43
                                },
                                "right": {
                                    "type": "not",
                                    "left": {
                                        "type": "variable",
                                        "value": "state",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 288,
                                        "char": 52
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 288,
                                    "char": 52
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 288,
                                "char": 52
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 289,
                                            "char": 22
                                        },
                                        "name": "setRedirect",
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
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 289,
                                                            "char": 40
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "config",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 289,
                                                            "char": 47
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 289,
                                                        "char": 47
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "redirect_status_code",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 289,
                                                        "char": 70
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 289,
                                                    "char": 71
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 289,
                                                "char": 71
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "redirect_uri",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 289,
                                                    "char": 85
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 289,
                                                "char": 85
                                            },
                                            {
                                                "parameter": {
                                                    "type": "null",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 289,
                                                    "char": 91
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 289,
                                                "char": 91
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "invalid_request",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 289,
                                                    "char": 110
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 289,
                                                "char": 110
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "The state parameter is required",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 289,
                                                    "char": 145
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 289,
                                                "char": 145
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 289,
                                        "char": 146
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 291,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 291,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 292,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 295,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "scope",
                                    "expr": {
                                        "type": "variable",
                                        "value": "requestedScope",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 295,
                                        "char": 41
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 295,
                                    "char": 41
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 296,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "state",
                                    "expr": {
                                        "type": "variable",
                                        "value": "state",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 296,
                                        "char": 32
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 296,
                                    "char": 32
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 297,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "client_id",
                                    "expr": {
                                        "type": "variable",
                                        "value": "client_id",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 297,
                                        "char": 40
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 297,
                                    "char": 40
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 299,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "redirect_uri",
                                    "expr": {
                                        "type": "variable",
                                        "value": "supplied_redirect_uri",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 299,
                                        "char": 55
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 299,
                                    "char": 55
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 300,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "response_type",
                                    "expr": {
                                        "type": "variable",
                                        "value": "response_type",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 300,
                                        "char": 48
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 300,
                                    "char": 48
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 302,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 302,
                                "char": 20
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 303,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Validate the OAuth request\n     *\n     * @param RequestInterface $request\n     * @param ResponseInterface $response\n     * @return bool\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 155,
                    "last-line": 315,
                    "char": 19
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "method",
                    "name": "buildUri",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "uri",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 316,
                            "char": 34
                        },
                        {
                            "type": "parameter",
                            "name": "params",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 316,
                            "char": 42
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "parse_url",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 318,
                                    "char": 22
                                },
                                {
                                    "variable": "k",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 318,
                                    "char": 25
                                },
                                {
                                    "variable": "v",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 318,
                                    "char": 28
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 319,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "parse_url",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "parse_url",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "uri",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 319,
                                                    "char": 38
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 319,
                                                "char": 38
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 319,
                                        "char": 39
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 319,
                                    "char": 39
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 322,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "params",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 322,
                                "char": 28
                            },
                            "key": "k",
                            "value": "v",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "isset",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "parse_url",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 323,
                                                "char": 31
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "k",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 323,
                                                "char": 33
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 323,
                                            "char": 35
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 323,
                                        "char": 35
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "array-index",
                                                    "operator": "concat-assign",
                                                    "variable": "parse_url",
                                                    "index-expr": [
                                                        {
                                                            "type": "variable",
                                                            "value": "k",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 324,
                                                            "char": 32
                                                        }
                                                    ],
                                                    "expr": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "string",
                                                            "value": "&",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 324,
                                                            "char": 40
                                                        },
                                                        "right": {
                                                            "type": "fcall",
                                                            "name": "http_build_query",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "v",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                        "line": 324,
                                                                        "char": 60
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 324,
                                                                    "char": 60
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "string",
                                                                        "value": "",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                        "line": 324,
                                                                        "char": 64
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 324,
                                                                    "char": 64
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "string",
                                                                        "value": "&",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                        "line": 324,
                                                                        "char": 69
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 324,
                                                                    "char": 69
                                                                }
                                                            ],
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 324,
                                                            "char": 70
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 324,
                                                        "char": 70
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 324,
                                                    "char": 70
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 325,
                                            "char": 13
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "array-index",
                                                    "operator": "assign",
                                                    "variable": "parse_url",
                                                    "index-expr": [
                                                        {
                                                            "type": "variable",
                                                            "value": "k",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 326,
                                                            "char": 32
                                                        }
                                                    ],
                                                    "expr": {
                                                        "type": "fcall",
                                                        "name": "http_build_query",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "v",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 326,
                                                                    "char": 54
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 326,
                                                                "char": 54
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "string",
                                                                    "value": "",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 326,
                                                                    "char": 58
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 326,
                                                                "char": 58
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "string",
                                                                    "value": "&",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 326,
                                                                    "char": 63
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 326,
                                                                "char": 63
                                                            }
                                                        ],
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 326,
                                                        "char": 64
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 326,
                                                    "char": 64
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 327,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 328,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 331,
                            "char": 14
                        },
                        {
                            "type": "return",
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
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "list",
                                                        "left": {
                                                            "type": "ternary",
                                                            "left": {
                                                                "type": "isset",
                                                                "left": {
                                                                    "type": "array-access",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "parse_url",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                        "line": 332,
                                                                        "char": 31
                                                                    },
                                                                    "right": {
                                                                        "type": "string",
                                                                        "value": "scheme",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                        "line": 332,
                                                                        "char": 40
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 332,
                                                                    "char": 42
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 332,
                                                                "char": 42
                                                            },
                                                            "right": {
                                                                "type": "concat",
                                                                "left": {
                                                                    "type": "array-access",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "parse_url",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                        "line": 332,
                                                                        "char": 53
                                                                    },
                                                                    "right": {
                                                                        "type": "string",
                                                                        "value": "scheme",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                        "line": 332,
                                                                        "char": 62
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 332,
                                                                    "char": 64
                                                                },
                                                                "right": {
                                                                    "type": "string",
                                                                    "value": ":\/\/",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 332,
                                                                    "char": 72
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 332,
                                                                "char": 72
                                                            },
                                                            "extra": {
                                                                "type": "string",
                                                                "value": "",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 332,
                                                                "char": 76
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 332,
                                                            "char": 76
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 333,
                                                        "char": 13
                                                    },
                                                    "right": {
                                                        "type": "list",
                                                        "left": {
                                                            "type": "ternary",
                                                            "left": {
                                                                "type": "isset",
                                                                "left": {
                                                                    "type": "array-access",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "parse_url",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                        "line": 333,
                                                                        "char": 31
                                                                    },
                                                                    "right": {
                                                                        "type": "string",
                                                                        "value": "user",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                        "line": 333,
                                                                        "char": 38
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 333,
                                                                    "char": 40
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 333,
                                                                "char": 40
                                                            },
                                                            "right": {
                                                                "type": "concat",
                                                                "left": {
                                                                    "type": "concat",
                                                                    "left": {
                                                                        "type": "array-access",
                                                                        "left": {
                                                                            "type": "variable",
                                                                            "value": "parse_url",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                            "line": 333,
                                                                            "char": 51
                                                                        },
                                                                        "right": {
                                                                            "type": "string",
                                                                            "value": "user",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                            "line": 333,
                                                                            "char": 58
                                                                        },
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                        "line": 334,
                                                                        "char": 13
                                                                    },
                                                                    "right": {
                                                                        "type": "list",
                                                                        "left": {
                                                                            "type": "ternary",
                                                                            "left": {
                                                                                "type": "isset",
                                                                                "left": {
                                                                                    "type": "array-access",
                                                                                    "left": {
                                                                                        "type": "variable",
                                                                                        "value": "parse_url",
                                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                                        "line": 334,
                                                                                        "char": 31
                                                                                    },
                                                                                    "right": {
                                                                                        "type": "string",
                                                                                        "value": "pass",
                                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                                        "line": 334,
                                                                                        "char": 38
                                                                                    },
                                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                                    "line": 334,
                                                                                    "char": 40
                                                                                },
                                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                                "line": 334,
                                                                                "char": 40
                                                                            },
                                                                            "right": {
                                                                                "type": "concat",
                                                                                "left": {
                                                                                    "type": "string",
                                                                                    "value": ":",
                                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                                    "line": 334,
                                                                                    "char": 46
                                                                                },
                                                                                "right": {
                                                                                    "type": "array-access",
                                                                                    "left": {
                                                                                        "type": "variable",
                                                                                        "value": "parse_url",
                                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                                        "line": 334,
                                                                                        "char": 57
                                                                                    },
                                                                                    "right": {
                                                                                        "type": "string",
                                                                                        "value": "pass",
                                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                                        "line": 334,
                                                                                        "char": 64
                                                                                    },
                                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                                    "line": 334,
                                                                                    "char": 66
                                                                                },
                                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                                "line": 334,
                                                                                "char": 66
                                                                            },
                                                                            "extra": {
                                                                                "type": "string",
                                                                                "value": "",
                                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                                "line": 334,
                                                                                "char": 70
                                                                            },
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                            "line": 334,
                                                                            "char": 70
                                                                        },
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                        "line": 334,
                                                                        "char": 72
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 334,
                                                                    "char": 72
                                                                },
                                                                "right": {
                                                                    "type": "string",
                                                                    "value": "@",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 334,
                                                                    "char": 78
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 334,
                                                                "char": 78
                                                            },
                                                            "extra": {
                                                                "type": "string",
                                                                "value": "",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 334,
                                                                "char": 82
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 334,
                                                            "char": 82
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 335,
                                                        "char": 13
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 335,
                                                    "char": 13
                                                },
                                                "right": {
                                                    "type": "list",
                                                    "left": {
                                                        "type": "ternary",
                                                        "left": {
                                                            "type": "isset",
                                                            "left": {
                                                                "type": "array-access",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "parse_url",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 335,
                                                                    "char": 31
                                                                },
                                                                "right": {
                                                                    "type": "string",
                                                                    "value": "host",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 335,
                                                                    "char": 38
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 335,
                                                                "char": 40
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 335,
                                                            "char": 40
                                                        },
                                                        "right": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "parse_url",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 335,
                                                                "char": 51
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "host",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 335,
                                                                "char": 58
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 335,
                                                            "char": 60
                                                        },
                                                        "extra": {
                                                            "type": "string",
                                                            "value": "",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 335,
                                                            "char": 64
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 335,
                                                        "char": 64
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 336,
                                                    "char": 13
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 336,
                                                "char": 13
                                            },
                                            "right": {
                                                "type": "list",
                                                "left": {
                                                    "type": "ternary",
                                                    "left": {
                                                        "type": "isset",
                                                        "left": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "parse_url",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 336,
                                                                "char": 31
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "port",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 336,
                                                                "char": 38
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 336,
                                                            "char": 40
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 336,
                                                        "char": 40
                                                    },
                                                    "right": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "string",
                                                            "value": ":",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 336,
                                                            "char": 46
                                                        },
                                                        "right": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "parse_url",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 336,
                                                                "char": 57
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "port",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 336,
                                                                "char": 64
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 336,
                                                            "char": 66
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 336,
                                                        "char": 66
                                                    },
                                                    "extra": {
                                                        "type": "string",
                                                        "value": "",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 336,
                                                        "char": 70
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 336,
                                                    "char": 70
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 337,
                                                "char": 13
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 337,
                                            "char": 13
                                        },
                                        "right": {
                                            "type": "list",
                                            "left": {
                                                "type": "ternary",
                                                "left": {
                                                    "type": "isset",
                                                    "left": {
                                                        "type": "array-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "parse_url",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 337,
                                                            "char": 31
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "path",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 337,
                                                            "char": 38
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 337,
                                                        "char": 40
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 337,
                                                    "char": 40
                                                },
                                                "right": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "parse_url",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 337,
                                                        "char": 51
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "path",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 337,
                                                        "char": 58
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 337,
                                                    "char": 60
                                                },
                                                "extra": {
                                                    "type": "string",
                                                    "value": "",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 337,
                                                    "char": 64
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 337,
                                                "char": 64
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 338,
                                            "char": 13
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 338,
                                        "char": 13
                                    },
                                    "right": {
                                        "type": "list",
                                        "left": {
                                            "type": "ternary",
                                            "left": {
                                                "type": "and",
                                                "left": {
                                                    "type": "isset",
                                                    "left": {
                                                        "type": "array-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "parse_url",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 338,
                                                            "char": 31
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "query",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 338,
                                                            "char": 39
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 338,
                                                        "char": 42
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 338,
                                                    "char": 42
                                                },
                                                "right": {
                                                    "type": "not",
                                                    "left": {
                                                        "type": "empty",
                                                        "left": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "parse_url",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 338,
                                                                "char": 60
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "query",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 338,
                                                                "char": 68
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 338,
                                                            "char": 70
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 338,
                                                        "char": 70
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 338,
                                                    "char": 70
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 338,
                                                "char": 70
                                            },
                                            "right": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "string",
                                                    "value": "?",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 338,
                                                    "char": 76
                                                },
                                                "right": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "parse_url",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 338,
                                                        "char": 87
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "query",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 338,
                                                        "char": 95
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 338,
                                                    "char": 97
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 338,
                                                "char": 97
                                            },
                                            "extra": {
                                                "type": "string",
                                                "value": "",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 338,
                                                "char": 101
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 338,
                                            "char": 101
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 339,
                                        "char": 13
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 339,
                                    "char": 13
                                },
                                "right": {
                                    "type": "list",
                                    "left": {
                                        "type": "ternary",
                                        "left": {
                                            "type": "isset",
                                            "left": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "parse_url",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 339,
                                                    "char": 31
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "fragment",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 339,
                                                    "char": 42
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 339,
                                                "char": 44
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 339,
                                            "char": 44
                                        },
                                        "right": {
                                            "type": "concat",
                                            "left": {
                                                "type": "string",
                                                "value": "#",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 339,
                                                "char": 50
                                            },
                                            "right": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "parse_url",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 339,
                                                    "char": 61
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "fragment",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 339,
                                                    "char": 72
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 339,
                                                "char": 74
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 339,
                                            "char": 74
                                        },
                                        "extra": {
                                            "type": "string",
                                            "value": "",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 339,
                                            "char": 78
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 339,
                                        "char": 78
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 340,
                                    "char": 9
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 340,
                                "char": 9
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 341,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Build the absolute URI based on supplied URI and parameters.\n     *\n     * @param string $uri    An absolute URI.\n     * @param array  $params Parameters to be append as GET.\n     *\n     * @return string\n     * An absolute URI with supplied parameters.\n     *\n     * @ingroup oauth2_section_4\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 316,
                    "last-line": 343,
                    "char": 20
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "getValidResponseTypes",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "array",
                                "left": [
                                    {
                                        "value": {
                                            "type": "static-constant-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "self",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 345,
                                                "char": 49
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "RESPONSE_TYPE_ACCESS_TOKEN",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 345,
                                                "char": 49
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 345,
                                            "char": 49
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 345,
                                        "char": 49
                                    },
                                    {
                                        "value": {
                                            "type": "static-constant-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "self",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 345,
                                                "char": 89
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "RESPONSE_TYPE_AUTHORIZATION_CODE",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 345,
                                                "char": 89
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 345,
                                            "char": 89
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 345,
                                        "char": 89
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 345,
                                "char": 90
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 346,
                            "char": 5
                        }
                    ],
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 343,
                    "last-line": 356,
                    "char": 22
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "validateRedirectUri",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "inputUri",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 357,
                            "char": 52
                        },
                        {
                            "type": "parameter",
                            "name": "registeredUriString",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 357,
                            "char": 73
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "or",
                                "left": {
                                    "type": "not",
                                    "left": {
                                        "type": "variable",
                                        "value": "inputUri",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 359,
                                        "char": 23
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 359,
                                    "char": 23
                                },
                                "right": {
                                    "type": "not",
                                    "left": {
                                        "type": "variable",
                                        "value": "registeredUriString",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 359,
                                        "char": 46
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 359,
                                    "char": 46
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 359,
                                "char": 46
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 360,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 361,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 362,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "registered_uris",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 362,
                                    "char": 28
                                },
                                {
                                    "variable": "registered_uri",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 362,
                                    "char": 44
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 363,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "registered_uris",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "explode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": " ",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 363,
                                                    "char": 42
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 363,
                                                "char": 42
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "registeredUriString",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 363,
                                                    "char": 63
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 363,
                                                "char": 63
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 363,
                                        "char": 64
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 363,
                                    "char": 64
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 365,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "registered_uris",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 365,
                                "char": 47
                            },
                            "value": "registered_uri",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 366,
                                                "char": 21
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "config",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 366,
                                                "char": 28
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 366,
                                            "char": 28
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "require_exact_redirect_uri",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 366,
                                            "char": 57
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                        "line": 366,
                                        "char": 59
                                    },
                                    "statements": [
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "identical",
                                                "left": {
                                                    "type": "fcall",
                                                    "name": "strcmp",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "inputUri",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 368,
                                                                "char": 35
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 368,
                                                            "char": 35
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "registered_uri",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 368,
                                                                "char": 51
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 368,
                                                            "char": 51
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 368,
                                                    "char": 55
                                                },
                                                "right": {
                                                    "type": "int",
                                                    "value": "0",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 368,
                                                    "char": 59
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 368,
                                                "char": 59
                                            },
                                            "statements": [
                                                {
                                                    "type": "return",
                                                    "expr": {
                                                        "type": "bool",
                                                        "value": "true",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 369,
                                                        "char": 32
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 370,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 371,
                                            "char": 13
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "declare",
                                            "data-type": "variable",
                                            "variables": [
                                                {
                                                    "variable": "registered_uri_length",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 372,
                                                    "char": 42
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 373,
                                            "char": 19
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "registered_uri_length",
                                                    "expr": {
                                                        "type": "fcall",
                                                        "name": "strlen",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "registered_uri",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                    "line": 373,
                                                                    "char": 66
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 373,
                                                                "char": 66
                                                            }
                                                        ],
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 373,
                                                        "char": 67
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 373,
                                                    "char": 67
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 374,
                                            "char": 18
                                        },
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "identical",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "registered_uri_length",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 374,
                                                    "char": 44
                                                },
                                                "right": {
                                                    "type": "int",
                                                    "value": "0",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 374,
                                                    "char": 48
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 374,
                                                "char": 48
                                            },
                                            "statements": [
                                                {
                                                    "type": "return",
                                                    "expr": {
                                                        "type": "bool",
                                                        "value": "false",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 375,
                                                        "char": 33
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 376,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 380,
                                            "char": 18
                                        },
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "identical",
                                                "left": {
                                                    "type": "fcall",
                                                    "name": "strcasecmp",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "fcall",
                                                                "name": "substr",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "variable",
                                                                            "value": "inputUri",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                            "line": 380,
                                                                            "char": 46
                                                                        },
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                        "line": 380,
                                                                        "char": 46
                                                                    },
                                                                    {
                                                                        "parameter": {
                                                                            "type": "int",
                                                                            "value": "0",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                            "line": 380,
                                                                            "char": 49
                                                                        },
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                        "line": 380,
                                                                        "char": 49
                                                                    },
                                                                    {
                                                                        "parameter": {
                                                                            "type": "variable",
                                                                            "value": "registered_uri_length",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                            "line": 380,
                                                                            "char": 72
                                                                        },
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                        "line": 380,
                                                                        "char": 72
                                                                    }
                                                                ],
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 380,
                                                                "char": 73
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 380,
                                                            "char": 73
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "registered_uri",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                                "line": 380,
                                                                "char": 89
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                            "line": 380,
                                                            "char": 89
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 380,
                                                    "char": 93
                                                },
                                                "right": {
                                                    "type": "int",
                                                    "value": "0",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 380,
                                                    "char": 97
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                "line": 380,
                                                "char": 97
                                            },
                                            "statements": [
                                                {
                                                    "type": "return",
                                                    "expr": {
                                                        "type": "bool",
                                                        "value": "true",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                        "line": 381,
                                                        "char": 32
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                                    "line": 382,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                            "line": 383,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 384,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 386,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "false",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 386,
                                "char": 21
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 387,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Internal method for validating redirect URI supplied\n     *\n     * @param string $inputUri The submitted URI to be validated\n     * @param string $registeredUriString The allowed URI(s) to validate against.  Can be a space-delimited string of URIs to\n     *                                    allow for multiple URIs\n     * @return bool\n     * @see http:\/\/tools.ietf.org\/html\/rfc6749#section-3.1.2\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 357,
                    "last-line": 393,
                    "char": 22
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
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 396,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "scope",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 396,
                                    "char": 27
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 396,
                                "char": 27
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 397,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Convenience method to access the scope\n     *\n     * @return string\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 394,
                    "last-line": 403,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getState",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 406,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "state",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 406,
                                    "char": 27
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 406,
                                "char": 27
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 407,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Convenience method to access the state\n     *\n     * @return int\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 404,
                    "last-line": 413,
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
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 416,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "client_id",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 416,
                                    "char": 31
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 416,
                                "char": 31
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 417,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Convenience method to access the client id\n     *\n     * @return mixed\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 414,
                    "last-line": 423,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getRedirectUri",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 426,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "redirect_uri",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 426,
                                    "char": 34
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 426,
                                "char": 34
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 427,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Convenience method to access the redirect url\n     *\n     * @return string\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 424,
                    "last-line": 433,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getResponseType",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 436,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "response_type",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                    "line": 436,
                                    "char": 35
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                                "line": 436,
                                "char": 35
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                            "line": 437,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Convenience method to access the response type\n     *\n     * @return string\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
                    "line": 434,
                    "last-line": 438,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
            "line": 13,
            "char": 5
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/controller\/authorizecontroller.zep",
        "line": 13,
        "char": 5
    }
]