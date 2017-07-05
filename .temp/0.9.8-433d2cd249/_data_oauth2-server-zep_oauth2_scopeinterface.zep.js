[
    {
        "type": "comment",
        "value": "**\n * Class to handle scope implementation logic\n *\n * @see OAuth2\\Storage\\ScopeInterface\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/scopeinterface.zep",
        "line": 8,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2",
        "file": "\/data\/oauth2-server-zep\/oauth2\/scopeinterface.zep",
        "line": 10,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Storage\\ScopeInterface",
                "alias": "ScopeStorageInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/scopeinterface.zep",
                "line": 10,
                "char": 59
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/scopeinterface.zep",
        "line": 12,
        "char": 9
    },
    {
        "type": "interface",
        "name": "ScopeInterface",
        "extends": [
            {
                "type": "variable",
                "value": "ScopeStorageInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/scopeinterface.zep",
                "line": 13,
                "char": 1
            }
        ],
        "definition": {
            "methods": [
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
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scopeinterface.zep",
                            "line": 26,
                            "char": 54
                        },
                        {
                            "type": "parameter",
                            "name": "available_scope",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scopeinterface.zep",
                            "line": 26,
                            "char": 79
                        }
                    ],
                    "docblock": "**\n     * Check if everything in required scope is contained in available scope.\n     *\n     * @param string required_scope A space-separated string of scopes.\n     * @param string available_scope\n     * @return boolean  TRUE if everything in required scope is contained in available scope,\n     * and FALSE if it isn't.\n     *\n     * @see http:\/\/tools.ietf.org\/html\/rfc6749#section-7\n     *\n     * @ingroup oauth2_section_7\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/scopeinterface.zep",
                                "line": 26,
                                "char": 91
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/scopeinterface.zep",
                        "line": 26,
                        "char": 91
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/scopeinterface.zep",
                    "line": 26,
                    "last-line": 34,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/scopeinterface.zep",
                                "line": 35,
                                "char": 66
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/scopeinterface.zep",
                            "line": 35,
                            "char": 67
                        }
                    ],
                    "docblock": "**\n     * Return scope info from request\n     *\n     * @param \\OAuth2\\RequestInterface request Request object to check\n     *\n     * @return string representation of requested scope\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/scopeinterface.zep",
                                "line": 35,
                                "char": 78
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/scopeinterface.zep",
                        "line": 35,
                        "char": 78
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/scopeinterface.zep",
                    "line": 35,
                    "last-line": 36,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/scopeinterface.zep",
            "line": 36,
            "char": 1
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/scopeinterface.zep",
        "line": 0,
        "char": 0
    }
]