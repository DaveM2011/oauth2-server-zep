<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
* Server class for OAuth2
* This class serves as a convience class which wraps the other Controller classes
*
* @see OAuth2\\Controller\\ResourceController
* @see OAuth2\\Controller\\AuthorizeController
* @see OAuth2\\Controller\\TokenController
*',
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 11,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2',
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 23,
    'char' => 3,
  ),
  2 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Controller\\AuthorizeControllerInterface',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 23,
        'char' => 51,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 24,
    'char' => 3,
  ),
  3 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Controller\\AuthorizeController',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 24,
        'char' => 42,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 25,
    'char' => 3,
  ),
  4 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Controller\\ResourceControllerInterface',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 25,
        'char' => 50,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 26,
    'char' => 3,
  ),
  5 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Controller\\ResourceController',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 26,
        'char' => 41,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 27,
    'char' => 3,
  ),
  6 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Controller\\TokenControllerInterface',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 27,
        'char' => 47,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 28,
    'char' => 3,
  ),
  7 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Controller\\TokenController',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 28,
        'char' => 38,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 29,
    'char' => 3,
  ),
  8 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\ClientAssertionType\\ClientAssertionTypeInterface',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 29,
        'char' => 60,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 30,
    'char' => 3,
  ),
  9 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\ClientAssertionType\\HttpBasic',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 30,
        'char' => 41,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 31,
    'char' => 3,
  ),
  10 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\ResponseType\\ResponseTypeInterface',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 31,
        'char' => 46,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 32,
    'char' => 3,
  ),
  11 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\ResponseType\\AuthorizationCode',
        'alias' => 'AuthorizationCodeResponseType',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 32,
        'char' => 75,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 33,
    'char' => 3,
  ),
  12 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\ResponseType\\AccessToken',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 33,
        'char' => 36,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 34,
    'char' => 3,
  ),
  13 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\ResponseType\\JwtAccessToken',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 34,
        'char' => 39,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 35,
    'char' => 3,
  ),
  14 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\TokenType\\TokenTypeInterface',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 35,
        'char' => 40,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 36,
    'char' => 3,
  ),
  15 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\TokenType\\Bearer',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 36,
        'char' => 28,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 37,
    'char' => 3,
  ),
  16 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\GrantType\\GrantTypeInterface',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 37,
        'char' => 40,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 38,
    'char' => 3,
  ),
  17 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\GrantType\\UserCredentials',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 38,
        'char' => 37,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 39,
    'char' => 3,
  ),
  18 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\GrantType\\ClientCredentials',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 39,
        'char' => 39,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 40,
    'char' => 3,
  ),
  19 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\GrantType\\RefreshToken',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 40,
        'char' => 34,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 41,
    'char' => 3,
  ),
  20 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\GrantType\\AuthorizationCode',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 41,
        'char' => 39,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 42,
    'char' => 3,
  ),
  21 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Storage\\ClientInterface',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 42,
        'char' => 35,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 43,
    'char' => 3,
  ),
  22 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Storage\\ClientCredentialsInterface',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 43,
        'char' => 46,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 44,
    'char' => 3,
  ),
  23 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Storage\\JwtAccessToken',
        'alias' => 'JwtAccessTokenStorage',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 44,
        'char' => 59,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 45,
    'char' => 3,
  ),
  24 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Storage\\JwtAccessTokenInterface',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 45,
        'char' => 43,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 46,
    'char' => 3,
  ),
  25 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Storage\\StorageInterface',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 46,
        'char' => 36,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 48,
    'char' => 8,
  ),
  26 => 
  array (
    'type' => 'class',
    'name' => 'Server',
    'abstract' => 1,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'ResourceControllerInterface',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 48,
        'char' => 61,
      ),
      1 => 
      array (
        'type' => 'variable',
        'value' => 'AuthorizeControllerInterface',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 49,
        'char' => 33,
      ),
      2 => 
      array (
        'type' => 'variable',
        'value' => 'TokenControllerInterface',
        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
        'line' => 51,
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
          'name' => 'response',
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 54,
          'char' => 13,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'config',
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 55,
          'char' => 13,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'storages',
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 58,
          'char' => 13,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'authorizeController',
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 59,
          'char' => 13,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'tokenController',
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 60,
          'char' => 13,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'resourceController',
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 61,
          'char' => 13,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'userInfoController',
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 64,
          'char' => 13,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'grantTypes',
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 65,
          'char' => 13,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'responseTypes',
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 66,
          'char' => 13,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'tokenType',
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 67,
          'char' => 13,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'scopeUtil',
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 68,
          'char' => 13,
        ),
        11 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'clientAssertionType',
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 72,
          'char' => 6,
        ),
        12 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'storageMap',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
            'line' => 73,
            'char' => 30,
          ),
          'docblock' => '**
     * @var array
     *',
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 74,
          'char' => 13,
        ),
        13 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'responseTypeMap',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
            'line' => 74,
            'char' => 35,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 88,
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
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 89,
                'char' => 51,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 89,
              'char' => 51,
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
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 89,
                'char' => 70,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 89,
              'char' => 70,
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
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 89,
                'char' => 93,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 89,
              'char' => 93,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'responseTypes',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 89,
                'char' => 119,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 89,
              'char' => 119,
            ),
            4 => 
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
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 89,
                'char' => 150,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 89,
                'char' => 158,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 89,
              'char' => 158,
            ),
            5 => 
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
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 89,
                'char' => 185,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 89,
                'char' => 193,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 89,
              'char' => 193,
            ),
            6 => 
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
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 89,
                'char' => 244,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 89,
                'char' => 252,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 89,
              'char' => 252,
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
                  'variable' => 'key',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 91,
                  'char' => 16,
                ),
                1 => 
                array (
                  'variable' => 'service',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 91,
                  'char' => 25,
                ),
                2 => 
                array (
                  'variable' => 'type',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 91,
                  'char' => 31,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 93,
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
                  'property' => 'storageMap',
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
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 94,
                          'char' => 33,
                        ),
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'OAuth2\\\\Storage\\\\AccessTokenInterface',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 94,
                          'char' => 74,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 94,
                        'char' => 74,
                      ),
                      1 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'authorization_code',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 95,
                          'char' => 33,
                        ),
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'OAuth2\\\\Storage\\\\AuthorizationCodeInterface',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 95,
                          'char' => 80,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 95,
                        'char' => 80,
                      ),
                      2 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'client_credentials',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 96,
                          'char' => 33,
                        ),
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'OAuth2\\\\Storage\\\\ClientCredentialsInterface',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 96,
                          'char' => 80,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 96,
                        'char' => 80,
                      ),
                      3 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'client',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 97,
                          'char' => 33,
                        ),
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'OAuth2\\\\Storage\\\\ClientInterface',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 97,
                          'char' => 69,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 97,
                        'char' => 69,
                      ),
                      4 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'refresh_token',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 98,
                          'char' => 33,
                        ),
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'OAuth2\\\\Storage\\\\RefreshTokenInterface',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 98,
                          'char' => 75,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 98,
                        'char' => 75,
                      ),
                      5 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'user_credentials',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 99,
                          'char' => 33,
                        ),
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'OAuth2\\\\Storage\\\\UserCredentialsInterface',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 99,
                          'char' => 78,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 99,
                        'char' => 78,
                      ),
                      6 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'user_claims',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 100,
                          'char' => 33,
                        ),
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'OAuth2\\\\OpenID\\\\Storage\\\\UserClaimsInterface',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 100,
                          'char' => 81,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 100,
                        'char' => 81,
                      ),
                      7 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'public_key',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 101,
                          'char' => 33,
                        ),
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'OAuth2\\\\Storage\\\\PublicKeyInterface',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 101,
                          'char' => 72,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 101,
                        'char' => 72,
                      ),
                      8 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'jwt_bearer',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 102,
                          'char' => 33,
                        ),
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'OAuth2\\\\Storage\\\\JWTBearerInterface',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 102,
                          'char' => 72,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 102,
                        'char' => 72,
                      ),
                      9 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'scope',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 103,
                          'char' => 33,
                        ),
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'OAuth2\\\\Storage\\\\ScopeInterface',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 104,
                          'char' => 9,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 104,
                        'char' => 9,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 104,
                    'char' => 10,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 104,
                  'char' => 10,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 106,
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
                  'property' => 'responseTypeMap',
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
                          'value' => 'token',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 107,
                          'char' => 29,
                        ),
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'OAuth2\\\\ResponseType\\\\AccessTokenInterface',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 107,
                          'char' => 75,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 107,
                        'char' => 75,
                      ),
                      1 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'code',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 108,
                          'char' => 29,
                        ),
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'OAuth2\\\\ResponseType\\\\AuthorizationCodeInterface',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 108,
                          'char' => 81,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 108,
                        'char' => 81,
                      ),
                      2 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'id_token',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 109,
                          'char' => 29,
                        ),
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'OAuth2\\\\OpenID\\\\ResponseType\\\\IdTokenInterface',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 109,
                          'char' => 79,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 109,
                        'char' => 79,
                      ),
                      3 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'id_token token',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 110,
                          'char' => 29,
                        ),
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'OAuth2\\\\OpenID\\\\ResponseType\\\\IdTokenTokenInterface',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 111,
                          'char' => 9,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 111,
                        'char' => 9,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 111,
                    'char' => 10,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 111,
                  'char' => 10,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 113,
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
                  'property' => 'storages',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 113,
                    'char' => 32,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 113,
                  'char' => 32,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 115,
              'char' => 10,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-equals',
                'left' => 
                array (
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'storage',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 115,
                    'char' => 28,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 115,
                  'char' => 28,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 115,
                  'char' => 38,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 115,
                'char' => 38,
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
                      'variable' => 'storage',
                      'expr' => 
                      array (
                        'type' => 'array',
                        'left' => 
                        array (
                          0 => 
                          array (
                            'value' => 
                            array (
                              'type' => 'variable',
                              'value' => 'storage',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 116,
                              'char' => 35,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 116,
                            'char' => 35,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 116,
                        'char' => 36,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 116,
                      'char' => 36,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 117,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 118,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'storage',
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 118,
                'char' => 37,
              ),
              'key' => 'key',
              'value' => 'service',
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
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 119,
                      'char' => 18,
                    ),
                    'name' => 'addStorage',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'service',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 119,
                          'char' => 37,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 119,
                        'char' => 37,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'key',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 119,
                          'char' => 42,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 119,
                        'char' => 42,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 119,
                    'char' => 43,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 120,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 123,
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
                                'value' => 'use_jwt_access_tokens',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 124,
                                'char' => 48,
                              ),
                              'value' => 
                              array (
                                'type' => 'bool',
                                'value' => 'false',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 124,
                                'char' => 55,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 124,
                              'char' => 55,
                            ),
                            1 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'store_encrypted_token_string',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 125,
                                'char' => 48,
                              ),
                              'value' => 
                              array (
                                'type' => 'bool',
                                'value' => 'true',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 125,
                                'char' => 54,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 125,
                              'char' => 54,
                            ),
                            2 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'use_openid_connect',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 126,
                                'char' => 48,
                              ),
                              'value' => 
                              array (
                                'type' => 'bool',
                                'value' => 'false',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 126,
                                'char' => 55,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 126,
                              'char' => 55,
                            ),
                            3 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'id_lifetime',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 127,
                                'char' => 48,
                              ),
                              'value' => 
                              array (
                                'type' => 'int',
                                'value' => '3600',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 127,
                                'char' => 54,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 127,
                              'char' => 54,
                            ),
                            4 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'access_lifetime',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 128,
                                'char' => 48,
                              ),
                              'value' => 
                              array (
                                'type' => 'int',
                                'value' => '3600',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 128,
                                'char' => 54,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 128,
                              'char' => 54,
                            ),
                            5 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'www_realm',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 129,
                                'char' => 48,
                              ),
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => 'Service',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 129,
                                'char' => 59,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 129,
                              'char' => 59,
                            ),
                            6 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'token_param_name',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 130,
                                'char' => 48,
                              ),
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => 'access_token',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 130,
                                'char' => 64,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 130,
                              'char' => 64,
                            ),
                            7 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'token_bearer_header_name',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 131,
                                'char' => 48,
                              ),
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => 'Bearer',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 131,
                                'char' => 58,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 131,
                              'char' => 58,
                            ),
                            8 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'enforce_state',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 132,
                                'char' => 48,
                              ),
                              'value' => 
                              array (
                                'type' => 'bool',
                                'value' => 'true',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 132,
                                'char' => 54,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 132,
                              'char' => 54,
                            ),
                            9 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'require_exact_redirect_uri',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 133,
                                'char' => 48,
                              ),
                              'value' => 
                              array (
                                'type' => 'bool',
                                'value' => 'true',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 133,
                                'char' => 54,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 133,
                              'char' => 54,
                            ),
                            10 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'allow_implicit',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 134,
                                'char' => 48,
                              ),
                              'value' => 
                              array (
                                'type' => 'bool',
                                'value' => 'false',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 134,
                                'char' => 55,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 134,
                              'char' => 55,
                            ),
                            11 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'allow_credentials_in_request_body',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 135,
                                'char' => 48,
                              ),
                              'value' => 
                              array (
                                'type' => 'bool',
                                'value' => 'true',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 135,
                                'char' => 54,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 135,
                              'char' => 54,
                            ),
                            12 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'allow_public_clients',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 136,
                                'char' => 48,
                              ),
                              'value' => 
                              array (
                                'type' => 'bool',
                                'value' => 'true',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 136,
                                'char' => 54,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 136,
                              'char' => 54,
                            ),
                            13 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'always_issue_new_refresh_token',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 137,
                                'char' => 48,
                              ),
                              'value' => 
                              array (
                                'type' => 'bool',
                                'value' => 'false',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 138,
                                'char' => 9,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 138,
                              'char' => 9,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 138,
                          'char' => 10,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 138,
                        'char' => 10,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 138,
                          'char' => 18,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 138,
                        'char' => 18,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 138,
                    'char' => 19,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 138,
                  'char' => 19,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 140,
              'char' => 11,
            ),
            7 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'grantTypes',
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 140,
                'char' => 37,
              ),
              'key' => 'key',
              'value' => 'type',
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
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 141,
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
                          'value' => 'type',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 141,
                          'char' => 36,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 141,
                        'char' => 36,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'key',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 141,
                          'char' => 41,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 141,
                        'char' => 41,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 141,
                    'char' => 42,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 142,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 144,
              'char' => 11,
            ),
            8 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'responseTypes',
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 144,
                'char' => 40,
              ),
              'key' => 'key',
              'value' => 'type',
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
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 145,
                      'char' => 18,
                    ),
                    'name' => 'addResponseType',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'type',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 145,
                          'char' => 39,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 145,
                        'char' => 39,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'key',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 145,
                          'char' => 44,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 145,
                        'char' => 44,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 145,
                    'char' => 45,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 146,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 148,
              'char' => 11,
            ),
            9 => 
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
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 148,
                    'char' => 40,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 148,
                  'char' => 40,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 149,
              'char' => 11,
            ),
            10 => 
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
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 149,
                    'char' => 40,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 149,
                  'char' => 40,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 150,
              'char' => 11,
            ),
            11 => 
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
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 150,
                    'char' => 60,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 150,
                  'char' => 60,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 151,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param mixed storage       (array or OAuth2\\Storage) - single object or array of objects implementing the
     *                             required storage types (ClientCredentialsInterface and AccessTokenInterface as a minimum)
     * @param array $config        specify a different token lifetime, token header name, etc
     * @param array $grantTypes    An array of OAuth2\\GrantType\\GrantTypeInterface to use for granting access tokens
     * @param array $responseTypes Response types to use.  array keys should be "code" and and "token" for
     *                             Access Token and Authorization Code response types
     * @param OAuth2\\TokenType\\TokenTypeInterface                     $tokenType           The token type object to use. Valid token types are "bearer" and "mac"
     * @param OAuth2\\ScopeInterface                                   $scopeUtil           The scope utility class to use to validate scope
     * @param OAuth2\\ClientAssertionType\\ClientAssertionTypeInterface $clientAssertionType The method in which to verify the client identity.  Default is HttpBasic
     *
     * @ingroup oauth2_section_7
     *',
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 89,
          'last-line' => 160,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'addStorage',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'storage',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 161,
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
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 161,
                'char' => 59,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 161,
              'char' => 59,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'bool',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'setStorage',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 163,
                  'char' => 24,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 164,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'type',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 164,
                  'char' => 17,
                ),
                1 => 
                array (
                  'variable' => 'interfaceClass',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 164,
                  'char' => 33,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 167,
              'char' => 10,
            ),
            2 => 
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
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 167,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'storageMap',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 167,
                      'char' => 34,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 167,
                    'char' => 34,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'key',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 167,
                    'char' => 38,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 167,
                  'char' => 40,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 167,
                'char' => 40,
              ),
              'statements' => 
              array (
                0 => 
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
                        'type' => 'variable',
                        'value' => 'storage',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 168,
                        'char' => 25,
                      ),
                      'right' => 
                      array (
                        'type' => 'null',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 168,
                        'char' => 33,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 168,
                      'char' => 33,
                    ),
                    'right' => 
                    array (
                      'type' => 'not',
                      'left' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'is_subclass_of',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'storage',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 168,
                              'char' => 58,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 168,
                            'char' => 58,
                          ),
                          1 => 
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
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 168,
                                  'char' => 65,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'storageMap',
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 168,
                                  'char' => 76,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 168,
                                'char' => 76,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'key',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 168,
                                'char' => 80,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 168,
                              'char' => 81,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 168,
                            'char' => 81,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 168,
                        'char' => 83,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 168,
                      'char' => 83,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 168,
                    'char' => 83,
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
                                    'value' => 'storage of type \\"%s\\" must implement interface \\"%s\\"',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 169,
                                    'char' => 117,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 169,
                                  'char' => 117,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'key',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 169,
                                    'char' => 122,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 169,
                                  'char' => 122,
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
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 169,
                                        'char' => 129,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'storageMap',
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 169,
                                        'char' => 140,
                                      ),
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 169,
                                      'char' => 140,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'key',
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 169,
                                      'char' => 144,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 169,
                                    'char' => 145,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 169,
                                  'char' => 145,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 169,
                              'char' => 146,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 169,
                            'char' => 146,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 169,
                        'char' => 147,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 170,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 171,
                  'char' => 15,
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
                      'property' => 'storages',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'variable',
                          'value' => 'key',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 171,
                          'char' => 35,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'storage',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 171,
                        'char' => 46,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 171,
                      'char' => 46,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 174,
                  'char' => 14,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'and',
                    'left' => 
                    array (
                      'type' => 'identical',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'key',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 174,
                        'char' => 22,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'client',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 174,
                        'char' => 34,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 174,
                      'char' => 34,
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
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 174,
                              'char' => 48,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'storages',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 174,
                              'char' => 57,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 174,
                            'char' => 57,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'client_credentials',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 174,
                            'char' => 78,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 174,
                          'char' => 80,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 174,
                        'char' => 80,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 174,
                      'char' => 80,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 174,
                    'char' => 80,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'is_subclass_of',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'storage',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 175,
                              'char' => 42,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 175,
                            'char' => 42,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'OAuth2\\\\Storage\\\\ClientCredentialsInterface',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 175,
                              'char' => 89,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 175,
                            'char' => 89,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 175,
                        'char' => 91,
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
                              'assign-type' => 'object-property-array-index',
                              'operator' => 'assign',
                              'variable' => 'this',
                              'property' => 'storages',
                              'index-expr' => 
                              array (
                                0 => 
                                array (
                                  'type' => 'string',
                                  'value' => 'client_credentials',
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 176,
                                  'char' => 60,
                                ),
                              ),
                              'expr' => 
                              array (
                                'type' => 'variable',
                                'value' => 'storage',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 176,
                                'char' => 71,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 176,
                              'char' => 71,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 177,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 178,
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
                        'type' => 'list',
                        'left' => 
                        array (
                          'type' => 'and',
                          'left' => 
                          array (
                            'type' => 'identical',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 178,
                              'char' => 29,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'client_credentials',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 178,
                              'char' => 53,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 178,
                            'char' => 53,
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
                                  'type' => 'property-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'this',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 178,
                                    'char' => 67,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'storages',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 178,
                                    'char' => 76,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 178,
                                  'char' => 76,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'client',
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 178,
                                  'char' => 85,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 178,
                                'char' => 86,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 178,
                              'char' => 86,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 178,
                            'char' => 86,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 178,
                          'char' => 86,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 178,
                        'char' => 88,
                      ),
                      'statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'if',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'is_subclass_of',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'storage',
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 179,
                                  'char' => 42,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 179,
                                'char' => 42,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'OAuth2\\\\Storage\\\\ClientInterface',
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 179,
                                  'char' => 78,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 179,
                                'char' => 78,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 179,
                            'char' => 80,
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
                                  'assign-type' => 'object-property-array-index',
                                  'operator' => 'assign',
                                  'variable' => 'this',
                                  'property' => 'storages',
                                  'index-expr' => 
                                  array (
                                    0 => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'client',
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 180,
                                      'char' => 48,
                                    ),
                                  ),
                                  'expr' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'storage',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 180,
                                    'char' => 59,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 180,
                                  'char' => 59,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 181,
                              'char' => 17,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 182,
                          'char' => 13,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 183,
                      'char' => 9,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 183,
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
                    'type' => 'list',
                    'left' => 
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
                            'value' => 'key',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 183,
                            'char' => 31,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 183,
                          'char' => 31,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'null',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 183,
                          'char' => 41,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 183,
                        'char' => 41,
                      ),
                      'right' => 
                      array (
                        'type' => 'not',
                        'left' => 
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
                                'value' => 'key',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 183,
                                'char' => 58,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 183,
                              'char' => 58,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 183,
                          'char' => 59,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 183,
                        'char' => 59,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 183,
                      'char' => 59,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 183,
                    'char' => 61,
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
                                    'value' => 'unknown storage key \\"%s\\", must be one of [%s]',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 184,
                                    'char' => 106,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 184,
                                  'char' => 106,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'key',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 184,
                                    'char' => 111,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 184,
                                  'char' => 111,
                                ),
                                2 => 
                                array (
                                  'parameter' => 
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
                                          'value' => ', ',
                                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                          'line' => 184,
                                          'char' => 125,
                                        ),
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 184,
                                        'char' => 125,
                                      ),
                                      1 => 
                                      array (
                                        'parameter' => 
                                        array (
                                          'type' => 'fcall',
                                          'name' => 'array_keys',
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
                                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                                  'line' => 184,
                                                  'char' => 143,
                                                ),
                                                'right' => 
                                                array (
                                                  'type' => 'variable',
                                                  'value' => 'storageMap',
                                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                                  'line' => 184,
                                                  'char' => 154,
                                                ),
                                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                                'line' => 184,
                                                'char' => 154,
                                              ),
                                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                              'line' => 184,
                                              'char' => 154,
                                            ),
                                          ),
                                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                          'line' => 184,
                                          'char' => 155,
                                        ),
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 184,
                                        'char' => 155,
                                      ),
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 184,
                                    'char' => 156,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 184,
                                  'char' => 156,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 184,
                              'char' => 157,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 184,
                            'char' => 157,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 184,
                        'char' => 158,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 185,
                      'char' => 9,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 185,
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
                      'variable' => 'setStorage',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 186,
                        'char' => 35,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 186,
                      'char' => 35,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 187,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 187,
                      'char' => 46,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'storageMap',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 187,
                      'char' => 58,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 187,
                    'char' => 58,
                  ),
                  'key' => 'type',
                  'value' => 'interfaceClass',
                  'reverse' => 0,
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'is_subclass_of',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'storage',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 188,
                              'char' => 42,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 188,
                            'char' => 42,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'interfaceClass',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 188,
                              'char' => 58,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 188,
                            'char' => 58,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 188,
                        'char' => 60,
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
                              'assign-type' => 'object-property-array-index',
                              'operator' => 'assign',
                              'variable' => 'this',
                              'property' => 'storages',
                              'index-expr' => 
                              array (
                                0 => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'type',
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 189,
                                  'char' => 44,
                                ),
                              ),
                              'expr' => 
                              array (
                                'type' => 'variable',
                                'value' => 'storage',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 189,
                                'char' => 55,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 189,
                              'char' => 55,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 190,
                          'char' => 23,
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
                              'variable' => 'setStorage',
                              'expr' => 
                              array (
                                'type' => 'bool',
                                'value' => 'true',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 190,
                                'char' => 42,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 190,
                              'char' => 42,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 191,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 192,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 194,
                  'char' => 14,
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
                      'value' => 'setStorage',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 194,
                      'char' => 28,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 194,
                    'char' => 28,
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
                                    'value' => 'storage of class \\"%s\\" must implement one of [%s]',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 195,
                                    'char' => 113,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 195,
                                  'char' => 113,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'fcall',
                                    'name' => 'get_class',
                                    'call-type' => 1,
                                    'parameters' => 
                                    array (
                                      0 => 
                                      array (
                                        'parameter' => 
                                        array (
                                          'type' => 'variable',
                                          'value' => 'storage',
                                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                          'line' => 195,
                                          'char' => 132,
                                        ),
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 195,
                                        'char' => 132,
                                      ),
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 195,
                                    'char' => 133,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 195,
                                  'char' => 133,
                                ),
                                2 => 
                                array (
                                  'parameter' => 
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
                                          'value' => ', ',
                                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                          'line' => 195,
                                          'char' => 147,
                                        ),
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 195,
                                        'char' => 147,
                                      ),
                                      1 => 
                                      array (
                                        'parameter' => 
                                        array (
                                          'type' => 'property-access',
                                          'left' => 
                                          array (
                                            'type' => 'variable',
                                            'value' => 'this',
                                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                            'line' => 195,
                                            'char' => 154,
                                          ),
                                          'right' => 
                                          array (
                                            'type' => 'variable',
                                            'value' => 'storageMap',
                                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                            'line' => 195,
                                            'char' => 165,
                                          ),
                                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                          'line' => 195,
                                          'char' => 165,
                                        ),
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 195,
                                        'char' => 165,
                                      ),
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 195,
                                    'char' => 166,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 195,
                                  'char' => 166,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 195,
                              'char' => 167,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 195,
                            'char' => 167,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 195,
                        'char' => 168,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 196,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 197,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 198,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Set a storage object for the server
     *
     * @param OAuth\\Storage\\StorageInterface storage An object implementing one of the Storage interfaces
     * @param string key If null, the storage is set to the key of each storage interface it implements
     *
     * @see storageMap
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
            'line' => 162,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 161,
          'last-line' => 200,
          'char' => 19,
        ),
        2 => 
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
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 200,
                'char' => 63,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 200,
              'char' => 64,
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
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 200,
                'char' => 84,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 200,
              'char' => 84,
            ),
          ),
          'statements' => 
          array (
            0 => 
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
                    'value' => 'key',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 202,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 202,
                  'char' => 24,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'string',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 202,
                  'char' => 35,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 202,
                'char' => 35,
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
                      'assign-type' => 'object-property-array-index',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => 'grantTypes',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'variable',
                          'value' => 'key',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 203,
                          'char' => 37,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'grantType',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 203,
                        'char' => 50,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 203,
                      'char' => 50,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 204,
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
                      'assign-type' => 'object-property-array-index',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => 'grantTypes',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'grantType',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 205,
                            'char' => 44,
                          ),
                          'name' => 'getQuerystringIdentifier',
                          'call-type' => 1,
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 205,
                          'char' => 71,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'grantType',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 205,
                        'char' => 84,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 205,
                      'char' => 84,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 206,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 209,
              'char' => 16,
            ),
            1 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 209,
                    'char' => 18,
                  ),
                  'name' => 'getTokenController',
                  'call-type' => 1,
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 209,
                  'char' => 40,
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
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 209,
                      'char' => 63,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 209,
                    'char' => 63,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 209,
                'char' => 64,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 211,
              'char' => 5,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
            'line' => 201,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 200,
          'last-line' => 213,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'addResponseType',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'responseType',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 213,
              'char' => 49,
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
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 213,
                'char' => 69,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 213,
              'char' => 69,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'bool',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'setResponse',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 215,
                    'char' => 33,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 215,
                  'char' => 33,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 216,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'type',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 216,
                  'char' => 17,
                ),
                1 => 
                array (
                  'variable' => 'interfaceClass',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 216,
                  'char' => 33,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 218,
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
                  'variable' => 'key',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 218,
                      'char' => 24,
                    ),
                    'name' => 'normalizeResponseType',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'key',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 218,
                          'char' => 50,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 218,
                        'char' => 50,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 218,
                    'char' => 51,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 218,
                  'char' => 51,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 220,
              'char' => 10,
            ),
            3 => 
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
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 220,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'responseTypeMap',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 220,
                      'char' => 39,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 220,
                    'char' => 39,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'key',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 220,
                    'char' => 43,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 220,
                  'char' => 45,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 220,
                'char' => 45,
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
                      'name' => 'is_subclass_of',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'responseType',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 221,
                            'char' => 44,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 221,
                          'char' => 44,
                        ),
                        1 => 
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
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 221,
                                'char' => 51,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'responseTypeMap',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 221,
                                'char' => 67,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 221,
                              'char' => 67,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 221,
                              'char' => 71,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 221,
                            'char' => 72,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 221,
                          'char' => 72,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 221,
                      'char' => 74,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 221,
                    'char' => 74,
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
                                    'value' => 'responseType of type \\"%s\\" must implement interface \\"%s\\"',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 222,
                                    'char' => 122,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 222,
                                  'char' => 122,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'key',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 222,
                                    'char' => 127,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 222,
                                  'char' => 127,
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
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 222,
                                        'char' => 134,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'responseTypeMap',
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 222,
                                        'char' => 150,
                                      ),
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 222,
                                      'char' => 150,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'key',
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 222,
                                      'char' => 154,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 222,
                                    'char' => 155,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 222,
                                  'char' => 155,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 222,
                              'char' => 156,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 222,
                            'char' => 156,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 222,
                        'char' => 157,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 223,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 224,
                  'char' => 15,
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
                      'property' => 'responseTypes',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'variable',
                          'value' => 'key',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 224,
                          'char' => 40,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'responseType',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 224,
                        'char' => 56,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 224,
                      'char' => 56,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 225,
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
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'and',
                      'left' => 
                      array (
                        'type' => 'not-equals',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'key',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 225,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'null',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 225,
                          'char' => 32,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 225,
                        'char' => 32,
                      ),
                      'right' => 
                      array (
                        'type' => 'not',
                        'left' => 
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
                                'value' => 'key',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 225,
                                'char' => 49,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 225,
                              'char' => 49,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 225,
                          'char' => 50,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 225,
                        'char' => 50,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 225,
                      'char' => 50,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 225,
                    'char' => 52,
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
                                    'value' => 'unknown responseType key \\"%s\\", must be one of [%s]',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 226,
                                    'char' => 111,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 226,
                                  'char' => 111,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'key',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 226,
                                    'char' => 116,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 226,
                                  'char' => 116,
                                ),
                                2 => 
                                array (
                                  'parameter' => 
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
                                          'value' => ', ',
                                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                          'line' => 226,
                                          'char' => 130,
                                        ),
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 226,
                                        'char' => 130,
                                      ),
                                      1 => 
                                      array (
                                        'parameter' => 
                                        array (
                                          'type' => 'fcall',
                                          'name' => 'array_keys',
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
                                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                                  'line' => 226,
                                                  'char' => 148,
                                                ),
                                                'right' => 
                                                array (
                                                  'type' => 'variable',
                                                  'value' => 'responseTypeMap',
                                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                                  'line' => 226,
                                                  'char' => 164,
                                                ),
                                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                                'line' => 226,
                                                'char' => 164,
                                              ),
                                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                              'line' => 226,
                                              'char' => 164,
                                            ),
                                          ),
                                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                          'line' => 226,
                                          'char' => 165,
                                        ),
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 226,
                                        'char' => 165,
                                      ),
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 226,
                                    'char' => 166,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 226,
                                  'char' => 166,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 226,
                              'char' => 167,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 226,
                            'char' => 167,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 226,
                        'char' => 168,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 227,
                      'char' => 9,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 227,
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
                      'variable' => 'setResponse',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 228,
                        'char' => 36,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 228,
                      'char' => 36,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 229,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 229,
                      'char' => 46,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'responseTypeMap',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 229,
                      'char' => 63,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 229,
                    'char' => 63,
                  ),
                  'key' => 'type',
                  'value' => 'interfaceClass',
                  'reverse' => 0,
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'is_subclass_of',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'responseType',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 230,
                              'char' => 47,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 230,
                            'char' => 47,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'interfaceClass',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 230,
                              'char' => 63,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 230,
                            'char' => 63,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 230,
                        'char' => 65,
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
                              'assign-type' => 'object-property-array-index',
                              'operator' => 'assign',
                              'variable' => 'this',
                              'property' => 'responseTypes',
                              'index-expr' => 
                              array (
                                0 => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'type',
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 231,
                                  'char' => 49,
                                ),
                              ),
                              'expr' => 
                              array (
                                'type' => 'variable',
                                'value' => 'responseType',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 231,
                                'char' => 65,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 231,
                              'char' => 65,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 232,
                          'char' => 23,
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
                              'variable' => 'setResponse',
                              'expr' => 
                              array (
                                'type' => 'bool',
                                'value' => 'true',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 232,
                                'char' => 43,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 232,
                              'char' => 43,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 233,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 234,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 236,
                  'char' => 14,
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
                      'value' => 'setResponse',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 236,
                      'char' => 29,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 236,
                    'char' => 29,
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
                                    'value' => 'Unknown response type %s.  Please implement one of [%s]',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 237,
                                    'char' => 118,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 237,
                                  'char' => 118,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'fcall',
                                    'name' => 'get_class',
                                    'call-type' => 1,
                                    'parameters' => 
                                    array (
                                      0 => 
                                      array (
                                        'parameter' => 
                                        array (
                                          'type' => 'variable',
                                          'value' => 'responseType',
                                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                          'line' => 237,
                                          'char' => 142,
                                        ),
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 237,
                                        'char' => 142,
                                      ),
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 237,
                                    'char' => 143,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 237,
                                  'char' => 143,
                                ),
                                2 => 
                                array (
                                  'parameter' => 
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
                                          'value' => ', ',
                                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                          'line' => 237,
                                          'char' => 157,
                                        ),
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 237,
                                        'char' => 157,
                                      ),
                                      1 => 
                                      array (
                                        'parameter' => 
                                        array (
                                          'type' => 'property-access',
                                          'left' => 
                                          array (
                                            'type' => 'variable',
                                            'value' => 'this',
                                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                            'line' => 237,
                                            'char' => 164,
                                          ),
                                          'right' => 
                                          array (
                                            'type' => 'variable',
                                            'value' => 'responseTypeMap',
                                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                            'line' => 237,
                                            'char' => 180,
                                          ),
                                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                          'line' => 237,
                                          'char' => 180,
                                        ),
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 237,
                                        'char' => 180,
                                      ),
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 237,
                                    'char' => 181,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 237,
                                  'char' => 181,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 237,
                              'char' => 182,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 237,
                            'char' => 182,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 237,
                        'char' => 183,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 238,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 239,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 240,
              'char' => 5,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
            'line' => 214,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 213,
          'last-line' => 242,
          'char' => 19,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setAuthorizeController',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'authorizeController',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'AuthorizeControllerInterface',
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 242,
                'char' => 93,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 242,
              'char' => 94,
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
                  'property' => 'authorizeController',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'authorizeController',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 244,
                    'char' => 60,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 244,
                  'char' => 60,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 245,
              'char' => 5,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
            'line' => 243,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 242,
          'last-line' => 247,
          'char' => 19,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getAuthorizeController',
          'statements' => 
          array (
            0 => 
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
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 249,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'authorizeController',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 249,
                      'char' => 46,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 249,
                    'char' => 46,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 249,
                  'char' => 46,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'null',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 249,
                  'char' => 55,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 249,
                'char' => 55,
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
                      'property' => 'authorizeController',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 250,
                          'char' => 50,
                        ),
                        'name' => 'createDefaultAuthorizeController',
                        'call-type' => 1,
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 250,
                        'char' => 85,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 250,
                      'char' => 85,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 251,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 252,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 252,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'authorizeController',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 252,
                  'char' => 41,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 252,
                'char' => 41,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 253,
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
                'cast' => 
                array (
                  'type' => 'variable',
                  'value' => 'AuthorizeControllerInterface',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 248,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 248,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
            'line' => 248,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 247,
          'last-line' => 255,
          'char' => 19,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setTokenController',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'tokenController',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'TokenControllerInterface',
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 255,
                'char' => 81,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 255,
              'char' => 82,
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
                  'property' => 'tokenController',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'tokenController',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 257,
                    'char' => 52,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 257,
                  'char' => 52,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 258,
              'char' => 5,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
            'line' => 256,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 255,
          'last-line' => 260,
          'char' => 19,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getTokenController',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 262,
                    'char' => 17,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'tokenController',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 262,
                    'char' => 35,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 262,
                  'char' => 35,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 262,
                  'char' => 42,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 262,
                'char' => 42,
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
                      'property' => 'tokenController',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 263,
                          'char' => 46,
                        ),
                        'name' => 'createDefaultTokenController',
                        'call-type' => 1,
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 263,
                        'char' => 77,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 263,
                      'char' => 77,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 264,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 265,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 265,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'tokenController',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 265,
                  'char' => 37,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 265,
                'char' => 37,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 266,
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
                'cast' => 
                array (
                  'type' => 'variable',
                  'value' => 'TokenControllerInterface',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 261,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 261,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
            'line' => 261,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 260,
          'last-line' => 268,
          'char' => 19,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setResourceController',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'resourceController',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'ResourceControllerInterface',
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 268,
                'char' => 90,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 268,
              'char' => 91,
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
                  'property' => 'resourceController',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'resourceController',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 270,
                    'char' => 58,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 270,
                  'char' => 58,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 271,
              'char' => 5,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
            'line' => 269,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 268,
          'last-line' => 273,
          'char' => 19,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getResourceController',
          'statements' => 
          array (
            0 => 
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
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 275,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'resourceController',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 275,
                      'char' => 45,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 275,
                    'char' => 45,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 275,
                  'char' => 45,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'null',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 275,
                  'char' => 54,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 275,
                'char' => 54,
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
                      'property' => 'resourceController',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 276,
                          'char' => 49,
                        ),
                        'name' => 'createDefaultResourceController',
                        'call-type' => 1,
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 276,
                        'char' => 83,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 276,
                      'char' => 83,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 277,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 278,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 278,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'resourceController',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 278,
                  'char' => 40,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 278,
                'char' => 40,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 279,
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
                'cast' => 
                array (
                  'type' => 'variable',
                  'value' => 'ResourceControllerInterface',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 274,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 274,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
            'line' => 274,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 273,
          'last-line' => 281,
          'char' => 19,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'normalizeResponseType',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'name',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 281,
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
                  'variable' => 'types',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 283,
                  'char' => 18,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 286,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'not',
                  'left' => 
                  array (
                    'type' => 'empty',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 286,
                      'char' => 25,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 286,
                    'char' => 25,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 286,
                  'char' => 25,
                ),
                'right' => 
                array (
                  'type' => 'not-identical',
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
                          'value' => 'name',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 286,
                          'char' => 38,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 286,
                        'char' => 38,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => ' ',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 286,
                          'char' => 43,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 286,
                        'char' => 43,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 286,
                    'char' => 47,
                  ),
                  'right' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 286,
                    'char' => 55,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 286,
                  'char' => 55,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 286,
                'char' => 55,
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
                      'variable' => 'types',
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
                              'value' => ' ',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 287,
                              'char' => 36,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 287,
                            'char' => 36,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'name',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 287,
                              'char' => 42,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 287,
                            'char' => 42,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 287,
                        'char' => 43,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 287,
                      'char' => 43,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 288,
                  'char' => 16,
                ),
                1 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'sort',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'types',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 288,
                          'char' => 23,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 288,
                        'char' => 23,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 288,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 289,
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
                      'variable' => 'name',
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
                              'value' => ' ',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 289,
                              'char' => 35,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 289,
                            'char' => 35,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'types',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 289,
                              'char' => 42,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 289,
                            'char' => 42,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 289,
                        'char' => 43,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 289,
                      'char' => 43,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 290,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 292,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'name',
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 292,
                'char' => 20,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 293,
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
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 282,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
            'line' => 282,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 281,
          'last-line' => 295,
          'char' => 22,
        ),
        11 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'createDefaultAuthorizeController',
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
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 297,
                        'char' => 24,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'storages',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 297,
                        'char' => 33,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 297,
                      'char' => 33,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'client',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 297,
                      'char' => 42,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 297,
                    'char' => 44,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 297,
                  'char' => 44,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 297,
                'char' => 44,
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
                          'value' => 'You must supply a storage object implementing \\OAuth2\\Storage\\ClientInterface to use the authorize server',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 298,
                          'char' => 146,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 298,
                        'char' => 146,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 298,
                    'char' => 147,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 299,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 300,
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
                  'type' => 'int',
                  'value' => '0',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 300,
                  'char' => 15,
                ),
                'right' => 
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
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 300,
                          'char' => 28,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'responseTypes',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 300,
                          'char' => 42,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 300,
                        'char' => 42,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 300,
                      'char' => 42,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 300,
                  'char' => 44,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 300,
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
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => 'responseTypes',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 301,
                          'char' => 44,
                        ),
                        'name' => 'getDefaultResponseTypes',
                        'call-type' => 1,
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 301,
                        'char' => 70,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 301,
                      'char' => 70,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 302,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 303,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'and',
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
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 303,
                      'char' => 17,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 303,
                      'char' => 24,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 303,
                    'char' => 24,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'use_openid_connect',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 303,
                    'char' => 45,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 303,
                  'char' => 48,
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
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 303,
                          'char' => 62,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'responseTypes',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 303,
                          'char' => 76,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 303,
                        'char' => 76,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'id_token',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 303,
                        'char' => 87,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 303,
                      'char' => 89,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 303,
                    'char' => 89,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 303,
                  'char' => 89,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 303,
                'char' => 89,
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
                      'assign-type' => 'object-property-array-index',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => 'responseTypes',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'id_token',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 304,
                          'char' => 47,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 304,
                          'char' => 56,
                        ),
                        'name' => 'createDefaultIdTokenResponseType',
                        'call-type' => 1,
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 304,
                        'char' => 91,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 304,
                      'char' => 91,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 305,
                  'char' => 14,
                ),
                1 => 
                array (
                  'type' => 'if',
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
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 305,
                        'char' => 21,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'config',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 305,
                        'char' => 28,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 305,
                      'char' => 28,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'allow_implicit',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 305,
                      'char' => 45,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 305,
                    'char' => 47,
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
                          'assign-type' => 'object-property-array-index',
                          'operator' => 'assign',
                          'variable' => 'this',
                          'property' => 'responseTypes',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'string',
                              'value' => 'id_token token',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 306,
                              'char' => 57,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 306,
                              'char' => 66,
                            ),
                            'name' => 'createDefaultIdTokenTokenResponseType',
                            'call-type' => 1,
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 306,
                            'char' => 106,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 306,
                          'char' => 106,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 307,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 308,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 309,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'config',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 309,
                  'char' => 19,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 310,
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
                  'variable' => 'config',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'array_intersect_key',
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
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 310,
                            'char' => 47,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'config',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 310,
                            'char' => 54,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 310,
                          'char' => 54,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 310,
                        'char' => 54,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'array_flip',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
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
                                      'value' => ' ',
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 310,
                                      'char' => 78,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 310,
                                    'char' => 78,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'allow_implicit enforce_state require_exact_redirect_uri',
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 310,
                                      'char' => 137,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 310,
                                    'char' => 137,
                                  ),
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 310,
                                'char' => 138,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 310,
                              'char' => 138,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 310,
                          'char' => 139,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 310,
                        'char' => 139,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 310,
                    'char' => 140,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 310,
                  'char' => 140,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 312,
              'char' => 10,
            ),
            5 => 
            array (
              'type' => 'if',
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
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 312,
                    'char' => 17,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'config',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 312,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 312,
                  'char' => 24,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'use_openid_connect',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 312,
                  'char' => 45,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 312,
                'char' => 47,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'OpenIDAuthorizeController',
                    'dynamic' => 0,
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
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 313,
                              'char' => 55,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'storages',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 313,
                              'char' => 64,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 313,
                            'char' => 64,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'client',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 313,
                            'char' => 73,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 313,
                          'char' => 74,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 313,
                        'char' => 74,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 313,
                            'char' => 81,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'responseTypes',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 313,
                            'char' => 95,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 313,
                          'char' => 95,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 313,
                        'char' => 95,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 313,
                          'char' => 103,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 313,
                        'char' => 103,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 313,
                            'char' => 110,
                          ),
                          'name' => 'getScopeUtil',
                          'call-type' => 1,
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 313,
                          'char' => 125,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 313,
                        'char' => 125,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 313,
                    'char' => 126,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 314,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 316,
              'char' => 14,
            ),
            6 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'new',
                'class' => 'AuthorizeController',
                'dynamic' => 0,
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
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 316,
                          'char' => 45,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'storages',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 316,
                          'char' => 54,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 316,
                        'char' => 54,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'client',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 316,
                        'char' => 63,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 316,
                      'char' => 64,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 316,
                    'char' => 64,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 316,
                        'char' => 71,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'responseTypes',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 316,
                        'char' => 85,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 316,
                      'char' => 85,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 316,
                    'char' => 85,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 316,
                      'char' => 93,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 316,
                    'char' => 93,
                  ),
                  3 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 316,
                        'char' => 100,
                      ),
                      'name' => 'getScopeUtil',
                      'call-type' => 1,
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 316,
                      'char' => 115,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 316,
                    'char' => 115,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 316,
                'char' => 116,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 317,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 295,
          'last-line' => 319,
          'char' => 22,
        ),
        12 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'createDefaultTokenController',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'int',
                  'value' => '0',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 321,
                  'char' => 15,
                ),
                'right' => 
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
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 321,
                          'char' => 28,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'grantTypes',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 321,
                          'char' => 39,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 321,
                        'char' => 39,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 321,
                      'char' => 39,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 321,
                  'char' => 41,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 321,
                'char' => 41,
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
                      'property' => 'grantTypes',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 322,
                          'char' => 41,
                        ),
                        'name' => 'getDefaultGrantTypes',
                        'call-type' => 1,
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 322,
                        'char' => 64,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 322,
                      'char' => 64,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 323,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 325,
              'char' => 10,
            ),
            1 => 
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
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 325,
                        'char' => 25,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'clientAssertionType',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 325,
                        'char' => 45,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 325,
                      'char' => 45,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 325,
                    'char' => 45,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 325,
                'char' => 47,
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
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 326,
                      'char' => 26,
                    ),
                    1 => 
                    array (
                      'variable' => 'config',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 326,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 328,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 328,
                      'char' => 35,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'grantTypes',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 328,
                      'char' => 47,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 328,
                    'char' => 47,
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
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 329,
                              'char' => 41,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'ClientAssertionTypeInterface',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 329,
                              'char' => 71,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 329,
                            'char' => 71,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 329,
                          'char' => 73,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 329,
                        'char' => 73,
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
                                  'type' => 'property-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'this',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 330,
                                    'char' => 36,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'storages',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 330,
                                    'char' => 45,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 330,
                                  'char' => 45,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'client_credentials',
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 330,
                                  'char' => 66,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 330,
                                'char' => 68,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 330,
                              'char' => 68,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 330,
                            'char' => 68,
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
                                      'value' => 'You must supply a storage object implementing OAuth2\\Storage\\ClientCredentialsInterface to use the token server',
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 331,
                                      'char' => 164,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 331,
                                    'char' => 164,
                                  ),
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 331,
                                'char' => 165,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 332,
                              'char' => 21,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 333,
                          'char' => 23,
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
                                'name' => 'array_intersect_key',
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
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 333,
                                        'char' => 59,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'config',
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 333,
                                        'char' => 66,
                                      ),
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 333,
                                      'char' => 66,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 333,
                                    'char' => 66,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'fcall',
                                      'name' => 'array_flip',
                                      'call-type' => 1,
                                      'parameters' => 
                                      array (
                                        0 => 
                                        array (
                                          'parameter' => 
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
                                                  'value' => ' ',
                                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                                  'line' => 333,
                                                  'char' => 90,
                                                ),
                                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                                'line' => 333,
                                                'char' => 90,
                                              ),
                                              1 => 
                                              array (
                                                'parameter' => 
                                                array (
                                                  'type' => 'string',
                                                  'value' => 'allow_credentials_in_request_body allow_public_clients',
                                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                                  'line' => 333,
                                                  'char' => 148,
                                                ),
                                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                                'line' => 333,
                                                'char' => 148,
                                              ),
                                            ),
                                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                            'line' => 333,
                                            'char' => 149,
                                          ),
                                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                          'line' => 333,
                                          'char' => 149,
                                        ),
                                      ),
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 333,
                                      'char' => 150,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 333,
                                    'char' => 150,
                                  ),
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 333,
                                'char' => 151,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 333,
                              'char' => 151,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 334,
                          'char' => 23,
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
                                'type' => 'new',
                                'class' => 'HttpBasic',
                                'dynamic' => 0,
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
                                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                          'line' => 334,
                                          'char' => 72,
                                        ),
                                        'right' => 
                                        array (
                                          'type' => 'variable',
                                          'value' => 'storages',
                                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                          'line' => 334,
                                          'char' => 81,
                                        ),
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 334,
                                        'char' => 81,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'string',
                                        'value' => 'client_credentials',
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 334,
                                        'char' => 102,
                                      ),
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 334,
                                      'char' => 103,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 334,
                                    'char' => 103,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'config',
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 334,
                                      'char' => 111,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 334,
                                    'char' => 111,
                                  ),
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 334,
                                'char' => 112,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 334,
                              'char' => 112,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 335,
                          'char' => 25,
                        ),
                        3 => 
                        array (
                          'type' => 'break',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 336,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 337,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 338,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 340,
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
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 340,
                        'char' => 24,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'storages',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 340,
                        'char' => 33,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 340,
                      'char' => 33,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'client',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 340,
                      'char' => 42,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 340,
                    'char' => 44,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 340,
                  'char' => 44,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 340,
                'char' => 44,
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
                          'value' => 'You must supply a storage object implementing OAuth2\\Storage\\ClientInterface to use the token server',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 341,
                          'char' => 141,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 341,
                        'char' => 141,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 341,
                    'char' => 142,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 342,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 343,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'accessTokenResponseType',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 343,
                  'char' => 36,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 344,
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
                  'variable' => 'accessTokenResponseType',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 344,
                      'char' => 44,
                    ),
                    'name' => 'getAccessTokenResponseType',
                    'call-type' => 1,
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 344,
                    'char' => 73,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 344,
                  'char' => 73,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 346,
              'char' => 14,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'new',
                'class' => 'TokenController',
                'dynamic' => 0,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'accessTokenResponseType',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 346,
                      'char' => 59,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 346,
                    'char' => 59,
                  ),
                  1 => 
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
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 346,
                          'char' => 66,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'storages',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 346,
                          'char' => 75,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 346,
                        'char' => 75,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'client',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 346,
                        'char' => 84,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 346,
                      'char' => 85,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 346,
                    'char' => 85,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 346,
                        'char' => 92,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'grantTypes',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 346,
                        'char' => 103,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 346,
                      'char' => 103,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 346,
                    'char' => 103,
                  ),
                  3 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 346,
                        'char' => 110,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'clientAssertionType',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 346,
                        'char' => 130,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 346,
                      'char' => 130,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 346,
                    'char' => 130,
                  ),
                  4 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 346,
                        'char' => 137,
                      ),
                      'name' => 'getScopeUtil',
                      'call-type' => 1,
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 346,
                      'char' => 152,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 346,
                    'char' => 152,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 346,
                'char' => 153,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 347,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 319,
          'last-line' => 349,
          'char' => 22,
        ),
        13 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'getDefaultResponseTypes',
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
                  'variable' => 'responseTypes',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 351,
                    'char' => 31,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 351,
                  'char' => 31,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 353,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
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
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 353,
                    'char' => 17,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'config',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 353,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 353,
                  'char' => 24,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'allow_implicit',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 353,
                  'char' => 41,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 353,
                'char' => 43,
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
                      'variable' => 'responseTypes',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'token',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 354,
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
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 354,
                          'char' => 47,
                        ),
                        'name' => 'getAccessTokenResponseType',
                        'call-type' => 1,
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 354,
                        'char' => 76,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 354,
                      'char' => 76,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 355,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 357,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
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
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 357,
                    'char' => 17,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'config',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 357,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 357,
                  'char' => 24,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'use_openid_connect',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 357,
                  'char' => 45,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 357,
                'char' => 47,
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
                      'variable' => 'responseTypes',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'id_token',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 358,
                          'char' => 41,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 358,
                          'char' => 50,
                        ),
                        'name' => 'getIdTokenResponseType',
                        'call-type' => 1,
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 358,
                        'char' => 75,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 358,
                      'char' => 75,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 359,
                  'char' => 14,
                ),
                1 => 
                array (
                  'type' => 'if',
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
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 359,
                        'char' => 21,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'config',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 359,
                        'char' => 28,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 359,
                      'char' => 28,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'allow_implicit',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 359,
                      'char' => 45,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 359,
                    'char' => 47,
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
                          'variable' => 'responseTypes',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'string',
                              'value' => 'id_token token',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 360,
                              'char' => 51,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 360,
                              'char' => 60,
                            ),
                            'name' => 'getIdTokenTokenResponseType',
                            'call-type' => 1,
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 360,
                            'char' => 90,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 360,
                          'char' => 90,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 361,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 362,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 364,
              'char' => 10,
            ),
            3 => 
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
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 364,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'storages',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 364,
                      'char' => 32,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 364,
                    'char' => 32,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'authorization_code',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 364,
                    'char' => 53,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 364,
                  'char' => 55,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 364,
                'char' => 55,
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
                      'variable' => 'config',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 365,
                      'char' => 23,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 366,
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
                      'variable' => 'config',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'array_intersect_key',
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
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 366,
                                'char' => 51,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'config',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 366,
                                'char' => 58,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 366,
                              'char' => 58,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 366,
                            'char' => 58,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'fcall',
                              'name' => 'array_flip',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
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
                                          'value' => ' ',
                                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                          'line' => 366,
                                          'char' => 82,
                                        ),
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 366,
                                        'char' => 82,
                                      ),
                                      1 => 
                                      array (
                                        'parameter' => 
                                        array (
                                          'type' => 'string',
                                          'value' => 'enforce_redirect auth_code_lifetime',
                                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                          'line' => 366,
                                          'char' => 121,
                                        ),
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 366,
                                        'char' => 121,
                                      ),
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 366,
                                    'char' => 122,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 366,
                                  'char' => 122,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 366,
                              'char' => 123,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 366,
                            'char' => 123,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 366,
                        'char' => 124,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 366,
                      'char' => 124,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 367,
                  'char' => 14,
                ),
                2 => 
                array (
                  'type' => 'if',
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
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 367,
                        'char' => 21,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'config',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 367,
                        'char' => 28,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 367,
                      'char' => 28,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'use_openid_connect',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 367,
                      'char' => 49,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 367,
                    'char' => 51,
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
                          'type' => 'list',
                          'left' => 
                          array (
                            'type' => 'instanceof',
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
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 368,
                                  'char' => 27,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'storages',
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 368,
                                  'char' => 36,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 368,
                                'char' => 36,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'authorization_code',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 368,
                                'char' => 57,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 368,
                              'char' => 68,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'OpenIDAuthorizationCodeInterface',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 368,
                              'char' => 102,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 368,
                            'char' => 102,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 368,
                          'char' => 104,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 368,
                        'char' => 104,
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
                                  'value' => 'Your authorization_code storage must implement OAuth2\\OpenID\\Storage\\AuthorizationCodeInterface to work when \'use_openid_connect\' is true',
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 369,
                                  'char' => 186,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 369,
                                'char' => 186,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 369,
                            'char' => 187,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 370,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 371,
                      'char' => 19,
                    ),
                    1 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'array-index',
                          'operator' => 'assign',
                          'variable' => 'responseTypes',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'string',
                              'value' => 'code',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 371,
                              'char' => 41,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'new',
                            'class' => 'OpenIDAuthorizationCodeResponseType',
                            'dynamic' => 0,
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
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 371,
                                      'char' => 90,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'storages',
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 371,
                                      'char' => 99,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 371,
                                    'char' => 99,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'authorization_code',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 371,
                                    'char' => 120,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 371,
                                  'char' => 121,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 371,
                                'char' => 121,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'config',
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 371,
                                  'char' => 129,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 371,
                                'char' => 129,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 371,
                            'char' => 130,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 371,
                          'char' => 130,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 372,
                      'char' => 19,
                    ),
                    2 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'array-index',
                          'operator' => 'assign',
                          'variable' => 'responseTypes',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'string',
                              'value' => 'code id_token',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 372,
                              'char' => 50,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'new',
                            'class' => 'CodeIdToken',
                            'dynamic' => 0,
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
                                    'value' => 'responseTypes',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 372,
                                    'char' => 83,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'code',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 372,
                                    'char' => 90,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 372,
                                  'char' => 91,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 372,
                                'char' => 91,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'responseTypes',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 372,
                                    'char' => 106,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'id_token',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 372,
                                    'char' => 117,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 372,
                                  'char' => 118,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 372,
                                'char' => 118,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 372,
                            'char' => 119,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 372,
                          'char' => 119,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 373,
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
                          'assign-type' => 'array-index',
                          'operator' => 'assign',
                          'variable' => 'responseTypes',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'string',
                              'value' => 'code',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 374,
                              'char' => 41,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'new',
                            'class' => 'AuthorizationCodeResponseType',
                            'dynamic' => 0,
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
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 374,
                                      'char' => 84,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'storages',
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 374,
                                      'char' => 93,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 374,
                                    'char' => 93,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'authorization_code',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 374,
                                    'char' => 114,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 374,
                                  'char' => 115,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 374,
                                'char' => 115,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'config',
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 374,
                                  'char' => 123,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 374,
                                'char' => 123,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 374,
                            'char' => 124,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 374,
                          'char' => 124,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 375,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 376,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 378,
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
                        'value' => 'responseTypes',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 378,
                        'char' => 31,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 378,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 378,
                  'char' => 34,
                ),
                'right' => 
                array (
                  'type' => 'int',
                  'value' => '0',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 378,
                  'char' => 38,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 378,
                'char' => 38,
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
                          'value' => 'You must supply an array of response_types in the constructor or implement a OAuth2\\Storage\\AuthorizationCodeInterface storage object or set \'allow_implicit\' to true and implement a OAuth2\\Storage\\AccessTokenInterface storage object',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 379,
                          'char' => 273,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 379,
                        'char' => 273,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 379,
                    'char' => 274,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 380,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 382,
              'char' => 14,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'responseTypes',
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 382,
                'char' => 29,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 383,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 349,
          'last-line' => 385,
          'char' => 22,
        ),
        14 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'createDefaultResourceController',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
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
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 387,
                    'char' => 17,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'config',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 387,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 387,
                  'char' => 24,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'use_jwt_access_tokens',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 387,
                  'char' => 48,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 387,
                'char' => 50,
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
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 389,
                              'char' => 28,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'storages',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 389,
                              'char' => 37,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 389,
                            'char' => 37,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'access_token',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 389,
                            'char' => 52,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 389,
                          'char' => 55,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 389,
                        'char' => 55,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 389,
                      'char' => 55,
                    ),
                    'right' => 
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
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'this',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 389,
                                'char' => 64,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'storages',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 389,
                                'char' => 73,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 389,
                              'char' => 73,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'access_token',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 389,
                              'char' => 88,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 389,
                            'char' => 99,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'JwtAccessTokenInterface',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 389,
                            'char' => 124,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 389,
                          'char' => 124,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 389,
                        'char' => 126,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 389,
                      'char' => 126,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 389,
                    'char' => 126,
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
                          'assign-type' => 'object-property-array-index',
                          'operator' => 'assign',
                          'variable' => 'this',
                          'property' => 'storages',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'string',
                              'value' => 'access_token',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 390,
                              'char' => 50,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 390,
                              'char' => 59,
                            ),
                            'name' => 'createDefaultJwtAccessTokenStorage',
                            'call-type' => 1,
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 390,
                            'char' => 96,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 390,
                          'char' => 96,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 391,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 392,
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
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 392,
                            'char' => 30,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'storages',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 392,
                            'char' => 39,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 392,
                          'char' => 39,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'access_token',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 392,
                          'char' => 54,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 392,
                        'char' => 56,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 392,
                      'char' => 56,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 392,
                    'char' => 56,
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
                              'value' => 'You must supply a storage object implementing OAuth2\\Storage\\AccessTokenInterface or use JwtAccessTokens to use the resource server',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 393,
                              'char' => 172,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 393,
                            'char' => 172,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 393,
                        'char' => 173,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 394,
                      'char' => 9,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 396,
                  'char' => 10,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 396,
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
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 396,
                    'char' => 18,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'tokenType',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 396,
                    'char' => 29,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 396,
                  'char' => 29,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 396,
                'char' => 29,
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
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 397,
                          'char' => 40,
                        ),
                        'name' => 'getDefaultTokenType',
                        'call-type' => 1,
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 397,
                        'char' => 62,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 397,
                      'char' => 62,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 398,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 400,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'config',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 400,
                  'char' => 19,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 401,
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
                  'variable' => 'config',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'array_intersect_key',
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
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 401,
                            'char' => 47,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'config',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 401,
                            'char' => 54,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 401,
                          'char' => 54,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 401,
                        'char' => 54,
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
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'www_realm',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 401,
                                'char' => 68,
                              ),
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => '',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 401,
                                'char' => 72,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 401,
                              'char' => 72,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 401,
                          'char' => 73,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 401,
                        'char' => 73,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 401,
                    'char' => 74,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 401,
                  'char' => 74,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 403,
              'char' => 14,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'new',
                'class' => 'ResourceController',
                'dynamic' => 0,
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
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 403,
                        'char' => 44,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'tokenType',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 403,
                        'char' => 54,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 403,
                      'char' => 54,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 403,
                    'char' => 54,
                  ),
                  1 => 
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
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 403,
                          'char' => 61,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'storages',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 403,
                          'char' => 70,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 403,
                        'char' => 70,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'access_token',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 403,
                        'char' => 85,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 403,
                      'char' => 86,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 403,
                    'char' => 86,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 403,
                      'char' => 94,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 403,
                    'char' => 94,
                  ),
                  3 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 403,
                        'char' => 101,
                      ),
                      'name' => 'getScopeUtil',
                      'call-type' => 1,
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 403,
                      'char' => 116,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 403,
                    'char' => 116,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 403,
                'char' => 117,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 404,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 385,
          'last-line' => 406,
          'char' => 22,
        ),
        15 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'createDefaultUserInfoController',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
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
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 408,
                    'char' => 17,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'config',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 408,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 408,
                  'char' => 24,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'use_jwt_access_tokens',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 408,
                  'char' => 48,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 408,
                'char' => 50,
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
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 410,
                              'char' => 28,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'storages',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 410,
                              'char' => 37,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 410,
                            'char' => 37,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'access_token',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 410,
                            'char' => 52,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 410,
                          'char' => 55,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 410,
                        'char' => 55,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 410,
                      'char' => 55,
                    ),
                    'right' => 
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
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'this',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 410,
                                'char' => 64,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'storages',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 410,
                                'char' => 73,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 410,
                              'char' => 73,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'access_token',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 410,
                              'char' => 88,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 410,
                            'char' => 99,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'JwtAccessTokenInterface',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 410,
                            'char' => 124,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 410,
                          'char' => 124,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 410,
                        'char' => 126,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 410,
                      'char' => 126,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 410,
                    'char' => 126,
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
                          'assign-type' => 'object-property-array-index',
                          'operator' => 'assign',
                          'variable' => 'this',
                          'property' => 'storages',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'string',
                              'value' => 'access_token',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 411,
                              'char' => 50,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 411,
                              'char' => 59,
                            ),
                            'name' => 'createDefaultJwtAccessTokenStorage',
                            'call-type' => 1,
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 411,
                            'char' => 96,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 411,
                          'char' => 96,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 412,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 413,
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
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 413,
                            'char' => 30,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'storages',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 413,
                            'char' => 39,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 413,
                          'char' => 39,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'access_token',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 413,
                          'char' => 54,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 413,
                        'char' => 56,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 413,
                      'char' => 56,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 413,
                    'char' => 56,
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
                              'value' => 'You must supply a storage object implementing OAuth2\\Storage\\AccessTokenInterface or use JwtAccessTokens to use the UserInfo server',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 414,
                              'char' => 172,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 414,
                            'char' => 172,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 414,
                        'char' => 173,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 415,
                      'char' => 9,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 417,
                  'char' => 10,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 417,
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
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 417,
                        'char' => 24,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'storages',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 417,
                        'char' => 33,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 417,
                      'char' => 33,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'user_claims',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 417,
                      'char' => 47,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 417,
                    'char' => 49,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 417,
                  'char' => 49,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 417,
                'char' => 49,
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
                          'value' => 'You must supply a storage object implementing OAuth2\\OpenID\\Storage\\UserClaimsInterface to use the UserInfo server',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 418,
                          'char' => 155,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 418,
                        'char' => 155,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 418,
                    'char' => 156,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 419,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 421,
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
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 421,
                    'char' => 18,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'tokenType',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 421,
                    'char' => 29,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 421,
                  'char' => 29,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 421,
                'char' => 29,
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
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 422,
                          'char' => 40,
                        ),
                        'name' => 'getDefaultTokenType',
                        'call-type' => 1,
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 422,
                        'char' => 62,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 422,
                      'char' => 62,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 423,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 425,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'config',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 425,
                  'char' => 19,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 426,
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
                  'variable' => 'config',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'array_intersect_key',
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
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 426,
                            'char' => 47,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'config',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 426,
                            'char' => 54,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 426,
                          'char' => 54,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 426,
                        'char' => 54,
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
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'www_realm',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 426,
                                'char' => 68,
                              ),
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => '',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 426,
                                'char' => 72,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 426,
                              'char' => 72,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 426,
                          'char' => 73,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 426,
                        'char' => 73,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 426,
                    'char' => 74,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 426,
                  'char' => 74,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 428,
              'char' => 14,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'new',
                'class' => 'UserInfoController',
                'dynamic' => 0,
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
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 428,
                        'char' => 44,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'tokenType',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 428,
                        'char' => 54,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 428,
                      'char' => 54,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 428,
                    'char' => 54,
                  ),
                  1 => 
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
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 428,
                          'char' => 61,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'storages',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 428,
                          'char' => 70,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 428,
                        'char' => 70,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'access_token',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 428,
                        'char' => 85,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 428,
                      'char' => 86,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 428,
                    'char' => 86,
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
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 428,
                          'char' => 93,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'storages',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 428,
                          'char' => 102,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 428,
                        'char' => 102,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'user_claims',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 428,
                        'char' => 116,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 428,
                      'char' => 117,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 428,
                    'char' => 117,
                  ),
                  3 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 428,
                      'char' => 125,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 428,
                    'char' => 125,
                  ),
                  4 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 428,
                        'char' => 132,
                      ),
                      'name' => 'getScopeUtil',
                      'call-type' => 1,
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 428,
                      'char' => 147,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 428,
                    'char' => 147,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 428,
                'char' => 148,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 429,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 406,
          'last-line' => 432,
          'char' => 22,
        ),
        16 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'getDefaultGrantTypes',
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
                  'variable' => 'grantTypes',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 434,
                    'char' => 28,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 434,
                  'char' => 28,
                ),
                1 => 
                array (
                  'variable' => 'config',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 434,
                  'char' => 36,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 436,
              'char' => 10,
            ),
            1 => 
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
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 436,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'storages',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 436,
                      'char' => 32,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 436,
                    'char' => 32,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'user_credentials',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 436,
                    'char' => 51,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 436,
                  'char' => 53,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 436,
                'char' => 53,
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
                      'variable' => 'grantTypes',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'password',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 437,
                          'char' => 38,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => 'UserCredentials',
                        'dynamic' => 0,
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
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 437,
                                  'char' => 67,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'storages',
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 437,
                                  'char' => 76,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 437,
                                'char' => 76,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'user_credentials',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 437,
                                'char' => 95,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 437,
                              'char' => 96,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 437,
                            'char' => 96,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 437,
                        'char' => 97,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 437,
                      'char' => 97,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 438,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 440,
              'char' => 10,
            ),
            2 => 
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
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 440,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'storages',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 440,
                      'char' => 32,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 440,
                    'char' => 32,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'client_credentials',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 440,
                    'char' => 53,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 440,
                  'char' => 55,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 440,
                'char' => 55,
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
                      'variable' => 'config',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'array_intersect_key',
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
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 441,
                                'char' => 51,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'config',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 441,
                                'char' => 58,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 441,
                              'char' => 58,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 441,
                            'char' => 58,
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
                                  'key' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'allow_credentials_in_request_body',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 441,
                                    'char' => 96,
                                  ),
                                  'value' => 
                                  array (
                                    'type' => 'string',
                                    'value' => '',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 441,
                                    'char' => 100,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 441,
                                  'char' => 100,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 441,
                              'char' => 101,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 441,
                            'char' => 101,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 441,
                        'char' => 102,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 441,
                      'char' => 102,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 442,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'grantTypes',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'client_credentials',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 442,
                          'char' => 48,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => 'ClientCredentials',
                        'dynamic' => 0,
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
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 442,
                                  'char' => 79,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'storages',
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 442,
                                  'char' => 88,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 442,
                                'char' => 88,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'client_credentials',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 442,
                                'char' => 109,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 442,
                              'char' => 110,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 442,
                            'char' => 110,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'config',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 442,
                              'char' => 118,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 442,
                            'char' => 118,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 442,
                        'char' => 119,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 442,
                      'char' => 119,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 443,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 445,
              'char' => 10,
            ),
            3 => 
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
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 445,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'storages',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 445,
                      'char' => 32,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 445,
                    'char' => 32,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'refresh_token',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 445,
                    'char' => 48,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 445,
                  'char' => 50,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 445,
                'char' => 50,
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
                      'variable' => 'config',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'array_intersect_key',
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
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 446,
                                'char' => 51,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'config',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 446,
                                'char' => 58,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 446,
                              'char' => 58,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 446,
                            'char' => 58,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'fcall',
                              'name' => 'array_flip',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
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
                                          'value' => ' ',
                                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                          'line' => 446,
                                          'char' => 82,
                                        ),
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 446,
                                        'char' => 82,
                                      ),
                                      1 => 
                                      array (
                                        'parameter' => 
                                        array (
                                          'type' => 'string',
                                          'value' => 'always_issue_new_refresh_token unset_refresh_token_after_use',
                                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                          'line' => 446,
                                          'char' => 146,
                                        ),
                                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                        'line' => 446,
                                        'char' => 146,
                                      ),
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 446,
                                    'char' => 147,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 446,
                                  'char' => 147,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 446,
                              'char' => 148,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 446,
                            'char' => 148,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 446,
                        'char' => 149,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 446,
                      'char' => 149,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 447,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'grantTypes',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'refresh_token',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 447,
                          'char' => 43,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => 'RefreshToken',
                        'dynamic' => 0,
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
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 447,
                                  'char' => 69,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'storages',
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 447,
                                  'char' => 78,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 447,
                                'char' => 78,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'refresh_token',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 447,
                                'char' => 94,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 447,
                              'char' => 95,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 447,
                            'char' => 95,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'config',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 447,
                              'char' => 103,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 447,
                            'char' => 103,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 447,
                        'char' => 104,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 447,
                      'char' => 104,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 448,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 450,
              'char' => 10,
            ),
            4 => 
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
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 450,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'storages',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 450,
                      'char' => 32,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 450,
                    'char' => 32,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'authorization_code',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 450,
                    'char' => 53,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 450,
                  'char' => 55,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 450,
                'char' => 55,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
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
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 451,
                        'char' => 21,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'config',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 451,
                        'char' => 28,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 451,
                      'char' => 28,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'use_openid_connect',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 451,
                      'char' => 49,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 451,
                    'char' => 51,
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
                          'type' => 'list',
                          'left' => 
                          array (
                            'type' => 'instanceof',
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
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 452,
                                  'char' => 27,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'storages',
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 452,
                                  'char' => 36,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 452,
                                'char' => 36,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'authorization_code',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 452,
                                'char' => 57,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 452,
                              'char' => 68,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'OpenIDAuthorizationCodeInterface',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 452,
                              'char' => 102,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 452,
                            'char' => 102,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 452,
                          'char' => 104,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 452,
                        'char' => 104,
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
                                  'value' => 'Your authorization_code storage must implement OAuth2\\OpenID\\Storage\\AuthorizationCodeInterface to work when \'use_openid_connect\' is true',
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 453,
                                  'char' => 186,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 453,
                                'char' => 186,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 453,
                            'char' => 187,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 454,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 455,
                      'char' => 19,
                    ),
                    1 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'array-index',
                          'operator' => 'assign',
                          'variable' => 'grantTypes',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'string',
                              'value' => 'authorization_code',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 455,
                              'char' => 52,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'new',
                            'class' => 'OpenIDAuthorizationCodeGrantType',
                            'dynamic' => 0,
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
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 455,
                                      'char' => 98,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'storages',
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 455,
                                      'char' => 107,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 455,
                                    'char' => 107,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'authorization_code',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 455,
                                    'char' => 128,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 455,
                                  'char' => 129,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 455,
                                'char' => 129,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 455,
                            'char' => 130,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 455,
                          'char' => 130,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 456,
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
                          'assign-type' => 'array-index',
                          'operator' => 'assign',
                          'variable' => 'grantTypes',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'string',
                              'value' => 'authorization_code',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 457,
                              'char' => 52,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'new',
                            'class' => 'AuthorizationCode',
                            'dynamic' => 0,
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
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 457,
                                      'char' => 83,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'storages',
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 457,
                                      'char' => 92,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 457,
                                    'char' => 92,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'authorization_code',
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 457,
                                    'char' => 113,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                  'line' => 457,
                                  'char' => 114,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 457,
                                'char' => 114,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 457,
                            'char' => 115,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 457,
                          'char' => 115,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 458,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 459,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 461,
              'char' => 10,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
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
                        'value' => 'grantTypes',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 461,
                        'char' => 28,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 461,
                      'char' => 28,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 461,
                  'char' => 31,
                ),
                'right' => 
                array (
                  'type' => 'int',
                  'value' => '0',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 461,
                  'char' => 35,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 461,
                'char' => 35,
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
                          'value' => 'Unable to build default grant types - You must supply an array of grant_types in the constructor',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 462,
                          'char' => 137,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 462,
                        'char' => 137,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 462,
                    'char' => 138,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 463,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 465,
              'char' => 14,
            ),
            6 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'grantTypes',
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 465,
                'char' => 26,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 466,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 432,
          'last-line' => 468,
          'char' => 22,
        ),
        17 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'getAccessTokenResponseType',
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
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 470,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'responseTypes',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 470,
                      'char' => 37,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 470,
                    'char' => 37,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'token',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 470,
                    'char' => 45,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 470,
                  'char' => 47,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 470,
                'char' => 47,
              ),
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
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 471,
                        'char' => 25,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'responseTypes',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 471,
                        'char' => 39,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 471,
                      'char' => 39,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'token',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 471,
                      'char' => 47,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 471,
                    'char' => 48,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 472,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 474,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
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
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 474,
                    'char' => 17,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'config',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 474,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 474,
                  'char' => 24,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'use_jwt_access_tokens',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 474,
                  'char' => 48,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 474,
                'char' => 50,
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
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 475,
                      'char' => 25,
                    ),
                    'name' => 'createDefaultJwtAccessTokenResponseType',
                    'call-type' => 1,
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 475,
                    'char' => 67,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 476,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 478,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 478,
                  'char' => 21,
                ),
                'name' => 'createDefaultAccessTokenResponseType',
                'call-type' => 1,
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 478,
                'char' => 60,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 479,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 468,
          'last-line' => 481,
          'char' => 22,
        ),
        18 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'getIdTokenResponseType',
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
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 483,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'responseTypes',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 483,
                      'char' => 37,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 483,
                    'char' => 37,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'id_token',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 483,
                    'char' => 48,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 483,
                  'char' => 50,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 483,
                'char' => 50,
              ),
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
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 484,
                        'char' => 25,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'responseTypes',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 484,
                        'char' => 39,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 484,
                      'char' => 39,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'id_token',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 484,
                      'char' => 50,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 484,
                    'char' => 51,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 485,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 487,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 487,
                  'char' => 21,
                ),
                'name' => 'createDefaultIdTokenResponseType',
                'call-type' => 1,
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 487,
                'char' => 56,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 488,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 481,
          'last-line' => 490,
          'char' => 22,
        ),
        19 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'getIdTokenTokenResponseType',
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
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 492,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'responseTypes',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 492,
                      'char' => 37,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 492,
                    'char' => 37,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'id_token token',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 492,
                    'char' => 54,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 492,
                  'char' => 56,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 492,
                'char' => 56,
              ),
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
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 493,
                        'char' => 25,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'responseTypes',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 493,
                        'char' => 39,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 493,
                      'char' => 39,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'id_token token',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 493,
                      'char' => 56,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 493,
                    'char' => 57,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 494,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 496,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 496,
                  'char' => 21,
                ),
                'name' => 'createDefaultIdTokenTokenResponseType',
                'call-type' => 1,
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 496,
                'char' => 61,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 497,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 490,
          'last-line' => 499,
          'char' => 22,
        ),
        20 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getScopeUtil',
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
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 501,
                    'char' => 18,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'scopeUtil',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 501,
                    'char' => 29,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 501,
                  'char' => 29,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 501,
                'char' => 29,
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
                      'variable' => 'storage',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 502,
                      'char' => 24,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 503,
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
                      'variable' => 'storage',
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
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 503,
                                'char' => 38,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'storages',
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 503,
                                'char' => 47,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 503,
                              'char' => 47,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'scope',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 503,
                              'char' => 55,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 503,
                            'char' => 57,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 503,
                          'char' => 57,
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
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 503,
                              'char' => 64,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'storages',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 503,
                              'char' => 73,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 503,
                            'char' => 73,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'scope',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 503,
                            'char' => 81,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 503,
                          'char' => 83,
                        ),
                        'extra' => 
                        array (
                          'type' => 'null',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 503,
                          'char' => 89,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 503,
                        'char' => 89,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 503,
                      'char' => 89,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 504,
                  'char' => 15,
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
                      'property' => 'scopeUtil',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => 'Scope',
                        'dynamic' => 0,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'storage',
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 504,
                              'char' => 52,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 504,
                            'char' => 52,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 504,
                        'char' => 53,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 504,
                      'char' => 53,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 505,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 506,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 506,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'scopeUtil',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 506,
                  'char' => 31,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 506,
                'char' => 31,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 507,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 499,
          'last-line' => 509,
          'char' => 19,
        ),
        21 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'getDefaultTokenType',
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
                  'variable' => 'config',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 511,
                  'char' => 19,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 512,
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
                    'name' => 'array_intersect_key',
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
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 512,
                            'char' => 47,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'config',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 512,
                            'char' => 54,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 512,
                          'char' => 54,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 512,
                        'char' => 54,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'array_flip',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
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
                                      'value' => ' ',
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 512,
                                      'char' => 78,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 512,
                                    'char' => 78,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'token_param_name token_bearer_header_name',
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 512,
                                      'char' => 123,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 512,
                                    'char' => 123,
                                  ),
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 512,
                                'char' => 124,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 512,
                              'char' => 124,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 512,
                          'char' => 125,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 512,
                        'char' => 125,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 512,
                    'char' => 126,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 512,
                  'char' => 126,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 514,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'new',
                'class' => 'Bearer',
                'dynamic' => 0,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 514,
                      'char' => 33,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 514,
                    'char' => 33,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 514,
                'char' => 34,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 515,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 509,
          'last-line' => 517,
          'char' => 22,
        ),
        22 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'createDefaultJwtAccessTokenStorage',
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
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 519,
                        'char' => 24,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'storages',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 519,
                        'char' => 33,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 519,
                      'char' => 33,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'public_key',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 519,
                      'char' => 46,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 519,
                    'char' => 48,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 519,
                  'char' => 48,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 519,
                'char' => 48,
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
                          'value' => 'You must supply a storage object implementing OAuth2\\Storage\\PublicKeyInterface to use crypto tokens',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 520,
                          'char' => 141,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 520,
                        'char' => 141,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 520,
                    'char' => 142,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 521,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 522,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'tokenStorage',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 522,
                    'char' => 32,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 522,
                  'char' => 32,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 523,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'not',
                  'left' => 
                  array (
                    'type' => 'empty',
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
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 523,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 523,
                          'char' => 31,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 523,
                        'char' => 31,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'store_encrypted_token_string',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 523,
                        'char' => 62,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 523,
                      'char' => 65,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 523,
                    'char' => 65,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 523,
                  'char' => 65,
                ),
                'right' => 
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
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 523,
                        'char' => 78,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'storages',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 523,
                        'char' => 87,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 523,
                      'char' => 87,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'access_token',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 523,
                      'char' => 102,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 523,
                    'char' => 104,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 523,
                  'char' => 104,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 523,
                'char' => 104,
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
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 524,
                            'char' => 37,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'storages',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 524,
                            'char' => 46,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 524,
                          'char' => 46,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'access_token',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 524,
                          'char' => 61,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 524,
                        'char' => 62,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 524,
                      'char' => 62,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 525,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 527,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'new',
                'class' => 'JwtAccessTokenStorage',
                'dynamic' => 0,
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
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 527,
                          'char' => 47,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'storages',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 527,
                          'char' => 56,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 527,
                        'char' => 56,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'public_key',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 527,
                        'char' => 69,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 527,
                      'char' => 70,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 527,
                    'char' => 70,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'tokenStorage',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 527,
                      'char' => 84,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 527,
                    'char' => 84,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 527,
                'char' => 85,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 528,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 517,
          'last-line' => 530,
          'char' => 22,
        ),
        23 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'createDefaultJwtAccessTokenResponseType',
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
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 532,
                        'char' => 24,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'storages',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 532,
                        'char' => 33,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 532,
                      'char' => 33,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'public_key',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 532,
                      'char' => 46,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 532,
                    'char' => 48,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 532,
                  'char' => 48,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 532,
                'char' => 48,
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
                          'value' => 'You must supply a storage object implementing OAuth2\\Storage\\PublicKeyInterface to use crypto tokens',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 533,
                          'char' => 141,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 533,
                        'char' => 141,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 533,
                    'char' => 142,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 534,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 536,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'tokenStorage',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 536,
                    'char' => 32,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 536,
                  'char' => 32,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 537,
              'char' => 10,
            ),
            2 => 
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
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 537,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'storages',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 537,
                      'char' => 32,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 537,
                    'char' => 32,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'access_token',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 537,
                    'char' => 47,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 537,
                  'char' => 49,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 537,
                'char' => 49,
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
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 538,
                            'char' => 37,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'storages',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 538,
                            'char' => 46,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 538,
                          'char' => 46,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'access_token',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 538,
                          'char' => 61,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 538,
                        'char' => 62,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 538,
                      'char' => 62,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 539,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 541,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'refreshStorage',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 541,
                    'char' => 34,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 541,
                  'char' => 34,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 542,
              'char' => 10,
            ),
            4 => 
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
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 542,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'storages',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 542,
                      'char' => 32,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 542,
                    'char' => 32,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'refresh_token',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 542,
                    'char' => 48,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 542,
                  'char' => 50,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 542,
                'char' => 50,
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
                      'variable' => 'refreshStorage',
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
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 543,
                            'char' => 39,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'storages',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 543,
                            'char' => 48,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 543,
                          'char' => 48,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'refresh_token',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 543,
                          'char' => 64,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 543,
                        'char' => 65,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 543,
                      'char' => 65,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 544,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 546,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'config',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 546,
                  'char' => 19,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 547,
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
                  'variable' => 'config',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'array_intersect_key',
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
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 547,
                            'char' => 47,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'config',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 547,
                            'char' => 54,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 547,
                          'char' => 54,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 547,
                        'char' => 54,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'array_flip',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
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
                                      'value' => ' ',
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 547,
                                      'char' => 78,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 547,
                                    'char' => 78,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'store_encrypted_token_string issuer access_lifetime refresh_token_lifetime',
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 547,
                                      'char' => 156,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 547,
                                    'char' => 156,
                                  ),
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 547,
                                'char' => 157,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 547,
                              'char' => 157,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 547,
                          'char' => 158,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 547,
                        'char' => 158,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 547,
                    'char' => 159,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 547,
                  'char' => 159,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 549,
              'char' => 14,
            ),
            7 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'new',
                'class' => 'JwtAccessToken',
                'dynamic' => 0,
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
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 549,
                          'char' => 40,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'storages',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 549,
                          'char' => 49,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 549,
                        'char' => 49,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'public_key',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 549,
                        'char' => 62,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 549,
                      'char' => 63,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 549,
                    'char' => 63,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'tokenStorage',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 549,
                      'char' => 77,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 549,
                    'char' => 77,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'refreshStorage',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 549,
                      'char' => 93,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 549,
                    'char' => 93,
                  ),
                  3 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 549,
                      'char' => 101,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 549,
                    'char' => 101,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 549,
                'char' => 102,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 550,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 530,
          'last-line' => 552,
          'char' => 22,
        ),
        24 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'createDefaultAccessTokenResponseType',
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
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 554,
                        'char' => 24,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'storages',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 554,
                        'char' => 33,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 554,
                      'char' => 33,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'access_token',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 554,
                      'char' => 48,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 554,
                    'char' => 50,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 554,
                  'char' => 50,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 554,
                'char' => 50,
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
                          'value' => 'You must supply a response type implementing OAuth2\\ResponseType\\AccessTokenInterface, or a storage object implementing OAuth2\\Storage\\AccessTokenInterface to use the token server',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 555,
                          'char' => 220,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 555,
                        'char' => 220,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 555,
                    'char' => 221,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 556,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 558,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'refreshStorage',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 558,
                    'char' => 34,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 558,
                  'char' => 34,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 559,
              'char' => 10,
            ),
            2 => 
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
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 559,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'storages',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 559,
                      'char' => 32,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 559,
                    'char' => 32,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'refresh_token',
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 559,
                    'char' => 48,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 559,
                  'char' => 50,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 559,
                'char' => 50,
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
                      'variable' => 'refreshStorage',
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
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 560,
                            'char' => 39,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'storages',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 560,
                            'char' => 48,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 560,
                          'char' => 48,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'refresh_token',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 560,
                          'char' => 64,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 560,
                        'char' => 65,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 560,
                      'char' => 65,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 561,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 563,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'config',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 563,
                  'char' => 19,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 564,
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
                  'variable' => 'config',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'array_intersect_key',
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
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 564,
                            'char' => 47,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'config',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 564,
                            'char' => 54,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 564,
                          'char' => 54,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 564,
                        'char' => 54,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'array_flip',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
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
                                      'value' => ' ',
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 564,
                                      'char' => 78,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 564,
                                    'char' => 78,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'access_lifetime refresh_token_lifetime',
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 564,
                                      'char' => 120,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 564,
                                    'char' => 120,
                                  ),
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 564,
                                'char' => 121,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 564,
                              'char' => 121,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 564,
                          'char' => 122,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 564,
                        'char' => 122,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 564,
                    'char' => 123,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 564,
                  'char' => 123,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 565,
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
                  'variable' => 'config',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'string',
                      'value' => 'token_type',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 565,
                      'char' => 32,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'ternary',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 565,
                        'char' => 41,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'tokenType',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 565,
                        'char' => 52,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 565,
                      'char' => 52,
                    ),
                    'right' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 565,
                          'char' => 59,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'tokenType',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 565,
                          'char' => 70,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 565,
                        'char' => 70,
                      ),
                      'name' => 'getTokenType',
                      'call-type' => 1,
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 565,
                      'char' => 86,
                    ),
                    'extra' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 565,
                          'char' => 94,
                        ),
                        'name' => 'getDefaultTokenType',
                        'call-type' => 1,
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 565,
                        'char' => 117,
                      ),
                      'name' => 'getTokenType',
                      'call-type' => 1,
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 565,
                      'char' => 132,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 565,
                    'char' => 132,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 565,
                  'char' => 132,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 567,
              'char' => 14,
            ),
            6 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'new',
                'class' => 'AccessToken',
                'dynamic' => 0,
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
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 567,
                          'char' => 37,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'storages',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 567,
                          'char' => 46,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 567,
                        'char' => 46,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'access_token',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 567,
                        'char' => 61,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 567,
                      'char' => 62,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 567,
                    'char' => 62,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'refreshStorage',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 567,
                      'char' => 78,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 567,
                    'char' => 78,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 567,
                      'char' => 86,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 567,
                    'char' => 86,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 567,
                'char' => 87,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 568,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 552,
          'last-line' => 570,
          'char' => 22,
        ),
        25 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'createDefaultIdTokenResponseType',
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
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 572,
                        'char' => 24,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'storages',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 572,
                        'char' => 33,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 572,
                      'char' => 33,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'user_claims',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 572,
                      'char' => 47,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 572,
                    'char' => 49,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 572,
                  'char' => 49,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 572,
                'char' => 49,
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
                          'value' => 'You must supply a storage object implementing OAuth2\\OpenID\\Storage\\UserClaimsInterface to use openid connect',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 573,
                          'char' => 150,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 573,
                        'char' => 150,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 573,
                    'char' => 151,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 574,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 575,
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
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 575,
                        'char' => 24,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'storages',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 575,
                        'char' => 33,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 575,
                      'char' => 33,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'public_key',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 575,
                      'char' => 46,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 575,
                    'char' => 48,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 575,
                  'char' => 48,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 575,
                'char' => 48,
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
                          'value' => 'You must supply a storage object implementing OAuth2\\Storage\\PublicKeyInterface to use openid connect',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 576,
                          'char' => 142,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 576,
                        'char' => 142,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 576,
                    'char' => 143,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 577,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 579,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'config',
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 579,
                  'char' => 19,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 580,
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
                  'variable' => 'config',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'array_intersect_key',
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
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 580,
                            'char' => 47,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'config',
                            'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                            'line' => 580,
                            'char' => 54,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 580,
                          'char' => 54,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 580,
                        'char' => 54,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'array_flip',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
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
                                      'value' => ' ',
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 580,
                                      'char' => 78,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 580,
                                    'char' => 78,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'issuer id_lifetime',
                                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                      'line' => 580,
                                      'char' => 100,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                    'line' => 580,
                                    'char' => 100,
                                  ),
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                                'line' => 580,
                                'char' => 101,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                              'line' => 580,
                              'char' => 101,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 580,
                          'char' => 102,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 580,
                        'char' => 102,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 580,
                    'char' => 103,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                  'line' => 580,
                  'char' => 103,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 582,
              'char' => 14,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'new',
                'class' => 'IdToken',
                'dynamic' => 0,
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
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 582,
                          'char' => 33,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'storages',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 582,
                          'char' => 42,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 582,
                        'char' => 42,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'user_claims',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 582,
                        'char' => 56,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 582,
                      'char' => 57,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 582,
                    'char' => 57,
                  ),
                  1 => 
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
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 582,
                          'char' => 64,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'storages',
                          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                          'line' => 582,
                          'char' => 73,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 582,
                        'char' => 73,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'public_key',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 582,
                        'char' => 86,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 582,
                      'char' => 87,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 582,
                    'char' => 87,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 582,
                      'char' => 95,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 582,
                    'char' => 95,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 582,
                'char' => 96,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 583,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 570,
          'last-line' => 585,
          'char' => 22,
        ),
        26 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'createDefaultIdTokenTokenResponseType',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'new',
                'class' => 'IdTokenToken',
                'dynamic' => 0,
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
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 587,
                        'char' => 38,
                      ),
                      'name' => 'getAccessTokenResponseType',
                      'call-type' => 1,
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 587,
                      'char' => 67,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 587,
                    'char' => 67,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                        'line' => 587,
                        'char' => 74,
                      ),
                      'name' => 'getIdTokenResponseType',
                      'call-type' => 1,
                      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                      'line' => 587,
                      'char' => 99,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                    'line' => 587,
                    'char' => 99,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/server.zep',
                'line' => 587,
                'char' => 100,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/server.zep',
              'line' => 588,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/server.zep',
          'line' => 585,
          'last-line' => 590,
          'char' => 22,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/server.zep',
      'line' => 48,
      'char' => 14,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/server.zep',
    'line' => 48,
    'char' => 14,
  ),
);