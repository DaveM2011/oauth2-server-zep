<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 *  This controller is called when a token is being requested.
 *  it is called to handle all grant types the application supports.
 *  It also validates the client\'s credentials
 *
 *  ex:
 *  > $tokenController->handleTokenRequest(OAuth2\\Request::createFromGlobals(), $response = new OAuth2\\Response());
 *  > $response->send();
 *
 *',
    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontrollerinterface.zep',
    'line' => 12,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\Controller',
    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontrollerinterface.zep',
    'line' => 14,
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
        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontrollerinterface.zep',
        'line' => 14,
        'char' => 28,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontrollerinterface.zep',
    'line' => 15,
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
        'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontrollerinterface.zep',
        'line' => 15,
        'char' => 29,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontrollerinterface.zep',
    'line' => 17,
    'char' => 9,
  ),
  4 => 
  array (
    'type' => 'interface',
    'name' => 'TokenControllerInterface',
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
          'name' => 'handleTokenRequest',
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontrollerinterface.zep',
                'line' => 25,
                'char' => 65,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontrollerinterface.zep',
              'line' => 25,
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontrollerinterface.zep',
                'line' => 25,
                'char' => 95,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontrollerinterface.zep',
              'line' => 25,
              'char' => 96,
            ),
          ),
          'docblock' => '**
     * handleTokenRequest
     *
     * @param OAuth2\\RequestInterface request - The current http request
     * @param OAuth2\\ResponseInterface response- An instance of OAuth2\\ResponseInterface to contain the response data
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontrollerinterface.zep',
            'line' => 25,
            'char' => 105,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontrollerinterface.zep',
          'line' => 25,
          'last-line' => 32,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'grantAccessToken',
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontrollerinterface.zep',
                'line' => 33,
                'char' => 63,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontrollerinterface.zep',
              'line' => 33,
              'char' => 64,
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontrollerinterface.zep',
                'line' => 33,
                'char' => 93,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontrollerinterface.zep',
              'line' => 33,
              'char' => 94,
            ),
          ),
          'docblock' => '**
     * grantAccessToken
     *
     * @param OAuth2\\RequestInterface request - The current http request
     * @param OAuth2\\ResponseInterface response- An instance of OAuth2\\ResponseInterface to contain the response data
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontrollerinterface.zep',
            'line' => 33,
            'char' => 103,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontrollerinterface.zep',
          'line' => 33,
          'last-line' => 34,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontrollerinterface.zep',
      'line' => 34,
      'char' => 1,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/tokencontrollerinterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);