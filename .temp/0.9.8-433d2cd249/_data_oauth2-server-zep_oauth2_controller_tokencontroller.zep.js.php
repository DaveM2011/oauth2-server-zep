<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * @see OAuth2\\Controller\\TokenControllerInterface
 *',
    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
    'line' => 5,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\Controller',
    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
    'line' => 7,
    'char' => 3,
  ),
  2 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\ResponseType\\AccessTokenInterface',
        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
        'line' => 7,
        'char' => 45,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
    'line' => 8,
    'char' => 3,
  ),
  3 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\ClientAssertionType\\ClientAssertionTypeInterface',
        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
        'line' => 8,
        'char' => 60,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
    'line' => 9,
    'char' => 3,
  ),
  4 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\GrantType\\GrantTypeInterface',
        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
        'line' => 9,
        'char' => 40,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
    'line' => 10,
    'char' => 3,
  ),
  5 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\ScopeInterface',
        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
        'line' => 10,
        'char' => 26,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
    'line' => 11,
    'char' => 3,
  ),
  6 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Scope',
        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
        'line' => 11,
        'char' => 17,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
    'line' => 12,
    'char' => 3,
  ),
  7 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Storage\\ClientInterface',
        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
        'line' => 12,
        'char' => 35,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
    'line' => 13,
    'char' => 3,
  ),
  8 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\RequestInterface',
        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
        'line' => 13,
        'char' => 28,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
    'line' => 14,
    'char' => 3,
  ),
  9 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\ResponseInterface',
        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
        'line' => 14,
        'char' => 29,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
    'line' => 16,
    'char' => 5,
  ),
  10 => 
  array (
    'type' => 'class',
    'name' => 'TokenController',
    'abstract' => 0,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'TokenControllerInterface',
        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
        'line' => 17,
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
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'accessToken',
          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
          'line' => 19,
          'char' => 13,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'grantTypes',
          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
          'line' => 20,
          'char' => 13,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'clientAssertionType',
          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
          'line' => 21,
          'char' => 13,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'scopeUtil',
          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
          'line' => 22,
          'char' => 13,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'clientStorage',
          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
          'line' => 24,
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
              'name' => 'accessToken',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'AccessTokenInterface',
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 24,
                'char' => 66,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 24,
              'char' => 67,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'clientStorage',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'ClientInterface',
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 24,
                'char' => 99,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 24,
              'char' => 100,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'grantTypes',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 24,
                'char' => 123,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 24,
              'char' => 123,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'clientAssertionType',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'ClientAssertionTypeInterface',
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 24,
                'char' => 174,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 24,
                'char' => 182,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 24,
              'char' => 182,
            ),
            4 => 
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 24,
                'char' => 209,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 24,
                'char' => 217,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 24,
              'char' => 217,
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
                  'variable' => 'grantType',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 26,
                  'char' => 22,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 28,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'clientAssertionType',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 28,
                  'char' => 33,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 28,
                  'char' => 40,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 28,
                'char' => 40,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'grantTypes',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 29,
                    'char' => 41,
                  ),
                  'value' => 'grantType',
                  'reverse' => 0,
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
                          'type' => 'list',
                          'left' => 
                          array (
                            'type' => 'instanceof',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'grantType',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 30,
                              'char' => 41,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'ClientAssertionTypeInterface',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 30,
                              'char' => 71,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 30,
                            'char' => 71,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 30,
                          'char' => 73,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 30,
                        'char' => 73,
                      ),
                      'statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'throw',
                          'expr' => 
                          array (
                            'type' => 'new',
                            'class' => '\\InvalidArgumentException',
                            'dynamic' => 0,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'You must supply an instance of OAuth2\\\\ClientAssertionType\\\\ClientAssertionTypeInterface or only use grant types which implement OAuth2\\\\ClientAssertionType\\\\ClientAssertionTypeInterface',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                  'line' => 31,
                                  'char' => 245,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 31,
                                'char' => 245,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 31,
                            'char' => 246,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 32,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 33,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 34,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 36,
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
                  'property' => 'clientAssertionType',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'clientAssertionType',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 36,
                    'char' => 60,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 36,
                  'char' => 60,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 37,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'accessToken',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'accessToken',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 37,
                    'char' => 44,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 37,
                  'char' => 44,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 38,
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
                  'property' => 'clientStorage',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'clientStorage',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 38,
                    'char' => 48,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 38,
                  'char' => 48,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 40,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'grantTypes',
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 40,
                'char' => 37,
              ),
              'value' => 'grantType',
              'reverse' => 0,
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
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 41,
                      'char' => 18,
                    ),
                    'name' => 'addGrantType',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'grantType',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 41,
                          'char' => 41,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 41,
                        'char' => 41,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 41,
                    'char' => 42,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 42,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 44,
              'char' => 10,
            ),
            6 => 
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
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 44,
                    'char' => 30,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 44,
                  'char' => 30,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'null',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 44,
                  'char' => 39,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 44,
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
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 45,
                            'char' => 63,
                          ),
                          'right' => 
                          array (
                            'type' => 'constant',
                            'value' => '__METHOD__',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 45,
                            'char' => 75,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 45,
                          'char' => 75,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 45,
                        'char' => 75,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 45,
                    'char' => 76,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 47,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 49,
              'char' => 11,
            ),
            7 => 
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
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 49,
                    'char' => 40,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 49,
                  'char' => 40,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 50,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
          'line' => 24,
          'last-line' => 52,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'handleTokenRequest',
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 52,
                'char' => 65,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 52,
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 52,
                'char' => 95,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 52,
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
                  'variable' => 'token',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 54,
                  'char' => 18,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 56,
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
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 56,
                      'char' => 26,
                    ),
                    'name' => 'grantAccessToken',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'request',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 56,
                          'char' => 51,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 56,
                        'char' => 51,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 56,
                          'char' => 61,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 56,
                        'char' => 61,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 56,
                    'char' => 62,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 56,
                  'char' => 62,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 57,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'token',
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 57,
                'char' => 18,
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
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 60,
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
                          'value' => '200',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 60,
                          'char' => 40,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 60,
                        'char' => 40,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 60,
                    'char' => 41,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 61,
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
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 61,
                      'char' => 22,
                    ),
                    'name' => 'addParameters',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'token',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 61,
                          'char' => 42,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 61,
                        'char' => 42,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 61,
                    'char' => 43,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 62,
                  'char' => 20,
                ),
                2 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'response',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 62,
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
                                'value' => 'Cache-Control',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 62,
                                'char' => 54,
                              ),
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => 'no-store',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 62,
                                'char' => 66,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 62,
                              'char' => 66,
                            ),
                            1 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'Pragma',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 62,
                                'char' => 76,
                              ),
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => 'no-cache',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 62,
                                'char' => 88,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 62,
                              'char' => 88,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 62,
                          'char' => 89,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 62,
                        'char' => 89,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 62,
                    'char' => 90,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 63,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 64,
              'char' => 5,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
            'line' => 53,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
          'line' => 52,
          'last-line' => 82,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'grantAccessToken',
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 83,
                'char' => 63,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 83,
              'char' => 64,
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 83,
                'char' => 93,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 83,
              'char' => 94,
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
                  'variable' => 'grantTypeIdentifier',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 85,
                  'char' => 32,
                ),
                1 => 
                array (
                  'variable' => 'grantType',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 85,
                  'char' => 43,
                ),
                2 => 
                array (
                  'variable' => 'clientId',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 85,
                  'char' => 53,
                ),
                3 => 
                array (
                  'variable' => 'storedClientId',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 85,
                  'char' => 69,
                ),
                4 => 
                array (
                  'variable' => 'requestedScope',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 86,
                  'char' => 27,
                ),
                5 => 
                array (
                  'variable' => 'availableScope',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 86,
                  'char' => 43,
                ),
                6 => 
                array (
                  'variable' => 'clientScope',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 86,
                  'char' => 56,
                ),
                7 => 
                array (
                  'variable' => 'defaultScope',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 86,
                  'char' => 70,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 88,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-equals',
                'left' => 
                array (
                  'type' => 'fcall',
                  'name' => 'strtolower',
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
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 88,
                          'char' => 31,
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
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 88,
                              'char' => 55,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 88,
                            'char' => 55,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 88,
                        'char' => 56,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 88,
                      'char' => 56,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 88,
                  'char' => 59,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'post',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 88,
                  'char' => 68,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 88,
                'char' => 68,
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
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 89,
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
                          'value' => '405',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 89,
                          'char' => 35,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 89,
                        'char' => 35,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'invalid_request',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 89,
                          'char' => 54,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 89,
                        'char' => 54,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'The request method must be POST when requesting an access token',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 89,
                          'char' => 121,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 89,
                        'char' => 121,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => '#section-3.2',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 89,
                          'char' => 137,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 89,
                        'char' => 137,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 89,
                    'char' => 138,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 90,
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
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 90,
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
                                'value' => 'Allow',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 90,
                                'char' => 46,
                              ),
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => 'POST',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 90,
                                'char' => 54,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 90,
                              'char' => 54,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 90,
                          'char' => 55,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 90,
                        'char' => 55,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 90,
                    'char' => 56,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 91,
                  'char' => 18,
                ),
                2 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 91,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 92,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 95,
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
                  'variable' => 'grantTypeIdentifier',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'request',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 95,
                      'char' => 43,
                    ),
                    'name' => 'request',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'grant_type',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 95,
                          'char' => 64,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 95,
                        'char' => 64,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 95,
                    'char' => 65,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 95,
                  'char' => 65,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 96,
              'char' => 10,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'grantTypeIdentifier',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 96,
                  'char' => 33,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 96,
                'char' => 33,
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
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 97,
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
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 97,
                          'char' => 35,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 97,
                        'char' => 35,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'invalid_request',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 97,
                          'char' => 54,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 97,
                        'char' => 54,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'The grant type was not specified in the request',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 97,
                          'char' => 105,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 97,
                        'char' => 105,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 97,
                    'char' => 106,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 98,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 98,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 99,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 101,
              'char' => 10,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
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
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 101,
                        'char' => 24,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'grantTypes',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 101,
                        'char' => 35,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 101,
                      'char' => 35,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'grantTypeIdentifier',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 101,
                      'char' => 55,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 101,
                    'char' => 57,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 101,
                  'char' => 57,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 101,
                'char' => 57,
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
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 104,
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
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 104,
                          'char' => 35,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 104,
                        'char' => 35,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'unsupported_grant_type',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 104,
                          'char' => 61,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 104,
                        'char' => 61,
                      ),
                      2 => 
                      array (
                        'parameter' => 
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
                                'value' => 'Grant type \'%s\' not supported',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 104,
                                'char' => 102,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 104,
                              'char' => 102,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'grantTypeIdentifier',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 104,
                                'char' => 123,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 104,
                              'char' => 123,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 104,
                          'char' => 124,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 104,
                        'char' => 124,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 104,
                    'char' => 125,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 105,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 105,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 106,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 108,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'grantType',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 108,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'grantTypes',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 108,
                        'char' => 41,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 108,
                      'char' => 41,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'grantTypeIdentifier',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 108,
                      'char' => 61,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 108,
                    'char' => 62,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 108,
                  'char' => 62,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 115,
              'char' => 10,
            ),
            6 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'list',
                  'left' => 
                  array (
                    'type' => 'instanceof',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'grantType',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 115,
                      'char' => 33,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'ClientAssertionTypeInterface',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 115,
                      'char' => 63,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 115,
                    'char' => 63,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 115,
                  'char' => 65,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 115,
                'char' => 65,
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
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 116,
                          'char' => 22,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'clientAssertionType',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 116,
                          'char' => 43,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 116,
                        'char' => 43,
                      ),
                      'name' => 'validateRequest',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'request',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 116,
                            'char' => 67,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 116,
                          'char' => 67,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'response',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 116,
                            'char' => 77,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 116,
                          'char' => 77,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 116,
                      'char' => 79,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 116,
                    'char' => 79,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'null',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 117,
                        'char' => 28,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 118,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 119,
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
                      'variable' => 'clientId',
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
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 119,
                            'char' => 33,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'clientAssertionType',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 119,
                            'char' => 54,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 119,
                          'char' => 54,
                        ),
                        'name' => 'getClientId',
                        'call-type' => 1,
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 119,
                        'char' => 68,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 119,
                      'char' => 68,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 120,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 125,
              'char' => 10,
            ),
            7 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'grantType',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 125,
                    'char' => 23,
                  ),
                  'name' => 'validateRequest',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'request',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 125,
                        'char' => 47,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 125,
                      'char' => 47,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'response',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 125,
                        'char' => 57,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 125,
                      'char' => 57,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 125,
                  'char' => 59,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 125,
                'char' => 59,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 126,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 127,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 129,
              'char' => 10,
            ),
            8 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'instanceof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'grantType',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 129,
                    'char' => 32,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'ClientAssertionTypeInterface',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 129,
                    'char' => 62,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 129,
                  'char' => 62,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 129,
                'char' => 64,
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
                      'variable' => 'clientId',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'grantType',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 130,
                          'char' => 38,
                        ),
                        'name' => 'getClientId',
                        'call-type' => 1,
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 130,
                        'char' => 52,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 130,
                      'char' => 52,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 131,
                  'char' => 9,
                ),
              ),
              'else_statements' => 
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
                      'variable' => 'storedClientId',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'grantType',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 133,
                          'char' => 44,
                        ),
                        'name' => 'getClientId',
                        'call-type' => 1,
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 133,
                        'char' => 58,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 133,
                      'char' => 58,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 134,
                  'char' => 14,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'and',
                    'left' => 
                    array (
                      'type' => 'not-equals',
                      'left' => 
                      array (
                        'type' => 'typeof',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'storedClientId',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 134,
                          'char' => 39,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 134,
                        'char' => 39,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'null',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 134,
                        'char' => 49,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 134,
                      'char' => 49,
                    ),
                    'right' => 
                    array (
                      'type' => 'not-equals',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'storedClientId',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 134,
                        'char' => 67,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'clientId',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 134,
                        'char' => 78,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 134,
                      'char' => 78,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 134,
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
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 135,
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
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 135,
                              'char' => 39,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 135,
                            'char' => 39,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'invalid_grant',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 135,
                              'char' => 56,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 135,
                            'char' => 56,
                          ),
                          2 => 
                          array (
                            'parameter' => 
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
                                    'value' => '%s doesn\'t exist or is invalid for the client',
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                    'line' => 135,
                                    'char' => 113,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                  'line' => 135,
                                  'char' => 113,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'grantTypeIdentifier',
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                    'line' => 135,
                                    'char' => 134,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                  'line' => 135,
                                  'char' => 134,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 135,
                              'char' => 135,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 135,
                            'char' => 135,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 135,
                        'char' => 136,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 136,
                      'char' => 22,
                    ),
                    1 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'null',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 136,
                        'char' => 28,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 137,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 138,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 141,
              'char' => 10,
            ),
            9 => 
            array (
              'type' => 'if',
              'expr' => 
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
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 141,
                      'char' => 18,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'clientStorage',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 141,
                      'char' => 33,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 141,
                    'char' => 33,
                  ),
                  'name' => 'checkRestrictedGrantType',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'clientId',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 141,
                        'char' => 67,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 141,
                      'char' => 67,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'grantTypeIdentifier',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 141,
                        'char' => 88,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 141,
                      'char' => 88,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 141,
                  'char' => 90,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 141,
                'char' => 90,
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
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 142,
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
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 142,
                          'char' => 35,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 142,
                        'char' => 35,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'unauthorized_client',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 142,
                          'char' => 58,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 142,
                        'char' => 58,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'The grant type is unauthorized for this client_id',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 142,
                          'char' => 111,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 142,
                        'char' => 111,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 142,
                    'char' => 112,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 143,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 143,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 144,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 157,
              'char' => 11,
            ),
            10 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'requestedScope',
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
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 157,
                        'char' => 35,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'scopeUtil',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 157,
                        'char' => 46,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 157,
                      'char' => 46,
                    ),
                    'name' => 'getScopeFromRequest',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'request',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 157,
                          'char' => 74,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 157,
                        'char' => 74,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 157,
                    'char' => 75,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 157,
                  'char' => 75,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 158,
              'char' => 11,
            ),
            11 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'availableScope',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'grantType',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 158,
                      'char' => 40,
                    ),
                    'name' => 'getScope',
                    'call-type' => 1,
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 158,
                    'char' => 51,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 158,
                  'char' => 51,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 160,
              'char' => 10,
            ),
            12 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'requestedScope',
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 160,
                'char' => 27,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'availableScope',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 162,
                    'char' => 31,
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
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 163,
                              'char' => 26,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'scopeUtil',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 163,
                              'char' => 37,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 163,
                            'char' => 37,
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
                                'value' => 'requestedScope',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 163,
                                'char' => 63,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 163,
                              'char' => 63,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'availableScope',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 163,
                                'char' => 79,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 163,
                              'char' => 79,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 163,
                          'char' => 81,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 163,
                        'char' => 81,
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
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 164,
                              'char' => 30,
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
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                  'line' => 164,
                                  'char' => 43,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 164,
                                'char' => 43,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'invalid_scope',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                  'line' => 164,
                                  'char' => 60,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 164,
                                'char' => 60,
                              ),
                              2 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'The scope requested is invalid for this request',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                  'line' => 164,
                                  'char' => 111,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 164,
                                'char' => 111,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 164,
                            'char' => 112,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 165,
                          'char' => 26,
                        ),
                        1 => 
                        array (
                          'type' => 'return',
                          'expr' => 
                          array (
                            'type' => 'null',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 165,
                            'char' => 32,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 166,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 167,
                      'char' => 13,
                    ),
                  ),
                  'else_statements' => 
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
                          'variable' => 'clientScope',
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
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 169,
                                'char' => 40,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'clientStorage',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 169,
                                'char' => 55,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 169,
                              'char' => 55,
                            ),
                            'name' => 'getClientScope',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'clientId',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                  'line' => 169,
                                  'char' => 79,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 169,
                                'char' => 79,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 169,
                            'char' => 80,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 169,
                          'char' => 80,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 170,
                      'char' => 18,
                    ),
                    1 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'clientScope',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 170,
                        'char' => 32,
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
                              'type' => 'mcall',
                              'variable' => 
                              array (
                                'type' => 'property-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'this',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                  'line' => 171,
                                  'char' => 30,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'scopeUtil',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                  'line' => 171,
                                  'char' => 41,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 171,
                                'char' => 41,
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
                                    'value' => 'requestedScope',
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                    'line' => 171,
                                    'char' => 67,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                  'line' => 171,
                                  'char' => 67,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'clientScope',
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                    'line' => 171,
                                    'char' => 80,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                  'line' => 171,
                                  'char' => 80,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 171,
                              'char' => 82,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 171,
                            'char' => 82,
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
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                  'line' => 172,
                                  'char' => 34,
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
                                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                      'line' => 172,
                                      'char' => 47,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                    'line' => 172,
                                    'char' => 47,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'invalid_scope',
                                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                      'line' => 172,
                                      'char' => 64,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                    'line' => 172,
                                    'char' => 64,
                                  ),
                                  2 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'The scope requested is invalid for this client',
                                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                      'line' => 172,
                                      'char' => 114,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                    'line' => 172,
                                    'char' => 114,
                                  ),
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 172,
                                'char' => 115,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 173,
                              'char' => 30,
                            ),
                            1 => 
                            array (
                              'type' => 'return',
                              'expr' => 
                              array (
                                'type' => 'null',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 173,
                                'char' => 36,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 174,
                              'char' => 21,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 175,
                          'char' => 17,
                        ),
                      ),
                      'elseif_statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'if',
                          'expr' => 
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
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                  'line' => 175,
                                  'char' => 32,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'scopeUtil',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                  'line' => 175,
                                  'char' => 43,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 175,
                                'char' => 43,
                              ),
                              'name' => 'scopeExists',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'requestedScope',
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                    'line' => 175,
                                    'char' => 70,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                  'line' => 175,
                                  'char' => 70,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 175,
                              'char' => 72,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 175,
                            'char' => 72,
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
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                  'line' => 176,
                                  'char' => 30,
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
                                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                      'line' => 176,
                                      'char' => 43,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                    'line' => 176,
                                    'char' => 43,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'invalid_scope',
                                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                      'line' => 176,
                                      'char' => 60,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                    'line' => 176,
                                    'char' => 60,
                                  ),
                                  2 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'An unsupported scope was requested',
                                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                      'line' => 176,
                                      'char' => 98,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                    'line' => 176,
                                    'char' => 98,
                                  ),
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 176,
                                'char' => 99,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 177,
                              'char' => 26,
                            ),
                            1 => 
                            array (
                              'type' => 'return',
                              'expr' => 
                              array (
                                'type' => 'null',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                                'line' => 177,
                                'char' => 32,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 178,
                              'char' => 17,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 179,
                          'char' => 13,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 179,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 180,
                  'char' => 9,
                ),
              ),
              'elseif_statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'availableScope',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 180,
                    'char' => 33,
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
                          'variable' => 'requestedScope',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'availableScope',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 182,
                            'char' => 48,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 182,
                          'char' => 48,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 183,
                      'char' => 9,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 183,
                  'char' => 14,
                ),
              ),
              'else_statements' => 
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
                      'variable' => 'defaultScope',
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
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 185,
                            'char' => 37,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'scopeUtil',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 185,
                            'char' => 48,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 185,
                          'char' => 48,
                        ),
                        'name' => 'getDefaultScope',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'clientId',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 185,
                              'char' => 73,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 185,
                            'char' => 73,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 185,
                        'char' => 74,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 185,
                      'char' => 74,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 188,
                  'char' => 14,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'identical',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'defaultScope',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 188,
                      'char' => 31,
                    ),
                    'right' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 188,
                      'char' => 39,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 188,
                    'char' => 39,
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
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 189,
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
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 189,
                              'char' => 39,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 189,
                            'char' => 39,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'invalid_scope',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 189,
                              'char' => 56,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 189,
                            'char' => 56,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'This application requires you specify a scope parameter',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                              'line' => 189,
                              'char' => 115,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                            'line' => 189,
                            'char' => 115,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 189,
                        'char' => 116,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 190,
                      'char' => 22,
                    ),
                    1 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'null',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 190,
                        'char' => 28,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 191,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 193,
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
                      'variable' => 'requestedScope',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'defaultScope',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 193,
                        'char' => 46,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 193,
                      'char' => 46,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 194,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 196,
              'char' => 14,
            ),
            13 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'grantType',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 196,
                  'char' => 26,
                ),
                'name' => 'createAccessToken',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 196,
                        'char' => 50,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'accessToken',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 196,
                        'char' => 62,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 196,
                      'char' => 62,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 196,
                    'char' => 62,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'clientId',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 196,
                      'char' => 72,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 196,
                    'char' => 72,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'grantType',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 196,
                        'char' => 84,
                      ),
                      'name' => 'getUserId',
                      'call-type' => 1,
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 196,
                      'char' => 96,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 196,
                    'char' => 96,
                  ),
                  3 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'requestedScope',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 196,
                      'char' => 112,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 196,
                    'char' => 112,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 196,
                'char' => 113,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 197,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Grant or deny a requested access token.
     * This would be called from the "/token" endpoint as defined in the spec.
     * You can call your endpoint whatever you want.
     *
     * @param RequestInterface request Request object to grant access token
     * @param ResponseInterface response
     *
     * @throws InvalidArgumentException
     * @throws LogicException
     *
     * @see http://tools.ietf.org/html/rfc6749#section-4
     * @see http://tools.ietf.org/html/rfc6749#section-10.6
     * @see http://tools.ietf.org/html/rfc6749#section-4.1.3
     *
     * @ingroup oauth2_section_4
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 83,
                'char' => 104,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 84,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
            'line' => 84,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
          'line' => 83,
          'last-line' => 206,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'addGrantType',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'grantType',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'GrantTypeInterface',
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 207,
                'char' => 63,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 207,
              'char' => 64,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'identifier',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 207,
                'char' => 83,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 207,
              'char' => 83,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'or',
                'left' => 
                array (
                  'type' => 'equals',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'identifier',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 210,
                    'char' => 24,
                  ),
                  'right' => 
                  array (
                    'type' => 'null',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 210,
                    'char' => 32,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 210,
                  'char' => 32,
                ),
                'right' => 
                array (
                  'type' => 'fcall',
                  'name' => 'is_numeric',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'identifier',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 210,
                        'char' => 55,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 210,
                      'char' => 55,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 210,
                  'char' => 57,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                'line' => 210,
                'char' => 57,
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
                      'variable' => 'identifier',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'grantType',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                          'line' => 211,
                          'char' => 40,
                        ),
                        'name' => 'getQuerystringIdentifier',
                        'call-type' => 1,
                        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                        'line' => 211,
                        'char' => 67,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 211,
                      'char' => 67,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 212,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 214,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property-array-index',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'grantTypes',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'variable',
                      'value' => 'identifier',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                      'line' => 214,
                      'char' => 40,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'grantType',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                    'line' => 214,
                    'char' => 53,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
                  'line' => 214,
                  'char' => 53,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
              'line' => 215,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * addGrantType
     *
     * @param grantType - OAuth2\\GrantTypeInterface
     * the grant type to add for the specified identifier
     * @param identifier - string
     * a string passed in as "grant_type" in the response that will call this grantType
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
            'line' => 208,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
          'line' => 207,
          'last-line' => 216,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
      'line' => 16,
      'char' => 5,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontroller.zep',
    'line' => 16,
    'char' => 5,
  ),
);