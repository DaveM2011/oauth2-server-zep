[
    {
        "type": "comment",
        "value": "**\n * Implement this interface to specify where the OAuth2 Server\n * should get\/save access tokens\n *\n * @author Brent Shaffer <bshafs at gmail dot com>\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/accesstokeninterface.zep",
        "line": 8,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\Storage",
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/accesstokeninterface.zep",
        "line": 10,
        "char": 9
    },
    {
        "type": "interface",
        "name": "AccessTokenInterface",
        "extends": [
            {
                "type": "variable",
                "value": "StorageInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/accesstokeninterface.zep",
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
                    "name": "getAccessToken",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "oauth_token",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/accesstokeninterface.zep",
                            "line": 30,
                            "char": 55
                        }
                    ],
                    "docblock": "**\n     * Look up the supplied oauth_token from storage.\n     *\n     * We need to retrieve access token data as we create and verify tokens.\n     *\n     * @param string oauth_token oauth_token to be check with.\n     *\n     * @return array\n     * An associative array as below, and return NULL if the supplied oauth_token\n     * is invalid:\n     * - expires: Stored expiration in unix timestamp.\n     * - client_id: (optional) Stored client identifier.\n     * - user_id: (optional) Stored user identifier.\n     * - scope: (optional) Stored scope values in space-separated string.\n     * - id_token: (optional) Stored id_token (if \"use_openid_connect\" is true).\n     *\n     * @ingroup oauth2_section_7\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "array",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/accesstokeninterface.zep",
                                "line": 30,
                                "char": 65
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/accesstokeninterface.zep",
                        "line": 30,
                        "char": 65
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/accesstokeninterface.zep",
                    "line": 30,
                    "last-line": 44,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setAccessToken",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "oauth_token",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/accesstokeninterface.zep",
                            "line": 45,
                            "char": 55
                        },
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/accesstokeninterface.zep",
                            "line": 45,
                            "char": 74
                        },
                        {
                            "type": "parameter",
                            "name": "user_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/accesstokeninterface.zep",
                            "line": 45,
                            "char": 91
                        },
                        {
                            "type": "parameter",
                            "name": "expires",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/accesstokeninterface.zep",
                            "line": 45,
                            "char": 104
                        },
                        {
                            "type": "parameter",
                            "name": "scope",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/accesstokeninterface.zep",
                                "line": 45,
                                "char": 126
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/accesstokeninterface.zep",
                            "line": 45,
                            "char": 126
                        }
                    ],
                    "docblock": "**\n     * Store the supplied access token values to storage.\n     *\n     * We need to store access token data as we create and verify tokens.\n     *\n     * @param string oauth_token oauth_token to be stored.\n     * @param string client_id client identifier to be stored.\n     * @param string user_id user identifier to be stored.\n     * @param int expires expiration to be stored as a Unix timestamp.\n     * @param string scope OPTIONAL Scopes to be stored in space-separated string.\n     *\n     * @ingroup oauth2_section_4\n     *",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/accesstokeninterface.zep",
                        "line": 45,
                        "char": 135
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/accesstokeninterface.zep",
                    "line": 45,
                    "last-line": 46,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/accesstokeninterface.zep",
            "line": 46,
            "char": 1
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/accesstokeninterface.zep",
        "line": 0,
        "char": 0
    }
]