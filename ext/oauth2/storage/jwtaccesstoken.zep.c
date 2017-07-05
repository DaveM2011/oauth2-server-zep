
#ifdef HAVE_CONFIG_H
#include "../../ext_config.h"
#endif

#include <php.h>
#include "../../php_ext.h"
#include "../../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/object.h"
#include "kernel/memory.h"
#include "kernel/fcall.h"
#include "kernel/operators.h"
#include "kernel/array.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/exception.h"


/**
 * JWT Access token
 * @author Brent Shaffer <bshafs at gmail dot com>
 */
ZEPHIR_INIT_CLASS(OAuth2_Storage_JwtAccessToken) {

	ZEPHIR_REGISTER_CLASS(OAuth2\\Storage, JwtAccessToken, oauth2, storage_jwtaccesstoken, oauth2_storage_jwtaccesstoken_method_entry, 0);

	zend_declare_property_null(oauth2_storage_jwtaccesstoken_ce, SL("publicKeyStorage"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_storage_jwtaccesstoken_ce, SL("tokenStorage"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_storage_jwtaccesstoken_ce, SL("encryptionUtil"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_class_implements(oauth2_storage_jwtaccesstoken_ce TSRMLS_CC, 1, oauth2_storage_jwtaccesstokeninterface_ce);
	return SUCCESS;

}

/**
 * @param OAuth2\Encryption\PublicKeyInterface publicKeyStorage the public key encryption to use
 * @param OAuth2\Storage\AccessTokenInterfacetokenStorage OPTIONAL persist the access token to another storage. This is useful if
 * you want to retain access token grant information somewhere, but
 * is not necessary when using this grant type.
 * @param OAuth2\Encryption\EncryptionInterface encryptionUtil   OPTIONAL class to use for "encode" and "decode" functions.
 */
PHP_METHOD(OAuth2_Storage_JwtAccessToken, __construct) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *publicKeyStorage, publicKeyStorage_sub, *tokenStorage = NULL, tokenStorage_sub, *encryptionUtil = NULL, encryptionUtil_sub, __$null;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&publicKeyStorage_sub);
	ZVAL_UNDEF(&tokenStorage_sub);
	ZVAL_UNDEF(&encryptionUtil_sub);
	ZVAL_NULL(&__$null);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 2, &publicKeyStorage, &tokenStorage, &encryptionUtil);

	if (!tokenStorage) {
		tokenStorage = &tokenStorage_sub;
		tokenStorage = &__$null;
	}
	if (!encryptionUtil) {
		encryptionUtil = &encryptionUtil_sub;
		ZEPHIR_CPY_WRT(encryptionUtil, &__$null);
	} else {
		ZEPHIR_SEPARATE_PARAM(encryptionUtil);
	}


	zephir_update_property_zval(this_ptr, SL("publicKeyStorage"), publicKeyStorage);
	zephir_update_property_zval(this_ptr, SL("tokenStorage"), tokenStorage);
	if (Z_TYPE_P(encryptionUtil) == IS_NULL) {
		ZEPHIR_INIT_NVAR(encryptionUtil);
		object_init_ex(encryptionUtil, oauth2_encryption_jwt_ce);
		if (zephir_has_constructor(encryptionUtil TSRMLS_CC)) {
			ZEPHIR_CALL_METHOD(NULL, encryptionUtil, "__construct", NULL, 0);
			zephir_check_call_status();
		}
	}
	zephir_update_property_zval(this_ptr, SL("encryptionUtil"), encryptionUtil);
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(OAuth2_Storage_JwtAccessToken, getAccessToken) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *oauth_token_param = NULL, tokenData, client_id, public_key, algorithm, _0, _1, _2, _3, _4, _5;
	zval oauth_token;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&oauth_token);
	ZVAL_UNDEF(&tokenData);
	ZVAL_UNDEF(&client_id);
	ZVAL_UNDEF(&public_key);
	ZVAL_UNDEF(&algorithm);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_5);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &oauth_token_param);

	if (UNEXPECTED(Z_TYPE_P(oauth_token_param) != IS_STRING && Z_TYPE_P(oauth_token_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'oauth_token' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (EXPECTED(Z_TYPE_P(oauth_token_param) == IS_STRING)) {
		zephir_get_strval(&oauth_token, oauth_token_param);
	} else {
		ZEPHIR_INIT_VAR(&oauth_token);
		ZVAL_EMPTY_STRING(&oauth_token);
	}


	zephir_read_property(&_0, this_ptr, SL("encryptionUtil"), PH_NOISY_CC | PH_READONLY);
	ZVAL_NULL(&_1);
	ZVAL_BOOL(&_2, 0);
	ZEPHIR_CALL_METHOD(&tokenData, &_0, "decode", NULL, 0, &oauth_token, &_1, &_2);
	zephir_check_call_status();
	if (!(zephir_is_true(&tokenData))) {
		RETURN_MM_BOOL(0);
	}
	if (zephir_array_isset_string(&tokenData, SL("aud"))) {
		ZEPHIR_OBS_VAR(&client_id);
		zephir_array_fetch_string(&client_id, &tokenData, SL("aud"), PH_NOISY, "oauth2/storage/jwtaccesstoken.zep", 46 TSRMLS_CC);
	} else {
		ZEPHIR_INIT_NVAR(&client_id);
		ZVAL_NULL(&client_id);
	}
	zephir_read_property(&_1, this_ptr, SL("publicKeyStorage"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&public_key, &_1, "getpublickey", NULL, 0, &client_id);
	zephir_check_call_status();
	zephir_read_property(&_2, this_ptr, SL("publicKeyStorage"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&algorithm, &_2, "getencryptionalgorithm", NULL, 0, &client_id);
	zephir_check_call_status();
	zephir_read_property(&_3, this_ptr, SL("encryptionUtil"), PH_NOISY_CC | PH_READONLY);
	ZVAL_BOOL(&_5, 1);
	ZEPHIR_CALL_METHOD(&_4, &_3, "decode", NULL, 0, &oauth_token, &public_key, &_5);
	zephir_check_call_status();
	if (ZEPHIR_IS_FALSE_IDENTICAL(&_4)) {
		RETURN_MM_BOOL(0);
	}
	ZEPHIR_RETURN_CALL_METHOD(this_ptr, "convertjwttooauth2", NULL, 0, &tokenData);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(OAuth2_Storage_JwtAccessToken, setAccessToken) {

	zend_long expires, ZEPHIR_LAST_CALL_STATUS;
	zval *oauth_token_param = NULL, *client_id_param = NULL, *user_id_param = NULL, *expires_param = NULL, *scope_param = NULL, _0, _1$$3, _2$$3;
	zval oauth_token, client_id, user_id, scope;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&oauth_token);
	ZVAL_UNDEF(&client_id);
	ZVAL_UNDEF(&user_id);
	ZVAL_UNDEF(&scope);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_2$$3);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 4, 1, &oauth_token_param, &client_id_param, &user_id_param, &expires_param, &scope_param);

	if (UNEXPECTED(Z_TYPE_P(oauth_token_param) != IS_STRING && Z_TYPE_P(oauth_token_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'oauth_token' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (EXPECTED(Z_TYPE_P(oauth_token_param) == IS_STRING)) {
		zephir_get_strval(&oauth_token, oauth_token_param);
	} else {
		ZEPHIR_INIT_VAR(&oauth_token);
		ZVAL_EMPTY_STRING(&oauth_token);
	}
	if (UNEXPECTED(Z_TYPE_P(client_id_param) != IS_STRING && Z_TYPE_P(client_id_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'client_id' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (EXPECTED(Z_TYPE_P(client_id_param) == IS_STRING)) {
		zephir_get_strval(&client_id, client_id_param);
	} else {
		ZEPHIR_INIT_VAR(&client_id);
		ZVAL_EMPTY_STRING(&client_id);
	}
	if (UNEXPECTED(Z_TYPE_P(user_id_param) != IS_STRING && Z_TYPE_P(user_id_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'user_id' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (EXPECTED(Z_TYPE_P(user_id_param) == IS_STRING)) {
		zephir_get_strval(&user_id, user_id_param);
	} else {
		ZEPHIR_INIT_VAR(&user_id);
		ZVAL_EMPTY_STRING(&user_id);
	}
	expires = zephir_get_intval(expires_param);
	if (!scope_param) {
		ZEPHIR_INIT_VAR(&scope);
		ZVAL_STRING(&scope, "");
	} else {
	if (UNEXPECTED(Z_TYPE_P(scope_param) != IS_STRING && Z_TYPE_P(scope_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'scope' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (EXPECTED(Z_TYPE_P(scope_param) == IS_STRING)) {
		zephir_get_strval(&scope, scope_param);
	} else {
		ZEPHIR_INIT_VAR(&scope);
		ZVAL_EMPTY_STRING(&scope);
	}
	}


	zephir_read_property(&_0, this_ptr, SL("tokenStorage"), PH_NOISY_CC | PH_READONLY);
	if (zephir_is_true(&_0)) {
		zephir_read_property(&_1$$3, this_ptr, SL("tokenStorage"), PH_NOISY_CC | PH_READONLY);
		ZVAL_LONG(&_2$$3, expires);
		ZEPHIR_CALL_METHOD(NULL, &_1$$3, "setaccesstoken", NULL, 0, &oauth_token, &client_id, &user_id, &_2$$3, &scope);
		zephir_check_call_status();
	}
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(OAuth2_Storage_JwtAccessToken, convertJwtToOAuth2) {

	zend_string *_2;
	zend_ulong _1;
	zval *tokenData_param = NULL, keyMapping, jwtKey, oauth2Key, *_0, _3$$4;
	zval tokenData;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&tokenData);
	ZVAL_UNDEF(&keyMapping);
	ZVAL_UNDEF(&jwtKey);
	ZVAL_UNDEF(&oauth2Key);
	ZVAL_UNDEF(&_3$$4);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &tokenData_param);

	zephir_get_arrval(&tokenData, tokenData_param);


	ZEPHIR_INIT_VAR(&keyMapping);
	zephir_create_array(&keyMapping, 3, 0 TSRMLS_CC);
	add_assoc_stringl_ex(&keyMapping, SL("aud"), SL("client_id"));
	add_assoc_stringl_ex(&keyMapping, SL("exp"), SL("expires"));
	add_assoc_stringl_ex(&keyMapping, SL("sub"), SL("user_id"));
	zephir_is_iterable(&keyMapping, 0, "oauth2/storage/jwtaccesstoken.zep", 84);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&keyMapping), _1, _2, _0)
	{
		ZEPHIR_INIT_NVAR(&jwtKey);
		if (_2 != NULL) { 
			ZVAL_STR_COPY(&jwtKey, _2);
		} else {
			ZVAL_LONG(&jwtKey, _1);
		}
		ZEPHIR_INIT_NVAR(&oauth2Key);
		ZVAL_COPY(&oauth2Key, _0);
		if (zephir_array_isset(&tokenData, &jwtKey)) {
			zephir_array_fetch(&_3$$4, &tokenData, &jwtKey, PH_NOISY | PH_READONLY, "oauth2/storage/jwtaccesstoken.zep", 79 TSRMLS_CC);
			zephir_array_update_zval(&tokenData, &oauth2Key, &_3$$4, PH_COPY | PH_SEPARATE);
			zephir_array_unset(&tokenData, &jwtKey, PH_SEPARATE);
		}
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&oauth2Key);
	ZEPHIR_INIT_NVAR(&jwtKey);
	RETURN_CTOR(&tokenData);

}

