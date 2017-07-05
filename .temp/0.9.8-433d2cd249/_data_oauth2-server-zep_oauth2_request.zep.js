[
    {
        "type": "namespace",
        "name": "OAuth2",
        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
        "line": 3,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "LogicException",
                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                "line": 3,
                "char": 19
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
        "line": 9,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * OAuth2\\Request\n * This class is taken from the Symfony2 Framework and is part of the Symfony package.\n * See Symfony\\Component\\HttpFoundation\\Request (https:\/\/github.com\/symfony\/symfony)\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
        "line": 10,
        "char": 5
    },
    {
        "type": "class",
        "name": "Request",
        "abstract": 0,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "RequestInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                "line": 11,
                "char": 1
            }
        ],
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "property",
                    "name": "attributes",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                    "line": 13,
                    "char": 10
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "property",
                    "name": "request",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                    "line": 14,
                    "char": 10
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "property",
                    "name": "query",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                    "line": 15,
                    "char": 10
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "property",
                    "name": "server",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                    "line": 16,
                    "char": 10
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "property",
                    "name": "files",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                    "line": 17,
                    "char": 10
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "property",
                    "name": "cookies",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                    "line": 18,
                    "char": 10
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "property",
                    "name": "headers",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                    "line": 19,
                    "char": 10
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "property",
                    "name": "content",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                    "line": 34,
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
                            "name": "query",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 35,
                                "char": 49
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 35,
                            "char": 49
                        },
                        {
                            "type": "parameter",
                            "name": "request",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 35,
                                "char": 69
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 35,
                            "char": 69
                        },
                        {
                            "type": "parameter",
                            "name": "attributes",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 35,
                                "char": 92
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 35,
                            "char": 92
                        },
                        {
                            "type": "parameter",
                            "name": "cookies",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 35,
                                "char": 112
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 35,
                            "char": 112
                        },
                        {
                            "type": "parameter",
                            "name": "files",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 35,
                                "char": 130
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 35,
                            "char": 130
                        },
                        {
                            "type": "parameter",
                            "name": "server",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 35,
                                "char": 149
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 35,
                            "char": 149
                        },
                        {
                            "type": "parameter",
                            "name": "content",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 35,
                                "char": 165
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 35,
                            "char": 165
                        },
                        {
                            "type": "parameter",
                            "name": "headers",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 35,
                                "char": 187
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 35,
                            "char": 187
                        }
                    ],
                    "statements": [
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 37,
                                    "char": 14
                                },
                                "name": "initialize",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "query",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 37,
                                            "char": 31
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 37,
                                        "char": 31
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "request",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 37,
                                            "char": 40
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 37,
                                        "char": 40
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "attributes",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 37,
                                            "char": 52
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 37,
                                        "char": 52
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "cookies",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 37,
                                            "char": 61
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 37,
                                        "char": 61
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "files",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 37,
                                            "char": 68
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 37,
                                        "char": 68
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "server",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 37,
                                            "char": 76
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 37,
                                        "char": 76
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "content",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 37,
                                            "char": 85
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 37,
                                        "char": 85
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "headers",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 37,
                                            "char": 94
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 37,
                                        "char": 94
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 37,
                                "char": 95
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 38,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Constructor.\n     *\n     * @param array  $query      - The GET parameters\n     * @param array  $request    - The POST parameters\n     * @param array  $attributes - The request attributes (parameters parsed from the PATH_INFO, ...)\n     * @param array  $cookies    - The COOKIE parameters\n     * @param array  $files      - The FILES parameters\n     * @param array  $server     - The SERVER parameters\n     * @param string $content    - The raw body data\n     * @param array  $headers    - The headers\n     *\n     * @api\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                    "line": 35,
                    "last-line": 55,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "initialize",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "query",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 56,
                                "char": 48
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 56,
                            "char": 48
                        },
                        {
                            "type": "parameter",
                            "name": "request",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 56,
                                "char": 68
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 56,
                            "char": 68
                        },
                        {
                            "type": "parameter",
                            "name": "attributes",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 56,
                                "char": 91
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 56,
                            "char": 91
                        },
                        {
                            "type": "parameter",
                            "name": "cookies",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 56,
                                "char": 111
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 56,
                            "char": 111
                        },
                        {
                            "type": "parameter",
                            "name": "files",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 56,
                                "char": 129
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 56,
                            "char": 129
                        },
                        {
                            "type": "parameter",
                            "name": "server",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 56,
                                "char": 148
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 56,
                            "char": 148
                        },
                        {
                            "type": "parameter",
                            "name": "content",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 56,
                                "char": 164
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 56,
                            "char": 164
                        },
                        {
                            "type": "parameter",
                            "name": "headers",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 56,
                                "char": 186
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 56,
                            "char": 186
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
                                    "property": "request",
                                    "expr": {
                                        "type": "variable",
                                        "value": "request",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 58,
                                        "char": 36
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 58,
                                    "char": 36
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 59,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "query",
                                    "expr": {
                                        "type": "variable",
                                        "value": "query",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 59,
                                        "char": 32
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 59,
                                    "char": 32
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 60,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "attributes",
                                    "expr": {
                                        "type": "variable",
                                        "value": "attributes",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 60,
                                        "char": 42
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 60,
                                    "char": 42
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 61,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "cookies",
                                    "expr": {
                                        "type": "variable",
                                        "value": "cookies",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 61,
                                        "char": 36
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 61,
                                    "char": 36
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 62,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "files",
                                    "expr": {
                                        "type": "variable",
                                        "value": "files",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 62,
                                        "char": 32
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 62,
                                    "char": 32
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 63,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "server",
                                    "expr": {
                                        "type": "variable",
                                        "value": "server",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 63,
                                        "char": 34
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 63,
                                    "char": 34
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 64,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "content",
                                    "expr": {
                                        "type": "variable",
                                        "value": "content",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 64,
                                        "char": 36
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 64,
                                    "char": 36
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 65,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "headers",
                                    "expr": {
                                        "type": "ternary",
                                        "left": {
                                            "type": "fcall",
                                            "name": "is_null",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "headers",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 65,
                                                        "char": 44
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 65,
                                                    "char": 44
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 65,
                                            "char": 46
                                        },
                                        "right": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 65,
                                                "char": 53
                                            },
                                            "name": "getHeadersFromServer",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 65,
                                                            "char": 80
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "server",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 65,
                                                            "char": 87
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 65,
                                                        "char": 87
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 65,
                                                    "char": 87
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 65,
                                            "char": 89
                                        },
                                        "extra": {
                                            "type": "variable",
                                            "value": "headers",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 65,
                                            "char": 98
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 65,
                                        "char": 98
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 65,
                                    "char": 98
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 66,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Sets the parameters for this request.\n     *\n     * This method also re-initializes all properties.\n     *\n     * @param array  $query      - The GET parameters\n     * @param array  $request    - The POST parameters\n     * @param array  $attributes - The request attributes (parameters parsed from the PATH_INFO, ...)\n     * @param array  $cookies    - The COOKIE parameters\n     * @param array  $files      - The FILES parameters\n     * @param array  $server     - The SERVER parameters\n     * @param string $content    - The raw body data\n     * @param array  $headers    - The headers\n     *\n     * @api\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                    "line": 56,
                    "last-line": 72,
                    "char": 19
                },
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
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 73,
                            "char": 31
                        },
                        {
                            "type": "parameter",
                            "name": "_default",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 73,
                                "char": 48
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 73,
                            "char": 48
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "ternary",
                                "left": {
                                    "type": "isset",
                                    "left": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 75,
                                                "char": 27
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "query",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 75,
                                                "char": 33
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 75,
                                            "char": 33
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "name",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 75,
                                            "char": 38
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 75,
                                        "char": 40
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 75,
                                    "char": 40
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 75,
                                            "char": 47
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "query",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 75,
                                            "char": 53
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 75,
                                        "char": 53
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "name",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 75,
                                        "char": 58
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 75,
                                    "char": 60
                                },
                                "extra": {
                                    "type": "variable",
                                    "value": "_default",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 75,
                                    "char": 70
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 75,
                                "char": 70
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 76,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param string $name\n     * @param mixed  $default\n     * @return mixed\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                    "line": 73,
                    "last-line": 82,
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
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 83,
                            "char": 33
                        },
                        {
                            "type": "parameter",
                            "name": "_default",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 83,
                                "char": 50
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 83,
                            "char": 50
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "ternary",
                                "left": {
                                    "type": "isset",
                                    "left": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 85,
                                                "char": 27
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "request",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 85,
                                                "char": 35
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 85,
                                            "char": 35
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "name",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 85,
                                            "char": 40
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 85,
                                        "char": 42
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 85,
                                    "char": 42
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 85,
                                            "char": 49
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "request",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 85,
                                            "char": 57
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 85,
                                        "char": 57
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "name",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 85,
                                        "char": 62
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 85,
                                    "char": 64
                                },
                                "extra": {
                                    "type": "variable",
                                    "value": "_default",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 85,
                                    "char": 74
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 85,
                                "char": 74
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 86,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param string $name\n     * @param mixed  $default\n     * @return mixed\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                    "line": 83,
                    "last-line": 92,
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
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 93,
                            "char": 32
                        },
                        {
                            "type": "parameter",
                            "name": "_default",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 93,
                                "char": 49
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 93,
                            "char": 49
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "ternary",
                                "left": {
                                    "type": "isset",
                                    "left": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 95,
                                                "char": 27
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "server",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 95,
                                                "char": 34
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 95,
                                            "char": 34
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "name",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 95,
                                            "char": 39
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 95,
                                        "char": 41
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 95,
                                    "char": 41
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 95,
                                            "char": 48
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "server",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 95,
                                            "char": 55
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 95,
                                        "char": 55
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "name",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 95,
                                        "char": 60
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 95,
                                    "char": 62
                                },
                                "extra": {
                                    "type": "variable",
                                    "value": "_default",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 95,
                                    "char": 72
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 95,
                                "char": 72
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 96,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param string $name\n     * @param mixed  $default\n     * @return mixed\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                    "line": 93,
                    "last-line": 102,
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
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 103,
                            "char": 33
                        },
                        {
                            "type": "parameter",
                            "name": "_default",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 103,
                                "char": 50
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 103,
                            "char": 50
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "headers",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 105,
                                    "char": 20
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 106,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "headers",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "array_change_key_case",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 106,
                                                        "char": 50
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "headers",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 106,
                                                        "char": 58
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 106,
                                                    "char": 58
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 106,
                                                "char": 58
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 106,
                                        "char": 59
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 106,
                                    "char": 59
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 107,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "name",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "strtolower",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "name",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 107,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 107,
                                                "char": 35
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 107,
                                        "char": 36
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 107,
                                    "char": 36
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 109,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "ternary",
                                "left": {
                                    "type": "isset",
                                    "left": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "headers",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 109,
                                            "char": 29
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "name",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 109,
                                            "char": 34
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 109,
                                        "char": 36
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 109,
                                    "char": 36
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "headers",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 109,
                                        "char": 45
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "name",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 109,
                                        "char": 50
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 109,
                                    "char": 52
                                },
                                "extra": {
                                    "type": "variable",
                                    "value": "_default",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 109,
                                    "char": 62
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 109,
                                "char": 62
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 110,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param string $name\n     * @param mixed  $default\n     * @return mixed\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                    "line": 103,
                    "last-line": 114,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getAllQueryParameters",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 117,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "query",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 117,
                                    "char": 27
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 117,
                                "char": 27
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 118,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @return array\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                    "line": 115,
                    "last-line": 127,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getContent",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "asResource",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "bool",
                                "value": "false",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 128,
                                "char": 50
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 128,
                            "char": 50
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "or",
                                "left": {
                                    "type": "identical",
                                    "left": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 130,
                                        "char": 20
                                    },
                                    "right": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 130,
                                            "char": 27
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "content",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 130,
                                            "char": 37
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 130,
                                        "char": 37
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 130,
                                    "char": 37
                                },
                                "right": {
                                    "type": "list",
                                    "left": {
                                        "type": "and",
                                        "left": {
                                            "type": "equals",
                                            "left": {
                                                "type": "bool",
                                                "value": "true",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 130,
                                                "char": 46
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "asResource",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 130,
                                                "char": 60
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 130,
                                            "char": 60
                                        },
                                        "right": {
                                            "type": "not-identical",
                                            "left": {
                                                "type": "null",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 130,
                                                "char": 69
                                            },
                                            "right": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 130,
                                                    "char": 76
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "content",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 130,
                                                    "char": 84
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 130,
                                                "char": 84
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 130,
                                            "char": 84
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 130,
                                        "char": 84
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 130,
                                    "char": 86
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 130,
                                "char": 86
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "LogicException",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "getContent() can only be called once when using the resource return type.",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 131,
                                                    "char": 113
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 131,
                                                "char": 113
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 131,
                                        "char": 114
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 132,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 134,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "bool",
                                    "value": "true",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 134,
                                    "char": 18
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "asResource",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 134,
                                    "char": 31
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 134,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "content",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 135,
                                                "char": 38
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 135,
                                            "char": 38
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 137,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "fopen",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "php:\/\/input",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 137,
                                                    "char": 39
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 137,
                                                "char": 39
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "rb",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 137,
                                                    "char": 45
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 137,
                                                "char": 45
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 137,
                                        "char": 46
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 138,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 140,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "null",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 140,
                                    "char": 18
                                },
                                "right": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 140,
                                        "char": 25
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "content",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 140,
                                        "char": 34
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 140,
                                    "char": 34
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 140,
                                "char": 34
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "content",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "file_get_contents",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "php:\/\/input",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 141,
                                                            "char": 64
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 141,
                                                        "char": 64
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 141,
                                                "char": 65
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 141,
                                            "char": 65
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 142,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 144,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 144,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "content",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 144,
                                    "char": 29
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 144,
                                "char": 29
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 145,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Returns the request body content.\n     *\n     * @param boolean $asResource - If true, a resource will be returned\n     * @return string|resource    - The request body content or a resource to read the body stream.\n     *\n     * @throws LogicException\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                    "line": 128,
                    "last-line": 150,
                    "char": 19
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "method",
                    "name": "getHeadersFromServer",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "server",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 151,
                            "char": 49
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "headers",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 153,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 153,
                                    "char": 25
                                },
                                {
                                    "variable": "key",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 153,
                                    "char": 30
                                },
                                {
                                    "variable": "value",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 153,
                                    "char": 37
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 154,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "server",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 154,
                                "char": 34
                            },
                            "key": "key",
                            "value": "value",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "equals",
                                        "left": {
                                            "type": "int",
                                            "value": "0",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 155,
                                            "char": 19
                                        },
                                        "right": {
                                            "type": "fcall",
                                            "name": "strpos",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "key",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 155,
                                                        "char": 31
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 155,
                                                    "char": 31
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "string",
                                                        "value": "HTTP_",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 155,
                                                        "char": 40
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 155,
                                                    "char": 40
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 155,
                                            "char": 42
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 155,
                                        "char": 42
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "array-index",
                                                    "operator": "assign",
                                                    "variable": "headers",
                                                    "index-expr": [
                                                        {
                                                            "type": "fcall",
                                                            "name": "substr",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "key",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                        "line": 156,
                                                                        "char": 39
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                    "line": 156,
                                                                    "char": 39
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "int",
                                                                        "value": "5",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                        "line": 156,
                                                                        "char": 42
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                    "line": 156,
                                                                    "char": 42
                                                                }
                                                            ],
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 156,
                                                            "char": 43
                                                        }
                                                    ],
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "value",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 156,
                                                        "char": 52
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 156,
                                                    "char": 52
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 157,
                                            "char": 13
                                        }
                                    ],
                                    "elseif_statements": [
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "in_array",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 159,
                                                            "char": 32
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 159,
                                                        "char": 32
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "array",
                                                            "left": [
                                                                {
                                                                    "value": {
                                                                        "type": "string",
                                                                        "value": "CONTENT_LENGTH",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                        "line": 159,
                                                                        "char": 51
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                    "line": 159,
                                                                    "char": 51
                                                                },
                                                                {
                                                                    "value": {
                                                                        "type": "string",
                                                                        "value": "CONTENT_MD5",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                        "line": 159,
                                                                        "char": 66
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                    "line": 159,
                                                                    "char": 66
                                                                },
                                                                {
                                                                    "value": {
                                                                        "type": "string",
                                                                        "value": "CONTENT_TYPE",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                        "line": 159,
                                                                        "char": 82
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                    "line": 159,
                                                                    "char": 82
                                                                }
                                                            ],
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 159,
                                                            "char": 83
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 159,
                                                        "char": 83
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 159,
                                                "char": 85
                                            },
                                            "statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "array-index",
                                                            "operator": "assign",
                                                            "variable": "headers",
                                                            "index-expr": [
                                                                {
                                                                    "type": "variable",
                                                                    "value": "key",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                    "line": 160,
                                                                    "char": 32
                                                                }
                                                            ],
                                                            "expr": {
                                                                "type": "variable",
                                                                "value": "value",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 160,
                                                                "char": 41
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 160,
                                                            "char": 41
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 161,
                                                    "char": 13
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 162,
                                            "char": 9
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 162,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 164,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "isset",
                                "left": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "server",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 164,
                                        "char": 24
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "PHP_AUTH_USER",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 164,
                                        "char": 40
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 164,
                                    "char": 42
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 164,
                                "char": 42
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "headers",
                                            "index-expr": [
                                                {
                                                    "type": "string",
                                                    "value": "PHP_AUTH_USER",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 165,
                                                    "char": 40
                                                }
                                            ],
                                            "expr": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "server",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 165,
                                                    "char": 50
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "PHP_AUTH_USER",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 165,
                                                    "char": 66
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 165,
                                                "char": 67
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 165,
                                            "char": 67
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 166,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "headers",
                                            "index-expr": [
                                                {
                                                    "type": "string",
                                                    "value": "PHP_AUTH_PW",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 166,
                                                    "char": 38
                                                }
                                            ],
                                            "expr": {
                                                "type": "ternary",
                                                "left": {
                                                    "type": "isset",
                                                    "left": {
                                                        "type": "array-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "server",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 166,
                                                            "char": 54
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "PHP_AUTH_PW",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 166,
                                                            "char": 68
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 166,
                                                        "char": 70
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 166,
                                                    "char": 70
                                                },
                                                "right": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "server",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 166,
                                                        "char": 78
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "PHP_AUTH_PW",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 166,
                                                        "char": 92
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 166,
                                                    "char": 94
                                                },
                                                "extra": {
                                                    "type": "string",
                                                    "value": "",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 166,
                                                    "char": 98
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 166,
                                                "char": 98
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 166,
                                            "char": 98
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 167,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "declare",
                                    "data-type": "variable",
                                    "variables": [
                                        {
                                            "variable": "authorizationHeader",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 180,
                                            "char": 36
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 181,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "isset",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "server",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 181,
                                                "char": 28
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "HTTP_AUTHORIZATION",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 181,
                                                "char": 49
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 181,
                                            "char": 51
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 181,
                                        "char": 51
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "authorizationHeader",
                                                    "expr": {
                                                        "type": "array-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "server",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 182,
                                                            "char": 49
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "HTTP_AUTHORIZATION",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 182,
                                                            "char": 70
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 182,
                                                        "char": 71
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 182,
                                                    "char": 71
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 183,
                                            "char": 13
                                        }
                                    ],
                                    "elseif_statements": [
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "isset",
                                                "left": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "server",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 183,
                                                        "char": 34
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "REDIRECT_HTTP_AUTHORIZATION",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 183,
                                                        "char": 64
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 183,
                                                    "char": 66
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 183,
                                                "char": 66
                                            },
                                            "statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "authorizationHeader",
                                                            "expr": {
                                                                "type": "array-access",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "server",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                    "line": 184,
                                                                    "char": 49
                                                                },
                                                                "right": {
                                                                    "type": "string",
                                                                    "value": "REDIRECT_HTTP_AUTHORIZATION",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                    "line": 184,
                                                                    "char": 79
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 184,
                                                                "char": 80
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 184,
                                                            "char": 80
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 185,
                                                    "char": 13
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 185,
                                            "char": 20
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
                                                            "value": "apache_request_headers",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 185,
                                                            "char": 62
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 185,
                                                        "char": 62
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 185,
                                                "char": 64
                                            },
                                            "statements": [
                                                {
                                                    "type": "declare",
                                                    "data-type": "variable",
                                                    "variables": [
                                                        {
                                                            "variable": "requestHeaders",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 186,
                                                            "char": 35
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 187,
                                                    "char": 19
                                                },
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "requestHeaders",
                                                            "expr": {
                                                                "type": "fcall",
                                                                "name": "call_user_func",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "string",
                                                                            "value": "apache_request_headers",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                            "line": 187,
                                                                            "char": 77
                                                                        },
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                        "line": 187,
                                                                        "char": 77
                                                                    }
                                                                ],
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 187,
                                                                "char": 78
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 187,
                                                            "char": 78
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 190,
                                                    "char": 19
                                                },
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "requestHeaders",
                                                            "expr": {
                                                                "type": "fcall",
                                                                "name": "array_combine",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "fcall",
                                                                            "name": "array_map",
                                                                            "call-type": 1,
                                                                            "parameters": [
                                                                                {
                                                                                    "parameter": {
                                                                                        "type": "string",
                                                                                        "value": "ucwords",
                                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                                        "line": 190,
                                                                                        "char": 71
                                                                                    },
                                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                                    "line": 190,
                                                                                    "char": 71
                                                                                },
                                                                                {
                                                                                    "parameter": {
                                                                                        "type": "fcall",
                                                                                        "name": "array_keys",
                                                                                        "call-type": 1,
                                                                                        "parameters": [
                                                                                            {
                                                                                                "parameter": {
                                                                                                    "type": "variable",
                                                                                                    "value": "requestHeaders",
                                                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                                                    "line": 190,
                                                                                                    "char": 98
                                                                                                },
                                                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                                                "line": 190,
                                                                                                "char": 98
                                                                                            }
                                                                                        ],
                                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                                        "line": 190,
                                                                                        "char": 99
                                                                                    },
                                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                                    "line": 190,
                                                                                    "char": 99
                                                                                }
                                                                            ],
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                            "line": 190,
                                                                            "char": 100
                                                                        },
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                        "line": 190,
                                                                        "char": 100
                                                                    },
                                                                    {
                                                                        "parameter": {
                                                                            "type": "fcall",
                                                                            "name": "array_values",
                                                                            "call-type": 1,
                                                                            "parameters": [
                                                                                {
                                                                                    "parameter": {
                                                                                        "type": "variable",
                                                                                        "value": "requestHeaders",
                                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                                        "line": 190,
                                                                                        "char": 129
                                                                                    },
                                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                                    "line": 190,
                                                                                    "char": 129
                                                                                }
                                                                            ],
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                            "line": 190,
                                                                            "char": 130
                                                                        },
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                        "line": 190,
                                                                        "char": 130
                                                                    }
                                                                ],
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 190,
                                                                "char": 131
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 190,
                                                            "char": 131
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 192,
                                                    "char": 18
                                                },
                                                {
                                                    "type": "if",
                                                    "expr": {
                                                        "type": "isset",
                                                        "left": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "requestHeaders",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 192,
                                                                "char": 40
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "Authorization",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 192,
                                                                "char": 56
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 192,
                                                            "char": 58
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 192,
                                                        "char": 58
                                                    },
                                                    "statements": [
                                                        {
                                                            "type": "let",
                                                            "assignments": [
                                                                {
                                                                    "assign-type": "variable",
                                                                    "operator": "assign",
                                                                    "variable": "authorizationHeader",
                                                                    "expr": {
                                                                        "type": "fcall",
                                                                        "name": "trim",
                                                                        "call-type": 1,
                                                                        "parameters": [
                                                                            {
                                                                                "parameter": {
                                                                                    "type": "array-access",
                                                                                    "left": {
                                                                                        "type": "variable",
                                                                                        "value": "requestHeaders",
                                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                                        "line": 193,
                                                                                        "char": 66
                                                                                    },
                                                                                    "right": {
                                                                                        "type": "string",
                                                                                        "value": "Authorization",
                                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                                        "line": 193,
                                                                                        "char": 82
                                                                                    },
                                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                                    "line": 193,
                                                                                    "char": 83
                                                                                },
                                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                                "line": 193,
                                                                                "char": 83
                                                                            }
                                                                        ],
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                        "line": 193,
                                                                        "char": 84
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                    "line": 193,
                                                                    "char": 84
                                                                }
                                                            ],
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 194,
                                                            "char": 17
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 195,
                                                    "char": 13
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 197,
                                            "char": 14
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 197,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not-equals",
                                        "left": {
                                            "type": "null",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 197,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "authorizationHeader",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 197,
                                            "char": 44
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 197,
                                        "char": 44
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "array-index",
                                                    "operator": "assign",
                                                    "variable": "headers",
                                                    "index-expr": [
                                                        {
                                                            "type": "string",
                                                            "value": "AUTHORIZATION",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 198,
                                                            "char": 44
                                                        }
                                                    ],
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "authorizationHeader",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 198,
                                                        "char": 67
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 198,
                                                    "char": 67
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 200,
                                            "char": 18
                                        },
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "equals",
                                                "left": {
                                                    "type": "int",
                                                    "value": "0",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 200,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "fcall",
                                                    "name": "stripos",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "authorizationHeader",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 200,
                                                                "char": 52
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 200,
                                                            "char": 52
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "string",
                                                                "value": "basic",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 200,
                                                                "char": 61
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 200,
                                                            "char": 61
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 200,
                                                    "char": 63
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 200,
                                                "char": 63
                                            },
                                            "statements": [
                                                {
                                                    "type": "declare",
                                                    "data-type": "variable",
                                                    "variables": [
                                                        {
                                                            "variable": "exploded",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 201,
                                                            "char": 33
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 202,
                                                    "char": 23
                                                },
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "exploded",
                                                            "expr": {
                                                                "type": "fcall",
                                                                "name": "explode",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "string",
                                                                            "value": ":",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                            "line": 202,
                                                                            "char": 47
                                                                        },
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                        "line": 202,
                                                                        "char": 47
                                                                    },
                                                                    {
                                                                        "parameter": {
                                                                            "type": "fcall",
                                                                            "name": "base64_decode",
                                                                            "call-type": 1,
                                                                            "parameters": [
                                                                                {
                                                                                    "parameter": {
                                                                                        "type": "fcall",
                                                                                        "name": "substr",
                                                                                        "call-type": 1,
                                                                                        "parameters": [
                                                                                            {
                                                                                                "parameter": {
                                                                                                    "type": "variable",
                                                                                                    "value": "authorizationHeader",
                                                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                                                    "line": 202,
                                                                                                    "char": 89
                                                                                                },
                                                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                                                "line": 202,
                                                                                                "char": 89
                                                                                            },
                                                                                            {
                                                                                                "parameter": {
                                                                                                    "type": "int",
                                                                                                    "value": "6",
                                                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                                                    "line": 202,
                                                                                                    "char": 92
                                                                                                },
                                                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                                                "line": 202,
                                                                                                "char": 92
                                                                                            }
                                                                                        ],
                                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                                        "line": 202,
                                                                                        "char": 93
                                                                                    },
                                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                                    "line": 202,
                                                                                    "char": 93
                                                                                }
                                                                            ],
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                            "line": 202,
                                                                            "char": 94
                                                                        },
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                        "line": 202,
                                                                        "char": 94
                                                                    }
                                                                ],
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 202,
                                                                "char": 95
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 202,
                                                            "char": 95
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 203,
                                                    "char": 22
                                                },
                                                {
                                                    "type": "if",
                                                    "expr": {
                                                        "type": "equals",
                                                        "left": {
                                                            "type": "fcall",
                                                            "name": "count",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "exploded",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                        "line": 203,
                                                                        "char": 38
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                    "line": 203,
                                                                    "char": 38
                                                                }
                                                            ],
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 203,
                                                            "char": 41
                                                        },
                                                        "right": {
                                                            "type": "int",
                                                            "value": "2",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 203,
                                                            "char": 45
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 203,
                                                        "char": 45
                                                    },
                                                    "statements": [
                                                        {
                                                            "type": "let",
                                                            "assignments": [
                                                                {
                                                                    "assign-type": "array-index",
                                                                    "operator": "assign",
                                                                    "variable": "headers",
                                                                    "index-expr": [
                                                                        {
                                                                            "type": "string",
                                                                            "value": "PHP_AUTH_USER",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                            "line": 205,
                                                                            "char": 52
                                                                        }
                                                                    ],
                                                                    "expr": {
                                                                        "type": "array-access",
                                                                        "left": {
                                                                            "type": "variable",
                                                                            "value": "exploded",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                            "line": 205,
                                                                            "char": 64
                                                                        },
                                                                        "right": {
                                                                            "type": "int",
                                                                            "value": "0",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                            "line": 205,
                                                                            "char": 66
                                                                        },
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                        "line": 205,
                                                                        "char": 67
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                    "line": 205,
                                                                    "char": 67
                                                                }
                                                            ],
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 206,
                                                            "char": 27
                                                        },
                                                        {
                                                            "type": "let",
                                                            "assignments": [
                                                                {
                                                                    "assign-type": "array-index",
                                                                    "operator": "assign",
                                                                    "variable": "headers",
                                                                    "index-expr": [
                                                                        {
                                                                            "type": "string",
                                                                            "value": "PHP_AUTH_PW",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                            "line": 206,
                                                                            "char": 50
                                                                        }
                                                                    ],
                                                                    "expr": {
                                                                        "type": "array-access",
                                                                        "left": {
                                                                            "type": "variable",
                                                                            "value": "exploded",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                            "line": 206,
                                                                            "char": 62
                                                                        },
                                                                        "right": {
                                                                            "type": "int",
                                                                            "value": "1",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                            "line": 206,
                                                                            "char": 64
                                                                        },
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                        "line": 206,
                                                                        "char": 65
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                    "line": 206,
                                                                    "char": 65
                                                                }
                                                            ],
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 207,
                                                            "char": 21
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 208,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 209,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 210,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 213,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "isset",
                                "left": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "headers",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 213,
                                        "char": 25
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "PHP_AUTH_USER",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 213,
                                        "char": 41
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 213,
                                    "char": 43
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 213,
                                "char": 43
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "headers",
                                            "index-expr": [
                                                {
                                                    "type": "string",
                                                    "value": "AUTHORIZATION",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 214,
                                                    "char": 40
                                                }
                                            ],
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "string",
                                                    "value": "Basic ",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 214,
                                                    "char": 52
                                                },
                                                "right": {
                                                    "type": "fcall",
                                                    "name": "base64_encode",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "concat",
                                                                "left": {
                                                                    "type": "concat",
                                                                    "left": {
                                                                        "type": "array-access",
                                                                        "left": {
                                                                            "type": "variable",
                                                                            "value": "headers",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                            "line": 214,
                                                                            "char": 74
                                                                        },
                                                                        "right": {
                                                                            "type": "string",
                                                                            "value": "PHP_AUTH_USER",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                            "line": 214,
                                                                            "char": 90
                                                                        },
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                        "line": 214,
                                                                        "char": 91
                                                                    },
                                                                    "right": {
                                                                        "type": "string",
                                                                        "value": ":",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                        "line": 214,
                                                                        "char": 95
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                    "line": 214,
                                                                    "char": 95
                                                                },
                                                                "right": {
                                                                    "type": "array-access",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "headers",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                        "line": 214,
                                                                        "char": 103
                                                                    },
                                                                    "right": {
                                                                        "type": "string",
                                                                        "value": "PHP_AUTH_PW",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                        "line": 214,
                                                                        "char": 117
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                    "line": 214,
                                                                    "char": 118
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 214,
                                                                "char": 118
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 214,
                                                            "char": 118
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 214,
                                                    "char": 119
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 214,
                                                "char": 119
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 214,
                                            "char": 119
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 215,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 217,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "headers",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 217,
                                "char": 23
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 218,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param array $server\n     * @return array\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                    "line": 151,
                    "last-line": 226,
                    "char": 20
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "createFromGlobals",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "request",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 229,
                                    "char": 20
                                },
                                {
                                    "variable": "contentType",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 229,
                                    "char": 33
                                },
                                {
                                    "variable": "requestMethod",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 229,
                                    "char": 48
                                },
                                {
                                    "variable": "data",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 229,
                                    "char": 54
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 232,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "request",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "create_instance_params",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "fcall",
                                                    "name": "get_called_class",
                                                    "call-type": 1,
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 232,
                                                    "char": 64
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 232,
                                                "char": 64
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "_GET",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 232,
                                                                "char": 71
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 232,
                                                            "char": 71
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "_POST",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 232,
                                                                "char": 78
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 232,
                                                            "char": 78
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "empty-array",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 232,
                                                                "char": 82
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 232,
                                                            "char": 82
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "_COOKIE",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 232,
                                                                "char": 91
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 232,
                                                            "char": 91
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "_FILES",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 232,
                                                                "char": 99
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 232,
                                                            "char": 99
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "_SERVER",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 232,
                                                                "char": 108
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 232,
                                                            "char": 108
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 232,
                                                    "char": 109
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 232,
                                                "char": 109
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 232,
                                        "char": 110
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 232,
                                    "char": 110
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 234,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "contentType",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "request",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 234,
                                            "char": 35
                                        },
                                        "name": "server",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "CONTENT_TYPE",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 234,
                                                    "char": 57
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 234,
                                                "char": 57
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 234,
                                                    "char": 61
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 234,
                                                "char": 61
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 234,
                                        "char": 62
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 234,
                                    "char": 62
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 235,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "requestMethod",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "request",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 235,
                                            "char": 37
                                        },
                                        "name": "server",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "REQUEST_METHOD",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 235,
                                                    "char": 61
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 235,
                                                "char": 61
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "GET",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 235,
                                                    "char": 68
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 235,
                                                "char": 68
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 235,
                                        "char": 69
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 235,
                                    "char": 69
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 236,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "identical",
                                    "left": {
                                        "type": "int",
                                        "value": "0",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 236,
                                        "char": 16
                                    },
                                    "right": {
                                        "type": "fcall",
                                        "name": "strpos",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "contentType",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 236,
                                                    "char": 36
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 236,
                                                "char": 36
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "application\/x-www-form-urlencoded",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 236,
                                                    "char": 73
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 236,
                                                "char": 73
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 236,
                                        "char": 76
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 236,
                                    "char": 76
                                },
                                "right": {
                                    "type": "fcall",
                                    "name": "in_array",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "fcall",
                                                "name": "strtoupper",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "requestMethod",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 236,
                                                            "char": 111
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 236,
                                                        "char": 111
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 236,
                                                "char": 112
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 236,
                                            "char": 112
                                        },
                                        {
                                            "parameter": {
                                                "type": "array",
                                                "left": [
                                                    {
                                                        "value": {
                                                            "type": "string",
                                                            "value": "PUT",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 236,
                                                            "char": 120
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 236,
                                                        "char": 120
                                                    },
                                                    {
                                                        "value": {
                                                            "type": "string",
                                                            "value": "DELETE",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 236,
                                                            "char": 130
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 236,
                                                        "char": 130
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 236,
                                                "char": 131
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 236,
                                            "char": 131
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 236,
                                    "char": 133
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 236,
                                "char": 133
                            },
                            "statements": [
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "parse_str",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "request",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 237,
                                                        "char": 31
                                                    },
                                                    "name": "getContent",
                                                    "call-type": 1,
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 237,
                                                    "char": 44
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 237,
                                                "char": 44
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "data",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 237,
                                                    "char": 50
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 237,
                                                "char": 50
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 237,
                                        "char": 51
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 238,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "request",
                                            "property": "request",
                                            "expr": {
                                                "type": "variable",
                                                "value": "data",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 238,
                                                "char": 40
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 238,
                                            "char": 40
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 239,
                                    "char": 9
                                }
                            ],
                            "elseif_statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "and",
                                        "left": {
                                            "type": "identical",
                                            "left": {
                                                "type": "int",
                                                "value": "0",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 239,
                                                "char": 22
                                            },
                                            "right": {
                                                "type": "fcall",
                                                "name": "strpos",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "contentType",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 239,
                                                            "char": 42
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 239,
                                                        "char": 42
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "application\/json",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                            "line": 239,
                                                            "char": 62
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 239,
                                                        "char": 62
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                "line": 239,
                                                "char": 65
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 239,
                                            "char": 65
                                        },
                                        "right": {
                                            "type": "fcall",
                                            "name": "in_array",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "fcall",
                                                        "name": "strtoupper",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "requestMethod",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                    "line": 239,
                                                                    "char": 100
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 239,
                                                                "char": 100
                                                            }
                                                        ],
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 239,
                                                        "char": 101
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 239,
                                                    "char": 101
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "array",
                                                        "left": [
                                                            {
                                                                "value": {
                                                                    "type": "string",
                                                                    "value": "POST",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                    "line": 239,
                                                                    "char": 110
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 239,
                                                                "char": 110
                                                            },
                                                            {
                                                                "value": {
                                                                    "type": "string",
                                                                    "value": "PUT",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                    "line": 239,
                                                                    "char": 117
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 239,
                                                                "char": 117
                                                            },
                                                            {
                                                                "value": {
                                                                    "type": "string",
                                                                    "value": "DELETE",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                    "line": 239,
                                                                    "char": 127
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 239,
                                                                "char": 127
                                                            }
                                                        ],
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 239,
                                                        "char": 128
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 239,
                                                    "char": 128
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 239,
                                            "char": 130
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                        "line": 239,
                                        "char": 130
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "data",
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
                                                                        "value": "request",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                        "line": 240,
                                                                        "char": 44
                                                                    },
                                                                    "name": "getContent",
                                                                    "call-type": 1,
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                    "line": 240,
                                                                    "char": 57
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 240,
                                                                "char": 57
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "bool",
                                                                    "value": "true",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                    "line": 240,
                                                                    "char": 63
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                                "line": 240,
                                                                "char": 63
                                                            }
                                                        ],
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 240,
                                                        "char": 64
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 240,
                                                    "char": 64
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 241,
                                            "char": 15
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "object-property",
                                                    "operator": "assign",
                                                    "variable": "request",
                                                    "property": "request",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "data",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                        "line": 241,
                                                        "char": 40
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                                    "line": 241,
                                                    "char": 40
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                            "line": 242,
                                            "char": 9
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                    "line": 244,
                                    "char": 14
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 244,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "request",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                                "line": 244,
                                "char": 23
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                            "line": 245,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Creates a new request with values from PHP's super globals.\n     *\n     * @return Request - A new request\n     *\n     * @api\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
                    "line": 227,
                    "last-line": 246,
                    "char": 26
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
            "line": 10,
            "char": 5
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/request.zep",
        "line": 10,
        "char": 5
    }
]