
extern zend_class_entry *oauth2_encryption_jwt_ce;

ZEPHIR_INIT_CLASS(OAuth2_Encryption_Jwt);

PHP_METHOD(OAuth2_Encryption_Jwt, encode);
PHP_METHOD(OAuth2_Encryption_Jwt, decode);
PHP_METHOD(OAuth2_Encryption_Jwt, verifySignature);
PHP_METHOD(OAuth2_Encryption_Jwt, sign);
PHP_METHOD(OAuth2_Encryption_Jwt, generateRSASignature);
PHP_METHOD(OAuth2_Encryption_Jwt, urlSafeB64Encode);
PHP_METHOD(OAuth2_Encryption_Jwt, urlSafeB64Decode);
PHP_METHOD(OAuth2_Encryption_Jwt, generateJwtHeader);
PHP_METHOD(OAuth2_Encryption_Jwt, hash_equals);

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_encryption_jwt_encode, 0, 0, 2)
	ZEND_ARG_INFO(0, payload)
	ZEND_ARG_INFO(0, key)
	ZEND_ARG_INFO(0, algo)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_encryption_jwt_decode, 0, 0, 1)
	ZEND_ARG_INFO(0, jwt)
	ZEND_ARG_INFO(0, key)
	ZEND_ARG_INFO(0, verify)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_encryption_jwt_verifysignature, 0, 0, 3)
	ZEND_ARG_INFO(0, signature)
	ZEND_ARG_INFO(0, input)
	ZEND_ARG_INFO(0, key)
	ZEND_ARG_INFO(0, algo)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_encryption_jwt_sign, 0, 0, 2)
	ZEND_ARG_INFO(0, input)
	ZEND_ARG_INFO(0, key)
	ZEND_ARG_INFO(0, algo)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_encryption_jwt_generatersasignature, 0, 0, 3)
	ZEND_ARG_INFO(0, input)
	ZEND_ARG_INFO(0, key)
	ZEND_ARG_INFO(0, algo)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_encryption_jwt_urlsafeb64encode, 0, 0, 1)
	ZEND_ARG_INFO(0, data)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_encryption_jwt_urlsafeb64decode, 0, 0, 1)
	ZEND_ARG_INFO(0, b64)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_encryption_jwt_generatejwtheader, 0, 0, 2)
	ZEND_ARG_INFO(0, payload)
	ZEND_ARG_INFO(0, algorithm)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_encryption_jwt_hash_equals, 0, 0, 2)
	ZEND_ARG_INFO(0, a)
	ZEND_ARG_INFO(0, b)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(oauth2_encryption_jwt_method_entry) {
	PHP_ME(OAuth2_Encryption_Jwt, encode, arginfo_oauth2_encryption_jwt_encode, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Encryption_Jwt, decode, arginfo_oauth2_encryption_jwt_decode, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Encryption_Jwt, verifySignature, arginfo_oauth2_encryption_jwt_verifysignature, ZEND_ACC_PRIVATE)
	PHP_ME(OAuth2_Encryption_Jwt, sign, arginfo_oauth2_encryption_jwt_sign, ZEND_ACC_PRIVATE)
	PHP_ME(OAuth2_Encryption_Jwt, generateRSASignature, arginfo_oauth2_encryption_jwt_generatersasignature, ZEND_ACC_PRIVATE)
	PHP_ME(OAuth2_Encryption_Jwt, urlSafeB64Encode, arginfo_oauth2_encryption_jwt_urlsafeb64encode, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Encryption_Jwt, urlSafeB64Decode, arginfo_oauth2_encryption_jwt_urlsafeb64decode, ZEND_ACC_PUBLIC)
	PHP_ME(OAuth2_Encryption_Jwt, generateJwtHeader, arginfo_oauth2_encryption_jwt_generatejwtheader, ZEND_ACC_PROTECTED)
	PHP_ME(OAuth2_Encryption_Jwt, hash_equals, arginfo_oauth2_encryption_jwt_hash_equals, ZEND_ACC_PROTECTED)
	PHP_FE_END
};
