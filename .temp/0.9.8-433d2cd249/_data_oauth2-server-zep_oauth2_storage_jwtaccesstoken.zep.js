[
    {
        "type": "comment",
        "value": "**\n * JWT Access token\n * @author Brent Shaffer <bshafs at gmail dot com>\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
        "line": 7,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\Storage",
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
        "line": 9,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Encryption\\EncryptionInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                "line": 9,
                "char": 42
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
        "line": 10,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Encryption\\Jwt",
                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                "line": 10,
                "char": 26
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
        "line": 12,
        "char": 5
    },
    {
        "type": "class",
        "name": "JwtAccessToken",
        "abstract": 0,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "JwtAccessTokenInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                "line": 13,
                "char": 1
            }
        ],
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "publicKeyStorage",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                    "line": 15,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "tokenStorage",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                    "line": 16,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "encryptionUtil",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                    "line": 24,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                "line": 25,
                                "char": 69
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 25,
                            "char": 70
                        },
                        {
                            "type": "parameter",
                            "name": "tokenStorage",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "AccessTokenInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                "line": 25,
                                "char": 106
                            },
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                "line": 25,
                                "char": 114
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 25,
                            "char": 114
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                "line": 25,
                                "char": 151
                            },
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                "line": 25,
                                "char": 159
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 25,
                            "char": 159
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
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                        "line": 27,
                                        "char": 54
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 27,
                                    "char": 54
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 28,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "tokenStorage",
                                    "expr": {
                                        "type": "variable",
                                        "value": "tokenStorage",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                        "line": 28,
                                        "char": 46
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 28,
                                    "char": 46
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 30,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "encryptionUtil",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                        "line": 30,
                                        "char": 35
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 30,
                                    "char": 35
                                },
                                "right": {
                                    "type": "string",
                                    "value": "null",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 30,
                                    "char": 44
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                "line": 30,
                                "char": 44
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
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 31,
                                                "char": 41
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                            "line": 31,
                                            "char": 41
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 32,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 33,
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
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                        "line": 33,
                                        "char": 50
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 33,
                                    "char": 50
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 34,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param OAuth2\\Encryption\\PublicKeyInterface publicKeyStorage the public key encryption to use\n     * @param OAuth2\\Storage\\AccessTokenInterfacetokenStorage OPTIONAL persist the access token to another storage. This is useful if\n     * you want to retain access token grant information somewhere, but\n     * is not necessary when using this grant type.\n     * @param OAuth2\\Encryption\\EncryptionInterface encryptionUtil   OPTIONAL class to use for \"encode\" and \"decode\" functions.\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                    "line": 25,
                    "last-line": 36,
                    "char": 19
                },
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
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 36,
                            "char": 55
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "tokenData",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 38,
                                    "char": 22
                                },
                                {
                                    "variable": "client_id",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 38,
                                    "char": 33
                                },
                                {
                                    "variable": "public_key",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 38,
                                    "char": 45
                                },
                                {
                                    "variable": "algorithm",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 38,
                                    "char": 56
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 41,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "tokenData",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 41,
                                                "char": 30
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "encryptionUtil",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 41,
                                                "char": 46
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                            "line": 41,
                                            "char": 46
                                        },
                                        "name": "decode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "oauth_token",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                    "line": 41,
                                                    "char": 65
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 41,
                                                "char": 65
                                            },
                                            {
                                                "parameter": {
                                                    "type": "null",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                    "line": 41,
                                                    "char": 71
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 41,
                                                "char": 71
                                            },
                                            {
                                                "parameter": {
                                                    "type": "bool",
                                                    "value": "false",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                    "line": 41,
                                                    "char": 78
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 41,
                                                "char": 78
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                        "line": 41,
                                        "char": 79
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 41,
                                    "char": 79
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 42,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "tokenData",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 42,
                                    "char": 23
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                "line": 42,
                                "char": 23
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                        "line": 43,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 44,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 46,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "client_id",
                                    "expr": {
                                        "type": "ternary",
                                        "left": {
                                            "type": "isset",
                                            "left": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "tokenData",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                    "line": 46,
                                                    "char": 41
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "aud",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                    "line": 46,
                                                    "char": 47
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 46,
                                                "char": 49
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                            "line": 46,
                                            "char": 49
                                        },
                                        "right": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "tokenData",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 46,
                                                "char": 60
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "aud",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 46,
                                                "char": 66
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                            "line": 46,
                                            "char": 68
                                        },
                                        "extra": {
                                            "type": "null",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                            "line": 46,
                                            "char": 74
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                        "line": 46,
                                        "char": 74
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 46,
                                    "char": 74
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 47,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "public_key",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 47,
                                                "char": 31
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "publicKeyStorage",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 47,
                                                "char": 49
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                            "line": 47,
                                            "char": 49
                                        },
                                        "name": "getPublicKey",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "client_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                    "line": 47,
                                                    "char": 72
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 47,
                                                "char": 72
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                        "line": 47,
                                        "char": 73
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 47,
                                    "char": 73
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 48,
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
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 48,
                                                "char": 31
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "publicKeyStorage",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 48,
                                                "char": 49
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                            "line": 48,
                                            "char": 49
                                        },
                                        "name": "getEncryptionAlgorithm",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "client_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                    "line": 48,
                                                    "char": 82
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 48,
                                                "char": 82
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                        "line": 48,
                                        "char": 83
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 48,
                                    "char": 83
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 51,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                            "line": 51,
                                            "char": 17
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "encryptionUtil",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                            "line": 51,
                                            "char": 33
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                        "line": 51,
                                        "char": 33
                                    },
                                    "name": "decode",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "oauth_token",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 51,
                                                "char": 52
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                            "line": 51,
                                            "char": 52
                                        },
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "public_key",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 51,
                                                "char": 64
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                            "line": 51,
                                            "char": 64
                                        },
                                        {
                                            "parameter": {
                                                "type": "bool",
                                                "value": "true",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 51,
                                                "char": 70
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                            "line": 51,
                                            "char": 70
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 51,
                                    "char": 74
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "false",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 51,
                                    "char": 82
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                "line": 51,
                                "char": 82
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                        "line": 52,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 53,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 56,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 56,
                                    "char": 21
                                },
                                "name": "convertJwtToOAuth2",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "tokenData",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                            "line": 56,
                                            "char": 50
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                        "line": 56,
                                        "char": 50
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                "line": 56,
                                "char": 51
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 57,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                "line": 36,
                                "char": 68
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "array",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                "line": 37,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                        "line": 37,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                    "line": 36,
                    "last-line": 59,
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
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 59,
                            "char": 55
                        },
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 59,
                            "char": 74
                        },
                        {
                            "type": "parameter",
                            "name": "user_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 59,
                            "char": 91
                        },
                        {
                            "type": "parameter",
                            "name": "expires",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 59,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                "line": 59,
                                "char": 126
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 59,
                            "char": 126
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 61,
                                    "char": 17
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "tokenStorage",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 61,
                                    "char": 31
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                "line": 61,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 62,
                                                "char": 18
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "tokenStorage",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 62,
                                                "char": 32
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                            "line": 62,
                                            "char": 32
                                        },
                                        "name": "setAccessToken",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "oauth_token",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                    "line": 62,
                                                    "char": 59
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 62,
                                                "char": 59
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "client_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                    "line": 62,
                                                    "char": 70
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 62,
                                                "char": 70
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "user_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                    "line": 62,
                                                    "char": 79
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 62,
                                                "char": 79
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "expires",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                    "line": 62,
                                                    "char": 88
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 62,
                                                "char": 88
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "scope",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                    "line": 62,
                                                    "char": 95
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 62,
                                                "char": 95
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                        "line": 62,
                                        "char": 96
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 63,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 64,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                        "line": 60,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                    "line": 59,
                    "last-line": 67,
                    "char": 19
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "convertJwtToOAuth2",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "tokenData",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 67,
                            "char": 58
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "keyMapping",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 69,
                                    "char": 23
                                },
                                {
                                    "variable": "jwtKey",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 69,
                                    "char": 31
                                },
                                {
                                    "variable": "oauth2Key",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 69,
                                    "char": 42
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 71,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "keyMapping",
                                    "expr": {
                                        "type": "array",
                                        "left": [
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "aud",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                    "line": 72,
                                                    "char": 18
                                                },
                                                "value": {
                                                    "type": "string",
                                                    "value": "client_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                    "line": 72,
                                                    "char": 31
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 72,
                                                "char": 31
                                            },
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "exp",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                    "line": 73,
                                                    "char": 18
                                                },
                                                "value": {
                                                    "type": "string",
                                                    "value": "expires",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                    "line": 73,
                                                    "char": 29
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 73,
                                                "char": 29
                                            },
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "sub",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                    "line": 74,
                                                    "char": 18
                                                },
                                                "value": {
                                                    "type": "string",
                                                    "value": "user_id",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                    "line": 75,
                                                    "char": 9
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 75,
                                                "char": 9
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                        "line": 75,
                                        "char": 10
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 75,
                                    "char": 10
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 77,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "keyMapping",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                "line": 77,
                                "char": 45
                            },
                            "key": "jwtKey",
                            "value": "oauth2Key",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "isset",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "tokenData",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 78,
                                                "char": 31
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "jwtKey",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 78,
                                                "char": 38
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                            "line": 78,
                                            "char": 40
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                        "line": 78,
                                        "char": 40
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "array-index",
                                                    "operator": "assign",
                                                    "variable": "tokenData",
                                                    "index-expr": [
                                                        {
                                                            "type": "variable",
                                                            "value": "oauth2Key",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                            "line": 79,
                                                            "char": 40
                                                        }
                                                    ],
                                                    "expr": {
                                                        "type": "array-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "tokenData",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                            "line": 79,
                                                            "char": 53
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "jwtKey",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                            "line": 79,
                                                            "char": 60
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                        "line": 79,
                                                        "char": 61
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                    "line": 79,
                                                    "char": 61
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                            "line": 80,
                                            "char": 21
                                        },
                                        {
                                            "type": "unset",
                                            "expr": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "tokenData",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                    "line": 80,
                                                    "char": 32
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "jwtKey",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                    "line": 80,
                                                    "char": 39
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                                "line": 80,
                                                "char": 40
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                            "line": 81,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                    "line": 82,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 84,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "tokenData",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                "line": 84,
                                "char": 25
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                            "line": 85,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "array",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                                "line": 68,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                        "line": 68,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
                    "line": 67,
                    "last-line": 86,
                    "char": 22
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
            "line": 12,
            "char": 5
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/storage\/jwtaccesstoken.zep",
        "line": 12,
        "char": 5
    }
]