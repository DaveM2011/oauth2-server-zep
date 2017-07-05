<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Implement this interface to specify where the OAuth2 Server
 * should get/save access tokens
 *
 * @author Brent Shaffer <bshafs at gmail dot com>
 *',
    'file' => '/data/oauth2-server-zep/oauth2/storage/accesstokeninterface.zep',
    'line' => 8,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\Storage',
    'file' => '/data/oauth2-server-zep/oauth2/storage/accesstokeninterface.zep',
    'line' => 10,
    'char' => 9,
  ),
  2 => 
  array (
    'type' => 'interface',
    'name' => 'AccessTokenInterface',
    'extends' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'StorageInterface',
        'file' => '/data/oauth2-server-zep/oauth2/storage/accesstokeninterface.zep',
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
          'name' => 'getAccessToken',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'oauth_token',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/accesstokeninterface.zep',
              'line' => 30,
              'char' => 55,
            ),
          ),
          'docblock' => '**
     * Look up the supplied oauth_token from storage.
     *
     * We need to retrieve access token data as we create and verify tokens.
     *
     * @param string oauth_token oauth_token to be check with.
     *
     * @return array
     * An associative array as below, and return NULL if the supplied oauth_token
     * is invalid:
     * - expires: Stored expiration in unix timestamp.
     * - client_id: (optional) Stored client identifier.
     * - user_id: (optional) Stored user identifier.
     * - scope: (optional) Stored scope values in space-separated string.
     * - id_token: (optional) Stored id_token (if "use_openid_connect" is true).
     *
     * @ingroup oauth2_section_7
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
                'file' => '/data/oauth2-server-zep/oauth2/storage/accesstokeninterface.zep',
                'line' => 30,
                'char' => 65,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/storage/accesstokeninterface.zep',
            'line' => 30,
            'char' => 65,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/accesstokeninterface.zep',
          'line' => 30,
          'last-line' => 44,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setAccessToken',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'oauth_token',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/accesstokeninterface.zep',
              'line' => 45,
              'char' => 55,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'client_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/accesstokeninterface.zep',
              'line' => 45,
              'char' => 74,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'user_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/accesstokeninterface.zep',
              'line' => 45,
              'char' => 91,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'expires',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/accesstokeninterface.zep',
              'line' => 45,
              'char' => 104,
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
                'file' => '/data/oauth2-server-zep/oauth2/storage/accesstokeninterface.zep',
                'line' => 45,
                'char' => 126,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/accesstokeninterface.zep',
              'line' => 45,
              'char' => 126,
            ),
          ),
          'docblock' => '**
     * Store the supplied access token values to storage.
     *
     * We need to store access token data as we create and verify tokens.
     *
     * @param string oauth_token oauth_token to be stored.
     * @param string client_id client identifier to be stored.
     * @param string user_id user identifier to be stored.
     * @param int expires expiration to be stored as a Unix timestamp.
     * @param string scope OPTIONAL Scopes to be stored in space-separated string.
     *
     * @ingroup oauth2_section_4
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/storage/accesstokeninterface.zep',
            'line' => 45,
            'char' => 135,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/accesstokeninterface.zep',
          'line' => 45,
          'last-line' => 46,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/storage/accesstokeninterface.zep',
      'line' => 46,
      'char' => 1,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/storage/accesstokeninterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);