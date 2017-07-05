
extern zend_class_entry *oauth2_controller_authorizecontroller_ce;

ZEPHIR_INIT_CLASS(OAuth2_Controller_AuthorizeController);

PHP_METHOD(OAuth2_Controller_AuthorizeController, __construct);
PHP_METHOD(OAuth2_Controller_AuthorizeController, handleAuthorizeRequest);
PHP_METHOD(OAuth2_Controller_AuthorizeController, setNotAuthorizedResponse);
PHP_METHOD(OAuth2_Controller_AuthorizeController, buildAuthorizeParameters);
PHP_METHOD(OAuth2_Controller_AuthorizeController, validateAuthorizeRequest);
PHP_METHOD(OAuth2_Controller_AuthorizeController, buildUri);
PHP_METHOD(OAuth2_Controller_AuthorizeController, getValidResponseTypes);
PHP_METHOD(OAuth2_Controller_AuthorizeController, validateRedirectUri);
PHP_METHOD(OAuth2_Controller_AuthorizeController, getScope);
PHP_METHOD(OAuth2_Controller_AuthorizeController, getState);
PHP_METHOD(OAuth2_Controller_AuthorizeController, getClientId);
PHP_METHOD(OAuth2_Controller_AuthorizeController, getRedirectUri);
PHP_METHOD(OAuth2_Controller_AuthorizeController, getResponseType);

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_controller_authorizecontroller___construct, 0, 0, 1)
	ZEND_ARG_OBJ_INFO(0, clientStorage, OAuth2\\Storage\\ClientInterface, 0)
	ZEND_ARG_ARRAY_INFO(0, responseTypes, 1)
	ZEND_ARG_ARRAY_INFO(0, config, 1)
	ZEND_ARG_OBJ_INFO(0, scopeUtil, OAuth2\\ScopeInterface, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_controller_authorizecontroller_handleauthorizerequest, 0, 0, 3)
	ZEND_ARG_OBJ_INFO(0, request, OAuth2\\RequestInterface, 0)
	ZEND_ARG_OBJ_INFO(0, response, OAuth2\\ResponseInterface, 0)
	ZEND_ARG_INFO(0, is_authorized)
	ZEND_ARG_INFO(0, user_id)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_controller_authorizecontroller_setnotauthorizedresponse, 0, 0, 3)
	ZEND_ARG_OBJ_INFO(0, request, OAuth2\\RequestInterface, 0)
	ZEND_ARG_OBJ_INFO(0, response, OAuth2\\ResponseInterface, 0)
	ZEND_ARG_INFO(0, redirect_uri)
	ZEND_ARG_INFO(0, user_id)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_controller_authorizecontroller_buildauthorizeparameters, 0, 0, 3)
	ZEND_ARG_INFO(0, request)
	ZEND_ARG_INFO(0, response)
	ZEND_ARG_INFO(0, user_id)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_controller_authorizecontroller_validateauthorizerequest, 0, 0, 2)
	ZEND_ARG_OBJ_INFO(0, request, OAuth2\\RequestInterface, 0)
	ZEND_ARG_OBJ_INFO(0, response, OAuth2\\ResponseInterface, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_controller_authorizecontroller_builduri, 0, 0, 2)
	ZEND_ARG_INFO(0, uri)
	ZEND_ARG_INFO(0, params)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_controller_authorizecontroller_validateredirecturi, 0, 0, 2)
	ZEND_ARG_INFO(0, inputUri)
	ZEND_ARG_INFO(0, registeredUriString)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(oauth2_controller_authorizecontroller_method_entry) {
	PHP_ME(OAuth2_Controller_AuthorizeController, __construct, arginfo_oauth2_controller_authorizecontroller___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(OAuth2_Controller_AuthorizeController, handleAuthorizeRequest, arginfo_oauth2_controller_authorizecontroller_handleauthorizerequest, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Controller_AuthorizeController, setNotAuthorizedResponse, arginfo_oauth2_controller_authorizecontroller_setnotauthorizedresponse, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_Controller_AuthorizeController, buildAuthorizeParameters, arginfo_oauth2_controller_authorizecontroller_buildauthorizeparameters, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_Controller_AuthorizeController, validateAuthorizeRequest, arginfo_oauth2_controller_authorizecontroller_validateauthorizerequest, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Controller_AuthorizeController, buildUri, arginfo_oauth2_controller_authorizecontroller_builduri, ZEND_ACC_PRIVATE)
	PHP_ME(OAuth2_Controller_AuthorizeController, getValidResponseTypes, NULL, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_Controller_AuthorizeController, validateRedirectUri, arginfo_oauth2_controller_authorizecontroller_validateredirecturi, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_Controller_AuthorizeController, getScope, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Controller_AuthorizeController, getState, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Controller_AuthorizeController, getClientId, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Controller_AuthorizeController, getRedirectUri, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Controller_AuthorizeController, getResponseType, NULL, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
