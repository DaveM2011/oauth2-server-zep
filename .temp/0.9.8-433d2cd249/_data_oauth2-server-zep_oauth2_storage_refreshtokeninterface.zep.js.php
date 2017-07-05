<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Implement this interface to specify where the OAuth2 Server
 * should get/save refresh tokens for the "Refresh Token"
 * grant type
 *
 * @author Brent Shaffer <bshafs at gmail dot com>
 *',
    'file' => '/data/oauth2-server-zep/oauth2/storage/refreshtokeninterface.zep',
    'line' => 9,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\Storage',
    'file' => '/data/oauth2-server-zep/oauth2/storage/refreshtokeninterface.zep',
    'line' => 11,
    'char' => 9,
  ),
  2 => 
  array (
    'type' => 'interface',
    'name' => 'RefreshTokenInterface',
    'extends' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'StorageInterface',
        'file' => '/data/oauth2-server-zep/oauth2/storage/refreshtokeninterface.zep',
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
          'name' => 'getRefreshToken',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'refresh_token',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/refreshtokeninterface.zep',
              'line' => 35,
              'char' => 58,
            ),
          ),
          'docblock' => '**
     * Grant refresh access tokens.
     *
     * Retrieve the stored data for the given refresh token.
     *
     * Required for OAuth2::GRANT_TYPE_REFRESH_TOKEN.
     *
     * @param string refresh_token Refresh token to be check with.
     *
     * @return array
     * An associative array as below, and NULL if the refresh_token is
     * invalid:
     * - refresh_token: Refresh token identifier.
     * - client_id: Client identifier.
     * - user_id: User identifier.
     * - expires: Expiration unix timestamp, or 0 if the token doesn\'t expire.
     * - scope: (optional) Scope values in space-separated string.
     *
     * @see http://tools.ietf.org/html/rfc6749#section-6
     *
     * @ingroup oauth2_section_6
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
                'file' => '/data/oauth2-server-zep/oauth2/storage/refreshtokeninterface.zep',
                'line' => 35,
                'char' => 68,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/storage/refreshtokeninterface.zep',
            'line' => 35,
            'char' => 68,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/refreshtokeninterface.zep',
          'line' => 35,
          'last-line' => 55,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setRefreshToken',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'refresh_token',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/refreshtokeninterface.zep',
              'line' => 56,
              'char' => 58,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'client_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/refreshtokeninterface.zep',
              'line' => 56,
              'char' => 77,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'user_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/refreshtokeninterface.zep',
              'line' => 56,
              'char' => 94,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'expires',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/refreshtokeninterface.zep',
              'line' => 56,
              'char' => 107,
            ),
            4 => 
            array (
              'type' => 'parameter',
              'name' => 'scope',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/storage/refreshtokeninterface.zep',
                'line' => 56,
                'char' => 129,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/refreshtokeninterface.zep',
              'line' => 56,
              'char' => 129,
            ),
          ),
          'docblock' => '**
     * Take the provided refresh token values and store them somewhere.
     *
     * This function should be the storage counterpart to getRefreshToken().
     *
     * If storage fails for some reason, we\'re not currently checking for
     * any sort of success/failure, so you should bail out of the script
     * and provide a descriptive fail message.
     *
     * Required for OAuth2::GRANT_TYPE_REFRESH_TOKEN.
     *
     * @param string refresh_token Refresh token to be stored.
     * @param string client_id Client identifier to be stored.
     * @param string user_id User identifier to be stored.
     * @param int expires Expiration timestamp to be stored. 0 if the token doesn\'t expire.
     * @param string scope (optional) Scopes to be stored in space-separated string.
     *
     * @ingroup oauth2_section_6
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/storage/refreshtokeninterface.zep',
            'line' => 56,
            'char' => 138,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/refreshtokeninterface.zep',
          'line' => 56,
          'last-line' => 72,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'unsetRefreshToken',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'refresh_token',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/refreshtokeninterface.zep',
              'line' => 73,
              'char' => 60,
            ),
          ),
          'docblock' => '**
     * Expire a used refresh token.
     *
     * This is not explicitly required in the spec, but is almost implied.
     * After granting a new refresh token, the old one is no longer useful and
     * so should be forcibly expired in the data store so it can\'t be used again.
     *
     * If storage fails for some reason, we\'re not currently checking for
     * any sort of success/failure, so you should bail out of the script
     * and provide a descriptive fail message.
     *
     * @param string refresh_token Refresh token to be expirse.
     *
     * @ingroup oauth2_section_6
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/storage/refreshtokeninterface.zep',
            'line' => 73,
            'char' => 69,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/refreshtokeninterface.zep',
          'line' => 73,
          'last-line' => 74,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/storage/refreshtokeninterface.zep',
      'line' => 74,
      'char' => 1,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/storage/refreshtokeninterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);