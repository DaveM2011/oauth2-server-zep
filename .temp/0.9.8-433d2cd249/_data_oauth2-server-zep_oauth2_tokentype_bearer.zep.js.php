<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Bearer token
 * @package \\OAuth2\\TokenType
 *',
    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
    'line' => 7,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\TokenType',
    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
    'line' => 9,
    'char' => 3,
  ),
  2 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\RequestInterface',
        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
        'line' => 9,
        'char' => 28,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
    'line' => 10,
    'char' => 3,
  ),
  3 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\ResponseInterface',
        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
        'line' => 10,
        'char' => 29,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
    'line' => 12,
    'char' => 5,
  ),
  4 => 
  array (
    'type' => 'class',
    'name' => 'Bearer',
    'abstract' => 0,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'TokenTypeInterface',
        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
        'line' => 13,
        'char' => 1,
      ),
    ),
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'config',
          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
          'line' => 16,
          'char' => 10,
        ),
      ),
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__construct',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'config',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                'line' => 16,
                'char' => 50,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
              'line' => 16,
              'char' => 50,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'config',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'array_merge',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'token_param_name',
                                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                'line' => 19,
                                'char' => 39,
                              ),
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => 'access_token',
                                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                'line' => 19,
                                'char' => 55,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 19,
                              'char' => 55,
                            ),
                            1 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'token_bearer_header_name',
                                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                'line' => 20,
                                'char' => 39,
                              ),
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => 'Bearer',
                                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                'line' => 21,
                                'char' => 9,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 21,
                              'char' => 9,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 21,
                          'char' => 10,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 21,
                        'char' => 10,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 21,
                          'char' => 18,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 21,
                        'char' => 18,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                    'line' => 21,
                    'char' => 19,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 21,
                  'char' => 19,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
              'line' => 22,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
          'line' => 16,
          'last-line' => 24,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getTokenType',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'string',
                'value' => 'Bearer',
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                'line' => 26,
                'char' => 24,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
              'line' => 27,
              'char' => 5,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                'line' => 25,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
            'line' => 25,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
          'line' => 24,
          'last-line' => 35,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'requestHasToken',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'request',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'RequestInterface',
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                'line' => 36,
                'char' => 62,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
              'line' => 36,
              'char' => 63,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'headers',
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 38,
                  'char' => 20,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
              'line' => 39,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'headers',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'request',
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 39,
                      'char' => 31,
                    ),
                    'name' => 'headers',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'AUTHORIZATION',
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 39,
                          'char' => 55,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 39,
                        'char' => 55,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                    'line' => 39,
                    'char' => 56,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 39,
                  'char' => 56,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
              'line' => 42,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'or',
                'left' => 
                array (
                  'type' => 'or',
                  'left' => 
                  array (
                    'type' => 'not',
                    'left' => 
                    array (
                      'type' => 'empty',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'headers',
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 42,
                        'char' => 32,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 42,
                      'char' => 32,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                    'line' => 42,
                    'char' => 32,
                  ),
                  'right' => 
                  array (
                    'type' => 'cast',
                    'left' => 'bool',
                    'right' => 
                    array (
                      'type' => 'list',
                      'left' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'request',
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 42,
                          'char' => 53,
                        ),
                        'name' => 'request',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'property-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'this',
                                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                  'line' => 42,
                                  'char' => 67,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'config',
                                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                  'line' => 42,
                                  'char' => 74,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                'line' => 42,
                                'char' => 74,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'token_param_name',
                                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                'line' => 42,
                                'char' => 93,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 42,
                              'char' => 94,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 42,
                            'char' => 94,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 42,
                        'char' => 95,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 42,
                      'char' => 98,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                    'line' => 42,
                    'char' => 98,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 42,
                  'char' => 98,
                ),
                'right' => 
                array (
                  'type' => 'cast',
                  'left' => 'bool',
                  'right' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'request',
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 42,
                        'char' => 119,
                      ),
                      'name' => 'query',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'this',
                                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                'line' => 42,
                                'char' => 131,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'config',
                                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                'line' => 42,
                                'char' => 138,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 42,
                              'char' => 138,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'token_param_name',
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 42,
                              'char' => 157,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 42,
                            'char' => 158,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 42,
                          'char' => 158,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 42,
                      'char' => 159,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                    'line' => 42,
                    'char' => 160,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 42,
                  'char' => 160,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                'line' => 42,
                'char' => 160,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
              'line' => 43,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Check if the request has supplied token
     *
     * @param \\OAuth2\\RequestInterface request
     * @return boolean
     * @see https://github.com/bshaffer/oauth2-server-php/issues/349#issuecomment-37993588
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                'line' => 37,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
            'line' => 37,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
          'line' => 36,
          'last-line' => 69,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getAccessTokenParameter',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'request',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'RequestInterface',
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                'line' => 70,
                'char' => 70,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
              'line' => 70,
              'char' => 71,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'response',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'ResponseInterface',
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                'line' => 70,
                'char' => 100,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
              'line' => 70,
              'char' => 101,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'headers',
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 72,
                  'char' => 20,
                ),
                1 => 
                array (
                  'variable' => 'methodsUsed',
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 72,
                  'char' => 33,
                ),
                2 => 
                array (
                  'variable' => 'matches',
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 72,
                  'char' => 42,
                ),
                3 => 
                array (
                  'variable' => 'contentType',
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 72,
                  'char' => 55,
                ),
                4 => 
                array (
                  'variable' => 'pos',
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 72,
                  'char' => 60,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
              'line' => 74,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'headers',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'request',
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 74,
                      'char' => 31,
                    ),
                    'name' => 'headers',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'AUTHORIZATION',
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 74,
                          'char' => 55,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 74,
                        'char' => 55,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                    'line' => 74,
                    'char' => 56,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 74,
                  'char' => 56,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
              'line' => 78,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'methodsUsed',
                  'expr' => 
                  array (
                    'type' => 'add',
                    'left' => 
                    array (
                      'type' => 'add',
                      'left' => 
                      array (
                        'type' => 'cast',
                        'left' => 'int',
                        'right' => 
                        array (
                          'type' => 'list',
                          'left' => 
                          array (
                            'type' => 'empty',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'headers',
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 78,
                              'char' => 46,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 78,
                            'char' => 46,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 78,
                          'char' => 48,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 78,
                        'char' => 48,
                      ),
                      'right' => 
                      array (
                        'type' => 'cast',
                        'left' => 'bool',
                        'right' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'request',
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 78,
                            'char' => 65,
                          ),
                          'name' => 'query',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'array-access',
                                'left' => 
                                array (
                                  'type' => 'property-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'this',
                                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                    'line' => 78,
                                    'char' => 77,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'config',
                                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                    'line' => 78,
                                    'char' => 84,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                  'line' => 78,
                                  'char' => 84,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'token_param_name',
                                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                  'line' => 78,
                                  'char' => 103,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                'line' => 78,
                                'char' => 104,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 78,
                              'char' => 104,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 78,
                          'char' => 106,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 78,
                        'char' => 106,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 78,
                      'char' => 106,
                    ),
                    'right' => 
                    array (
                      'type' => 'cast',
                      'left' => 'bool',
                      'right' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'request',
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 78,
                          'char' => 123,
                        ),
                        'name' => 'request',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'property-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'this',
                                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                  'line' => 78,
                                  'char' => 137,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'config',
                                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                  'line' => 78,
                                  'char' => 144,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                'line' => 78,
                                'char' => 144,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'token_param_name',
                                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                'line' => 78,
                                'char' => 163,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 78,
                              'char' => 164,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 78,
                            'char' => 164,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 78,
                        'char' => 165,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 78,
                      'char' => 165,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                    'line' => 78,
                    'char' => 165,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 78,
                  'char' => 165,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
              'line' => 80,
              'char' => 10,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'greater',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'methodsUsed',
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 80,
                  'char' => 24,
                ),
                'right' => 
                array (
                  'type' => 'int',
                  'value' => '1',
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 80,
                  'char' => 28,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                'line' => 80,
                'char' => 28,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'response',
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 81,
                      'char' => 22,
                    ),
                    'name' => 'setError',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'int',
                          'value' => '400',
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 81,
                          'char' => 35,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 81,
                        'char' => 35,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'invalid_request',
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 81,
                          'char' => 54,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 81,
                        'char' => 54,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'Only one method may be used to authenticate at a time (Auth header, GET or POST)',
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 81,
                          'char' => 138,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 81,
                        'char' => 138,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                    'line' => 81,
                    'char' => 139,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 82,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                    'line' => 82,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 83,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
              'line' => 87,
              'char' => 10,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'methodsUsed',
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 87,
                  'char' => 25,
                ),
                'right' => 
                array (
                  'type' => 'int',
                  'value' => '0',
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 87,
                  'char' => 29,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                'line' => 87,
                'char' => 29,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'response',
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 88,
                      'char' => 22,
                    ),
                    'name' => 'setStatusCode',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'int',
                          'value' => '401',
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 88,
                          'char' => 40,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 88,
                        'char' => 40,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                    'line' => 88,
                    'char' => 41,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 89,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                    'line' => 89,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 90,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
              'line' => 93,
              'char' => 10,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'headers',
                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                    'line' => 93,
                    'char' => 27,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 93,
                  'char' => 27,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                'line' => 93,
                'char' => 27,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'matches',
                      'expr' => 
                      array (
                        'type' => 'null',
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 94,
                        'char' => 31,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 94,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 95,
                  'char' => 14,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'not',
                    'left' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'preg_match',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'string',
                                'value' => '/',
                                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                'line' => 95,
                                'char' => 32,
                              ),
                              'right' => 
                              array (
                                'type' => 'array-access',
                                'left' => 
                                array (
                                  'type' => 'property-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'this',
                                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                    'line' => 95,
                                    'char' => 39,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'config',
                                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                    'line' => 95,
                                    'char' => 46,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                  'line' => 95,
                                  'char' => 46,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'token_bearer_header_name',
                                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                  'line' => 95,
                                  'char' => 73,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                'line' => 95,
                                'char' => 75,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 95,
                              'char' => 75,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '\\\\s(\\\\S+)/',
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 95,
                              'char' => 89,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 95,
                            'char' => 89,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 95,
                          'char' => 89,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'headers',
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 95,
                            'char' => 98,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 95,
                          'char' => 98,
                        ),
                        2 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'matches',
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 95,
                            'char' => 107,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 95,
                          'char' => 107,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 95,
                      'char' => 109,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                    'line' => 95,
                    'char' => 109,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response',
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 96,
                          'char' => 26,
                        ),
                        'name' => 'setError',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'int',
                              'value' => '400',
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 96,
                              'char' => 39,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 96,
                            'char' => 39,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'invalid_request',
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 96,
                              'char' => 58,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 96,
                            'char' => 58,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'Malformed auth header',
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 96,
                              'char' => 83,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 96,
                            'char' => 83,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 96,
                        'char' => 84,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 97,
                      'char' => 22,
                    ),
                    1 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'null',
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 97,
                        'char' => 28,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 98,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 100,
                  'char' => 18,
                ),
                2 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'matches',
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 100,
                      'char' => 27,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '1',
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 100,
                      'char' => 29,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                    'line' => 100,
                    'char' => 30,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 101,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
              'line' => 103,
              'char' => 10,
            ),
            6 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'request',
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 103,
                  'char' => 20,
                ),
                'name' => 'request',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 103,
                          'char' => 34,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 103,
                          'char' => 41,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 103,
                        'char' => 41,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'token_param_name',
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 103,
                        'char' => 60,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 103,
                      'char' => 61,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                    'line' => 103,
                    'char' => 61,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                'line' => 103,
                'char' => 63,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'not',
                    'left' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'in_array',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'variable',
                              'value' => 'request',
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 105,
                              'char' => 34,
                            ),
                            'name' => 'server',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'REQUEST_METHOD',
                                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                  'line' => 105,
                                  'char' => 58,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                'line' => 105,
                                'char' => 58,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 105,
                            'char' => 59,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 105,
                          'char' => 59,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'array',
                            'left' => 
                            array (
                              0 => 
                              array (
                                'value' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'POST',
                                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                  'line' => 105,
                                  'char' => 68,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                'line' => 105,
                                'char' => 68,
                              ),
                              1 => 
                              array (
                                'value' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'PUT',
                                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                  'line' => 105,
                                  'char' => 75,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                'line' => 105,
                                'char' => 75,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 105,
                            'char' => 76,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 105,
                          'char' => 76,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 105,
                      'char' => 78,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                    'line' => 105,
                    'char' => 78,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response',
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 106,
                          'char' => 26,
                        ),
                        'name' => 'setError',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'int',
                              'value' => '400',
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 106,
                              'char' => 39,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 106,
                            'char' => 39,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'invalid_request',
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 106,
                              'char' => 58,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 106,
                            'char' => 58,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'When putting the token in the body, the method must be POST or PUT',
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 106,
                              'char' => 128,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 106,
                            'char' => 128,
                          ),
                          3 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => '#section-2.2',
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 106,
                              'char' => 144,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 106,
                            'char' => 144,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 106,
                        'char' => 145,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 107,
                      'char' => 22,
                    ),
                    1 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'null',
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 107,
                        'char' => 28,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 108,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 110,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'contentType',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'request',
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 110,
                          'char' => 39,
                        ),
                        'name' => 'server',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'CONTENT_TYPE',
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 110,
                              'char' => 61,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 110,
                            'char' => 61,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 110,
                        'char' => 62,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 110,
                      'char' => 62,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 111,
                  'char' => 15,
                ),
                2 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'pos',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'strpos',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'contentType',
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 111,
                              'char' => 41,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 111,
                            'char' => 41,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => ';',
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 111,
                              'char' => 46,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 111,
                            'char' => 46,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 111,
                        'char' => 47,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 111,
                      'char' => 47,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 112,
                  'char' => 14,
                ),
                3 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'not-identical',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'pos',
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 112,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 112,
                      'char' => 30,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                    'line' => 112,
                    'char' => 30,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'contentType',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'substr',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'contentType',
                                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                  'line' => 113,
                                  'char' => 53,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                'line' => 113,
                                'char' => 53,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'int',
                                  'value' => '0',
                                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                  'line' => 113,
                                  'char' => 56,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                'line' => 113,
                                'char' => 56,
                              ),
                              2 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'pos',
                                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                  'line' => 113,
                                  'char' => 61,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                                'line' => 113,
                                'char' => 61,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 113,
                            'char' => 62,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 113,
                          'char' => 62,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 114,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 116,
                  'char' => 14,
                ),
                4 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'and',
                    'left' => 
                    array (
                      'type' => 'not-identical',
                      'left' => 
                      array (
                        'type' => 'typeof',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'contentType',
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 116,
                          'char' => 37,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 116,
                        'char' => 37,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'null',
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 116,
                        'char' => 47,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 116,
                      'char' => 47,
                    ),
                    'right' => 
                    array (
                      'type' => 'not-equals',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'contentType',
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 116,
                        'char' => 62,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'application/x-www-form-urlencoded',
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 116,
                        'char' => 100,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 116,
                      'char' => 100,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                    'line' => 116,
                    'char' => 100,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response',
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 119,
                          'char' => 26,
                        ),
                        'name' => 'setError',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'int',
                              'value' => '400',
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 119,
                              'char' => 39,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 119,
                            'char' => 39,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'invalid_request',
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 119,
                              'char' => 58,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 119,
                            'char' => 58,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'The content type for POST requests must be \\"application/x-www-form-urlencoded\\"',
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 119,
                              'char' => 142,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 119,
                            'char' => 142,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 119,
                        'char' => 143,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 120,
                      'char' => 22,
                    ),
                    1 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'null',
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 120,
                        'char' => 28,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 121,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 123,
                  'char' => 18,
                ),
                5 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'request',
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 123,
                      'char' => 28,
                    ),
                    'name' => 'request',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 123,
                              'char' => 42,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'config',
                              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                              'line' => 123,
                              'char' => 49,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 123,
                            'char' => 49,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'token_param_name',
                            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                            'line' => 123,
                            'char' => 68,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 123,
                          'char' => 69,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 123,
                        'char' => 69,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                    'line' => 123,
                    'char' => 70,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 124,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
              'line' => 127,
              'char' => 14,
            ),
            7 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'request',
                  'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                  'line' => 127,
                  'char' => 24,
                ),
                'name' => 'query',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 127,
                          'char' => 36,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                          'line' => 127,
                          'char' => 43,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 127,
                        'char' => 43,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'token_param_name',
                        'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                        'line' => 127,
                        'char' => 62,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                      'line' => 127,
                      'char' => 63,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                    'line' => 127,
                    'char' => 63,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                'line' => 127,
                'char' => 64,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
              'line' => 128,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * This is a convenience function that can be used to get the token, which can then
     * be passed to getAccessTokenData(). The constraints specified by the draft are
     * attempted to be adheared to in this method.
     *
     * As per the Bearer spec (draft 8, section 2) - there are three ways for a client
     * to specify the bearer token, in order of preference: Authorization Header,
     * POST and GET.
     *
     * NB: Resource servers MUST accept tokens via the Authorization scheme
     * (http://tools.ietf.org/html/rfc6750#section-2).
     *
     * @param \\OAuth2\\RequestInterface request
     * @param \\OAuth2\\ResponseInterface request
     * @return string
     * @todo Should we enforce TLS/SSL in this function?
     *
     * @see http://tools.ietf.org/html/rfc6750#section-2.1
     * @see http://tools.ietf.org/html/rfc6750#section-2.2
     * @see http://tools.ietf.org/html/rfc6750#section-2.3
     *
     * Old Android version bug (at least with version 2.2)
     * @see http://code.google.com/p/android/issues/detail?id=6684
     *
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                'line' => 70,
                'char' => 113,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
                'line' => 71,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
            'line' => 71,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
          'line' => 70,
          'last-line' => 129,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
      'line' => 12,
      'char' => 5,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/tokentype/bearer.zep',
    'line' => 12,
    'char' => 5,
  ),
);