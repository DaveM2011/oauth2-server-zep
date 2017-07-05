<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2',
    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
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
        'name' => 'InvalidArgumentException',
        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
        'line' => 3,
        'char' => 29,
      ),
    ),
    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
    'line' => 13,
    'char' => 2,
  ),
  2 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Class to handle OAuth2 Responses in a graceful way.  Use this interface
 * to output the proper OAuth2 responses.
 *
 * @see OAuth2\\ResponseInterface
 *
 * This class borrows heavily from the Symfony2 Framework and is part of the symfony package
 * @see Symfony\\Component\\HttpFoundation\\Request (https://github.com/symfony/symfony)
 *',
    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
    'line' => 14,
    'char' => 5,
  ),
  3 => 
  array (
    'type' => 'class',
    'name' => 'Response',
    'abstract' => 0,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'ResponseInterface',
        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
        'line' => 15,
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
          'name' => 'version',
          'docblock' => '**
     * @var string
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 23,
          'char' => 6,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'statusCode',
          'default' => 
          array (
            'type' => 'int',
            'value' => '200',
            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
            'line' => 24,
            'char' => 31,
          ),
          'docblock' => '**
     * @var int
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 28,
          'char' => 6,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'statusText',
          'docblock' => '**
     * @var string
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 33,
          'char' => 6,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'parameters',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
            'line' => 34,
            'char' => 30,
          ),
          'docblock' => '**
     * @var array
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 38,
          'char' => 6,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'httpHeaders',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
            'line' => 39,
            'char' => 31,
          ),
          'docblock' => '**
     * @var array
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 43,
          'char' => 6,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'property',
          'name' => 'statusTexts',
          'default' => 
          array (
            'type' => 'array',
            'left' => 
            array (
              0 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '100',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 45,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Continue',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 45,
                  'char' => 24,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 45,
                'char' => 24,
              ),
              1 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '101',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 46,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Switching Protocols',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 46,
                  'char' => 35,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 46,
                'char' => 35,
              ),
              2 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '200',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 47,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'OK',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 47,
                  'char' => 18,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 47,
                'char' => 18,
              ),
              3 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '201',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 48,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Created',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 48,
                  'char' => 23,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 48,
                'char' => 23,
              ),
              4 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '202',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 49,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Accepted',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 49,
                  'char' => 24,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 49,
                'char' => 24,
              ),
              5 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '203',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 50,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Non-Authoritative Information',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 50,
                  'char' => 45,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 50,
                'char' => 45,
              ),
              6 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '204',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 51,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'No Content',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 51,
                  'char' => 26,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 51,
                'char' => 26,
              ),
              7 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '205',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 52,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Reset Content',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 52,
                  'char' => 29,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 52,
                'char' => 29,
              ),
              8 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '206',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 53,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Partial Content',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 53,
                  'char' => 31,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 53,
                'char' => 31,
              ),
              9 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '300',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 54,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Multiple Choices',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 54,
                  'char' => 32,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 54,
                'char' => 32,
              ),
              10 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '301',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 55,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Moved Permanently',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 55,
                  'char' => 33,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 55,
                'char' => 33,
              ),
              11 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '302',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 56,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Found',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 56,
                  'char' => 21,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 56,
                'char' => 21,
              ),
              12 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '303',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 57,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'See Other',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 57,
                  'char' => 25,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 57,
                'char' => 25,
              ),
              13 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '304',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 58,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Not Modified',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 58,
                  'char' => 28,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 58,
                'char' => 28,
              ),
              14 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '305',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 59,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Use Proxy',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 59,
                  'char' => 25,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 59,
                'char' => 25,
              ),
              15 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '307',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 60,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Temporary Redirect',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 60,
                  'char' => 34,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 60,
                'char' => 34,
              ),
              16 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '400',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 61,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Bad Request',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 61,
                  'char' => 27,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 61,
                'char' => 27,
              ),
              17 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '401',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 62,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Unauthorized',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 62,
                  'char' => 28,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 62,
                'char' => 28,
              ),
              18 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '402',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 63,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Payment Required',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 63,
                  'char' => 32,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 63,
                'char' => 32,
              ),
              19 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '403',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 64,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Forbidden',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 64,
                  'char' => 25,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 64,
                'char' => 25,
              ),
              20 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '404',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 65,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Not Found',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 65,
                  'char' => 25,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 65,
                'char' => 25,
              ),
              21 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '405',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 66,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Method Not Allowed',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 66,
                  'char' => 34,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 66,
                'char' => 34,
              ),
              22 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '406',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 67,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Not Acceptable',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 67,
                  'char' => 30,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 67,
                'char' => 30,
              ),
              23 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '407',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 68,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Proxy Authentication Required',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 68,
                  'char' => 45,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 68,
                'char' => 45,
              ),
              24 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '408',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 69,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Request Timeout',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 69,
                  'char' => 31,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 69,
                'char' => 31,
              ),
              25 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '409',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 70,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Conflict',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 70,
                  'char' => 24,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 70,
                'char' => 24,
              ),
              26 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '410',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 71,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Gone',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 71,
                  'char' => 20,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 71,
                'char' => 20,
              ),
              27 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '411',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 72,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Length Required',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 72,
                  'char' => 31,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 72,
                'char' => 31,
              ),
              28 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '412',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 73,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Precondition Failed',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 73,
                  'char' => 35,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 73,
                'char' => 35,
              ),
              29 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '413',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 74,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Request Entity Too Large',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 74,
                  'char' => 40,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 74,
                'char' => 40,
              ),
              30 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '414',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 75,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Request-URI Too Long',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 75,
                  'char' => 36,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 75,
                'char' => 36,
              ),
              31 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '415',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 76,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Unsupported Media Type',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 76,
                  'char' => 38,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 76,
                'char' => 38,
              ),
              32 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '416',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 77,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Requested Range Not Satisfiable',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 77,
                  'char' => 47,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 77,
                'char' => 47,
              ),
              33 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '417',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 78,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Expectation Failed',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 78,
                  'char' => 34,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 78,
                'char' => 34,
              ),
              34 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '418',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 79,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'I\\"m a teapot',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 79,
                  'char' => 29,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 79,
                'char' => 29,
              ),
              35 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '500',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 80,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Internal Server Error',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 80,
                  'char' => 37,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 80,
                'char' => 37,
              ),
              36 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '501',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 81,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Not Implemented',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 81,
                  'char' => 31,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 81,
                'char' => 31,
              ),
              37 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '502',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 82,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Bad Gateway',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 82,
                  'char' => 27,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 82,
                'char' => 27,
              ),
              38 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '503',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 83,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Service Unavailable',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 83,
                  'char' => 35,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 83,
                'char' => 35,
              ),
              39 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '504',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 84,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'Gateway Timeout',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 84,
                  'char' => 31,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 84,
                'char' => 31,
              ),
              40 => 
              array (
                'key' => 
                array (
                  'type' => 'int',
                  'value' => '505',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 85,
                  'char' => 12,
                ),
                'value' => 
                array (
                  'type' => 'string',
                  'value' => 'HTTP Version Not Supported',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 86,
                  'char' => 5,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 86,
                'char' => 5,
              ),
            ),
            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
            'line' => 86,
            'char' => 6,
          ),
          'docblock' => '**
     * @var array
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 92,
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
              'name' => 'parameters',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 93,
                'char' => 54,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 93,
              'char' => 54,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'statusCode',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'int',
                'value' => '200',
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 93,
                'char' => 76,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 93,
              'char' => 76,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'headers',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 93,
                'char' => 96,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 93,
              'char' => 96,
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
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 95,
                  'char' => 14,
                ),
                'name' => 'setParameters',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'parameters',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 95,
                      'char' => 39,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 95,
                    'char' => 39,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 95,
                'char' => 40,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 96,
              'char' => 12,
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
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 96,
                  'char' => 14,
                ),
                'name' => 'setStatusCode',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'statusCode',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 96,
                      'char' => 39,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 96,
                    'char' => 39,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 96,
                'char' => 40,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 97,
              'char' => 12,
            ),
            2 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 97,
                  'char' => 14,
                ),
                'name' => 'setHttpHeaders',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'headers',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 97,
                      'char' => 37,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 97,
                    'char' => 37,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 97,
                'char' => 38,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 98,
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
                  'property' => 'version',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '1.1',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 98,
                    'char' => 34,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 98,
                  'char' => 34,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 99,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param array $parameters
     * @param int   $statusCode
     * @param array $headers
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 93,
          'last-line' => 105,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__toString',
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
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 108,
                    'char' => 25,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 108,
                  'char' => 25,
                ),
                1 => 
                array (
                  'variable' => 'name',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 108,
                  'char' => 31,
                ),
                2 => 
                array (
                  'variable' => 'value',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 108,
                  'char' => 38,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 109,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 109,
                  'char' => 33,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'httpHeaders',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 109,
                  'char' => 46,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 109,
                'char' => 46,
              ),
              'key' => 'name',
              'value' => 'value',
              'reverse' => 0,
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
                          'value' => 'name',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 110,
                          'char' => 29,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'cast',
                        'left' => 'array',
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 110,
                          'char' => 46,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 110,
                        'char' => 46,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 110,
                      'char' => 46,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 111,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 113,
              'char' => 14,
            ),
            2 => 
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
                        'type' => 'fcall',
                        'name' => 'sprintf',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'HTTP/%s %s %s',
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 114,
                              'char' => 36,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 114,
                            'char' => 36,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'this',
                                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                'line' => 114,
                                'char' => 43,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'version',
                                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                'line' => 114,
                                'char' => 51,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 114,
                              'char' => 51,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 114,
                            'char' => 51,
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
                                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                'line' => 114,
                                'char' => 58,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'statusCode',
                                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                'line' => 114,
                                'char' => 69,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 114,
                              'char' => 69,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 114,
                            'char' => 69,
                          ),
                          3 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'this',
                                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                'line' => 114,
                                'char' => 76,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'statusText',
                                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                'line' => 114,
                                'char' => 87,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 114,
                              'char' => 87,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 114,
                            'char' => 87,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 114,
                        'char' => 88,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => '\\r\\n',
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 114,
                        'char' => 95,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 114,
                      'char' => 95,
                    ),
                    'right' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 115,
                        'char' => 18,
                      ),
                      'name' => 'getHttpHeadersAsString',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'headers',
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 115,
                            'char' => 49,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 115,
                          'char' => 49,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 115,
                      'char' => 50,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 115,
                    'char' => 50,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => '\\r\\n',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 115,
                    'char' => 57,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 115,
                  'char' => 57,
                ),
                'right' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 116,
                    'char' => 18,
                  ),
                  'name' => 'getResponseBody',
                  'call-type' => 1,
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 116,
                  'char' => 36,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 116,
                'char' => 36,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 117,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Converts the response object to string containing all headers and the response content.
     *
     * @return string The response with headers and content
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 106,
          'last-line' => 126,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'buildHeader',
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
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 127,
              'char' => 40,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 127,
              'char' => 47,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'sprintf',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => '%s: %s\\n',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 129,
                      'char' => 34,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 129,
                    'char' => 34,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 129,
                      'char' => 40,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 129,
                    'char' => 40,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 129,
                      'char' => 47,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 129,
                    'char' => 47,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 129,
                'char' => 48,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 130,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Returns the build header line.
     *
     * @param string $name  The header name
     * @param string $value The header value
     *
     * @return string The built header line
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 127,
          'last-line' => 134,
          'char' => 22,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getStatusCode',
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
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 137,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'statusCode',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 137,
                  'char' => 32,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 137,
                'char' => 32,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 138,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @return int
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 135,
          'last-line' => 144,
          'char' => 19,
        ),
        4 => 
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
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 145,
              'char' => 49,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'text',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 145,
                'char' => 62,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 145,
              'char' => 62,
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
                  'property' => 'statusCode',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'statusCode',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 147,
                    'char' => 42,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 147,
                  'char' => 42,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 148,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 148,
                  'char' => 17,
                ),
                'name' => 'isInvalid',
                'call-type' => 1,
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 148,
                'char' => 30,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 151,
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
                  'property' => 'statusText',
                  'expr' => 
                  array (
                    'type' => 'ternary',
                    'left' => 
                    array (
                      'type' => 'equals',
                      'left' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 151,
                        'char' => 39,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'text',
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 151,
                        'char' => 46,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 151,
                      'char' => 46,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => '',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 151,
                      'char' => 51,
                    ),
                    'extra' => 
                    array (
                      'type' => 'list',
                      'left' => 
                      array (
                        'type' => 'ternary',
                        'left' => 
                        array (
                          'type' => 'identical',
                          'left' => 
                          array (
                            'type' => 'null',
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 151,
                            'char' => 61,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'text',
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 151,
                            'char' => 68,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 151,
                          'char' => 68,
                        ),
                        'right' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'static-property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'self',
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 151,
                              'char' => 87,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'statusTexts',
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 151,
                              'char' => 87,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 151,
                            'char' => 87,
                          ),
                          'right' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 151,
                              'char' => 93,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'statusCode',
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 151,
                              'char' => 104,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 151,
                            'char' => 104,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 151,
                          'char' => 106,
                        ),
                        'extra' => 
                        array (
                          'type' => 'variable',
                          'value' => 'text',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 151,
                          'char' => 112,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 151,
                        'char' => 112,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 151,
                      'char' => 113,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 151,
                    'char' => 113,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 151,
                  'char' => 113,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 152,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param int $statusCode
     * @param string $text
     * @throws InvalidArgumentException
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 145,
          'last-line' => 156,
          'char' => 19,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getStatusText',
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
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 159,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'statusText',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 159,
                  'char' => 32,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 159,
                'char' => 32,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 160,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @return string
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 157,
          'last-line' => 164,
          'char' => 19,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getParameters',
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
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 167,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'parameters',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 167,
                  'char' => 32,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 167,
                'char' => 32,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 168,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @return array
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 165,
          'last-line' => 172,
          'char' => 19,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setParameters',
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
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 173,
              'char' => 51,
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
                  'property' => 'parameters',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'parameters',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 175,
                    'char' => 42,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 175,
                  'char' => 42,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 176,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param array $parameters
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 173,
          'last-line' => 180,
          'char' => 19,
        ),
        8 => 
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
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 181,
              'char' => 51,
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
                  'property' => 'parameters',
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
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 183,
                            'char' => 49,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'parameters',
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 183,
                            'char' => 60,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 183,
                          'char' => 60,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 183,
                        'char' => 60,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'parameters',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 183,
                          'char' => 72,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 183,
                        'char' => 72,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 183,
                    'char' => 73,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 183,
                  'char' => 73,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 184,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param array $parameters
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 181,
          'last-line' => 190,
          'char' => 19,
        ),
        9 => 
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
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 191,
              'char' => 38,
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
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 191,
                'char' => 55,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 191,
              'char' => 55,
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
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 193,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'parameters',
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 193,
                        'char' => 38,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 193,
                      'char' => 38,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 193,
                      'char' => 43,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 193,
                    'char' => 45,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 193,
                  'char' => 45,
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
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 193,
                      'char' => 52,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'parameters',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 193,
                      'char' => 63,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 193,
                    'char' => 63,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'name',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 193,
                    'char' => 68,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 193,
                  'char' => 70,
                ),
                'extra' => 
                array (
                  'type' => 'variable',
                  'value' => '_default',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 193,
                  'char' => 80,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 193,
                'char' => 80,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 194,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param string $name
     * @param mixed  $default
     * @return mixed
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 191,
          'last-line' => 199,
          'char' => 19,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setParameter',
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
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 200,
              'char' => 38,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 200,
              'char' => 45,
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
                  'assign-type' => 'object-property-array-index',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'parameters',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 202,
                      'char' => 34,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'value',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 202,
                    'char' => 43,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 202,
                  'char' => 43,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 203,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param string $name
     * @param mixed  $value
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 200,
          'last-line' => 207,
          'char' => 19,
        ),
        11 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setHttpHeaders',
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
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 208,
              'char' => 53,
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
                  'property' => 'httpHeaders',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'httpHeaders',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 210,
                    'char' => 44,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 210,
                  'char' => 44,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 211,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param array $httpHeaders
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 208,
          'last-line' => 216,
          'char' => 19,
        ),
        12 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setHttpHeader',
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
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 217,
              'char' => 39,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 217,
              'char' => 46,
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
                  'assign-type' => 'object-property-array-index',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'httpHeaders',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 219,
                      'char' => 35,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'value',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 219,
                    'char' => 44,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 219,
                  'char' => 44,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 220,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param string $name
     * @param mixed $value
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 217,
          'last-line' => 224,
          'char' => 19,
        ),
        13 => 
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
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 225,
              'char' => 53,
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
                  'property' => 'httpHeaders',
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
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 227,
                            'char' => 50,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'httpHeaders',
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 227,
                            'char' => 62,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 227,
                          'char' => 62,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 227,
                        'char' => 62,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'httpHeaders',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 227,
                          'char' => 75,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 227,
                        'char' => 75,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 227,
                    'char' => 76,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 227,
                  'char' => 76,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 228,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param array $httpHeaders
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 225,
          'last-line' => 232,
          'char' => 19,
        ),
        14 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getHttpHeaders',
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
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 235,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'httpHeaders',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 235,
                  'char' => 33,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 235,
                'char' => 33,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 236,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @return array
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 233,
          'last-line' => 242,
          'char' => 19,
        ),
        15 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getHttpHeader',
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
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 243,
              'char' => 39,
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
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 243,
                'char' => 56,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 243,
              'char' => 56,
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
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 245,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'httpHeaders',
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 245,
                        'char' => 39,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 245,
                      'char' => 39,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 245,
                      'char' => 44,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 245,
                    'char' => 46,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 245,
                  'char' => 46,
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
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 245,
                      'char' => 53,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'httpHeaders',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 245,
                      'char' => 65,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 245,
                    'char' => 65,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'name',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 245,
                    'char' => 70,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 245,
                  'char' => 72,
                ),
                'extra' => 
                array (
                  'type' => 'variable',
                  'value' => '_default',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 245,
                  'char' => 82,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 245,
                'char' => 82,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 246,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param string $name
     * @param mixed  $default
     * @return mixed
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 243,
          'last-line' => 252,
          'char' => 19,
        ),
        16 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getResponseBody',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'format',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => 'json',
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 253,
                'char' => 52,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 253,
              'char' => 52,
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
                  'variable' => 'xml',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 255,
                  'char' => 16,
                ),
                1 => 
                array (
                  'variable' => 'key',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 255,
                  'char' => 21,
                ),
                2 => 
                array (
                  'variable' => 'param',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 255,
                  'char' => 28,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 256,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'switch',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'format',
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 256,
                'char' => 23,
              ),
              'clauses' => 
              array (
                0 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'json',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 257,
                    'char' => 24,
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
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 258,
                            'char' => 29,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'parameters',
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 258,
                            'char' => 41,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 258,
                          'char' => 41,
                        ),
                        'right' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'json_encode',
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
                                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                  'line' => 258,
                                  'char' => 60,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'parameters',
                                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                  'line' => 258,
                                  'char' => 71,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                'line' => 258,
                                'char' => 71,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 258,
                              'char' => 71,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 258,
                          'char' => 73,
                        ),
                        'extra' => 
                        array (
                          'type' => 'string',
                          'value' => '',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 258,
                          'char' => 77,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 258,
                        'char' => 77,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 259,
                      'char' => 16,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 259,
                  'char' => 16,
                ),
                1 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'xml',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 259,
                    'char' => 23,
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
                          'variable' => 'xml',
                          'expr' => 
                          array (
                            'type' => 'new',
                            'class' => '\\SimpleXMLElement',
                            'dynamic' => 0,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => '<response/>',
                                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                  'line' => 261,
                                  'char' => 62,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                'line' => 261,
                                'char' => 62,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 261,
                            'char' => 63,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 261,
                          'char' => 63,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 262,
                      'char' => 19,
                    ),
                    1 => 
                    array (
                      'type' => 'for',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 262,
                          'char' => 40,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'parameters',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 262,
                          'char' => 52,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 262,
                        'char' => 52,
                      ),
                      'key' => 'key',
                      'value' => 'param',
                      'reverse' => 0,
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
                              'value' => 'xml',
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 263,
                              'char' => 25,
                            ),
                            'name' => 'addChild',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'key',
                                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                  'line' => 263,
                                  'char' => 38,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                'line' => 263,
                                'char' => 38,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'param',
                                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                  'line' => 263,
                                  'char' => 45,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                'line' => 263,
                                'char' => 45,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 263,
                            'char' => 46,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 264,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 265,
                      'char' => 22,
                    ),
                    2 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'xml',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 265,
                          'char' => 28,
                        ),
                        'name' => 'asXML',
                        'call-type' => 1,
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 265,
                        'char' => 36,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 266,
                      'char' => 9,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 266,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 268,
              'char' => 13,
            ),
            2 => 
            array (
              'type' => 'throw',
              'expr' => 
              array (
                'type' => 'new',
                'class' => 'InvalidArgumentException',
                'dynamic' => 0,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'sprintf',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'string',
                            'value' => 'The format %s is not supported',
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 268,
                            'char' => 84,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 268,
                          'char' => 84,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'format',
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 268,
                            'char' => 92,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 268,
                          'char' => 92,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 268,
                      'char' => 93,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 268,
                    'char' => 93,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 268,
                'char' => 94,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 270,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param string $format
     * @return mixed
     * @throws InvalidArgumentException
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 253,
          'last-line' => 274,
          'char' => 19,
        ),
        17 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'send',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'format',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => 'json',
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 275,
                'char' => 41,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 275,
              'char' => 41,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'headers_sent',
                'call-type' => 1,
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 278,
                'char' => 27,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 280,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 282,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'switch',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'format',
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 282,
                'char' => 23,
              ),
              'clauses' => 
              array (
                0 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'json',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 283,
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
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 284,
                          'char' => 22,
                        ),
                        'name' => 'setHttpHeader',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'Content-Type',
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 284,
                              'char' => 51,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 284,
                            'char' => 51,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'application/json',
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 284,
                              'char' => 71,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 284,
                            'char' => 71,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 284,
                        'char' => 72,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 285,
                      'char' => 21,
                    ),
                    1 => 
                    array (
                      'type' => 'break',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 286,
                      'char' => 16,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 286,
                  'char' => 16,
                ),
                1 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'xml',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 286,
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
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 287,
                          'char' => 22,
                        ),
                        'name' => 'setHttpHeader',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'Content-Type',
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 287,
                              'char' => 51,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 287,
                            'char' => 51,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'text/xml',
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 287,
                              'char' => 63,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 287,
                            'char' => 63,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 287,
                        'char' => 64,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 288,
                      'char' => 21,
                    ),
                    1 => 
                    array (
                      'type' => 'break',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 289,
                      'char' => 9,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 289,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 291,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'header',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'sprintf',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'string',
                            'value' => 'HTTP/%s %s %s',
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 291,
                            'char' => 39,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 291,
                          'char' => 39,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 291,
                              'char' => 46,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'version',
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 291,
                              'char' => 54,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 291,
                            'char' => 54,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 291,
                          'char' => 54,
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
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 291,
                              'char' => 61,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'statusCode',
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 291,
                              'char' => 72,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 291,
                            'char' => 72,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 291,
                          'char' => 72,
                        ),
                        3 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 291,
                              'char' => 79,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'statusText',
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 291,
                              'char' => 90,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 291,
                            'char' => 90,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 291,
                          'char' => 90,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 291,
                      'char' => 91,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 291,
                    'char' => 91,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 291,
                'char' => 92,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 292,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'name',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 292,
                  'char' => 17,
                ),
                1 => 
                array (
                  'variable' => 'header',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 292,
                  'char' => 25,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 293,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 293,
                  'char' => 34,
                ),
                'name' => 'getHttpHeaders',
                'call-type' => 1,
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 293,
                'char' => 52,
              ),
              'key' => 'name',
              'value' => 'header',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'header',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'sprintf',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'string',
                                'value' => '%s: %s',
                                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                'line' => 294,
                                'char' => 36,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 294,
                              'char' => 36,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'name',
                                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                'line' => 294,
                                'char' => 42,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 294,
                              'char' => 42,
                            ),
                            2 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'header',
                                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                'line' => 294,
                                'char' => 50,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 294,
                              'char' => 50,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 294,
                          'char' => 51,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 294,
                        'char' => 51,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 294,
                    'char' => 52,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 295,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 296,
              'char' => 12,
            ),
            5 => 
            array (
              'type' => 'echo',
              'expressions' => 
              array (
                0 => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 296,
                    'char' => 19,
                  ),
                  'name' => 'getResponseBody',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'format',
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 296,
                        'char' => 42,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 296,
                      'char' => 42,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 296,
                  'char' => 43,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 297,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param string $format
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 275,
          'last-line' => 306,
          'char' => 19,
        ),
        18 => 
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
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 307,
              'char' => 44,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'error',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 307,
              'char' => 51,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'errorDescription',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 307,
                'char' => 76,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 307,
              'char' => 76,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'errorUri',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 307,
                'char' => 101,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 307,
              'char' => 101,
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
                  'variable' => 'parameters',
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
                          'value' => 'error',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 309,
                          'char' => 34,
                        ),
                        'value' => 
                        array (
                          'type' => 'variable',
                          'value' => 'error',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 309,
                          'char' => 41,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 309,
                        'char' => 41,
                      ),
                      1 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'error_description',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 309,
                          'char' => 62,
                        ),
                        'value' => 
                        array (
                          'type' => 'variable',
                          'value' => 'errorDescription',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 309,
                          'char' => 80,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 309,
                        'char' => 80,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 309,
                    'char' => 81,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 309,
                  'char' => 81,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 311,
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
                        'value' => 'errorUri',
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 311,
                        'char' => 29,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 311,
                      'char' => 29,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 311,
                  'char' => 31,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 311,
                'char' => 31,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'and',
                    'left' => 
                    array (
                      'type' => 'greater',
                      'left' => 
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
                              'value' => 'errorUri',
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 312,
                              'char' => 31,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 312,
                            'char' => 31,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 312,
                        'char' => 33,
                      ),
                      'right' => 
                      array (
                        'type' => 'int',
                        'value' => '0',
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 312,
                        'char' => 38,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 312,
                      'char' => 38,
                    ),
                    'right' => 
                    array (
                      'type' => 'equals',
                      'left' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'errorUri',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 312,
                          'char' => 48,
                        ),
                        'right' => 
                        array (
                          'type' => 'int',
                          'value' => '0',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 312,
                          'char' => 50,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 312,
                        'char' => 53,
                      ),
                      'right' => 
                      array (
                        'type' => 'char',
                        'value' => '#',
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 312,
                        'char' => 59,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 312,
                      'char' => 59,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 312,
                    'char' => 59,
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
                          'variable' => 'errorUri',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'string',
                              'value' => 'http://tools.ietf.org/html/rfc6749',
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 314,
                              'char' => 69,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'errorUri',
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 314,
                              'char' => 79,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 314,
                            'char' => 79,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 314,
                          'char' => 79,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 315,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 316,
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
                      'variable' => 'parameters',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'error_uri',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 316,
                          'char' => 39,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'errorUri',
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 316,
                        'char' => 51,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 316,
                      'char' => 51,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 317,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 319,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'httpHeaders',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 319,
                  'char' => 24,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 320,
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
                  'variable' => 'httpHeaders',
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
                          'value' => 'Cache-Control',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 320,
                          'char' => 43,
                        ),
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'no-store',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 320,
                          'char' => 55,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 320,
                        'char' => 55,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 320,
                    'char' => 56,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 320,
                  'char' => 56,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 322,
              'char' => 12,
            ),
            4 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 322,
                  'char' => 14,
                ),
                'name' => 'setStatusCode',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'statusCode',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 322,
                      'char' => 39,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 322,
                    'char' => 39,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 322,
                'char' => 40,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 323,
              'char' => 12,
            ),
            5 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 323,
                  'char' => 14,
                ),
                'name' => 'addParameters',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'parameters',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 323,
                      'char' => 39,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 323,
                    'char' => 39,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 323,
                'char' => 40,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 324,
              'char' => 12,
            ),
            6 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 324,
                  'char' => 14,
                ),
                'name' => 'addHttpHeaders',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'httpHeaders',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 324,
                      'char' => 41,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 324,
                    'char' => 41,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 324,
                'char' => 42,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 326,
              'char' => 10,
            ),
            7 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'not',
                  'left' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 326,
                      'char' => 18,
                    ),
                    'name' => 'isClientError',
                    'call-type' => 1,
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 326,
                    'char' => 36,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 326,
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
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 326,
                      'char' => 44,
                    ),
                    'name' => 'isServerError',
                    'call-type' => 1,
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 326,
                    'char' => 61,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 326,
                  'char' => 61,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 326,
                'char' => 61,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 329,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param int $statusCode
     * @param string $error
     * @param string $errorDescription
     * @param string $errorUri
     * @return mixed
     * @throws InvalidArgumentException
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 307,
          'last-line' => 340,
          'char' => 19,
        ),
        19 => 
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
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 341,
              'char' => 47,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'url',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 341,
              'char' => 52,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'state',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 341,
                'char' => 66,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 341,
              'char' => 66,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'error',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 341,
                'char' => 80,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 341,
              'char' => 80,
            ),
            4 => 
            array (
              'type' => 'parameter',
              'name' => 'errorDescription',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 341,
                'char' => 105,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 341,
              'char' => 105,
            ),
            5 => 
            array (
              'type' => 'parameter',
              'name' => 'errorUri',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 341,
                'char' => 122,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 341,
              'char' => 122,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'empty',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'url',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 343,
                  'char' => 22,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 343,
                'char' => 22,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 347,
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
                  'variable' => 'parameters',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 347,
                    'char' => 28,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 347,
                  'char' => 28,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 349,
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
                        'value' => 'state',
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 349,
                        'char' => 26,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 349,
                      'char' => 26,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 349,
                  'char' => 28,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 349,
                'char' => 28,
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
                      'variable' => 'parameters',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'state',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 350,
                          'char' => 35,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'state',
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 350,
                        'char' => 44,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 350,
                      'char' => 44,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 351,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 353,
              'char' => 10,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
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
                        'value' => 'error',
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 353,
                        'char' => 26,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 353,
                      'char' => 26,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 353,
                  'char' => 28,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 353,
                'char' => 28,
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
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 354,
                      'char' => 18,
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
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 354,
                          'char' => 31,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 354,
                        'char' => 31,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'error',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 354,
                          'char' => 38,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 354,
                        'char' => 38,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'errorDescription',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 354,
                          'char' => 56,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 354,
                        'char' => 56,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'errorUri',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 354,
                          'char' => 66,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 354,
                        'char' => 66,
                      ),
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 354,
                    'char' => 67,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 355,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 356,
              'char' => 12,
            ),
            4 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 356,
                  'char' => 14,
                ),
                'name' => 'setStatusCode',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'statusCode',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 356,
                      'char' => 39,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 356,
                    'char' => 39,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 356,
                'char' => 40,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 357,
              'char' => 12,
            ),
            5 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 357,
                  'char' => 14,
                ),
                'name' => 'addParameters',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'parameters',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 357,
                      'char' => 39,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 357,
                    'char' => 39,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 357,
                'char' => 40,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 359,
              'char' => 10,
            ),
            6 => 
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
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 359,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'parameters',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 359,
                          'char' => 34,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 359,
                        'char' => 34,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 359,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 359,
                  'char' => 36,
                ),
                'right' => 
                array (
                  'type' => 'int',
                  'value' => '0',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 359,
                  'char' => 40,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 359,
                'char' => 40,
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
                      'variable' => 'parts',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 360,
                      'char' => 22,
                    ),
                    1 => 
                    array (
                      'variable' => 'sep',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 360,
                      'char' => 27,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 362,
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
                              'value' => 'url',
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 362,
                              'char' => 38,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 362,
                            'char' => 38,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 362,
                        'char' => 39,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 362,
                      'char' => 39,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 363,
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
                      'variable' => 'sep',
                      'expr' => 
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
                                'value' => 'parts',
                                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                'line' => 363,
                                'char' => 34,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'query',
                                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                'line' => 363,
                                'char' => 42,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 363,
                              'char' => 45,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 363,
                            'char' => 45,
                          ),
                          'right' => 
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
                                    'type' => 'array-access',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'parts',
                                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                      'line' => 363,
                                      'char' => 58,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'query',
                                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                      'line' => 363,
                                      'char' => 66,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                    'line' => 363,
                                    'char' => 67,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                  'line' => 363,
                                  'char' => 67,
                                ),
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 363,
                              'char' => 69,
                            ),
                            'right' => 
                            array (
                              'type' => 'int',
                              'value' => '0',
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 363,
                              'char' => 73,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 363,
                            'char' => 73,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 363,
                          'char' => 73,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => '&',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 363,
                          'char' => 79,
                        ),
                        'extra' => 
                        array (
                          'type' => 'string',
                          'value' => '?',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 363,
                          'char' => 84,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 363,
                        'char' => 84,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 363,
                      'char' => 84,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 364,
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
                      'operator' => 'concat-assign',
                      'variable' => 'url',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'sep',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 364,
                          'char' => 27,
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
                                'type' => 'property-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'this',
                                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                  'line' => 364,
                                  'char' => 51,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'parameters',
                                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                  'line' => 364,
                                  'char' => 62,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                'line' => 364,
                                'char' => 62,
                              ),
                              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                              'line' => 364,
                              'char' => 62,
                            ),
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 364,
                          'char' => 63,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 364,
                        'char' => 63,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 364,
                      'char' => 63,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 365,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 367,
              'char' => 12,
            ),
            7 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 367,
                  'char' => 14,
                ),
                'name' => 'addHttpHeaders',
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
                            'value' => 'Location',
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 367,
                            'char' => 41,
                          ),
                          'value' => 
                          array (
                            'type' => 'variable',
                            'value' => 'url',
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 367,
                            'char' => 47,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 367,
                          'char' => 47,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 367,
                      'char' => 48,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 367,
                    'char' => 48,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 367,
                'char' => 49,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 369,
              'char' => 10,
            ),
            8 => 
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
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 369,
                    'char' => 18,
                  ),
                  'name' => 'isRedirection',
                  'call-type' => 1,
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 369,
                  'char' => 35,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 369,
                'char' => 35,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 372,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @param int $statusCode
     * @param string $url
     * @param string $state
     * @param string $error
     * @param string $errorDescription
     * @param string $errorUri
     * @return mixed
     * @throws InvalidArgumentException
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 341,
          'last-line' => 380,
          'char' => 19,
        ),
        20 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isInvalid',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'or',
                'left' => 
                array (
                  'type' => 'less',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 383,
                      'char' => 21,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'statusCode',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 383,
                      'char' => 33,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 383,
                    'char' => 33,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '100',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 383,
                    'char' => 40,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 383,
                  'char' => 40,
                ),
                'right' => 
                array (
                  'type' => 'greater-equal',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 383,
                      'char' => 47,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'statusCode',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 383,
                      'char' => 59,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 383,
                    'char' => 59,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '600',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 383,
                    'char' => 64,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 383,
                  'char' => 64,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 383,
                'char' => 64,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 384,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @return Boolean
     *
     * @api
     *
     * @see http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 381,
          'last-line' => 390,
          'char' => 19,
        ),
        21 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isInformational',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'greater-equal',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 393,
                      'char' => 21,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'statusCode',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 393,
                      'char' => 33,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 393,
                    'char' => 33,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '100',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 393,
                    'char' => 40,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 393,
                  'char' => 40,
                ),
                'right' => 
                array (
                  'type' => 'less',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 393,
                      'char' => 47,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'statusCode',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 393,
                      'char' => 59,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 393,
                    'char' => 59,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '200',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 393,
                    'char' => 64,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 393,
                  'char' => 64,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 393,
                'char' => 64,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 394,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @return Boolean
     *
     * @api
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 391,
          'last-line' => 400,
          'char' => 19,
        ),
        22 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isSuccessful',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'greater-equal',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 403,
                      'char' => 21,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'statusCode',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 403,
                      'char' => 33,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 403,
                    'char' => 33,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '200',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 403,
                    'char' => 40,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 403,
                  'char' => 40,
                ),
                'right' => 
                array (
                  'type' => 'less',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 403,
                      'char' => 47,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'statusCode',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 403,
                      'char' => 59,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 403,
                    'char' => 59,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '300',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 403,
                    'char' => 64,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 403,
                  'char' => 64,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 403,
                'char' => 64,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 404,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @return Boolean
     *
     * @api
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 401,
          'last-line' => 410,
          'char' => 19,
        ),
        23 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isRedirection',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'greater-equal',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 413,
                      'char' => 21,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'statusCode',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 413,
                      'char' => 33,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 413,
                    'char' => 33,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '300',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 413,
                    'char' => 40,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 413,
                  'char' => 40,
                ),
                'right' => 
                array (
                  'type' => 'less',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 413,
                      'char' => 47,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'statusCode',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 413,
                      'char' => 59,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 413,
                    'char' => 59,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '400',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 413,
                    'char' => 64,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 413,
                  'char' => 64,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 413,
                'char' => 64,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 414,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @return Boolean
     *
     * @api
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 411,
          'last-line' => 420,
          'char' => 19,
        ),
        24 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isClientError',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'greater-equal',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 423,
                      'char' => 21,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'statusCode',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 423,
                      'char' => 33,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 423,
                    'char' => 33,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '400',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 423,
                    'char' => 40,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 423,
                  'char' => 40,
                ),
                'right' => 
                array (
                  'type' => 'less',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 423,
                      'char' => 47,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'statusCode',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 423,
                      'char' => 59,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 423,
                    'char' => 59,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '500',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 423,
                    'char' => 64,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 423,
                  'char' => 64,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 423,
                'char' => 64,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 424,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @return Boolean
     *
     * @api
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 421,
          'last-line' => 430,
          'char' => 19,
        ),
        25 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isServerError',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'greater-equal',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 433,
                      'char' => 21,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'statusCode',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 433,
                      'char' => 33,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 433,
                    'char' => 33,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '500',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 433,
                    'char' => 40,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 433,
                  'char' => 40,
                ),
                'right' => 
                array (
                  'type' => 'less',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 433,
                      'char' => 47,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'statusCode',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 433,
                      'char' => 59,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 433,
                    'char' => 59,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '600',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 433,
                    'char' => 64,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 433,
                  'char' => 64,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 433,
                'char' => 64,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 434,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @return Boolean
     *
     * @api
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 431,
          'last-line' => 441,
          'char' => 19,
        ),
        26 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => 'getHttpHeadersAsString',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'headers',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 442,
              'char' => 52,
            ),
          ),
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
                        'value' => 'headers',
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 444,
                        'char' => 25,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 444,
                      'char' => 25,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 444,
                  'char' => 28,
                ),
                'right' => 
                array (
                  'type' => 'int',
                  'value' => '0',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 444,
                  'char' => 32,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 444,
                'char' => 32,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 445,
                    'char' => 22,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 446,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 447,
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
                  'variable' => 'max',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 447,
                  'char' => 16,
                ),
                1 => 
                array (
                  'variable' => 'content',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 447,
                    'char' => 30,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 447,
                  'char' => 30,
                ),
                2 => 
                array (
                  'variable' => 'name',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 447,
                  'char' => 36,
                ),
                3 => 
                array (
                  'variable' => 'values',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 447,
                  'char' => 44,
                ),
                4 => 
                array (
                  'variable' => 'value',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 447,
                  'char' => 51,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 448,
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
                  'variable' => 'max',
                  'expr' => 
                  array (
                    'type' => 'add',
                    'left' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'max',
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
                                  'value' => 'strlen',
                                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                  'line' => 448,
                                  'char' => 41,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                'line' => 448,
                                'char' => 41,
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
                                        'value' => 'headers',
                                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                        'line' => 448,
                                        'char' => 61,
                                      ),
                                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                      'line' => 448,
                                      'char' => 61,
                                    ),
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                  'line' => 448,
                                  'char' => 62,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                'line' => 448,
                                'char' => 62,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 448,
                            'char' => 63,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 448,
                          'char' => 63,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 448,
                      'char' => 65,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '1',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 448,
                      'char' => 68,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 448,
                    'char' => 68,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 448,
                  'char' => 68,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 449,
              'char' => 13,
            ),
            3 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'ksort',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'headers',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 449,
                      'char' => 22,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 449,
                    'char' => 22,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 449,
                'char' => 23,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 451,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'headers',
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 451,
                'char' => 36,
              ),
              'key' => 'name',
              'value' => 'values',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'values',
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 452,
                    'char' => 33,
                  ),
                  'value' => 'value',
                  'reverse' => 0,
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
                          'operator' => 'concat-assign',
                          'variable' => 'content',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'sprintf',
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
                                      'type' => 'string',
                                      'value' => '%-{',
                                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                      'line' => 453,
                                      'char' => 45,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'max',
                                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                      'line' => 453,
                                      'char' => 51,
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                    'line' => 453,
                                    'char' => 51,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => '}s %s\\r\\n',
                                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                    'line' => 453,
                                    'char' => 64,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                  'line' => 453,
                                  'char' => 64,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                'line' => 453,
                                'char' => 64,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'concat',
                                  'left' => 
                                  array (
                                    'type' => 'mcall',
                                    'variable' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'this',
                                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                      'line' => 453,
                                      'char' => 71,
                                    ),
                                    'name' => 'beautifyHeaderName',
                                    'call-type' => 1,
                                    'parameters' => 
                                    array (
                                      0 => 
                                      array (
                                        'parameter' => 
                                        array (
                                          'type' => 'variable',
                                          'value' => 'name',
                                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                          'line' => 453,
                                          'char' => 95,
                                        ),
                                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                        'line' => 453,
                                        'char' => 95,
                                      ),
                                    ),
                                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                    'line' => 453,
                                    'char' => 96,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => ':',
                                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                    'line' => 453,
                                    'char' => 100,
                                  ),
                                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                  'line' => 453,
                                  'char' => 100,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                'line' => 453,
                                'char' => 100,
                              ),
                              2 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'value',
                                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                  'line' => 453,
                                  'char' => 107,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                                'line' => 453,
                                'char' => 107,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 453,
                            'char' => 108,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 453,
                          'char' => 108,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 454,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 455,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 457,
              'char' => 14,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'content',
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 457,
                'char' => 23,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 458,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Function from Symfony2 HttpFoundation - output pretty header
     *
     * @param array $headers
     * @return string
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 442,
          'last-line' => 465,
          'char' => 20,
        ),
        27 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => 'beautifyHeaderName',
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
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 466,
              'char' => 45,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'preg_replace_callback',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => '/\\-(.)/',
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 468,
                      'char' => 47,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 468,
                    'char' => 47,
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
                            'value' => 'this',
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 468,
                            'char' => 54,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 468,
                          'char' => 54,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'beautifyCallback',
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 468,
                            'char' => 74,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 468,
                          'char' => 74,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 468,
                      'char' => 75,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 468,
                    'char' => 75,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'ucfirst',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'name',
                            'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                            'line' => 468,
                            'char' => 89,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 468,
                          'char' => 89,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 468,
                      'char' => 90,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                    'line' => 468,
                    'char' => 90,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 468,
                'char' => 91,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 469,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Function from Symfony2 HttpFoundation - output pretty header
     *
     * @param string $name
     * @return mixed
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 466,
          'last-line' => 476,
          'char' => 20,
        ),
        28 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => 'beautifyCallback',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'match',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 477,
              'char' => 44,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'concat',
                'left' => 
                array (
                  'type' => 'string',
                  'value' => '-',
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 479,
                  'char' => 19,
                ),
                'right' => 
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
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'match',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 479,
                          'char' => 36,
                        ),
                        'right' => 
                        array (
                          'type' => 'int',
                          'value' => '1',
                          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                          'line' => 479,
                          'char' => 38,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                        'line' => 479,
                        'char' => 39,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                      'line' => 479,
                      'char' => 39,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                  'line' => 479,
                  'char' => 40,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/response.zep',
                'line' => 479,
                'char' => 40,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/response.zep',
              'line' => 480,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Function from Symfony2 HttpFoundation - output pretty header
     *
     * @param array $match
     * @return string
     *',
          'file' => '/data/oauth2-server-zep/oauth2/response.zep',
          'line' => 477,
          'last-line' => 481,
          'char' => 20,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/response.zep',
      'line' => 14,
      'char' => 5,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/response.zep',
    'line' => 14,
    'char' => 5,
  ),
);