<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * @package \\OAuth2\\GrantType
 * @author Brent Shaffer <bshafs at gmail dot com>
 *',
    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
    'line' => 7,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\GrantType',
    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
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
        'name' => 'OAuth2\\Storage\\UserCredentialsInterface',
        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
        'line' => 9,
        'char' => 44,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
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
        'name' => 'OAuth2\\ResponseType\\AccessTokenInterface',
        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
        'line' => 10,
        'char' => 45,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
    'line' => 11,
    'char' => 3,
  ),
  4 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\RequestInterface',
        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
        'line' => 11,
        'char' => 28,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
    'line' => 12,
    'char' => 3,
  ),
  5 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\ResponseInterface',
        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
        'line' => 12,
        'char' => 29,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
    'line' => 14,
    'char' => 5,
  ),
  6 => 
  array (
    'type' => 'class',
    'name' => 'UserCredentials',
    'abstract' => 0,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'GrantTypeInterface',
        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
        'line' => 15,
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
          'name' => 'userInfo',
          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
          'line' => 17,
          'char' => 13,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'storage',
          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
          'line' => 23,
          'char' => 6,
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
              'name' => 'storage',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'UserCredentialsInterface',
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 24,
                'char' => 66,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
              'line' => 24,
              'char' => 67,
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
                  'property' => 'storage',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'storage',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 26,
                    'char' => 36,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 26,
                  'char' => 36,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
              'line' => 27,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Constructor
     *
     * @param OAuth2\\Storage\\UserCredentialsInterface $storage REQUIRED Storage class for retrieving user credentials information
     *',
          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
          'line' => 24,
          'last-line' => 29,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getQuerystringIdentifier',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'string',
                'value' => 'password',
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 31,
                'char' => 26,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
              'line' => 32,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 30,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
            'line' => 30,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
          'line' => 29,
          'last-line' => 34,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'validateRequest',
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 34,
                'char' => 62,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
              'line' => 34,
              'char' => 63,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 34,
                'char' => 92,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
              'line' => 34,
              'char' => 93,
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
                  'variable' => 'userInfo',
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 36,
                  'char' => 21,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
              'line' => 38,
              'char' => 10,
            ),
            1 => 
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
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'request',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                      'line' => 38,
                      'char' => 21,
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
                          'value' => 'password',
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                          'line' => 38,
                          'char' => 40,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                        'line' => 38,
                        'char' => 40,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 38,
                    'char' => 43,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 38,
                  'char' => 43,
                ),
                'right' => 
                array (
                  'type' => 'not',
                  'left' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'request',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                      'line' => 38,
                      'char' => 54,
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
                          'value' => 'username',
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                          'line' => 38,
                          'char' => 73,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                        'line' => 38,
                        'char' => 73,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 38,
                    'char' => 75,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 38,
                  'char' => 75,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 38,
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
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                      'line' => 39,
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
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                          'line' => 39,
                          'char' => 35,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                        'line' => 39,
                        'char' => 35,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'invalid_request',
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                          'line' => 39,
                          'char' => 54,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                        'line' => 39,
                        'char' => 54,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'Missing parameters: \\"username\\" and \\"password\\" required',
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                          'line' => 39,
                          'char' => 116,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                        'line' => 39,
                        'char' => 116,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 39,
                    'char' => 117,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 40,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 40,
                    'char' => 25,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 41,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
              'line' => 43,
              'char' => 10,
            ),
            2 => 
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
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                      'line' => 43,
                      'char' => 18,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'storage',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                      'line' => 43,
                      'char' => 27,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 43,
                    'char' => 27,
                  ),
                  'name' => 'checkUserCredentials',
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
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                          'line' => 43,
                          'char' => 57,
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
                              'value' => 'username',
                              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                              'line' => 43,
                              'char' => 76,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                            'line' => 43,
                            'char' => 76,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                        'line' => 43,
                        'char' => 77,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                      'line' => 43,
                      'char' => 77,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'request',
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                          'line' => 43,
                          'char' => 87,
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
                              'value' => 'password',
                              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                              'line' => 43,
                              'char' => 106,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                            'line' => 43,
                            'char' => 106,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                        'line' => 43,
                        'char' => 107,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                      'line' => 43,
                      'char' => 107,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 43,
                  'char' => 109,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 43,
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
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                      'line' => 44,
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
                          'value' => '401',
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                          'line' => 44,
                          'char' => 35,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                        'line' => 44,
                        'char' => 35,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'invalid_grant',
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                          'line' => 44,
                          'char' => 52,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                        'line' => 44,
                        'char' => 52,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'Invalid username and password combination',
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                          'line' => 44,
                          'char' => 97,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                        'line' => 44,
                        'char' => 97,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 44,
                    'char' => 98,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 45,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 45,
                    'char' => 25,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 46,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
              'line' => 48,
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
                  'variable' => 'userInfo',
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
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                        'line' => 48,
                        'char' => 29,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'storage',
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                        'line' => 48,
                        'char' => 38,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                      'line' => 48,
                      'char' => 38,
                    ),
                    'name' => 'getUserDetails',
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
                            'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                            'line' => 48,
                            'char' => 62,
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
                                'value' => 'username',
                                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                                'line' => 48,
                                'char' => 81,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                              'line' => 48,
                              'char' => 81,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                          'line' => 48,
                          'char' => 82,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                        'line' => 48,
                        'char' => 82,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 48,
                    'char' => 83,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 48,
                  'char' => 83,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
              'line' => 50,
              'char' => 10,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'empty',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'userInfo',
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 50,
                  'char' => 27,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 50,
                'char' => 27,
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
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                      'line' => 51,
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
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                          'line' => 51,
                          'char' => 35,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                        'line' => 51,
                        'char' => 35,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'invalid_grant',
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                          'line' => 51,
                          'char' => 52,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                        'line' => 51,
                        'char' => 52,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'Unable to retrieve user information',
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                          'line' => 51,
                          'char' => 91,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                        'line' => 51,
                        'char' => 91,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 51,
                    'char' => 92,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 52,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 52,
                    'char' => 25,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 53,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
              'line' => 55,
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
                  'type' => 'isset',
                  'left' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'userInfo',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                      'line' => 55,
                      'char' => 27,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'user_id',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                      'line' => 55,
                      'char' => 37,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 55,
                    'char' => 39,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 55,
                  'char' => 39,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 55,
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
                          'type' => 'string',
                          'value' => 'you must set the user_id on the array returned by getUserDetails',
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                          'line' => 56,
                          'char' => 105,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                        'line' => 56,
                        'char' => 105,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 56,
                    'char' => 106,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 57,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
              'line' => 59,
              'char' => 11,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'userInfo',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'userInfo',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 59,
                    'char' => 38,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 59,
                  'char' => 38,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
              'line' => 61,
              'char' => 14,
            ),
            7 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 61,
                'char' => 20,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
              'line' => 62,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 35,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
            'line' => 35,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
          'line' => 34,
          'last-line' => 64,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getClientId',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 66,
                'char' => 20,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
              'line' => 67,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 64,
                'char' => 45,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 65,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
            'line' => 65,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
          'line' => 64,
          'last-line' => 69,
          'char' => 19,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getUserId',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
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
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 71,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'userInfo',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 71,
                    'char' => 30,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 71,
                  'char' => 30,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'user_id',
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 71,
                  'char' => 40,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 71,
                'char' => 41,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
              'line' => 72,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 69,
                'char' => 43,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 70,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
            'line' => 70,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
          'line' => 69,
          'last-line' => 74,
          'char' => 19,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getScope',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'ternary',
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
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                        'line' => 76,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'userInfo',
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                        'line' => 76,
                        'char' => 36,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                      'line' => 76,
                      'char' => 36,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'scope',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                      'line' => 76,
                      'char' => 44,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 76,
                    'char' => 46,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 76,
                  'char' => 46,
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
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                      'line' => 76,
                      'char' => 53,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'userInfo',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                      'line' => 76,
                      'char' => 62,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 76,
                    'char' => 62,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'scope',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 76,
                    'char' => 70,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 76,
                  'char' => 72,
                ),
                'extra' => 
                array (
                  'type' => 'null',
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 76,
                  'char' => 78,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 76,
                'char' => 78,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
              'line' => 77,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 74,
                'char' => 42,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 75,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
            'line' => 75,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
          'line' => 74,
          'last-line' => 79,
          'char' => 19,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'createAccessToken',
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 79,
                'char' => 72,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
              'line' => 79,
              'char' => 73,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'client_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
              'line' => 79,
              'char' => 92,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'user_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
              'line' => 79,
              'char' => 109,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'scope',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
              'line' => 79,
              'char' => 124,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'accessToken',
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                  'line' => 81,
                  'char' => 28,
                ),
                'name' => 'createAccessToken',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'client_id',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                      'line' => 81,
                      'char' => 56,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 81,
                    'char' => 56,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'user_id',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                      'line' => 81,
                      'char' => 65,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 81,
                    'char' => 65,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'scope',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                      'line' => 81,
                      'char' => 72,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                    'line' => 81,
                    'char' => 72,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 81,
                'char' => 73,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
              'line' => 82,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
                'line' => 80,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
            'line' => 80,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
          'line' => 79,
          'last-line' => 83,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
      'line' => 14,
      'char' => 5,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/granttype/usercredentials.zep',
    'line' => 14,
    'char' => 5,
  ),
);