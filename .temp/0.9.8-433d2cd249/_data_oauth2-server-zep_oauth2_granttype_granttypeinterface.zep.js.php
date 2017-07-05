<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Interface for all OAuth2 Grant Types
 *',
    'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
    'line' => 6,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\GrantType',
    'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
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
        'name' => 'OAuth2\\ResponseType\\AccessTokenInterface',
        'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
        'line' => 8,
        'char' => 45,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
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
        'name' => 'OAuth2\\RequestInterface',
        'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
        'line' => 9,
        'char' => 28,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
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
        'name' => 'OAuth2\\ResponseInterface',
        'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
        'line' => 10,
        'char' => 29,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
    'line' => 12,
    'char' => 9,
  ),
  5 => 
  array (
    'type' => 'interface',
    'name' => 'GrantTypeInterface',
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
          'name' => 'getQuerystringIdentifier',
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
                'line' => 14,
                'char' => 57,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
            'line' => 14,
            'char' => 57,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
          'line' => 14,
          'last-line' => 15,
          'char' => 19,
        ),
        1 => 
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
                'line' => 15,
                'char' => 62,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
              'line' => 15,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
                'line' => 15,
                'char' => 92,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
              'line' => 15,
              'char' => 93,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
                'line' => 15,
                'char' => 105,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
            'line' => 15,
            'char' => 105,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
          'line' => 15,
          'last-line' => 16,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getClientId',
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
                'line' => 16,
                'char' => 45,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
                'line' => 16,
                'char' => 51,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
            'line' => 16,
            'char' => 51,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
          'line' => 16,
          'last-line' => 17,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
                'line' => 17,
                'char' => 43,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
                'line' => 17,
                'char' => 49,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
            'line' => 17,
            'char' => 49,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
          'line' => 17,
          'last-line' => 18,
          'char' => 19,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getScope',
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
                'line' => 18,
                'char' => 42,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
                'line' => 18,
                'char' => 48,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
            'line' => 18,
            'char' => 48,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
          'line' => 18,
          'last-line' => 19,
          'char' => 19,
        ),
        5 => 
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
                'line' => 19,
                'char' => 72,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
              'line' => 19,
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
              'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
              'line' => 19,
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
              'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
              'line' => 19,
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
              'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
              'line' => 19,
              'char' => 124,
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
                'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
                'line' => 19,
                'char' => 135,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
            'line' => 19,
            'char' => 135,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
          'line' => 19,
          'last-line' => 20,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
      'line' => 20,
      'char' => 1,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/granttype/granttypeinterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);