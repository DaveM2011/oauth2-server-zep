[
    {
        "type": "comment",
        "value": "**\n * @package \\OAuth2\\ResponseType\n * @author Brent Shaffer <bshafs at gmail dot com>\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcodeinterface.zep",
        "line": 6,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\ResponseType",
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcodeinterface.zep",
        "line": 8,
        "char": 9
    },
    {
        "type": "interface",
        "name": "AuthorizationCodeInterface",
        "extends": [
            {
                "type": "variable",
                "value": "ResponseTypeInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcodeinterface.zep",
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
                    "name": "enforceRedirect",
                    "docblock": "**\n     * @return boolean TRUE if the grant type requires a redirect_uri, FALSE if not\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcodeinterface.zep",
                                "line": 13,
                                "char": 49
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcodeinterface.zep",
                        "line": 13,
                        "char": 49
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcodeinterface.zep",
                    "line": 13,
                    "last-line": 27,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "createAuthorizationCode",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcodeinterface.zep",
                            "line": 28,
                            "char": 62
                        },
                        {
                            "type": "parameter",
                            "name": "user_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcodeinterface.zep",
                            "line": 28,
                            "char": 79
                        },
                        {
                            "type": "parameter",
                            "name": "redirect_uri",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcodeinterface.zep",
                            "line": 28,
                            "char": 101
                        },
                        {
                            "type": "parameter",
                            "name": "scope",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcodeinterface.zep",
                                "line": 28,
                                "char": 123
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcodeinterface.zep",
                            "line": 28,
                            "char": 123
                        }
                    ],
                    "docblock": "**\n     * Handle the creation of the authorization code.\n     *\n     * @param string client_id client identifier related to the authorization code\n     * @param string user_id user id associated with the authorization code\n     * @param string redirect_uri an absolute URI to which the authorization server will redirect the\n     * user-agent to when the end-user authorization step is completed.\n     * @param string scope OPTIONAL scopes to be stored in space-separated string.\n     * @return string\n     *\n     * @see http:\/\/tools.ietf.org\/html\/rfc6749#section-4\n     * @ingroup oauth2_section_4\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcodeinterface.zep",
                                "line": 28,
                                "char": 134
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcodeinterface.zep",
                        "line": 28,
                        "char": 134
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcodeinterface.zep",
                    "line": 28,
                    "last-line": 29,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcodeinterface.zep",
            "line": 29,
            "char": 1
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/authorizationcodeinterface.zep",
        "line": 0,
        "char": 0
    }
]