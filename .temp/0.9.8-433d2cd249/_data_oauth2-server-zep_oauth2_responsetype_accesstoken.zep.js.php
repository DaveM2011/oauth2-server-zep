<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * @package \\OAuth2\\ResponseType
 * @author Brent Shaffer <bshafs at gmail dot com>
 *',
    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
    'line' => 7,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\ResponseType',
    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
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
        'name' => 'OAuth2\\Storage\\AccessTokenInterface',
        'alias' => 'AccessTokenStorageInterface',
        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
        'line' => 9,
        'char' => 71,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
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
        'name' => 'OAuth2\\Storage\\RefreshTokenInterface',
        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
        'line' => 10,
        'char' => 41,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
    'line' => 12,
    'char' => 5,
  ),
  4 => 
  array (
    'type' => 'class',
    'name' => 'AccessToken',
    'abstract' => 0,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'AccessTokenInterface',
        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
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
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'tokenStorage',
          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
          'line' => 15,
          'char' => 13,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'refreshStorage',
          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
          'line' => 16,
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
          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
          'line' => 29,
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
              'name' => 'tokenStorage',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'AccessTokenStorageInterface',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                'line' => 30,
                'char' => 74,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 30,
              'char' => 75,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'refreshStorage',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'RefreshTokenInterface',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                'line' => 30,
                'char' => 114,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                'line' => 30,
                'char' => 122,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 30,
              'char' => 122,
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
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                'line' => 30,
                'char' => 141,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 30,
              'char' => 141,
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
                  'property' => 'tokenStorage',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'tokenStorage',
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 32,
                    'char' => 46,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 32,
                  'char' => 46,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 33,
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
                  'property' => 'refreshStorage',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'refreshStorage',
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 33,
                    'char' => 50,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 33,
                  'char' => 50,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 35,
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
                                'value' => 'token_type',
                                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                                'line' => 36,
                                'char' => 37,
                              ),
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => 'bearer',
                                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                                'line' => 36,
                                'char' => 47,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 36,
                              'char' => 47,
                            ),
                            1 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'access_lifetime',
                                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                                'line' => 37,
                                'char' => 37,
                              ),
                              'value' => 
                              array (
                                'type' => 'int',
                                'value' => '3600',
                                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                                'line' => 37,
                                'char' => 43,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 37,
                              'char' => 43,
                            ),
                            2 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'refresh_token_lifetime',
                                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                                'line' => 38,
                                'char' => 37,
                              ),
                              'value' => 
                              array (
                                'type' => 'int',
                                'value' => '1209600',
                                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                                'line' => 39,
                                'char' => 9,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 39,
                              'char' => 9,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 39,
                          'char' => 10,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 39,
                        'char' => 10,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 39,
                          'char' => 18,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 39,
                        'char' => 18,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 39,
                    'char' => 19,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 39,
                  'char' => 19,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 40,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param OAuth2\\Storage\\AccessTokenInterface tokenStorage Storage class for saving access token information
     * @param OAuth2\\Storage\\RefreshTokenInterface refreshStorage OPTIONAL Storage class for saving refresh token information
     * @param array config OPTIONAL Configuration options for the server
     * <code>
     * $config = array(
     * "token_type": "bearer",              // token type identifier
     * "access_lifetime": 3600,             // time before access token expires
     * "refresh_token_lifetime": 1209600,   // time before refresh token expires
     * );
     * </endcode>
     *',
          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
          'line' => 30,
          'last-line' => 42,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getAuthorizeResponse',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'params',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 42,
              'char' => 52,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'user_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                'line' => 42,
                'char' => 76,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 42,
              'char' => 76,
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
                  'variable' => 'result',
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 44,
                  'char' => 19,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 45,
              'char' => 15,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'bool',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'includeRefreshToken',
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 45,
                  'char' => 36,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 48,
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
                  'variable' => 'result',
                  'expr' => 
                  array (
                    'type' => 'array',
                    'left' => 
                    array (
                      0 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'query',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 48,
                          'char' => 30,
                        ),
                        'value' => 
                        array (
                          'type' => 'empty-array',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 48,
                          'char' => 34,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 48,
                        'char' => 34,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 48,
                    'char' => 35,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 48,
                  'char' => 35,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 50,
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
                  'variable' => 'params',
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
                                'value' => 'scope',
                                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                                'line' => 51,
                                'char' => 20,
                              ),
                              'value' => 
                              array (
                                'type' => 'null',
                                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                                'line' => 51,
                                'char' => 26,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 51,
                              'char' => 26,
                            ),
                            1 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'state',
                                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                                'line' => 52,
                                'char' => 20,
                              ),
                              'value' => 
                              array (
                                'type' => 'null',
                                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                                'line' => 53,
                                'char' => 9,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 53,
                              'char' => 9,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 53,
                          'char' => 10,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 53,
                        'char' => 10,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'params',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 53,
                          'char' => 18,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 53,
                        'char' => 18,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 53,
                    'char' => 19,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 53,
                  'char' => 19,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 57,
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
                  'variable' => 'includeRefreshToken',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 57,
                    'char' => 40,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 57,
                  'char' => 40,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 58,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'array-index',
                  'operator' => 'assign',
                  'variable' => 'result',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'string',
                      'value' => 'fragment',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 58,
                      'char' => 30,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 58,
                      'char' => 39,
                    ),
                    'name' => 'createAccessToken',
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
                            'type' => 'variable',
                            'value' => 'params',
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 58,
                            'char' => 64,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'client_id',
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 58,
                            'char' => 76,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 58,
                          'char' => 77,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 58,
                        'char' => 77,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'user_id',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 58,
                          'char' => 86,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 58,
                        'char' => 86,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'params',
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 58,
                            'char' => 94,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'scope',
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 58,
                            'char' => 102,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 58,
                          'char' => 103,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 58,
                        'char' => 103,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'includeRefreshToken',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 58,
                          'char' => 124,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 58,
                        'char' => 124,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 58,
                    'char' => 125,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 58,
                  'char' => 125,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 60,
              'char' => 10,
            ),
            6 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'isset',
                'left' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'params',
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 60,
                    'char' => 24,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'state',
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 60,
                    'char' => 32,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 60,
                  'char' => 34,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                'line' => 60,
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
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'result',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'fragment',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 61,
                          'char' => 34,
                        ),
                        1 => 
                        array (
                          'type' => 'string',
                          'value' => 'state',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 61,
                          'char' => 43,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'params',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 61,
                          'char' => 53,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'state',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 61,
                          'char' => 61,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 61,
                        'char' => 62,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 61,
                      'char' => 62,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 62,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 64,
              'char' => 14,
            ),
            7 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'array',
                'left' => 
                array (
                  0 => 
                  array (
                    'value' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'params',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 64,
                        'char' => 23,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'redirect_uri',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 64,
                        'char' => 38,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 64,
                      'char' => 39,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 64,
                    'char' => 39,
                  ),
                  1 => 
                  array (
                    'value' => 
                    array (
                      'type' => 'variable',
                      'value' => 'result',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 64,
                      'char' => 47,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 64,
                    'char' => 47,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                'line' => 64,
                'char' => 48,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 65,
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
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                'line' => 43,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
            'line' => 43,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
          'line' => 42,
          'last-line' => 78,
          'char' => 19,
        ),
        2 => 
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
              'name' => 'client_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 79,
              'char' => 56,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'user_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 79,
              'char' => 73,
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
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                'line' => 79,
                'char' => 95,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 79,
              'char' => 95,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'includeRefreshToken',
              'const' => 0,
              'data-type' => 'bool',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                'line' => 79,
                'char' => 131,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 79,
              'char' => 131,
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
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 81,
                  'char' => 18,
                ),
                1 => 
                array (
                  'variable' => 'expires',
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 81,
                  'char' => 27,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 83,
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
                    'type' => 'array',
                    'left' => 
                    array (
                      0 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'access_token',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 84,
                          'char' => 27,
                        ),
                        'value' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 84,
                            'char' => 34,
                          ),
                          'name' => 'generateAccessToken',
                          'call-type' => 1,
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 84,
                          'char' => 56,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 84,
                        'char' => 56,
                      ),
                      1 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'expires_in',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 85,
                          'char' => 27,
                        ),
                        'value' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 85,
                              'char' => 34,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'config',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 85,
                              'char' => 41,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 85,
                            'char' => 41,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'access_lifetime',
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 85,
                            'char' => 59,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 85,
                          'char' => 60,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 85,
                        'char' => 60,
                      ),
                      2 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'token_type',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 86,
                          'char' => 27,
                        ),
                        'value' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 86,
                              'char' => 34,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'config',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 86,
                              'char' => 41,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 86,
                            'char' => 41,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'token_type',
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 86,
                            'char' => 54,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 86,
                          'char' => 55,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 86,
                        'char' => 55,
                      ),
                      3 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'scope',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 87,
                          'char' => 27,
                        ),
                        'value' => 
                        array (
                          'type' => 'variable',
                          'value' => 'scope',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 88,
                          'char' => 9,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 88,
                        'char' => 9,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 88,
                    'char' => 10,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 88,
                  'char' => 10,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 90,
              'char' => 12,
            ),
            2 => 
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
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 90,
                    'char' => 14,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'tokenStorage',
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 90,
                    'char' => 28,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 90,
                  'char' => 28,
                ),
                'name' => 'setAccessToken',
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
                        'type' => 'variable',
                        'value' => 'token',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 90,
                        'char' => 49,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'access_token',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 90,
                        'char' => 64,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 90,
                      'char' => 65,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 90,
                    'char' => 65,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'client_id',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 90,
                      'char' => 76,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 90,
                    'char' => 76,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'user_id',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 90,
                      'char' => 85,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 90,
                    'char' => 85,
                  ),
                  3 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'ternary',
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
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 90,
                            'char' => 92,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'config',
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 90,
                            'char' => 99,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 90,
                          'char' => 99,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'access_lifetime',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 90,
                          'char' => 117,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 90,
                        'char' => 119,
                      ),
                      'right' => 
                      array (
                        'type' => 'add',
                        'left' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'time',
                          'call-type' => 1,
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 90,
                          'char' => 128,
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
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 90,
                              'char' => 135,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'config',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 90,
                              'char' => 142,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 90,
                            'char' => 142,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'access_lifetime',
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 90,
                            'char' => 160,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 90,
                          'char' => 162,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 90,
                        'char' => 162,
                      ),
                      'extra' => 
                      array (
                        'type' => 'null',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 90,
                        'char' => 168,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 90,
                      'char' => 168,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 90,
                    'char' => 168,
                  ),
                  4 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'scope',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 90,
                      'char' => 175,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 90,
                    'char' => 175,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                'line' => 90,
                'char' => 176,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 95,
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
                  'value' => 'includeRefreshToken',
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 95,
                  'char' => 33,
                ),
                'right' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 95,
                    'char' => 40,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'refreshStorage',
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 95,
                    'char' => 56,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 95,
                  'char' => 56,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                'line' => 95,
                'char' => 56,
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
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'token',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'refresh_token',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 96,
                          'char' => 38,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 96,
                          'char' => 47,
                        ),
                        'name' => 'generateRefreshToken',
                        'call-type' => 1,
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 96,
                        'char' => 70,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 96,
                      'char' => 70,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 97,
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
                      'variable' => 'expires',
                      'expr' => 
                      array (
                        'type' => 'int',
                        'value' => '0',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 97,
                        'char' => 28,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 97,
                      'char' => 28,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 98,
                  'char' => 14,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'greater',
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
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 98,
                          'char' => 21,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 98,
                          'char' => 28,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 98,
                        'char' => 28,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'refresh_token_lifetime',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 98,
                        'char' => 53,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 98,
                      'char' => 55,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '0',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 98,
                      'char' => 59,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 98,
                    'char' => 59,
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
                          'variable' => 'expires',
                          'expr' => 
                          array (
                            'type' => 'add',
                            'left' => 
                            array (
                              'type' => 'fcall',
                              'name' => 'time',
                              'call-type' => 1,
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 99,
                              'char' => 38,
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
                                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                                  'line' => 99,
                                  'char' => 45,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'config',
                                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                                  'line' => 99,
                                  'char' => 52,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                                'line' => 99,
                                'char' => 52,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'refresh_token_lifetime',
                                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                                'line' => 99,
                                'char' => 77,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 99,
                              'char' => 78,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 99,
                            'char' => 78,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 99,
                          'char' => 78,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 100,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 101,
                  'char' => 16,
                ),
                3 => 
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
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 101,
                        'char' => 18,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'refreshStorage',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 101,
                        'char' => 34,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 101,
                      'char' => 34,
                    ),
                    'name' => 'setRefreshToken',
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
                            'type' => 'variable',
                            'value' => 'token',
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 101,
                            'char' => 56,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'refresh_token',
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 101,
                            'char' => 72,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 101,
                          'char' => 73,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 101,
                        'char' => 73,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'client_id',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 101,
                          'char' => 84,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 101,
                        'char' => 84,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'user_id',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 101,
                          'char' => 93,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 101,
                        'char' => 93,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'expires',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 101,
                          'char' => 102,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 101,
                        'char' => 102,
                      ),
                      4 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'scope',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 101,
                          'char' => 109,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 101,
                        'char' => 109,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 101,
                    'char' => 110,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 102,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 104,
              'char' => 14,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'token',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                'line' => 104,
                'char' => 21,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 105,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Handle the creation of access token, also issue refresh token if supported / desirable.
     *
     * @param string client_id client identifier related to the access token.
     * @param string user_id user ID associated with the access token
     * @param $scope OPTIONAL scopes to be stored in space-separated string.
     * @param bool includeRefreshToken if true, a new refresh_token will be added to the response
     * @return string
     *
     * @see http://tools.ietf.org/html/rfc6749#section-5
     * @ingroup oauth2_section_5
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
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                'line' => 80,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
            'line' => 80,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
          'line' => 79,
          'last-line' => 116,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'generateAccessToken',
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
                  'variable' => 'randomData',
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 119,
                  'char' => 23,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 121,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'function_exists',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'mcrypt_create_iv',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 121,
                      'char' => 46,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 121,
                    'char' => 46,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                'line' => 121,
                'char' => 48,
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
                      'variable' => 'randomData',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'mcrypt_create_iv',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'int',
                              'value' => '20',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 122,
                              'char' => 49,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 122,
                            'char' => 49,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'constant',
                              'value' => 'MCRYPT_DEV_URANDOM',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 122,
                              'char' => 69,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 122,
                            'char' => 69,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 122,
                        'char' => 70,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 122,
                      'char' => 70,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 123,
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
                      'type' => 'not-identical',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'randomData',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 123,
                        'char' => 29,
                      ),
                      'right' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 123,
                        'char' => 38,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 123,
                      'char' => 38,
                    ),
                    'right' => 
                    array (
                      'type' => 'identical',
                      'left' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'strlen',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'randomData',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 123,
                              'char' => 57,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 123,
                            'char' => 57,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 123,
                        'char' => 61,
                      ),
                      'right' => 
                      array (
                        'type' => 'int',
                        'value' => '20',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 123,
                        'char' => 66,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 123,
                      'char' => 66,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 123,
                    'char' => 66,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'bin2hex',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'randomData',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 124,
                              'char' => 42,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 124,
                            'char' => 42,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 124,
                        'char' => 43,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 125,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 126,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 128,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'function_exists',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'openssl_random_pseudo_bytes',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 128,
                      'char' => 57,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 128,
                    'char' => 57,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                'line' => 128,
                'char' => 59,
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
                      'variable' => 'randomData',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'openssl_random_pseudo_bytes',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'int',
                              'value' => '20',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 129,
                              'char' => 60,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 129,
                            'char' => 60,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 129,
                        'char' => 61,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 129,
                      'char' => 61,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 130,
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
                      'type' => 'not-identical',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'randomData',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 130,
                        'char' => 29,
                      ),
                      'right' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 130,
                        'char' => 38,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 130,
                      'char' => 38,
                    ),
                    'right' => 
                    array (
                      'type' => 'identical',
                      'left' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'strlen',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'randomData',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 130,
                              'char' => 57,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 130,
                            'char' => 57,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 130,
                        'char' => 61,
                      ),
                      'right' => 
                      array (
                        'type' => 'int',
                        'value' => '20',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 130,
                        'char' => 66,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 130,
                      'char' => 66,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 130,
                    'char' => 66,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'bin2hex',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'randomData',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 131,
                              'char' => 42,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 131,
                            'char' => 42,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 131,
                        'char' => 43,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 132,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 133,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 135,
              'char' => 10,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'file_exists',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => '/dev/urandom',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 135,
                      'char' => 38,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 135,
                    'char' => 38,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                'line' => 135,
                'char' => 40,
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
                      'variable' => 'randomData',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'file_get_contents',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => '/dev/urandom',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 137,
                              'char' => 62,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 137,
                            'char' => 62,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'bool',
                              'value' => 'false',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 137,
                              'char' => 69,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 137,
                            'char' => 69,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'null',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 137,
                              'char' => 75,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 137,
                            'char' => 75,
                          ),
                          3 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'int',
                              'value' => '0',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 137,
                              'char' => 78,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 137,
                            'char' => 78,
                          ),
                          4 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'int',
                              'value' => '20',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 137,
                              'char' => 82,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 137,
                            'char' => 82,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 137,
                        'char' => 83,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 137,
                      'char' => 83,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 138,
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
                      'type' => 'not-identical',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'randomData',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 138,
                        'char' => 29,
                      ),
                      'right' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 138,
                        'char' => 38,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 138,
                      'char' => 38,
                    ),
                    'right' => 
                    array (
                      'type' => 'identical',
                      'left' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'strlen',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'randomData',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 138,
                              'char' => 57,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 138,
                            'char' => 57,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 138,
                        'char' => 61,
                      ),
                      'right' => 
                      array (
                        'type' => 'int',
                        'value' => '20',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 138,
                        'char' => 66,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 138,
                      'char' => 66,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 138,
                    'char' => 66,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'bin2hex',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'randomData',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 139,
                              'char' => 42,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 139,
                            'char' => 42,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 139,
                        'char' => 43,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 140,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 141,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 144,
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
                  'variable' => 'randomData',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'fcall',
                              'name' => 'mt_rand',
                              'call-type' => 1,
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 144,
                              'char' => 36,
                            ),
                            'right' => 
                            array (
                              'type' => 'fcall',
                              'name' => 'mt_rand',
                              'call-type' => 1,
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 144,
                              'char' => 48,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 144,
                            'char' => 48,
                          ),
                          'right' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'mt_rand',
                            'call-type' => 1,
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 144,
                            'char' => 60,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 144,
                          'char' => 60,
                        ),
                        'right' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'mt_rand',
                          'call-type' => 1,
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 144,
                          'char' => 72,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 144,
                        'char' => 72,
                      ),
                      'right' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'microtime',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'bool',
                              'value' => 'true',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                              'line' => 144,
                              'char' => 88,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 144,
                            'char' => 88,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                        'line' => 144,
                        'char' => 90,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 144,
                      'char' => 90,
                    ),
                    'right' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'uniqid',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'mt_rand',
                            'call-type' => 1,
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 144,
                            'char' => 108,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 144,
                          'char' => 108,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'bool',
                            'value' => 'true',
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 144,
                            'char' => 114,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 144,
                          'char' => 114,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 144,
                      'char' => 115,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 144,
                    'char' => 115,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 144,
                  'char' => 115,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 146,
              'char' => 14,
            ),
            5 => 
            array (
              'type' => 'return',
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
                      'type' => 'fcall',
                      'name' => 'hash',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'string',
                            'value' => 'sha512',
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 146,
                            'char' => 36,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 146,
                          'char' => 36,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'randomData',
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                            'line' => 146,
                            'char' => 48,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                          'line' => 146,
                          'char' => 48,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 146,
                      'char' => 49,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 146,
                    'char' => 49,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'int',
                      'value' => '0',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 146,
                      'char' => 52,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 146,
                    'char' => 52,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'int',
                      'value' => '40',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                      'line' => 146,
                      'char' => 56,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                    'line' => 146,
                    'char' => 56,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                'line' => 146,
                'char' => 57,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 147,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Generates an unique access token.
     *
     * Implementing classes may want to override this function to implement
     * other access token generation schemes.
     *
     * @return string An unique access token.
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
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                'line' => 118,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
            'line' => 118,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
          'line' => 117,
          'last-line' => 159,
          'char' => 22,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'generateRefreshToken',
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
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                  'line' => 163,
                  'char' => 21,
                ),
                'name' => 'generateAccessToken',
                'call-type' => 1,
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                'line' => 163,
                'char' => 43,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
              'line' => 164,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Generates an unique refresh token
     *
     * Implementing classes may want to override this function to implement
     * other refresh token generation schemes.
     *
     * @return string An unique refresh.
     *
     * @ingroup oauth2_section_4
     * @see OAuth2::generateAccessToken()
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
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
                'line' => 161,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
            'line' => 161,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
          'line' => 160,
          'last-line' => 165,
          'char' => 22,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
      'line' => 12,
      'char' => 5,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstoken.zep',
    'line' => 12,
    'char' => 5,
  ),
);