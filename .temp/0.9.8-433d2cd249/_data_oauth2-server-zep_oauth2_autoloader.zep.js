[
    {
        "type": "comment",
        "value": "**\n * Autoloads OAuth2 classes\n *\n * @author    Brent Shaffer <bshafs at gmail dot com>\n * @license   MIT License\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
        "line": 8,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2",
        "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
        "line": 10,
        "char": 5
    },
    {
        "type": "class",
        "name": "Autoloader",
        "abstract": 0,
        "final": 0,
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "dir",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                    "line": 18,
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
                            "name": "dir",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                "line": 19,
                                "char": 51
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                            "line": 19,
                            "char": 51
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "dir",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                        "line": 21,
                                        "char": 24
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                    "line": 21,
                                    "char": 24
                                },
                                "right": {
                                    "type": "string",
                                    "value": "null",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                    "line": 21,
                                    "char": 33
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                "line": 21,
                                "char": 33
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "dir",
                                            "expr": {
                                                "type": "string",
                                                "value": ".\/",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                "line": 22,
                                                "char": 33
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                            "line": 22,
                                            "char": 33
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                    "line": 23,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "dir",
                                            "expr": {
                                                "type": "variable",
                                                "value": "dir",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                "line": 24,
                                                "char": 32
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                            "line": 24,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                    "line": 25,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                            "line": 26,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Constructor\n     *\n     * @param string dir\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                    "line": 19,
                    "last-line": 32,
                    "char": 19
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "register",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "dir",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                "line": 33,
                                "char": 55
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                            "line": 33,
                            "char": 55
                        }
                    ],
                    "statements": [
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "ini_set",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "unserialize_callback_func",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                            "line": 35,
                                            "char": 44
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                        "line": 35,
                                        "char": 44
                                    },
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "spl_autoload_call",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                            "line": 35,
                                            "char": 65
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                        "line": 35,
                                        "char": 65
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                "line": 35,
                                "char": 66
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                            "line": 36,
                            "char": 29
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "spl_autoload_register",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "value": {
                                                        "type": "new",
                                                        "class": "self",
                                                        "dynamic": 0,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "dir",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                                    "line": 36,
                                                                    "char": 44
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                                "line": 36,
                                                                "char": 44
                                                            }
                                                        ],
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                        "line": 36,
                                                        "char": 45
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                    "line": 36,
                                                    "char": 45
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "autoload",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                        "line": 36,
                                                        "char": 57
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                    "line": 36,
                                                    "char": 57
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                            "line": 36,
                                            "char": 58
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                        "line": 36,
                                        "char": 58
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                "line": 36,
                                "char": 59
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                            "line": 37,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Registers OAuth2\\Autoloader as an SPL autoloader.\n     *\n     * @param string dir\n     *",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                        "line": 34,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                    "line": 33,
                    "last-line": 44,
                    "char": 26
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "autoload",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "className",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                            "line": 45,
                            "char": 47
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "file",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                    "line": 47,
                                    "char": 17
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                            "line": 49,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-identical",
                                "left": {
                                    "type": "int",
                                    "value": "0",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                    "line": 49,
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
                                                "value": "className",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                "line": 49,
                                                "char": 34
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                            "line": 49,
                                            "char": 34
                                        },
                                        {
                                            "parameter": {
                                                "type": "string",
                                                "value": "OAuth2",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                "line": 49,
                                                "char": 44
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                            "line": 49,
                                            "char": 44
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                    "line": 49,
                                    "char": 46
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                "line": 49,
                                "char": 46
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                        "line": 50,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                    "line": 51,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                            "line": 53,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "file",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "concat",
                                            "left": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                        "line": 53,
                                                        "char": 25
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "dir",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                        "line": 53,
                                                        "char": 30
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                    "line": 53,
                                                    "char": 30
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "\/",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                    "line": 53,
                                                    "char": 36
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                "line": 53,
                                                "char": 36
                                            },
                                            "right": {
                                                "type": "fcall",
                                                "name": "str_replace",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "\\\\",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                            "line": 53,
                                                            "char": 54
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                        "line": 53,
                                                        "char": 54
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "\/",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                            "line": 53,
                                                            "char": 59
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                        "line": 53,
                                                        "char": 59
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "className",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                            "line": 53,
                                                            "char": 70
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                        "line": 53,
                                                        "char": 70
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                                "line": 53,
                                                "char": 72
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                            "line": 53,
                                            "char": 72
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": ".php",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                            "line": 53,
                                            "char": 80
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                        "line": 53,
                                        "char": 80
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                    "line": 53,
                                    "char": 80
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                            "line": 54,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "file_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "file",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                            "line": 54,
                                            "char": 28
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                        "line": 54,
                                        "char": 28
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                "line": 54,
                                "char": 30
                            },
                            "statements": [
                                {
                                    "type": "require",
                                    "expr": {
                                        "type": "variable",
                                        "value": "file",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                        "line": 55,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                    "line": 56,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "true",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                        "line": 56,
                                        "char": 24
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                    "line": 57,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                            "line": 59,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "false",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                "line": 59,
                                "char": 21
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                            "line": 60,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Handles autoloading of classes.\n     *\n     * @param string className A class name.\n     * @return boolean Returns true if the class has been loaded\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                                "line": 46,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                        "line": 46,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
                    "line": 45,
                    "last-line": 61,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
            "line": 10,
            "char": 5
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/autoloader.zep",
        "line": 10,
        "char": 5
    }
]