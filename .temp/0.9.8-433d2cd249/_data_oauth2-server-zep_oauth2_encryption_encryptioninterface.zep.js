[
    {
        "type": "namespace",
        "name": "OAuth2\\Encryption",
        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/encryptioninterface.zep",
        "line": 4,
        "char": 9
    },
    {
        "type": "interface",
        "name": "EncryptionInterface",
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "encode",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "payload",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/encryptioninterface.zep",
                            "line": 6,
                            "char": 43
                        },
                        {
                            "type": "parameter",
                            "name": "key",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/encryptioninterface.zep",
                            "line": 6,
                            "char": 56
                        },
                        {
                            "type": "parameter",
                            "name": "algorithm",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/encryptioninterface.zep",
                                "line": 6,
                                "char": 82
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/encryptioninterface.zep",
                            "line": 6,
                            "char": 82
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/encryptioninterface.zep",
                                "line": 6,
                                "char": 93
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/encryptioninterface.zep",
                        "line": 6,
                        "char": 93
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/encryptioninterface.zep",
                    "line": 6,
                    "last-line": 7,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "decode",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "payload",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/encryptioninterface.zep",
                            "line": 7,
                            "char": 43
                        },
                        {
                            "type": "parameter",
                            "name": "key",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/encryptioninterface.zep",
                            "line": 7,
                            "char": 56
                        },
                        {
                            "type": "parameter",
                            "name": "algorithm",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/encryptioninterface.zep",
                                "line": 7,
                                "char": 82
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/encryptioninterface.zep",
                            "line": 7,
                            "char": 82
                        }
                    ],
                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/encryptioninterface.zep",
                    "line": 7,
                    "last-line": 8,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "urlSafeB64Encode",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "data",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/encryptioninterface.zep",
                            "line": 8,
                            "char": 50
                        }
                    ],
                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/encryptioninterface.zep",
                    "line": 8,
                    "last-line": 9,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "urlSafeB64Decode",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "b64",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/encryptioninterface.zep",
                            "line": 9,
                            "char": 49
                        }
                    ],
                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/encryptioninterface.zep",
                    "line": 9,
                    "last-line": 10,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/encryptioninterface.zep",
            "line": 10,
            "char": 1
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/encryptioninterface.zep",
        "line": 0,
        "char": 0
    }
]