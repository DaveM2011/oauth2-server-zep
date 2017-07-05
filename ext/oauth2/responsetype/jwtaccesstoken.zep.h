
extern zend_class_entry *oauth2_responsetype_jwtaccesstoken_ce;

ZEPHIR_INIT_CLASS(OAuth2_ResponseType_JwtAccessToken);

PHP_METHOD(OAuth2_ResponseType_JwtAccessToken, __construct);
PHP_METHOD(OAuth2_ResponseType_JwtAccessToken, createAccessToken);
PHP_METHOD(OAuth2_ResponseType_JwtAccessToken, encodeToken);
PHP_METHOD(OAuth2_ResponseType_JwtAccessToken, createPayload);

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_responsetype_jwtaccesstoken___construct, 0, 0, 0)
	ZEND_ARG_OBJ_INFO(0, publicKeyStorage, OAuth2\\Storage\\PublicKeyInterface, 1)
	ZEND_ARG_OBJ_INFO(0, tokenStorage, OAuth2\\Storage\\AccessTokenInterface, 1)
	ZEND_ARG_OBJ_INFO(0, refreshStorage, OAuth2\\Storage\\RefreshTokenInterface, 1)
	ZEND_ARG_ARRAY_INFO(0, config, 1)
	ZEND_ARG_OBJ_INFO(0, encryptionUtil, OAuth2\\Encryption\\EncryptionInterface, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_responsetype_jwtaccesstoken_createaccesstoken, 0, 0, 2)
	ZEND_ARG_INFO(0, client_id)
	ZEND_ARG_INFO(0, user_id)
	ZEND_ARG_INFO(0, scope)
	ZEND_ARG_INFO(0, includeRefreshToken)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_responsetype_jwtaccesstoken_encodetoken, 0, 0, 1)
	ZEND_ARG_ARRAY_INFO(0, token, 0)
	ZEND_ARG_INFO(0, client_id)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_responsetype_jwtaccesstoken_createpayload, 0, 0, 2)
	ZEND_ARG_INFO(0, client_id)
	ZEND_ARG_INFO(0, user_id)
	ZEND_ARG_INFO(0, scope)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(oauth2_responsetype_jwtaccesstoken_method_entry) {
	PHP_ME(OAuth2_ResponseType_JwtAccessToken, __construct, arginfo_oauth2_responsetype_jwtaccesstoken___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(OAuth2_ResponseType_JwtAccessToken, createAccessToken, arginfo_oauth2_responsetype_jwtaccesstoken_createaccesstoken, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_ResponseType_JwtAccessToken, encodeToken, arginfo_oauth2_responsetype_jwtaccesstoken_encodetoken, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_ResponseType_JwtAccessToken, createPayload, arginfo_oauth2_responsetype_jwtaccesstoken_createpayload, ZEND_ACC_PROTECTED)
	PHP_FE_END
};
