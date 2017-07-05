<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Implement this interface to specify where the OAuth2 Server
 * should retrieve data involving the relevent scopes associated
 * with this implementation.
 *
 * @author Brent Shaffer <bshafs at gmail dot com>
 *',
    'file' => '/data/oauth2-server-zep/oauth2/storage/scopeinterface.zep',
    'line' => 9,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\Storage',
    'file' => '/data/oauth2-server-zep/oauth2/storage/scopeinterface.zep',
    'line' => 11,
    'char' => 9,
  ),
  2 => 
  array (
    'type' => 'interface',
    'name' => 'ScopeInterface',
    'extends' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'StorageInterface',
        'file' => '/data/oauth2-server-zep/oauth2/storage/scopeinterface.zep',
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
          'name' => 'scopeExists',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'scope',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/scopeinterface.zep',
              'line' => 20,
              'char' => 46,
            ),
          ),
          'docblock' => '**
     * Check if the provided scope exists.
     *
     * @param stirng scope A space-separated string of scopes.
     *
     * @return boolean TRUE if it exists, FALSE otherwise.
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
                'file' => '/data/oauth2-server-zep/oauth2/storage/scopeinterface.zep',
                'line' => 20,
                'char' => 58,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/storage/scopeinterface.zep',
            'line' => 20,
            'char' => 58,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/scopeinterface.zep',
          'line' => 20,
          'last-line' => 39,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getDefaultScope',
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
                'file' => '/data/oauth2-server-zep/oauth2/storage/scopeinterface.zep',
                'line' => 40,
                'char' => 61,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/storage/scopeinterface.zep',
              'line' => 40,
              'char' => 61,
            ),
          ),
          'docblock' => '**
     * The default scope to use in the event the client
     * does not request one. By returning "false", a
     * request_error is returned by the server to force a
     * scope request by the client. By returning "null",
     * opt out of requiring scopes
     *
     * @param string client_id An optional client id that can be used to
     * return customized default scopes.
     *
     * @return string - string representation of default scope, null if
     * scopes are not defined, or false to force scope request by the client
     *
     * ex:
     *     \'default\'
     * ex:
     *     null
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
                'file' => '/data/oauth2-server-zep/oauth2/storage/scopeinterface.zep',
                'line' => 40,
                'char' => 72,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/storage/scopeinterface.zep',
            'line' => 40,
            'char' => 72,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/storage/scopeinterface.zep',
          'line' => 40,
          'last-line' => 41,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/storage/scopeinterface.zep',
      'line' => 41,
      'char' => 1,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/storage/scopeinterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);