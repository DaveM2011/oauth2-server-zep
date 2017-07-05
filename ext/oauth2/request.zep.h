
extern zend_class_entry *oauth2_request_ce;

ZEPHIR_INIT_CLASS(OAuth2_Request);

PHP_METHOD(OAuth2_Request, __construct);
PHP_METHOD(OAuth2_Request, initialize);
PHP_METHOD(OAuth2_Request, query);
PHP_METHOD(OAuth2_Request, request);
PHP_METHOD(OAuth2_Request, server);
PHP_METHOD(OAuth2_Request, headers);
PHP_METHOD(OAuth2_Request, getAllQueryParameters);
PHP_METHOD(OAuth2_Request, getContent);
PHP_METHOD(OAuth2_Request, getHeadersFromServer);
PHP_METHOD(OAuth2_Request, createFromGlobals);

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_request___construct, 0, 0, 0)
	ZEND_ARG_ARRAY_INFO(0, query, 1)
	ZEND_ARG_ARRAY_INFO(0, request, 1)
	ZEND_ARG_ARRAY_INFO(0, attributes, 1)
	ZEND_ARG_ARRAY_INFO(0, cookies, 1)
	ZEND_ARG_ARRAY_INFO(0, files, 1)
	ZEND_ARG_ARRAY_INFO(0, server, 1)
	ZEND_ARG_INFO(0, content)
	ZEND_ARG_ARRAY_INFO(0, headers, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_request_initialize, 0, 0, 0)
	ZEND_ARG_ARRAY_INFO(0, query, 1)
	ZEND_ARG_ARRAY_INFO(0, request, 1)
	ZEND_ARG_ARRAY_INFO(0, attributes, 1)
	ZEND_ARG_ARRAY_INFO(0, cookies, 1)
	ZEND_ARG_ARRAY_INFO(0, files, 1)
	ZEND_ARG_ARRAY_INFO(0, server, 1)
	ZEND_ARG_INFO(0, content)
	ZEND_ARG_ARRAY_INFO(0, headers, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_request_query, 0, 0, 1)
	ZEND_ARG_INFO(0, name)
	ZEND_ARG_INFO(0, _default)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_request_request, 0, 0, 1)
	ZEND_ARG_INFO(0, name)
	ZEND_ARG_INFO(0, _default)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_request_server, 0, 0, 1)
	ZEND_ARG_INFO(0, name)
	ZEND_ARG_INFO(0, _default)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_request_headers, 0, 0, 1)
	ZEND_ARG_INFO(0, name)
	ZEND_ARG_INFO(0, _default)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_request_getcontent, 0, 0, 0)
	ZEND_ARG_INFO(0, asResource)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_request_getheadersfromserver, 0, 0, 1)
	ZEND_ARG_INFO(0, server)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(oauth2_request_method_entry) {
	PHP_ME(OAuth2_Request, __construct, arginfo_oauth2_request___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(OAuth2_Request, initialize, arginfo_oauth2_request_initialize, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Request, query, arginfo_oauth2_request_query, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Request, request, arginfo_oauth2_request_request, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Request, server, arginfo_oauth2_request_server, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Request, headers, arginfo_oauth2_request_headers, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Request, getAllQueryParameters, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Request, getContent, arginfo_oauth2_request_getcontent, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Request, getHeadersFromServer, arginfo_oauth2_request_getheadersfromserver, ZEND_ACC_PRIVATE)
	PHP_ME(OAuth2_Request, createFromGlobals, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_FE_END
};
