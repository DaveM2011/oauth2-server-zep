[
    {
        "type": "comment",
        "value": "**\n * Implement this interface to specify where the OAuth2 Server\n * should retrieve client information\n *\n * @author Brent Shaffer <bshafs at gmail dot com>\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientinterface.zep",
        "line": 8,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\Storage",
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientinterface.zep",
        "line": 10,
        "char": 9
    },
    {
        "type": "interface",
        "name": "ClientInterface",
        "extends": [
            {
                "type": "variable",
                "value": "StorageInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientinterface.zep",
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
                    "name": "getClientDetails",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientinterface.zep",
                            "line": 36,
                            "char": 55
                        }
                    ],
                    "docblock": "**\n     * Get client details corresponding client_id.\n     *\n     * OAuth says we should store request URIs for each registered client.\n     * Implement this function to grab the stored URI for a given client id.\n     *\n     * @param string client_id Client identifier to be check with.\n     *\n     * @return array\n     *               Client details. The only mandatory key in the array is \"redirect_uri\".\n     *               This function MUST return FALSE if the given client does not exist or is\n     *               invalid. \"redirect_uri\" can be space-delimited to allow for multiple valid uris.\n     *               <code>\n     *               return array(\n     *               \"redirect_uri\" => REDIRECT_URI,      \/\/ REQUIRED redirect_uri registered for the client\n     *               \"client_id\"    => CLIENT_ID,         \/\/ OPTIONAL the client id\n     *               \"grant_types\"  => GRANT_TYPES,       \/\/ OPTIONAL an array of restricted grant types\n     *               \"user_id\"      => USER_ID,           \/\/ OPTIONAL the user identifier associated with this client\n     *               \"scope\"        => SCOPE,             \/\/ OPTIONAL the scopes allowed for this client\n     *               );\n     *               <\/code>\n     *\n     * @ingroup oauth2_section_4\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "array",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientinterface.zep",
                                "line": 36,
                                "char": 65
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientinterface.zep",
                        "line": 36,
                        "char": 65
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientinterface.zep",
                    "line": 36,
                    "last-line": 43,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getClientScope",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientinterface.zep",
                            "line": 44,
                            "char": 53
                        }
                    ],
                    "docblock": "**\n     * Get the scope associated with this client\n     *\n     * @param string client_id\n     * @return string  the space-delineated scope list for the specified client_id\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientinterface.zep",
                                "line": 44,
                                "char": 64
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientinterface.zep",
                        "line": 44,
                        "char": 64
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientinterface.zep",
                    "line": 44,
                    "last-line": 59,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "checkRestrictedGrantType",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientinterface.zep",
                            "line": 60,
                            "char": 63
                        },
                        {
                            "type": "parameter",
                            "name": "grant_type",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientinterface.zep",
                            "line": 60,
                            "char": 83
                        }
                    ],
                    "docblock": "**\n     * Check restricted grant types of corresponding client identifier.\n     *\n     * If you want to restrict clients to certain grant types, override this\n     * function.\n     *\n     * @param string client_id Client identifier to be check with.\n     * @param string grant_type Grant type to be check with\n     *\n     * @return boolean  TRUE if the grant type is supported by this client identifier, and\n     * FALSE if it isn't.\n     *\n     * @ingroup oauth2_section_4\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientinterface.zep",
                                "line": 60,
                                "char": 95
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientinterface.zep",
                        "line": 60,
                        "char": 95
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientinterface.zep",
                    "line": 60,
                    "last-line": 61,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientinterface.zep",
            "line": 61,
            "char": 1
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/clientinterface.zep",
        "line": 0,
        "char": 0
    }
]