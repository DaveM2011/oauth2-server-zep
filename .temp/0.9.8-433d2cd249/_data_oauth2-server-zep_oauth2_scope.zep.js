[
    {
        "type": "comment",
        "value": "**\n* @see OAuth2\\ScopeInterface\n*",
        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
        "line": 6,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2",
        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
        "line": 8,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Storage\\ScopeInterface",
                "alias": "ScopeStorageInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                "line": 8,
                "char": 59
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
        "line": 10,
        "char": 5
    },
    {
        "type": "class",
        "name": "Scope",
        "abstract": 0,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "ScopeInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                "line": 11,
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
                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                    "line": 17,
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
                                "value": "ScopeStorageInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                "line": 18,
                                "char": 63
                            },
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                "line": 18,
                                "char": 71
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 18,
                            "char": 71
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-equals",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "storage",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 20,
                                        "char": 28
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 20,
                                    "char": 28
                                },
                                "right": {
                                    "type": "string",
                                    "value": "object",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 20,
                                    "char": 39
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                "line": 20,
                                "char": 39
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\InvalidArgumentException",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Argument 1 to OAuth2\\\\Scope must be null, an array, or instance of OAuth2\\\\Storage\\\\ScopeInterface",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                    "line": 21,
                                                    "char": 149
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                "line": 21,
                                                "char": 149
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 21,
                                        "char": 150
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 22,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 24,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "list",
                                    "left": {
                                        "type": "instanceof",
                                        "left": {
                                            "type": "variable",
                                            "value": "storage",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                            "line": 24,
                                            "char": 31
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "ScopeStorageInterface",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                            "line": 24,
                                            "char": 54
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 24,
                                        "char": 54
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 24,
                                    "char": 56
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                "line": 24,
                                "char": 56
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\InvalidArgumentException",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Argument 1 to OAuth2\\\\Scope must be null, an array, or instance of OAuth2\\\\Storage\\\\ScopeInterface",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                    "line": 25,
                                                    "char": 149
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                "line": 25,
                                                "char": 149
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 25,
                                        "char": 150
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 26,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 28,
                            "char": 11
                        },
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
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 28,
                                        "char": 36
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 28,
                                    "char": 36
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 29,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param mixed storage\n     * Either an array of supported scopes, or an instance of OAuth2\\Storage\\ScopeInterface\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                    "line": 18,
                    "last-line": 42,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "checkScope",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "required_scope",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 43,
                            "char": 54
                        },
                        {
                            "type": "parameter",
                            "name": "available_scope",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 43,
                            "char": 79
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "scope1",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 45,
                                    "char": 19
                                },
                                {
                                    "variable": "scope2",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 45,
                                    "char": 27
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 46,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "scope1",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "explode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": " ",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                    "line": 46,
                                                    "char": 33
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                "line": 46,
                                                "char": 33
                                            },
                                            {
                                                "parameter": {
                                                    "type": "fcall",
                                                    "name": "trim",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "required_scope",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                                "line": 46,
                                                                "char": 54
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                            "line": 46,
                                                            "char": 54
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                    "line": 46,
                                                    "char": 55
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                "line": 46,
                                                "char": 55
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 46,
                                        "char": 56
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 46,
                                    "char": 56
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 47,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "scope2",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "explode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": " ",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                    "line": 47,
                                                    "char": 33
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                "line": 47,
                                                "char": 33
                                            },
                                            {
                                                "parameter": {
                                                    "type": "fcall",
                                                    "name": "trim",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "available_scope",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                                "line": 47,
                                                                "char": 55
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                            "line": 47,
                                                            "char": 55
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                    "line": 47,
                                                    "char": 56
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                "line": 47,
                                                "char": 56
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 47,
                                        "char": 57
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 47,
                                    "char": 57
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 48,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "fcall",
                                    "name": "count",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "fcall",
                                                "name": "array_diff",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "scope1",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                            "line": 48,
                                                            "char": 39
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                        "line": 48,
                                                        "char": 39
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "scope2",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                            "line": 48,
                                                            "char": 47
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                        "line": 48,
                                                        "char": 47
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                "line": 48,
                                                "char": 48
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                            "line": 48,
                                            "char": 48
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 48,
                                    "char": 51
                                },
                                "right": {
                                    "type": "int",
                                    "value": "0",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 48,
                                    "char": 54
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                "line": 48,
                                "char": 54
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 49,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Check if everything in required scope is contained in available scope.\n     *\n     * @param string required_scope A space-separated string of scopes.\n     *\n     * @return boolean  TRUE if everything in required scope is contained in available scope,\n     * and FALSE if it isn't.\n     *\n     * @see http:\/\/tools.ietf.org\/html\/rfc6749#section-7\n     *\n     * @ingroup oauth2_section_7\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                "line": 44,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                        "line": 44,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                    "line": 43,
                    "last-line": 57,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "scopeExists",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "scope",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 58,
                            "char": 46
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "scopes",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 60,
                                    "char": 19
                                },
                                {
                                    "variable": "reservedScope",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 60,
                                    "char": 34
                                },
                                {
                                    "variable": "nonReservedScopes",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 60,
                                    "char": 53
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 63,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "scopes",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "explode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": " ",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                    "line": 63,
                                                    "char": 33
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                "line": 63,
                                                "char": 33
                                            },
                                            {
                                                "parameter": {
                                                    "type": "fcall",
                                                    "name": "trim",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "scope",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                                "line": 63,
                                                                "char": 45
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                            "line": 63,
                                                            "char": 45
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                    "line": 63,
                                                    "char": 46
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                "line": 63,
                                                "char": 46
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 63,
                                        "char": 47
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 63,
                                    "char": 47
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 64,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "reservedScope",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                            "line": 64,
                                            "char": 34
                                        },
                                        "name": "getReservedScopes",
                                        "call-type": 1,
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 64,
                                        "char": 54
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 64,
                                    "char": 54
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 65,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "nonReservedScopes",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "array_diff",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "scopes",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                    "line": 65,
                                                    "char": 50
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                "line": 65,
                                                "char": 50
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "reservedScope",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                    "line": 65,
                                                    "char": 65
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                "line": 65,
                                                "char": 65
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 65,
                                        "char": 66
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 65,
                                    "char": 66
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 67,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "fcall",
                                    "name": "count",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "nonReservedScopes",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                "line": 67,
                                                "char": 35
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                            "line": 67,
                                            "char": 35
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 67,
                                    "char": 38
                                },
                                "right": {
                                    "type": "int",
                                    "value": "0",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 67,
                                    "char": 42
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                "line": 67,
                                "char": 42
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "true",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 68,
                                        "char": 24
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 69,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 69,
                            "char": 10
                        },
                        {
                            "type": "empty",
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 72,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "nonReservedScopes",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "implode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": " ",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                    "line": 72,
                                                    "char": 44
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                "line": 72,
                                                "char": 44
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "nonReservedScopes",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                    "line": 72,
                                                    "char": 63
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                "line": 72,
                                                "char": 63
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 72,
                                        "char": 64
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 72,
                                    "char": 64
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 74,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 74,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "storage",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 74,
                                        "char": 30
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 74,
                                    "char": 30
                                },
                                "name": "scopeExists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "nonReservedScopes",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                            "line": 74,
                                            "char": 60
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 74,
                                        "char": 60
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                "line": 74,
                                "char": 61
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 75,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Check if the provided scope exists in storage.\n     *\n     * @param string! scope A space-separated string of scopes.\n     *\n     * @return boolean TRUE if it exists, FALSE otherwise.\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                "line": 59,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                        "line": 59,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                    "line": 58,
                    "last-line": 77,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getScopeFromRequest",
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                "line": 77,
                                "char": 66
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 77,
                            "char": 67
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "request",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 80,
                                    "char": 24
                                },
                                "name": "request",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "scope",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                            "line": 80,
                                            "char": 40
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 80,
                                        "char": 40
                                    },
                                    {
                                        "parameter": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "request",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                "line": 80,
                                                "char": 50
                                            },
                                            "name": "query",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "string",
                                                        "value": "scope",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                        "line": 80,
                                                        "char": 64
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                                    "line": 80,
                                                    "char": 64
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                            "line": 80,
                                            "char": 65
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 80,
                                        "char": 65
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                "line": 80,
                                "char": 66
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                "line": 78,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                        "line": 78,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                    "line": 77,
                    "last-line": 83,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getDefaultScope",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                "line": 83,
                                "char": 61
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 83,
                            "char": 61
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 85,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "storage",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 85,
                                        "char": 30
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                    "line": 85,
                                    "char": 30
                                },
                                "name": "getDefaultScope",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "client_id",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                            "line": 85,
                                            "char": 56
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 85,
                                        "char": 56
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                "line": 85,
                                "char": 57
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 86,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                "line": 84,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                        "line": 84,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                    "line": 83,
                    "last-line": 96,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getReservedScopes",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "array",
                                "left": [
                                    {
                                        "value": {
                                            "type": "string",
                                            "value": "openid",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                            "line": 99,
                                            "char": 25
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 99,
                                        "char": 25
                                    },
                                    {
                                        "value": {
                                            "type": "string",
                                            "value": "offline_access",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                            "line": 99,
                                            "char": 43
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                        "line": 99,
                                        "char": 43
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                                "line": 99,
                                "char": 44
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                            "line": 100,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Get reserved scopes needed by the server.\n     *\n     * In case OpenID Connect is used, these scopes must include:\n     * 'openid', offline_access'.\n     *\n     * @return\n     * An array of reserved scopes.\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
                    "line": 97,
                    "last-line": 101,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
            "line": 10,
            "char": 5
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/scope.zep",
        "line": 10,
        "char": 5
    }
]