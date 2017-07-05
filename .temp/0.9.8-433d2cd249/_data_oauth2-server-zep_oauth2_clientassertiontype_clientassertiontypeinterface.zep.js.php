<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Interface for all OAuth2 Client Assertion Types
 *',
    'file' => '/data/oauth2-server-zep/oauth2/clientassertiontype/clientassertiontypeinterface.zep',
    'line' => 6,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\ClientAssertionType',
    'file' => '/data/oauth2-server-zep/oauth2/clientassertiontype/clientassertiontypeinterface.zep',
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
        'file' => '/data/oauth2-server-zep/oauth2/clientassertiontype/clientassertiontypeinterface.zep',
        'line' => 8,
        'char' => 28,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/clientassertiontype/clientassertiontypeinterface.zep',
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
        'file' => '/data/oauth2-server-zep/oauth2/clientassertiontype/clientassertiontypeinterface.zep',
        'line' => 9,
        'char' => 29,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/clientassertiontype/clientassertiontypeinterface.zep',
    'line' => 11,
    'char' => 9,
  ),
  4 => 
  array (
    'type' => 'interface',
    'name' => 'ClientAssertionTypeInterface',
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
                'file' => '/data/oauth2-server-zep/oauth2/clientassertiontype/clientassertiontypeinterface.zep',
                'line' => 13,
                'char' => 62,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/clientassertiontype/clientassertiontypeinterface.zep',
              'line' => 13,
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
                'file' => '/data/oauth2-server-zep/oauth2/clientassertiontype/clientassertiontypeinterface.zep',
                'line' => 13,
                'char' => 92,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/clientassertiontype/clientassertiontypeinterface.zep',
              'line' => 13,
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
                'file' => '/data/oauth2-server-zep/oauth2/clientassertiontype/clientassertiontypeinterface.zep',
                'line' => 13,
                'char' => 105,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/clientassertiontype/clientassertiontypeinterface.zep',
            'line' => 13,
            'char' => 105,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/clientassertiontype/clientassertiontypeinterface.zep',
          'line' => 13,
          'last-line' => 14,
          'char' => 19,
        ),
        1 => 
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
                'file' => '/data/oauth2-server-zep/oauth2/clientassertiontype/clientassertiontypeinterface.zep',
                'line' => 14,
                'char' => 44,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/clientassertiontype/clientassertiontypeinterface.zep',
            'line' => 14,
            'char' => 44,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/clientassertiontype/clientassertiontypeinterface.zep',
          'line' => 14,
          'last-line' => 15,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/clientassertiontype/clientassertiontypeinterface.zep',
      'line' => 15,
      'char' => 1,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/clientassertiontype/clientassertiontypeinterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);