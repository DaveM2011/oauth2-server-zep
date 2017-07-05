<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Interface which represents an object response.  Meant to handle and display the proper OAuth2 Responses
 * for errors and successes
 *
 * @see OAuth2\\Response
 *',
    'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
    'line' => 8,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2',
    'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
    'line' => 10,
    'char' => 9,
  ),
  2 => 
  array (
    'type' => 'interface',
    'name' => 'ResponseInterface',
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
          'name' => 'addParameters',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'parameters',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
              'line' => 12,
              'char' => 51,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
            'line' => 12,
            'char' => 60,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
          'line' => 12,
          'last-line' => 13,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'addHttpHeaders',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'httpHeaders',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
              'line' => 13,
              'char' => 53,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
            'line' => 13,
            'char' => 62,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
          'line' => 13,
          'last-line' => 14,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setStatusCode',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'statusCode',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
              'line' => 14,
              'char' => 49,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
            'line' => 14,
            'char' => 58,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
          'line' => 14,
          'last-line' => 15,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setError',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'statusCode',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
              'line' => 15,
              'char' => 44,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'name',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
              'line' => 15,
              'char' => 58,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'description',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
                'line' => 15,
                'char' => 86,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
              'line' => 15,
              'char' => 86,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'uri',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
                'line' => 15,
                'char' => 106,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
              'line' => 15,
              'char' => 106,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
            'line' => 15,
            'char' => 115,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
          'line' => 15,
          'last-line' => 16,
          'char' => 19,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setRedirect',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'statusCode',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
              'line' => 16,
              'char' => 47,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'url',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
              'line' => 16,
              'char' => 60,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'state',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
                'line' => 16,
                'char' => 82,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
              'line' => 16,
              'char' => 82,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'error',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
                'line' => 16,
                'char' => 104,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
              'line' => 16,
              'char' => 104,
            ),
            4 => 
            array (
              'type' => 'parameter',
              'name' => 'errorDescription',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
                'line' => 16,
                'char' => 137,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
              'line' => 16,
              'char' => 137,
            ),
            5 => 
            array (
              'type' => 'parameter',
              'name' => 'errorUri',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
                'line' => 16,
                'char' => 162,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
              'line' => 16,
              'char' => 162,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
            'line' => 16,
            'char' => 171,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
          'line' => 16,
          'last-line' => 17,
          'char' => 19,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getParameter',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'name',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
              'line' => 17,
              'char' => 46,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'default',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
                'line' => 17,
                'char' => 70,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
              'line' => 17,
              'char' => 70,
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
                'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
                'line' => 17,
                'char' => 81,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
            'line' => 17,
            'char' => 81,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
          'line' => 17,
          'last-line' => 18,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
      'line' => 18,
      'char' => 1,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/responseinterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);