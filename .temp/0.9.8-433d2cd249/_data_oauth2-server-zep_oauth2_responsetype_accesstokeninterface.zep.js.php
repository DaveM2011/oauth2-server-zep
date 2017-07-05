<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * @package \\OAuth2\\ResponseType
 * @author Brent Shaffer <bshafs at gmail dot com>
 *',
    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstokeninterface.zep',
    'line' => 6,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\ResponseType',
    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstokeninterface.zep',
    'line' => 8,
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
        'value' => 'ResponseTypeInterface',
        'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstokeninterface.zep',
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
          'name' => 'createAccessToken',
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
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstokeninterface.zep',
              'line' => 21,
              'char' => 56,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'user_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstokeninterface.zep',
              'line' => 21,
              'char' => 73,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'scope',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstokeninterface.zep',
                'line' => 21,
                'char' => 95,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstokeninterface.zep',
              'line' => 21,
              'char' => 95,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'includeRefreshToken',
              'const' => 0,
              'data-type' => 'bool',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstokeninterface.zep',
                'line' => 21,
                'char' => 131,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstokeninterface.zep',
              'line' => 21,
              'char' => 131,
            ),
          ),
          'docblock' => '**
     * Handle the creation of access token, also issue refresh token if supported / desirable.
     *
     * @param string client_id client identifier related to the access token.
     * @param string user_id user ID associated with the access token
     * @param string scope OPTONAL scopes to be stored in space-separated string.
     * @param bool includeRefreshToken if true, a new refresh_token will be added to the response
     * @return string
     * @see http://tools.ietf.org/html/rfc6749#section-5
     * @ingroup oauth2_section_5
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
                'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstokeninterface.zep',
                'line' => 21,
                'char' => 142,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstokeninterface.zep',
            'line' => 21,
            'char' => 142,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstokeninterface.zep',
          'line' => 21,
          'last-line' => 22,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstokeninterface.zep',
      'line' => 22,
      'char' => 1,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/responsetype/accesstokeninterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);