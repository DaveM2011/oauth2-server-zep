
extern zend_class_entry *oauth2_response_ce;

ZEPHIR_INIT_CLASS(OAuth2_Response);

PHP_METHOD(OAuth2_Response, __construct);
PHP_METHOD(OAuth2_Response, __toString);
PHP_METHOD(OAuth2_Response, buildHeader);
PHP_METHOD(OAuth2_Response, getStatusCode);
PHP_METHOD(OAuth2_Response, setStatusCode);
PHP_METHOD(OAuth2_Response, getStatusText);
PHP_METHOD(OAuth2_Response, getParameters);
PHP_METHOD(OAuth2_Response, setParameters);
PHP_METHOD(OAuth2_Response, addParameters);
PHP_METHOD(OAuth2_Response, getParameter);
PHP_METHOD(OAuth2_Response, setParameter);
PHP_METHOD(OAuth2_Response, setHttpHeaders);
PHP_METHOD(OAuth2_Response, setHttpHeader);
PHP_METHOD(OAuth2_Response, addHttpHeaders);
PHP_METHOD(OAuth2_Response, getHttpHeaders);
PHP_METHOD(OAuth2_Response, getHttpHeader);
PHP_METHOD(OAuth2_Response, getResponseBody);
PHP_METHOD(OAuth2_Response, send);
PHP_METHOD(OAuth2_Response, setError);
PHP_METHOD(OAuth2_Response, setRedirect);
PHP_METHOD(OAuth2_Response, isInvalid);
PHP_METHOD(OAuth2_Response, isInformational);
PHP_METHOD(OAuth2_Response, isSuccessful);
PHP_METHOD(OAuth2_Response, isRedirection);
PHP_METHOD(OAuth2_Response, isClientError);
PHP_METHOD(OAuth2_Response, isServerError);
PHP_METHOD(OAuth2_Response, getHttpHeadersAsString);
PHP_METHOD(OAuth2_Response, beautifyHeaderName);
PHP_METHOD(OAuth2_Response, beautifyCallback);
zend_object *zephir_init_properties_OAuth2_Response(zend_class_entry *class_type TSRMLS_DC);
void zephir_init_static_properties_OAuth2_Response(TSRMLS_D);

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_response___construct, 0, 0, 0)
	ZEND_ARG_ARRAY_INFO(0, parameters, 1)
	ZEND_ARG_INFO(0, statusCode)
	ZEND_ARG_ARRAY_INFO(0, headers, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_response_buildheader, 0, 0, 2)
	ZEND_ARG_INFO(0, name)
	ZEND_ARG_INFO(0, value)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_response_setstatuscode, 0, 0, 1)
	ZEND_ARG_INFO(0, statusCode)
	ZEND_ARG_INFO(0, text)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_response_setparameters, 0, 0, 1)
	ZEND_ARG_ARRAY_INFO(0, parameters, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_response_addparameters, 0, 0, 1)
	ZEND_ARG_ARRAY_INFO(0, parameters, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_response_getparameter, 0, 0, 1)
	ZEND_ARG_INFO(0, name)
	ZEND_ARG_INFO(0, _default)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_response_setparameter, 0, 0, 2)
	ZEND_ARG_INFO(0, name)
	ZEND_ARG_INFO(0, value)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_response_sethttpheaders, 0, 0, 1)
	ZEND_ARG_ARRAY_INFO(0, httpHeaders, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_response_sethttpheader, 0, 0, 2)
	ZEND_ARG_INFO(0, name)
	ZEND_ARG_INFO(0, value)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_response_addhttpheaders, 0, 0, 1)
	ZEND_ARG_ARRAY_INFO(0, httpHeaders, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_response_gethttpheader, 0, 0, 1)
	ZEND_ARG_INFO(0, name)
	ZEND_ARG_INFO(0, _default)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_response_getresponsebody, 0, 0, 0)
	ZEND_ARG_INFO(0, format)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_response_send, 0, 0, 0)
	ZEND_ARG_INFO(0, format)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_response_seterror, 0, 0, 2)
	ZEND_ARG_INFO(0, statusCode)
	ZEND_ARG_INFO(0, error)
	ZEND_ARG_INFO(0, errorDescription)
	ZEND_ARG_INFO(0, errorUri)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_response_setredirect, 0, 0, 2)
	ZEND_ARG_INFO(0, statusCode)
	ZEND_ARG_INFO(0, url)
	ZEND_ARG_INFO(0, state)
	ZEND_ARG_INFO(0, error)
	ZEND_ARG_INFO(0, errorDescription)
	ZEND_ARG_INFO(0, errorUri)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_response_gethttpheadersasstring, 0, 0, 1)
	ZEND_ARG_INFO(0, headers)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_response_beautifyheadername, 0, 0, 1)
	ZEND_ARG_INFO(0, name)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_response_beautifycallback, 0, 0, 1)
	ZEND_ARG_INFO(0, match)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(oauth2_response_method_entry) {
	PHP_ME(OAuth2_Response, __construct, arginfo_oauth2_response___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(OAuth2_Response, __toString, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, buildHeader, arginfo_oauth2_response_buildheader, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_Response, getStatusCode, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, setStatusCode, arginfo_oauth2_response_setstatuscode, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, getStatusText, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, getParameters, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, setParameters, arginfo_oauth2_response_setparameters, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, addParameters, arginfo_oauth2_response_addparameters, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, getParameter, arginfo_oauth2_response_getparameter, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, setParameter, arginfo_oauth2_response_setparameter, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, setHttpHeaders, arginfo_oauth2_response_sethttpheaders, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, setHttpHeader, arginfo_oauth2_response_sethttpheader, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, addHttpHeaders, arginfo_oauth2_response_addhttpheaders, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, getHttpHeaders, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, getHttpHeader, arginfo_oauth2_response_gethttpheader, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, getResponseBody, arginfo_oauth2_response_getresponsebody, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, send, arginfo_oauth2_response_send, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, setError, arginfo_oauth2_response_seterror, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, setRedirect, arginfo_oauth2_response_setredirect, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, isInvalid, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, isInformational, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, isSuccessful, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, isRedirection, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, isClientError, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, isServerError, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Response, getHttpHeadersAsString, arginfo_oauth2_response_gethttpheadersasstring, ZEND_ACC_PRIVATE)
	PHP_ME(OAuth2_Response, beautifyHeaderName, arginfo_oauth2_response_beautifyheadername, ZEND_ACC_PRIVATE)
	PHP_ME(OAuth2_Response, beautifyCallback, arginfo_oauth2_response_beautifycallback, ZEND_ACC_PRIVATE)
	PHP_FE_END
};
