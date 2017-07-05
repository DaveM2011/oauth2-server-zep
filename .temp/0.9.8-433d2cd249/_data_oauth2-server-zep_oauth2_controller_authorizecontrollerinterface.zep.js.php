<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 *  This controller is called when a user should be authorized
 *  by an authorization server.  As OAuth2 does not handle
 *  authorization directly, this controller ensures the request is valid, but
 *  requires the application to determine the value of $is_authorized
 *
 *  ex:
 *  > $user_id = $this->somehowDetermineUserId();
 *  > $is_authorized = $this->somehowDetermineUserAuthorization();
 *  > $response = new OAuth2\\Response();
 *  > $authorizeController->handleAuthorizeRequest(
 *  >     OAuth2\\Request::createFromGlobals(),
 *  >     $response,
 *  >     $is_authorized,
 *  >     $user_id);
 *  > $response->send();
 *
 *',
    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
    'line' => 21,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2\\Controller',
    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
    'line' => 23,
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
        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
        'line' => 23,
        'char' => 28,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
    'line' => 24,
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
        'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
        'line' => 24,
        'char' => 29,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
    'line' => 26,
    'char' => 9,
  ),
  4 => 
  array (
    'type' => 'interface',
    'name' => 'AuthorizeControllerInterface',
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
                'line' => 46,
                'char' => 69,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
              'line' => 46,
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
                'line' => 46,
                'char' => 99,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
              'line' => 46,
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
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
              'line' => 46,
              'char' => 123,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'user_id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
                'line' => 46,
                'char' => 147,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
              'line' => 46,
              'char' => 147,
            ),
          ),
          'docblock' => '**
     * @param OAuth2\\RequestInterface request - The current http request
     * @param OAuth2\\ResponseInterface response- An instance of OAuth2\\ResponseInterface to contain the response data
     * @param boolean is_authorized
     * @param string user_id
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
            'line' => 46,
            'char' => 156,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
          'line' => 46,
          'last-line' => 52,
          'char' => 19,
        ),
        1 => 
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
                'line' => 53,
                'char' => 71,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
              'line' => 53,
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
                'line' => 53,
                'char' => 101,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
              'line' => 53,
              'char' => 102,
            ),
          ),
          'docblock' => '**
     * @param OAuth2\\RequestInterface request - The current http request
     * @param OAuth2\\ResponseInterface response- An instance of OAuth2\\ResponseInterface to contain the response data
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
                'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
                'line' => 53,
                'char' => 114,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
            'line' => 53,
            'char' => 114,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
          'line' => 53,
          'last-line' => 54,
          'char' => 19,
        ),
      ),
      'constants' => 
      array (
        0 => 
        array (
          'type' => 'const',
          'name' => 'RESPONSE_TYPE_AUTHORIZATION_CODE',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'code',
            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
            'line' => 37,
            'char' => 52,
          ),
          'docblock' => '**
     * List of possible authentication response types.
     * The "authorization_code" mechanism exclusively supports "code"
     * and the "implicit" mechanism exclusively supports "token".
     *
     * @var string
     * @see http://tools.ietf.org/html/rfc6749#section-4.1.1
     * @see http://tools.ietf.org/html/rfc6749#section-4.2.1
     *',
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
          'line' => 38,
          'char' => 9,
        ),
        1 => 
        array (
          'type' => 'const',
          'name' => 'RESPONSE_TYPE_ACCESS_TOKEN',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'token',
            'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
            'line' => 38,
            'char' => 47,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
          'line' => 45,
          'char' => 6,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
      'line' => 54,
      'char' => 1,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/controller/authorizecontrollerinterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);