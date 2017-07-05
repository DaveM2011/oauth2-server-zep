<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Class to handle scope implementation logic
 *
 * @see OAuth2\\Storage\\ScopeInterface
 *',
    'file' => '/data/oauth2-server-zep/oauth2/scopeinterface.zep',
    'line' => 8,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2',
    'file' => '/data/oauth2-server-zep/oauth2/scopeinterface.zep',
    'line' => 10,
    'char' => 3,
  ),
  2 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Storage\\ScopeInterface',
        'alias' => 'ScopeStorageInterface',
        'file' => '/data/oauth2-server-zep/oauth2/scopeinterface.zep',
        'line' => 10,
        'char' => 59,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/scopeinterface.zep',
    'line' => 12,
    'char' => 9,
  ),
  3 => 
  array (
    'type' => 'interface',
    'name' => 'ScopeInterface',
    'extends' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'ScopeStorageInterface',
        'file' => '/data/oauth2-server-zep/oauth2/scopeinterface.zep',
        'line' => 13,
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
          'name' => 'checkScope',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'required_scope',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/scopeinterface.zep',
              'line' => 26,
              'char' => 54,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'available_scope',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/scopeinterface.zep',
              'line' => 26,
              'char' => 79,
            ),
          ),
          'docblock' => '**
     * Check if everything in required scope is contained in available scope.
     *
     * @param string required_scope A space-separated string of scopes.
     * @param string available_scope
     * @return boolean  TRUE if everything in required scope is contained in available scope,
     * and FALSE if it isn\'t.
     *
     * @see http://tools.ietf.org/html/rfc6749#section-7
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
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/scopeinterface.zep',
                'line' => 26,
                'char' => 91,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/scopeinterface.zep',
            'line' => 26,
            'char' => 91,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/scopeinterface.zep',
          'line' => 26,
          'last-line' => 34,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getScopeFromRequest',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'request',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'RequestInterface',
                'file' => '/data/oauth2-server-zep/oauth2/scopeinterface.zep',
                'line' => 35,
                'char' => 66,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/scopeinterface.zep',
              'line' => 35,
              'char' => 67,
            ),
          ),
          'docblock' => '**
     * Return scope info from request
     *
     * @param \\OAuth2\\RequestInterface request Request object to check
     *
     * @return string representation of requested scope
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
                'file' => '/data/oauth2-server-zep/oauth2/scopeinterface.zep',
                'line' => 35,
                'char' => 78,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/scopeinterface.zep',
            'line' => 35,
            'char' => 78,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/scopeinterface.zep',
          'line' => 35,
          'last-line' => 36,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/scopeinterface.zep',
      'line' => 36,
      'char' => 1,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/scopeinterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);