<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 *  This controller is called when a "resource" is requested.
 *  call verifyResourceRequest in order to determine if the request
 *  contains a valid token.
 *
 *  ex:
 *  > if (!$resourceController->verifyResourceRequest(OAuth2\\Request::createFromGlobals(), $response = new OAuth2\\Response())) {
 *  >     $response->send(); // authorization failed
 *  >     die();
 *  > }
 *  > return json_encode($resource); // valid token!  Send the stuff!
 *
 *',
    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
    'line' => 16,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\Controller',
    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
    'line' => 18,
    'char' => 3,
  ),
  2 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\RequestInterface',
        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
        'line' => 18,
        'char' => 28,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
    'line' => 19,
    'char' => 3,
  ),
  3 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'OAuth2\\ResponseInterface',
        'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
        'line' => 19,
        'char' => 29,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
    'line' => 21,
    'char' => 9,
  ),
  4 => 
  array (
    'type' => 'interface',
    'name' => 'ResourceControllerInterface',
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
          'name' => 'verifyResourceRequest',
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
                'line' => 29,
                'char' => 68,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
              'line' => 29,
              'char' => 69,
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
                'line' => 29,
                'char' => 98,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
              'line' => 29,
              'char' => 99,
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
                'line' => 29,
                'char' => 121,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
              'line' => 29,
              'char' => 121,
            ),
          ),
          'docblock' => '**
     * @param OAuth2\\RequestInterface request - The current http request
     * @param OAuth2\\ResponseInterface response- An instance of OAuth2\\ResponseInterface to contain the response data
     * @param string scope
     * @return boolean
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
                'line' => 29,
                'char' => 130,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
            'line' => 29,
            'char' => 130,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
          'line' => 29,
          'last-line' => 35,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getAccessTokenData',
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
                'line' => 36,
                'char' => 65,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
              'line' => 36,
              'char' => 66,
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
                'line' => 36,
                'char' => 95,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
              'line' => 36,
              'char' => 96,
            ),
          ),
          'docblock' => '**
     * @param OAuth2\\RequestInterface request - The current http request
     * @param OAuth2\\ResponseInterface response- An instance of OAuth2\\ResponseInterface to contain the response data
     * @return string | null
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
                'line' => 36,
                'char' => 108,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
                'line' => 36,
                'char' => 114,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
            'line' => 36,
            'char' => 114,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
          'line' => 36,
          'last-line' => 37,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
      'line' => 37,
      'char' => 1,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/resourcecontrollerinterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);