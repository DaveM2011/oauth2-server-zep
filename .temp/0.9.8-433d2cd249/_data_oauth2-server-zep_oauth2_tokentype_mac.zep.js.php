<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
* This is not yet supported!
*',
    'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
    'line' => 6,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\TokenType',
    'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
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
        'name' => 'OAuth2\\RequestInterface',
        'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
        'line' => 8,
        'char' => 28,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
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
        'name' => 'OAuth2\\ResponseInterface',
        'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
        'line' => 9,
        'char' => 29,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
    'line' => 11,
    'char' => 5,
  ),
  4 => 
  array (
    'type' => 'class',
    'name' => 'Mac',
    'abstract' => 0,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'TokenTypeInterface',
        'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
        'line' => 12,
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
          'name' => 'getTokenType',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'string',
                'value' => 'mac',
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
                'line' => 15,
                'char' => 21,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
              'line' => 16,
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
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
                'line' => 14,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
            'line' => 14,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
          'line' => 13,
          'last-line' => 18,
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
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
                'line' => 18,
                'char' => 70,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
              'line' => 18,
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
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
                'line' => 18,
                'char' => 100,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
              'line' => 18,
              'char' => 101,
            ),
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
                      'value' => 'Not supported',
                      'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
                      'line' => 20,
                      'char' => 50,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
                    'line' => 20,
                    'char' => 50,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
                'line' => 20,
                'char' => 51,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
              'line' => 21,
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
                'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
                'line' => 19,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
            'line' => 19,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
          'line' => 18,
          'last-line' => 22,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
      'line' => 11,
      'char' => 5,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/tokentype/mac.zep',
    'line' => 11,
    'char' => 5,
  ),
);