<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * @see OAuth2\\Controller\\ResourceControllerInterface
 *',
    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
    'line' => 6,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\Controller',
    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
    'line' => 8,
    'char' => 3,
  ),
  2 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\TokenType\\TokenTypeInterface',
        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
        'line' => 8,
        'char' => 40,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
    'line' => 9,
    'char' => 3,
  ),
  3 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Storage\\AccessTokenInterface',
        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
        'line' => 9,
        'char' => 40,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
    'line' => 10,
    'char' => 3,
  ),
  4 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\ScopeInterface',
        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
        'line' => 10,
        'char' => 26,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
    'line' => 11,
    'char' => 3,
  ),
  5 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\RequestInterface',
        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
        'line' => 11,
        'char' => 28,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
    'line' => 12,
    'char' => 3,
  ),
  6 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\ResponseInterface',
        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
        'line' => 12,
        'char' => 29,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
    'line' => 13,
    'char' => 3,
  ),
  7 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Scope',
        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
        'line' => 13,
        'char' => 17,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
    'line' => 15,
    'char' => 5,
  ),
  8 => 
  array (
    'type' => 'class',
    'name' => 'ResourceController',
    'abstract' => 0,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'ResourceControllerInterface',
        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
        'line' => 16,
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
          'name' => 'token',
          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
          'line' => 18,
          'char' => 13,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'tokenType',
          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
          'line' => 19,
          'char' => 13,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'tokenStorage',
          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
          'line' => 20,
          'char' => 13,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'config',
          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
          'line' => 21,
          'char' => 13,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'scopeUtil',
          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
          'line' => 23,
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
              'name' => 'tokenType',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'TokenTypeInterface',
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 23,
                'char' => 62,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 23,
              'char' => 63,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'tokenStorage',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'AccessTokenInterface',
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 23,
                'char' => 99,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 23,
              'char' => 100,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'config',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 23,
                'char' => 119,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 23,
              'char' => 119,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'scopeUtil',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'ScopeInterface',
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 23,
                'char' => 146,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 23,
                'char' => 154,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 23,
              'char' => 154,
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
                  'property' => 'tokenType',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'tokenType',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                    'line' => 25,
                    'char' => 40,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 25,
                  'char' => 40,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 26,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'tokenStorage',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'tokenStorage',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                    'line' => 26,
                    'char' => 46,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 26,
                  'char' => 46,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 28,
              'char' => 11,
            ),
            2 => 
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
                                'value' => 'www_realm',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                'line' => 29,
                                'char' => 24,
                              ),
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => 'Service',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                'line' => 30,
                                'char' => 9,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 30,
                              'char' => 9,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 30,
                          'char' => 10,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 30,
                        'char' => 10,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 30,
                          'char' => 18,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 30,
                        'char' => 18,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                    'line' => 30,
                    'char' => 19,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 30,
                  'char' => 19,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 32,
              'char' => 10,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'scopeUtil',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                    'line' => 32,
                    'char' => 30,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 32,
                  'char' => 30,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'null',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 32,
                  'char' => 39,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 32,
                'char' => 39,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\LogicException',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'string',
                            'value' => 'Must pass a scope to ',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 33,
                            'char' => 63,
                          ),
                          'right' => 
                          array (
                            'type' => 'constant',
                            'value' => '__METHOD__',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 33,
                            'char' => 75,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 33,
                          'char' => 75,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 33,
                        'char' => 75,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                    'line' => 33,
                    'char' => 76,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 35,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 37,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'scopeUtil',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'scopeUtil',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                    'line' => 37,
                    'char' => 40,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 37,
                  'char' => 40,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 38,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
          'line' => 23,
          'last-line' => 40,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'verifyResourceRequest',
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 40,
                'char' => 68,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 40,
              'char' => 69,
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 40,
                'char' => 98,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 40,
              'char' => 99,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'scope',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 40,
                'char' => 121,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 40,
              'char' => 121,
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
                  'variable' => 'token',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                    'line' => 42,
                    'char' => 26,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 42,
                  'char' => 26,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 44,
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
                  'variable' => 'token',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                      'line' => 44,
                      'char' => 26,
                    ),
                    'name' => 'getAccessTokenData',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'request',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 44,
                          'char' => 53,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 44,
                        'char' => 53,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 44,
                          'char' => 63,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 44,
                        'char' => 63,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                    'line' => 44,
                    'char' => 64,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 44,
                  'char' => 64,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 47,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'token',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 47,
                  'char' => 19,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 47,
                  'char' => 26,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 47,
                'char' => 26,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                    'line' => 48,
                    'char' => 25,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 49,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 54,
              'char' => 10,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'scope',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 54,
                  'char' => 19,
                ),
                'right' => 
                array (
                  'type' => 'list',
                  'left' => 
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
                          'type' => 'isset',
                          'left' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'token',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 54,
                              'char' => 34,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'scope',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 54,
                              'char' => 42,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 54,
                            'char' => 45,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 54,
                          'char' => 45,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 54,
                        'char' => 45,
                      ),
                      'right' => 
                      array (
                        'type' => 'not',
                        'left' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'token',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 54,
                            'char' => 53,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'scope',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 54,
                            'char' => 61,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 54,
                          'char' => 64,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 54,
                        'char' => 64,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                      'line' => 54,
                      'char' => 64,
                    ),
                    'right' => 
                    array (
                      'type' => 'not',
                      'left' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 54,
                            'char' => 72,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'scopeUtil',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 54,
                            'char' => 83,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 54,
                          'char' => 83,
                        ),
                        'name' => 'checkScope',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'scope',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 54,
                              'char' => 100,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 54,
                            'char' => 100,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'token',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                'line' => 54,
                                'char' => 107,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'scope',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                'line' => 54,
                                'char' => 115,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 54,
                              'char' => 116,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 54,
                            'char' => 116,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 54,
                        'char' => 117,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                      'line' => 54,
                      'char' => 117,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                    'line' => 54,
                    'char' => 117,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 54,
                  'char' => 119,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 54,
                'char' => 119,
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
                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                      'line' => 55,
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
                          'value' => '403',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 55,
                          'char' => 35,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 55,
                        'char' => 35,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'insufficient_scope',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 55,
                          'char' => 57,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 55,
                        'char' => 57,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'The request requires higher privileges than provided by the access token',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 55,
                          'char' => 133,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 55,
                        'char' => 133,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                    'line' => 55,
                    'char' => 134,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 56,
                  'char' => 20,
                ),
                1 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'response',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                      'line' => 56,
                      'char' => 22,
                    ),
                    'name' => 'addHttpHeaders',
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
                                'value' => 'WWW-Authenticate',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                'line' => 57,
                                'char' => 35,
                              ),
                              'value' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'sprintf',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'string',
                                      'value' => '%s realm=\\"%s\\", scope=\\"%s\\", error=\\"%s\\", error_description=\\"%s\\"',
                                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                      'line' => 58,
                                      'char' => 92,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                    'line' => 58,
                                    'char' => 92,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'mcall',
                                      'variable' => 
                                      array (
                                        'type' => 'property-access',
                                        'left' => 
                                        array (
                                          'type' => 'variable',
                                          'value' => 'this',
                                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                          'line' => 59,
                                          'char' => 26,
                                        ),
                                        'right' => 
                                        array (
                                          'type' => 'variable',
                                          'value' => 'tokenType',
                                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                          'line' => 59,
                                          'char' => 37,
                                        ),
                                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                        'line' => 59,
                                        'char' => 37,
                                      ),
                                      'name' => 'getTokenType',
                                      'call-type' => 1,
                                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                      'line' => 59,
                                      'char' => 52,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                    'line' => 59,
                                    'char' => 52,
                                  ),
                                  2 => 
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
                                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                          'line' => 60,
                                          'char' => 26,
                                        ),
                                        'right' => 
                                        array (
                                          'type' => 'variable',
                                          'value' => 'config',
                                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                          'line' => 60,
                                          'char' => 33,
                                        ),
                                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                        'line' => 60,
                                        'char' => 33,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'string',
                                        'value' => 'www_realm',
                                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                        'line' => 60,
                                        'char' => 45,
                                      ),
                                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                      'line' => 60,
                                      'char' => 46,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                    'line' => 60,
                                    'char' => 46,
                                  ),
                                  3 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'scope',
                                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                      'line' => 61,
                                      'char' => 26,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                    'line' => 61,
                                    'char' => 26,
                                  ),
                                  4 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'mcall',
                                      'variable' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'response',
                                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                        'line' => 62,
                                        'char' => 30,
                                      ),
                                      'name' => 'getParameter',
                                      'call-type' => 1,
                                      'parameters' => 
                                      array (
                                        0 => 
                                        array (
                                          'parameter' => 
                                          array (
                                            'type' => 'string',
                                            'value' => 'error',
                                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                            'line' => 62,
                                            'char' => 51,
                                          ),
                                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                          'line' => 62,
                                          'char' => 51,
                                        ),
                                      ),
                                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                      'line' => 62,
                                      'char' => 52,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                    'line' => 62,
                                    'char' => 52,
                                  ),
                                  5 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'mcall',
                                      'variable' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'response',
                                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                        'line' => 63,
                                        'char' => 30,
                                      ),
                                      'name' => 'getParameter',
                                      'call-type' => 1,
                                      'parameters' => 
                                      array (
                                        0 => 
                                        array (
                                          'parameter' => 
                                          array (
                                            'type' => 'string',
                                            'value' => 'error_description',
                                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                            'line' => 63,
                                            'char' => 63,
                                          ),
                                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                          'line' => 63,
                                          'char' => 63,
                                        ),
                                      ),
                                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                      'line' => 64,
                                      'char' => 17,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                    'line' => 64,
                                    'char' => 17,
                                  ),
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                'line' => 65,
                                'char' => 13,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 65,
                              'char' => 13,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 65,
                          'char' => 14,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 65,
                        'char' => 14,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                    'line' => 65,
                    'char' => 15,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 67,
                  'char' => 18,
                ),
                2 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                    'line' => 67,
                    'char' => 25,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 68,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 71,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'token',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'token',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                    'line' => 71,
                    'char' => 32,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 71,
                  'char' => 32,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 73,
              'char' => 14,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'token',
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 73,
                'char' => 21,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 74,
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
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 41,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
            'line' => 41,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
          'line' => 40,
          'last-line' => 76,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getAccessTokenData',
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 76,
                'char' => 65,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 76,
              'char' => 66,
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 76,
                'char' => 95,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 76,
              'char' => 96,
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
                  'variable' => 'token_param',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 78,
                  'char' => 24,
                ),
                1 => 
                array (
                  'variable' => 'token',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 78,
                  'char' => 31,
                ),
                2 => 
                array (
                  'variable' => 'authHeader',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                    'line' => 78,
                    'char' => 48,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 78,
                  'char' => 48,
                ),
                3 => 
                array (
                  'variable' => 'error',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 78,
                  'char' => 55,
                ),
                4 => 
                array (
                  'variable' => 'error_description',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 78,
                  'char' => 74,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 81,
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
                  'variable' => 'token_param',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 81,
                        'char' => 32,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'tokenType',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 81,
                        'char' => 43,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                      'line' => 81,
                      'char' => 43,
                    ),
                    'name' => 'getAccessTokenParameter',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'request',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 81,
                          'char' => 75,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 81,
                        'char' => 75,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 81,
                          'char' => 85,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 81,
                        'char' => 85,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                    'line' => 81,
                    'char' => 86,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 81,
                  'char' => 86,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 83,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'token_param',
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 83,
                'char' => 24,
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
                      'variable' => 'token',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 87,
                            'char' => 30,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'tokenStorage',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 87,
                            'char' => 44,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 87,
                          'char' => 44,
                        ),
                        'name' => 'getAccessToken',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'token_param',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 87,
                              'char' => 71,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 87,
                            'char' => 71,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 87,
                        'char' => 72,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                      'line' => 87,
                      'char' => 72,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 89,
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
                      'type' => 'variable',
                      'value' => 'token',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                      'line' => 89,
                      'char' => 23,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                    'line' => 89,
                    'char' => 23,
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
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 90,
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
                              'value' => '401',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 90,
                              'char' => 39,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 90,
                            'char' => 39,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'invalid_token',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 90,
                              'char' => 56,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 90,
                            'char' => 56,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'The access token provided is invalid',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 90,
                              'char' => 96,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 90,
                            'char' => 96,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 90,
                        'char' => 97,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                      'line' => 91,
                      'char' => 13,
                    ),
                  ),
                  'elseif_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'or',
                        'left' => 
                        array (
                          'type' => 'not',
                          'left' => 
                          array (
                            'type' => 'isset',
                            'left' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'token',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                'line' => 91,
                                'char' => 34,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'expires',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                'line' => 91,
                                'char' => 44,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 91,
                              'char' => 47,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 91,
                            'char' => 47,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 91,
                          'char' => 47,
                        ),
                        'right' => 
                        array (
                          'type' => 'not',
                          'left' => 
                          array (
                            'type' => 'isset',
                            'left' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'token',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                'line' => 91,
                                'char' => 61,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'client_id',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                'line' => 91,
                                'char' => 73,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 91,
                              'char' => 75,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 91,
                            'char' => 75,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 91,
                          'char' => 75,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 91,
                        'char' => 75,
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
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 92,
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
                                  'value' => '401',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                  'line' => 92,
                                  'char' => 39,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                'line' => 92,
                                'char' => 39,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'malformed_token',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                  'line' => 92,
                                  'char' => 58,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                'line' => 92,
                                'char' => 58,
                              ),
                              2 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'Malformed token (missing \'expires\')',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                  'line' => 92,
                                  'char' => 97,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                'line' => 92,
                                'char' => 97,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 92,
                            'char' => 98,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 93,
                          'char' => 13,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                      'line' => 93,
                      'char' => 20,
                    ),
                    1 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'and',
                        'left' => 
                        array (
                          'type' => 'isset',
                          'left' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'token',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 93,
                              'char' => 33,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'expires',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 93,
                              'char' => 43,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 93,
                            'char' => 46,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 93,
                          'char' => 46,
                        ),
                        'right' => 
                        array (
                          'type' => 'greater',
                          'left' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'time',
                            'call-type' => 1,
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 93,
                            'char' => 55,
                          ),
                          'right' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'token',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 93,
                              'char' => 62,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'expires',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 93,
                              'char' => 72,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 93,
                            'char' => 74,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 93,
                          'char' => 74,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 93,
                        'char' => 74,
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
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 94,
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
                                  'value' => '401',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                  'line' => 94,
                                  'char' => 39,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                'line' => 94,
                                'char' => 39,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'expired_token',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                  'line' => 94,
                                  'char' => 56,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                'line' => 94,
                                'char' => 56,
                              ),
                              2 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'The access token provided has expired',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                  'line' => 94,
                                  'char' => 97,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                'line' => 94,
                                'char' => 97,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 94,
                            'char' => 98,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 95,
                          'char' => 13,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                      'line' => 95,
                      'char' => 18,
                    ),
                  ),
                  'else_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'token',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 96,
                        'char' => 29,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                      'line' => 97,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 98,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 100,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'authHeader',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'sprintf',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => '%s realm=\\"%s\\"',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 101,
                          'char' => 30,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 101,
                        'char' => 30,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 102,
                              'char' => 18,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'tokenType',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 102,
                              'char' => 29,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 102,
                            'char' => 29,
                          ),
                          'name' => 'getTokenType',
                          'call-type' => 1,
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 102,
                          'char' => 44,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 102,
                        'char' => 44,
                      ),
                      2 => 
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
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 103,
                              'char' => 18,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'config',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 103,
                              'char' => 25,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 103,
                            'char' => 25,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'www_realm',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 103,
                            'char' => 37,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 104,
                          'char' => 9,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 104,
                        'char' => 9,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                    'line' => 104,
                    'char' => 10,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 104,
                  'char' => 10,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 106,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'error',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'response',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                      'line' => 106,
                      'char' => 30,
                    ),
                    'name' => 'getParameter',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'error',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 106,
                          'char' => 51,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 106,
                        'char' => 51,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                    'line' => 106,
                    'char' => 52,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 106,
                  'char' => 52,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 108,
              'char' => 10,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'error',
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 108,
                'char' => 18,
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
                      'variable' => 'authHeader',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'sprintf',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => '%s, error=\\"%s\\"',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 110,
                              'char' => 35,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 110,
                            'char' => 35,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'authHeader',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 111,
                              'char' => 27,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 111,
                            'char' => 27,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'error',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 113,
                              'char' => 13,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 113,
                            'char' => 13,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 113,
                        'char' => 14,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                      'line' => 113,
                      'char' => 14,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 115,
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
                      'variable' => 'error_description',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 115,
                          'char' => 46,
                        ),
                        'name' => 'getParameter',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'error_description',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                              'line' => 115,
                              'char' => 79,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 115,
                            'char' => 79,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                        'line' => 115,
                        'char' => 80,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                      'line' => 115,
                      'char' => 80,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 116,
                  'char' => 14,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'error_description',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                    'line' => 116,
                    'char' => 34,
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
                          'variable' => 'authHeader',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'sprintf',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => '%s, error_description=\\"%s\\"',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                  'line' => 118,
                                  'char' => 51,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                'line' => 118,
                                'char' => 51,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'authHeader',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                  'line' => 119,
                                  'char' => 31,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                'line' => 119,
                                'char' => 31,
                              ),
                              2 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'error_description',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                  'line' => 121,
                                  'char' => 17,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                                'line' => 121,
                                'char' => 17,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 121,
                            'char' => 18,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 121,
                          'char' => 18,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                      'line' => 122,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 123,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 125,
              'char' => 16,
            ),
            6 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'response',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 125,
                  'char' => 18,
                ),
                'name' => 'addHttpHeaders',
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
                            'value' => 'WWW-Authenticate',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 125,
                            'char' => 53,
                          ),
                          'value' => 
                          array (
                            'type' => 'variable',
                            'value' => 'authHeader',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                            'line' => 125,
                            'char' => 65,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                          'line' => 125,
                          'char' => 65,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                      'line' => 125,
                      'char' => 66,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                    'line' => 125,
                    'char' => 66,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 125,
                'char' => 67,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 127,
              'char' => 14,
            ),
            7 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 127,
                'char' => 20,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 128,
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
                'data-type' => 'array',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 76,
                'char' => 107,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 77,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
            'line' => 77,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
          'line' => 76,
          'last-line' => 131,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getToken',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 133,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'token',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                  'line' => 133,
                  'char' => 27,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 133,
                'char' => 27,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
              'line' => 134,
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
                'data-type' => 'array',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
                'line' => 132,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
            'line' => 132,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
          'line' => 131,
          'last-line' => 135,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
      'line' => 15,
      'char' => 5,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontroller.zep',
    'line' => 15,
    'char' => 5,
  ),
);