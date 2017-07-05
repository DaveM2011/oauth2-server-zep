<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\TokenType',
    'file' => '/data/oauth2-server-zep/oauth2/tokentype/tokentypeinterface.zep',
    'line' => 4,
    'char' => 3,
  ),
  1 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\RequestInterface',
        'file' => '/data/oauth2-server-zep/oauth2/tokentype/tokentypeinterface.zep',
        'line' => 4,
        'char' => 28,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/tokentype/tokentypeinterface.zep',
    'line' => 5,
    'char' => 3,
  ),
  2 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\ResponseInterface',
        'file' => '/data/oauth2-server-zep/oauth2/tokentype/tokentypeinterface.zep',
        'line' => 5,
        'char' => 29,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/tokentype/tokentypeinterface.zep',
    'line' => 7,
    'char' => 9,
  ),
  3 => 
  array (
    'type' => 'interface',
    'name' => 'TokenTypeInterface',
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
          'name' => 'getTokenType',
          'docblock' => '**
     * Token type identification string
     *
     * ex: "bearer" or "mac"
     * @return string
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
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/tokentypeinterface.zep',
                'line' => 15,
                'char' => 45,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/tokentype/tokentypeinterface.zep',
            'line' => 15,
            'char' => 45,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/tokentype/tokentypeinterface.zep',
          'line' => 15,
          'last-line' => 20,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getAccessTokenParameter',
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
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/tokentypeinterface.zep',
                'line' => 21,
                'char' => 70,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/tokentypeinterface.zep',
              'line' => 21,
              'char' => 71,
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
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/tokentypeinterface.zep',
                'line' => 21,
                'char' => 100,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/tokentypeinterface.zep',
              'line' => 21,
              'char' => 101,
            ),
          ),
          'docblock' => '**
     * Retrieves the token string from the request object
     * @return string
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
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/tokentypeinterface.zep',
                'line' => 21,
                'char' => 112,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/tokentype/tokentypeinterface.zep',
            'line' => 21,
            'char' => 112,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/tokentype/tokentypeinterface.zep',
          'line' => 21,
          'last-line' => 22,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/tokentype/tokentypeinterface.zep',
      'line' => 22,
      'char' => 1,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/tokentype/tokentypeinterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);