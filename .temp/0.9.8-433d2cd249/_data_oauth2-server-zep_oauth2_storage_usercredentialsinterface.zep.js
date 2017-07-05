[
    {
        "type": "comment",
        "value": "**\n * Implement this interface to specify where the OAuth2 Server\n * should retrieve user credentials for the\n * \"Resource Owner Password Credentials\" grant type\n *\n * @author Brent Shaffer <bshafs at gmail dot com>\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/usercredentialsinterface.zep",
        "line": 9,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\Storage",
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/usercredentialsinterface.zep",
        "line": 11,
        "char": 9
    },
    {
        "type": "interface",
        "name": "UserCredentialsInterface",
        "extends": [
            {
                "type": "variable",
                "value": "StorageInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/usercredentialsinterface.zep",
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
                    "name": "checkUserCredentials",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "username",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/usercredentialsinterface.zep",
                            "line": 33,
                            "char": 58
                        },
                        {
                            "type": "parameter",
                            "name": "password",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/usercredentialsinterface.zep",
                            "line": 33,
                            "char": 76
                        }
                    ],
                    "docblock": "**\n     * Grant access tokens for basic user credentials.\n     *\n     * Check the supplied username and password for validity.\n     *\n     * You can also use the $client_id param to do any checks required based\n     * on a client, if you need that.\n     *\n     * Required for OAuth2::GRANT_TYPE_USER_CREDENTIALS.\n     *\n     * @param string username Username to be check with.\n     * @param string password Password to be check with.\n     *\n     * @return bool TRUE if the username and password are valid, and FALSE if\n     * it isn't. Moreover, if the username and password are valid, and you want to\n     *\n     * @see http:\/\/tools.ietf.org\/html\/rfc6749#section-4.3\n     *\n     * @ingroup oauth2_section_4\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/usercredentialsinterface.zep",
                                "line": 33,
                                "char": 88
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/usercredentialsinterface.zep",
                        "line": 33,
                        "char": 88
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/usercredentialsinterface.zep",
                    "line": 33,
                    "last-line": 47,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getUserDetails",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "username",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/usercredentialsinterface.zep",
                            "line": 48,
                            "char": 52
                        }
                    ],
                    "docblock": "**\n     * @param string username\n     * @return array\n     * ARRAY the associated \"user_id\" and optional \"scope\" values\n     * This function MUST return FALSE if the requested user does not exist or is\n     * invalid. \"scope\" is a space-separated list of restricted scopes.\n     * @code\n     * return array(\n     *     \"user_id\"  => USER_ID,    \/\/ REQUIRED user_id to be stored with the authorization code or access token\n     *     \"scope\"    => SCOPE       \/\/ OPTIONAL space-separated list of restricted scopes\n     * );\n     * @endcode\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "array",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/usercredentialsinterface.zep",
                                "line": 48,
                                "char": 62
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/usercredentialsinterface.zep",
                        "line": 48,
                        "char": 62
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/usercredentialsinterface.zep",
                    "line": 48,
                    "last-line": 49,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/usercredentialsinterface.zep",
            "line": 49,
            "char": 1
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/usercredentialsinterface.zep",
        "line": 0,
        "char": 0
    }
]