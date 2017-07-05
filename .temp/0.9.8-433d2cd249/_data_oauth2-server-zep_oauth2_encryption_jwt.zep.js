[
    {
        "type": "comment",
        "value": "**\n * @link https:\/\/github.com\/F21\/jwt\n * @author F21\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
        "line": 6,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\Encryption",
        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
        "line": 8,
        "char": 5
    },
    {
        "type": "class",
        "name": "Jwt",
        "abstract": 0,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "EncryptionInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
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
                    "name": "encode",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "payload",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 10,
                            "char": 43
                        },
                        {
                            "type": "parameter",
                            "name": "key",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 10,
                            "char": 56
                        },
                        {
                            "type": "parameter",
                            "name": "algo",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "string",
                                "value": "HS256",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 10,
                                "char": 80
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 10,
                            "char": 80
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "header",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 12,
                                    "char": 19
                                },
                                {
                                    "variable": "segments",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 12,
                                    "char": 29
                                },
                                {
                                    "variable": "signing_input",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 12,
                                    "char": 44
                                },
                                {
                                    "variable": "signature",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 12,
                                    "char": 55
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 14,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "header",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 14,
                                            "char": 27
                                        },
                                        "name": "generateJwtHeader",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "payload",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 14,
                                                    "char": 53
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 14,
                                                "char": 53
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "algo",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 14,
                                                    "char": 59
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 14,
                                                "char": 59
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 14,
                                        "char": 60
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 14,
                                    "char": 60
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 16,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "segments",
                                    "expr": {
                                        "type": "array",
                                        "left": [
                                            {
                                                "value": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 17,
                                                        "char": 18
                                                    },
                                                    "name": "urlSafeB64Encode",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "fcall",
                                                                "name": "json_encode",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "variable",
                                                                            "value": "header",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                            "line": 17,
                                                                            "char": 54
                                                                        },
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                        "line": 17,
                                                                        "char": 54
                                                                    }
                                                                ],
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 17,
                                                                "char": 55
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 17,
                                                            "char": 55
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 17,
                                                    "char": 56
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 17,
                                                "char": 56
                                            },
                                            {
                                                "value": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 18,
                                                        "char": 18
                                                    },
                                                    "name": "urlSafeB64Encode",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "fcall",
                                                                "name": "json_encode",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "variable",
                                                                            "value": "payload",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                            "line": 18,
                                                                            "char": 55
                                                                        },
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                        "line": 18,
                                                                        "char": 55
                                                                    }
                                                                ],
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 18,
                                                                "char": 56
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 18,
                                                            "char": 56
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 19,
                                                    "char": 9
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 19,
                                                "char": 9
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 19,
                                        "char": 10
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 19,
                                    "char": 10
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 21,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "signing_input",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "implode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": ".",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 21,
                                                    "char": 40
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 21,
                                                "char": 40
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "segments",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 21,
                                                    "char": 50
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 21,
                                                "char": 50
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 21,
                                        "char": 51
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 21,
                                    "char": 51
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 22,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "signature",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 22,
                                            "char": 30
                                        },
                                        "name": "sign",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "signing_input",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 22,
                                                    "char": 49
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 22,
                                                "char": 49
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "key",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 22,
                                                    "char": 54
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 22,
                                                "char": 54
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "algo",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 22,
                                                    "char": 60
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 22,
                                                "char": 60
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 22,
                                        "char": 61
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 22,
                                    "char": 61
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 23,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable-append",
                                    "operator": "assign",
                                    "variable": "segments",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 23,
                                            "char": 31
                                        },
                                        "name": "urlsafeB64Encode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "signature",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 23,
                                                    "char": 58
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 23,
                                                "char": 58
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 23,
                                        "char": 59
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 23,
                                    "char": 59
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 25,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "implode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": ".",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 25,
                                            "char": 27
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 25,
                                        "char": 27
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "segments",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 25,
                                            "char": 37
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 25,
                                        "char": 37
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 25,
                                "char": 38
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 26,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 11,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                        "line": 11,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                    "line": 10,
                    "last-line": 28,
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
                            "name": "jwt",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 28,
                            "char": 39
                        },
                        {
                            "type": "parameter",
                            "name": "key",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 28,
                                "char": 59
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 28,
                            "char": 59
                        },
                        {
                            "type": "parameter",
                            "name": "verify",
                            "const": 0,
                            "data-type": "bool",
                            "mandatory": 0,
                            "default": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 28,
                                "char": 79
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 28,
                            "char": 79
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "tks",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 30,
                                    "char": 16
                                },
                                {
                                    "variable": "headb64",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 30,
                                    "char": 25
                                },
                                {
                                    "variable": "payloadb64",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 30,
                                    "char": 37
                                },
                                {
                                    "variable": "cryptob64",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 30,
                                    "char": 48
                                },
                                {
                                    "variable": "sig",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 30,
                                    "char": 53
                                },
                                {
                                    "variable": "payload",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 30,
                                    "char": 62
                                },
                                {
                                    "variable": "header",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 30,
                                    "char": 70
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 32,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "strpos",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "jwt",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 32,
                                                "char": 23
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 32,
                                            "char": 23
                                        },
                                        {
                                            "parameter": {
                                                "type": "string",
                                                "value": ".",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 32,
                                                "char": 28
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 32,
                                            "char": 28
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 32,
                                    "char": 30
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 32,
                                "char": 30
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 34,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 36,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "tks",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "explode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": ".",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 36,
                                                    "char": 30
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 36,
                                                "char": 30
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "jwt",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 36,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 36,
                                                "char": 35
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 36,
                                        "char": 36
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 36,
                                    "char": 36
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 38,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-equals",
                                "left": {
                                    "type": "fcall",
                                    "name": "count",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "tks",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 38,
                                                "char": 21
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 38,
                                            "char": 21
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 38,
                                    "char": 24
                                },
                                "right": {
                                    "type": "int",
                                    "value": "3",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 38,
                                    "char": 28
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 38,
                                "char": 28
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 40,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 42,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "headb64",
                                    "expr": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "tks",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 42,
                                            "char": 26
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "0",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 42,
                                            "char": 28
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 42,
                                        "char": 29
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 42,
                                    "char": 29
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 43,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "payloadb64",
                                    "expr": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "tks",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 43,
                                            "char": 29
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "1",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 43,
                                            "char": 31
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 43,
                                        "char": 32
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 43,
                                    "char": 32
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 44,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "cryptob64",
                                    "expr": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "tks",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 44,
                                            "char": 28
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "2",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 44,
                                            "char": 30
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 44,
                                        "char": 31
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 44,
                                    "char": 31
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 46,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "header",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "json_decode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 46,
                                                        "char": 39
                                                    },
                                                    "name": "urlSafeB64Decode",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "headb64",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 46,
                                                                "char": 64
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 46,
                                                            "char": 64
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 46,
                                                    "char": 65
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 46,
                                                "char": 65
                                            },
                                            {
                                                "parameter": {
                                                    "type": "bool",
                                                    "value": "true",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 46,
                                                    "char": 71
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 46,
                                                "char": 71
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 46,
                                        "char": 72
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 46,
                                    "char": 72
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 47,
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
                                        "value": "header",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 47,
                                        "char": 27
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 47,
                                    "char": 27
                                },
                                "right": {
                                    "type": "string",
                                    "value": "null",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 47,
                                    "char": 36
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 47,
                                "char": 36
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 49,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 51,
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
                                        "type": "fcall",
                                        "name": "json_decode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 51,
                                                        "char": 40
                                                    },
                                                    "name": "urlSafeB64Decode",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "payloadb64",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 51,
                                                                "char": 68
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 51,
                                                            "char": 68
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 51,
                                                    "char": 69
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 51,
                                                "char": 69
                                            },
                                            {
                                                "parameter": {
                                                    "type": "bool",
                                                    "value": "true",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 51,
                                                    "char": 75
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 51,
                                                "char": 75
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 51,
                                        "char": 76
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 51,
                                    "char": 76
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 52,
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
                                        "value": "payload",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 52,
                                        "char": 28
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 52,
                                    "char": 28
                                },
                                "right": {
                                    "type": "string",
                                    "value": "null",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 52,
                                    "char": 37
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 52,
                                "char": 37
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 54,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 56,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "sig",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 56,
                                            "char": 24
                                        },
                                        "name": "urlSafeB64Decode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "cryptob64",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 56,
                                                    "char": 51
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 56,
                                                "char": 51
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 56,
                                        "char": 52
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 56,
                                    "char": 52
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 58,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "variable",
                                "value": "verify",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 58,
                                "char": 19
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "isset",
                                            "left": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "header",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 59,
                                                    "char": 29
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "alg",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 59,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 59,
                                                "char": 37
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 59,
                                            "char": 37
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 59,
                                        "char": 37
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 61,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 63,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 63,
                                                "char": 22
                                            },
                                            "name": "verifySignature",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "sig",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 63,
                                                        "char": 42
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 63,
                                                    "char": 42
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "headb64",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 63,
                                                                "char": 52
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": ".",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 63,
                                                                "char": 58
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 63,
                                                            "char": 58
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "payloadb64",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 63,
                                                            "char": 70
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 63,
                                                        "char": 70
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 63,
                                                    "char": 70
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "key",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 63,
                                                        "char": 75
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 63,
                                                    "char": 75
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "array-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "header",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 63,
                                                            "char": 83
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "alg",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 63,
                                                            "char": 89
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 63,
                                                        "char": 90
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 63,
                                                    "char": 90
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 63,
                                            "char": 92
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 63,
                                        "char": 92
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 65,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 66,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 68,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "payload",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 68,
                                "char": 23
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 69,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 29,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                        "line": 29,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                    "line": 28,
                    "last-line": 71,
                    "char": 19
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "method",
                    "name": "verifySignature",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "signature",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 71,
                            "char": 54
                        },
                        {
                            "type": "parameter",
                            "name": "input",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 71,
                            "char": 68
                        },
                        {
                            "type": "parameter",
                            "name": "key",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 71,
                            "char": 80
                        },
                        {
                            "type": "parameter",
                            "name": "algo",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "default": {
                                "type": "string",
                                "value": "HS256",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 71,
                                "char": 103
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 71,
                            "char": 103
                        }
                    ],
                    "statements": [
                        {
                            "type": "switch",
                            "expr": {
                                "type": "variable",
                                "value": "algo",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 74,
                                "char": 21
                            },
                            "clauses": [
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "string",
                                        "value": "HS256",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 75,
                                        "char": 24
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 76,
                                    "char": 16
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "string",
                                        "value": "HS384",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 76,
                                        "char": 24
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 77,
                                    "char": 16
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "string",
                                        "value": "HS512",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 77,
                                        "char": 24
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 78,
                                                    "char": 29
                                                },
                                                "name": "hash_equals",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "mcall",
                                                            "variable": {
                                                                "type": "variable",
                                                                "value": "this",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 79,
                                                                "char": 26
                                                            },
                                                            "name": "sign",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "input",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                        "line": 79,
                                                                        "char": 37
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                    "line": 79,
                                                                    "char": 37
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "key",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                        "line": 79,
                                                                        "char": 42
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                    "line": 79,
                                                                    "char": 42
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "algo",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                        "line": 79,
                                                                        "char": 48
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                    "line": 79,
                                                                    "char": 48
                                                                }
                                                            ],
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 79,
                                                            "char": 49
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 79,
                                                        "char": 49
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "signature",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 81,
                                                            "char": 17
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 81,
                                                        "char": 17
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 81,
                                                "char": 18
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 83,
                                            "char": 16
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 83,
                                    "char": 16
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "string",
                                        "value": "RS256",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 83,
                                        "char": 25
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "identical",
                                                "left": {
                                                    "type": "fcall",
                                                    "name": "openssl_verify",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "input",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 84,
                                                                "char": 44
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 84,
                                                            "char": 44
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "signature",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 84,
                                                                "char": 55
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 84,
                                                            "char": 55
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "key",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 84,
                                                                "char": 60
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 84,
                                                            "char": 60
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "ternary",
                                                                "left": {
                                                                    "type": "fcall",
                                                                    "name": "defined",
                                                                    "call-type": 1,
                                                                    "parameters": [
                                                                        {
                                                                            "parameter": {
                                                                                "type": "string",
                                                                                "value": "OPENSSL_ALGO_SHA256",
                                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                                "line": 84,
                                                                                "char": 91
                                                                            },
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                            "line": 84,
                                                                            "char": 91
                                                                        }
                                                                    ],
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                    "line": 84,
                                                                    "char": 93
                                                                },
                                                                "right": {
                                                                    "type": "constant",
                                                                    "value": "OPENSSL_ALGO_SHA256",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                    "line": 84,
                                                                    "char": 115
                                                                },
                                                                "extra": {
                                                                    "type": "string",
                                                                    "value": "sha256",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                    "line": 84,
                                                                    "char": 125
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 84,
                                                                "char": 125
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 84,
                                                            "char": 125
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 84,
                                                    "char": 130
                                                },
                                                "right": {
                                                    "type": "int",
                                                    "value": "1",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 84,
                                                    "char": 133
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 84,
                                                "char": 133
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 86,
                                            "char": 16
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 86,
                                    "char": 16
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "string",
                                        "value": "RS384",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 86,
                                        "char": 25
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "identical",
                                                "left": {
                                                    "type": "fcall",
                                                    "name": "openssl_verify",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "input",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 87,
                                                                "char": 44
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 87,
                                                            "char": 44
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "signature",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 87,
                                                                "char": 55
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 87,
                                                            "char": 55
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "key",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 87,
                                                                "char": 60
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 87,
                                                            "char": 60
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "ternary",
                                                                "left": {
                                                                    "type": "fcall",
                                                                    "name": "defined",
                                                                    "call-type": 1,
                                                                    "parameters": [
                                                                        {
                                                                            "parameter": {
                                                                                "type": "string",
                                                                                "value": "OPENSSL_ALGO_SHA384",
                                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                                "line": 87,
                                                                                "char": 91
                                                                            },
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                            "line": 87,
                                                                            "char": 91
                                                                        }
                                                                    ],
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                    "line": 87,
                                                                    "char": 93
                                                                },
                                                                "right": {
                                                                    "type": "constant",
                                                                    "value": "OPENSSL_ALGO_SHA384",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                    "line": 87,
                                                                    "char": 115
                                                                },
                                                                "extra": {
                                                                    "type": "string",
                                                                    "value": "sha384",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                    "line": 87,
                                                                    "char": 125
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 87,
                                                                "char": 125
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 87,
                                                            "char": 125
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 87,
                                                    "char": 129
                                                },
                                                "right": {
                                                    "type": "int",
                                                    "value": "1",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 87,
                                                    "char": 132
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 87,
                                                "char": 132
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 89,
                                            "char": 16
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 89,
                                    "char": 16
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "string",
                                        "value": "RS512",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 89,
                                        "char": 25
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "identical",
                                                "left": {
                                                    "type": "fcall",
                                                    "name": "openssl_verify",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "input",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 90,
                                                                "char": 44
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 90,
                                                            "char": 44
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "signature",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 90,
                                                                "char": 55
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 90,
                                                            "char": 55
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "key",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 90,
                                                                "char": 60
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 90,
                                                            "char": 60
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "ternary",
                                                                "left": {
                                                                    "type": "fcall",
                                                                    "name": "defined",
                                                                    "call-type": 1,
                                                                    "parameters": [
                                                                        {
                                                                            "parameter": {
                                                                                "type": "string",
                                                                                "value": "OPENSSL_ALGO_SHA512",
                                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                                "line": 90,
                                                                                "char": 91
                                                                            },
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                            "line": 90,
                                                                            "char": 91
                                                                        }
                                                                    ],
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                    "line": 90,
                                                                    "char": 93
                                                                },
                                                                "right": {
                                                                    "type": "constant",
                                                                    "value": "OPENSSL_ALGO_SHA512",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                    "line": 90,
                                                                    "char": 115
                                                                },
                                                                "extra": {
                                                                    "type": "string",
                                                                    "value": "sha512",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                    "line": 90,
                                                                    "char": 125
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 90,
                                                                "char": 125
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 90,
                                                            "char": 125
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 90,
                                                    "char": 129
                                                },
                                                "right": {
                                                    "type": "int",
                                                    "value": "1",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 90,
                                                    "char": 132
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 90,
                                                "char": 132
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 92,
                                            "char": 19
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 92,
                                    "char": 19
                                },
                                {
                                    "type": "default",
                                    "statements": [
                                        {
                                            "type": "throw",
                                            "expr": {
                                                "type": "new",
                                                "class": "\\InvalidArgumentException",
                                                "dynamic": 0,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "Unsupported or invalid signing algorithm.",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 93,
                                                            "char": 96
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 93,
                                                        "char": 96
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 93,
                                                "char": 97
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 94,
                                            "char": 9
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 94,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 95,
                            "char": 5
                        }
                    ],
                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                    "line": 71,
                    "last-line": 97,
                    "char": 20
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "method",
                    "name": "sign",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "input",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 97,
                            "char": 32
                        },
                        {
                            "type": "parameter",
                            "name": "key",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 97,
                            "char": 37
                        },
                        {
                            "type": "parameter",
                            "name": "algo",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "string",
                                "value": "HS256",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 97,
                                "char": 53
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 97,
                            "char": 53
                        }
                    ],
                    "statements": [
                        {
                            "type": "switch",
                            "expr": {
                                "type": "variable",
                                "value": "algo",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 99,
                                "char": 21
                            },
                            "clauses": [
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "string",
                                        "value": "HS256",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 100,
                                        "char": 25
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "hash_hmac",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "sha256",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 101,
                                                            "char": 42
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 101,
                                                        "char": 42
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "input",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 101,
                                                            "char": 49
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 101,
                                                        "char": 49
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 101,
                                                            "char": 54
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 101,
                                                        "char": 54
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "bool",
                                                            "value": "true",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 101,
                                                            "char": 60
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 101,
                                                        "char": 60
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 101,
                                                "char": 61
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 103,
                                            "char": 16
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 103,
                                    "char": 16
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "string",
                                        "value": "HS384",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 103,
                                        "char": 25
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "hash_hmac",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "sha384",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 104,
                                                            "char": 42
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 104,
                                                        "char": 42
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "input",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 104,
                                                            "char": 49
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 104,
                                                        "char": 49
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 104,
                                                            "char": 54
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 104,
                                                        "char": 54
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "bool",
                                                            "value": "true",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 104,
                                                            "char": 60
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 104,
                                                        "char": 60
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 104,
                                                "char": 61
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 106,
                                            "char": 16
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 106,
                                    "char": 16
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "string",
                                        "value": "HS512",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 106,
                                        "char": 25
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "hash_hmac",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "sha512",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 107,
                                                            "char": 42
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 107,
                                                        "char": 42
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "input",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 107,
                                                            "char": 49
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 107,
                                                        "char": 49
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 107,
                                                            "char": 54
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 107,
                                                        "char": 54
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "bool",
                                                            "value": "true",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 107,
                                                            "char": 60
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 107,
                                                        "char": 60
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 107,
                                                "char": 61
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 109,
                                            "char": 16
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 109,
                                    "char": 16
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "string",
                                        "value": "RS256",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 109,
                                        "char": 25
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 110,
                                                    "char": 29
                                                },
                                                "name": "generateRSASignature",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "input",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 110,
                                                            "char": 56
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 110,
                                                        "char": 56
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 110,
                                                            "char": 61
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 110,
                                                        "char": 61
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "ternary",
                                                            "left": {
                                                                "type": "fcall",
                                                                "name": "defined",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "string",
                                                                            "value": "OPENSSL_ALGO_SHA256",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                            "line": 110,
                                                                            "char": 92
                                                                        },
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                        "line": 110,
                                                                        "char": 92
                                                                    }
                                                                ],
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 110,
                                                                "char": 94
                                                            },
                                                            "right": {
                                                                "type": "constant",
                                                                "value": "OPENSSL_ALGO_SHA256",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 110,
                                                                "char": 116
                                                            },
                                                            "extra": {
                                                                "type": "string",
                                                                "value": "sha256",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 110,
                                                                "char": 126
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 110,
                                                            "char": 126
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 110,
                                                        "char": 126
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 110,
                                                "char": 127
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 112,
                                            "char": 16
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 112,
                                    "char": 16
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "string",
                                        "value": "RS384",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 112,
                                        "char": 25
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 113,
                                                    "char": 29
                                                },
                                                "name": "generateRSASignature",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "input",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 113,
                                                            "char": 56
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 113,
                                                        "char": 56
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 113,
                                                            "char": 61
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 113,
                                                        "char": 61
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "ternary",
                                                            "left": {
                                                                "type": "fcall",
                                                                "name": "defined",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "string",
                                                                            "value": "OPENSSL_ALGO_SHA384",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                            "line": 113,
                                                                            "char": 92
                                                                        },
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                        "line": 113,
                                                                        "char": 92
                                                                    }
                                                                ],
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 113,
                                                                "char": 94
                                                            },
                                                            "right": {
                                                                "type": "constant",
                                                                "value": "OPENSSL_ALGO_SHA384",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 113,
                                                                "char": 116
                                                            },
                                                            "extra": {
                                                                "type": "string",
                                                                "value": "sha384",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 113,
                                                                "char": 126
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 113,
                                                            "char": 126
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 113,
                                                        "char": 126
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 113,
                                                "char": 127
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 115,
                                            "char": 16
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 115,
                                    "char": 16
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "string",
                                        "value": "RS512",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 115,
                                        "char": 25
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 116,
                                                    "char": 29
                                                },
                                                "name": "generateRSASignature",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "input",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 116,
                                                            "char": 56
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 116,
                                                        "char": 56
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 116,
                                                            "char": 61
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 116,
                                                        "char": 61
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "ternary",
                                                            "left": {
                                                                "type": "fcall",
                                                                "name": "defined",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "string",
                                                                            "value": "OPENSSL_ALGO_SHA512",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                            "line": 116,
                                                                            "char": 92
                                                                        },
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                        "line": 116,
                                                                        "char": 92
                                                                    }
                                                                ],
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 116,
                                                                "char": 94
                                                            },
                                                            "right": {
                                                                "type": "constant",
                                                                "value": "OPENSSL_ALGO_SHA512",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 116,
                                                                "char": 116
                                                            },
                                                            "extra": {
                                                                "type": "string",
                                                                "value": "sha512",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 116,
                                                                "char": 126
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 116,
                                                            "char": 126
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 116,
                                                        "char": 126
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 116,
                                                "char": 127
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 118,
                                            "char": 19
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 118,
                                    "char": 19
                                },
                                {
                                    "type": "default",
                                    "statements": [
                                        {
                                            "type": "throw",
                                            "expr": {
                                                "type": "new",
                                                "class": "\\Exception",
                                                "dynamic": 0,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "Unsupported or invalid signing algorithm.",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 119,
                                                            "char": 81
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                        "line": 119,
                                                        "char": 81
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 119,
                                                "char": 82
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 120,
                                            "char": 9
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 120,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 121,
                            "char": 5
                        }
                    ],
                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                    "line": 97,
                    "last-line": 123,
                    "char": 20
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "method",
                    "name": "generateRSASignature",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "input",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 123,
                            "char": 48
                        },
                        {
                            "type": "parameter",
                            "name": "key",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 123,
                            "char": 53
                        },
                        {
                            "type": "parameter",
                            "name": "algo",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 123,
                            "char": 59
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "signature",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 125,
                                    "char": 22
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 126,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "openssl_sign",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "input",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 126,
                                                "char": 31
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 126,
                                            "char": 31
                                        },
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "signature",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 126,
                                                "char": 42
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 126,
                                            "char": 42
                                        },
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "key",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 126,
                                                "char": 47
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 126,
                                            "char": 47
                                        },
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "algo",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 126,
                                                "char": 53
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 126,
                                            "char": 53
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 126,
                                    "char": 55
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 126,
                                "char": 55
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Unable to sign data.",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 127,
                                                    "char": 56
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 127,
                                                "char": 56
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 127,
                                        "char": 57
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 128,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 130,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "signature",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 130,
                                "char": 25
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 131,
                            "char": 5
                        }
                    ],
                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                    "line": 123,
                    "last-line": 133,
                    "char": 20
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
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 133,
                            "char": 42
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "b64",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 135,
                                    "char": 16
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 136,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "b64",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "base64_encode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "data",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 136,
                                                    "char": 37
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 136,
                                                "char": 37
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 136,
                                        "char": 38
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 136,
                                    "char": 38
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 137,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "b64",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "str_replace",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "value": {
                                                                "type": "string",
                                                                "value": "+",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 137,
                                                                "char": 35
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 137,
                                                            "char": 35
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "string",
                                                                "value": "\/",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 137,
                                                                "char": 40
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 137,
                                                            "char": 40
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "string",
                                                                "value": "\\\\r",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 137,
                                                                "char": 47
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 137,
                                                            "char": 47
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "string",
                                                                "value": "\\\\n",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 137,
                                                                "char": 54
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 137,
                                                            "char": 54
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "string",
                                                                "value": "=",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 137,
                                                                "char": 59
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 137,
                                                            "char": 59
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 137,
                                                    "char": 60
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 137,
                                                "char": 60
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "value": {
                                                                "type": "string",
                                                                "value": "-",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 137,
                                                                "char": 66
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 137,
                                                            "char": 66
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "string",
                                                                "value": "_",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 137,
                                                                "char": 71
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 137,
                                                            "char": 71
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 137,
                                                    "char": 72
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 137,
                                                "char": 72
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "b64",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 137,
                                                    "char": 77
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 137,
                                                "char": 77
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 137,
                                        "char": 78
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 137,
                                    "char": 78
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 138,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "b64",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 138,
                                "char": 19
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 139,
                            "char": 5
                        }
                    ],
                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                    "line": 133,
                    "last-line": 141,
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
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 141,
                            "char": 41
                        }
                    ],
                    "statements": [
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "b64",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "str_replace",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "value": {
                                                                "type": "string",
                                                                "value": "-",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 144,
                                                                "char": 35
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 144,
                                                            "char": 35
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "string",
                                                                "value": "_",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 144,
                                                                "char": 40
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 144,
                                                            "char": 40
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 144,
                                                    "char": 41
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 144,
                                                "char": 41
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "value": {
                                                                "type": "string",
                                                                "value": "+",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 144,
                                                                "char": 47
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 144,
                                                            "char": 47
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "string",
                                                                "value": "\/",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                                "line": 144,
                                                                "char": 52
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                            "line": 144,
                                                            "char": 52
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 144,
                                                    "char": 53
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 144,
                                                "char": 53
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "b64",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 144,
                                                    "char": 58
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 144,
                                                "char": 58
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 144,
                                        "char": 59
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 144,
                                    "char": 59
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 145,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "base64_decode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "b64",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 145,
                                            "char": 33
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 145,
                                        "char": 33
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 145,
                                "char": 34
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 146,
                            "char": 5
                        }
                    ],
                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                    "line": 141,
                    "last-line": 150,
                    "char": 19
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "generateJwtHeader",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "payload",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 151,
                            "char": 49
                        },
                        {
                            "type": "parameter",
                            "name": "algorithm",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 151,
                            "char": 60
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "array",
                                "left": [
                                    {
                                        "key": {
                                            "type": "string",
                                            "value": "typ",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 153,
                                            "char": 22
                                        },
                                        "value": {
                                            "type": "string",
                                            "value": "JWT",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 153,
                                            "char": 29
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 153,
                                        "char": 29
                                    },
                                    {
                                        "key": {
                                            "type": "string",
                                            "value": "alg",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 153,
                                            "char": 36
                                        },
                                        "value": {
                                            "type": "variable",
                                            "value": "algorithm",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 153,
                                            "char": 47
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 153,
                                        "char": 47
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 153,
                                "char": 48
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 154,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Override to create a custom header\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                    "line": 151,
                    "last-line": 156,
                    "char": 22
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "hash_equals",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "a",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 156,
                            "char": 41
                        },
                        {
                            "type": "parameter",
                            "name": "b",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 156,
                            "char": 48
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "diff",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 158,
                                    "char": 17
                                },
                                {
                                    "variable": "i",
                                    "expr": {
                                        "type": "int",
                                        "value": "0",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 158,
                                        "char": 24
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 158,
                                    "char": 24
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 160,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "function_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "hash_equals",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                            "line": 160,
                                            "char": 41
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 160,
                                        "char": 41
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 160,
                                "char": 43
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "hash_equals",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "a",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 161,
                                                    "char": 33
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 161,
                                                "char": 33
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "b",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                    "line": 161,
                                                    "char": 36
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                                "line": 161,
                                                "char": 36
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                        "line": 161,
                                        "char": 37
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                    "line": 162,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 170,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "false",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                                "line": 170,
                                "char": 21
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                            "line": 171,
                            "char": 5
                        }
                    ],
                    "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
                    "line": 156,
                    "last-line": 172,
                    "char": 22
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
            "line": 8,
            "char": 5
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/encryption\/jwt.zep",
        "line": 8,
        "char": 5
    }
]