<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Implement this interface to specify where the OAuth2 Server
 * should get the JWT key for clients
 *
 * @TODO consider extending ClientInterface, as this will almost always
 * be the same storage as retrieving clientData
 *
 * @author F21
 * @author Brent Shaffer <bshafs at gmail dot com>
 *',
    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
    'line' => 12,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\Storage',
    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
    'line' => 14,
    'char' => 9,
  ),
  2 => 
  array (
    'type' => 'interface',
    'name' => 'JwtBearerInterface',
    'extends' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'StorageInterface',
        'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
        'line' => 15,
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
          'name' => 'getClientKey',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'client_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
              'line' => 23,
              'char' => 51,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'subject',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
              'line' => 23,
              'char' => 68,
            ),
          ),
          'docblock' => '**
     * Get the public key associated with a client_id
     *
     * @param string client_id Client identifier to be checked with.
     *
     * @return string Return the public key for the client_id if it exists, and MUST return FALSE if it doesn\'t.
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
                'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
                'line' => 23,
                'char' => 79,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
            'line' => 23,
            'char' => 79,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
          'line' => 23,
          'last-line' => 41,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getJti',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'client_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
              'line' => 42,
              'char' => 45,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'subject',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
              'line' => 42,
              'char' => 62,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'audience',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
              'line' => 42,
              'char' => 80,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'expiration',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
              'line' => 42,
              'char' => 96,
            ),
            4 => 
            array (
              'type' => 'parameter',
              'name' => 'jti',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
              'line' => 42,
              'char' => 109,
            ),
          ),
          'docblock' => '**
     * Get a jti (JSON token identifier) by matching against the client_id, subject, audience and expiration.
     *
     * @param string client_id Client identifier to match.
     * @param string subject The subject to match.
     * @param string audience The audience to match.
     * @param int expiration The expiration of the jti.
     * @param string jti The jti to match.
     *
     * @return array
     * An associative array as below, and return NULL if the jti does not exist.
     * - issuer: Stored client identifier.
     * - subject: Stored subject.
     * - audience: Stored audience.
     * - expires: Stored expiration in unix timestamp.
     * - jti: The stored jti.
     *',
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
                'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
                'line' => 42,
                'char' => 119,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
            'line' => 42,
            'char' => 119,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
          'line' => 42,
          'last-line' => 52,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setJti',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'client_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
              'line' => 53,
              'char' => 45,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'subject',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
              'line' => 53,
              'char' => 62,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'audience',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
              'line' => 53,
              'char' => 80,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'expiration',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
              'line' => 53,
              'char' => 96,
            ),
            4 => 
            array (
              'type' => 'parameter',
              'name' => 'jti',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
              'line' => 53,
              'char' => 109,
            ),
          ),
          'docblock' => '**
     * Store a used jti so that we can check against it to prevent replay attacks.
     *
     * @param string client_id Client identifier to insert.
     * @param string subject The subject to insert.
     * @param string audience The audience to insert.
     * @param int expiration The expiration of the jti.
     * @param string jti The jti to insert.
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
            'line' => 53,
            'char' => 118,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
          'line' => 53,
          'last-line' => 54,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
      'line' => 54,
      'char' => 1,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/storage/jwtbearerinterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);