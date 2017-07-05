[
    {
        "type": "comment",
        "value": "**\n * Implement this interface to specify where the OAuth2 Server\n * should retrieve data involving the relevent scopes associated\n * with this implementation.\n *\n * @author Brent Shaffer <bshafs at gmail dot com>\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/scopeinterface.zep",
        "line": 9,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\Storage",
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/scopeinterface.zep",
        "line": 11,
        "char": 9
    },
    {
        "type": "interface",
        "name": "ScopeInterface",
        "extends": [
            {
                "type": "variable",
                "value": "StorageInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/scopeinterface.zep",
                "line": 12,
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
                    "name": "scopeExists",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "scope",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/scopeinterface.zep",
                            "line": 20,
                            "char": 46
                        }
                    ],
                    "docblock": "**\n     * Check if the provided scope exists.\n     *\n     * @param stirng scope A space-separated string of scopes.\n     *\n     * @return boolean TRUE if it exists, FALSE otherwise.\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/scopeinterface.zep",
                                "line": 20,
                                "char": 58
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/scopeinterface.zep",
                        "line": 20,
                        "char": 58
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/scopeinterface.zep",
                    "line": 20,
                    "last-line": 39,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/scopeinterface.zep",
                                "line": 40,
                                "char": 61
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/scopeinterface.zep",
                            "line": 40,
                            "char": 61
                        }
                    ],
                    "docblock": "**\n     * The default scope to use in the event the client\n     * does not request one. By returning \"false\", a\n     * request_error is returned by the server to force a\n     * scope request by the client. By returning \"null\",\n     * opt out of requiring scopes\n     *\n     * @param string client_id An optional client id that can be used to\n     * return customized default scopes.\n     *\n     * @return string - string representation of default scope, null if\n     * scopes are not defined, or false to force scope request by the client\n     *\n     * ex:\n     *     'default'\n     * ex:\n     *     null\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/scopeinterface.zep",
                                "line": 40,
                                "char": 72
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/scopeinterface.zep",
                        "line": 40,
                        "char": 72
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/scopeinterface.zep",
                    "line": 40,
                    "last-line": 41,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/scopeinterface.zep",
            "line": 41,
            "char": 1
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/scopeinterface.zep",
        "line": 0,
        "char": 0
    }
]