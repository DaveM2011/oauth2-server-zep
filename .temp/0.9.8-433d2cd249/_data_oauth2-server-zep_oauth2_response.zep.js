[
    {
        "type": "namespace",
        "name": "OAuth2",
        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
        "line": 3,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "InvalidArgumentException",
                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                "line": 3,
                "char": 29
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
        "line": 13,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Class to handle OAuth2 Responses in a graceful way.  Use this interface\n * to output the proper OAuth2 responses.\n *\n * @see OAuth2\\ResponseInterface\n *\n * This class borrows heavily from the Symfony2 Framework and is part of the symfony package\n * @see Symfony\\Component\\HttpFoundation\\Request (https:\/\/github.com\/symfony\/symfony)\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
        "line": 14,
        "char": 5
    },
    {
        "type": "class",
        "name": "Response",
        "abstract": 0,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "ResponseInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                "line": 15,
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
                    "name": "version",
                    "docblock": "**\n     * @var string\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 23,
                    "char": 6
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "statusCode",
                    "default": {
                        "type": "int",
                        "value": "200",
                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                        "line": 24,
                        "char": 31
                    },
                    "docblock": "**\n     * @var int\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 28,
                    "char": 6
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "statusText",
                    "docblock": "**\n     * @var string\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 33,
                    "char": 6
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "parameters",
                    "default": {
                        "type": "empty-array",
                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                        "line": 34,
                        "char": 30
                    },
                    "docblock": "**\n     * @var array\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 38,
                    "char": 6
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "httpHeaders",
                    "default": {
                        "type": "empty-array",
                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                        "line": 39,
                        "char": 31
                    },
                    "docblock": "**\n     * @var array\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 43,
                    "char": 6
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "property",
                    "name": "statusTexts",
                    "default": {
                        "type": "array",
                        "left": [
                            {
                                "key": {
                                    "type": "int",
                                    "value": "100",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 45,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Continue",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 45,
                                    "char": 24
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 45,
                                "char": 24
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "101",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 46,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Switching Protocols",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 46,
                                    "char": 35
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 46,
                                "char": 35
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "200",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 47,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "OK",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 47,
                                    "char": 18
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 47,
                                "char": 18
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "201",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 48,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Created",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 48,
                                    "char": 23
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 48,
                                "char": 23
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "202",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 49,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Accepted",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 49,
                                    "char": 24
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 49,
                                "char": 24
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "203",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 50,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Non-Authoritative Information",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 50,
                                    "char": 45
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 50,
                                "char": 45
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "204",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 51,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "No Content",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 51,
                                    "char": 26
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 51,
                                "char": 26
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "205",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 52,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Reset Content",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 52,
                                    "char": 29
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 52,
                                "char": 29
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "206",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 53,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Partial Content",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 53,
                                    "char": 31
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 53,
                                "char": 31
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "300",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 54,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Multiple Choices",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 54,
                                    "char": 32
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 54,
                                "char": 32
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "301",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 55,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Moved Permanently",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 55,
                                    "char": 33
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 55,
                                "char": 33
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "302",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 56,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Found",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 56,
                                    "char": 21
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 56,
                                "char": 21
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "303",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 57,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "See Other",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 57,
                                    "char": 25
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 57,
                                "char": 25
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "304",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 58,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Not Modified",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 58,
                                    "char": 28
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 58,
                                "char": 28
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "305",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 59,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Use Proxy",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 59,
                                    "char": 25
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 59,
                                "char": 25
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "307",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 60,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Temporary Redirect",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 60,
                                    "char": 34
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 60,
                                "char": 34
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "400",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 61,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Bad Request",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 61,
                                    "char": 27
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 61,
                                "char": 27
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "401",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 62,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Unauthorized",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 62,
                                    "char": 28
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 62,
                                "char": 28
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "402",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 63,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Payment Required",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 63,
                                    "char": 32
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 63,
                                "char": 32
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "403",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 64,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Forbidden",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 64,
                                    "char": 25
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 64,
                                "char": 25
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "404",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 65,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Not Found",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 65,
                                    "char": 25
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 65,
                                "char": 25
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "405",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 66,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Method Not Allowed",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 66,
                                    "char": 34
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 66,
                                "char": 34
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "406",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 67,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Not Acceptable",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 67,
                                    "char": 30
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 67,
                                "char": 30
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "407",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 68,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Proxy Authentication Required",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 68,
                                    "char": 45
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 68,
                                "char": 45
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "408",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 69,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Request Timeout",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 69,
                                    "char": 31
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 69,
                                "char": 31
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "409",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 70,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Conflict",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 70,
                                    "char": 24
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 70,
                                "char": 24
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "410",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 71,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Gone",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 71,
                                    "char": 20
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 71,
                                "char": 20
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "411",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 72,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Length Required",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 72,
                                    "char": 31
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 72,
                                "char": 31
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "412",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 73,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Precondition Failed",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 73,
                                    "char": 35
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 73,
                                "char": 35
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "413",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 74,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Request Entity Too Large",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 74,
                                    "char": 40
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 74,
                                "char": 40
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "414",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 75,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Request-URI Too Long",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 75,
                                    "char": 36
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 75,
                                "char": 36
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "415",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 76,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Unsupported Media Type",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 76,
                                    "char": 38
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 76,
                                "char": 38
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "416",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 77,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Requested Range Not Satisfiable",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 77,
                                    "char": 47
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 77,
                                "char": 47
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "417",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 78,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Expectation Failed",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 78,
                                    "char": 34
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 78,
                                "char": 34
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "418",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 79,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "I\\\"m a teapot",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 79,
                                    "char": 29
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 79,
                                "char": 29
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "500",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 80,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Internal Server Error",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 80,
                                    "char": 37
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 80,
                                "char": 37
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "501",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 81,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Not Implemented",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 81,
                                    "char": 31
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 81,
                                "char": 31
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "502",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 82,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Bad Gateway",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 82,
                                    "char": 27
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 82,
                                "char": 27
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "503",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 83,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Service Unavailable",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 83,
                                    "char": 35
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 83,
                                "char": 35
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "504",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 84,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "Gateway Timeout",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 84,
                                    "char": 31
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 84,
                                "char": 31
                            },
                            {
                                "key": {
                                    "type": "int",
                                    "value": "505",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 85,
                                    "char": 12
                                },
                                "value": {
                                    "type": "string",
                                    "value": "HTTP Version Not Supported",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 86,
                                    "char": 5
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 86,
                                "char": 5
                            }
                        ],
                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                        "line": 86,
                        "char": 6
                    },
                    "docblock": "**\n     * @var array\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 92,
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
                            "name": "parameters",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 93,
                                "char": 54
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 93,
                            "char": 54
                        },
                        {
                            "type": "parameter",
                            "name": "statusCode",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "default": {
                                "type": "int",
                                "value": "200",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 93,
                                "char": 76
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 93,
                            "char": 76
                        },
                        {
                            "type": "parameter",
                            "name": "headers",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 93,
                                "char": 96
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 93,
                            "char": 96
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
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 95,
                                    "char": 14
                                },
                                "name": "setParameters",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "parameters",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 95,
                                            "char": 39
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 95,
                                        "char": 39
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 95,
                                "char": 40
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 96,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 96,
                                    "char": 14
                                },
                                "name": "setStatusCode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "statusCode",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 96,
                                            "char": 39
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 96,
                                        "char": 39
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 96,
                                "char": 40
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 97,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 97,
                                    "char": 14
                                },
                                "name": "setHttpHeaders",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "headers",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 97,
                                            "char": 37
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 97,
                                        "char": 37
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 97,
                                "char": 38
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 98,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "version",
                                    "expr": {
                                        "type": "string",
                                        "value": "1.1",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 98,
                                        "char": 34
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 98,
                                    "char": 34
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 99,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param array $parameters\n     * @param int   $statusCode\n     * @param array $headers\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 93,
                    "last-line": 105,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__toString",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "headers",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 108,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 108,
                                    "char": 25
                                },
                                {
                                    "variable": "name",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 108,
                                    "char": 31
                                },
                                {
                                    "variable": "value",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 108,
                                    "char": 38
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 109,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 109,
                                    "char": 33
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "httpHeaders",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 109,
                                    "char": 46
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 109,
                                "char": 46
                            },
                            "key": "name",
                            "value": "value",
                            "reverse": 0,
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
                                                    "value": "name",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 110,
                                                    "char": 29
                                                }
                                            ],
                                            "expr": {
                                                "type": "cast",
                                                "left": "array",
                                                "right": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 110,
                                                    "char": 46
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 110,
                                                "char": 46
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 110,
                                            "char": 46
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 111,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 113,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "concat",
                                "left": {
                                    "type": "concat",
                                    "left": {
                                        "type": "concat",
                                        "left": {
                                            "type": "concat",
                                            "left": {
                                                "type": "fcall",
                                                "name": "sprintf",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "HTTP\/%s %s %s",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 114,
                                                            "char": 36
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 114,
                                                        "char": 36
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "property-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "this",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                "line": 114,
                                                                "char": 43
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "version",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                "line": 114,
                                                                "char": 51
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 114,
                                                            "char": 51
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 114,
                                                        "char": 51
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "property-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "this",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                "line": 114,
                                                                "char": 58
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "statusCode",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                "line": 114,
                                                                "char": 69
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 114,
                                                            "char": 69
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 114,
                                                        "char": 69
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "property-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "this",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                "line": 114,
                                                                "char": 76
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "statusText",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                "line": 114,
                                                                "char": 87
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 114,
                                                            "char": 87
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 114,
                                                        "char": 87
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 114,
                                                "char": 88
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "\\r\\n",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 114,
                                                "char": 95
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 114,
                                            "char": 95
                                        },
                                        "right": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 115,
                                                "char": 18
                                            },
                                            "name": "getHttpHeadersAsString",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "headers",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 115,
                                                        "char": 49
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 115,
                                                    "char": 49
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 115,
                                            "char": 50
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 115,
                                        "char": 50
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "\\r\\n",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 115,
                                        "char": 57
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 115,
                                    "char": 57
                                },
                                "right": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 116,
                                        "char": 18
                                    },
                                    "name": "getResponseBody",
                                    "call-type": 1,
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 116,
                                    "char": 36
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 116,
                                "char": 36
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 117,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Converts the response object to string containing all headers and the response content.\n     *\n     * @return string The response with headers and content\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 106,
                    "last-line": 126,
                    "char": 19
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "buildHeader",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 127,
                            "char": 40
                        },
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 127,
                            "char": 47
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "sprintf",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "%s: %s\\n",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 129,
                                            "char": 34
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 129,
                                        "char": 34
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "name",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 129,
                                            "char": 40
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 129,
                                        "char": 40
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 129,
                                            "char": 47
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 129,
                                        "char": 47
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 129,
                                "char": 48
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 130,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Returns the build header line.\n     *\n     * @param string $name  The header name\n     * @param string $value The header value\n     *\n     * @return string The built header line\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 127,
                    "last-line": 134,
                    "char": 22
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getStatusCode",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 137,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "statusCode",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 137,
                                    "char": 32
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 137,
                                "char": 32
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 138,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @return int\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 135,
                    "last-line": 144,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setStatusCode",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "statusCode",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 145,
                            "char": 49
                        },
                        {
                            "type": "parameter",
                            "name": "text",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 145,
                                "char": 62
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 145,
                            "char": 62
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
                                    "property": "statusCode",
                                    "expr": {
                                        "type": "variable",
                                        "value": "statusCode",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 147,
                                        "char": 42
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 147,
                                    "char": 42
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 148,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 148,
                                    "char": 17
                                },
                                "name": "isInvalid",
                                "call-type": 1,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 148,
                                "char": 30
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 151,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "statusText",
                                    "expr": {
                                        "type": "ternary",
                                        "left": {
                                            "type": "equals",
                                            "left": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 151,
                                                "char": 39
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "text",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 151,
                                                "char": 46
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 151,
                                            "char": 46
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 151,
                                            "char": 51
                                        },
                                        "extra": {
                                            "type": "list",
                                            "left": {
                                                "type": "ternary",
                                                "left": {
                                                    "type": "identical",
                                                    "left": {
                                                        "type": "null",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 151,
                                                        "char": 61
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "text",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 151,
                                                        "char": 68
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 151,
                                                    "char": 68
                                                },
                                                "right": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "static-property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "self",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 151,
                                                            "char": 87
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "statusTexts",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 151,
                                                            "char": 87
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 151,
                                                        "char": 87
                                                    },
                                                    "right": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 151,
                                                            "char": 93
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "statusCode",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 151,
                                                            "char": 104
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 151,
                                                        "char": 104
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 151,
                                                    "char": 106
                                                },
                                                "extra": {
                                                    "type": "variable",
                                                    "value": "text",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 151,
                                                    "char": 112
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 151,
                                                "char": 112
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 151,
                                            "char": 113
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 151,
                                        "char": 113
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 151,
                                    "char": 113
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 152,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param int $statusCode\n     * @param string $text\n     * @throws InvalidArgumentException\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 145,
                    "last-line": 156,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getStatusText",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 159,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "statusText",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 159,
                                    "char": 32
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 159,
                                "char": 32
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 160,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @return string\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 157,
                    "last-line": 164,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getParameters",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 167,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "parameters",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 167,
                                    "char": 32
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 167,
                                "char": 32
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 168,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @return array\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 165,
                    "last-line": 172,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setParameters",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "parameters",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 173,
                            "char": 51
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
                                    "property": "parameters",
                                    "expr": {
                                        "type": "variable",
                                        "value": "parameters",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 175,
                                        "char": 42
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 175,
                                    "char": 42
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 176,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param array $parameters\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 173,
                    "last-line": 180,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "addParameters",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "parameters",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 181,
                            "char": 51
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
                                    "property": "parameters",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "array_merge",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 183,
                                                        "char": 49
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "parameters",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 183,
                                                        "char": 60
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 183,
                                                    "char": 60
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 183,
                                                "char": 60
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "parameters",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 183,
                                                    "char": 72
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 183,
                                                "char": 72
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 183,
                                        "char": 73
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 183,
                                    "char": 73
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 184,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param array $parameters\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 181,
                    "last-line": 190,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getParameter",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 191,
                            "char": 38
                        },
                        {
                            "type": "parameter",
                            "name": "_default",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 191,
                                "char": 55
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 191,
                            "char": 55
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
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 193,
                                                "char": 27
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "parameters",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 193,
                                                "char": 38
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 193,
                                            "char": 38
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "name",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 193,
                                            "char": 43
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 193,
                                        "char": 45
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 193,
                                    "char": 45
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 193,
                                            "char": 52
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "parameters",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 193,
                                            "char": 63
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 193,
                                        "char": 63
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "name",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 193,
                                        "char": 68
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 193,
                                    "char": 70
                                },
                                "extra": {
                                    "type": "variable",
                                    "value": "_default",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 193,
                                    "char": 80
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 193,
                                "char": 80
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 194,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param string $name\n     * @param mixed  $default\n     * @return mixed\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 191,
                    "last-line": 199,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setParameter",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 200,
                            "char": 38
                        },
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 200,
                            "char": 45
                        }
                    ],
                    "statements": [
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property-array-index",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "parameters",
                                    "index-expr": [
                                        {
                                            "type": "variable",
                                            "value": "name",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 202,
                                            "char": 34
                                        }
                                    ],
                                    "expr": {
                                        "type": "variable",
                                        "value": "value",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 202,
                                        "char": 43
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 202,
                                    "char": 43
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 203,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param string $name\n     * @param mixed  $value\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 200,
                    "last-line": 207,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setHttpHeaders",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "httpHeaders",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 208,
                            "char": 53
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
                                    "property": "httpHeaders",
                                    "expr": {
                                        "type": "variable",
                                        "value": "httpHeaders",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 210,
                                        "char": 44
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 210,
                                    "char": 44
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 211,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param array $httpHeaders\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 208,
                    "last-line": 216,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setHttpHeader",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 217,
                            "char": 39
                        },
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 217,
                            "char": 46
                        }
                    ],
                    "statements": [
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property-array-index",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "httpHeaders",
                                    "index-expr": [
                                        {
                                            "type": "variable",
                                            "value": "name",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 219,
                                            "char": 35
                                        }
                                    ],
                                    "expr": {
                                        "type": "variable",
                                        "value": "value",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 219,
                                        "char": 44
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 219,
                                    "char": 44
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 220,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param string $name\n     * @param mixed $value\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 217,
                    "last-line": 224,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "addHttpHeaders",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "httpHeaders",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 225,
                            "char": 53
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
                                    "property": "httpHeaders",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "array_merge",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 227,
                                                        "char": 50
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "httpHeaders",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 227,
                                                        "char": 62
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 227,
                                                    "char": 62
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 227,
                                                "char": 62
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "httpHeaders",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 227,
                                                    "char": 75
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 227,
                                                "char": 75
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 227,
                                        "char": 76
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 227,
                                    "char": 76
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 228,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param array $httpHeaders\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 225,
                    "last-line": 232,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getHttpHeaders",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 235,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "httpHeaders",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 235,
                                    "char": 33
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 235,
                                "char": 33
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 236,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @return array\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 233,
                    "last-line": 242,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getHttpHeader",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 243,
                            "char": 39
                        },
                        {
                            "type": "parameter",
                            "name": "_default",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 243,
                                "char": 56
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 243,
                            "char": 56
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
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 245,
                                                "char": 27
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "httpHeaders",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 245,
                                                "char": 39
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 245,
                                            "char": 39
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "name",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 245,
                                            "char": 44
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 245,
                                        "char": 46
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 245,
                                    "char": 46
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 245,
                                            "char": 53
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "httpHeaders",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 245,
                                            "char": 65
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 245,
                                        "char": 65
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "name",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 245,
                                        "char": 70
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 245,
                                    "char": 72
                                },
                                "extra": {
                                    "type": "variable",
                                    "value": "_default",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 245,
                                    "char": 82
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 245,
                                "char": 82
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 246,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param string $name\n     * @param mixed  $default\n     * @return mixed\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 243,
                    "last-line": 252,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getResponseBody",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "format",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "string",
                                "value": "json",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 253,
                                "char": 52
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 253,
                            "char": 52
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "xml",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 255,
                                    "char": 16
                                },
                                {
                                    "variable": "key",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 255,
                                    "char": 21
                                },
                                {
                                    "variable": "param",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 255,
                                    "char": 28
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 256,
                            "char": 14
                        },
                        {
                            "type": "switch",
                            "expr": {
                                "type": "variable",
                                "value": "format",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 256,
                                "char": 23
                            },
                            "clauses": [
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "string",
                                        "value": "json",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 257,
                                        "char": 24
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "ternary",
                                                "left": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 258,
                                                        "char": 29
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "parameters",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 258,
                                                        "char": 41
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 258,
                                                    "char": 41
                                                },
                                                "right": {
                                                    "type": "fcall",
                                                    "name": "json_encode",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "property-access",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "this",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                    "line": 258,
                                                                    "char": 60
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "parameters",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                    "line": 258,
                                                                    "char": 71
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                "line": 258,
                                                                "char": 71
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 258,
                                                            "char": 71
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 258,
                                                    "char": 73
                                                },
                                                "extra": {
                                                    "type": "string",
                                                    "value": "",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 258,
                                                    "char": 77
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 258,
                                                "char": 77
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 259,
                                            "char": 16
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 259,
                                    "char": 16
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "string",
                                        "value": "xml",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 259,
                                        "char": 23
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "xml",
                                                    "expr": {
                                                        "type": "new",
                                                        "class": "\\SimpleXMLElement",
                                                        "dynamic": 0,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "string",
                                                                    "value": "<response\/>",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                    "line": 261,
                                                                    "char": 62
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                "line": 261,
                                                                "char": 62
                                                            }
                                                        ],
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 261,
                                                        "char": 63
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 261,
                                                    "char": 63
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 262,
                                            "char": 19
                                        },
                                        {
                                            "type": "for",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 262,
                                                    "char": 40
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "parameters",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 262,
                                                    "char": 52
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 262,
                                                "char": 52
                                            },
                                            "key": "key",
                                            "value": "param",
                                            "reverse": 0,
                                            "statements": [
                                                {
                                                    "type": "mcall",
                                                    "expr": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "xml",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 263,
                                                            "char": 25
                                                        },
                                                        "name": "addChild",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "key",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                    "line": 263,
                                                                    "char": 38
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                "line": 263,
                                                                "char": 38
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "param",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                    "line": 263,
                                                                    "char": 45
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                "line": 263,
                                                                "char": 45
                                                            }
                                                        ],
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 263,
                                                        "char": 46
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 264,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 265,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "xml",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 265,
                                                    "char": 28
                                                },
                                                "name": "asXML",
                                                "call-type": 1,
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 265,
                                                "char": 36
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 266,
                                            "char": 9
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 266,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 268,
                            "char": 13
                        },
                        {
                            "type": "throw",
                            "expr": {
                                "type": "new",
                                "class": "InvalidArgumentException",
                                "dynamic": 0,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "fcall",
                                            "name": "sprintf",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "string",
                                                        "value": "The format %s is not supported",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 268,
                                                        "char": 84
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 268,
                                                    "char": 84
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "format",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 268,
                                                        "char": 92
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 268,
                                                    "char": 92
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 268,
                                            "char": 93
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 268,
                                        "char": 93
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 268,
                                "char": 94
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 270,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param string $format\n     * @return mixed\n     * @throws InvalidArgumentException\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 253,
                    "last-line": 274,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "send",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "format",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "string",
                                "value": "json",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 275,
                                "char": 41
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 275,
                            "char": 41
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "headers_sent",
                                "call-type": 1,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 278,
                                "char": 27
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 280,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 282,
                            "char": 14
                        },
                        {
                            "type": "switch",
                            "expr": {
                                "type": "variable",
                                "value": "format",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 282,
                                "char": 23
                            },
                            "clauses": [
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "string",
                                        "value": "json",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 283,
                                        "char": 24
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 284,
                                                    "char": 22
                                                },
                                                "name": "setHttpHeader",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "Content-Type",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 284,
                                                            "char": 51
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 284,
                                                        "char": 51
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "application\/json",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 284,
                                                            "char": 71
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 284,
                                                        "char": 71
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 284,
                                                "char": 72
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 285,
                                            "char": 21
                                        },
                                        {
                                            "type": "break",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 286,
                                            "char": 16
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 286,
                                    "char": 16
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "string",
                                        "value": "xml",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 286,
                                        "char": 23
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 287,
                                                    "char": 22
                                                },
                                                "name": "setHttpHeader",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "Content-Type",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 287,
                                                            "char": 51
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 287,
                                                        "char": 51
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "text\/xml",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 287,
                                                            "char": 63
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 287,
                                                        "char": 63
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 287,
                                                "char": 64
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 288,
                                            "char": 21
                                        },
                                        {
                                            "type": "break",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 289,
                                            "char": 9
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 289,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 291,
                            "char": 14
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "header",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "fcall",
                                            "name": "sprintf",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "string",
                                                        "value": "HTTP\/%s %s %s",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 291,
                                                        "char": 39
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 291,
                                                    "char": 39
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 291,
                                                            "char": 46
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "version",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 291,
                                                            "char": 54
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 291,
                                                        "char": 54
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 291,
                                                    "char": 54
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 291,
                                                            "char": 61
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "statusCode",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 291,
                                                            "char": 72
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 291,
                                                        "char": 72
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 291,
                                                    "char": 72
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 291,
                                                            "char": 79
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "statusText",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 291,
                                                            "char": 90
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 291,
                                                        "char": 90
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 291,
                                                    "char": 90
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 291,
                                            "char": 91
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 291,
                                        "char": 91
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 291,
                                "char": 92
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 292,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "name",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 292,
                                    "char": 17
                                },
                                {
                                    "variable": "header",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 292,
                                    "char": 25
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 293,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 293,
                                    "char": 34
                                },
                                "name": "getHttpHeaders",
                                "call-type": 1,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 293,
                                "char": 52
                            },
                            "key": "name",
                            "value": "header",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "header",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "fcall",
                                                    "name": "sprintf",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "string",
                                                                "value": "%s: %s",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                "line": 294,
                                                                "char": 36
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 294,
                                                            "char": 36
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "name",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                "line": 294,
                                                                "char": 42
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 294,
                                                            "char": 42
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "header",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                "line": 294,
                                                                "char": 50
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 294,
                                                            "char": 50
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 294,
                                                    "char": 51
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 294,
                                                "char": 51
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 294,
                                        "char": 52
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 295,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 296,
                            "char": 12
                        },
                        {
                            "type": "echo",
                            "expressions": [
                                {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 296,
                                        "char": 19
                                    },
                                    "name": "getResponseBody",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "format",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 296,
                                                "char": 42
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 296,
                                            "char": 42
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 296,
                                    "char": 43
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 297,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param string $format\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 275,
                    "last-line": 306,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setError",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "statusCode",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 307,
                            "char": 44
                        },
                        {
                            "type": "parameter",
                            "name": "error",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 307,
                            "char": 51
                        },
                        {
                            "type": "parameter",
                            "name": "errorDescription",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 307,
                                "char": 76
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 307,
                            "char": 76
                        },
                        {
                            "type": "parameter",
                            "name": "errorUri",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 307,
                                "char": 101
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 307,
                            "char": 101
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "parameters",
                                    "expr": {
                                        "type": "array",
                                        "left": [
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "error",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 309,
                                                    "char": 34
                                                },
                                                "value": {
                                                    "type": "variable",
                                                    "value": "error",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 309,
                                                    "char": 41
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 309,
                                                "char": 41
                                            },
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "error_description",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 309,
                                                    "char": 62
                                                },
                                                "value": {
                                                    "type": "variable",
                                                    "value": "errorDescription",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 309,
                                                    "char": 80
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 309,
                                                "char": 80
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 309,
                                        "char": 81
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 309,
                                    "char": 81
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 311,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "is_null",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "errorUri",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 311,
                                                "char": 29
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 311,
                                            "char": 29
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 311,
                                    "char": 31
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 311,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "and",
                                        "left": {
                                            "type": "greater",
                                            "left": {
                                                "type": "fcall",
                                                "name": "strlen",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "errorUri",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 312,
                                                            "char": 31
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 312,
                                                        "char": 31
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 312,
                                                "char": 33
                                            },
                                            "right": {
                                                "type": "int",
                                                "value": "0",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 312,
                                                "char": 38
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 312,
                                            "char": 38
                                        },
                                        "right": {
                                            "type": "equals",
                                            "left": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "errorUri",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 312,
                                                    "char": 48
                                                },
                                                "right": {
                                                    "type": "int",
                                                    "value": "0",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 312,
                                                    "char": 50
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 312,
                                                "char": 53
                                            },
                                            "right": {
                                                "type": "char",
                                                "value": "#",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 312,
                                                "char": 59
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 312,
                                            "char": 59
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 312,
                                        "char": 59
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "errorUri",
                                                    "expr": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "string",
                                                            "value": "http:\/\/tools.ietf.org\/html\/rfc6749",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 314,
                                                            "char": 69
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "errorUri",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 314,
                                                            "char": 79
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 314,
                                                        "char": 79
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 314,
                                                    "char": 79
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 315,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 316,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "parameters",
                                            "index-expr": [
                                                {
                                                    "type": "string",
                                                    "value": "error_uri",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 316,
                                                    "char": 39
                                                }
                                            ],
                                            "expr": {
                                                "type": "variable",
                                                "value": "errorUri",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 316,
                                                "char": 51
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 316,
                                            "char": 51
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 317,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 319,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "httpHeaders",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 319,
                                    "char": 24
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 320,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "httpHeaders",
                                    "expr": {
                                        "type": "array",
                                        "left": [
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "Cache-Control",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 320,
                                                    "char": 43
                                                },
                                                "value": {
                                                    "type": "string",
                                                    "value": "no-store",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 320,
                                                    "char": 55
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 320,
                                                "char": 55
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 320,
                                        "char": 56
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 320,
                                    "char": 56
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 322,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 322,
                                    "char": 14
                                },
                                "name": "setStatusCode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "statusCode",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 322,
                                            "char": 39
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 322,
                                        "char": 39
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 322,
                                "char": 40
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 323,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 323,
                                    "char": 14
                                },
                                "name": "addParameters",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "parameters",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 323,
                                            "char": 39
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 323,
                                        "char": 39
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 323,
                                "char": 40
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 324,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 324,
                                    "char": 14
                                },
                                "name": "addHttpHeaders",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "httpHeaders",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 324,
                                            "char": 41
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 324,
                                        "char": 41
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 324,
                                "char": 42
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 326,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "not",
                                    "left": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 326,
                                            "char": 18
                                        },
                                        "name": "isClientError",
                                        "call-type": 1,
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 326,
                                        "char": 36
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 326,
                                    "char": 36
                                },
                                "right": {
                                    "type": "not",
                                    "left": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 326,
                                            "char": 44
                                        },
                                        "name": "isServerError",
                                        "call-type": 1,
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 326,
                                        "char": 61
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 326,
                                    "char": 61
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 326,
                                "char": 61
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 329,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param int $statusCode\n     * @param string $error\n     * @param string $errorDescription\n     * @param string $errorUri\n     * @return mixed\n     * @throws InvalidArgumentException\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 307,
                    "last-line": 340,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setRedirect",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "statusCode",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 341,
                            "char": 47
                        },
                        {
                            "type": "parameter",
                            "name": "url",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 341,
                            "char": 52
                        },
                        {
                            "type": "parameter",
                            "name": "state",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 341,
                                "char": 66
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 341,
                            "char": 66
                        },
                        {
                            "type": "parameter",
                            "name": "error",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 341,
                                "char": 80
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 341,
                            "char": 80
                        },
                        {
                            "type": "parameter",
                            "name": "errorDescription",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 341,
                                "char": 105
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 341,
                            "char": 105
                        },
                        {
                            "type": "parameter",
                            "name": "errorUri",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 341,
                                "char": 122
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 341,
                            "char": 122
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "empty",
                                "left": {
                                    "type": "variable",
                                    "value": "url",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 343,
                                    "char": 22
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 343,
                                "char": 22
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 347,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "parameters",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 347,
                                        "char": 28
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 347,
                                    "char": 28
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 349,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "is_null",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "state",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 349,
                                                "char": 26
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 349,
                                            "char": 26
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 349,
                                    "char": 28
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 349,
                                "char": 28
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "parameters",
                                            "index-expr": [
                                                {
                                                    "type": "string",
                                                    "value": "state",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 350,
                                                    "char": 35
                                                }
                                            ],
                                            "expr": {
                                                "type": "variable",
                                                "value": "state",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 350,
                                                "char": 44
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 350,
                                            "char": 44
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 351,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 353,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "is_null",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "error",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 353,
                                                "char": 26
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 353,
                                            "char": 26
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 353,
                                    "char": 28
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 353,
                                "char": 28
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 354,
                                            "char": 18
                                        },
                                        "name": "setError",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "400",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 354,
                                                    "char": 31
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 354,
                                                "char": 31
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "error",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 354,
                                                    "char": 38
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 354,
                                                "char": 38
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "errorDescription",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 354,
                                                    "char": 56
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 354,
                                                "char": 56
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "errorUri",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 354,
                                                    "char": 66
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 354,
                                                "char": 66
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 354,
                                        "char": 67
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 355,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 356,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 356,
                                    "char": 14
                                },
                                "name": "setStatusCode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "statusCode",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 356,
                                            "char": 39
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 356,
                                        "char": 39
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 356,
                                "char": 40
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 357,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 357,
                                    "char": 14
                                },
                                "name": "addParameters",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "parameters",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 357,
                                            "char": 39
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 357,
                                        "char": 39
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 357,
                                "char": 40
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 359,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "greater",
                                "left": {
                                    "type": "fcall",
                                    "name": "count",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 359,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "parameters",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 359,
                                                    "char": 34
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 359,
                                                "char": 34
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 359,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 359,
                                    "char": 36
                                },
                                "right": {
                                    "type": "int",
                                    "value": "0",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 359,
                                    "char": 40
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 359,
                                "char": 40
                            },
                            "statements": [
                                {
                                    "type": "declare",
                                    "data-type": "variable",
                                    "variables": [
                                        {
                                            "variable": "parts",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 360,
                                            "char": 22
                                        },
                                        {
                                            "variable": "sep",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 360,
                                            "char": 27
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 362,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "parts",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "parse_url",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "url",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 362,
                                                            "char": 38
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 362,
                                                        "char": 38
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 362,
                                                "char": 39
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 362,
                                            "char": 39
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 363,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "sep",
                                            "expr": {
                                                "type": "ternary",
                                                "left": {
                                                    "type": "and",
                                                    "left": {
                                                        "type": "isset",
                                                        "left": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "parts",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                "line": 363,
                                                                "char": 34
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "query",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                "line": 363,
                                                                "char": 42
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 363,
                                                            "char": 45
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 363,
                                                        "char": 45
                                                    },
                                                    "right": {
                                                        "type": "greater",
                                                        "left": {
                                                            "type": "fcall",
                                                            "name": "count",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "array-access",
                                                                        "left": {
                                                                            "type": "variable",
                                                                            "value": "parts",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                            "line": 363,
                                                                            "char": 58
                                                                        },
                                                                        "right": {
                                                                            "type": "string",
                                                                            "value": "query",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                            "line": 363,
                                                                            "char": 66
                                                                        },
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                        "line": 363,
                                                                        "char": 67
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                    "line": 363,
                                                                    "char": 67
                                                                }
                                                            ],
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 363,
                                                            "char": 69
                                                        },
                                                        "right": {
                                                            "type": "int",
                                                            "value": "0",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 363,
                                                            "char": 73
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 363,
                                                        "char": 73
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 363,
                                                    "char": 73
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "&",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 363,
                                                    "char": 79
                                                },
                                                "extra": {
                                                    "type": "string",
                                                    "value": "?",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 363,
                                                    "char": 84
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 363,
                                                "char": 84
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 363,
                                            "char": 84
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 364,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "concat-assign",
                                            "variable": "url",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "sep",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 364,
                                                    "char": 27
                                                },
                                                "right": {
                                                    "type": "fcall",
                                                    "name": "http_build_query",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "property-access",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "this",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                    "line": 364,
                                                                    "char": 51
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "parameters",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                    "line": 364,
                                                                    "char": 62
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                "line": 364,
                                                                "char": 62
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                            "line": 364,
                                                            "char": 62
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 364,
                                                    "char": 63
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 364,
                                                "char": 63
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 364,
                                            "char": 63
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 365,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 367,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 367,
                                    "char": 14
                                },
                                "name": "addHttpHeaders",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "key": {
                                                        "type": "string",
                                                        "value": "Location",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 367,
                                                        "char": 41
                                                    },
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "url",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 367,
                                                        "char": 47
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 367,
                                                    "char": 47
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 367,
                                            "char": 48
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 367,
                                        "char": 48
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 367,
                                "char": 49
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 369,
                            "char": 10
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
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 369,
                                        "char": 18
                                    },
                                    "name": "isRedirection",
                                    "call-type": 1,
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 369,
                                    "char": 35
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 369,
                                "char": 35
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 372,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param int $statusCode\n     * @param string $url\n     * @param string $state\n     * @param string $error\n     * @param string $errorDescription\n     * @param string $errorUri\n     * @return mixed\n     * @throws InvalidArgumentException\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 341,
                    "last-line": 380,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isInvalid",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "or",
                                "left": {
                                    "type": "less",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 383,
                                            "char": 21
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "statusCode",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 383,
                                            "char": 33
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 383,
                                        "char": 33
                                    },
                                    "right": {
                                        "type": "int",
                                        "value": "100",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 383,
                                        "char": 40
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 383,
                                    "char": 40
                                },
                                "right": {
                                    "type": "greater-equal",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 383,
                                            "char": 47
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "statusCode",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 383,
                                            "char": 59
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 383,
                                        "char": 59
                                    },
                                    "right": {
                                        "type": "int",
                                        "value": "600",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 383,
                                        "char": 64
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 383,
                                    "char": 64
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 383,
                                "char": 64
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 384,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @return Boolean\n     *\n     * @api\n     *\n     * @see http:\/\/www.w3.org\/Protocols\/rfc2616\/rfc2616-sec10.html\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 381,
                    "last-line": 390,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isInformational",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "greater-equal",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 393,
                                            "char": 21
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "statusCode",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 393,
                                            "char": 33
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 393,
                                        "char": 33
                                    },
                                    "right": {
                                        "type": "int",
                                        "value": "100",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 393,
                                        "char": 40
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 393,
                                    "char": 40
                                },
                                "right": {
                                    "type": "less",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 393,
                                            "char": 47
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "statusCode",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 393,
                                            "char": 59
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 393,
                                        "char": 59
                                    },
                                    "right": {
                                        "type": "int",
                                        "value": "200",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 393,
                                        "char": 64
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 393,
                                    "char": 64
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 393,
                                "char": 64
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 394,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @return Boolean\n     *\n     * @api\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 391,
                    "last-line": 400,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isSuccessful",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "greater-equal",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 403,
                                            "char": 21
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "statusCode",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 403,
                                            "char": 33
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 403,
                                        "char": 33
                                    },
                                    "right": {
                                        "type": "int",
                                        "value": "200",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 403,
                                        "char": 40
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 403,
                                    "char": 40
                                },
                                "right": {
                                    "type": "less",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 403,
                                            "char": 47
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "statusCode",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 403,
                                            "char": 59
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 403,
                                        "char": 59
                                    },
                                    "right": {
                                        "type": "int",
                                        "value": "300",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 403,
                                        "char": 64
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 403,
                                    "char": 64
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 403,
                                "char": 64
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 404,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @return Boolean\n     *\n     * @api\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 401,
                    "last-line": 410,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isRedirection",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "greater-equal",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 413,
                                            "char": 21
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "statusCode",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 413,
                                            "char": 33
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 413,
                                        "char": 33
                                    },
                                    "right": {
                                        "type": "int",
                                        "value": "300",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 413,
                                        "char": 40
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 413,
                                    "char": 40
                                },
                                "right": {
                                    "type": "less",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 413,
                                            "char": 47
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "statusCode",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 413,
                                            "char": 59
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 413,
                                        "char": 59
                                    },
                                    "right": {
                                        "type": "int",
                                        "value": "400",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 413,
                                        "char": 64
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 413,
                                    "char": 64
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 413,
                                "char": 64
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 414,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @return Boolean\n     *\n     * @api\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 411,
                    "last-line": 420,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isClientError",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "greater-equal",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 423,
                                            "char": 21
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "statusCode",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 423,
                                            "char": 33
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 423,
                                        "char": 33
                                    },
                                    "right": {
                                        "type": "int",
                                        "value": "400",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 423,
                                        "char": 40
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 423,
                                    "char": 40
                                },
                                "right": {
                                    "type": "less",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 423,
                                            "char": 47
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "statusCode",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 423,
                                            "char": 59
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 423,
                                        "char": 59
                                    },
                                    "right": {
                                        "type": "int",
                                        "value": "500",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 423,
                                        "char": 64
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 423,
                                    "char": 64
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 423,
                                "char": 64
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 424,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @return Boolean\n     *\n     * @api\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 421,
                    "last-line": 430,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isServerError",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "greater-equal",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 433,
                                            "char": 21
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "statusCode",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 433,
                                            "char": 33
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 433,
                                        "char": 33
                                    },
                                    "right": {
                                        "type": "int",
                                        "value": "500",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 433,
                                        "char": 40
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 433,
                                    "char": 40
                                },
                                "right": {
                                    "type": "less",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 433,
                                            "char": 47
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "statusCode",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 433,
                                            "char": 59
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 433,
                                        "char": 59
                                    },
                                    "right": {
                                        "type": "int",
                                        "value": "600",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 433,
                                        "char": 64
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 433,
                                    "char": 64
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 433,
                                "char": 64
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 434,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @return Boolean\n     *\n     * @api\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 431,
                    "last-line": 441,
                    "char": 19
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "method",
                    "name": "getHttpHeadersAsString",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "headers",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 442,
                            "char": 52
                        }
                    ],
                    "statements": [
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
                                                "value": "headers",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 444,
                                                "char": 25
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 444,
                                            "char": 25
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 444,
                                    "char": 28
                                },
                                "right": {
                                    "type": "int",
                                    "value": "0",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 444,
                                    "char": 32
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 444,
                                "char": 32
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 445,
                                        "char": 22
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 446,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 447,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "max",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 447,
                                    "char": 16
                                },
                                {
                                    "variable": "content",
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 447,
                                        "char": 30
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 447,
                                    "char": 30
                                },
                                {
                                    "variable": "name",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 447,
                                    "char": 36
                                },
                                {
                                    "variable": "values",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 447,
                                    "char": 44
                                },
                                {
                                    "variable": "value",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 447,
                                    "char": 51
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 448,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "max",
                                    "expr": {
                                        "type": "add",
                                        "left": {
                                            "type": "fcall",
                                            "name": "max",
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
                                                                    "value": "strlen",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                    "line": 448,
                                                                    "char": 41
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                "line": 448,
                                                                "char": 41
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
                                                                                "value": "headers",
                                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                                "line": 448,
                                                                                "char": 61
                                                                            },
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                            "line": 448,
                                                                            "char": 61
                                                                        }
                                                                    ],
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                    "line": 448,
                                                                    "char": 62
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                "line": 448,
                                                                "char": 62
                                                            }
                                                        ],
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 448,
                                                        "char": 63
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 448,
                                                    "char": 63
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 448,
                                            "char": 65
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "1",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 448,
                                            "char": 68
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 448,
                                        "char": 68
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 448,
                                    "char": 68
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 449,
                            "char": 13
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "ksort",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "headers",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 449,
                                            "char": 22
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 449,
                                        "char": 22
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 449,
                                "char": 23
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 451,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "headers",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 451,
                                "char": 36
                            },
                            "key": "name",
                            "value": "values",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "for",
                                    "expr": {
                                        "type": "variable",
                                        "value": "values",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 452,
                                        "char": 33
                                    },
                                    "value": "value",
                                    "reverse": 0,
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "concat-assign",
                                                    "variable": "content",
                                                    "expr": {
                                                        "type": "fcall",
                                                        "name": "sprintf",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "concat",
                                                                    "left": {
                                                                        "type": "concat",
                                                                        "left": {
                                                                            "type": "string",
                                                                            "value": "%-{",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                            "line": 453,
                                                                            "char": 45
                                                                        },
                                                                        "right": {
                                                                            "type": "variable",
                                                                            "value": "max",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                            "line": 453,
                                                                            "char": 51
                                                                        },
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                        "line": 453,
                                                                        "char": 51
                                                                    },
                                                                    "right": {
                                                                        "type": "string",
                                                                        "value": "}s %s\\r\\n",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                        "line": 453,
                                                                        "char": 64
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                    "line": 453,
                                                                    "char": 64
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                "line": 453,
                                                                "char": 64
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "concat",
                                                                    "left": {
                                                                        "type": "mcall",
                                                                        "variable": {
                                                                            "type": "variable",
                                                                            "value": "this",
                                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                            "line": 453,
                                                                            "char": 71
                                                                        },
                                                                        "name": "beautifyHeaderName",
                                                                        "call-type": 1,
                                                                        "parameters": [
                                                                            {
                                                                                "parameter": {
                                                                                    "type": "variable",
                                                                                    "value": "name",
                                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                                    "line": 453,
                                                                                    "char": 95
                                                                                },
                                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                                "line": 453,
                                                                                "char": 95
                                                                            }
                                                                        ],
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                        "line": 453,
                                                                        "char": 96
                                                                    },
                                                                    "right": {
                                                                        "type": "string",
                                                                        "value": ":",
                                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                        "line": 453,
                                                                        "char": 100
                                                                    },
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                    "line": 453,
                                                                    "char": 100
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                "line": 453,
                                                                "char": 100
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "value",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                    "line": 453,
                                                                    "char": 107
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                                "line": 453,
                                                                "char": 107
                                                            }
                                                        ],
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 453,
                                                        "char": 108
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 453,
                                                    "char": 108
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 454,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 455,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 457,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "content",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 457,
                                "char": 23
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 458,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Function from Symfony2 HttpFoundation - output pretty header\n     *\n     * @param array $headers\n     * @return string\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 442,
                    "last-line": 465,
                    "char": 20
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "method",
                    "name": "beautifyHeaderName",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 466,
                            "char": 45
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "preg_replace_callback",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "\/\\-(.)\/",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 468,
                                            "char": 47
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 468,
                                        "char": 47
                                    },
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 468,
                                                        "char": 54
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 468,
                                                    "char": 54
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "beautifyCallback",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 468,
                                                        "char": 74
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 468,
                                                    "char": 74
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 468,
                                            "char": 75
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 468,
                                        "char": 75
                                    },
                                    {
                                        "parameter": {
                                            "type": "fcall",
                                            "name": "ucfirst",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "name",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                        "line": 468,
                                                        "char": 89
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 468,
                                                    "char": 89
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 468,
                                            "char": 90
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                        "line": 468,
                                        "char": 90
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 468,
                                "char": 91
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 469,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Function from Symfony2 HttpFoundation - output pretty header\n     *\n     * @param string $name\n     * @return mixed\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 466,
                    "last-line": 476,
                    "char": 20
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "method",
                    "name": "beautifyCallback",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "match",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 477,
                            "char": 44
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "concat",
                                "left": {
                                    "type": "string",
                                    "value": "-",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 479,
                                    "char": 19
                                },
                                "right": {
                                    "type": "fcall",
                                    "name": "strtoupper",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "match",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 479,
                                                    "char": 36
                                                },
                                                "right": {
                                                    "type": "int",
                                                    "value": "1",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                    "line": 479,
                                                    "char": 38
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                                "line": 479,
                                                "char": 39
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                            "line": 479,
                                            "char": 39
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                    "line": 479,
                                    "char": 40
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                                "line": 479,
                                "char": 40
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                            "line": 480,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Function from Symfony2 HttpFoundation - output pretty header\n     *\n     * @param array $match\n     * @return string\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
                    "line": 477,
                    "last-line": 481,
                    "char": 20
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
            "line": 14,
            "char": 5
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/response.zep",
        "line": 14,
        "char": 5
    }
]