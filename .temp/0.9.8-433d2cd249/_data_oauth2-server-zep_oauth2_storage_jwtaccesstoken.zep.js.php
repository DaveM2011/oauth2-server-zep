<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * JWT Access token
 * @author Brent Shaffer <bshafs at gmail dot com>
 *',
    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
    'line' => 7,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\Storage',
    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
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
        'name' => 'OAuth2\\Encryption\\EncryptionInterface',
        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
        'line' => 9,
        'char' => 42,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
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
        'name' => 'OAuth2\\Encryption\\Jwt',
        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
        'line' => 10,
        'char' => 26,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
    'line' => 12,
    'char' => 5,
  ),
  4 => 
  array (
    'type' => 'class',
    'name' => 'JwtAccessToken',
    'abstract' => 0,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'JwtAccessTokenInterface',
        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
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
          'name' => 'publicKeyStorage',
          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
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
          'name' => 'tokenStorage',
          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
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
          'name' => 'encryptionUtil',
          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
          'line' => 24,
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
                'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                'line' => 25,
                'char' => 69,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 25,
              'char' => 70,
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
                'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                'line' => 25,
                'char' => 106,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                'line' => 25,
                'char' => 114,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 25,
              'char' => 114,
            ),
            2 => 
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
                'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                'line' => 25,
                'char' => 151,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                'line' => 25,
                'char' => 159,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 25,
              'char' => 159,
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
                    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                    'line' => 27,
                    'char' => 54,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 27,
                  'char' => 54,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 28,
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
                    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                    'line' => 28,
                    'char' => 46,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 28,
                  'char' => 46,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 30,
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
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'encryptionUtil',
                    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                    'line' => 30,
                    'char' => 35,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 30,
                  'char' => 35,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'null',
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 30,
                  'char' => 44,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                'line' => 30,
                'char' => 44,
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
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 31,
                        'char' => 41,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                      'line' => 31,
                      'char' => 41,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 32,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 33,
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
                  'property' => 'encryptionUtil',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'encryptionUtil',
                    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                    'line' => 33,
                    'char' => 50,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 33,
                  'char' => 50,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 34,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param OAuth2\\Encryption\\PublicKeyInterface publicKeyStorage the public key encryption to use
     * @param OAuth2\\Storage\\AccessTokenInterfacetokenStorage OPTIONAL persist the access token to another storage. This is useful if
     * you want to retain access token grant information somewhere, but
     * is not necessary when using this grant type.
     * @param OAuth2\\Encryption\\EncryptionInterface encryptionUtil   OPTIONAL class to use for "encode" and "decode" functions.
     *',
          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
          'line' => 25,
          'last-line' => 36,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getAccessToken',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'oauth_token',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 36,
              'char' => 55,
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
                  'variable' => 'tokenData',
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 38,
                  'char' => 22,
                ),
                1 => 
                array (
                  'variable' => 'client_id',
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 38,
                  'char' => 33,
                ),
                2 => 
                array (
                  'variable' => 'public_key',
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 38,
                  'char' => 45,
                ),
                3 => 
                array (
                  'variable' => 'algorithm',
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 38,
                  'char' => 56,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 41,
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
                  'variable' => 'tokenData',
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
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 41,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'encryptionUtil',
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 41,
                        'char' => 46,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                      'line' => 41,
                      'char' => 46,
                    ),
                    'name' => 'decode',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'oauth_token',
                          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                          'line' => 41,
                          'char' => 65,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 41,
                        'char' => 65,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'null',
                          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                          'line' => 41,
                          'char' => 71,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 41,
                        'char' => 71,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'bool',
                          'value' => 'false',
                          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                          'line' => 41,
                          'char' => 78,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 41,
                        'char' => 78,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                    'line' => 41,
                    'char' => 79,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 41,
                  'char' => 79,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 42,
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
                  'type' => 'variable',
                  'value' => 'tokenData',
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 42,
                  'char' => 23,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                'line' => 42,
                'char' => 23,
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
                    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                    'line' => 43,
                    'char' => 25,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 44,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 46,
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
                  'variable' => 'client_id',
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
                          'type' => 'variable',
                          'value' => 'tokenData',
                          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                          'line' => 46,
                          'char' => 41,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'aud',
                          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                          'line' => 46,
                          'char' => 47,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 46,
                        'char' => 49,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                      'line' => 46,
                      'char' => 49,
                    ),
                    'right' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'tokenData',
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 46,
                        'char' => 60,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'aud',
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 46,
                        'char' => 66,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                      'line' => 46,
                      'char' => 68,
                    ),
                    'extra' => 
                    array (
                      'type' => 'null',
                      'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                      'line' => 46,
                      'char' => 74,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                    'line' => 46,
                    'char' => 74,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 46,
                  'char' => 74,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 47,
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
                  'variable' => 'public_key',
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
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 47,
                        'char' => 31,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'publicKeyStorage',
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 47,
                        'char' => 49,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                      'line' => 47,
                      'char' => 49,
                    ),
                    'name' => 'getPublicKey',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'client_id',
                          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                          'line' => 47,
                          'char' => 72,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 47,
                        'char' => 72,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                    'line' => 47,
                    'char' => 73,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 47,
                  'char' => 73,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 48,
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
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 48,
                        'char' => 31,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'publicKeyStorage',
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 48,
                        'char' => 49,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                      'line' => 48,
                      'char' => 49,
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
                          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                          'line' => 48,
                          'char' => 82,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 48,
                        'char' => 82,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                    'line' => 48,
                    'char' => 83,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 48,
                  'char' => 83,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 51,
              'char' => 10,
            ),
            6 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
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
                      'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                      'line' => 51,
                      'char' => 17,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'encryptionUtil',
                      'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                      'line' => 51,
                      'char' => 33,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                    'line' => 51,
                    'char' => 33,
                  ),
                  'name' => 'decode',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'oauth_token',
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 51,
                        'char' => 52,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                      'line' => 51,
                      'char' => 52,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'public_key',
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 51,
                        'char' => 64,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                      'line' => 51,
                      'char' => 64,
                    ),
                    2 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'bool',
                        'value' => 'true',
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 51,
                        'char' => 70,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                      'line' => 51,
                      'char' => 70,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 51,
                  'char' => 74,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'false',
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 51,
                  'char' => 82,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                'line' => 51,
                'char' => 82,
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
                    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                    'line' => 52,
                    'char' => 25,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 53,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 56,
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
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 56,
                  'char' => 21,
                ),
                'name' => 'convertJwtToOAuth2',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'tokenData',
                      'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                      'line' => 56,
                      'char' => 50,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                    'line' => 56,
                    'char' => 50,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                'line' => 56,
                'char' => 51,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 57,
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
                'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                'line' => 36,
                'char' => 68,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'array',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                'line' => 37,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
            'line' => 37,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
          'line' => 36,
          'last-line' => 59,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setAccessToken',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'oauth_token',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 59,
              'char' => 55,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'client_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 59,
              'char' => 74,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'user_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 59,
              'char' => 91,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'expires',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 59,
              'char' => 104,
            ),
            4 => 
            array (
              'type' => 'parameter',
              'name' => 'scope',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                'line' => 59,
                'char' => 126,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 59,
              'char' => 126,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 61,
                  'char' => 17,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'tokenStorage',
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 61,
                  'char' => 31,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                'line' => 61,
                'char' => 31,
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
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 62,
                        'char' => 18,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'tokenStorage',
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 62,
                        'char' => 32,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                      'line' => 62,
                      'char' => 32,
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
                          'value' => 'oauth_token',
                          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                          'line' => 62,
                          'char' => 59,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 62,
                        'char' => 59,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'client_id',
                          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                          'line' => 62,
                          'char' => 70,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 62,
                        'char' => 70,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'user_id',
                          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                          'line' => 62,
                          'char' => 79,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 62,
                        'char' => 79,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'expires',
                          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                          'line' => 62,
                          'char' => 88,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 62,
                        'char' => 88,
                      ),
                      4 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'scope',
                          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                          'line' => 62,
                          'char' => 95,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 62,
                        'char' => 95,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                    'line' => 62,
                    'char' => 96,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 63,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 64,
              'char' => 5,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
            'line' => 60,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
          'line' => 59,
          'last-line' => 67,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'convertJwtToOAuth2',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'tokenData',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 67,
              'char' => 58,
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
                  'variable' => 'keyMapping',
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 69,
                  'char' => 23,
                ),
                1 => 
                array (
                  'variable' => 'jwtKey',
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 69,
                  'char' => 31,
                ),
                2 => 
                array (
                  'variable' => 'oauth2Key',
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 69,
                  'char' => 42,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 71,
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
                  'variable' => 'keyMapping',
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
                          'value' => 'aud',
                          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                          'line' => 72,
                          'char' => 18,
                        ),
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'client_id',
                          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                          'line' => 72,
                          'char' => 31,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 72,
                        'char' => 31,
                      ),
                      1 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'exp',
                          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                          'line' => 73,
                          'char' => 18,
                        ),
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'expires',
                          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                          'line' => 73,
                          'char' => 29,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 73,
                        'char' => 29,
                      ),
                      2 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'sub',
                          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                          'line' => 74,
                          'char' => 18,
                        ),
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'user_id',
                          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                          'line' => 75,
                          'char' => 9,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 75,
                        'char' => 9,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                    'line' => 75,
                    'char' => 10,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 75,
                  'char' => 10,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 77,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'keyMapping',
                'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                'line' => 77,
                'char' => 45,
              ),
              'key' => 'jwtKey',
              'value' => 'oauth2Key',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
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
                        'value' => 'tokenData',
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 78,
                        'char' => 31,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'jwtKey',
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 78,
                        'char' => 38,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                      'line' => 78,
                      'char' => 40,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                    'line' => 78,
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
                          'assign-type' => 'array-index',
                          'operator' => 'assign',
                          'variable' => 'tokenData',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'variable',
                              'value' => 'oauth2Key',
                              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                              'line' => 79,
                              'char' => 40,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'tokenData',
                              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                              'line' => 79,
                              'char' => 53,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'jwtKey',
                              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                              'line' => 79,
                              'char' => 60,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                            'line' => 79,
                            'char' => 61,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                          'line' => 79,
                          'char' => 61,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                      'line' => 80,
                      'char' => 21,
                    ),
                    1 => 
                    array (
                      'type' => 'unset',
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'tokenData',
                          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                          'line' => 80,
                          'char' => 32,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'jwtKey',
                          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                          'line' => 80,
                          'char' => 39,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                        'line' => 80,
                        'char' => 40,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                      'line' => 81,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                  'line' => 82,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 84,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'tokenData',
                'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                'line' => 84,
                'char' => 25,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
              'line' => 85,
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
                'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
                'line' => 68,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
            'line' => 68,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
          'line' => 67,
          'last-line' => 86,
          'char' => 22,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
      'line' => 12,
      'char' => 5,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtaccesstoken.zep',
    'line' => 12,
    'char' => 5,
  ),
);