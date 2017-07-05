[
    {
        "type": "comment",
        "value": "**\n * Implement this interface to specify how the OAuth2 Server\n * should verify client credentials\n *\n * @author Brent Shaffer <bshafs at gmail dot com>\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientcredentialsinterface.zep",
        "line": 8,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\Storage",
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientcredentialsinterface.zep",
        "line": 10,
        "char": 9
    },
    {
        "type": "interface",
        "name": "ClientCredentialsInterface",
        "extends": [
            {
                "type": "variable",
                "value": "ClientInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientcredentialsinterface.zep",
                "line": 11,
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
                    "name": "checkClientCredentials",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientcredentialsinterface.zep",
                            "line": 27,
                            "char": 61
                        },
                        {
                            "type": "parameter",
                            "name": "client_secret",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientcredentialsinterface.zep",
                                "line": 27,
                                "char": 91
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientcredentialsinterface.zep",
                            "line": 27,
                            "char": 91
                        }
                    ],
                    "docblock": "**\n     * Make sure that the client credentials is valid.\n     *\n     * @param string client_id Client identifier to be check with.\n     * @param string client_secret (optional) If a secret is required, check\n     * that they've given the right one.\n     *\n     * @return bool\n     * TRUE if the client credentials are valid, and MUST return FALSE if it isn't.\n     * @endcode\n     *\n     * @see http:\/\/tools.ietf.org\/html\/rfc6749#section-3.1\n     *\n     * @ingroup oauth2_section_3\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientcredentialsinterface.zep",
                                "line": 27,
                                "char": 103
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientcredentialsinterface.zep",
                        "line": 27,
                        "char": 103
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientcredentialsinterface.zep",
                    "line": 27,
                    "last-line": 42,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isPublicClient",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientcredentialsinterface.zep",
                            "line": 43,
                            "char": 53
                        }
                    ],
                    "docblock": "**\n     * Determine if the client is a \"public\" client, and therefore\n     * does not require passing credentials for certain grant types\n     *\n     * @param string client_id Client identifier to be check with.\n     *\n     * @return boolean  TRUE if the client is public, and FALSE if it isn't.\n     * @endcode\n     *\n     * @see http:\/\/tools.ietf.org\/html\/rfc6749#section-2.3\n     * @see https:\/\/github.com\/bshaffer\/oauth2-server-php\/issues\/257\n     *\n     * @ingroup oauth2_section_2\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientcredentialsinterface.zep",
                                "line": 43,
                                "char": 65
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientcredentialsinterface.zep",
                        "line": 43,
                        "char": 65
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientcredentialsinterface.zep",
                    "line": 43,
                    "last-line": 44,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientcredentialsinterface.zep",
            "line": 44,
            "char": 1
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientcredentialsinterface.zep",
        "line": 0,
        "char": 0
    }
]