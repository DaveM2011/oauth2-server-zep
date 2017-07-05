[
    {
        "type": "comment",
        "value": "**\n * Implement this interface to specify where the OAuth2 Server\n * should get public\/private key information\n *\n * @author Brent Shaffer <bshafs at gmail dot com>\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/publickeyinterface.zep",
        "line": 8,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\Storage",
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/publickeyinterface.zep",
        "line": 10,
        "char": 9
    },
    {
        "type": "interface",
        "name": "PublicKeyInterface",
        "extends": [
            {
                "type": "variable",
                "value": "StorageInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/publickeyinterface.zep",
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
                    "name": "getPublicKey",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/publickeyinterface.zep",
                                "line": 12,
                                "char": 58
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/publickeyinterface.zep",
                            "line": 12,
                            "char": 58
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/publickeyinterface.zep",
                                "line": 12,
                                "char": 69
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/publickeyinterface.zep",
                        "line": 12,
                        "char": 69
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/publickeyinterface.zep",
                    "line": 12,
                    "last-line": 13,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getPrivateKey",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/publickeyinterface.zep",
                                "line": 13,
                                "char": 59
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/publickeyinterface.zep",
                            "line": 13,
                            "char": 59
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/publickeyinterface.zep",
                                "line": 13,
                                "char": 70
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/publickeyinterface.zep",
                        "line": 13,
                        "char": 70
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/publickeyinterface.zep",
                    "line": 13,
                    "last-line": 14,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getEncryptionAlgorithm",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/publickeyinterface.zep",
                                "line": 14,
                                "char": 68
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/publickeyinterface.zep",
                            "line": 14,
                            "char": 68
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/publickeyinterface.zep",
                                "line": 14,
                                "char": 79
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/publickeyinterface.zep",
                        "line": 14,
                        "char": 79
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/publickeyinterface.zep",
                    "line": 14,
                    "last-line": 15,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/publickeyinterface.zep",
            "line": 15,
            "char": 1
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/publickeyinterface.zep",
        "line": 0,
        "char": 0
    }
]