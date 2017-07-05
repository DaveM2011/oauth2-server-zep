<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\Encryption',
    'file' => '/data/oauth2-server-zep/oauth2/encryption/encryptioninterface.zep',
    'line' => 4,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'interface',
    'name' => 'EncryptionInterface',
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
              'file' => '/data/oauth2-server-zep/oauth2/encryption/encryptioninterface.zep',
              'line' => 6,
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
              'file' => '/data/oauth2-server-zep/oauth2/encryption/encryptioninterface.zep',
              'line' => 6,
              'char' => 56,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'algorithm',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/encryption/encryptioninterface.zep',
                'line' => 6,
                'char' => 82,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/encryptioninterface.zep',
              'line' => 6,
              'char' => 82,
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
                'file' => '/data/oauth2-server-zep/oauth2/encryption/encryptioninterface.zep',
                'line' => 6,
                'char' => 93,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/encryption/encryptioninterface.zep',
            'line' => 6,
            'char' => 93,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/encryption/encryptioninterface.zep',
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
          'name' => 'decode',
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
              'file' => '/data/oauth2-server-zep/oauth2/encryption/encryptioninterface.zep',
              'line' => 7,
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
              'file' => '/data/oauth2-server-zep/oauth2/encryption/encryptioninterface.zep',
              'line' => 7,
              'char' => 56,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'algorithm',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/encryption/encryptioninterface.zep',
                'line' => 7,
                'char' => 82,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/encryptioninterface.zep',
              'line' => 7,
              'char' => 82,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/encryption/encryptioninterface.zep',
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
          'name' => 'urlSafeB64Encode',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'data',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/encryptioninterface.zep',
              'line' => 8,
              'char' => 50,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/encryption/encryptioninterface.zep',
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
          'name' => 'urlSafeB64Decode',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'b64',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/encryption/encryptioninterface.zep',
              'line' => 9,
              'char' => 49,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/encryption/encryptioninterface.zep',
          'line' => 9,
          'last-line' => 10,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/encryption/encryptioninterface.zep',
      'line' => 10,
      'char' => 1,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/encryption/encryptioninterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);