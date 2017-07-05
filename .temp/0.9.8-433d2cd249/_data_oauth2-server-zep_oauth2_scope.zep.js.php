<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
* @see OAuth2\\ScopeInterface
*',
    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
    'line' => 6,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2',
    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
    'line' => 8,
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
        'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
        'line' => 8,
        'char' => 59,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
    'line' => 10,
    'char' => 5,
  ),
  3 => 
  array (
    'type' => 'class',
    'name' => 'Scope',
    'abstract' => 0,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'ScopeInterface',
        'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
        'line' => 11,
        'char' => 1,
      ),
    ),
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'storage',
          'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
          'line' => 17,
          'char' => 6,
        ),
      ),
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__construct',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'storage',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'ScopeStorageInterface',
                'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                'line' => 18,
                'char' => 63,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                'line' => 18,
                'char' => 71,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 18,
              'char' => 71,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-equals',
                'left' => 
                array (
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'storage',
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 20,
                    'char' => 28,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 20,
                  'char' => 28,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'object',
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 20,
                  'char' => 39,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                'line' => 20,
                'char' => 39,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\InvalidArgumentException',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'Argument 1 to OAuth2\\\\Scope must be null, an array, or instance of OAuth2\\\\Storage\\\\ScopeInterface',
                          'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                          'line' => 21,
                          'char' => 149,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                        'line' => 21,
                        'char' => 149,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 21,
                    'char' => 150,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 22,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 24,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'list',
                  'left' => 
                  array (
                    'type' => 'instanceof',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'storage',
                      'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                      'line' => 24,
                      'char' => 31,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'ScopeStorageInterface',
                      'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                      'line' => 24,
                      'char' => 54,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 24,
                    'char' => 54,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 24,
                  'char' => 56,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                'line' => 24,
                'char' => 56,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\InvalidArgumentException',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'Argument 1 to OAuth2\\\\Scope must be null, an array, or instance of OAuth2\\\\Storage\\\\ScopeInterface',
                          'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                          'line' => 25,
                          'char' => 149,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                        'line' => 25,
                        'char' => 149,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 25,
                    'char' => 150,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 26,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 28,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'storage',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'storage',
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 28,
                    'char' => 36,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 28,
                  'char' => 36,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 29,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param mixed storage
     * Either an array of supported scopes, or an instance of OAuth2\\Storage\\ScopeInterface
     *',
          'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
          'line' => 18,
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
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 43,
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
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 43,
              'char' => 79,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'scope1',
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 45,
                  'char' => 19,
                ),
                1 => 
                array (
                  'variable' => 'scope2',
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 45,
                  'char' => 27,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 46,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'scope1',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'explode',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => ' ',
                          'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                          'line' => 46,
                          'char' => 33,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                        'line' => 46,
                        'char' => 33,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'trim',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'required_scope',
                                'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                                'line' => 46,
                                'char' => 54,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                              'line' => 46,
                              'char' => 54,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                          'line' => 46,
                          'char' => 55,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                        'line' => 46,
                        'char' => 55,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 46,
                    'char' => 56,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 46,
                  'char' => 56,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 47,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'scope2',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'explode',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => ' ',
                          'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                          'line' => 47,
                          'char' => 33,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                        'line' => 47,
                        'char' => 33,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'trim',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'available_scope',
                                'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                                'line' => 47,
                                'char' => 55,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                              'line' => 47,
                              'char' => 55,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                          'line' => 47,
                          'char' => 56,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                        'line' => 47,
                        'char' => 56,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 47,
                    'char' => 57,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 47,
                  'char' => 57,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 48,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'fcall',
                  'name' => 'count',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'array_diff',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'scope1',
                              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                              'line' => 48,
                              'char' => 39,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                            'line' => 48,
                            'char' => 39,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'scope2',
                              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                              'line' => 48,
                              'char' => 47,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                            'line' => 48,
                            'char' => 47,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                        'line' => 48,
                        'char' => 48,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                      'line' => 48,
                      'char' => 48,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 48,
                  'char' => 51,
                ),
                'right' => 
                array (
                  'type' => 'int',
                  'value' => '0',
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 48,
                  'char' => 54,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                'line' => 48,
                'char' => 54,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 49,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Check if everything in required scope is contained in available scope.
     *
     * @param string required_scope A space-separated string of scopes.
     *
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
                'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                'line' => 44,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
            'line' => 44,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
          'line' => 43,
          'last-line' => 57,
          'char' => 19,
        ),
        2 => 
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
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 58,
              'char' => 46,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'scopes',
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 60,
                  'char' => 19,
                ),
                1 => 
                array (
                  'variable' => 'reservedScope',
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 60,
                  'char' => 34,
                ),
                2 => 
                array (
                  'variable' => 'nonReservedScopes',
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 60,
                  'char' => 53,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 63,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'scopes',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'explode',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => ' ',
                          'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                          'line' => 63,
                          'char' => 33,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                        'line' => 63,
                        'char' => 33,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'trim',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'scope',
                                'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                                'line' => 63,
                                'char' => 45,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                              'line' => 63,
                              'char' => 45,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                          'line' => 63,
                          'char' => 46,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                        'line' => 63,
                        'char' => 46,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 63,
                    'char' => 47,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 63,
                  'char' => 47,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 64,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'reservedScope',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                      'line' => 64,
                      'char' => 34,
                    ),
                    'name' => 'getReservedScopes',
                    'call-type' => 1,
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 64,
                    'char' => 54,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 64,
                  'char' => 54,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 65,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'nonReservedScopes',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'array_diff',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'scopes',
                          'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                          'line' => 65,
                          'char' => 50,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                        'line' => 65,
                        'char' => 50,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'reservedScope',
                          'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                          'line' => 65,
                          'char' => 65,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                        'line' => 65,
                        'char' => 65,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 65,
                    'char' => 66,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 65,
                  'char' => 66,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 67,
              'char' => 10,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'fcall',
                  'name' => 'count',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'nonReservedScopes',
                        'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                        'line' => 67,
                        'char' => 35,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                      'line' => 67,
                      'char' => 35,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 67,
                  'char' => 38,
                ),
                'right' => 
                array (
                  'type' => 'int',
                  'value' => '0',
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 67,
                  'char' => 42,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                'line' => 67,
                'char' => 42,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'true',
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 68,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 69,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 69,
              'char' => 10,
            ),
            5 => 
            array (
              'type' => 'empty',
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 72,
              'char' => 11,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'nonReservedScopes',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'implode',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => ' ',
                          'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                          'line' => 72,
                          'char' => 44,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                        'line' => 72,
                        'char' => 44,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'nonReservedScopes',
                          'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                          'line' => 72,
                          'char' => 63,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                        'line' => 72,
                        'char' => 63,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 72,
                    'char' => 64,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 72,
                  'char' => 64,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 74,
              'char' => 14,
            ),
            7 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 74,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'storage',
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 74,
                    'char' => 30,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 74,
                  'char' => 30,
                ),
                'name' => 'scopeExists',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'nonReservedScopes',
                      'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                      'line' => 74,
                      'char' => 60,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 74,
                    'char' => 60,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                'line' => 74,
                'char' => 61,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 75,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Check if the provided scope exists in storage.
     *
     * @param string! scope A space-separated string of scopes.
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
                'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                'line' => 59,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
            'line' => 59,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
          'line' => 58,
          'last-line' => 77,
          'char' => 19,
        ),
        3 => 
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
                'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                'line' => 77,
                'char' => 66,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 77,
              'char' => 67,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'request',
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 80,
                  'char' => 24,
                ),
                'name' => 'request',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'scope',
                      'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                      'line' => 80,
                      'char' => 40,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 80,
                    'char' => 40,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'request',
                        'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                        'line' => 80,
                        'char' => 50,
                      ),
                      'name' => 'query',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'string',
                            'value' => 'scope',
                            'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                            'line' => 80,
                            'char' => 64,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                          'line' => 80,
                          'char' => 64,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                      'line' => 80,
                      'char' => 65,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 80,
                    'char' => 65,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                'line' => 80,
                'char' => 66,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 81,
              'char' => 5,
            ),
          ),
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
                'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                'line' => 78,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
            'line' => 78,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
          'line' => 77,
          'last-line' => 83,
          'char' => 19,
        ),
        4 => 
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
                'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                'line' => 83,
                'char' => 61,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 83,
              'char' => 61,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 85,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'storage',
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 85,
                    'char' => 30,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                  'line' => 85,
                  'char' => 30,
                ),
                'name' => 'getDefaultScope',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'client_id',
                      'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                      'line' => 85,
                      'char' => 56,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 85,
                    'char' => 56,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                'line' => 85,
                'char' => 57,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 86,
              'char' => 5,
            ),
          ),
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
                'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                'line' => 84,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
            'line' => 84,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
          'line' => 83,
          'last-line' => 96,
          'char' => 19,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getReservedScopes',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'array',
                'left' => 
                array (
                  0 => 
                  array (
                    'value' => 
                    array (
                      'type' => 'string',
                      'value' => 'openid',
                      'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                      'line' => 99,
                      'char' => 25,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 99,
                    'char' => 25,
                  ),
                  1 => 
                  array (
                    'value' => 
                    array (
                      'type' => 'string',
                      'value' => 'offline_access',
                      'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                      'line' => 99,
                      'char' => 43,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                    'line' => 99,
                    'char' => 43,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
                'line' => 99,
                'char' => 44,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
              'line' => 100,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Get reserved scopes needed by the server.
     *
     * In case OpenID Connect is used, these scopes must include:
     * \'openid\', offline_access\'.
     *
     * @return
     * An array of reserved scopes.
     *',
          'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
          'line' => 97,
          'last-line' => 101,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
      'line' => 10,
      'char' => 5,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/scope.zep',
    'line' => 10,
    'char' => 5,
  ),
);