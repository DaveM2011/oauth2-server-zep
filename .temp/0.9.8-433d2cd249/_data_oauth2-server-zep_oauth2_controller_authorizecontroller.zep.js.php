<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\Controller',
    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
    'line' => 3,
    'char' => 3,
  ),
  1 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Storage\\ClientInterface',
        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
        'line' => 3,
        'char' => 35,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
    'line' => 4,
    'char' => 3,
  ),
  2 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\ScopeInterface',
        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
        'line' => 4,
        'char' => 26,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
    'line' => 5,
    'char' => 3,
  ),
  3 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\RequestInterface',
        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
        'line' => 5,
        'char' => 28,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
    'line' => 6,
    'char' => 3,
  ),
  4 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\ResponseInterface',
        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
        'line' => 6,
        'char' => 29,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
    'line' => 7,
    'char' => 3,
  ),
  5 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\Scope',
        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
        'line' => 7,
        'char' => 17,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
    'line' => 8,
    'char' => 3,
  ),
  6 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'InvalidArgumentException',
        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
        'line' => 8,
        'char' => 29,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
    'line' => 12,
    'char' => 2,
  ),
  7 => 
  array (
    'type' => 'comment',
    'value' => '**
 * @see AuthorizeControllerInterface
 *',
    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
    'line' => 13,
    'char' => 5,
  ),
  8 => 
  array (
    'type' => 'class',
    'name' => 'AuthorizeController',
    'abstract' => 0,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'AuthorizeControllerInterface',
        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
        'line' => 14,
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
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'scope',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 16,
          'char' => 11,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'state',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 17,
          'char' => 11,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'client_id',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 18,
          'char' => 11,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'redirect_uri',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 19,
          'char' => 11,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'response_type',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 20,
          'char' => 13,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'clientStorage',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 21,
          'char' => 13,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'responseTypes',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 22,
          'char' => 13,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'config',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 23,
          'char' => 13,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'scopeUtil',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 41,
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
              'name' => 'clientStorage',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'ClientInterface',
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 42,
                'char' => 63,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 42,
              'char' => 64,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'responseTypes',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 42,
                'char' => 90,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 42,
              'char' => 90,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'config',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 42,
                'char' => 109,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 42,
              'char' => 109,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'scopeUtil',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'ScopeInterface',
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 42,
                'char' => 136,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 42,
                'char' => 144,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 42,
              'char' => 144,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'clientStorage',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'clientStorage',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 44,
                    'char' => 48,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 44,
                  'char' => 48,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 45,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'responseTypes',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'responseTypes',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 45,
                    'char' => 48,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 45,
                  'char' => 48,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 46,
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
                  'property' => 'config',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'array_merge',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'allow_implicit',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 47,
                                'char' => 29,
                              ),
                              'value' => 
                              array (
                                'type' => 'bool',
                                'value' => 'false',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 47,
                                'char' => 36,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 47,
                              'char' => 36,
                            ),
                            1 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'enforce_state',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 48,
                                'char' => 28,
                              ),
                              'value' => 
                              array (
                                'type' => 'bool',
                                'value' => 'true',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 48,
                                'char' => 34,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 48,
                              'char' => 34,
                            ),
                            2 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'require_exact_redirect_uri',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 49,
                                'char' => 41,
                              ),
                              'value' => 
                              array (
                                'type' => 'bool',
                                'value' => 'true',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 49,
                                'char' => 47,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 49,
                              'char' => 47,
                            ),
                            3 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'redirect_status_code',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 50,
                                'char' => 35,
                              ),
                              'value' => 
                              array (
                                'type' => 'int',
                                'value' => '302',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 51,
                                'char' => 9,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 51,
                              'char' => 9,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 51,
                          'char' => 10,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 51,
                        'char' => 10,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 51,
                          'char' => 18,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 51,
                        'char' => 18,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 51,
                    'char' => 19,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 51,
                  'char' => 19,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 53,
              'char' => 10,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'is_null',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'scopeUtil',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 53,
                      'char' => 29,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 53,
                    'char' => 29,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 53,
                'char' => 31,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'scopeUtil',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => 'Scope',
                        'dynamic' => 0,
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 54,
                        'char' => 40,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 54,
                      'char' => 40,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 55,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 56,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'scopeUtil',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'scopeUtil',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 56,
                    'char' => 40,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 56,
                  'char' => 40,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 57,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Constructor
     *
     * @param ClientInterface $clientStorage REQUIRED Instance of OAuth2\\Storage\\ClientInterface to retrieve client information
     * @param array           $responseTypes OPTIONAL Array of OAuth2\\ResponseType\\ResponseTypeInterface objects.  Valid array
     *                                       keys are "code" and "token"
     * @param array           $config        OPTIONAL Configuration options for the server:
     * @param ScopeInterface  $scopeUtil     OPTIONAL Instance of OAuth2\\ScopeInterface to validate the requested scope
     * @code
     *     $config = array(
     *         "allow_implicit" => false,            // if the controller should allow the "implicit" grant type
     *         "enforce_state"  => true              // if the controller should require the "state" parameter
     *         "require_exact_redirect_uri" => true, // if the controller should require an exact match on the "redirect_uri" parameter
     *         "redirect_status_code" => 302,        // HTTP status code to use for redirect responses
     *     );
     * @endcode
     *',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 42,
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
          'name' => 'handleAuthorizeRequest',
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 69,
                'char' => 69,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 69,
              'char' => 70,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'response',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'ResponseInterface',
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 69,
                'char' => 99,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 69,
              'char' => 100,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'is_authorized',
              'const' => 0,
              'data-type' => 'bool',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 69,
              'char' => 123,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'user_id',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 69,
                'char' => 139,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 69,
              'char' => 139,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 73,
                    'char' => 18,
                  ),
                  'name' => 'validateAuthorizeRequest',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'request',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 73,
                        'char' => 51,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 73,
                      'char' => 51,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'response',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 73,
                        'char' => 61,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 73,
                      'char' => 61,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 73,
                  'char' => 63,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 73,
                'char' => 63,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 75,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 76,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'clientData',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 76,
                  'char' => 23,
                ),
                1 => 
                array (
                  'variable' => 'registered_redirect_uri',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 76,
                  'char' => 48,
                ),
                2 => 
                array (
                  'variable' => 'redirect_uri',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 76,
                  'char' => 62,
                ),
                3 => 
                array (
                  'variable' => 'params',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 76,
                  'char' => 70,
                ),
                4 => 
                array (
                  'variable' => 'authResult',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 76,
                  'char' => 82,
                ),
                5 => 
                array (
                  'variable' => 'uri',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 76,
                  'char' => 87,
                ),
                6 => 
                array (
                  'variable' => 'uri_params',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 76,
                  'char' => 99,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 78,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'empty',
                'left' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 78,
                    'char' => 23,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'redirect_uri',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 78,
                    'char' => 37,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 78,
                  'char' => 37,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 78,
                'char' => 37,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'clientData',
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
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 79,
                            'char' => 35,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'clientStorage',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 79,
                            'char' => 50,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 79,
                          'char' => 50,
                        ),
                        'name' => 'getClientDetails',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'this',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 79,
                                'char' => 73,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'client_id',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 79,
                                'char' => 83,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 79,
                              'char' => 83,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 79,
                            'char' => 83,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 79,
                        'char' => 84,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 79,
                      'char' => 84,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 80,
                  'char' => 15,
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
                      'variable' => 'registered_redirect_uri',
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'clientData',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 80,
                          'char' => 53,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'redirect_uri',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 80,
                          'char' => 68,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 80,
                        'char' => 69,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 80,
                      'char' => 69,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 81,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 84,
              'char' => 10,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'is_authorized',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 84,
                  'char' => 27,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'false',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 84,
                  'char' => 35,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 84,
                'char' => 35,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'redirect_uri',
                      'expr' => 
                      array (
                        'type' => 'ternary',
                        'left' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 85,
                            'char' => 37,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'redirect_uri',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 85,
                            'char' => 51,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 85,
                          'char' => 51,
                        ),
                        'right' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 85,
                            'char' => 58,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'redirect_uri',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 85,
                            'char' => 72,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 85,
                          'char' => 72,
                        ),
                        'extra' => 
                        array (
                          'type' => 'variable',
                          'value' => 'registered_redirect_uri',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 85,
                          'char' => 97,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 85,
                        'char' => 97,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 85,
                      'char' => 97,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 86,
                  'char' => 16,
                ),
                1 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 86,
                      'char' => 18,
                    ),
                    'name' => 'setNotAuthorizedResponse',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'request',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 86,
                          'char' => 51,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 86,
                        'char' => 51,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 86,
                          'char' => 61,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 86,
                        'char' => 61,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'redirect_uri',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 86,
                          'char' => 75,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 86,
                        'char' => 75,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'user_id',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 86,
                          'char' => 84,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 86,
                        'char' => 84,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 86,
                    'char' => 85,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 88,
                  'char' => 18,
                ),
                2 => 
                array (
                  'type' => 'return',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 89,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 92,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'params',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 92,
                      'char' => 27,
                    ),
                    'name' => 'buildAuthorizeParameters',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'request',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 92,
                          'char' => 60,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 92,
                        'char' => 60,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 92,
                          'char' => 70,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 92,
                        'char' => 70,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'user_id',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 92,
                          'char' => 79,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 92,
                        'char' => 79,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 92,
                    'char' => 80,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 92,
                  'char' => 80,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 93,
              'char' => 10,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'params',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 93,
                  'char' => 20,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 93,
                'char' => 20,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 95,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 97,
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
                  'variable' => 'authResult',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 97,
                          'char' => 31,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'responseTypes',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 97,
                          'char' => 45,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 97,
                        'char' => 45,
                      ),
                      'right' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 97,
                          'char' => 51,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response_type',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 97,
                          'char' => 65,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 97,
                        'char' => 65,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 97,
                      'char' => 67,
                    ),
                    'name' => 'getAuthorizeResponse',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'params',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 97,
                          'char' => 95,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 97,
                        'char' => 95,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'user_id',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 97,
                          'char' => 104,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 97,
                        'char' => 104,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 97,
                    'char' => 105,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 97,
                  'char' => 105,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 98,
              'char' => 11,
            ),
            7 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'redirect_uri',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'authResult',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 98,
                      'char' => 38,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '0',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 98,
                      'char' => 40,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 98,
                    'char' => 41,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 98,
                  'char' => 41,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 99,
              'char' => 11,
            ),
            8 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'uri_params',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'authResult',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 99,
                      'char' => 36,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '1',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 99,
                      'char' => 38,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 99,
                    'char' => 39,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 99,
                  'char' => 39,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 102,
              'char' => 10,
            ),
            9 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'redirect_uri',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 102,
                    'char' => 32,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 102,
                  'char' => 32,
                ),
                'right' => 
                array (
                  'type' => 'not',
                  'left' => 
                  array (
                    'type' => 'empty',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'registered_redirect_uri',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 102,
                      'char' => 65,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 102,
                    'char' => 65,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 102,
                  'char' => 65,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 102,
                'char' => 65,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'redirect_uri',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'registered_redirect_uri',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 103,
                        'char' => 55,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 103,
                      'char' => 55,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 104,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 106,
              'char' => 11,
            ),
            10 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'uri',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 106,
                      'char' => 24,
                    ),
                    'name' => 'buildUri',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'redirect_uri',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 106,
                          'char' => 46,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 106,
                        'char' => 46,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'uri_params',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 106,
                          'char' => 58,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 106,
                        'char' => 58,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 106,
                    'char' => 59,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 106,
                  'char' => 59,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 109,
              'char' => 16,
            ),
            11 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'response',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 109,
                  'char' => 18,
                ),
                'name' => 'setRedirect',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 109,
                          'char' => 36,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 109,
                          'char' => 43,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 109,
                        'char' => 43,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'redirect_status_code',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 109,
                        'char' => 66,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 109,
                      'char' => 67,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 109,
                    'char' => 67,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'uri',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 109,
                      'char' => 72,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 109,
                    'char' => 72,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 109,
                'char' => 73,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 110,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Handle the authorization request
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param boolean           $is_authorized
     * @param mixed             $user_id
     * @return mixed|void
     * @throws InvalidArgumentException
     *',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 69,
          'last-line' => 119,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'setNotAuthorizedResponse',
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 120,
                'char' => 74,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 120,
              'char' => 75,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'response',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'ResponseInterface',
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 120,
                'char' => 104,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 120,
              'char' => 105,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'redirect_uri',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 120,
              'char' => 119,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'user_id',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 120,
                'char' => 135,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 120,
              'char' => 135,
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
                  'variable' => 'error',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'access_denied',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 122,
                    'char' => 36,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 122,
                  'char' => 36,
                ),
                1 => 
                array (
                  'variable' => 'error_message',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'The user denied access to your application',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 122,
                    'char' => 98,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 122,
                  'char' => 98,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 123,
              'char' => 16,
            ),
            1 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'response',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 123,
                  'char' => 18,
                ),
                'name' => 'setRedirect',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 123,
                          'char' => 36,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 123,
                          'char' => 43,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 123,
                        'char' => 43,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'redirect_status_code',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 123,
                        'char' => 66,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 123,
                      'char' => 67,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 123,
                    'char' => 67,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'redirect_uri',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 123,
                      'char' => 81,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 123,
                    'char' => 81,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 123,
                        'char' => 88,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'state',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 123,
                        'char' => 94,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 123,
                      'char' => 94,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 123,
                    'char' => 94,
                  ),
                  3 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'error',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 123,
                      'char' => 101,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 123,
                    'char' => 101,
                  ),
                  4 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'error_message',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 123,
                      'char' => 116,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 123,
                    'char' => 116,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 123,
                'char' => 117,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 124,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Set not authorized response
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param string            $redirect_uri
     * @param mixed             $user_id
     *',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 120,
          'last-line' => 136,
          'char' => 22,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'buildAuthorizeParameters',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'request',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 137,
              'char' => 56,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'response',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 137,
              'char' => 66,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'user_id',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 137,
              'char' => 75,
            ),
          ),
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
                    'key' => 
                    array (
                      'type' => 'string',
                      'value' => 'scope',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 140,
                      'char' => 20,
                    ),
                    'value' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 140,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'scope',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 140,
                        'char' => 33,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 140,
                      'char' => 33,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 140,
                    'char' => 33,
                  ),
                  1 => 
                  array (
                    'key' => 
                    array (
                      'type' => 'string',
                      'value' => 'state',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 141,
                      'char' => 20,
                    ),
                    'value' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 141,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'state',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 141,
                        'char' => 33,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 141,
                      'char' => 33,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 141,
                    'char' => 33,
                  ),
                  2 => 
                  array (
                    'key' => 
                    array (
                      'type' => 'string',
                      'value' => 'client_id',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 142,
                      'char' => 24,
                    ),
                    'value' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 142,
                        'char' => 31,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'client_id',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 142,
                        'char' => 41,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 142,
                      'char' => 41,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 142,
                    'char' => 41,
                  ),
                  3 => 
                  array (
                    'key' => 
                    array (
                      'type' => 'string',
                      'value' => 'redirect_uri',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 143,
                      'char' => 27,
                    ),
                    'value' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 143,
                        'char' => 34,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'redirect_uri',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 143,
                        'char' => 47,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 143,
                      'char' => 47,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 143,
                    'char' => 47,
                  ),
                  4 => 
                  array (
                    'key' => 
                    array (
                      'type' => 'string',
                      'value' => 'response_type',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 144,
                      'char' => 28,
                    ),
                    'value' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 144,
                        'char' => 35,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'response_type',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 145,
                        'char' => 9,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 145,
                      'char' => 9,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 145,
                    'char' => 9,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 145,
                'char' => 10,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 146,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * We have made this protected so this class can be extended to add/modify
     * these parameters
     *
     * @TODO: add dependency injection for the parameters in this method
     *
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @param mixed $user_id
     * @return array
     *',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 137,
          'last-line' => 154,
          'char' => 22,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'validateAuthorizeRequest',
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 155,
                'char' => 71,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 155,
              'char' => 72,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'response',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'ResponseInterface',
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 155,
                'char' => 101,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 155,
              'char' => 102,
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
                  'variable' => 'client_id',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 157,
                  'char' => 22,
                ),
                1 => 
                array (
                  'variable' => 'clientData',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 157,
                  'char' => 34,
                ),
                2 => 
                array (
                  'variable' => 'registered_redirect_uri',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 157,
                  'char' => 59,
                ),
                3 => 
                array (
                  'variable' => 'supplied_redirect_uri',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 157,
                  'char' => 82,
                ),
                4 => 
                array (
                  'variable' => 'parts',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 157,
                  'char' => 89,
                ),
                5 => 
                array (
                  'variable' => 'redirect_uri',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 157,
                  'char' => 103,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 159,
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
                  'variable' => 'client_id',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'request',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 159,
                      'char' => 33,
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
                          'value' => 'client_id',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 159,
                          'char' => 51,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 159,
                        'char' => 51,
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
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 159,
                            'char' => 61,
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
                                'value' => 'client_id',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 159,
                                'char' => 81,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 159,
                              'char' => 81,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 159,
                          'char' => 82,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 159,
                        'char' => 82,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 159,
                    'char' => 83,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 159,
                  'char' => 83,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 160,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'client_id',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 160,
                  'char' => 23,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 160,
                'char' => 23,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'response',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 162,
                      'char' => 22,
                    ),
                    'name' => 'setError',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'int',
                          'value' => '400',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 162,
                          'char' => 35,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 162,
                        'char' => 35,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'invalid_client',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 162,
                          'char' => 53,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 162,
                        'char' => 53,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'No client id supplied',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 162,
                          'char' => 78,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 162,
                        'char' => 78,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 162,
                    'char' => 79,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 164,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 164,
                    'char' => 25,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 165,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 168,
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
                  'variable' => 'clientData',
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
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 168,
                        'char' => 31,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'clientStorage',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 168,
                        'char' => 46,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 168,
                      'char' => 46,
                    ),
                    'name' => 'getClientDetails',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'client_id',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 168,
                          'char' => 73,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 168,
                        'char' => 73,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 168,
                    'char' => 74,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 168,
                  'char' => 74,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 169,
              'char' => 10,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'clientData',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 169,
                  'char' => 24,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 169,
                'char' => 24,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'response',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 170,
                      'char' => 22,
                    ),
                    'name' => 'setError',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'int',
                          'value' => '400',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 170,
                          'char' => 35,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 170,
                        'char' => 35,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'invalid_client',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 170,
                          'char' => 53,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 170,
                        'char' => 53,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'The client id supplied is invalid',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 170,
                          'char' => 90,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 170,
                        'char' => 90,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 170,
                    'char' => 91,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 172,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 172,
                    'char' => 25,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 173,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 175,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'registered_redirect_uri',
                  'expr' => 
                  array (
                    'type' => 'ternary',
                    'left' => 
                    array (
                      'type' => 'isset',
                      'left' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'clientData',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 175,
                          'char' => 55,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'redirect_uri',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 175,
                          'char' => 70,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 175,
                        'char' => 72,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 175,
                      'char' => 72,
                    ),
                    'right' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'clientData',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 175,
                        'char' => 84,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'redirect_uri',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 175,
                        'char' => 99,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 175,
                      'char' => 101,
                    ),
                    'extra' => 
                    array (
                      'type' => 'string',
                      'value' => '',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 175,
                      'char' => 105,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 175,
                    'char' => 105,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 175,
                  'char' => 105,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 181,
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
                  'variable' => 'supplied_redirect_uri',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'request',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 181,
                      'char' => 45,
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
                          'value' => 'redirect_uri',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 181,
                          'char' => 66,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 181,
                        'char' => 66,
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
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 181,
                            'char' => 76,
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
                                'value' => 'redirect_uri',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 181,
                                'char' => 99,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 181,
                              'char' => 99,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 181,
                          'char' => 100,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 181,
                        'char' => 100,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 181,
                    'char' => 101,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 181,
                  'char' => 101,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 182,
              'char' => 10,
            ),
            7 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'supplied_redirect_uri',
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 182,
                'char' => 34,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'parts',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'parse_url',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'supplied_redirect_uri',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 184,
                              'char' => 56,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 184,
                            'char' => 56,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 184,
                        'char' => 57,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 184,
                      'char' => 57,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 185,
                  'char' => 14,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'and',
                    'left' => 
                    array (
                      'type' => 'isset',
                      'left' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'parts',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 185,
                          'char' => 27,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'fragment',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 185,
                          'char' => 38,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 185,
                        'char' => 41,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 185,
                      'char' => 41,
                    ),
                    'right' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'parts',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 185,
                        'char' => 48,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'fragment',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 185,
                        'char' => 59,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 185,
                      'char' => 61,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 185,
                    'char' => 61,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 186,
                          'char' => 26,
                        ),
                        'name' => 'setError',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'int',
                              'value' => '400',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 186,
                              'char' => 39,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 186,
                            'char' => 39,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'invalid_uri',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 186,
                              'char' => 54,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 186,
                            'char' => 54,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'The redirect URI must not contain a fragment',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 186,
                              'char' => 102,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 186,
                            'char' => 102,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 186,
                        'char' => 103,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 188,
                      'char' => 22,
                    ),
                    1 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 188,
                        'char' => 29,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 189,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 192,
                  'char' => 14,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'and',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'registered_redirect_uri',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 192,
                      'char' => 41,
                    ),
                    'right' => 
                    array (
                      'type' => 'not',
                      'left' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 192,
                          'char' => 49,
                        ),
                        'name' => 'validateRedirectUri',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'supplied_redirect_uri',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 192,
                              'char' => 91,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 192,
                            'char' => 91,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'registered_redirect_uri',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 192,
                              'char' => 116,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 192,
                            'char' => 116,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 192,
                        'char' => 118,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 192,
                      'char' => 118,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 192,
                    'char' => 118,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 193,
                          'char' => 26,
                        ),
                        'name' => 'setError',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'int',
                              'value' => '400',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 193,
                              'char' => 39,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 193,
                            'char' => 39,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'redirect_uri_mismatch',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 193,
                              'char' => 64,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 193,
                            'char' => 64,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'The redirect URI provided is missing or does not match',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 193,
                              'char' => 122,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 193,
                            'char' => 122,
                          ),
                          3 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => '#section-3.1.2',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 193,
                              'char' => 140,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 193,
                            'char' => 140,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 193,
                        'char' => 141,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 195,
                      'char' => 22,
                    ),
                    1 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 195,
                        'char' => 29,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 196,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 197,
                  'char' => 15,
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
                      'variable' => 'redirect_uri',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'supplied_redirect_uri',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 197,
                        'char' => 53,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 197,
                      'char' => 53,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 198,
                  'char' => 9,
                ),
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'not',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'registered_redirect_uri',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 200,
                      'char' => 41,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 200,
                    'char' => 41,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 201,
                          'char' => 26,
                        ),
                        'name' => 'setError',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'int',
                              'value' => '400',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 201,
                              'char' => 39,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 201,
                            'char' => 39,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'invalid_uri',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 201,
                              'char' => 54,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 201,
                            'char' => 54,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'No redirect URI was supplied or stored',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 201,
                              'char' => 96,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 201,
                            'char' => 96,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 201,
                        'char' => 97,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 203,
                      'char' => 22,
                    ),
                    1 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 203,
                        'char' => 29,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 204,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 206,
                  'char' => 14,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'greater',
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
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 206,
                                  'char' => 33,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 206,
                                'char' => 33,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'registered_redirect_uri',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 206,
                                  'char' => 58,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 206,
                                'char' => 58,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 206,
                            'char' => 59,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 206,
                          'char' => 59,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 206,
                      'char' => 61,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '1',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 206,
                      'char' => 65,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 206,
                    'char' => 65,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 207,
                          'char' => 26,
                        ),
                        'name' => 'setError',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'int',
                              'value' => '400',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 207,
                              'char' => 39,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 207,
                            'char' => 39,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'invalid_uri',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 207,
                              'char' => 54,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 207,
                            'char' => 54,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'A redirect URI must be supplied when multiple redirect URIs are registered',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 207,
                              'char' => 132,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 207,
                            'char' => 132,
                          ),
                          3 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => '#section-3.1.2.3',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 207,
                              'char' => 152,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 207,
                            'char' => 152,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 207,
                        'char' => 153,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 209,
                      'char' => 22,
                    ),
                    1 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 209,
                        'char' => 29,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 210,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 211,
                  'char' => 15,
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
                      'variable' => 'redirect_uri',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'registered_redirect_uri',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 211,
                        'char' => 55,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 211,
                      'char' => 55,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 212,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 213,
              'char' => 11,
            ),
            8 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'response_type',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 213,
                  'char' => 26,
                ),
                1 => 
                array (
                  'variable' => 'types',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 213,
                  'char' => 33,
                ),
                2 => 
                array (
                  'variable' => 'state',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 213,
                  'char' => 40,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 215,
              'char' => 11,
            ),
            9 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'response_type',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'request',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 215,
                      'char' => 37,
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
                          'value' => 'response_type',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 215,
                          'char' => 59,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 215,
                        'char' => 59,
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
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 215,
                            'char' => 69,
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
                                'value' => 'response_type',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 215,
                                'char' => 93,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 215,
                              'char' => 93,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 215,
                          'char' => 94,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 215,
                        'char' => 94,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 215,
                    'char' => 95,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 215,
                  'char' => 95,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 218,
              'char' => 10,
            ),
            10 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-identical',
                'left' => 
                array (
                  'type' => 'bool',
                  'value' => 'false',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 218,
                  'char' => 20,
                ),
                'right' => 
                array (
                  'type' => 'fcall',
                  'name' => 'strpos',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'response_type',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 218,
                        'char' => 42,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 218,
                      'char' => 42,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'string',
                        'value' => ' ',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 218,
                        'char' => 47,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 218,
                      'char' => 47,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 218,
                  'char' => 49,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 218,
                'char' => 49,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'types',
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
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 219,
                              'char' => 36,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 219,
                            'char' => 36,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'response_type',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 219,
                              'char' => 51,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 219,
                            'char' => 51,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 219,
                        'char' => 52,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 219,
                      'char' => 52,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 220,
                  'char' => 16,
                ),
                1 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'sort',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'types',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 220,
                          'char' => 23,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 220,
                        'char' => 23,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 220,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 221,
                  'char' => 15,
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
                      'variable' => 'response_type',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'ltrim',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
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
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                    'line' => 221,
                                    'char' => 50,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 221,
                                  'char' => 50,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'types',
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                    'line' => 221,
                                    'char' => 57,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 221,
                                  'char' => 57,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 221,
                              'char' => 58,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 221,
                            'char' => 58,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 221,
                        'char' => 59,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 221,
                      'char' => 59,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 222,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 224,
              'char' => 11,
            ),
            11 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'state',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'request',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 224,
                      'char' => 29,
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
                          'value' => 'state',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 224,
                          'char' => 43,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 224,
                        'char' => 43,
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
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 224,
                            'char' => 53,
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
                                'value' => 'state',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 224,
                                'char' => 69,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 224,
                              'char' => 69,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 224,
                          'char' => 70,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 224,
                        'char' => 70,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 224,
                    'char' => 71,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 224,
                  'char' => 71,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 227,
              'char' => 10,
            ),
            12 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'or',
                'left' => 
                array (
                  'type' => 'not',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'response_type',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 227,
                    'char' => 28,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 227,
                  'char' => 28,
                ),
                'right' => 
                array (
                  'type' => 'not',
                  'left' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'in_array',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response_type',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 227,
                          'char' => 53,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 227,
                        'char' => 53,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 227,
                            'char' => 60,
                          ),
                          'name' => 'getValidResponseTypes',
                          'call-type' => 1,
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 227,
                          'char' => 84,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 227,
                        'char' => 84,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 227,
                    'char' => 86,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 227,
                  'char' => 86,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 227,
                'char' => 86,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'response',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 228,
                      'char' => 22,
                    ),
                    'name' => 'setRedirect',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 228,
                              'char' => 40,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'config',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 228,
                              'char' => 47,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 228,
                            'char' => 47,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'redirect_status_code',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 228,
                            'char' => 70,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 228,
                          'char' => 71,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 228,
                        'char' => 71,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'redirect_uri',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 228,
                          'char' => 85,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 228,
                        'char' => 85,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'state',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 228,
                          'char' => 92,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 228,
                        'char' => 92,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'invalid_request',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 228,
                          'char' => 111,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 228,
                        'char' => 111,
                      ),
                      4 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'Invalid or missing response type',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 228,
                          'char' => 147,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 228,
                        'char' => 147,
                      ),
                      5 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'null',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 228,
                          'char' => 153,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 228,
                        'char' => 153,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 228,
                    'char' => 154,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 230,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 230,
                    'char' => 25,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 231,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 233,
              'char' => 10,
            ),
            13 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'response_type',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 233,
                  'char' => 27,
                ),
                'right' => 
                array (
                  'type' => 'static-constant-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'self',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 233,
                    'char' => 68,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'RESPONSE_TYPE_AUTHORIZATION_CODE',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 233,
                    'char' => 68,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 233,
                  'char' => 68,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 233,
                'char' => 68,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'not',
                    'left' => 
                    array (
                      'type' => 'isset',
                      'left' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 234,
                            'char' => 28,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'responseTypes',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 234,
                            'char' => 42,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 234,
                          'char' => 42,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'code',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 234,
                          'char' => 49,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 234,
                        'char' => 51,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 234,
                      'char' => 51,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 234,
                    'char' => 51,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 235,
                          'char' => 26,
                        ),
                        'name' => 'setRedirect',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'property-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'this',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 235,
                                  'char' => 44,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'config',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 235,
                                  'char' => 51,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 235,
                                'char' => 51,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'redirect_status_code',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 235,
                                'char' => 74,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 235,
                              'char' => 75,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 235,
                            'char' => 75,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'redirect_uri',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 235,
                              'char' => 89,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 235,
                            'char' => 89,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'state',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 235,
                              'char' => 96,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 235,
                            'char' => 96,
                          ),
                          3 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'unsupported_response_type',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 235,
                              'char' => 125,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 235,
                            'char' => 125,
                          ),
                          4 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'authorization code grant type not supported',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 235,
                              'char' => 172,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 235,
                            'char' => 172,
                          ),
                          5 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'null',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 235,
                              'char' => 178,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 235,
                            'char' => 178,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 235,
                        'char' => 179,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 237,
                      'char' => 22,
                    ),
                    1 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 237,
                        'char' => 29,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 238,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 239,
                  'char' => 14,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'not',
                    'left' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 239,
                          'char' => 22,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'clientStorage',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 239,
                          'char' => 37,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 239,
                        'char' => 37,
                      ),
                      'name' => 'checkRestrictedGrantType',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'client_id',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 239,
                            'char' => 72,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 239,
                          'char' => 72,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'string',
                            'value' => 'authorization_code',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 239,
                            'char' => 94,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 239,
                          'char' => 94,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 239,
                      'char' => 96,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 239,
                    'char' => 96,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 240,
                          'char' => 26,
                        ),
                        'name' => 'setRedirect',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'property-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'this',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 240,
                                  'char' => 44,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'config',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 240,
                                  'char' => 51,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 240,
                                'char' => 51,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'redirect_status_code',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 240,
                                'char' => 74,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 240,
                              'char' => 75,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 240,
                            'char' => 75,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'redirect_uri',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 240,
                              'char' => 89,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 240,
                            'char' => 89,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'state',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 240,
                              'char' => 96,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 240,
                            'char' => 96,
                          ),
                          3 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'unauthorized_client',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 240,
                              'char' => 119,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 240,
                            'char' => 119,
                          ),
                          4 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'The grant type is unauthorized for this client_id',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 240,
                              'char' => 172,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 240,
                            'char' => 172,
                          ),
                          5 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'null',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 240,
                              'char' => 178,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 240,
                            'char' => 178,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 240,
                        'char' => 179,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 242,
                      'char' => 22,
                    ),
                    1 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 242,
                        'char' => 29,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 243,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 244,
                  'char' => 14,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'and',
                    'left' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 244,
                            'char' => 21,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'responseTypes',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 244,
                            'char' => 35,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 244,
                          'char' => 35,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'code',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 244,
                          'char' => 42,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 244,
                        'char' => 44,
                      ),
                      'name' => 'enforceRedirect',
                      'call-type' => 1,
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 244,
                      'char' => 64,
                    ),
                    'right' => 
                    array (
                      'type' => 'not',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'redirect_uri',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 244,
                        'char' => 80,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 244,
                      'char' => 80,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 244,
                    'char' => 80,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 245,
                          'char' => 26,
                        ),
                        'name' => 'setError',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'int',
                              'value' => '400',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 245,
                              'char' => 39,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 245,
                            'char' => 39,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'redirect_uri_mismatch',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 245,
                              'char' => 64,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 245,
                            'char' => 64,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'The redirect URI is mandatory and was not supplied',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 245,
                              'char' => 118,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 245,
                            'char' => 118,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 245,
                        'char' => 119,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 247,
                      'char' => 22,
                    ),
                    1 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 247,
                        'char' => 29,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 248,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 249,
                  'char' => 9,
                ),
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'not',
                    'left' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 250,
                          'char' => 22,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 250,
                          'char' => 29,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 250,
                        'char' => 29,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'allow_implicit',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 250,
                        'char' => 46,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 250,
                      'char' => 48,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 250,
                    'char' => 48,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 251,
                          'char' => 26,
                        ),
                        'name' => 'setRedirect',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'property-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'this',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 251,
                                  'char' => 44,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'config',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 251,
                                  'char' => 51,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 251,
                                'char' => 51,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'redirect_status_code',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 251,
                                'char' => 74,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 251,
                              'char' => 75,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 251,
                            'char' => 75,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'redirect_uri',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 251,
                              'char' => 89,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 251,
                            'char' => 89,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'state',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 251,
                              'char' => 96,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 251,
                            'char' => 96,
                          ),
                          3 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'unsupported_response_type',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 251,
                              'char' => 125,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 251,
                            'char' => 125,
                          ),
                          4 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'implicit grant type not supported',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 251,
                              'char' => 162,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 251,
                            'char' => 162,
                          ),
                          5 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'null',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 251,
                              'char' => 168,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 251,
                            'char' => 168,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 251,
                        'char' => 169,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 253,
                      'char' => 22,
                    ),
                    1 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 253,
                        'char' => 29,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 254,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 255,
                  'char' => 14,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'not',
                    'left' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 255,
                          'char' => 22,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'clientStorage',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 255,
                          'char' => 37,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 255,
                        'char' => 37,
                      ),
                      'name' => 'checkRestrictedGrantType',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'client_id',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 255,
                            'char' => 72,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 255,
                          'char' => 72,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'string',
                            'value' => 'implicit',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 255,
                            'char' => 84,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 255,
                          'char' => 84,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 255,
                      'char' => 86,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 255,
                    'char' => 86,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 256,
                          'char' => 26,
                        ),
                        'name' => 'setRedirect',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'property-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'this',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 256,
                                  'char' => 44,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'config',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 256,
                                  'char' => 51,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 256,
                                'char' => 51,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'redirect_status_code',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 256,
                                'char' => 74,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 256,
                              'char' => 75,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 256,
                            'char' => 75,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'redirect_uri',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 256,
                              'char' => 89,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 256,
                            'char' => 89,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'state',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 256,
                              'char' => 96,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 256,
                            'char' => 96,
                          ),
                          3 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'unauthorized_client',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 256,
                              'char' => 119,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 256,
                            'char' => 119,
                          ),
                          4 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'The grant type is unauthorized for this client_id',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 256,
                              'char' => 172,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 256,
                            'char' => 172,
                          ),
                          5 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'null',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 256,
                              'char' => 178,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 256,
                            'char' => 178,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 256,
                        'char' => 179,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 258,
                      'char' => 22,
                    ),
                    1 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 258,
                        'char' => 29,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 259,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 260,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 261,
              'char' => 11,
            ),
            14 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'requestedScope',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 261,
                  'char' => 27,
                ),
                1 => 
                array (
                  'variable' => 'clientScope',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 261,
                  'char' => 40,
                ),
                2 => 
                array (
                  'variable' => 'defaultScope',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 261,
                  'char' => 54,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 263,
              'char' => 11,
            ),
            15 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'requestedScope',
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
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 263,
                        'char' => 35,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'scopeUtil',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 263,
                        'char' => 46,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 263,
                      'char' => 46,
                    ),
                    'name' => 'getScopeFromRequest',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'request',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 263,
                          'char' => 74,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 263,
                        'char' => 74,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 263,
                    'char' => 75,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 263,
                  'char' => 75,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 265,
              'char' => 10,
            ),
            16 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'requestedScope',
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 265,
                'char' => 27,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'clientScope',
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
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 268,
                            'char' => 36,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'clientStorage',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 268,
                            'char' => 51,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 268,
                          'char' => 51,
                        ),
                        'name' => 'getClientScope',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'client_id',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 268,
                              'char' => 76,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 268,
                            'char' => 76,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 268,
                        'char' => 77,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 268,
                      'char' => 77,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 269,
                  'char' => 14,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'or',
                    'left' => 
                    array (
                      'type' => 'list',
                      'left' => 
                      array (
                        'type' => 'and',
                        'left' => 
                        array (
                          'type' => 'empty',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'clientScope',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 269,
                            'char' => 36,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 269,
                          'char' => 36,
                        ),
                        'right' => 
                        array (
                          'type' => 'not',
                          'left' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'this',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 269,
                                'char' => 44,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'scopeUtil',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 269,
                                'char' => 55,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 269,
                              'char' => 55,
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
                                  'value' => 'requestedScope',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 269,
                                  'char' => 82,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 269,
                                'char' => 82,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 269,
                            'char' => 83,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 269,
                          'char' => 83,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 269,
                        'char' => 83,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 269,
                      'char' => 86,
                    ),
                    'right' => 
                    array (
                      'type' => 'list',
                      'left' => 
                      array (
                        'type' => 'and',
                        'left' => 
                        array (
                          'type' => 'not',
                          'left' => 
                          array (
                            'type' => 'empty',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'clientScope',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 269,
                              'char' => 109,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 269,
                            'char' => 109,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 269,
                          'char' => 109,
                        ),
                        'right' => 
                        array (
                          'type' => 'not',
                          'left' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'this',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 269,
                                'char' => 117,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'scopeUtil',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 269,
                                'char' => 128,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 269,
                              'char' => 128,
                            ),
                            'name' => 'checkScope',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'requestedScope',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 269,
                                  'char' => 154,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 269,
                                'char' => 154,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'clientScope',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 269,
                                  'char' => 167,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 269,
                                'char' => 167,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 269,
                            'char' => 168,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 269,
                          'char' => 168,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 269,
                        'char' => 168,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 269,
                      'char' => 170,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 269,
                    'char' => 170,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 270,
                          'char' => 26,
                        ),
                        'name' => 'setRedirect',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'property-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'this',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 270,
                                  'char' => 44,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'config',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 270,
                                  'char' => 51,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 270,
                                'char' => 51,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'redirect_status_code',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 270,
                                'char' => 74,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 270,
                              'char' => 75,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 270,
                            'char' => 75,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'redirect_uri',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 270,
                              'char' => 89,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 270,
                            'char' => 89,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'state',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 270,
                              'char' => 96,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 270,
                            'char' => 96,
                          ),
                          3 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'invalid_scope',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 270,
                              'char' => 113,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 270,
                            'char' => 113,
                          ),
                          4 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'An unsupported scope was requested',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 270,
                              'char' => 151,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 270,
                            'char' => 151,
                          ),
                          5 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'null',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 270,
                              'char' => 157,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 270,
                            'char' => 157,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 270,
                        'char' => 158,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 272,
                      'char' => 22,
                    ),
                    1 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 272,
                        'char' => 29,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 273,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 274,
                  'char' => 9,
                ),
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'defaultScope',
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
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 276,
                            'char' => 37,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'scopeUtil',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 276,
                            'char' => 48,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 276,
                          'char' => 48,
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
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 276,
                              'char' => 74,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 276,
                            'char' => 74,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 276,
                        'char' => 75,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 276,
                      'char' => 75,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 278,
                  'char' => 14,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'identical',
                    'left' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 278,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'defaultScope',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 278,
                      'char' => 39,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 278,
                    'char' => 39,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 279,
                          'char' => 26,
                        ),
                        'name' => 'setRedirect',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'property-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'this',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 279,
                                  'char' => 44,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'config',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 279,
                                  'char' => 51,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 279,
                                'char' => 51,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'redirect_status_code',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 279,
                                'char' => 74,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 279,
                              'char' => 75,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 279,
                            'char' => 75,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'redirect_uri',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 279,
                              'char' => 89,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 279,
                            'char' => 89,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'state',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 279,
                              'char' => 96,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 279,
                            'char' => 96,
                          ),
                          3 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'invalid_client',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 279,
                              'char' => 114,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 279,
                            'char' => 114,
                          ),
                          4 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'This application requires you specify a scope parameter',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 279,
                              'char' => 173,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 279,
                            'char' => 173,
                          ),
                          5 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'null',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 279,
                              'char' => 179,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 279,
                            'char' => 179,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 279,
                        'char' => 180,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 281,
                      'char' => 22,
                    ),
                    1 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 281,
                        'char' => 29,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 282,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 284,
                  'char' => 15,
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
                      'variable' => 'requestedScope',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'defaultScope',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 284,
                        'char' => 46,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 284,
                      'char' => 46,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 285,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 288,
              'char' => 10,
            ),
            17 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 288,
                      'char' => 17,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 288,
                      'char' => 24,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 288,
                    'char' => 24,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'enforce_state',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 288,
                    'char' => 40,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 288,
                  'char' => 43,
                ),
                'right' => 
                array (
                  'type' => 'not',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'state',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 288,
                    'char' => 52,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 288,
                  'char' => 52,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 288,
                'char' => 52,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'response',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 289,
                      'char' => 22,
                    ),
                    'name' => 'setRedirect',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 289,
                              'char' => 40,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'config',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 289,
                              'char' => 47,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 289,
                            'char' => 47,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'redirect_status_code',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 289,
                            'char' => 70,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 289,
                          'char' => 71,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 289,
                        'char' => 71,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'redirect_uri',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 289,
                          'char' => 85,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 289,
                        'char' => 85,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'null',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 289,
                          'char' => 91,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 289,
                        'char' => 91,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'invalid_request',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 289,
                          'char' => 110,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 289,
                        'char' => 110,
                      ),
                      4 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'The state parameter is required',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 289,
                          'char' => 145,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 289,
                        'char' => 145,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 289,
                    'char' => 146,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 291,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 291,
                    'char' => 25,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 292,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 295,
              'char' => 11,
            ),
            18 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'scope',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'requestedScope',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 295,
                    'char' => 41,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 295,
                  'char' => 41,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 296,
              'char' => 11,
            ),
            19 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'state',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'state',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 296,
                    'char' => 32,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 296,
                  'char' => 32,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 297,
              'char' => 11,
            ),
            20 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'client_id',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'client_id',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 297,
                    'char' => 40,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 297,
                  'char' => 40,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 299,
              'char' => 11,
            ),
            21 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'redirect_uri',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'supplied_redirect_uri',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 299,
                    'char' => 55,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 299,
                  'char' => 55,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 300,
              'char' => 11,
            ),
            22 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'response_type',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'response_type',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 300,
                    'char' => 48,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 300,
                  'char' => 48,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 302,
              'char' => 14,
            ),
            23 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 302,
                'char' => 20,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 303,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Validate the OAuth request
     *
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @return bool
     *',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 155,
          'last-line' => 315,
          'char' => 19,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => 'buildUri',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'uri',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 316,
              'char' => 34,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'params',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 316,
              'char' => 42,
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
                  'variable' => 'parse_url',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 318,
                  'char' => 22,
                ),
                1 => 
                array (
                  'variable' => 'k',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 318,
                  'char' => 25,
                ),
                2 => 
                array (
                  'variable' => 'v',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 318,
                  'char' => 28,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 319,
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
                  'variable' => 'parse_url',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'parse_url',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'uri',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 319,
                          'char' => 38,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 319,
                        'char' => 38,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 319,
                    'char' => 39,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 319,
                  'char' => 39,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 322,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'params',
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 322,
                'char' => 28,
              ),
              'key' => 'k',
              'value' => 'v',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'isset',
                    'left' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'parse_url',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 323,
                        'char' => 31,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'k',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 323,
                        'char' => 33,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 323,
                      'char' => 35,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 323,
                    'char' => 35,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'array-index',
                          'operator' => 'concat-assign',
                          'variable' => 'parse_url',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'variable',
                              'value' => 'k',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 324,
                              'char' => 32,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'string',
                              'value' => '&',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 324,
                              'char' => 40,
                            ),
                            'right' => 
                            array (
                              'type' => 'fcall',
                              'name' => 'http_build_query',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'v',
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                    'line' => 324,
                                    'char' => 60,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 324,
                                  'char' => 60,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'string',
                                    'value' => '',
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                    'line' => 324,
                                    'char' => 64,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 324,
                                  'char' => 64,
                                ),
                                2 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'string',
                                    'value' => '&',
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                    'line' => 324,
                                    'char' => 69,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 324,
                                  'char' => 69,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 324,
                              'char' => 70,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 324,
                            'char' => 70,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 324,
                          'char' => 70,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 325,
                      'char' => 13,
                    ),
                  ),
                  'else_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'array-index',
                          'operator' => 'assign',
                          'variable' => 'parse_url',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'variable',
                              'value' => 'k',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 326,
                              'char' => 32,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'http_build_query',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'v',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 326,
                                  'char' => 54,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 326,
                                'char' => 54,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => '',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 326,
                                  'char' => 58,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 326,
                                'char' => 58,
                              ),
                              2 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => '&',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 326,
                                  'char' => 63,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 326,
                                'char' => 63,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 326,
                            'char' => 64,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 326,
                          'char' => 64,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 327,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 328,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 331,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'concat',
                'left' => 
                array (
                  'type' => 'concat',
                  'left' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'list',
                            'left' => 
                            array (
                              'type' => 'ternary',
                              'left' => 
                              array (
                                'type' => 'isset',
                                'left' => 
                                array (
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'parse_url',
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                    'line' => 332,
                                    'char' => 31,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'scheme',
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                    'line' => 332,
                                    'char' => 40,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 332,
                                  'char' => 42,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 332,
                                'char' => 42,
                              ),
                              'right' => 
                              array (
                                'type' => 'concat',
                                'left' => 
                                array (
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'parse_url',
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                    'line' => 332,
                                    'char' => 53,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'scheme',
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                    'line' => 332,
                                    'char' => 62,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 332,
                                  'char' => 64,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => '://',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 332,
                                  'char' => 72,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 332,
                                'char' => 72,
                              ),
                              'extra' => 
                              array (
                                'type' => 'string',
                                'value' => '',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 332,
                                'char' => 76,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 332,
                              'char' => 76,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 333,
                            'char' => 13,
                          ),
                          'right' => 
                          array (
                            'type' => 'list',
                            'left' => 
                            array (
                              'type' => 'ternary',
                              'left' => 
                              array (
                                'type' => 'isset',
                                'left' => 
                                array (
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'parse_url',
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                    'line' => 333,
                                    'char' => 31,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'user',
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                    'line' => 333,
                                    'char' => 38,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 333,
                                  'char' => 40,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 333,
                                'char' => 40,
                              ),
                              'right' => 
                              array (
                                'type' => 'concat',
                                'left' => 
                                array (
                                  'type' => 'concat',
                                  'left' => 
                                  array (
                                    'type' => 'array-access',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'parse_url',
                                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                      'line' => 333,
                                      'char' => 51,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'user',
                                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                      'line' => 333,
                                      'char' => 58,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                    'line' => 334,
                                    'char' => 13,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'list',
                                    'left' => 
                                    array (
                                      'type' => 'ternary',
                                      'left' => 
                                      array (
                                        'type' => 'isset',
                                        'left' => 
                                        array (
                                          'type' => 'array-access',
                                          'left' => 
                                          array (
                                            'type' => 'variable',
                                            'value' => 'parse_url',
                                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                            'line' => 334,
                                            'char' => 31,
                                          ),
                                          'right' => 
                                          array (
                                            'type' => 'string',
                                            'value' => 'pass',
                                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                            'line' => 334,
                                            'char' => 38,
                                          ),
                                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                          'line' => 334,
                                          'char' => 40,
                                        ),
                                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                        'line' => 334,
                                        'char' => 40,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'concat',
                                        'left' => 
                                        array (
                                          'type' => 'string',
                                          'value' => ':',
                                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                          'line' => 334,
                                          'char' => 46,
                                        ),
                                        'right' => 
                                        array (
                                          'type' => 'array-access',
                                          'left' => 
                                          array (
                                            'type' => 'variable',
                                            'value' => 'parse_url',
                                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                            'line' => 334,
                                            'char' => 57,
                                          ),
                                          'right' => 
                                          array (
                                            'type' => 'string',
                                            'value' => 'pass',
                                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                            'line' => 334,
                                            'char' => 64,
                                          ),
                                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                          'line' => 334,
                                          'char' => 66,
                                        ),
                                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                        'line' => 334,
                                        'char' => 66,
                                      ),
                                      'extra' => 
                                      array (
                                        'type' => 'string',
                                        'value' => '',
                                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                        'line' => 334,
                                        'char' => 70,
                                      ),
                                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                      'line' => 334,
                                      'char' => 70,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                    'line' => 334,
                                    'char' => 72,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 334,
                                  'char' => 72,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => '@',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 334,
                                  'char' => 78,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 334,
                                'char' => 78,
                              ),
                              'extra' => 
                              array (
                                'type' => 'string',
                                'value' => '',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 334,
                                'char' => 82,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 334,
                              'char' => 82,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 335,
                            'char' => 13,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 335,
                          'char' => 13,
                        ),
                        'right' => 
                        array (
                          'type' => 'list',
                          'left' => 
                          array (
                            'type' => 'ternary',
                            'left' => 
                            array (
                              'type' => 'isset',
                              'left' => 
                              array (
                                'type' => 'array-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'parse_url',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 335,
                                  'char' => 31,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'host',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 335,
                                  'char' => 38,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 335,
                                'char' => 40,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 335,
                              'char' => 40,
                            ),
                            'right' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'parse_url',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 335,
                                'char' => 51,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'host',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 335,
                                'char' => 58,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 335,
                              'char' => 60,
                            ),
                            'extra' => 
                            array (
                              'type' => 'string',
                              'value' => '',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 335,
                              'char' => 64,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 335,
                            'char' => 64,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 336,
                          'char' => 13,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 336,
                        'char' => 13,
                      ),
                      'right' => 
                      array (
                        'type' => 'list',
                        'left' => 
                        array (
                          'type' => 'ternary',
                          'left' => 
                          array (
                            'type' => 'isset',
                            'left' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'parse_url',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 336,
                                'char' => 31,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'port',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 336,
                                'char' => 38,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 336,
                              'char' => 40,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 336,
                            'char' => 40,
                          ),
                          'right' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'string',
                              'value' => ':',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 336,
                              'char' => 46,
                            ),
                            'right' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'parse_url',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 336,
                                'char' => 57,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'port',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 336,
                                'char' => 64,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 336,
                              'char' => 66,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 336,
                            'char' => 66,
                          ),
                          'extra' => 
                          array (
                            'type' => 'string',
                            'value' => '',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 336,
                            'char' => 70,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 336,
                          'char' => 70,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 337,
                        'char' => 13,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 337,
                      'char' => 13,
                    ),
                    'right' => 
                    array (
                      'type' => 'list',
                      'left' => 
                      array (
                        'type' => 'ternary',
                        'left' => 
                        array (
                          'type' => 'isset',
                          'left' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'parse_url',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 337,
                              'char' => 31,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'path',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 337,
                              'char' => 38,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 337,
                            'char' => 40,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 337,
                          'char' => 40,
                        ),
                        'right' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'parse_url',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 337,
                            'char' => 51,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'path',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 337,
                            'char' => 58,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 337,
                          'char' => 60,
                        ),
                        'extra' => 
                        array (
                          'type' => 'string',
                          'value' => '',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 337,
                          'char' => 64,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 337,
                        'char' => 64,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 338,
                      'char' => 13,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 338,
                    'char' => 13,
                  ),
                  'right' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'ternary',
                      'left' => 
                      array (
                        'type' => 'and',
                        'left' => 
                        array (
                          'type' => 'isset',
                          'left' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'parse_url',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 338,
                              'char' => 31,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'query',
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 338,
                              'char' => 39,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 338,
                            'char' => 42,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 338,
                          'char' => 42,
                        ),
                        'right' => 
                        array (
                          'type' => 'not',
                          'left' => 
                          array (
                            'type' => 'empty',
                            'left' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'parse_url',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 338,
                                'char' => 60,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'query',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 338,
                                'char' => 68,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 338,
                              'char' => 70,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 338,
                            'char' => 70,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 338,
                          'char' => 70,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 338,
                        'char' => 70,
                      ),
                      'right' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'string',
                          'value' => '?',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 338,
                          'char' => 76,
                        ),
                        'right' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'parse_url',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 338,
                            'char' => 87,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'query',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 338,
                            'char' => 95,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 338,
                          'char' => 97,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 338,
                        'char' => 97,
                      ),
                      'extra' => 
                      array (
                        'type' => 'string',
                        'value' => '',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 338,
                        'char' => 101,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 338,
                      'char' => 101,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 339,
                    'char' => 13,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 339,
                  'char' => 13,
                ),
                'right' => 
                array (
                  'type' => 'list',
                  'left' => 
                  array (
                    'type' => 'ternary',
                    'left' => 
                    array (
                      'type' => 'isset',
                      'left' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'parse_url',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 339,
                          'char' => 31,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'fragment',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 339,
                          'char' => 42,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 339,
                        'char' => 44,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 339,
                      'char' => 44,
                    ),
                    'right' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'string',
                        'value' => '#',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 339,
                        'char' => 50,
                      ),
                      'right' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'parse_url',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 339,
                          'char' => 61,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'fragment',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 339,
                          'char' => 72,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 339,
                        'char' => 74,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 339,
                      'char' => 74,
                    ),
                    'extra' => 
                    array (
                      'type' => 'string',
                      'value' => '',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 339,
                      'char' => 78,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 339,
                    'char' => 78,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 340,
                  'char' => 9,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 340,
                'char' => 9,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 341,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Build the absolute URI based on supplied URI and parameters.
     *
     * @param string $uri    An absolute URI.
     * @param array  $params Parameters to be append as GET.
     *
     * @return string
     * An absolute URI with supplied parameters.
     *
     * @ingroup oauth2_section_4
     *',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 316,
          'last-line' => 343,
          'char' => 20,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'getValidResponseTypes',
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
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'self',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 345,
                        'char' => 49,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'RESPONSE_TYPE_ACCESS_TOKEN',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 345,
                        'char' => 49,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 345,
                      'char' => 49,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 345,
                    'char' => 49,
                  ),
                  1 => 
                  array (
                    'value' => 
                    array (
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'self',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 345,
                        'char' => 89,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'RESPONSE_TYPE_AUTHORIZATION_CODE',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 345,
                        'char' => 89,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 345,
                      'char' => 89,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 345,
                    'char' => 89,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 345,
                'char' => 90,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 346,
              'char' => 5,
            ),
          ),
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 343,
          'last-line' => 356,
          'char' => 22,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'validateRedirectUri',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'inputUri',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 357,
              'char' => 52,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'registeredUriString',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 357,
              'char' => 73,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'or',
                'left' => 
                array (
                  'type' => 'not',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'inputUri',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 359,
                    'char' => 23,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 359,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'not',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'registeredUriString',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 359,
                    'char' => 46,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 359,
                  'char' => 46,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 359,
                'char' => 46,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 360,
                    'char' => 25,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 361,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 362,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'registered_uris',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 362,
                  'char' => 28,
                ),
                1 => 
                array (
                  'variable' => 'registered_uri',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 362,
                  'char' => 44,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 363,
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
                  'variable' => 'registered_uris',
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
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 363,
                          'char' => 42,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 363,
                        'char' => 42,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'registeredUriString',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 363,
                          'char' => 63,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 363,
                        'char' => 63,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 363,
                    'char' => 64,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 363,
                  'char' => 64,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 365,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'registered_uris',
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 365,
                'char' => 47,
              ),
              'value' => 'registered_uri',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 366,
                        'char' => 21,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'config',
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 366,
                        'char' => 28,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 366,
                      'char' => 28,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'require_exact_redirect_uri',
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 366,
                      'char' => 57,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                    'line' => 366,
                    'char' => 59,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'identical',
                        'left' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'strcmp',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'inputUri',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 368,
                                'char' => 35,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 368,
                              'char' => 35,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'registered_uri',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 368,
                                'char' => 51,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 368,
                              'char' => 51,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 368,
                          'char' => 55,
                        ),
                        'right' => 
                        array (
                          'type' => 'int',
                          'value' => '0',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 368,
                          'char' => 59,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 368,
                        'char' => 59,
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
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 369,
                            'char' => 32,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 370,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 371,
                      'char' => 13,
                    ),
                  ),
                  'else_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'declare',
                      'data-type' => 'variable',
                      'variables' => 
                      array (
                        0 => 
                        array (
                          'variable' => 'registered_uri_length',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 372,
                          'char' => 42,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 373,
                      'char' => 19,
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
                          'variable' => 'registered_uri_length',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'strlen',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'registered_uri',
                                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                  'line' => 373,
                                  'char' => 66,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 373,
                                'char' => 66,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 373,
                            'char' => 67,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 373,
                          'char' => 67,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 374,
                      'char' => 18,
                    ),
                    2 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'identical',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'registered_uri_length',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 374,
                          'char' => 44,
                        ),
                        'right' => 
                        array (
                          'type' => 'int',
                          'value' => '0',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 374,
                          'char' => 48,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 374,
                        'char' => 48,
                      ),
                      'statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'return',
                          'expr' => 
                          array (
                            'type' => 'bool',
                            'value' => 'false',
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 375,
                            'char' => 33,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 376,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 380,
                      'char' => 18,
                    ),
                    3 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'identical',
                        'left' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'strcasecmp',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'substr',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'inputUri',
                                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                      'line' => 380,
                                      'char' => 46,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                    'line' => 380,
                                    'char' => 46,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'int',
                                      'value' => '0',
                                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                      'line' => 380,
                                      'char' => 49,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                    'line' => 380,
                                    'char' => 49,
                                  ),
                                  2 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'registered_uri_length',
                                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                      'line' => 380,
                                      'char' => 72,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                    'line' => 380,
                                    'char' => 72,
                                  ),
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 380,
                                'char' => 73,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 380,
                              'char' => 73,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'registered_uri',
                                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                                'line' => 380,
                                'char' => 89,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                              'line' => 380,
                              'char' => 89,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 380,
                          'char' => 93,
                        ),
                        'right' => 
                        array (
                          'type' => 'int',
                          'value' => '0',
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 380,
                          'char' => 97,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                        'line' => 380,
                        'char' => 97,
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
                            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                            'line' => 381,
                            'char' => 32,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                          'line' => 382,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                      'line' => 383,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 384,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 386,
              'char' => 14,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 386,
                'char' => 21,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 387,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Internal method for validating redirect URI supplied
     *
     * @param string $inputUri The submitted URI to be validated
     * @param string $registeredUriString The allowed URI(s) to validate against.  Can be a space-delimited string of URIs to
     *                                    allow for multiple URIs
     * @return bool
     * @see http://tools.ietf.org/html/rfc6749#section-3.1.2
     *',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 357,
          'last-line' => 393,
          'char' => 22,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getScope',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 396,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'scope',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 396,
                  'char' => 27,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 396,
                'char' => 27,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 397,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Convenience method to access the scope
     *
     * @return string
     *',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 394,
          'last-line' => 403,
          'char' => 19,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getState',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 406,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'state',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 406,
                  'char' => 27,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 406,
                'char' => 27,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 407,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Convenience method to access the state
     *
     * @return int
     *',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 404,
          'last-line' => 413,
          'char' => 19,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getClientId',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 416,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'client_id',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 416,
                  'char' => 31,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 416,
                'char' => 31,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 417,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Convenience method to access the client id
     *
     * @return mixed
     *',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 414,
          'last-line' => 423,
          'char' => 19,
        ),
        11 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getRedirectUri',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 426,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'redirect_uri',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 426,
                  'char' => 34,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 426,
                'char' => 34,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 427,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Convenience method to access the redirect url
     *
     * @return string
     *',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 424,
          'last-line' => 433,
          'char' => 19,
        ),
        12 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getResponseType',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 436,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'response_type',
                  'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                  'line' => 436,
                  'char' => 35,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
                'line' => 436,
                'char' => 35,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
              'line' => 437,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Convenience method to access the response type
     *
     * @return string
     *',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
          'line' => 434,
          'last-line' => 438,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
      'line' => 13,
      'char' => 5,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontroller.zep',
    'line' => 13,
    'char' => 5,
  ),
);