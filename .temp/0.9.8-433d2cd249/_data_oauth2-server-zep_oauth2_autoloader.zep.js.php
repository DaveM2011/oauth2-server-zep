<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Autoloads OAuth2 classes
 *
 * @author    Brent Shaffer <bshafs at gmail dot com>
 * @license   MIT License
 *',
    'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
    'line' => 8,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'OAuth2',
    'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
    'line' => 10,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'Autoloader',
    'abstract' => 0,
    'final' => 0,
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
          'name' => 'dir',
          'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
          'line' => 18,
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
              'name' => 'dir',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                'line' => 19,
                'char' => 51,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
              'line' => 19,
              'char' => 51,
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
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'dir',
                    'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                    'line' => 21,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                  'line' => 21,
                  'char' => 24,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'null',
                  'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                  'line' => 21,
                  'char' => 33,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                'line' => 21,
                'char' => 33,
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
                      'property' => 'dir',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => './',
                        'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                        'line' => 22,
                        'char' => 33,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                      'line' => 22,
                      'char' => 33,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                  'line' => 23,
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
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => 'dir',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'dir',
                        'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                        'line' => 24,
                        'char' => 32,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                      'line' => 24,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                  'line' => 25,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
              'line' => 26,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Constructor
     *
     * @param string dir
     *',
          'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
          'line' => 19,
          'last-line' => 32,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'register',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'dir',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                'line' => 33,
                'char' => 55,
              ),
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
              'line' => 33,
              'char' => 55,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'ini_set',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'unserialize_callback_func',
                      'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                      'line' => 35,
                      'char' => 44,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                    'line' => 35,
                    'char' => 44,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'spl_autoload_call',
                      'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                      'line' => 35,
                      'char' => 65,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                    'line' => 35,
                    'char' => 65,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                'line' => 35,
                'char' => 66,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
              'line' => 36,
              'char' => 29,
            ),
            1 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'spl_autoload_register',
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
                          'value' => 
                          array (
                            'type' => 'new',
                            'class' => 'self',
                            'dynamic' => 0,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'dir',
                                  'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                                  'line' => 36,
                                  'char' => 44,
                                ),
                                'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                                'line' => 36,
                                'char' => 44,
                              ),
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                            'line' => 36,
                            'char' => 45,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                          'line' => 36,
                          'char' => 45,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'autoload',
                            'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                            'line' => 36,
                            'char' => 57,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                          'line' => 36,
                          'char' => 57,
                        ),
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                      'line' => 36,
                      'char' => 58,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                    'line' => 36,
                    'char' => 58,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                'line' => 36,
                'char' => 59,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
              'line' => 37,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Registers OAuth2\\Autoloader as an SPL autoloader.
     *
     * @param string dir
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
            'line' => 34,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
          'line' => 33,
          'last-line' => 44,
          'char' => 26,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'autoload',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'className',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
              'line' => 45,
              'char' => 47,
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
                  'variable' => 'file',
                  'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                  'line' => 47,
                  'char' => 17,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
              'line' => 49,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-identical',
                'left' => 
                array (
                  'type' => 'int',
                  'value' => '0',
                  'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                  'line' => 49,
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
                        'value' => 'className',
                        'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                        'line' => 49,
                        'char' => 34,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                      'line' => 49,
                      'char' => 34,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'string',
                        'value' => 'OAuth2',
                        'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                        'line' => 49,
                        'char' => 44,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                      'line' => 49,
                      'char' => 44,
                    ),
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                  'line' => 49,
                  'char' => 46,
                ),
                'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                'line' => 49,
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
                    'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                    'line' => 50,
                    'char' => 25,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                  'line' => 51,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
              'line' => 53,
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
                  'variable' => 'file',
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
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                            'line' => 53,
                            'char' => 25,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'dir',
                            'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                            'line' => 53,
                            'char' => 30,
                          ),
                          'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                          'line' => 53,
                          'char' => 30,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => '/',
                          'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                          'line' => 53,
                          'char' => 36,
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                        'line' => 53,
                        'char' => 36,
                      ),
                      'right' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'str_replace',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => '\\\\',
                              'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                              'line' => 53,
                              'char' => 54,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                            'line' => 53,
                            'char' => 54,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => '/',
                              'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                              'line' => 53,
                              'char' => 59,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                            'line' => 53,
                            'char' => 59,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'className',
                              'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                              'line' => 53,
                              'char' => 70,
                            ),
                            'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                            'line' => 53,
                            'char' => 70,
                          ),
                        ),
                        'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                        'line' => 53,
                        'char' => 72,
                      ),
                      'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                      'line' => 53,
                      'char' => 72,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => '.php',
                      'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                      'line' => 53,
                      'char' => 80,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                    'line' => 53,
                    'char' => 80,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                  'line' => 53,
                  'char' => 80,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
              'line' => 54,
              'char' => 10,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'file_exists',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'file',
                      'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                      'line' => 54,
                      'char' => 28,
                    ),
                    'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                    'line' => 54,
                    'char' => 28,
                  ),
                ),
                'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                'line' => 54,
                'char' => 30,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'require',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'file',
                    'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                    'line' => 55,
                    'char' => 25,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                  'line' => 56,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'true',
                    'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                    'line' => 56,
                    'char' => 24,
                  ),
                  'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                  'line' => 57,
                  'char' => 9,
                ),
              ),
              'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
              'line' => 59,
              'char' => 14,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                'line' => 59,
                'char' => 21,
              ),
              'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
              'line' => 60,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Handles autoloading of classes.
     *
     * @param string className A class name.
     * @return boolean Returns true if the class has been loaded
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
                'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
                'line' => 46,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
            'line' => 46,
            'char' => 5,
          ),
          'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
          'line' => 45,
          'last-line' => 61,
          'char' => 19,
        ),
      ),
      'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
      'line' => 10,
      'char' => 5,
    ),
    'file' => '/data/oauth2-server-zep/oauth2/autoloader.zep',
    'line' => 10,
    'char' => 5,
  ),
);