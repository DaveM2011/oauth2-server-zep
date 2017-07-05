<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2',
    'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
    'line' => 4,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'interface',
    'name' => 'RequestInterface',
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
          'name' => 'query',
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
              'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
              'line' => 6,
              'char' => 39,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'default',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
                'line' => 6,
                'char' => 62,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
              'line' => 6,
              'char' => 62,
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
                'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
                'line' => 6,
                'char' => 73,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
            'line' => 6,
            'char' => 73,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
          'line' => 6,
          'last-line' => 7,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'request',
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
              'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
              'line' => 7,
              'char' => 41,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'default',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
                'line' => 7,
                'char' => 64,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
              'line' => 7,
              'char' => 64,
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
                'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
                'line' => 7,
                'char' => 75,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
            'line' => 7,
            'char' => 75,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
          'line' => 7,
          'last-line' => 8,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'server',
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
              'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
              'line' => 8,
              'char' => 40,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'default',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
                'line' => 8,
                'char' => 63,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
              'line' => 8,
              'char' => 63,
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
                'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
                'line' => 8,
                'char' => 74,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
            'line' => 8,
            'char' => 74,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
          'line' => 8,
          'last-line' => 9,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'headers',
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
              'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
              'line' => 9,
              'char' => 41,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'default',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
                'line' => 9,
                'char' => 64,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
              'line' => 9,
              'char' => 64,
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
                'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
                'line' => 9,
                'char' => 75,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
            'line' => 9,
            'char' => 75,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
          'line' => 9,
          'last-line' => 10,
          'char' => 19,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getAllQueryParameters',
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
                'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
                'line' => 10,
                'char' => 53,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
            'line' => 10,
            'char' => 53,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
          'line' => 10,
          'last-line' => 11,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
      'line' => 11,
      'char' => 1,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/requestinterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);