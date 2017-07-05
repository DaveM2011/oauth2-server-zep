[
    {
        "type": "comment",
        "value": "**\n * @package \\OAuth2\\ResponseType\n * @author Brent Shaffer <bshafs at gmail dot com>\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstokeninterface.zep",
        "line": 6,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\ResponseType",
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstokeninterface.zep",
        "line": 8,
        "char": 9
    },
    {
        "type": "interface",
        "name": "AccessTokenInterface",
        "extends": [
            {
                "type": "variable",
                "value": "ResponseTypeInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstokeninterface.zep",
                "line": 9,
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
                    "name": "createAccessToken",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstokeninterface.zep",
                            "line": 21,
                            "char": 56
                        },
                        {
                            "type": "parameter",
                            "name": "user_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstokeninterface.zep",
                            "line": 21,
                            "char": 73
                        },
                        {
                            "type": "parameter",
                            "name": "scope",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstokeninterface.zep",
                                "line": 21,
                                "char": 95
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstokeninterface.zep",
                            "line": 21,
                            "char": 95
                        },
                        {
                            "type": "parameter",
                            "name": "includeRefreshToken",
                            "const": 0,
                            "data-type": "bool",
                            "mandatory": 0,
                            "default": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstokeninterface.zep",
                                "line": 21,
                                "char": 131
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstokeninterface.zep",
                            "line": 21,
                            "char": 131
                        }
                    ],
                    "docblock": "**\n     * Handle the creation of access token, also issue refresh token if supported \/ desirable.\n     *\n     * @param string client_id client identifier related to the access token.\n     * @param string user_id user ID associated with the access token\n     * @param string scope OPTONAL scopes to be stored in space-separated string.\n     * @param bool includeRefreshToken if true, a new refresh_token will be added to the response\n     * @return string\n     * @see http:\/\/tools.ietf.org\/html\/rfc6749#section-5\n     * @ingroup oauth2_section_5\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstokeninterface.zep",
                                "line": 21,
                                "char": 142
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstokeninterface.zep",
                        "line": 21,
                        "char": 142
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstokeninterface.zep",
                    "line": 21,
                    "last-line": 22,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstokeninterface.zep",
            "line": 22,
            "char": 1
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/accesstokeninterface.zep",
        "line": 0,
        "char": 0
    }
]