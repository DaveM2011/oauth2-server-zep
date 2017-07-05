[
    {
        "type": "comment",
        "value": "**\n * Implement this interface to specify where the OAuth2 Server\n * should get the JWT key for clients\n *\n * @TODO consider extending ClientInterface, as this will almost always\n * be the same storage as retrieving clientData\n *\n * @author F21\n * @author Brent Shaffer <bshafs at gmail dot com>\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
        "line": 12,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\Storage",
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
        "line": 14,
        "char": 9
    },
    {
        "type": "interface",
        "name": "JwtBearerInterface",
        "extends": [
            {
                "type": "variable",
                "value": "StorageInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
                "line": 15,
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
                    "name": "getClientKey",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
                            "line": 23,
                            "char": 51
                        },
                        {
                            "type": "parameter",
                            "name": "subject",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
                            "line": 23,
                            "char": 68
                        }
                    ],
                    "docblock": "**\n     * Get the public key associated with a client_id\n     *\n     * @param string client_id Client identifier to be checked with.\n     *\n     * @return string Return the public key for the client_id if it exists, and MUST return FALSE if it doesn't.\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
                                "line": 23,
                                "char": 79
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
                        "line": 23,
                        "char": 79
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
                    "line": 23,
                    "last-line": 41,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getJti",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
                            "line": 42,
                            "char": 45
                        },
                        {
                            "type": "parameter",
                            "name": "subject",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
                            "line": 42,
                            "char": 62
                        },
                        {
                            "type": "parameter",
                            "name": "audience",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
                            "line": 42,
                            "char": 80
                        },
                        {
                            "type": "parameter",
                            "name": "expiration",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
                            "line": 42,
                            "char": 96
                        },
                        {
                            "type": "parameter",
                            "name": "jti",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
                            "line": 42,
                            "char": 109
                        }
                    ],
                    "docblock": "**\n     * Get a jti (JSON token identifier) by matching against the client_id, subject, audience and expiration.\n     *\n     * @param string client_id Client identifier to match.\n     * @param string subject The subject to match.\n     * @param string audience The audience to match.\n     * @param int expiration The expiration of the jti.\n     * @param string jti The jti to match.\n     *\n     * @return array\n     * An associative array as below, and return NULL if the jti does not exist.\n     * - issuer: Stored client identifier.\n     * - subject: Stored subject.\n     * - audience: Stored audience.\n     * - expires: Stored expiration in unix timestamp.\n     * - jti: The stored jti.\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "array",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
                                "line": 42,
                                "char": 119
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
                        "line": 42,
                        "char": 119
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
                    "line": 42,
                    "last-line": 52,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setJti",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
                            "line": 53,
                            "char": 45
                        },
                        {
                            "type": "parameter",
                            "name": "subject",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
                            "line": 53,
                            "char": 62
                        },
                        {
                            "type": "parameter",
                            "name": "audience",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
                            "line": 53,
                            "char": 80
                        },
                        {
                            "type": "parameter",
                            "name": "expiration",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
                            "line": 53,
                            "char": 96
                        },
                        {
                            "type": "parameter",
                            "name": "jti",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
                            "line": 53,
                            "char": 109
                        }
                    ],
                    "docblock": "**\n     * Store a used jti so that we can check against it to prevent replay attacks.\n     *\n     * @param string client_id Client identifier to insert.\n     * @param string subject The subject to insert.\n     * @param string audience The audience to insert.\n     * @param int expiration The expiration of the jti.\n     * @param string jti The jti to insert.\n     *",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
                        "line": 53,
                        "char": 118
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
                    "line": 53,
                    "last-line": 54,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
            "line": 54,
            "char": 1
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtbearerinterface.zep",
        "line": 0,
        "char": 0
    }
]