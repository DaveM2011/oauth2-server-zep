<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Implement this interface to specify where the OAuth2 Server
 * should get public/private key information
 *
 * @author Brent Shaffer <bshafs at gmail dot com>
 *',
    'file' => '/data/oauth2-server-zep/oauth2/storage/publickeyinterface.zep',
    'line' => 8,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\Storage',
    'file' => '/data/oauth2-server-zep/oauth2/storage/publickeyinterface.zep',
    'line' => 10,
    'char' => 9,
  ),
  2 => 
  array (
    'type' => 'interface',
    'name' => 'PublicKeyInterface',
    'extends' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'StorageInterface',
        'file' => '/data/oauth2-server-zep/oauth2/storage/publickeyinterface.zep',
        'line' => 11,
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
          'name' => 'getPublicKey',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'client_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/storage/publickeyinterface.zep',
                'line' => 12,
                'char' => 58,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/publickeyinterface.zep',
              'line' => 12,
              'char' => 58,
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
                'file' => '/data/oauth2-server-zep/oauth2/storage/publickeyinterface.zep',
                'line' => 12,
                'char' => 69,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/storage/publickeyinterface.zep',
            'line' => 12,
            'char' => 69,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/publickeyinterface.zep',
          'line' => 12,
          'last-line' => 13,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getPrivateKey',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'client_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/storage/publickeyinterface.zep',
                'line' => 13,
                'char' => 59,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/publickeyinterface.zep',
              'line' => 13,
              'char' => 59,
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
                'file' => '/data/oauth2-server-zep/oauth2/storage/publickeyinterface.zep',
                'line' => 13,
                'char' => 70,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/storage/publickeyinterface.zep',
            'line' => 13,
            'char' => 70,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/publickeyinterface.zep',
          'line' => 13,
          'last-line' => 14,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getEncryptionAlgorithm',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'client_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/storage/publickeyinterface.zep',
                'line' => 14,
                'char' => 68,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/publickeyinterface.zep',
              'line' => 14,
              'char' => 68,
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
                'file' => '/data/oauth2-server-zep/oauth2/storage/publickeyinterface.zep',
                'line' => 14,
                'char' => 79,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/storage/publickeyinterface.zep',
            'line' => 14,
            'char' => 79,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/publickeyinterface.zep',
          'line' => 14,
          'last-line' => 15,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/storage/publickeyinterface.zep',
      'line' => 15,
      'char' => 1,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/storage/publickeyinterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);