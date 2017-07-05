
extern zend_class_entry *oauth2_server_ce;

ZEPHIR_INIT_CLASS(OAuth2_Server);

PHP_METHOD(OAuth2_Server, __construct);
PHP_METHOD(OAuth2_Server, addStorage);
PHP_METHOD(OAuth2_Server, addGrantType);
PHP_METHOD(OAuth2_Server, addResponseType);
PHP_METHOD(OAuth2_Server, setAuthorizeController);
PHP_METHOD(OAuth2_Server, getAuthorizeController);
PHP_METHOD(OAuth2_Server, setTokenController);
PHP_METHOD(OAuth2_Server, getTokenController);
PHP_METHOD(OAuth2_Server, setResourceController);
PHP_METHOD(OAuth2_Server, getResourceController);
PHP_METHOD(OAuth2_Server, normalizeResponseType);
PHP_METHOD(OAuth2_Server, createDefaultAuthorizeController);
PHP_METHOD(OAuth2_Server, createDefaultTokenController);
PHP_METHOD(OAuth2_Server, getDefaultResponseTypes);
PHP_METHOD(OAuth2_Server, createDefaultResourceController);
PHP_METHOD(OAuth2_Server, createDefaultUserInfoController);
PHP_METHOD(OAuth2_Server, getDefaultGrantTypes);
PHP_METHOD(OAuth2_Server, getAccessTokenResponseType);
PHP_METHOD(OAuth2_Server, getIdTokenResponseType);
PHP_METHOD(OAuth2_Server, getIdTokenTokenResponseType);
PHP_METHOD(OAuth2_Server, getScopeUtil);
PHP_METHOD(OAuth2_Server, getDefaultTokenType);
PHP_METHOD(OAuth2_Server, createDefaultJwtAccessTokenStorage);
PHP_METHOD(OAuth2_Server, createDefaultJwtAccessTokenResponseType);
PHP_METHOD(OAuth2_Server, createDefaultAccessTokenResponseType);
PHP_METHOD(OAuth2_Server, createDefaultIdTokenResponseType);
PHP_METHOD(OAuth2_Server, createDefaultIdTokenTokenResponseType);
zend_object *zephir_init_properties_OAuth2_Server(zend_class_entry *class_type TSRMLS_DC);

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_server___construct, 0, 0, 0)
	ZEND_ARG_ARRAY_INFO(0, storage, 1)
	ZEND_ARG_ARRAY_INFO(0, config, 1)
	ZEND_ARG_ARRAY_INFO(0, grantTypes, 1)
	ZEND_ARG_ARRAY_INFO(0, responseTypes, 1)
	ZEND_ARG_OBJ_INFO(0, tokenType, OAuth2\\TokenType\\TokenTypeInterface, 1)
	ZEND_ARG_OBJ_INFO(0, scopeUtil, OAuth2\\ScopeInterface, 1)
	ZEND_ARG_OBJ_INFO(0, clientAssertionType, OAuth2\\ClientAssertionType\\ClientAssertionTypeInterface, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_server_addstorage, 0, 0, 1)
	ZEND_ARG_INFO(0, storage)
	ZEND_ARG_INFO(0, key)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_server_addgranttype, 0, 0, 1)
	ZEND_ARG_OBJ_INFO(0, grantType, OAuth2\\GrantType\\GrantTypeInterface, 0)
	ZEND_ARG_INFO(0, key)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_server_addresponsetype, 0, 0, 1)
	ZEND_ARG_INFO(0, responseType)
	ZEND_ARG_INFO(0, key)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_server_setauthorizecontroller, 0, 0, 1)
	ZEND_ARG_OBJ_INFO(0, authorizeController, OAuth2\\Controller\\AuthorizeControllerInterface, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_server_settokencontroller, 0, 0, 1)
	ZEND_ARG_OBJ_INFO(0, tokenController, OAuth2\\Controller\\TokenControllerInterface, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_server_setresourcecontroller, 0, 0, 1)
	ZEND_ARG_OBJ_INFO(0, resourceController, OAuth2\\Controller\\ResourceControllerInterface, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_server_normalizeresponsetype, 0, 0, 1)
	ZEND_ARG_INFO(0, name)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(oauth2_server_method_entry) {
	PHP_ME(OAuth2_Server, __construct, arginfo_oauth2_server___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(OAuth2_Server, addStorage, arginfo_oauth2_server_addstorage, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Server, addGrantType, arginfo_oauth2_server_addgranttype, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Server, addResponseType, arginfo_oauth2_server_addresponsetype, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Server, setAuthorizeController, arginfo_oauth2_server_setauthorizecontroller, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Server, getAuthorizeController, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Server, setTokenController, arginfo_oauth2_server_settokencontroller, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Server, getTokenController, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Server, setResourceController, arginfo_oauth2_server_setresourcecontroller, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Server, getResourceController, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Server, normalizeResponseType, arginfo_oauth2_server_normalizeresponsetype, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_Server, createDefaultAuthorizeController, NULL, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_Server, createDefaultTokenController, NULL, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_Server, getDefaultResponseTypes, NULL, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_Server, createDefaultResourceController, NULL, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_Server, createDefaultUserInfoController, NULL, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_Server, getDefaultGrantTypes, NULL, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_Server, getAccessTokenResponseType, NULL, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_Server, getIdTokenResponseType, NULL, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_Server, getIdTokenTokenResponseType, NULL, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_Server, getScopeUtil, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Server, getDefaultTokenType, NULL, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_Server, createDefaultJwtAccessTokenStorage, NULL, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_Server, createDefaultJwtAccessTokenResponseType, NULL, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_Server, createDefaultAccessTokenResponseType, NULL, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_Server, createDefaultIdTokenResponseType, NULL, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_Server, createDefaultIdTokenTokenResponseType, NULL, ZEND_ACC_PROTECTED)
	PHP_FE_END
};
