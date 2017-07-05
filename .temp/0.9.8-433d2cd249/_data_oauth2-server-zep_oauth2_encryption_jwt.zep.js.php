<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * @link https://github.com/F21/jwt
 * @author F21
 *',
    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
    'line' => 6,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\Encryption',
    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
    'line' => 8,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'Jwt',
    'abstract' => 0,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'EncryptionInterface',
        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
        'line' => 9,
        'char' => 1,
      ),
    ),
    'definition' => 
    array (
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'encode',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'payload',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 10,
              'char' => 43,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'key',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 10,
              'char' => 56,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'algo',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'string',
                'value' => 'HS256',
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 10,
                'char' => 80,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 10,
              'char' => 80,
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
                  'variable' => 'header',
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 12,
                  'char' => 19,
                ),
                1 => 
                array (
                  'variable' => 'segments',
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 12,
                  'char' => 29,
                ),
                2 => 
                array (
                  'variable' => 'signing_input',
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 12,
                  'char' => 44,
                ),
                3 => 
                array (
                  'variable' => 'signature',
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 12,
                  'char' => 55,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 14,
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
                  'variable' => 'header',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 14,
                      'char' => 27,
                    ),
                    'name' => 'generateJwtHeader',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'payload',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 14,
                          'char' => 53,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 14,
                        'char' => 53,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'algo',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 14,
                          'char' => 59,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 14,
                        'char' => 59,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 14,
                    'char' => 60,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 14,
                  'char' => 60,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 16,
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
                  'variable' => 'segments',
                  'expr' => 
                  array (
                    'type' => 'array',
                    'left' => 
                    array (
                      0 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 17,
                            'char' => 18,
                          ),
                          'name' => 'urlSafeB64Encode',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'json_encode',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'header',
                                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                      'line' => 17,
                                      'char' => 54,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                    'line' => 17,
                                    'char' => 54,
                                  ),
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 17,
                                'char' => 55,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 17,
                              'char' => 55,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 17,
                          'char' => 56,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 17,
                        'char' => 56,
                      ),
                      1 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 18,
                            'char' => 18,
                          ),
                          'name' => 'urlSafeB64Encode',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'json_encode',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'payload',
                                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                      'line' => 18,
                                      'char' => 55,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                    'line' => 18,
                                    'char' => 55,
                                  ),
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 18,
                                'char' => 56,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 18,
                              'char' => 56,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 19,
                          'char' => 9,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 19,
                        'char' => 9,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 19,
                    'char' => 10,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 19,
                  'char' => 10,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 21,
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
                  'variable' => 'signing_input',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'implode',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => '.',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 21,
                          'char' => 40,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 21,
                        'char' => 40,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'segments',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 21,
                          'char' => 50,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 21,
                        'char' => 50,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 21,
                    'char' => 51,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 21,
                  'char' => 51,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 22,
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
                  'variable' => 'signature',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 22,
                      'char' => 30,
                    ),
                    'name' => 'sign',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'signing_input',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 22,
                          'char' => 49,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 22,
                        'char' => 49,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'key',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 22,
                          'char' => 54,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 22,
                        'char' => 54,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'algo',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 22,
                          'char' => 60,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 22,
                        'char' => 60,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 22,
                    'char' => 61,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 22,
                  'char' => 61,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 23,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable-append',
                  'operator' => 'assign',
                  'variable' => 'segments',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 23,
                      'char' => 31,
                    ),
                    'name' => 'urlsafeB64Encode',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'signature',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 23,
                          'char' => 58,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 23,
                        'char' => 58,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 23,
                    'char' => 59,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 23,
                  'char' => 59,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 25,
              'char' => 14,
            ),
            6 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'implode',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => '.',
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 25,
                      'char' => 27,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 25,
                    'char' => 27,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'segments',
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 25,
                      'char' => 37,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 25,
                    'char' => 37,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 25,
                'char' => 38,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 26,
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
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 11,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
            'line' => 11,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
          'line' => 10,
          'last-line' => 28,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'decode',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'jwt',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 28,
              'char' => 39,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'key',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 28,
                'char' => 59,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 28,
              'char' => 59,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'verify',
              'const' => 0,
              'data-type' => 'bool',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 28,
                'char' => 79,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 28,
              'char' => 79,
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
                  'variable' => 'tks',
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 30,
                  'char' => 16,
                ),
                1 => 
                array (
                  'variable' => 'headb64',
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 30,
                  'char' => 25,
                ),
                2 => 
                array (
                  'variable' => 'payloadb64',
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 30,
                  'char' => 37,
                ),
                3 => 
                array (
                  'variable' => 'cryptob64',
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 30,
                  'char' => 48,
                ),
                4 => 
                array (
                  'variable' => 'sig',
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 30,
                  'char' => 53,
                ),
                5 => 
                array (
                  'variable' => 'payload',
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 30,
                  'char' => 62,
                ),
                6 => 
                array (
                  'variable' => 'header',
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 30,
                  'char' => 70,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 32,
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
                        'value' => 'jwt',
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 32,
                        'char' => 23,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 32,
                      'char' => 23,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'string',
                        'value' => '.',
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 32,
                        'char' => 28,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 32,
                      'char' => 28,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 32,
                  'char' => 30,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 32,
                'char' => 30,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 34,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
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
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'tks',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'explode',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => '.',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 36,
                          'char' => 30,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 36,
                        'char' => 30,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'jwt',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 36,
                          'char' => 35,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 36,
                        'char' => 35,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 36,
                    'char' => 36,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 36,
                  'char' => 36,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 38,
              'char' => 10,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-equals',
                'left' => 
                array (
                  'type' => 'fcall',
                  'name' => 'count',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'tks',
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 38,
                        'char' => 21,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 38,
                      'char' => 21,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 38,
                  'char' => 24,
                ),
                'right' => 
                array (
                  'type' => 'int',
                  'value' => '3',
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 38,
                  'char' => 28,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 38,
                'char' => 28,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 40,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 42,
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
                  'variable' => 'headb64',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'tks',
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 42,
                      'char' => 26,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '0',
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 42,
                      'char' => 28,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 42,
                    'char' => 29,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 42,
                  'char' => 29,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 43,
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
                  'variable' => 'payloadb64',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'tks',
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 43,
                      'char' => 29,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '1',
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 43,
                      'char' => 31,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 43,
                    'char' => 32,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 43,
                  'char' => 32,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 44,
              'char' => 11,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'cryptob64',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'tks',
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 44,
                      'char' => 28,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '2',
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 44,
                      'char' => 30,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 44,
                    'char' => 31,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 44,
                  'char' => 31,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 46,
              'char' => 11,
            ),
            7 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'header',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'json_decode',
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
                            'value' => 'this',
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 46,
                            'char' => 39,
                          ),
                          'name' => 'urlSafeB64Decode',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'headb64',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 46,
                                'char' => 64,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 46,
                              'char' => 64,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 46,
                          'char' => 65,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 46,
                        'char' => 65,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'bool',
                          'value' => 'true',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 46,
                          'char' => 71,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 46,
                        'char' => 71,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 46,
                    'char' => 72,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 46,
                  'char' => 72,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 47,
              'char' => 10,
            ),
            8 => 
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
                    'value' => 'header',
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 47,
                    'char' => 27,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 47,
                  'char' => 27,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'null',
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 47,
                  'char' => 36,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 47,
                'char' => 36,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 49,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 51,
              'char' => 11,
            ),
            9 => 
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
                    'type' => 'fcall',
                    'name' => 'json_decode',
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
                            'value' => 'this',
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 51,
                            'char' => 40,
                          ),
                          'name' => 'urlSafeB64Decode',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'payloadb64',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 51,
                                'char' => 68,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 51,
                              'char' => 68,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 51,
                          'char' => 69,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 51,
                        'char' => 69,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'bool',
                          'value' => 'true',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 51,
                          'char' => 75,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 51,
                        'char' => 75,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 51,
                    'char' => 76,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 51,
                  'char' => 76,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 52,
              'char' => 10,
            ),
            10 => 
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
                    'value' => 'payload',
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 52,
                    'char' => 28,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 52,
                  'char' => 28,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'null',
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 52,
                  'char' => 37,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 52,
                'char' => 37,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 54,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 56,
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
                  'variable' => 'sig',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 56,
                      'char' => 24,
                    ),
                    'name' => 'urlSafeB64Decode',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'cryptob64',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 56,
                          'char' => 51,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 56,
                        'char' => 51,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 56,
                    'char' => 52,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 56,
                  'char' => 52,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 58,
              'char' => 10,
            ),
            12 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'verify',
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 58,
                'char' => 19,
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
                      'type' => 'isset',
                      'left' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'header',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 59,
                          'char' => 29,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'alg',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 59,
                          'char' => 35,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 59,
                        'char' => 37,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 59,
                      'char' => 37,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 59,
                    'char' => 37,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 61,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 63,
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
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 63,
                        'char' => 22,
                      ),
                      'name' => 'verifySignature',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'sig',
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 63,
                            'char' => 42,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 63,
                          'char' => 42,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'headb64',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 63,
                                'char' => 52,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => '.',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 63,
                                'char' => 58,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 63,
                              'char' => 58,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'payloadb64',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 63,
                              'char' => 70,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 63,
                            'char' => 70,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 63,
                          'char' => 70,
                        ),
                        2 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'key',
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 63,
                            'char' => 75,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 63,
                          'char' => 75,
                        ),
                        3 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'header',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 63,
                              'char' => 83,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'alg',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 63,
                              'char' => 89,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 63,
                            'char' => 90,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 63,
                          'char' => 90,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 63,
                      'char' => 92,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 63,
                    'char' => 92,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 65,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 66,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 68,
              'char' => 14,
            ),
            13 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'payload',
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 68,
                'char' => 23,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 69,
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
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 29,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
            'line' => 29,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
          'line' => 28,
          'last-line' => 71,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => 'verifySignature',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'signature',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 71,
              'char' => 54,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'input',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 71,
              'char' => 68,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'key',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 71,
              'char' => 80,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'algo',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => 'HS256',
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 71,
                'char' => 103,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 71,
              'char' => 103,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'switch',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'algo',
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 74,
                'char' => 21,
              ),
              'clauses' => 
              array (
                0 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'HS256',
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 75,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 76,
                  'char' => 16,
                ),
                1 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'HS384',
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 76,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 77,
                  'char' => 16,
                ),
                2 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'HS512',
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 77,
                    'char' => 24,
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
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 78,
                          'char' => 29,
                        ),
                        'name' => 'hash_equals',
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
                                'value' => 'this',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 79,
                                'char' => 26,
                              ),
                              'name' => 'sign',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'input',
                                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                    'line' => 79,
                                    'char' => 37,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                  'line' => 79,
                                  'char' => 37,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'key',
                                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                    'line' => 79,
                                    'char' => 42,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                  'line' => 79,
                                  'char' => 42,
                                ),
                                2 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'algo',
                                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                    'line' => 79,
                                    'char' => 48,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                  'line' => 79,
                                  'char' => 48,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 79,
                              'char' => 49,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 79,
                            'char' => 49,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'signature',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 81,
                              'char' => 17,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 81,
                            'char' => 17,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 81,
                        'char' => 18,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 83,
                      'char' => 16,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 83,
                  'char' => 16,
                ),
                3 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'RS256',
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 83,
                    'char' => 25,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'identical',
                        'left' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'openssl_verify',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'input',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 84,
                                'char' => 44,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 84,
                              'char' => 44,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'signature',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 84,
                                'char' => 55,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 84,
                              'char' => 55,
                            ),
                            2 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'key',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 84,
                                'char' => 60,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 84,
                              'char' => 60,
                            ),
                            3 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'ternary',
                                'left' => 
                                array (
                                  'type' => 'fcall',
                                  'name' => 'defined',
                                  'call-type' => 1,
                                  'parameters' => 
                                  array (
                                    0 => 
                                    array (
                                      'parameter' => 
                                      array (
                                        'type' => 'string',
                                        'value' => 'OPENSSL_ALGO_SHA256',
                                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                        'line' => 84,
                                        'char' => 91,
                                      ),
                                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                      'line' => 84,
                                      'char' => 91,
                                    ),
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                  'line' => 84,
                                  'char' => 93,
                                ),
                                'right' => 
                                array (
                                  'type' => 'constant',
                                  'value' => 'OPENSSL_ALGO_SHA256',
                                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                  'line' => 84,
                                  'char' => 115,
                                ),
                                'extra' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'sha256',
                                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                  'line' => 84,
                                  'char' => 125,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 84,
                                'char' => 125,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 84,
                              'char' => 125,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 84,
                          'char' => 130,
                        ),
                        'right' => 
                        array (
                          'type' => 'int',
                          'value' => '1',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 84,
                          'char' => 133,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 84,
                        'char' => 133,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 86,
                      'char' => 16,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 86,
                  'char' => 16,
                ),
                4 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'RS384',
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 86,
                    'char' => 25,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'identical',
                        'left' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'openssl_verify',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'input',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 87,
                                'char' => 44,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 87,
                              'char' => 44,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'signature',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 87,
                                'char' => 55,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 87,
                              'char' => 55,
                            ),
                            2 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'key',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 87,
                                'char' => 60,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 87,
                              'char' => 60,
                            ),
                            3 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'ternary',
                                'left' => 
                                array (
                                  'type' => 'fcall',
                                  'name' => 'defined',
                                  'call-type' => 1,
                                  'parameters' => 
                                  array (
                                    0 => 
                                    array (
                                      'parameter' => 
                                      array (
                                        'type' => 'string',
                                        'value' => 'OPENSSL_ALGO_SHA384',
                                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                        'line' => 87,
                                        'char' => 91,
                                      ),
                                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                      'line' => 87,
                                      'char' => 91,
                                    ),
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                  'line' => 87,
                                  'char' => 93,
                                ),
                                'right' => 
                                array (
                                  'type' => 'constant',
                                  'value' => 'OPENSSL_ALGO_SHA384',
                                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                  'line' => 87,
                                  'char' => 115,
                                ),
                                'extra' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'sha384',
                                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                  'line' => 87,
                                  'char' => 125,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 87,
                                'char' => 125,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 87,
                              'char' => 125,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 87,
                          'char' => 129,
                        ),
                        'right' => 
                        array (
                          'type' => 'int',
                          'value' => '1',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 87,
                          'char' => 132,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 87,
                        'char' => 132,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 89,
                      'char' => 16,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 89,
                  'char' => 16,
                ),
                5 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'RS512',
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 89,
                    'char' => 25,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'identical',
                        'left' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'openssl_verify',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'input',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 90,
                                'char' => 44,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 90,
                              'char' => 44,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'signature',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 90,
                                'char' => 55,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 90,
                              'char' => 55,
                            ),
                            2 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'key',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 90,
                                'char' => 60,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 90,
                              'char' => 60,
                            ),
                            3 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'ternary',
                                'left' => 
                                array (
                                  'type' => 'fcall',
                                  'name' => 'defined',
                                  'call-type' => 1,
                                  'parameters' => 
                                  array (
                                    0 => 
                                    array (
                                      'parameter' => 
                                      array (
                                        'type' => 'string',
                                        'value' => 'OPENSSL_ALGO_SHA512',
                                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                        'line' => 90,
                                        'char' => 91,
                                      ),
                                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                      'line' => 90,
                                      'char' => 91,
                                    ),
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                  'line' => 90,
                                  'char' => 93,
                                ),
                                'right' => 
                                array (
                                  'type' => 'constant',
                                  'value' => 'OPENSSL_ALGO_SHA512',
                                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                  'line' => 90,
                                  'char' => 115,
                                ),
                                'extra' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'sha512',
                                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                  'line' => 90,
                                  'char' => 125,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 90,
                                'char' => 125,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 90,
                              'char' => 125,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 90,
                          'char' => 129,
                        ),
                        'right' => 
                        array (
                          'type' => 'int',
                          'value' => '1',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 90,
                          'char' => 132,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 90,
                        'char' => 132,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 92,
                      'char' => 19,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 92,
                  'char' => 19,
                ),
                6 => 
                array (
                  'type' => 'default',
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
                              'value' => 'Unsupported or invalid signing algorithm.',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 93,
                              'char' => 96,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 93,
                            'char' => 96,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 93,
                        'char' => 97,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 94,
                      'char' => 9,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 94,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 95,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
          'line' => 71,
          'last-line' => 97,
          'char' => 20,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => 'sign',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'input',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 97,
              'char' => 32,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'key',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 97,
              'char' => 37,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'algo',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => 'HS256',
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 97,
                'char' => 53,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 97,
              'char' => 53,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'switch',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'algo',
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 99,
                'char' => 21,
              ),
              'clauses' => 
              array (
                0 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'HS256',
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 100,
                    'char' => 25,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'hash_hmac',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'sha256',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 101,
                              'char' => 42,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 101,
                            'char' => 42,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'input',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 101,
                              'char' => 49,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 101,
                            'char' => 49,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 101,
                              'char' => 54,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 101,
                            'char' => 54,
                          ),
                          3 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'bool',
                              'value' => 'true',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 101,
                              'char' => 60,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 101,
                            'char' => 60,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 101,
                        'char' => 61,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 103,
                      'char' => 16,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 103,
                  'char' => 16,
                ),
                1 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'HS384',
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 103,
                    'char' => 25,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'hash_hmac',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'sha384',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 104,
                              'char' => 42,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 104,
                            'char' => 42,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'input',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 104,
                              'char' => 49,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 104,
                            'char' => 49,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 104,
                              'char' => 54,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 104,
                            'char' => 54,
                          ),
                          3 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'bool',
                              'value' => 'true',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 104,
                              'char' => 60,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 104,
                            'char' => 60,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 104,
                        'char' => 61,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 106,
                      'char' => 16,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 106,
                  'char' => 16,
                ),
                2 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'HS512',
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 106,
                    'char' => 25,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'hash_hmac',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'sha512',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 107,
                              'char' => 42,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 107,
                            'char' => 42,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'input',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 107,
                              'char' => 49,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 107,
                            'char' => 49,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 107,
                              'char' => 54,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 107,
                            'char' => 54,
                          ),
                          3 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'bool',
                              'value' => 'true',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 107,
                              'char' => 60,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 107,
                            'char' => 60,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 107,
                        'char' => 61,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 109,
                      'char' => 16,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 109,
                  'char' => 16,
                ),
                3 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'RS256',
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 109,
                    'char' => 25,
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
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 110,
                          'char' => 29,
                        ),
                        'name' => 'generateRSASignature',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'input',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 110,
                              'char' => 56,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 110,
                            'char' => 56,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 110,
                              'char' => 61,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 110,
                            'char' => 61,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'ternary',
                              'left' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'defined',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'OPENSSL_ALGO_SHA256',
                                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                      'line' => 110,
                                      'char' => 92,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                    'line' => 110,
                                    'char' => 92,
                                  ),
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 110,
                                'char' => 94,
                              ),
                              'right' => 
                              array (
                                'type' => 'constant',
                                'value' => 'OPENSSL_ALGO_SHA256',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 110,
                                'char' => 116,
                              ),
                              'extra' => 
                              array (
                                'type' => 'string',
                                'value' => 'sha256',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 110,
                                'char' => 126,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 110,
                              'char' => 126,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 110,
                            'char' => 126,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 110,
                        'char' => 127,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 112,
                      'char' => 16,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 112,
                  'char' => 16,
                ),
                4 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'RS384',
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 112,
                    'char' => 25,
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
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 113,
                          'char' => 29,
                        ),
                        'name' => 'generateRSASignature',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'input',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 113,
                              'char' => 56,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 113,
                            'char' => 56,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 113,
                              'char' => 61,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 113,
                            'char' => 61,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'ternary',
                              'left' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'defined',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'OPENSSL_ALGO_SHA384',
                                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                      'line' => 113,
                                      'char' => 92,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                    'line' => 113,
                                    'char' => 92,
                                  ),
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 113,
                                'char' => 94,
                              ),
                              'right' => 
                              array (
                                'type' => 'constant',
                                'value' => 'OPENSSL_ALGO_SHA384',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 113,
                                'char' => 116,
                              ),
                              'extra' => 
                              array (
                                'type' => 'string',
                                'value' => 'sha384',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 113,
                                'char' => 126,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 113,
                              'char' => 126,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 113,
                            'char' => 126,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 113,
                        'char' => 127,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 115,
                      'char' => 16,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 115,
                  'char' => 16,
                ),
                5 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'RS512',
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 115,
                    'char' => 25,
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
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 116,
                          'char' => 29,
                        ),
                        'name' => 'generateRSASignature',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'input',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 116,
                              'char' => 56,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 116,
                            'char' => 56,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 116,
                              'char' => 61,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 116,
                            'char' => 61,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'ternary',
                              'left' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'defined',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'OPENSSL_ALGO_SHA512',
                                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                      'line' => 116,
                                      'char' => 92,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                    'line' => 116,
                                    'char' => 92,
                                  ),
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 116,
                                'char' => 94,
                              ),
                              'right' => 
                              array (
                                'type' => 'constant',
                                'value' => 'OPENSSL_ALGO_SHA512',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 116,
                                'char' => 116,
                              ),
                              'extra' => 
                              array (
                                'type' => 'string',
                                'value' => 'sha512',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 116,
                                'char' => 126,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 116,
                              'char' => 126,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 116,
                            'char' => 126,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 116,
                        'char' => 127,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 118,
                      'char' => 19,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 118,
                  'char' => 19,
                ),
                6 => 
                array (
                  'type' => 'default',
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'throw',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => '\\Exception',
                        'dynamic' => 0,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'Unsupported or invalid signing algorithm.',
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 119,
                              'char' => 81,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                            'line' => 119,
                            'char' => 81,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 119,
                        'char' => 82,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 120,
                      'char' => 9,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 120,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 121,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
          'line' => 97,
          'last-line' => 123,
          'char' => 20,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => 'generateRSASignature',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'input',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 123,
              'char' => 48,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'key',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 123,
              'char' => 53,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'algo',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 123,
              'char' => 59,
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
                  'variable' => 'signature',
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 125,
                  'char' => 22,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 126,
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
                  'type' => 'fcall',
                  'name' => 'openssl_sign',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'input',
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 126,
                        'char' => 31,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 126,
                      'char' => 31,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'signature',
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 126,
                        'char' => 42,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 126,
                      'char' => 42,
                    ),
                    2 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'key',
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 126,
                        'char' => 47,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 126,
                      'char' => 47,
                    ),
                    3 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'algo',
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 126,
                        'char' => 53,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 126,
                      'char' => 53,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 126,
                  'char' => 55,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 126,
                'char' => 55,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\Exception',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'Unable to sign data.',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 127,
                          'char' => 56,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 127,
                        'char' => 56,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 127,
                    'char' => 57,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 128,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 130,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'signature',
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 130,
                'char' => 25,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 131,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
          'line' => 123,
          'last-line' => 133,
          'char' => 20,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'urlSafeB64Encode',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'data',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 133,
              'char' => 42,
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
                  'variable' => 'b64',
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 135,
                  'char' => 16,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 136,
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
                  'variable' => 'b64',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'base64_encode',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'data',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 136,
                          'char' => 37,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 136,
                        'char' => 37,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 136,
                    'char' => 38,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 136,
                  'char' => 38,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 137,
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
                  'variable' => 'b64',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'str_replace',
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
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => '+',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 137,
                                'char' => 35,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 137,
                              'char' => 35,
                            ),
                            1 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => '/',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 137,
                                'char' => 40,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 137,
                              'char' => 40,
                            ),
                            2 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => '\\\\r',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 137,
                                'char' => 47,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 137,
                              'char' => 47,
                            ),
                            3 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => '\\\\n',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 137,
                                'char' => 54,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 137,
                              'char' => 54,
                            ),
                            4 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => '=',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 137,
                                'char' => 59,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 137,
                              'char' => 59,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 137,
                          'char' => 60,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 137,
                        'char' => 60,
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
                                'value' => '-',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 137,
                                'char' => 66,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 137,
                              'char' => 66,
                            ),
                            1 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => '_',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 137,
                                'char' => 71,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 137,
                              'char' => 71,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 137,
                          'char' => 72,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 137,
                        'char' => 72,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'b64',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 137,
                          'char' => 77,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 137,
                        'char' => 77,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 137,
                    'char' => 78,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 137,
                  'char' => 78,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 138,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'b64',
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 138,
                'char' => 19,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 139,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
          'line' => 133,
          'last-line' => 141,
          'char' => 19,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'urlSafeB64Decode',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'b64',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 141,
              'char' => 41,
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
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'b64',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'str_replace',
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
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => '-',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 144,
                                'char' => 35,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 144,
                              'char' => 35,
                            ),
                            1 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => '_',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 144,
                                'char' => 40,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 144,
                              'char' => 40,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 144,
                          'char' => 41,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 144,
                        'char' => 41,
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
                                'value' => '+',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 144,
                                'char' => 47,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 144,
                              'char' => 47,
                            ),
                            1 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => '/',
                                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                                'line' => 144,
                                'char' => 52,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                              'line' => 144,
                              'char' => 52,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 144,
                          'char' => 53,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 144,
                        'char' => 53,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'b64',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 144,
                          'char' => 58,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 144,
                        'char' => 58,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 144,
                    'char' => 59,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 144,
                  'char' => 59,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 145,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'base64_decode',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'b64',
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 145,
                      'char' => 33,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 145,
                    'char' => 33,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 145,
                'char' => 34,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 146,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
          'line' => 141,
          'last-line' => 150,
          'char' => 19,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'generateJwtHeader',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'payload',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 151,
              'char' => 49,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'algorithm',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 151,
              'char' => 60,
            ),
          ),
          'statements' => 
          array (
            0 => 
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
                      'value' => 'typ',
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 153,
                      'char' => 22,
                    ),
                    'value' => 
                    array (
                      'type' => 'string',
                      'value' => 'JWT',
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 153,
                      'char' => 29,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 153,
                    'char' => 29,
                  ),
                  1 => 
                  array (
                    'key' => 
                    array (
                      'type' => 'string',
                      'value' => 'alg',
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 153,
                      'char' => 36,
                    ),
                    'value' => 
                    array (
                      'type' => 'variable',
                      'value' => 'algorithm',
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 153,
                      'char' => 47,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 153,
                    'char' => 47,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 153,
                'char' => 48,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 154,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Override to create a custom header
     *',
          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
          'line' => 151,
          'last-line' => 156,
          'char' => 22,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'hash_equals',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'a',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 156,
              'char' => 41,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'b',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 156,
              'char' => 48,
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
                  'variable' => 'diff',
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 158,
                  'char' => 17,
                ),
                1 => 
                array (
                  'variable' => 'i',
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 158,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 158,
                  'char' => 24,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 160,
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
                      'value' => 'hash_equals',
                      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                      'line' => 160,
                      'char' => 41,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 160,
                    'char' => 41,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 160,
                'char' => 43,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'hash_equals',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'a',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 161,
                          'char' => 33,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 161,
                        'char' => 33,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'b',
                          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                          'line' => 161,
                          'char' => 36,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                        'line' => 161,
                        'char' => 36,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                    'line' => 161,
                    'char' => 37,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                  'line' => 162,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 170,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
                'line' => 170,
                'char' => 21,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
              'line' => 171,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
          'line' => 156,
          'last-line' => 172,
          'char' => 22,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
      'line' => 8,
      'char' => 5,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/encryption/jwt.zep',
    'line' => 8,
    'char' => 5,
  ),
);