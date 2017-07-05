<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\ResponseType',
    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
    'line' => 3,
    'char' => 3,
  ),
  1 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Encryption\\EncryptionInterface',
        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
        'line' => 3,
        'char' => 42,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
    'line' => 4,
    'char' => 3,
  ),
  2 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Encryption\\Jwt',
        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
        'line' => 4,
        'char' => 26,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
    'line' => 5,
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
        'alias' => 'AccessTokenStorageInterface',
        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
        'line' => 5,
        'char' => 71,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
    'line' => 6,
    'char' => 3,
  ),
  4 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Storage\\RefreshTokenInterface',
        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
        'line' => 6,
        'char' => 41,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
    'line' => 7,
    'char' => 3,
  ),
  5 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Storage\\PublicKeyInterface',
        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
        'line' => 7,
        'char' => 38,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
    'line' => 8,
    'char' => 3,
  ),
  6 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Storage\\Memory',
        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
        'line' => 8,
        'char' => 26,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
    'line' => 12,
    'char' => 2,
  ),
  7 => 
  array (
    'type' => 'comment',
    'value' => '**
 * @author Brent Shaffer <bshafs at gmail dot com>
 *',
    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
    'line' => 13,
    'char' => 5,
  ),
  8 => 
  array (
    'type' => 'class',
    'name' => 'JwtAccessToken',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'AccessToken',
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
          'name' => 'publicKeyStorage',
          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
          'line' => 16,
          'char' => 13,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'encryptionUtil',
          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
          'line' => 26,
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
              'name' => 'publicKeyStorage',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'PublicKeyInterface',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                'line' => 27,
                'char' => 69,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                'line' => 27,
                'char' => 77,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 27,
              'char' => 77,
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
                'value' => 'AccessTokenStorageInterface',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                'line' => 27,
                'char' => 120,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                'line' => 27,
                'char' => 128,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 27,
              'char' => 128,
            ),
            2 => 
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
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                'line' => 27,
                'char' => 167,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                'line' => 27,
                'char' => 175,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 27,
              'char' => 175,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'config',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                'line' => 27,
                'char' => 194,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 27,
              'char' => 194,
            ),
            4 => 
            array (
              'type' => 'parameter',
              'name' => 'encryptionUtil',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'EncryptionInterface',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                'line' => 27,
                'char' => 231,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                'line' => 27,
                'char' => 239,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 27,
              'char' => 239,
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
                  'property' => 'publicKeyStorage',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'publicKeyStorage',
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 29,
                    'char' => 54,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 29,
                  'char' => 54,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 30,
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
                  'variable' => 'config',
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
                                'value' => 'store_encrypted_token_string',
                                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                                'line' => 30,
                                'char' => 65,
                              ),
                              'value' => 
                              array (
                                'type' => 'bool',
                                'value' => 'true',
                                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                                'line' => 30,
                                'char' => 71,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                              'line' => 30,
                              'char' => 71,
                            ),
                            1 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'issuer',
                                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                                'line' => 30,
                                'char' => 81,
                              ),
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => '',
                                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                                'line' => 30,
                                'char' => 85,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                              'line' => 30,
                              'char' => 85,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 30,
                          'char' => 86,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 30,
                        'char' => 86,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 30,
                          'char' => 94,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 30,
                        'char' => 94,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 30,
                    'char' => 95,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 30,
                  'char' => 95,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 31,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'is_null',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'tokenStorage',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 31,
                      'char' => 32,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 31,
                    'char' => 32,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                'line' => 31,
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
                      'variable' => 'tokenStorage',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => 'Memory',
                        'dynamic' => 0,
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 33,
                        'char' => 44,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 33,
                      'char' => 44,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 34,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 35,
              'char' => 10,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'is_null',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'encryptionUtil',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 35,
                      'char' => 34,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 35,
                    'char' => 34,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                'line' => 35,
                'char' => 36,
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
                      'variable' => 'encryptionUtil',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => 'Jwt',
                        'dynamic' => 0,
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 36,
                        'char' => 43,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 36,
                      'char' => 43,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 37,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
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
                  'property' => 'encryptionUtil',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'encryptionUtil',
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 38,
                    'char' => 50,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 38,
                  'char' => 50,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 39,
              'char' => 14,
            ),
            5 => 
            array (
              'type' => 'scall',
              'expr' => 
              array (
                'type' => 'scall',
                'dynamic-class' => 0,
                'class' => 'parent',
                'dynamic' => 0,
                'name' => '__construct',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'tokenStorage',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 39,
                      'char' => 41,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 39,
                    'char' => 41,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'refreshStorage',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 39,
                      'char' => 57,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 39,
                    'char' => 57,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 39,
                      'char' => 65,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 39,
                    'char' => 65,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                'line' => 39,
                'char' => 66,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 40,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param PublicKeyInterface          $publicKeyStorage -
     * @param AccessTokenStorageInterface $tokenStorage     -
     * @param RefreshTokenInterface       $refreshStorage   -
     * @param array                       $config           - array with key store_encrypted_token_string (bool true)
     *                                                        whether the entire encrypted string is stored,
     *                                                        or just the token ID is stored
     * @param EncryptionInterface         $encryptionUtil   -
     *',
          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
          'line' => 27,
          'last-line' => 53,
          'char' => 19,
        ),
        1 => 
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
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 54,
              'char' => 48,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'user_id',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 54,
              'char' => 57,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'scope',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                'line' => 54,
                'char' => 71,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 54,
              'char' => 71,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'includeRefreshToken',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                'line' => 54,
                'char' => 99,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 54,
              'char' => 99,
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
                  'variable' => 'payload',
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 57,
                  'char' => 20,
                ),
                1 => 
                array (
                  'variable' => 'access_token',
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 57,
                  'char' => 34,
                ),
                2 => 
                array (
                  'variable' => 'token_to_store',
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 57,
                  'char' => 50,
                ),
                3 => 
                array (
                  'variable' => 'token',
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 57,
                  'char' => 57,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 58,
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
                  'variable' => 'payload',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 58,
                      'char' => 28,
                    ),
                    'name' => 'createPayload',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'client_id',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 58,
                          'char' => 52,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 58,
                        'char' => 52,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'user_id',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 58,
                          'char' => 61,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 58,
                        'char' => 61,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'scope',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 58,
                          'char' => 68,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 58,
                        'char' => 68,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 58,
                    'char' => 69,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 58,
                  'char' => 69,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 63,
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
                  'variable' => 'access_token',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 63,
                      'char' => 33,
                    ),
                    'name' => 'encodeToken',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'payload',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 63,
                          'char' => 53,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 63,
                        'char' => 53,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'client_id',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 63,
                          'char' => 64,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 63,
                        'char' => 64,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 63,
                    'char' => 65,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 63,
                  'char' => 65,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 70,
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
                  'variable' => 'token_to_store',
                  'expr' => 
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
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 70,
                          'char' => 35,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 70,
                          'char' => 42,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 70,
                        'char' => 42,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'store_encrypted_token_string',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 70,
                        'char' => 73,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 70,
                      'char' => 75,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'access_token',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 70,
                      'char' => 90,
                    ),
                    'extra' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'payload',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 70,
                        'char' => 99,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'id',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 70,
                        'char' => 104,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 70,
                      'char' => 105,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 70,
                    'char' => 105,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 70,
                  'char' => 105,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 71,
              'char' => 12,
            ),
            4 => 
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
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 71,
                    'char' => 14,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'tokenStorage',
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 71,
                    'char' => 28,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 71,
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
                      'type' => 'variable',
                      'value' => 'token_to_store',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 71,
                      'char' => 58,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 71,
                    'char' => 58,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'client_id',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 71,
                      'char' => 69,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 71,
                    'char' => 69,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'user_id',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 71,
                      'char' => 78,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 71,
                    'char' => 78,
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
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                            'line' => 71,
                            'char' => 85,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'config',
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                            'line' => 71,
                            'char' => 92,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 71,
                          'char' => 92,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'access_lifetime',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 71,
                          'char' => 110,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 71,
                        'char' => 112,
                      ),
                      'right' => 
                      array (
                        'type' => 'add',
                        'left' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'time',
                          'call-type' => 1,
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 71,
                          'char' => 121,
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
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                              'line' => 71,
                              'char' => 128,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'config',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                              'line' => 71,
                              'char' => 135,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                            'line' => 71,
                            'char' => 135,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'access_lifetime',
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                            'line' => 71,
                            'char' => 153,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 71,
                          'char' => 155,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 71,
                        'char' => 155,
                      ),
                      'extra' => 
                      array (
                        'type' => 'null',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 71,
                        'char' => 161,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 71,
                      'char' => 161,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 71,
                    'char' => 161,
                  ),
                  4 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'scope',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 71,
                      'char' => 168,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 71,
                    'char' => 168,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                'line' => 71,
                'char' => 169,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 74,
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
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 75,
                          'char' => 27,
                        ),
                        'value' => 
                        array (
                          'type' => 'variable',
                          'value' => 'access_token',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 75,
                          'char' => 41,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 75,
                        'char' => 41,
                      ),
                      1 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'expires_in',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 76,
                          'char' => 25,
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
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                              'line' => 76,
                              'char' => 32,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'config',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                              'line' => 76,
                              'char' => 39,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                            'line' => 76,
                            'char' => 39,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'access_lifetime',
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                            'line' => 76,
                            'char' => 57,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 76,
                          'char' => 58,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 76,
                        'char' => 58,
                      ),
                      2 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'token_type',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 77,
                          'char' => 25,
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
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                              'line' => 77,
                              'char' => 32,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'config',
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                              'line' => 77,
                              'char' => 39,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                            'line' => 77,
                            'char' => 39,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'token_type',
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                            'line' => 77,
                            'char' => 52,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 77,
                          'char' => 53,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 77,
                        'char' => 53,
                      ),
                      3 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'scope',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 78,
                          'char' => 20,
                        ),
                        'value' => 
                        array (
                          'type' => 'variable',
                          'value' => 'scope',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 79,
                          'char' => 9,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 79,
                        'char' => 9,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 79,
                    'char' => 10,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 79,
                  'char' => 10,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 87,
              'char' => 10,
            ),
            6 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'includeRefreshToken',
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 87,
                  'char' => 33,
                ),
                'right' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 87,
                    'char' => 40,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'refreshStorage',
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 87,
                    'char' => 56,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 87,
                  'char' => 56,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                'line' => 87,
                'char' => 56,
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
                      'variable' => 'refresh_token',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 88,
                      'char' => 30,
                    ),
                    1 => 
                    array (
                      'variable' => 'expires',
                      'expr' => 
                      array (
                        'type' => 'int',
                        'value' => '0',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 88,
                        'char' => 43,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 88,
                      'char' => 43,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 89,
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
                      'variable' => 'refresh_token',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 89,
                          'char' => 38,
                        ),
                        'name' => 'generateRefreshToken',
                        'call-type' => 1,
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 89,
                        'char' => 61,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 89,
                      'char' => 61,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 90,
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
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 90,
                          'char' => 21,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 90,
                          'char' => 28,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 90,
                        'char' => 28,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'refresh_token_lifetime',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 90,
                        'char' => 53,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 90,
                      'char' => 55,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '0',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 90,
                      'char' => 59,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 90,
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
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                              'line' => 91,
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
                                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                                  'line' => 91,
                                  'char' => 45,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'config',
                                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                                  'line' => 91,
                                  'char' => 52,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                                'line' => 91,
                                'char' => 52,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'refresh_token_lifetime',
                                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                                'line' => 91,
                                'char' => 77,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                              'line' => 91,
                              'char' => 78,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                            'line' => 91,
                            'char' => 78,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 91,
                          'char' => 78,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 92,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 93,
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
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 93,
                        'char' => 18,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'refreshStorage',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 93,
                        'char' => 34,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 93,
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
                          'type' => 'variable',
                          'value' => 'refresh_token',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 93,
                          'char' => 64,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 93,
                        'char' => 64,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'client_id',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 93,
                          'char' => 75,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 93,
                        'char' => 75,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'user_id',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 93,
                          'char' => 84,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 93,
                        'char' => 84,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'expires',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 93,
                          'char' => 93,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 93,
                        'char' => 93,
                      ),
                      4 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'scope',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 93,
                          'char' => 100,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 93,
                        'char' => 100,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 93,
                    'char' => 101,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 94,
                  'char' => 15,
                ),
                4 => 
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
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 94,
                          'char' => 38,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'refresh_token',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 94,
                        'char' => 55,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 94,
                      'char' => 55,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 95,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 97,
              'char' => 14,
            ),
            7 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'token',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                'line' => 97,
                'char' => 21,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 98,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Handle the creation of access token, also issue refresh token if supported / desirable.
     *
     * @param mixed  $client_id           - Client identifier related to the access token.
     * @param mixed  $user_id             - User ID associated with the access token
     * @param string $scope               - (optional) Scopes to be stored in space-separated string.
     * @param bool   $includeRefreshToken - If true, a new refresh_token will be added to the response
     * @return array                      - The access token
     *
     * @see http://tools.ietf.org/html/rfc6749#section-5
     * @ingroup oauth2_section_5
     *',
          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
          'line' => 54,
          'last-line' => 104,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'encodeToken',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'token',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 105,
              'char' => 47,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'client_id',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                'line' => 105,
                'char' => 65,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 105,
              'char' => 65,
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
                  'variable' => 'private_key',
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 107,
                  'char' => 24,
                ),
                1 => 
                array (
                  'variable' => 'algorithm',
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 107,
                  'char' => 35,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 108,
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
                  'variable' => 'private_key',
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
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 108,
                        'char' => 32,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'publicKeyStorage',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 108,
                        'char' => 50,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 108,
                      'char' => 50,
                    ),
                    'name' => 'getPrivateKey',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'client_id',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 108,
                          'char' => 74,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 108,
                        'char' => 74,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 108,
                    'char' => 75,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 108,
                  'char' => 75,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 109,
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
                  'variable' => 'algorithm',
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
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 109,
                        'char' => 32,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'publicKeyStorage',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 109,
                        'char' => 50,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 109,
                      'char' => 50,
                    ),
                    'name' => 'getEncryptionAlgorithm',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'client_id',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 109,
                          'char' => 83,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 109,
                        'char' => 83,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 109,
                    'char' => 84,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 109,
                  'char' => 84,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 111,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
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
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 111,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'encryptionUtil',
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 111,
                    'char' => 37,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 111,
                  'char' => 37,
                ),
                'name' => 'encode',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'token',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 111,
                      'char' => 50,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 111,
                    'char' => 50,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'private_key',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 111,
                      'char' => 63,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 111,
                    'char' => 63,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'algorithm',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 111,
                      'char' => 74,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 111,
                    'char' => 74,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                'line' => 111,
                'char' => 75,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 112,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param array $token
     * @param mixed $client_id
     * @return mixed
     *',
          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
          'line' => 105,
          'last-line' => 121,
          'char' => 22,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'createPayload',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'client_id',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 122,
              'char' => 47,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'user_id',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 122,
              'char' => 56,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'scope',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                'line' => 122,
                'char' => 70,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 122,
              'char' => 70,
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
                  'variable' => 'expires',
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 125,
                  'char' => 20,
                ),
                1 => 
                array (
                  'variable' => 'id',
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 125,
                  'char' => 24,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 126,
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
                  'variable' => 'expires',
                  'expr' => 
                  array (
                    'type' => 'add',
                    'left' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'time',
                      'call-type' => 1,
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 126,
                      'char' => 30,
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
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 126,
                          'char' => 37,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 126,
                          'char' => 44,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 126,
                        'char' => 44,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'access_lifetime',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 126,
                        'char' => 62,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 126,
                      'char' => 63,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 126,
                    'char' => 63,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 126,
                  'char' => 63,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 127,
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
                  'variable' => 'id',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 127,
                      'char' => 23,
                    ),
                    'name' => 'generateAccessToken',
                    'call-type' => 1,
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 127,
                    'char' => 45,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                  'line' => 127,
                  'char' => 45,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 129,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
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
                      'value' => 'id',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 130,
                      'char' => 17,
                    ),
                    'value' => 
                    array (
                      'type' => 'variable',
                      'value' => 'id',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 130,
                      'char' => 21,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 130,
                    'char' => 21,
                  ),
                  1 => 
                  array (
                    'key' => 
                    array (
                      'type' => 'string',
                      'value' => 'jti',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 131,
                      'char' => 18,
                    ),
                    'value' => 
                    array (
                      'type' => 'variable',
                      'value' => 'id',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 131,
                      'char' => 22,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 131,
                    'char' => 22,
                  ),
                  2 => 
                  array (
                    'key' => 
                    array (
                      'type' => 'string',
                      'value' => 'iss',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 132,
                      'char' => 18,
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
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 132,
                          'char' => 25,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 132,
                          'char' => 32,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 132,
                        'char' => 32,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'issuer',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 132,
                        'char' => 41,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 132,
                      'char' => 42,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 132,
                    'char' => 42,
                  ),
                  3 => 
                  array (
                    'key' => 
                    array (
                      'type' => 'string',
                      'value' => 'aud',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 133,
                      'char' => 18,
                    ),
                    'value' => 
                    array (
                      'type' => 'variable',
                      'value' => 'client_id',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 133,
                      'char' => 29,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 133,
                    'char' => 29,
                  ),
                  4 => 
                  array (
                    'key' => 
                    array (
                      'type' => 'string',
                      'value' => 'sub',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 134,
                      'char' => 18,
                    ),
                    'value' => 
                    array (
                      'type' => 'variable',
                      'value' => 'user_id',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 134,
                      'char' => 27,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 134,
                    'char' => 27,
                  ),
                  5 => 
                  array (
                    'key' => 
                    array (
                      'type' => 'string',
                      'value' => 'exp',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 135,
                      'char' => 18,
                    ),
                    'value' => 
                    array (
                      'type' => 'variable',
                      'value' => 'expires',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 135,
                      'char' => 27,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 135,
                    'char' => 27,
                  ),
                  6 => 
                  array (
                    'key' => 
                    array (
                      'type' => 'string',
                      'value' => 'iat',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 136,
                      'char' => 18,
                    ),
                    'value' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'time',
                      'call-type' => 1,
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 136,
                      'char' => 26,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 136,
                    'char' => 26,
                  ),
                  7 => 
                  array (
                    'key' => 
                    array (
                      'type' => 'string',
                      'value' => 'token_type',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 137,
                      'char' => 25,
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
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 137,
                          'char' => 32,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                          'line' => 137,
                          'char' => 39,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 137,
                        'char' => 39,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'token_type',
                        'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                        'line' => 137,
                        'char' => 52,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 137,
                      'char' => 53,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 137,
                    'char' => 53,
                  ),
                  8 => 
                  array (
                    'key' => 
                    array (
                      'type' => 'string',
                      'value' => 'scope',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 138,
                      'char' => 20,
                    ),
                    'value' => 
                    array (
                      'type' => 'variable',
                      'value' => 'scope',
                      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                      'line' => 139,
                      'char' => 9,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                    'line' => 139,
                    'char' => 9,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
                'line' => 139,
                'char' => 10,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
              'line' => 140,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * This function can be used to create custom JWT payloads
     *
     * @param mixed  $client_id           - Client identifier related to the access token.
     * @param mixed  $user_id             - User ID associated with the access token
     * @param string $scope               - (optional) Scopes to be stored in space-separated string.
     * @return array                      - The access token
     *',
          'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
          'line' => 122,
          'last-line' => 141,
          'char' => 22,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
      'line' => 13,
      'char' => 5,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/responsetype/jwtaccesstoken.zep',
    'line' => 13,
    'char' => 5,
  ),
);