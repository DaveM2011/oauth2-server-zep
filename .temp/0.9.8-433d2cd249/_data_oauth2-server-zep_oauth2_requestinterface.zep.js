[
    {
        "type": "namespace",
        "name": "OAuth2",
        "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
        "line": 4,
        "char": 9
    },
    {
        "type": "interface",
        "name": "RequestInterface",
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "query",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                            "line": 6,
                            "char": 39
                        },
                        {
                            "type": "parameter",
                            "name": "default",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                                "line": 6,
                                "char": 62
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                            "line": 6,
                            "char": 62
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                                "line": 6,
                                "char": 73
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                        "line": 6,
                        "char": 73
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                    "line": 6,
                    "last-line": 7,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "request",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                            "line": 7,
                            "char": 41
                        },
                        {
                            "type": "parameter",
                            "name": "default",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                                "line": 7,
                                "char": 64
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                            "line": 7,
                            "char": 64
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                                "line": 7,
                                "char": 75
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                        "line": 7,
                        "char": 75
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                    "line": 7,
                    "last-line": 8,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "server",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                            "line": 8,
                            "char": 40
                        },
                        {
                            "type": "parameter",
                            "name": "default",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                                "line": 8,
                                "char": 63
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                            "line": 8,
                            "char": 63
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                                "line": 8,
                                "char": 74
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                        "line": 8,
                        "char": 74
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                    "line": 8,
                    "last-line": 9,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "headers",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                            "line": 9,
                            "char": 41
                        },
                        {
                            "type": "parameter",
                            "name": "default",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                                "line": 9,
                                "char": 64
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                            "line": 9,
                            "char": 64
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                                "line": 9,
                                "char": 75
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                        "line": 9,
                        "char": 75
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                    "line": 9,
                    "last-line": 10,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getAllQueryParameters",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "array",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                                "line": 10,
                                "char": 53
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                        "line": 10,
                        "char": 53
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
                    "line": 10,
                    "last-line": 11,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
            "line": 11,
            "char": 1
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/requestinterface.zep",
        "line": 0,
        "char": 0
    }
]