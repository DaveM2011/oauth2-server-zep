<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * @author Brent Shaffer <bshafs at gmail dot com>
 *
 * @see OAuth2\\ClientAssertionType_HttpBasic
 *',
    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
    'line' => 8,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\GrantType',
    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
    'line' => 10,
    'char' => 3,
  ),
  2 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\ClientAssertionType\\HttpBasic',
        'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
        'line' => 10,
        'char' => 41,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
    'line' => 11,
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
        'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
        'line' => 11,
        'char' => 45,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
    'line' => 12,
    'char' => 3,
  ),
  4 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Storage\\ClientCredentialsInterface',
        'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
        'line' => 12,
        'char' => 46,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
    'line' => 14,
    'char' => 5,
  ),
  5 => 
  array (
    'type' => 'class',
    'name' => 'ClientCredentials',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'HttpBasic',
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'GrantTypeInterface',
        'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
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
          'name' => 'clientData',
          'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
          'line' => 18,
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
              'name' => 'storage',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'ClientCredentialsInterface',
                'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                'line' => 18,
                'char' => 68,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
              'line' => 18,
              'char' => 69,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                'line' => 18,
                'char' => 88,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
              'line' => 18,
              'char' => 88,
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
                  'assign-type' => 'array-index',
                  'operator' => 'assign',
                  'variable' => 'config',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'string',
                      'value' => 'allow_public_clients',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                      'line' => 22,
                      'char' => 42,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                    'line' => 22,
                    'char' => 51,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                  'line' => 22,
                  'char' => 51,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
              'line' => 24,
              'char' => 14,
            ),
            1 => 
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
                      'value' => 'storage',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                      'line' => 24,
                      'char' => 36,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                    'line' => 24,
                    'char' => 36,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                      'line' => 24,
                      'char' => 44,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                    'line' => 24,
                    'char' => 44,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                'line' => 24,
                'char' => 45,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
              'line' => 25,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
          'line' => 18,
          'last-line' => 27,
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
                'value' => 'client_credentials',
                'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                'line' => 29,
                'char' => 36,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
              'line' => 30,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                'line' => 28,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
            'line' => 28,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
          'line' => 27,
          'last-line' => 32,
          'char' => 19,
        ),
        2 => 
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
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                  'line' => 34,
                  'char' => 14,
                ),
                'name' => 'loadClientData',
                'call-type' => 1,
                'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                'line' => 34,
                'char' => 31,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
              'line' => 35,
              'char' => 14,
            ),
            1 => 
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
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                        'line' => 35,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'clientData',
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                        'line' => 35,
                        'char' => 38,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                      'line' => 35,
                      'char' => 38,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'scope',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                      'line' => 35,
                      'char' => 46,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                    'line' => 35,
                    'char' => 48,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                  'line' => 35,
                  'char' => 48,
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
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                      'line' => 35,
                      'char' => 55,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'clientData',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                      'line' => 35,
                      'char' => 66,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                    'line' => 35,
                    'char' => 66,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'scope',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                    'line' => 35,
                    'char' => 74,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                  'line' => 35,
                  'char' => 76,
                ),
                'extra' => 
                array (
                  'type' => 'null',
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                  'line' => 35,
                  'char' => 82,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                'line' => 35,
                'char' => 82,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
              'line' => 36,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                'line' => 32,
                'char' => 42,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                'line' => 33,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
            'line' => 33,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
          'line' => 32,
          'last-line' => 38,
          'char' => 19,
        ),
        3 => 
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
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                  'line' => 40,
                  'char' => 14,
                ),
                'name' => 'loadClientData',
                'call-type' => 1,
                'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                'line' => 40,
                'char' => 31,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
              'line' => 41,
              'char' => 14,
            ),
            1 => 
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
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                        'line' => 41,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'clientData',
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                        'line' => 41,
                        'char' => 38,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                      'line' => 41,
                      'char' => 38,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'user_id',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                      'line' => 41,
                      'char' => 48,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                    'line' => 41,
                    'char' => 50,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                  'line' => 41,
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
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                      'line' => 41,
                      'char' => 57,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'clientData',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                      'line' => 41,
                      'char' => 68,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                    'line' => 41,
                    'char' => 68,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'user_id',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                    'line' => 41,
                    'char' => 78,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                  'line' => 41,
                  'char' => 80,
                ),
                'extra' => 
                array (
                  'type' => 'null',
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                  'line' => 41,
                  'char' => 86,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                'line' => 41,
                'char' => 86,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
              'line' => 42,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                'line' => 38,
                'char' => 43,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                'line' => 39,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
            'line' => 39,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
          'line' => 38,
          'last-line' => 44,
          'char' => 19,
        ),
        4 => 
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                'line' => 44,
                'char' => 72,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
              'line' => 44,
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
              'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
              'line' => 44,
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
              'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
              'line' => 44,
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
              'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
              'line' => 44,
              'char' => 124,
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
                  'variable' => 'includeRefreshToken',
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                  'line' => 48,
                  'char' => 36,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
              'line' => 49,
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
                  'variable' => 'includeRefreshToken',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                    'line' => 49,
                    'char' => 40,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                  'line' => 49,
                  'char' => 40,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
              'line' => 51,
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
                  'value' => 'accessToken',
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                  'line' => 51,
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
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                      'line' => 51,
                      'char' => 56,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                    'line' => 51,
                    'char' => 56,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'user_id',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                      'line' => 51,
                      'char' => 65,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                    'line' => 51,
                    'char' => 65,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'scope',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                      'line' => 51,
                      'char' => 72,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                    'line' => 51,
                    'char' => 72,
                  ),
                  3 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'includeRefreshToken',
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                      'line' => 51,
                      'char' => 93,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                    'line' => 51,
                    'char' => 93,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                'line' => 51,
                'char' => 94,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
              'line' => 52,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                'line' => 45,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
            'line' => 45,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
          'line' => 44,
          'last-line' => 54,
          'char' => 19,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => 'loadClientData',
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
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                    'line' => 56,
                    'char' => 18,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'clientData',
                    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                    'line' => 56,
                    'char' => 30,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                  'line' => 56,
                  'char' => 30,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                'line' => 56,
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
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => 'clientData',
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
                            'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                            'line' => 57,
                            'char' => 41,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'storage',
                            'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                            'line' => 57,
                            'char' => 50,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                          'line' => 57,
                          'char' => 50,
                        ),
                        'name' => 'getClientDetails',
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
                                'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                                'line' => 57,
                                'char' => 73,
                              ),
                              'name' => 'getClientId',
                              'call-type' => 1,
                              'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                              'line' => 57,
                              'char' => 87,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                            'line' => 57,
                            'char' => 87,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                        'line' => 57,
                        'char' => 88,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                      'line' => 57,
                      'char' => 88,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
                  'line' => 58,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
              'line' => 59,
              'char' => 5,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
            'line' => 55,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
          'line' => 54,
          'last-line' => 60,
          'char' => 20,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
      'line' => 14,
      'char' => 5,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/granttype/clientcredentials.zep',
    'line' => 14,
    'char' => 5,
  ),
);