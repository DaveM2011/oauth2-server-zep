<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Implement this interface to specify where the OAuth2 Server
 * should get/save authorization codes for the "Authorization Code"
 * grant type
 *
 * @author Brent Shaffer <bshafs at gmail dot com>
 *',
    'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
    'line' => 9,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\Storage',
    'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
    'line' => 11,
    'char' => 9,
  ),
  2 => 
  array (
    'type' => 'interface',
    'name' => 'AuthorizationCodeInterface',
    'extends' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'StorageInterface',
        'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
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
          'name' => 'getAuthorizationCode',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'code',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
              'line' => 47,
              'char' => 54,
            ),
          ),
          'docblock' => '**
     * Fetch authorization code data (probably the most common grant type).
     *
     * Retrieve the stored data for the given authorization code.
     *
     * Required for OAuth2::GRANT_TYPE_AUTH_CODE.
     *
     * @param string code Authorization code to be check with.
     *
     * @return array
     * An associative array as below, and NULL if the code is invalid
     * @code
     * return array(
     *     "client_id"    => CLIENT_ID,      // REQUIRED Stored client identifier
     *     "user_id"      => USER_ID,        // REQUIRED Stored user identifier
     *     "expires"      => EXPIRES,        // REQUIRED Stored expiration in unix timestamp
     *     "redirect_uri" => REDIRECT_URI,   // REQUIRED Stored redirect URI
     *     "scope"        => SCOPE,          // OPTIONAL Stored scope values in space-separated string
     * );
     * @endcode
     *
     * @see http://tools.ietf.org/html/rfc6749#section-4.1
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
                'data-type' => 'array',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
                'line' => 47,
                'char' => 64,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
            'line' => 47,
            'char' => 64,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
          'line' => 47,
          'last-line' => 68,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setAuthorizationCode',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'code',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
              'line' => 69,
              'char' => 54,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'client_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
              'line' => 69,
              'char' => 73,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'user_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
              'line' => 69,
              'char' => 90,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'redirect_uri',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
              'line' => 69,
              'char' => 112,
            ),
            4 => 
            array (
              'type' => 'parameter',
              'name' => 'expires',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
              'line' => 69,
              'char' => 125,
            ),
            5 => 
            array (
              'type' => 'parameter',
              'name' => 'scope',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
                'line' => 69,
                'char' => 147,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
              'line' => 69,
              'char' => 147,
            ),
          ),
          'docblock' => '**
     * Take the provided authorization code values and store them somewhere.
     *
     * This function should be the storage counterpart to getAuthCode().
     *
     * If storage fails for some reason, we\'re not currently checking for
     * any sort of success/failure, so you should bail out of the script
     * and provide a descriptive fail message.
     *
     * Required for OAuth2::GRANT_TYPE_AUTH_CODE.
     *
     * @param string code Authorization code to be stored.
     * @param string client_id Client identifier to be stored.
     * @param string user_id User identifier to be stored.
     * @param string redirect_uri Redirect URI(s) to be stored in a space-separated string.
     * @param int expires Expiration to be stored as a Unix timestamp.
     * @param string scope OPTIONAL Scopes to be stored in space-separated string.
     *
     * @ingroup oauth2_section_4
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
            'line' => 69,
            'char' => 156,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
          'line' => 69,
          'last-line' => 83,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'expireAuthorizationCode',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'code',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
              'line' => 84,
              'char' => 57,
            ),
          ),
          'docblock' => '**
     * once an Authorization Code is used, it must be exipired
     *
     * @param string code
     * @see http://tools.ietf.org/html/rfc6749#section-4.1.2
     *
     *    The client MUST NOT use the authorization code
     *    more than once.  If an authorization code is used more than
     *    once, the authorization server MUST deny the request and SHOULD
     *    revoke (when possible) all tokens previously issued based on
     *    that authorization code
     *
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
            'line' => 84,
            'char' => 66,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
          'line' => 84,
          'last-line' => 85,
          'char' => 19,
        ),
      ),
      'constants' => 
      array (
        0 => 
        array (
          'type' => 'const',
          'name' => 'RESPONSE_TYPE_CODE',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'code',
            'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
            'line' => 20,
            'char' => 38,
          ),
          'docblock' => '**
     * The Authorization Code grant type supports a response type of "code".
     *
     * @var string
     * @see http://tools.ietf.org/html/rfc6749#section-1.4.1
     * @see http://tools.ietf.org/html/rfc6749#section-4.2
     *',
          'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
          'line' => 46,
          'char' => 6,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
      'line' => 85,
      'char' => 1,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/storage/authorizationcodeinterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);