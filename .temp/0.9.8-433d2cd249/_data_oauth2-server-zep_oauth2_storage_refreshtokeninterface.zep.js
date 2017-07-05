[
    {
        "type": "comment",
        "value": "**\n * Implement this interface to specify where the OAuth2 Server\n * should get\/save refresh tokens for the \"Refresh Token\"\n * grant type\n *\n * @author Brent Shaffer <bshafs at gmail dot com>\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/refreshtokeninterface.zep",
        "line": 9,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\Storage",
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/refreshtokeninterface.zep",
        "line": 11,
        "char": 9
    },
    {
        "type": "interface",
        "name": "RefreshTokenInterface",
        "extends": [
            {
                "type": "variable",
                "value": "StorageInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/refreshtokeninterface.zep",
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
                    "name": "getRefreshToken",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "refresh_token",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/refreshtokeninterface.zep",
                            "line": 35,
                            "char": 58
                        }
                    ],
                    "docblock": "**\n     * Grant refresh access tokens.\n     *\n     * Retrieve the stored data for the given refresh token.\n     *\n     * Required for OAuth2::GRANT_TYPE_REFRESH_TOKEN.\n     *\n     * @param string refresh_token Refresh token to be check with.\n     *\n     * @return array\n     * An associative array as below, and NULL if the refresh_token is\n     * invalid:\n     * - refresh_token: Refresh token identifier.\n     * - client_id: Client identifier.\n     * - user_id: User identifier.\n     * - expires: Expiration unix timestamp, or 0 if the token doesn't expire.\n     * - scope: (optional) Scope values in space-separated string.\n     *\n     * @see http:\/\/tools.ietf.org\/html\/rfc6749#section-6\n     *\n     * @ingroup oauth2_section_6\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "array",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/refreshtokeninterface.zep",
                                "line": 35,
                                "char": 68
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/refreshtokeninterface.zep",
                        "line": 35,
                        "char": 68
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/refreshtokeninterface.zep",
                    "line": 35,
                    "last-line": 55,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setRefreshToken",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "refresh_token",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/refreshtokeninterface.zep",
                            "line": 56,
                            "char": 58
                        },
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/refreshtokeninterface.zep",
                            "line": 56,
                            "char": 77
                        },
                        {
                            "type": "parameter",
                            "name": "user_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/refreshtokeninterface.zep",
                            "line": 56,
                            "char": 94
                        },
                        {
                            "type": "parameter",
                            "name": "expires",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/refreshtokeninterface.zep",
                            "line": 56,
                            "char": 107
                        },
                        {
                            "type": "parameter",
                            "name": "scope",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/refreshtokeninterface.zep",
                                "line": 56,
                                "char": 129
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/refreshtokeninterface.zep",
                            "line": 56,
                            "char": 129
                        }
                    ],
                    "docblock": "**\n     * Take the provided refresh token values and store them somewhere.\n     *\n     * This function should be the storage counterpart to getRefreshToken().\n     *\n     * If storage fails for some reason, we're not currently checking for\n     * any sort of success\/failure, so you should bail out of the script\n     * and provide a descriptive fail message.\n     *\n     * Required for OAuth2::GRANT_TYPE_REFRESH_TOKEN.\n     *\n     * @param string refresh_token Refresh token to be stored.\n     * @param string client_id Client identifier to be stored.\n     * @param string user_id User identifier to be stored.\n     * @param int expires Expiration timestamp to be stored. 0 if the token doesn't expire.\n     * @param string scope (optional) Scopes to be stored in space-separated string.\n     *\n     * @ingroup oauth2_section_6\n     *",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/refreshtokeninterface.zep",
                        "line": 56,
                        "char": 138
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/refreshtokeninterface.zep",
                    "line": 56,
                    "last-line": 72,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "unsetRefreshToken",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "refresh_token",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/refreshtokeninterface.zep",
                            "line": 73,
                            "char": 60
                        }
                    ],
                    "docblock": "**\n     * Expire a used refresh token.\n     *\n     * This is not explicitly required in the spec, but is almost implied.\n     * After granting a new refresh token, the old one is no longer useful and\n     * so should be forcibly expired in the data store so it can't be used again.\n     *\n     * If storage fails for some reason, we're not currently checking for\n     * any sort of success\/failure, so you should bail out of the script\n     * and provide a descriptive fail message.\n     *\n     * @param string refresh_token Refresh token to be expirse.\n     *\n     * @ingroup oauth2_section_6\n     *",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/refreshtokeninterface.zep",
                        "line": 73,
                        "char": 69
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/refreshtokeninterface.zep",
                    "line": 73,
                    "last-line": 74,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/refreshtokeninterface.zep",
            "line": 74,
            "char": 1
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/refreshtokeninterface.zep",
        "line": 0,
        "char": 0
    }
]