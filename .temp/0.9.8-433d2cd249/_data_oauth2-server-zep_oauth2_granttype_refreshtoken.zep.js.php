<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * @package \\OAuth2\\GrantType
 * @author Brent Shaffer <bshafs at gmail dot com>
 *',
    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
    'line' => 7,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\GrantType',
    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
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
        'name' => 'OAuth2\\Storage\\RefreshTokenInterface',
        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
        'line' => 9,
        'char' => 41,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
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
        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
        'line' => 10,
        'char' => 45,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
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
        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
        'line' => 11,
        'char' => 28,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
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
        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
        'line' => 12,
        'char' => 29,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
    'line' => 14,
    'char' => 5,
  ),
  6 => 
  array (
    'type' => 'class',
    'name' => 'RefreshToken',
    'abstract' => 0,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'GrantTypeInterface',
        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
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
          'name' => 'refreshToken',
          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
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
          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
          'line' => 18,
          'char' => 13,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'config',
          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
          'line' => 28,
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
                'value' => 'RefreshTokenInterface',
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 29,
                'char' => 63,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 29,
              'char' => 64,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'config',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 29,
                'char' => 83,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 29,
              'char' => 83,
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
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 31,
                    'char' => 36,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 31,
                  'char' => 36,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 32,
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
                                'value' => 'always_issue_new_refresh_token',
                                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                                'line' => 33,
                                'char' => 45,
                              ),
                              'value' => 
                              array (
                                'type' => 'bool',
                                'value' => 'false',
                                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                                'line' => 34,
                                'char' => 9,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                              'line' => 34,
                              'char' => 9,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                          'line' => 34,
                          'char' => 10,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 34,
                        'char' => 10,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                          'line' => 34,
                          'char' => 18,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 34,
                        'char' => 18,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 34,
                    'char' => 19,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 34,
                  'char' => 19,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 35,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param OAuth2\\Storage\\RefreshTokenInterface storage REQUIRED Storage class for retrieving refresh token information
     * @param array config  OPTIONAL Configuration options for the server
     * <code>
     * $config = array(
     * "always_issue_new_refresh_token": true, // whether to issue a new refresh token upon successful token request
     * );
     * </code>
     *',
          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
          'line' => 29,
          'last-line' => 37,
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
                'value' => 'refresh_token',
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 39,
                'char' => 31,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 40,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 38,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
            'line' => 38,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
          'line' => 37,
          'last-line' => 42,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 42,
                'char' => 62,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 42,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 42,
                'char' => 92,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 42,
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
                  'variable' => 'refreshToken',
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 44,
                  'char' => 25,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 46,
              'char' => 10,
            ),
            1 => 
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
                    'value' => 'request',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 46,
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
                        'value' => 'refresh_token',
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 46,
                        'char' => 45,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                      'line' => 46,
                      'char' => 45,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 46,
                  'char' => 47,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 46,
                'char' => 47,
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
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                      'line' => 47,
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
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                          'line' => 47,
                          'char' => 35,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 47,
                        'char' => 35,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'invalid_request',
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                          'line' => 47,
                          'char' => 54,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 47,
                        'char' => 54,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'Missing parameter: \\"refresh_token\\" is required',
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                          'line' => 47,
                          'char' => 106,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 47,
                        'char' => 106,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 47,
                    'char' => 107,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 48,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 48,
                    'char' => 25,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 49,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 51,
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
                  'variable' => 'refreshToken',
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
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 51,
                        'char' => 33,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'storage',
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 51,
                        'char' => 42,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                      'line' => 51,
                      'char' => 42,
                    ),
                    'name' => 'getRefreshToken',
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
                            'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                            'line' => 51,
                            'char' => 67,
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
                                'value' => 'refresh_token',
                                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                                'line' => 51,
                                'char' => 91,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                              'line' => 51,
                              'char' => 91,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                          'line' => 51,
                          'char' => 92,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 51,
                        'char' => 92,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 51,
                    'char' => 93,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 51,
                  'char' => 93,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 52,
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
                  'value' => 'refreshToken',
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 52,
                  'char' => 26,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 52,
                'char' => 26,
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
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                      'line' => 53,
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
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                          'line' => 53,
                          'char' => 35,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 53,
                        'char' => 35,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'invalid_grant',
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                          'line' => 53,
                          'char' => 52,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 53,
                        'char' => 52,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'Invalid refresh token',
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                          'line' => 53,
                          'char' => 77,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 53,
                        'char' => 77,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 53,
                    'char' => 78,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 54,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 54,
                    'char' => 25,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 55,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 57,
              'char' => 10,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'greater',
                  'left' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'refreshToken',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                      'line' => 57,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'expires',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                      'line' => 57,
                      'char' => 34,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 57,
                    'char' => 36,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 57,
                    'char' => 41,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 57,
                  'char' => 41,
                ),
                'right' => 
                array (
                  'type' => 'less',
                  'left' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'refreshToken',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                      'line' => 57,
                      'char' => 55,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'expires',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                      'line' => 57,
                      'char' => 65,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 57,
                    'char' => 67,
                  ),
                  'right' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'time',
                    'call-type' => 1,
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 57,
                    'char' => 76,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 57,
                  'char' => 76,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 57,
                'char' => 76,
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
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                      'line' => 58,
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
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                          'line' => 58,
                          'char' => 35,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 58,
                        'char' => 35,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'invalid_grant',
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                          'line' => 58,
                          'char' => 52,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 58,
                        'char' => 52,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'Refresh token has expired',
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                          'line' => 58,
                          'char' => 81,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 58,
                        'char' => 81,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 58,
                    'char' => 82,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 59,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 59,
                    'char' => 25,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 60,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 63,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'refreshToken',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'refreshToken',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 63,
                    'char' => 46,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 63,
                  'char' => 46,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 65,
              'char' => 14,
            ),
            6 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 65,
                'char' => 20,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 66,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 43,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
            'line' => 43,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
          'line' => 42,
          'last-line' => 68,
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
                'type' => 'array-access',
                'left' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 70,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'refreshToken',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 70,
                    'char' => 34,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 70,
                  'char' => 34,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'client_id',
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 70,
                  'char' => 46,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 70,
                'char' => 47,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 71,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 68,
                'char' => 45,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 69,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
            'line' => 69,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
          'line' => 68,
          'last-line' => 73,
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
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 75,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'refreshToken',
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 75,
                        'char' => 40,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                      'line' => 75,
                      'char' => 40,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'user_id',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                      'line' => 75,
                      'char' => 50,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 75,
                    'char' => 52,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 75,
                  'char' => 52,
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
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                      'line' => 75,
                      'char' => 59,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'refreshToken',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                      'line' => 75,
                      'char' => 72,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 75,
                    'char' => 72,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'user_id',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 75,
                    'char' => 82,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 75,
                  'char' => 84,
                ),
                'extra' => 
                array (
                  'type' => 'null',
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 75,
                  'char' => 90,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 75,
                'char' => 90,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 76,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 73,
                'char' => 43,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 74,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
            'line' => 74,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
          'line' => 73,
          'last-line' => 78,
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
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 80,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'refreshToken',
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 80,
                        'char' => 40,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                      'line' => 80,
                      'char' => 40,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'scope',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                      'line' => 80,
                      'char' => 48,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 80,
                    'char' => 50,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 80,
                  'char' => 50,
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
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                      'line' => 80,
                      'char' => 57,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'refreshToken',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                      'line' => 80,
                      'char' => 70,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 80,
                    'char' => 70,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'scope',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 80,
                    'char' => 78,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 80,
                  'char' => 80,
                ),
                'extra' => 
                array (
                  'type' => 'null',
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 80,
                  'char' => 86,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 80,
                'char' => 86,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 81,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 78,
                'char' => 42,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 79,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
            'line' => 79,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
          'line' => 78,
          'last-line' => 83,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 83,
                'char' => 72,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 83,
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
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 83,
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
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 83,
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
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 83,
              'char' => 124,
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
                  'variable' => 'issueNewRefreshToken',
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 85,
                  'char' => 33,
                ),
                1 => 
                array (
                  'variable' => 'token',
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 85,
                  'char' => 40,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 90,
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
                  'variable' => 'issueNewRefreshToken',
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
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 90,
                        'char' => 41,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'config',
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 90,
                        'char' => 48,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                      'line' => 90,
                      'char' => 48,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'always_issue_new_refresh_token',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                      'line' => 90,
                      'char' => 81,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 90,
                    'char' => 82,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 90,
                  'char' => 82,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 91,
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
                  'variable' => 'token',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'accessToken',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                      'line' => 91,
                      'char' => 33,
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
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                          'line' => 91,
                          'char' => 61,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 91,
                        'char' => 61,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'user_id',
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                          'line' => 91,
                          'char' => 70,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 91,
                        'char' => 70,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'scope',
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                          'line' => 91,
                          'char' => 77,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 91,
                        'char' => 77,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'issueNewRefreshToken',
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                          'line' => 91,
                          'char' => 99,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 91,
                        'char' => 99,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 91,
                    'char' => 100,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 91,
                  'char' => 100,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 93,
              'char' => 10,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'issueNewRefreshToken',
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 93,
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
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 94,
                        'char' => 18,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'storage',
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 94,
                        'char' => 27,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                      'line' => 94,
                      'char' => 27,
                    ),
                    'name' => 'unsetRefreshToken',
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
                              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                              'line' => 94,
                              'char' => 51,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'refreshToken',
                              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                              'line' => 94,
                              'char' => 64,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                            'line' => 94,
                            'char' => 64,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'refresh_token',
                            'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                            'line' => 94,
                            'char' => 80,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                          'line' => 94,
                          'char' => 81,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                        'line' => 94,
                        'char' => 81,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                    'line' => 94,
                    'char' => 82,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                  'line' => 95,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 97,
              'char' => 14,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'token',
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 97,
                'char' => 21,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
              'line' => 98,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
                'line' => 84,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
            'line' => 84,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
          'line' => 83,
          'last-line' => 99,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
      'line' => 14,
      'char' => 5,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/granttype/refreshtoken.zep',
    'line' => 14,
    'char' => 5,
  ),
);