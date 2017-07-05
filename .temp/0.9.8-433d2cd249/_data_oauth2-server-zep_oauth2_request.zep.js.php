<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2',
    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
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
        'name' => 'LogicException',
        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
        'line' => 3,
        'char' => 19,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
    'line' => 9,
    'char' => 2,
  ),
  2 => 
  array (
    'type' => 'comment',
    'value' => '**
 * OAuth2\\Request
 * This class is taken from the Symfony2 Framework and is part of the Symfony package.
 * See Symfony\\Component\\HttpFoundation\\Request (https://github.com/symfony/symfony)
 *',
    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
    'line' => 10,
    'char' => 5,
  ),
  3 => 
  array (
    'type' => 'class',
    'name' => 'Request',
    'abstract' => 0,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'RequestInterface',
        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
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
            0 => 'public',
          ),
          'type' => 'property',
          'name' => 'attributes',
          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
          'line' => 13,
          'char' => 10,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'property',
          'name' => 'request',
          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
          'line' => 14,
          'char' => 10,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'property',
          'name' => 'query',
          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
          'line' => 15,
          'char' => 10,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'property',
          'name' => 'server',
          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
          'line' => 16,
          'char' => 10,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'property',
          'name' => 'files',
          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
          'line' => 17,
          'char' => 10,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'property',
          'name' => 'cookies',
          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
          'line' => 18,
          'char' => 10,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'property',
          'name' => 'headers',
          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
          'line' => 19,
          'char' => 10,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'property',
          'name' => 'content',
          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
          'line' => 34,
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
              'name' => 'query',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 35,
                'char' => 49,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 35,
              'char' => 49,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'request',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 35,
                'char' => 69,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 35,
              'char' => 69,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'attributes',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 35,
                'char' => 92,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 35,
              'char' => 92,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'cookies',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 35,
                'char' => 112,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 35,
              'char' => 112,
            ),
            4 => 
            array (
              'type' => 'parameter',
              'name' => 'files',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 35,
                'char' => 130,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 35,
              'char' => 130,
            ),
            5 => 
            array (
              'type' => 'parameter',
              'name' => 'server',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 35,
                'char' => 149,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 35,
              'char' => 149,
            ),
            6 => 
            array (
              'type' => 'parameter',
              'name' => 'content',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 35,
                'char' => 165,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 35,
              'char' => 165,
            ),
            7 => 
            array (
              'type' => 'parameter',
              'name' => 'headers',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 35,
                'char' => 187,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 35,
              'char' => 187,
            ),
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
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 37,
                  'char' => 14,
                ),
                'name' => 'initialize',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'query',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 37,
                      'char' => 31,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 37,
                    'char' => 31,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'request',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 37,
                      'char' => 40,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 37,
                    'char' => 40,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'attributes',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 37,
                      'char' => 52,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 37,
                    'char' => 52,
                  ),
                  3 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'cookies',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 37,
                      'char' => 61,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 37,
                    'char' => 61,
                  ),
                  4 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'files',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 37,
                      'char' => 68,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 37,
                    'char' => 68,
                  ),
                  5 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'server',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 37,
                      'char' => 76,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 37,
                    'char' => 76,
                  ),
                  6 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'content',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 37,
                      'char' => 85,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 37,
                    'char' => 85,
                  ),
                  7 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'headers',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 37,
                      'char' => 94,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 37,
                    'char' => 94,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 37,
                'char' => 95,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 38,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Constructor.
     *
     * @param array  $query      - The GET parameters
     * @param array  $request    - The POST parameters
     * @param array  $attributes - The request attributes (parameters parsed from the PATH_INFO, ...)
     * @param array  $cookies    - The COOKIE parameters
     * @param array  $files      - The FILES parameters
     * @param array  $server     - The SERVER parameters
     * @param string $content    - The raw body data
     * @param array  $headers    - The headers
     *
     * @api
     *',
          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
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
          'name' => 'initialize',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'query',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 56,
                'char' => 48,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 56,
              'char' => 48,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'request',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 56,
                'char' => 68,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 56,
              'char' => 68,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'attributes',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 56,
                'char' => 91,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 56,
              'char' => 91,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'cookies',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 56,
                'char' => 111,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 56,
              'char' => 111,
            ),
            4 => 
            array (
              'type' => 'parameter',
              'name' => 'files',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 56,
                'char' => 129,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 56,
              'char' => 129,
            ),
            5 => 
            array (
              'type' => 'parameter',
              'name' => 'server',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 56,
                'char' => 148,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 56,
              'char' => 148,
            ),
            6 => 
            array (
              'type' => 'parameter',
              'name' => 'content',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 56,
                'char' => 164,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 56,
              'char' => 164,
            ),
            7 => 
            array (
              'type' => 'parameter',
              'name' => 'headers',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 56,
                'char' => 186,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 56,
              'char' => 186,
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
                  'property' => 'request',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'request',
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 58,
                    'char' => 36,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 58,
                  'char' => 36,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 59,
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
                  'property' => 'query',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'query',
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 59,
                    'char' => 32,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 59,
                  'char' => 32,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 60,
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
                  'property' => 'attributes',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'attributes',
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 60,
                    'char' => 42,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 60,
                  'char' => 42,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 61,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'cookies',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'cookies',
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 61,
                    'char' => 36,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 61,
                  'char' => 36,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 62,
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
                  'property' => 'files',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'files',
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 62,
                    'char' => 32,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 62,
                  'char' => 32,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 63,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'server',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'server',
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 63,
                    'char' => 34,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 63,
                  'char' => 34,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 64,
              'char' => 11,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'content',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'content',
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 64,
                    'char' => 36,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 64,
                  'char' => 36,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 65,
              'char' => 11,
            ),
            7 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'headers',
                  'expr' => 
                  array (
                    'type' => 'ternary',
                    'left' => 
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
                            'value' => 'headers',
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 65,
                            'char' => 44,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 65,
                          'char' => 44,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 65,
                      'char' => 46,
                    ),
                    'right' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 65,
                        'char' => 53,
                      ),
                      'name' => 'getHeadersFromServer',
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
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 65,
                              'char' => 80,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'server',
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 65,
                              'char' => 87,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 65,
                            'char' => 87,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 65,
                          'char' => 87,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 65,
                      'char' => 89,
                    ),
                    'extra' => 
                    array (
                      'type' => 'variable',
                      'value' => 'headers',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 65,
                      'char' => 98,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 65,
                    'char' => 98,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 65,
                  'char' => 98,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 66,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Sets the parameters for this request.
     *
     * This method also re-initializes all properties.
     *
     * @param array  $query      - The GET parameters
     * @param array  $request    - The POST parameters
     * @param array  $attributes - The request attributes (parameters parsed from the PATH_INFO, ...)
     * @param array  $cookies    - The COOKIE parameters
     * @param array  $files      - The FILES parameters
     * @param array  $server     - The SERVER parameters
     * @param string $content    - The raw body data
     * @param array  $headers    - The headers
     *
     * @api
     *',
          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
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
          'name' => 'query',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'name',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 73,
              'char' => 31,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => '_default',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 73,
                'char' => 48,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 73,
              'char' => 48,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
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
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 75,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'query',
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 75,
                        'char' => 33,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 75,
                      'char' => 33,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 75,
                      'char' => 38,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 75,
                    'char' => 40,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 75,
                  'char' => 40,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 75,
                      'char' => 47,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'query',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 75,
                      'char' => 53,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 75,
                    'char' => 53,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'name',
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 75,
                    'char' => 58,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 75,
                  'char' => 60,
                ),
                'extra' => 
                array (
                  'type' => 'variable',
                  'value' => '_default',
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 75,
                  'char' => 70,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 75,
                'char' => 70,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 76,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param string $name
     * @param mixed  $default
     * @return mixed
     *',
          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
          'line' => 73,
          'last-line' => 82,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'request',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'name',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 83,
              'char' => 33,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => '_default',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 83,
                'char' => 50,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 83,
              'char' => 50,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
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
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 85,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'request',
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 85,
                        'char' => 35,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 85,
                      'char' => 35,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 85,
                      'char' => 40,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 85,
                    'char' => 42,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 85,
                  'char' => 42,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 85,
                      'char' => 49,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'request',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 85,
                      'char' => 57,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 85,
                    'char' => 57,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'name',
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 85,
                    'char' => 62,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 85,
                  'char' => 64,
                ),
                'extra' => 
                array (
                  'type' => 'variable',
                  'value' => '_default',
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 85,
                  'char' => 74,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 85,
                'char' => 74,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 86,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param string $name
     * @param mixed  $default
     * @return mixed
     *',
          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
          'line' => 83,
          'last-line' => 92,
          'char' => 19,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'server',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'name',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 93,
              'char' => 32,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => '_default',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 93,
                'char' => 49,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 93,
              'char' => 49,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
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
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 95,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'server',
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 95,
                        'char' => 34,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 95,
                      'char' => 34,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 95,
                      'char' => 39,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 95,
                    'char' => 41,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 95,
                  'char' => 41,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 95,
                      'char' => 48,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'server',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 95,
                      'char' => 55,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 95,
                    'char' => 55,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'name',
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 95,
                    'char' => 60,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 95,
                  'char' => 62,
                ),
                'extra' => 
                array (
                  'type' => 'variable',
                  'value' => '_default',
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 95,
                  'char' => 72,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 95,
                'char' => 72,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 96,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param string $name
     * @param mixed  $default
     * @return mixed
     *',
          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
          'line' => 93,
          'last-line' => 102,
          'char' => 19,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'headers',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'name',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 103,
              'char' => 33,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => '_default',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 103,
                'char' => 50,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 103,
              'char' => 50,
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
                  'variable' => 'headers',
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 105,
                  'char' => 20,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 106,
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
                  'variable' => 'headers',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'array_change_key_case',
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
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 106,
                            'char' => 50,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'headers',
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 106,
                            'char' => 58,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 106,
                          'char' => 58,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 106,
                        'char' => 58,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 106,
                    'char' => 59,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 106,
                  'char' => 59,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 107,
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
                  'variable' => 'name',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'strtolower',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'name',
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 107,
                          'char' => 35,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 107,
                        'char' => 35,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 107,
                    'char' => 36,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 107,
                  'char' => 36,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 109,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
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
                      'value' => 'headers',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 109,
                      'char' => 29,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 109,
                      'char' => 34,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 109,
                    'char' => 36,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 109,
                  'char' => 36,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'headers',
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 109,
                    'char' => 45,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'name',
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 109,
                    'char' => 50,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 109,
                  'char' => 52,
                ),
                'extra' => 
                array (
                  'type' => 'variable',
                  'value' => '_default',
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 109,
                  'char' => 62,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 109,
                'char' => 62,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 110,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param string $name
     * @param mixed  $default
     * @return mixed
     *',
          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
          'line' => 103,
          'last-line' => 114,
          'char' => 19,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getAllQueryParameters',
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
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 117,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'query',
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 117,
                  'char' => 27,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 117,
                'char' => 27,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 118,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @return array
     *',
          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
          'line' => 115,
          'last-line' => 127,
          'char' => 19,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getContent',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'asResource',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 128,
                'char' => 50,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 128,
              'char' => 50,
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
                  'type' => 'identical',
                  'left' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 130,
                    'char' => 20,
                  ),
                  'right' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 130,
                      'char' => 27,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'content',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 130,
                      'char' => 37,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 130,
                    'char' => 37,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 130,
                  'char' => 37,
                ),
                'right' => 
                array (
                  'type' => 'list',
                  'left' => 
                  array (
                    'type' => 'and',
                    'left' => 
                    array (
                      'type' => 'equals',
                      'left' => 
                      array (
                        'type' => 'bool',
                        'value' => 'true',
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 130,
                        'char' => 46,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'asResource',
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 130,
                        'char' => 60,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 130,
                      'char' => 60,
                    ),
                    'right' => 
                    array (
                      'type' => 'not-identical',
                      'left' => 
                      array (
                        'type' => 'null',
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 130,
                        'char' => 69,
                      ),
                      'right' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 130,
                          'char' => 76,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'content',
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 130,
                          'char' => 84,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 130,
                        'char' => 84,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 130,
                      'char' => 84,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 130,
                    'char' => 84,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 130,
                  'char' => 86,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 130,
                'char' => 86,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'LogicException',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'getContent() can only be called once when using the resource return type.',
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 131,
                          'char' => 113,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 131,
                        'char' => 113,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 131,
                    'char' => 114,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 132,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 134,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'bool',
                  'value' => 'true',
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 134,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'asResource',
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 134,
                  'char' => 31,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 134,
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
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => 'content',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 135,
                        'char' => 38,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 135,
                      'char' => 38,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 137,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'fopen',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'php://input',
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 137,
                          'char' => 39,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 137,
                        'char' => 39,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'rb',
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 137,
                          'char' => 45,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 137,
                        'char' => 45,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 137,
                    'char' => 46,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 138,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 140,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'null',
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 140,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 140,
                    'char' => 25,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'content',
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 140,
                    'char' => 34,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 140,
                  'char' => 34,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 140,
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
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => 'content',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'file_get_contents',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'php://input',
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 141,
                              'char' => 64,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 141,
                            'char' => 64,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 141,
                        'char' => 65,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 141,
                      'char' => 65,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 142,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 144,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 144,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'content',
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 144,
                  'char' => 29,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 144,
                'char' => 29,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 145,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Returns the request body content.
     *
     * @param boolean $asResource - If true, a resource will be returned
     * @return string|resource    - The request body content or a resource to read the body stream.
     *
     * @throws LogicException
     *',
          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
          'line' => 128,
          'last-line' => 150,
          'char' => 19,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => 'getHeadersFromServer',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'server',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 151,
              'char' => 49,
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
                  'variable' => 'headers',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 153,
                    'char' => 25,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 153,
                  'char' => 25,
                ),
                1 => 
                array (
                  'variable' => 'key',
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 153,
                  'char' => 30,
                ),
                2 => 
                array (
                  'variable' => 'value',
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 153,
                  'char' => 37,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 154,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'server',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 154,
                'char' => 34,
              ),
              'key' => 'key',
              'value' => 'value',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'equals',
                    'left' => 
                    array (
                      'type' => 'int',
                      'value' => '0',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 155,
                      'char' => 19,
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
                            'value' => 'key',
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 155,
                            'char' => 31,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 155,
                          'char' => 31,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'string',
                            'value' => 'HTTP_',
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 155,
                            'char' => 40,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 155,
                          'char' => 40,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 155,
                      'char' => 42,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 155,
                    'char' => 42,
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
                          'operator' => 'assign',
                          'variable' => 'headers',
                          'index-expr' => 
                          array (
                            0 => 
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
                                    'value' => 'key',
                                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                    'line' => 156,
                                    'char' => 39,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                  'line' => 156,
                                  'char' => 39,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'int',
                                    'value' => '5',
                                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                    'line' => 156,
                                    'char' => 42,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                  'line' => 156,
                                  'char' => 42,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 156,
                              'char' => 43,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'value',
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 156,
                            'char' => 52,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 156,
                          'char' => 52,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 157,
                      'char' => 13,
                    ),
                  ),
                  'elseif_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'if',
                      'expr' => 
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
                              'value' => 'key',
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 159,
                              'char' => 32,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 159,
                            'char' => 32,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'array',
                              'left' => 
                              array (
                                0 => 
                                array (
                                  'value' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'CONTENT_LENGTH',
                                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                    'line' => 159,
                                    'char' => 51,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                  'line' => 159,
                                  'char' => 51,
                                ),
                                1 => 
                                array (
                                  'value' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'CONTENT_MD5',
                                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                    'line' => 159,
                                    'char' => 66,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                  'line' => 159,
                                  'char' => 66,
                                ),
                                2 => 
                                array (
                                  'value' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'CONTENT_TYPE',
                                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                    'line' => 159,
                                    'char' => 82,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                  'line' => 159,
                                  'char' => 82,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 159,
                              'char' => 83,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 159,
                            'char' => 83,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 159,
                        'char' => 85,
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
                              'operator' => 'assign',
                              'variable' => 'headers',
                              'index-expr' => 
                              array (
                                0 => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'key',
                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                  'line' => 160,
                                  'char' => 32,
                                ),
                              ),
                              'expr' => 
                              array (
                                'type' => 'variable',
                                'value' => 'value',
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 160,
                                'char' => 41,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 160,
                              'char' => 41,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 161,
                          'char' => 13,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 162,
                      'char' => 9,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 162,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 164,
              'char' => 10,
            ),
            2 => 
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
                    'value' => 'server',
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 164,
                    'char' => 24,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'PHP_AUTH_USER',
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 164,
                    'char' => 40,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 164,
                  'char' => 42,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 164,
                'char' => 42,
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
                      'operator' => 'assign',
                      'variable' => 'headers',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'PHP_AUTH_USER',
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 165,
                          'char' => 40,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'server',
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 165,
                          'char' => 50,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'PHP_AUTH_USER',
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 165,
                          'char' => 66,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 165,
                        'char' => 67,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 165,
                      'char' => 67,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 166,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'headers',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'PHP_AUTH_PW',
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 166,
                          'char' => 38,
                        ),
                      ),
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
                              'value' => 'server',
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 166,
                              'char' => 54,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'PHP_AUTH_PW',
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 166,
                              'char' => 68,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 166,
                            'char' => 70,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 166,
                          'char' => 70,
                        ),
                        'right' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'server',
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 166,
                            'char' => 78,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'PHP_AUTH_PW',
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 166,
                            'char' => 92,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 166,
                          'char' => 94,
                        ),
                        'extra' => 
                        array (
                          'type' => 'string',
                          'value' => '',
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 166,
                          'char' => 98,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 166,
                        'char' => 98,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 166,
                      'char' => 98,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 167,
                  'char' => 9,
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
                      'variable' => 'authorizationHeader',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 180,
                      'char' => 36,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 181,
                  'char' => 14,
                ),
                1 => 
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
                        'value' => 'server',
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 181,
                        'char' => 28,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'HTTP_AUTHORIZATION',
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 181,
                        'char' => 49,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 181,
                      'char' => 51,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 181,
                    'char' => 51,
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
                          'variable' => 'authorizationHeader',
                          'expr' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'server',
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 182,
                              'char' => 49,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'HTTP_AUTHORIZATION',
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 182,
                              'char' => 70,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 182,
                            'char' => 71,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 182,
                          'char' => 71,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 183,
                      'char' => 13,
                    ),
                  ),
                  'elseif_statements' => 
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
                            'value' => 'server',
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 183,
                            'char' => 34,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'REDIRECT_HTTP_AUTHORIZATION',
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 183,
                            'char' => 64,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 183,
                          'char' => 66,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 183,
                        'char' => 66,
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
                              'variable' => 'authorizationHeader',
                              'expr' => 
                              array (
                                'type' => 'array-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'server',
                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                  'line' => 184,
                                  'char' => 49,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'REDIRECT_HTTP_AUTHORIZATION',
                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                  'line' => 184,
                                  'char' => 79,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 184,
                                'char' => 80,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 184,
                              'char' => 80,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 185,
                          'char' => 13,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 185,
                      'char' => 20,
                    ),
                    1 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'function_exists',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'apache_request_headers',
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 185,
                              'char' => 62,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 185,
                            'char' => 62,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 185,
                        'char' => 64,
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
                              'variable' => 'requestHeaders',
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 186,
                              'char' => 35,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 187,
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
                              'variable' => 'requestHeaders',
                              'expr' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'call_user_func',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'apache_request_headers',
                                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                      'line' => 187,
                                      'char' => 77,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                    'line' => 187,
                                    'char' => 77,
                                  ),
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 187,
                                'char' => 78,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 187,
                              'char' => 78,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 190,
                          'char' => 19,
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
                              'variable' => 'requestHeaders',
                              'expr' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'array_combine',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'fcall',
                                      'name' => 'array_map',
                                      'call-type' => 1,
                                      'parameters' => 
                                      array (
                                        0 => 
                                        array (
                                          'parameter' => 
                                          array (
                                            'type' => 'string',
                                            'value' => 'ucwords',
                                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                            'line' => 190,
                                            'char' => 71,
                                          ),
                                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                          'line' => 190,
                                          'char' => 71,
                                        ),
                                        1 => 
                                        array (
                                          'parameter' => 
                                          array (
                                            'type' => 'fcall',
                                            'name' => 'array_keys',
                                            'call-type' => 1,
                                            'parameters' => 
                                            array (
                                              0 => 
                                              array (
                                                'parameter' => 
                                                array (
                                                  'type' => 'variable',
                                                  'value' => 'requestHeaders',
                                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                                  'line' => 190,
                                                  'char' => 98,
                                                ),
                                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                                'line' => 190,
                                                'char' => 98,
                                              ),
                                            ),
                                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                            'line' => 190,
                                            'char' => 99,
                                          ),
                                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                          'line' => 190,
                                          'char' => 99,
                                        ),
                                      ),
                                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                      'line' => 190,
                                      'char' => 100,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                    'line' => 190,
                                    'char' => 100,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'fcall',
                                      'name' => 'array_values',
                                      'call-type' => 1,
                                      'parameters' => 
                                      array (
                                        0 => 
                                        array (
                                          'parameter' => 
                                          array (
                                            'type' => 'variable',
                                            'value' => 'requestHeaders',
                                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                            'line' => 190,
                                            'char' => 129,
                                          ),
                                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                          'line' => 190,
                                          'char' => 129,
                                        ),
                                      ),
                                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                      'line' => 190,
                                      'char' => 130,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                    'line' => 190,
                                    'char' => 130,
                                  ),
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 190,
                                'char' => 131,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 190,
                              'char' => 131,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 192,
                          'char' => 18,
                        ),
                        3 => 
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
                                'value' => 'requestHeaders',
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 192,
                                'char' => 40,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'Authorization',
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 192,
                                'char' => 56,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 192,
                              'char' => 58,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 192,
                            'char' => 58,
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
                                  'variable' => 'authorizationHeader',
                                  'expr' => 
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
                                          'type' => 'array-access',
                                          'left' => 
                                          array (
                                            'type' => 'variable',
                                            'value' => 'requestHeaders',
                                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                            'line' => 193,
                                            'char' => 66,
                                          ),
                                          'right' => 
                                          array (
                                            'type' => 'string',
                                            'value' => 'Authorization',
                                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                            'line' => 193,
                                            'char' => 82,
                                          ),
                                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                          'line' => 193,
                                          'char' => 83,
                                        ),
                                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                        'line' => 193,
                                        'char' => 83,
                                      ),
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                    'line' => 193,
                                    'char' => 84,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                  'line' => 193,
                                  'char' => 84,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 194,
                              'char' => 17,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 195,
                          'char' => 13,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 197,
                      'char' => 14,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 197,
                  'char' => 14,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'not-equals',
                    'left' => 
                    array (
                      'type' => 'null',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 197,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'authorizationHeader',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 197,
                      'char' => 44,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 197,
                    'char' => 44,
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
                          'operator' => 'assign',
                          'variable' => 'headers',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'string',
                              'value' => 'AUTHORIZATION',
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 198,
                              'char' => 44,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'authorizationHeader',
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 198,
                            'char' => 67,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 198,
                          'char' => 67,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 200,
                      'char' => 18,
                    ),
                    1 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'equals',
                        'left' => 
                        array (
                          'type' => 'int',
                          'value' => '0',
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 200,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'stripos',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'authorizationHeader',
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 200,
                                'char' => 52,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 200,
                              'char' => 52,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'string',
                                'value' => 'basic',
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 200,
                                'char' => 61,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 200,
                              'char' => 61,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 200,
                          'char' => 63,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 200,
                        'char' => 63,
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
                              'variable' => 'exploded',
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 201,
                              'char' => 33,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 202,
                          'char' => 23,
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
                              'variable' => 'exploded',
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
                                      'value' => ':',
                                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                      'line' => 202,
                                      'char' => 47,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                    'line' => 202,
                                    'char' => 47,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'fcall',
                                      'name' => 'base64_decode',
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
                                                  'value' => 'authorizationHeader',
                                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                                  'line' => 202,
                                                  'char' => 89,
                                                ),
                                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                                'line' => 202,
                                                'char' => 89,
                                              ),
                                              1 => 
                                              array (
                                                'parameter' => 
                                                array (
                                                  'type' => 'int',
                                                  'value' => '6',
                                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                                  'line' => 202,
                                                  'char' => 92,
                                                ),
                                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                                'line' => 202,
                                                'char' => 92,
                                              ),
                                            ),
                                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                            'line' => 202,
                                            'char' => 93,
                                          ),
                                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                          'line' => 202,
                                          'char' => 93,
                                        ),
                                      ),
                                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                      'line' => 202,
                                      'char' => 94,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                    'line' => 202,
                                    'char' => 94,
                                  ),
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 202,
                                'char' => 95,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 202,
                              'char' => 95,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 203,
                          'char' => 22,
                        ),
                        2 => 
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
                                    'value' => 'exploded',
                                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                    'line' => 203,
                                    'char' => 38,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                  'line' => 203,
                                  'char' => 38,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 203,
                              'char' => 41,
                            ),
                            'right' => 
                            array (
                              'type' => 'int',
                              'value' => '2',
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 203,
                              'char' => 45,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 203,
                            'char' => 45,
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
                                  'operator' => 'assign',
                                  'variable' => 'headers',
                                  'index-expr' => 
                                  array (
                                    0 => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'PHP_AUTH_USER',
                                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                      'line' => 205,
                                      'char' => 52,
                                    ),
                                  ),
                                  'expr' => 
                                  array (
                                    'type' => 'array-access',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'exploded',
                                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                      'line' => 205,
                                      'char' => 64,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'int',
                                      'value' => '0',
                                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                      'line' => 205,
                                      'char' => 66,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                    'line' => 205,
                                    'char' => 67,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                  'line' => 205,
                                  'char' => 67,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 206,
                              'char' => 27,
                            ),
                            1 => 
                            array (
                              'type' => 'let',
                              'assignments' => 
                              array (
                                0 => 
                                array (
                                  'assign-type' => 'array-index',
                                  'operator' => 'assign',
                                  'variable' => 'headers',
                                  'index-expr' => 
                                  array (
                                    0 => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'PHP_AUTH_PW',
                                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                      'line' => 206,
                                      'char' => 50,
                                    ),
                                  ),
                                  'expr' => 
                                  array (
                                    'type' => 'array-access',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'exploded',
                                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                      'line' => 206,
                                      'char' => 62,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'int',
                                      'value' => '1',
                                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                      'line' => 206,
                                      'char' => 64,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                    'line' => 206,
                                    'char' => 65,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                  'line' => 206,
                                  'char' => 65,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 207,
                              'char' => 21,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 208,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 209,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 210,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 213,
              'char' => 10,
            ),
            3 => 
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
                    'value' => 'headers',
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 213,
                    'char' => 25,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'PHP_AUTH_USER',
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 213,
                    'char' => 41,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 213,
                  'char' => 43,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 213,
                'char' => 43,
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
                      'operator' => 'assign',
                      'variable' => 'headers',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'AUTHORIZATION',
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 214,
                          'char' => 40,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'string',
                          'value' => 'Basic ',
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 214,
                          'char' => 52,
                        ),
                        'right' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'base64_encode',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
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
                                      'value' => 'headers',
                                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                      'line' => 214,
                                      'char' => 74,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'PHP_AUTH_USER',
                                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                      'line' => 214,
                                      'char' => 90,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                    'line' => 214,
                                    'char' => 91,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => ':',
                                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                    'line' => 214,
                                    'char' => 95,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                  'line' => 214,
                                  'char' => 95,
                                ),
                                'right' => 
                                array (
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'headers',
                                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                    'line' => 214,
                                    'char' => 103,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'PHP_AUTH_PW',
                                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                    'line' => 214,
                                    'char' => 117,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                  'line' => 214,
                                  'char' => 118,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 214,
                                'char' => 118,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 214,
                              'char' => 118,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 214,
                          'char' => 119,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 214,
                        'char' => 119,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 214,
                      'char' => 119,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 215,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 217,
              'char' => 14,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'headers',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 217,
                'char' => 23,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 218,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param array $server
     * @return array
     *',
          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
          'line' => 151,
          'last-line' => 226,
          'char' => 20,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'createFromGlobals',
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
                  'variable' => 'request',
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 229,
                  'char' => 20,
                ),
                1 => 
                array (
                  'variable' => 'contentType',
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 229,
                  'char' => 33,
                ),
                2 => 
                array (
                  'variable' => 'requestMethod',
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 229,
                  'char' => 48,
                ),
                3 => 
                array (
                  'variable' => 'data',
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 229,
                  'char' => 54,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 232,
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
                  'variable' => 'request',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'create_instance_params',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'get_called_class',
                          'call-type' => 1,
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 232,
                          'char' => 64,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 232,
                        'char' => 64,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => '_GET',
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 232,
                                'char' => 71,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 232,
                              'char' => 71,
                            ),
                            1 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => '_POST',
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 232,
                                'char' => 78,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 232,
                              'char' => 78,
                            ),
                            2 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'empty-array',
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 232,
                                'char' => 82,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 232,
                              'char' => 82,
                            ),
                            3 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => '_COOKIE',
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 232,
                                'char' => 91,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 232,
                              'char' => 91,
                            ),
                            4 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => '_FILES',
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 232,
                                'char' => 99,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 232,
                              'char' => 99,
                            ),
                            5 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => '_SERVER',
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 232,
                                'char' => 108,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 232,
                              'char' => 108,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 232,
                          'char' => 109,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 232,
                        'char' => 109,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 232,
                    'char' => 110,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 232,
                  'char' => 110,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 234,
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
                  'variable' => 'contentType',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'request',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 234,
                      'char' => 35,
                    ),
                    'name' => 'server',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'CONTENT_TYPE',
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 234,
                          'char' => 57,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 234,
                        'char' => 57,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => '',
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 234,
                          'char' => 61,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 234,
                        'char' => 61,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 234,
                    'char' => 62,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 234,
                  'char' => 62,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 235,
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
                  'variable' => 'requestMethod',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'request',
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 235,
                      'char' => 37,
                    ),
                    'name' => 'server',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'REQUEST_METHOD',
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 235,
                          'char' => 61,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 235,
                        'char' => 61,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'GET',
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 235,
                          'char' => 68,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 235,
                        'char' => 68,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 235,
                    'char' => 69,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 235,
                  'char' => 69,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 236,
              'char' => 10,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'identical',
                  'left' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 236,
                    'char' => 16,
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
                          'value' => 'contentType',
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 236,
                          'char' => 36,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 236,
                        'char' => 36,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'application/x-www-form-urlencoded',
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 236,
                          'char' => 73,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 236,
                        'char' => 73,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 236,
                    'char' => 76,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 236,
                  'char' => 76,
                ),
                'right' => 
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
                        'type' => 'fcall',
                        'name' => 'strtoupper',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'requestMethod',
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 236,
                              'char' => 111,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 236,
                            'char' => 111,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 236,
                        'char' => 112,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 236,
                      'char' => 112,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'array',
                        'left' => 
                        array (
                          0 => 
                          array (
                            'value' => 
                            array (
                              'type' => 'string',
                              'value' => 'PUT',
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 236,
                              'char' => 120,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 236,
                            'char' => 120,
                          ),
                          1 => 
                          array (
                            'value' => 
                            array (
                              'type' => 'string',
                              'value' => 'DELETE',
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 236,
                              'char' => 130,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 236,
                            'char' => 130,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 236,
                        'char' => 131,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 236,
                      'char' => 131,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 236,
                  'char' => 133,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 236,
                'char' => 133,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'parse_str',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'request',
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 237,
                            'char' => 31,
                          ),
                          'name' => 'getContent',
                          'call-type' => 1,
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 237,
                          'char' => 44,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 237,
                        'char' => 44,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'data',
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 237,
                          'char' => 50,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 237,
                        'char' => 50,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 237,
                    'char' => 51,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 238,
                  'char' => 15,
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
                      'variable' => 'request',
                      'property' => 'request',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'data',
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 238,
                        'char' => 40,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 238,
                      'char' => 40,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 239,
                  'char' => 9,
                ),
              ),
              'elseif_statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'and',
                    'left' => 
                    array (
                      'type' => 'identical',
                      'left' => 
                      array (
                        'type' => 'int',
                        'value' => '0',
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 239,
                        'char' => 22,
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
                              'value' => 'contentType',
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 239,
                              'char' => 42,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 239,
                            'char' => 42,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'application/json',
                              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                              'line' => 239,
                              'char' => 62,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 239,
                            'char' => 62,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                        'line' => 239,
                        'char' => 65,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 239,
                      'char' => 65,
                    ),
                    'right' => 
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
                            'type' => 'fcall',
                            'name' => 'strtoupper',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'requestMethod',
                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                  'line' => 239,
                                  'char' => 100,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 239,
                                'char' => 100,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 239,
                            'char' => 101,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 239,
                          'char' => 101,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'array',
                            'left' => 
                            array (
                              0 => 
                              array (
                                'value' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'POST',
                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                  'line' => 239,
                                  'char' => 110,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 239,
                                'char' => 110,
                              ),
                              1 => 
                              array (
                                'value' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'PUT',
                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                  'line' => 239,
                                  'char' => 117,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 239,
                                'char' => 117,
                              ),
                              2 => 
                              array (
                                'value' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'DELETE',
                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                  'line' => 239,
                                  'char' => 127,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 239,
                                'char' => 127,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 239,
                            'char' => 128,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 239,
                          'char' => 128,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 239,
                      'char' => 130,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                    'line' => 239,
                    'char' => 130,
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
                          'variable' => 'data',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'json_decode',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'mcall',
                                  'variable' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'request',
                                    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                    'line' => 240,
                                    'char' => 44,
                                  ),
                                  'name' => 'getContent',
                                  'call-type' => 1,
                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                  'line' => 240,
                                  'char' => 57,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 240,
                                'char' => 57,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'bool',
                                  'value' => 'true',
                                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                  'line' => 240,
                                  'char' => 63,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                                'line' => 240,
                                'char' => 63,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 240,
                            'char' => 64,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 240,
                          'char' => 64,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 241,
                      'char' => 15,
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
                          'variable' => 'request',
                          'property' => 'request',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'data',
                            'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                            'line' => 241,
                            'char' => 40,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                          'line' => 241,
                          'char' => 40,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                      'line' => 242,
                      'char' => 9,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                  'line' => 244,
                  'char' => 14,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 244,
              'char' => 14,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'request',
                'file' => '/data/oauth2-server-zep/oauth2/request.zep',
                'line' => 244,
                'char' => 23,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/request.zep',
              'line' => 245,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Creates a new request with values from PHP\'s super globals.
     *
     * @return Request - A new request
     *
     * @api
     *',
          'file' => '/data/oauth2-server-zep/oauth2/request.zep',
          'line' => 227,
          'last-line' => 246,
          'char' => 26,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/request.zep',
      'line' => 10,
      'char' => 5,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/request.zep',
    'line' => 10,
    'char' => 5,
  ),
);