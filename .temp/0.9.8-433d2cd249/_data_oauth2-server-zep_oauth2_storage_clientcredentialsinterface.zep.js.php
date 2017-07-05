<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Implement this interface to specify how the OAuth2 Server
 * should verify client credentials
 *
 * @author Brent Shaffer <bshafs at gmail dot com>
 *',
    'file' => '/data/oauth2-server-zep/oauth2/storage/clientcredentialsinterface.zep',
    'line' => 8,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\Storage',
    'file' => '/data/oauth2-server-zep/oauth2/storage/clientcredentialsinterface.zep',
    'line' => 10,
    'char' => 9,
  ),
  2 => 
  array (
    'type' => 'interface',
    'name' => 'ClientCredentialsInterface',
    'extends' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'ClientInterface',
        'file' => '/data/oauth2-server-zep/oauth2/storage/clientcredentialsinterface.zep',
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
          'name' => 'checkClientCredentials',
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
              'file' => '/data/oauth2-server-zep/oauth2/storage/clientcredentialsinterface.zep',
              'line' => 27,
              'char' => 61,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'client_secret',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/storage/clientcredentialsinterface.zep',
                'line' => 27,
                'char' => 91,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/clientcredentialsinterface.zep',
              'line' => 27,
              'char' => 91,
            ),
          ),
          'docblock' => '**
     * Make sure that the client credentials is valid.
     *
     * @param string client_id Client identifier to be check with.
     * @param string client_secret (optional) If a secret is required, check
     * that they\'ve given the right one.
     *
     * @return bool
     * TRUE if the client credentials are valid, and MUST return FALSE if it isn\'t.
     * @endcode
     *
     * @see http://tools.ietf.org/html/rfc6749#section-3.1
     *
     * @ingroup oauth2_section_3
     *',
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
                'file' => '/data/oauth2-server-zep/oauth2/storage/clientcredentialsinterface.zep',
                'line' => 27,
                'char' => 103,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/storage/clientcredentialsinterface.zep',
            'line' => 27,
            'char' => 103,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/clientcredentialsinterface.zep',
          'line' => 27,
          'last-line' => 42,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isPublicClient',
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
              'file' => '/data/oauth2-server-zep/oauth2/storage/clientcredentialsinterface.zep',
              'line' => 43,
              'char' => 53,
            ),
          ),
          'docblock' => '**
     * Determine if the client is a "public" client, and therefore
     * does not require passing credentials for certain grant types
     *
     * @param string client_id Client identifier to be check with.
     *
     * @return boolean  TRUE if the client is public, and FALSE if it isn\'t.
     * @endcode
     *
     * @see http://tools.ietf.org/html/rfc6749#section-2.3
     * @see https://github.com/bshaffer/oauth2-server-php/issues/257
     *
     * @ingroup oauth2_section_2
     *',
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
                'file' => '/data/oauth2-server-zep/oauth2/storage/clientcredentialsinterface.zep',
                'line' => 43,
                'char' => 65,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/storage/clientcredentialsinterface.zep',
            'line' => 43,
            'char' => 65,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/clientcredentialsinterface.zep',
          'line' => 43,
          'last-line' => 44,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/storage/clientcredentialsinterface.zep',
      'line' => 44,
      'char' => 1,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/storage/clientcredentialsinterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);