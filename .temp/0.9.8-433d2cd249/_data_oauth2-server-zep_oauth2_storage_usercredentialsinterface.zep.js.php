<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Implement this interface to specify where the OAuth2 Server
 * should retrieve user credentials for the
 * "Resource Owner Password Credentials" grant type
 *
 * @author Brent Shaffer <bshafs at gmail dot com>
 *',
    'file' => '/data/oauth2-server-zep/oauth2/storage/usercredentialsinterface.zep',
    'line' => 9,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\Storage',
    'file' => '/data/oauth2-server-zep/oauth2/storage/usercredentialsinterface.zep',
    'line' => 11,
    'char' => 9,
  ),
  2 => 
  array (
    'type' => 'interface',
    'name' => 'UserCredentialsInterface',
    'extends' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'StorageInterface',
        'file' => '/data/oauth2-server-zep/oauth2/storage/usercredentialsinterface.zep',
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
          'name' => 'checkUserCredentials',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'username',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/usercredentialsinterface.zep',
              'line' => 33,
              'char' => 58,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'password',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/usercredentialsinterface.zep',
              'line' => 33,
              'char' => 76,
            ),
          ),
          'docblock' => '**
     * Grant access tokens for basic user credentials.
     *
     * Check the supplied username and password for validity.
     *
     * You can also use the $client_id param to do any checks required based
     * on a client, if you need that.
     *
     * Required for OAuth2::GRANT_TYPE_USER_CREDENTIALS.
     *
     * @param string username Username to be check with.
     * @param string password Password to be check with.
     *
     * @return bool TRUE if the username and password are valid, and FALSE if
     * it isn\'t. Moreover, if the username and password are valid, and you want to
     *
     * @see http://tools.ietf.org/html/rfc6749#section-4.3
     *
     * @ingroup oauth2_section_4
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
                'file' => '/data/oauth2-server-zep/oauth2/storage/usercredentialsinterface.zep',
                'line' => 33,
                'char' => 88,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/storage/usercredentialsinterface.zep',
            'line' => 33,
            'char' => 88,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/usercredentialsinterface.zep',
          'line' => 33,
          'last-line' => 47,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getUserDetails',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'username',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/usercredentialsinterface.zep',
              'line' => 48,
              'char' => 52,
            ),
          ),
          'docblock' => '**
     * @param string username
     * @return array
     * ARRAY the associated "user_id" and optional "scope" values
     * This function MUST return FALSE if the requested user does not exist or is
     * invalid. "scope" is a space-separated list of restricted scopes.
     * @code
     * return array(
     *     "user_id"  => USER_ID,    // REQUIRED user_id to be stored with the authorization code or access token
     *     "scope"    => SCOPE       // OPTIONAL space-separated list of restricted scopes
     * );
     * @endcode
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
                'file' => '/data/oauth2-server-zep/oauth2/storage/usercredentialsinterface.zep',
                'line' => 48,
                'char' => 62,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/storage/usercredentialsinterface.zep',
            'line' => 48,
            'char' => 62,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/usercredentialsinterface.zep',
          'line' => 48,
          'last-line' => 49,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/storage/usercredentialsinterface.zep',
      'line' => 49,
      'char' => 1,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/storage/usercredentialsinterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);