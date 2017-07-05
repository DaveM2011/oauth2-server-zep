<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * @package \\OAuth2\\ResponseType
 * @author Brent Shaffer <bshafs at gmail dot com>
 *',
    'file' => '/data/oauth2-server-zep/oauth2/responsetype/authorizationcodeinterface.zep',
    'line' => 6,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\ResponseType',
    'file' => '/data/oauth2-server-zep/oauth2/responsetype/authorizationcodeinterface.zep',
    'line' => 8,
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
        'value' => 'ResponseTypeInterface',
        'file' => '/data/oauth2-server-zep/oauth2/responsetype/authorizationcodeinterface.zep',
        'line' => 9,
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
          'name' => 'enforceRedirect',
          'docblock' => '**
     * @return boolean TRUE if the grant type requires a redirect_uri, FALSE if not
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
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/authorizationcodeinterface.zep',
                'line' => 13,
                'char' => 49,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/responsetype/authorizationcodeinterface.zep',
            'line' => 13,
            'char' => 49,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/responsetype/authorizationcodeinterface.zep',
          'line' => 13,
          'last-line' => 27,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'createAuthorizationCode',
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
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/authorizationcodeinterface.zep',
              'line' => 28,
              'char' => 62,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'user_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/authorizationcodeinterface.zep',
              'line' => 28,
              'char' => 79,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'redirect_uri',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/authorizationcodeinterface.zep',
              'line' => 28,
              'char' => 101,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'scope',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/authorizationcodeinterface.zep',
                'line' => 28,
                'char' => 123,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/authorizationcodeinterface.zep',
              'line' => 28,
              'char' => 123,
            ),
          ),
          'docblock' => '**
     * Handle the creation of the authorization code.
     *
     * @param string client_id client identifier related to the authorization code
     * @param string user_id user id associated with the authorization code
     * @param string redirect_uri an absolute URI to which the authorization server will redirect the
     * user-agent to when the end-user authorization step is completed.
     * @param string scope OPTIONAL scopes to be stored in space-separated string.
     * @return string
     *
     * @see http://tools.ietf.org/html/rfc6749#section-4
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
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/authorizationcodeinterface.zep',
                'line' => 28,
                'char' => 134,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/responsetype/authorizationcodeinterface.zep',
            'line' => 28,
            'char' => 134,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/responsetype/authorizationcodeinterface.zep',
          'line' => 28,
          'last-line' => 29,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/responsetype/authorizationcodeinterface.zep',
      'line' => 29,
      'char' => 1,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/responsetype/authorizationcodeinterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);