[
    {
        "type": "namespace",
        "name": "OAuth2\\ResponseType",
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
        "line": 3,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Encryption\\EncryptionInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                "line": 3,
                "char": 42
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
        "line": 4,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Encryption\\Jwt",
                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                "line": 4,
                "char": 26
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
        "line": 5,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Storage\\AccessTokenInterface",
                "alias": "AccessTokenStorageInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                "line": 5,
                "char": 71
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
        "line": 6,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Storage\\RefreshTokenInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                "line": 6,
                "char": 41
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
        "line": 7,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Storage\\PublicKeyInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                "line": 7,
                "char": 38
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
        "line": 8,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Storage\\Memory",
                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                "line": 8,
                "char": 26
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
        "line": 12,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * @author Brent Shaffer <bshafs at gmail dot com>\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
        "line": 13,
        "char": 5
    },
    {
        "type": "class",
        "name": "JwtAccessToken",
        "abstract": 0,
        "final": 0,
        "extends": "AccessToken",
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "publicKeyStorage",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                    "line": 16,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "encryptionUtil",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                    "line": 26,
                    "char": 6
                }
            ],
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__construct",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "publicKeyStorage",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "PublicKeyInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                "line": 27,
                                "char": 69
                            },
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                "line": 27,
                                "char": 77
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 27,
                            "char": 77
                        },
                        {
                            "type": "parameter",
                            "name": "tokenStorage",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "AccessTokenStorageInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                "line": 27,
                                "char": 120
                            },
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                "line": 27,
                                "char": 128
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 27,
                            "char": 128
                        },
                        {
                            "type": "parameter",
                            "name": "refreshStorage",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "RefreshTokenInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                "line": 27,
                                "char": 167
                            },
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                "line": 27,
                                "char": 175
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 27,
                            "char": 175
                        },
                        {
                            "type": "parameter",
                            "name": "config",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                "line": 27,
                                "char": 194
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 27,
                            "char": 194
                        },
                        {
                            "type": "parameter",
                            "name": "encryptionUtil",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "EncryptionInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                "line": 27,
                                "char": 231
                            },
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                "line": 27,
                                "char": 239
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 27,
                            "char": 239
                        }
                    ],
                    "statements": [
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "publicKeyStorage",
                                    "expr": {
                                        "type": "variable",
                                        "value": "publicKeyStorage",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 29,
                                        "char": 54
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 29,
                                    "char": 54
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 30,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "config",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "array_merge",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "store_encrypted_token_string",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                                "line": 30,
                                                                "char": 65
                                                            },
                                                            "value": {
                                                                "type": "bool",
                                                                "value": "true",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                                "line": 30,
                                                                "char": 71
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                            "line": 30,
                                                            "char": 71
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "issuer",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                                "line": 30,
                                                                "char": 81
                                                            },
                                                            "value": {
                                                                "type": "string",
                                                                "value": "",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                                "line": 30,
                                                                "char": 85
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                            "line": 30,
                                                            "char": 85
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 30,
                                                    "char": 86
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 30,
                                                "char": 86
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "config",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 30,
                                                    "char": 94
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 30,
                                                "char": 94
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 30,
                                        "char": 95
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 30,
                                    "char": 95
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 31,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "is_null",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "tokenStorage",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 31,
                                            "char": 32
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 31,
                                        "char": 32
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                "line": 31,
                                "char": 34
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "tokenStorage",
                                            "expr": {
                                                "type": "new",
                                                "class": "Memory",
                                                "dynamic": 0,
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 33,
                                                "char": 44
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 33,
                                            "char": 44
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 34,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 35,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "is_null",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "encryptionUtil",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 35,
                                            "char": 34
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 35,
                                        "char": 34
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                "line": 35,
                                "char": 36
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "encryptionUtil",
                                            "expr": {
                                                "type": "new",
                                                "class": "Jwt",
                                                "dynamic": 0,
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 36,
                                                "char": 43
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 36,
                                            "char": 43
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 37,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 38,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "encryptionUtil",
                                    "expr": {
                                        "type": "variable",
                                        "value": "encryptionUtil",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 38,
                                        "char": 50
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 38,
                                    "char": 50
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 39,
                            "char": 14
                        },
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "parent",
                                "dynamic": 0,
                                "name": "__construct",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "tokenStorage",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 39,
                                            "char": 41
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 39,
                                        "char": 41
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "refreshStorage",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 39,
                                            "char": 57
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 39,
                                        "char": 57
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "config",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 39,
                                            "char": 65
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 39,
                                        "char": 65
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                "line": 39,
                                "char": 66
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 40,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param PublicKeyInterface          $publicKeyStorage -\n     * @param AccessTokenStorageInterface $tokenStorage     -\n     * @param RefreshTokenInterface       $refreshStorage   -\n     * @param array                       $config           - array with key store_encrypted_token_string (bool true)\n     *                                                        whether the entire encrypted string is stored,\n     *                                                        or just the token ID is stored\n     * @param EncryptionInterface         $encryptionUtil   -\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                    "line": 27,
                    "last-line": 53,
                    "char": 19
                },
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
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 54,
                            "char": 48
                        },
                        {
                            "type": "parameter",
                            "name": "user_id",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 54,
                            "char": 57
                        },
                        {
                            "type": "parameter",
                            "name": "scope",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                "line": 54,
                                "char": 71
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 54,
                            "char": 71
                        },
                        {
                            "type": "parameter",
                            "name": "includeRefreshToken",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                "line": 54,
                                "char": 99
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 54,
                            "char": 99
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "payload",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 57,
                                    "char": 20
                                },
                                {
                                    "variable": "access_token",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 57,
                                    "char": 34
                                },
                                {
                                    "variable": "token_to_store",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 57,
                                    "char": 50
                                },
                                {
                                    "variable": "token",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 57,
                                    "char": 57
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 58,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "payload",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 58,
                                            "char": 28
                                        },
                                        "name": "createPayload",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "client_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 58,
                                                    "char": 52
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 58,
                                                "char": 52
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "user_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 58,
                                                    "char": 61
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 58,
                                                "char": 61
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "scope",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 58,
                                                    "char": 68
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 58,
                                                "char": 68
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 58,
                                        "char": 69
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 58,
                                    "char": 69
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 63,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "access_token",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 63,
                                            "char": 33
                                        },
                                        "name": "encodeToken",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "payload",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 63,
                                                    "char": 53
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 63,
                                                "char": 53
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "client_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 63,
                                                    "char": 64
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 63,
                                                "char": 64
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 63,
                                        "char": 65
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 63,
                                    "char": 65
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 70,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "token_to_store",
                                    "expr": {
                                        "type": "ternary",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 70,
                                                    "char": 35
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "config",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 70,
                                                    "char": 42
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 70,
                                                "char": 42
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "store_encrypted_token_string",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 70,
                                                "char": 73
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 70,
                                            "char": 75
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "access_token",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 70,
                                            "char": 90
                                        },
                                        "extra": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "payload",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 70,
                                                "char": 99
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "id",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 70,
                                                "char": 104
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 70,
                                            "char": 105
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 70,
                                        "char": 105
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 70,
                                    "char": 105
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 71,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 71,
                                        "char": 14
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "tokenStorage",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 71,
                                        "char": 28
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 71,
                                    "char": 28
                                },
                                "name": "setAccessToken",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "token_to_store",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 71,
                                            "char": 58
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 71,
                                        "char": 58
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "client_id",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 71,
                                            "char": 69
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 71,
                                        "char": 69
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "user_id",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 71,
                                            "char": 78
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 71,
                                        "char": 78
                                    },
                                    {
                                        "parameter": {
                                            "type": "ternary",
                                            "left": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                        "line": 71,
                                                        "char": 85
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "config",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                        "line": 71,
                                                        "char": 92
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 71,
                                                    "char": 92
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "access_lifetime",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 71,
                                                    "char": 110
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 71,
                                                "char": 112
                                            },
                                            "right": {
                                                "type": "add",
                                                "left": {
                                                    "type": "fcall",
                                                    "name": "time",
                                                    "call-type": 1,
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 71,
                                                    "char": 121
                                                },
                                                "right": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                            "line": 71,
                                                            "char": 128
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "config",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                            "line": 71,
                                                            "char": 135
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                        "line": 71,
                                                        "char": 135
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "access_lifetime",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                        "line": 71,
                                                        "char": 153
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 71,
                                                    "char": 155
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 71,
                                                "char": 155
                                            },
                                            "extra": {
                                                "type": "null",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 71,
                                                "char": 161
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 71,
                                            "char": 161
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 71,
                                        "char": 161
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "scope",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 71,
                                            "char": 168
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 71,
                                        "char": 168
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                "line": 71,
                                "char": 169
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 74,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "token",
                                    "expr": {
                                        "type": "array",
                                        "left": [
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "access_token",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 75,
                                                    "char": 27
                                                },
                                                "value": {
                                                    "type": "variable",
                                                    "value": "access_token",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 75,
                                                    "char": 41
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 75,
                                                "char": 41
                                            },
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "expires_in",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 76,
                                                    "char": 25
                                                },
                                                "value": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                            "line": 76,
                                                            "char": 32
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "config",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                            "line": 76,
                                                            "char": 39
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                        "line": 76,
                                                        "char": 39
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "access_lifetime",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                        "line": 76,
                                                        "char": 57
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 76,
                                                    "char": 58
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 76,
                                                "char": 58
                                            },
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "token_type",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 77,
                                                    "char": 25
                                                },
                                                "value": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                            "line": 77,
                                                            "char": 32
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "config",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                            "line": 77,
                                                            "char": 39
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                        "line": 77,
                                                        "char": 39
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "token_type",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                        "line": 77,
                                                        "char": 52
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 77,
                                                    "char": 53
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 77,
                                                "char": 53
                                            },
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "scope",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 78,
                                                    "char": 20
                                                },
                                                "value": {
                                                    "type": "variable",
                                                    "value": "scope",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 79,
                                                    "char": 9
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 79,
                                                "char": 9
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 79,
                                        "char": 10
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 79,
                                    "char": 10
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 87,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "variable",
                                    "value": "includeRefreshToken",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 87,
                                    "char": 33
                                },
                                "right": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 87,
                                        "char": 40
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "refreshStorage",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 87,
                                        "char": 56
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 87,
                                    "char": 56
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                "line": 87,
                                "char": 56
                            },
                            "statements": [
                                {
                                    "type": "declare",
                                    "data-type": "variable",
                                    "variables": [
                                        {
                                            "variable": "refresh_token",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 88,
                                            "char": 30
                                        },
                                        {
                                            "variable": "expires",
                                            "expr": {
                                                "type": "int",
                                                "value": "0",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 88,
                                                "char": 43
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 88,
                                            "char": 43
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 89,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "refresh_token",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 89,
                                                    "char": 38
                                                },
                                                "name": "generateRefreshToken",
                                                "call-type": 1,
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 89,
                                                "char": 61
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 89,
                                            "char": 61
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 90,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "greater",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 90,
                                                    "char": 21
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "config",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 90,
                                                    "char": 28
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 90,
                                                "char": 28
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "refresh_token_lifetime",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 90,
                                                "char": 53
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 90,
                                            "char": 55
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "0",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 90,
                                            "char": 59
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 90,
                                        "char": 59
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "expires",
                                                    "expr": {
                                                        "type": "add",
                                                        "left": {
                                                            "type": "fcall",
                                                            "name": "time",
                                                            "call-type": 1,
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                            "line": 91,
                                                            "char": 38
                                                        },
                                                        "right": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "property-access",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "this",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                                    "line": 91,
                                                                    "char": 45
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "config",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                                    "line": 91,
                                                                    "char": 52
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                                "line": 91,
                                                                "char": 52
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "refresh_token_lifetime",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                                "line": 91,
                                                                "char": 77
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                            "line": 91,
                                                            "char": 78
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                        "line": 91,
                                                        "char": 78
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 91,
                                                    "char": 78
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 92,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 93,
                                    "char": 16
                                },
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 93,
                                                "char": 18
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "refreshStorage",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 93,
                                                "char": 34
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 93,
                                            "char": 34
                                        },
                                        "name": "setRefreshToken",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "refresh_token",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 93,
                                                    "char": 64
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 93,
                                                "char": 64
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "client_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 93,
                                                    "char": 75
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 93,
                                                "char": 75
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "user_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 93,
                                                    "char": 84
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 93,
                                                "char": 84
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "expires",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 93,
                                                    "char": 93
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 93,
                                                "char": 93
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "scope",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 93,
                                                    "char": 100
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 93,
                                                "char": 100
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 93,
                                        "char": 101
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 94,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "token",
                                            "index-expr": [
                                                {
                                                    "type": "string",
                                                    "value": "refresh_token",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 94,
                                                    "char": 38
                                                }
                                            ],
                                            "expr": {
                                                "type": "variable",
                                                "value": "refresh_token",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 94,
                                                "char": 55
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 94,
                                            "char": 55
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 95,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 97,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "token",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                "line": 97,
                                "char": 21
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 98,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Handle the creation of access token, also issue refresh token if supported \/ desirable.\n     *\n     * @param mixed  $client_id           - Client identifier related to the access token.\n     * @param mixed  $user_id             - User ID associated with the access token\n     * @param string $scope               - (optional) Scopes to be stored in space-separated string.\n     * @param bool   $includeRefreshToken - If true, a new refresh_token will be added to the response\n     * @return array                      - The access token\n     *\n     * @see http:\/\/tools.ietf.org\/html\/rfc6749#section-5\n     * @ingroup oauth2_section_5\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                    "line": 54,
                    "last-line": 104,
                    "char": 19
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "encodeToken",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "token",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 105,
                            "char": 47
                        },
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                "line": 105,
                                "char": 65
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 105,
                            "char": 65
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "private_key",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 107,
                                    "char": 24
                                },
                                {
                                    "variable": "algorithm",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 107,
                                    "char": 35
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 108,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "private_key",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 108,
                                                "char": 32
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "publicKeyStorage",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 108,
                                                "char": 50
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 108,
                                            "char": 50
                                        },
                                        "name": "getPrivateKey",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "client_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 108,
                                                    "char": 74
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 108,
                                                "char": 74
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 108,
                                        "char": 75
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 108,
                                    "char": 75
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 109,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "algorithm",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 109,
                                                "char": 32
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "publicKeyStorage",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 109,
                                                "char": 50
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 109,
                                            "char": 50
                                        },
                                        "name": "getEncryptionAlgorithm",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "client_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 109,
                                                    "char": 83
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 109,
                                                "char": 83
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 109,
                                        "char": 84
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 109,
                                    "char": 84
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 111,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 111,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "encryptionUtil",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 111,
                                        "char": 37
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 111,
                                    "char": 37
                                },
                                "name": "encode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "token",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 111,
                                            "char": 50
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 111,
                                        "char": 50
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "private_key",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 111,
                                            "char": 63
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 111,
                                        "char": 63
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "algorithm",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 111,
                                            "char": 74
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 111,
                                        "char": 74
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                "line": 111,
                                "char": 75
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 112,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param array $token\n     * @param mixed $client_id\n     * @return mixed\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                    "line": 105,
                    "last-line": 121,
                    "char": 22
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "createPayload",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 122,
                            "char": 47
                        },
                        {
                            "type": "parameter",
                            "name": "user_id",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 122,
                            "char": 56
                        },
                        {
                            "type": "parameter",
                            "name": "scope",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                "line": 122,
                                "char": 70
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 122,
                            "char": 70
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "expires",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 125,
                                    "char": 20
                                },
                                {
                                    "variable": "id",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 125,
                                    "char": 24
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 126,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "expires",
                                    "expr": {
                                        "type": "add",
                                        "left": {
                                            "type": "fcall",
                                            "name": "time",
                                            "call-type": 1,
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 126,
                                            "char": 30
                                        },
                                        "right": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 126,
                                                    "char": 37
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "config",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 126,
                                                    "char": 44
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 126,
                                                "char": 44
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "access_lifetime",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 126,
                                                "char": 62
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 126,
                                            "char": 63
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 126,
                                        "char": 63
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 126,
                                    "char": 63
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 127,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "id",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 127,
                                            "char": 23
                                        },
                                        "name": "generateAccessToken",
                                        "call-type": 1,
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 127,
                                        "char": 45
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                    "line": 127,
                                    "char": 45
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 129,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "array",
                                "left": [
                                    {
                                        "key": {
                                            "type": "string",
                                            "value": "id",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 130,
                                            "char": 17
                                        },
                                        "value": {
                                            "type": "variable",
                                            "value": "id",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 130,
                                            "char": 21
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 130,
                                        "char": 21
                                    },
                                    {
                                        "key": {
                                            "type": "string",
                                            "value": "jti",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 131,
                                            "char": 18
                                        },
                                        "value": {
                                            "type": "variable",
                                            "value": "id",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 131,
                                            "char": 22
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 131,
                                        "char": 22
                                    },
                                    {
                                        "key": {
                                            "type": "string",
                                            "value": "iss",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 132,
                                            "char": 18
                                        },
                                        "value": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 132,
                                                    "char": 25
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "config",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 132,
                                                    "char": 32
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 132,
                                                "char": 32
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "issuer",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 132,
                                                "char": 41
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 132,
                                            "char": 42
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 132,
                                        "char": 42
                                    },
                                    {
                                        "key": {
                                            "type": "string",
                                            "value": "aud",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 133,
                                            "char": 18
                                        },
                                        "value": {
                                            "type": "variable",
                                            "value": "client_id",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 133,
                                            "char": 29
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 133,
                                        "char": 29
                                    },
                                    {
                                        "key": {
                                            "type": "string",
                                            "value": "sub",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 134,
                                            "char": 18
                                        },
                                        "value": {
                                            "type": "variable",
                                            "value": "user_id",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 134,
                                            "char": 27
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 134,
                                        "char": 27
                                    },
                                    {
                                        "key": {
                                            "type": "string",
                                            "value": "exp",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 135,
                                            "char": 18
                                        },
                                        "value": {
                                            "type": "variable",
                                            "value": "expires",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 135,
                                            "char": 27
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 135,
                                        "char": 27
                                    },
                                    {
                                        "key": {
                                            "type": "string",
                                            "value": "iat",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 136,
                                            "char": 18
                                        },
                                        "value": {
                                            "type": "fcall",
                                            "name": "time",
                                            "call-type": 1,
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 136,
                                            "char": 26
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 136,
                                        "char": 26
                                    },
                                    {
                                        "key": {
                                            "type": "string",
                                            "value": "token_type",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 137,
                                            "char": 25
                                        },
                                        "value": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 137,
                                                    "char": 32
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "config",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                    "line": 137,
                                                    "char": 39
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 137,
                                                "char": 39
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "token_type",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                                "line": 137,
                                                "char": 52
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 137,
                                            "char": 53
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 137,
                                        "char": 53
                                    },
                                    {
                                        "key": {
                                            "type": "string",
                                            "value": "scope",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 138,
                                            "char": 20
                                        },
                                        "value": {
                                            "type": "variable",
                                            "value": "scope",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                            "line": 139,
                                            "char": 9
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                        "line": 139,
                                        "char": 9
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                                "line": 139,
                                "char": 10
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                            "line": 140,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * This function can be used to create custom JWT payloads\n     *\n     * @param mixed  $client_id           - Client identifier related to the access token.\n     * @param mixed  $user_id             - User ID associated with the access token\n     * @param string $scope               - (optional) Scopes to be stored in space-separated string.\n     * @return array                      - The access token\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
                    "line": 122,
                    "last-line": 141,
                    "char": 22
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
            "line": 13,
            "char": 5
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/responsetype\/jwtaccesstoken.zep",
        "line": 13,
        "char": 5
    }
]