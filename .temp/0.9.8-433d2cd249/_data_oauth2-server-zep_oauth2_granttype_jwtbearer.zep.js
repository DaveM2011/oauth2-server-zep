[
    {
        "type": "comment",
        "value": "**\n * The JWT bearer authorization grant implements JWT (JSON Web Tokens) as a grant type per the IETF draft.\n *\n * @see http:\/\/tools.ietf.org\/html\/draft-ietf-oauth-jwt-bearer-04#section-4\n *\n * @author F21\n * @author Brent Shaffer <bshafs at gmail dot com>\n *",
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
        "line": 10,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "OAuth2\\GrantType",
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
        "line": 12,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\ClientAssertionType\\ClientAssertionTypeInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                "line": 12,
                "char": 60
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
        "line": 13,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Storage\\JwtBearerInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                "line": 13,
                "char": 38
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
        "line": 14,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Encryption\\Jwt",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                "line": 14,
                "char": 26
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
        "line": 15,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\Encryption\\EncryptionInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                "line": 15,
                "char": 42
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
        "line": 16,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\ResponseType\\AccessTokenInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                "line": 16,
                "char": 45
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
        "line": 17,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\RequestInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                "line": 17,
                "char": 28
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
        "line": 18,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "OAuth2\\ResponseInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                "line": 18,
                "char": 29
            }
        ],
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
        "line": 20,
        "char": 5
    },
    {
        "type": "class",
        "name": "JwtBearer",
        "abstract": 0,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "GrantTypeInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                "line": 20,
                "char": 46
            },
            {
                "type": "variable",
                "value": "ClientAssertionTypeInterface",
                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                "line": 21,
                "char": 1
            }
        ],
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "jwt",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                    "line": 23,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "storage",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                    "line": 24,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "audience",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                    "line": 25,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "jwtUtil",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                    "line": 33,
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
                            "name": "storage",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "JwtBearerInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 34,
                                "char": 60
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 34,
                            "char": 61
                        },
                        {
                            "type": "parameter",
                            "name": "audience",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 34,
                            "char": 79
                        },
                        {
                            "type": "parameter",
                            "name": "jwtUtil",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "EncryptionInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 34,
                                "char": 109
                            },
                            "default": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 34,
                                "char": 117
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 34,
                            "char": 117
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
                                    "property": "storage",
                                    "expr": {
                                        "type": "variable",
                                        "value": "storage",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 36,
                                        "char": 36
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 36,
                                    "char": 36
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 37,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "audience",
                                    "expr": {
                                        "type": "variable",
                                        "value": "audience",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 37,
                                        "char": 38
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 37,
                                    "char": 38
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 39,
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
                                        "value": "jwtUtil",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 39,
                                        "char": 28
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 39,
                                    "char": 28
                                },
                                "right": {
                                    "type": "string",
                                    "value": "null",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 39,
                                    "char": 37
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 39,
                                "char": 37
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "jwtUtil",
                                            "expr": {
                                                "type": "new",
                                                "class": "Jwt",
                                                "dynamic": 0,
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 40,
                                                "char": 36
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 40,
                                            "char": 36
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 41,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 43,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "jwtUtil",
                                    "expr": {
                                        "type": "variable",
                                        "value": "jwtUtil",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 43,
                                        "char": 36
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 43,
                                    "char": 36
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 44,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Creates an instance of the JWT bearer grant type.\n     *\n     * @param OAuth2\\Storage\\JWTBearerInterface storage A valid storage interface that implements storage hooks for the JWT bearer grant type.\n     * @param string audience The audience to validate the token against. This is usually the full URI of the OAuth token requests endpoint.\n     * @param OAuth2\\Encryption\\Jwt jwtUtil OPTONAL The class used to decode, encode and verify JWTs.\n     *",
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                    "line": 34,
                    "last-line": 52,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getQuerystringIdentifier",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "string",
                                "value": "urn:ietf:params:oauth:grant-type:jwt-bearer",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 55,
                                "char": 61
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 56,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Returns the grant_type get parameter to identify the grant type request as JWT bearer authorization grant.\n     *\n     * @return string The string identifier for grant_type.\n     *\n     * @see OAuth2\\GrantType\\GrantTypeInterface::getQuerystringIdentifier()\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 54,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                        "line": 54,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                    "line": 53,
                    "last-line": 64,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "validateRequest",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "request",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "RequestInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 65,
                                "char": 62
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 65,
                            "char": 63
                        },
                        {
                            "type": "parameter",
                            "name": "response",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "ResponseInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 65,
                                "char": 92
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 65,
                            "char": 93
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "undecodedJWT",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 67,
                                    "char": 25
                                },
                                {
                                    "variable": "jwt",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 67,
                                    "char": 30
                                },
                                {
                                    "variable": "notBefore",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 67,
                                    "char": 41
                                },
                                {
                                    "variable": "jti",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 67,
                                    "char": 46
                                },
                                {
                                    "variable": "key",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 67,
                                    "char": 51
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 69,
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
                                        "value": "request",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 69,
                                        "char": 21
                                    },
                                    "name": "request",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "string",
                                                "value": "assertion",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 69,
                                                "char": 41
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 69,
                                            "char": 41
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 69,
                                    "char": 43
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 69,
                                "char": 43
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 70,
                                            "char": 22
                                        },
                                        "name": "setError",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "400",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 70,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 70,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "invalid_request",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 70,
                                                    "char": 54
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 70,
                                                "char": 54
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Missing parameters: \\\"assertion\\\" required",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 70,
                                                    "char": 100
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 70,
                                                "char": 100
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 70,
                                        "char": 101
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 71,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 71,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 72,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 75,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "undecodedJWT",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "request",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 75,
                                            "char": 36
                                        },
                                        "name": "request",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "assertion",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 75,
                                                    "char": 56
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 75,
                                                "char": 56
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 75,
                                        "char": 57
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 75,
                                    "char": 57
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 78,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "jwt",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 78,
                                                "char": 24
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "jwtUtil",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 78,
                                                "char": 33
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 78,
                                            "char": 33
                                        },
                                        "name": "decode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "request",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 78,
                                                        "char": 49
                                                    },
                                                    "name": "request",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "string",
                                                                "value": "assertion",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 78,
                                                                "char": 69
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 78,
                                                            "char": 69
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 78,
                                                    "char": 70
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 78,
                                                "char": 70
                                            },
                                            {
                                                "parameter": {
                                                    "type": "null",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 78,
                                                    "char": 76
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 78,
                                                "char": 76
                                            },
                                            {
                                                "parameter": {
                                                    "type": "bool",
                                                    "value": "false",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 78,
                                                    "char": 83
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 78,
                                                "char": 83
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 78,
                                        "char": 84
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 78,
                                    "char": 84
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 80,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "jwt",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 80,
                                    "char": 17
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 80,
                                "char": 17
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 81,
                                            "char": 22
                                        },
                                        "name": "setError",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "400",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 81,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 81,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "invalid_request",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 81,
                                                    "char": 54
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 81,
                                                "char": 54
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "JWT is malformed",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 81,
                                                    "char": 74
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 81,
                                                "char": 74
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 81,
                                        "char": 75
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 82,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 82,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 83,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 87,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "jwt",
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
                                                                "value": "scope",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 88,
                                                                "char": 20
                                                            },
                                                            "value": {
                                                                "type": "null",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 88,
                                                                "char": 26
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 88,
                                                            "char": 26
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "iss",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 89,
                                                                "char": 20
                                                            },
                                                            "value": {
                                                                "type": "null",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 89,
                                                                "char": 26
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 89,
                                                            "char": 26
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "sub",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 90,
                                                                "char": 20
                                                            },
                                                            "value": {
                                                                "type": "null",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 90,
                                                                "char": 26
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 90,
                                                            "char": 26
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "aud",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 91,
                                                                "char": 20
                                                            },
                                                            "value": {
                                                                "type": "null",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 91,
                                                                "char": 26
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 91,
                                                            "char": 26
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "exp",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 92,
                                                                "char": 20
                                                            },
                                                            "value": {
                                                                "type": "null",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 92,
                                                                "char": 26
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 92,
                                                            "char": 26
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "nbf",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 93,
                                                                "char": 20
                                                            },
                                                            "value": {
                                                                "type": "null",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 93,
                                                                "char": 26
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 93,
                                                            "char": 26
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "iat",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 94,
                                                                "char": 20
                                                            },
                                                            "value": {
                                                                "type": "null",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 94,
                                                                "char": 26
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 94,
                                                            "char": 26
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "jti",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 95,
                                                                "char": 20
                                                            },
                                                            "value": {
                                                                "type": "null",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 95,
                                                                "char": 26
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 95,
                                                            "char": 26
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "typ",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 96,
                                                                "char": 20
                                                            },
                                                            "value": {
                                                                "type": "null",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 97,
                                                                "char": 9
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 97,
                                                            "char": 9
                                                        }
                                                    ],
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 97,
                                                    "char": 10
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 97,
                                                "char": 10
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "jwt",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 97,
                                                    "char": 15
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 97,
                                                "char": 15
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 97,
                                        "char": 16
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 97,
                                    "char": 16
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 99,
                            "char": 10
                        },
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
                                            "value": "jwt",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 99,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "iss",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 99,
                                            "char": 28
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 99,
                                        "char": 30
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 99,
                                    "char": 30
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 99,
                                "char": 30
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 100,
                                            "char": 22
                                        },
                                        "name": "setError",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "400",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 100,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 100,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "invalid_grant",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 100,
                                                    "char": 52
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 100,
                                                "char": 52
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Invalid issuer (iss) provided",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 100,
                                                    "char": 85
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 100,
                                                "char": 85
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 100,
                                        "char": 86
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 101,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 101,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 102,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 104,
                            "char": 10
                        },
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
                                            "value": "jwt",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 104,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "sub",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 104,
                                            "char": 28
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 104,
                                        "char": 30
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 104,
                                    "char": 30
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 104,
                                "char": 30
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 105,
                                            "char": 22
                                        },
                                        "name": "setError",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "400",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 105,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 105,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "invalid_grant",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 105,
                                                    "char": 52
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 105,
                                                "char": 52
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Invalid subject (sub) provided",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 105,
                                                    "char": 86
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 105,
                                                "char": 86
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 105,
                                        "char": 87
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 106,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 106,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 107,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 109,
                            "char": 10
                        },
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
                                            "value": "jwt",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 109,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "exp",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 109,
                                            "char": 28
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 109,
                                        "char": 30
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 109,
                                    "char": 30
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 109,
                                "char": 30
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 110,
                                            "char": 22
                                        },
                                        "name": "setError",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "400",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 110,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 110,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "invalid_grant",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 110,
                                                    "char": 52
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 110,
                                                "char": 52
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Expiration (exp) time must be present",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 110,
                                                    "char": 93
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 110,
                                                "char": 93
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 110,
                                        "char": 94
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 111,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 111,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 112,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 115,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "ctype_digit",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "jwt",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 115,
                                                "char": 27
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "exp",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 115,
                                                "char": 33
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 115,
                                            "char": 34
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 115,
                                        "char": 34
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 115,
                                "char": 36
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "less-equal",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "jwt",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 116,
                                                "char": 19
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "exp",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 116,
                                                "char": 25
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 116,
                                            "char": 27
                                        },
                                        "right": {
                                            "type": "fcall",
                                            "name": "time",
                                            "call-type": 1,
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 116,
                                            "char": 36
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 116,
                                        "char": 36
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 117,
                                                    "char": 26
                                                },
                                                "name": "setError",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "400",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 117,
                                                            "char": 39
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 117,
                                                        "char": 39
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "invalid_grant",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 117,
                                                            "char": 56
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 117,
                                                        "char": 56
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "JWT has expired",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 117,
                                                            "char": 75
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 117,
                                                        "char": 75
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 117,
                                                "char": 76
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 118,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 118,
                                                "char": 29
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 119,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 120,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 121,
                                            "char": 22
                                        },
                                        "name": "setError",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "400",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 121,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 121,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "invalid_grant",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 121,
                                                    "char": 52
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 121,
                                                "char": 52
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Expiration (exp) time must be a unix time stamp",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 121,
                                                    "char": 103
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 121,
                                                "char": 103
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 121,
                                        "char": 104
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 122,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 122,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 123,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 126,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "notBefore",
                                    "expr": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "jwt",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 126,
                                            "char": 28
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "nbf",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 126,
                                            "char": 34
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 126,
                                        "char": 35
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 126,
                                    "char": 35
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 127,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "variable",
                                "value": "notBefore",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 127,
                                "char": 22
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "ctype_digit",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "notBefore",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 128,
                                                    "char": 37
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 128,
                                                "char": 37
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 128,
                                        "char": 39
                                    },
                                    "statements": [
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "greater",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "notBefore",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 129,
                                                    "char": 30
                                                },
                                                "right": {
                                                    "type": "fcall",
                                                    "name": "time",
                                                    "call-type": 1,
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 129,
                                                    "char": 39
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 129,
                                                "char": 39
                                            },
                                            "statements": [
                                                {
                                                    "type": "mcall",
                                                    "expr": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "response",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 130,
                                                            "char": 30
                                                        },
                                                        "name": "setError",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "int",
                                                                    "value": "400",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                    "line": 130,
                                                                    "char": 43
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 130,
                                                                "char": 43
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "string",
                                                                    "value": "invalid_grant",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                    "line": 130,
                                                                    "char": 60
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 130,
                                                                "char": 60
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "string",
                                                                    "value": "JWT cannot be used before the Not Before (nbf) time",
                                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                    "line": 130,
                                                                    "char": 115
                                                                },
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 130,
                                                                "char": 115
                                                            }
                                                        ],
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 130,
                                                        "char": 116
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 131,
                                                    "char": 26
                                                },
                                                {
                                                    "type": "return",
                                                    "expr": {
                                                        "type": "bool",
                                                        "value": "false",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 131,
                                                        "char": 33
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 132,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 133,
                                            "char": 13
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 134,
                                                    "char": 26
                                                },
                                                "name": "setError",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "400",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 134,
                                                            "char": 39
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 134,
                                                        "char": 39
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "invalid_grant",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 134,
                                                            "char": 56
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 134,
                                                        "char": 56
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "Not Before (nbf) time must be a unix time stamp",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 134,
                                                            "char": 107
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 134,
                                                        "char": 107
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 134,
                                                "char": 108
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 135,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 135,
                                                "char": 29
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 136,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 137,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 140,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "or",
                                "left": {
                                    "type": "not",
                                    "left": {
                                        "type": "isset",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "jwt",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 140,
                                                "char": 22
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "aud",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 140,
                                                "char": 28
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 140,
                                            "char": 31
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 140,
                                        "char": 31
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 140,
                                    "char": 31
                                },
                                "right": {
                                    "type": "not-equals",
                                    "left": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "jwt",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 140,
                                            "char": 36
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "aud",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 140,
                                            "char": 42
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 140,
                                        "char": 45
                                    },
                                    "right": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 140,
                                            "char": 52
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "audience",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 140,
                                            "char": 62
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 140,
                                        "char": 62
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 140,
                                    "char": 62
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 140,
                                "char": 62
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 141,
                                            "char": 22
                                        },
                                        "name": "setError",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "400",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 141,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 141,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "invalid_grant",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 141,
                                                    "char": 52
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 141,
                                                "char": 52
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Invalid audience (aud)",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 141,
                                                    "char": 78
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 141,
                                                "char": 78
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 141,
                                        "char": 79
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 142,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 142,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 143,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 147,
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
                                        "value": "jwt",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 147,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "jti",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 147,
                                        "char": 27
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 147,
                                    "char": 29
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 147,
                                "char": 29
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "jti",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 148,
                                                        "char": 28
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "storage",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 148,
                                                        "char": 37
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 148,
                                                    "char": 37
                                                },
                                                "name": "getJti",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "jwt",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 148,
                                                                "char": 48
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "iss",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 148,
                                                                "char": 54
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 148,
                                                            "char": 55
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 148,
                                                        "char": 55
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "jwt",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 148,
                                                                "char": 60
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "sub",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 148,
                                                                "char": 66
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 148,
                                                            "char": 67
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 148,
                                                        "char": 67
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "jwt",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 148,
                                                                "char": 72
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "aud",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 148,
                                                                "char": 78
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 148,
                                                            "char": 79
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 148,
                                                        "char": 79
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "jwt",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 148,
                                                                "char": 84
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "exp",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 148,
                                                                "char": 90
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 148,
                                                            "char": 91
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 148,
                                                        "char": 91
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "jwt",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 148,
                                                                "char": 96
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "jti",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 148,
                                                                "char": 102
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 148,
                                                            "char": 103
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 148,
                                                        "char": 103
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 148,
                                                "char": 104
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 148,
                                            "char": 104
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 151,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "and",
                                        "left": {
                                            "type": "variable",
                                            "value": "jti",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 151,
                                            "char": 21
                                        },
                                        "right": {
                                            "type": "greater",
                                            "left": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "jti",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 151,
                                                    "char": 26
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "expires",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 151,
                                                    "char": 36
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 151,
                                                "char": 38
                                            },
                                            "right": {
                                                "type": "fcall",
                                                "name": "time",
                                                "call-type": 1,
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 151,
                                                "char": 47
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 151,
                                            "char": 47
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 151,
                                        "char": 47
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 152,
                                                    "char": 26
                                                },
                                                "name": "setError",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "400",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 152,
                                                            "char": 39
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 152,
                                                        "char": 39
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "invalid_grant",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 152,
                                                            "char": 56
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 152,
                                                        "char": 56
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "JSON Token Identifier (jti) has already been used",
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 152,
                                                            "char": 109
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 152,
                                                        "char": 109
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 152,
                                                "char": 110
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 153,
                                            "char": 22
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 153,
                                                "char": 29
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 154,
                                            "char": 13
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 155,
                                                        "char": 22
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "storage",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 155,
                                                        "char": 31
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 155,
                                                    "char": 31
                                                },
                                                "name": "setJti",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "jwt",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 155,
                                                                "char": 42
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "iss",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 155,
                                                                "char": 48
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 155,
                                                            "char": 49
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 155,
                                                        "char": 49
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "jwt",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 155,
                                                                "char": 54
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "sub",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 155,
                                                                "char": 60
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 155,
                                                            "char": 61
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 155,
                                                        "char": 61
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "jwt",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 155,
                                                                "char": 66
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "aud",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 155,
                                                                "char": 72
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 155,
                                                            "char": 73
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 155,
                                                        "char": 73
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "jwt",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 155,
                                                                "char": 78
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "exp",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 155,
                                                                "char": 84
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 155,
                                                            "char": 85
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 155,
                                                        "char": 85
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "jwt",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 155,
                                                                "char": 90
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "jti",
                                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                                "line": 155,
                                                                "char": 96
                                                            },
                                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                            "line": 155,
                                                            "char": 97
                                                        },
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 155,
                                                        "char": 97
                                                    }
                                                ],
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 155,
                                                "char": 98
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 156,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 157,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 161,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "key",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 161,
                                                "char": 24
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "storage",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 161,
                                                "char": 33
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 161,
                                            "char": 33
                                        },
                                        "name": "getClientKey",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "jwt",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 161,
                                                        "char": 50
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "iss",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 161,
                                                        "char": 56
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 161,
                                                    "char": 57
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 161,
                                                "char": 57
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "jwt",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 161,
                                                        "char": 62
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "sub",
                                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                        "line": 161,
                                                        "char": 68
                                                    },
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 161,
                                                    "char": 69
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 161,
                                                "char": 69
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 161,
                                        "char": 70
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 161,
                                    "char": 70
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 162,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "key",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 162,
                                    "char": 17
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 162,
                                "char": 17
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 163,
                                            "char": 22
                                        },
                                        "name": "setError",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "400",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 163,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 163,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "invalid_grant",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 163,
                                                    "char": 52
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 163,
                                                "char": 52
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Invalid issuer (iss) or subject (sub) provided",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 163,
                                                    "char": 102
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 163,
                                                "char": 102
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 163,
                                        "char": 103
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 164,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 164,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 165,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 168,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 168,
                                            "char": 18
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "jwtUtil",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 168,
                                            "char": 27
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 168,
                                        "char": 27
                                    },
                                    "name": "decode",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "undecodedJWT",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 168,
                                                "char": 47
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 168,
                                            "char": 47
                                        },
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "key",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 168,
                                                "char": 52
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 168,
                                            "char": 52
                                        },
                                        {
                                            "parameter": {
                                                "type": "bool",
                                                "value": "true",
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 168,
                                                "char": 58
                                            },
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 168,
                                            "char": 58
                                        }
                                    ],
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 168,
                                    "char": 60
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 168,
                                "char": 60
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "response",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 169,
                                            "char": 22
                                        },
                                        "name": "setError",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "400",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 169,
                                                    "char": 35
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 169,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "invalid_grant",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 169,
                                                    "char": 52
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 169,
                                                "char": 52
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "JWT failed signature verification",
                                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                    "line": 169,
                                                    "char": 89
                                                },
                                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                                "line": 169,
                                                "char": 89
                                            }
                                        ],
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 169,
                                        "char": 90
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 170,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 170,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 171,
                                    "char": 9
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 173,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "jwt",
                                    "expr": {
                                        "type": "variable",
                                        "value": "jwt",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 173,
                                        "char": 28
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 173,
                                    "char": 28
                                }
                            ],
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 175,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 175,
                                "char": 20
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 176,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Validates the data from the decoded JWT.\n     *\n     * @return boolean  TRUE if the JWT request is valid and can be decoded. Otherwise, FALSE is returned.\n     *\n     * @see OAuth2\\GrantType\\GrantTypeInterface::getTokenData()\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 66,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                        "line": 66,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                    "line": 65,
                    "last-line": 178,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getClientId",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "array-access",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 180,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "jwt",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 180,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 180,
                                    "char": 25
                                },
                                "right": {
                                    "type": "string",
                                    "value": "iss",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 180,
                                    "char": 31
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 180,
                                "char": 32
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 181,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 178,
                                "char": 45
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 179,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                        "line": 179,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                    "line": 178,
                    "last-line": 183,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getUserId",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "array-access",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 185,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "jwt",
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 185,
                                        "char": 25
                                    },
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 185,
                                    "char": 25
                                },
                                "right": {
                                    "type": "string",
                                    "value": "sub",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 185,
                                    "char": 31
                                },
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 185,
                                "char": 32
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 186,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 183,
                                "char": 43
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 184,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                        "line": 184,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                    "line": 183,
                    "last-line": 188,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getScope",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "null",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 190,
                                "char": 20
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 191,
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
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 188,
                                "char": 42
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 189,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                        "line": 189,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                    "line": 188,
                    "last-line": 198,
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
                            "name": "accessToken",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "AccessTokenInterface",
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 199,
                                "char": 72
                            },
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 199,
                            "char": 73
                        },
                        {
                            "type": "parameter",
                            "name": "client_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 199,
                            "char": 92
                        },
                        {
                            "type": "parameter",
                            "name": "user_id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 199,
                            "char": 109
                        },
                        {
                            "type": "parameter",
                            "name": "scope",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 199,
                            "char": 124
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "accessToken",
                                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                    "line": 201,
                                    "char": 28
                                },
                                "name": "createAccessToken",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "client_id",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 201,
                                            "char": 56
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 201,
                                        "char": 56
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "user_id",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 201,
                                            "char": 65
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 201,
                                        "char": 65
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "scope",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 201,
                                            "char": 72
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 201,
                                        "char": 72
                                    },
                                    {
                                        "parameter": {
                                            "type": "bool",
                                            "value": "false",
                                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                            "line": 201,
                                            "char": 79
                                        },
                                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                        "line": 201,
                                        "char": 79
                                    }
                                ],
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 201,
                                "char": 80
                            },
                            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                            "line": 202,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * Creates an access token that is NOT associated with a refresh token.\n     * If a subject (sub) the name of the user\/account we are accessing data on behalf of.\n     *\n     * @see OAuth2\\GrantType\\GrantTypeInterface::createAccessToken()\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                                "line": 200,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                        "line": 200,
                        "char": 5
                    },
                    "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
                    "line": 199,
                    "last-line": 203,
                    "char": 19
                }
            ],
            "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
            "line": 20,
            "char": 5
        },
        "file": "\/data\/oauth2-server-zep\/oauth2\/granttype\/jwtbearer.zep",
        "line": 20,
        "char": 5
    }
]