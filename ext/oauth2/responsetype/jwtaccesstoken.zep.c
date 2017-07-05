
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
#include "kernel/array.h"
#include "kernel/fcall.h"
#include "kernel/operators.h"
#include "kernel/time.h"


/**
 * @author Brent Shaffer <bshafs at gmail dot com>
 */
ZEPHIR_INIT_CLASS(OAuth2_ResponseType_JwtAccessToken) {

	ZEPHIR_REGISTER_CLASS_EX(OAuth2\\ResponseType, JwtAccessToken, oauth2, responsetype_jwtaccesstoken, oauth2_responsetype_accesstoken_ce, oauth2_responsetype_jwtaccesstoken_method_entry, 0);

	zend_declare_property_null(oauth2_responsetype_jwtaccesstoken_ce, SL("publicKeyStorage"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_responsetype_jwtaccesstoken_ce, SL("encryptionUtil"), ZEND_ACC_PROTECTED TSRMLS_CC);

	return SUCCESS;

}

/**
 * @param PublicKeyInterface          $publicKeyStorage -
 * @param AccessTokenStorageInterface $tokenStorage     -
 * @param RefreshTokenInterface       $refreshStorage   -
 * @param array                       $config           - array with key store_encrypted_token_string (bool true)
 *                                                        whether the entire encrypted string is stored,
 *                                                        or just the token ID is stored
 * @param EncryptionInterface         $encryptionUtil   -
 */
PHP_METHOD(OAuth2_ResponseType_JwtAccessToken, __construct) {

	zend_class_entry *_2$$3 = NULL;
	zephir_fcall_cache_entry *_3 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval config, _1;
	zval *publicKeyStorage = NULL, publicKeyStorage_sub, *tokenStorage = NULL, tokenStorage_sub, *refreshStorage = NULL, refreshStorage_sub, *config_param = NULL, *encryptionUtil = NULL, encryptionUtil_sub, __$true, __$null, _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&publicKeyStorage_sub);
	ZVAL_UNDEF(&tokenStorage_sub);
	ZVAL_UNDEF(&refreshStorage_sub);
	ZVAL_UNDEF(&encryptionUtil_sub);
	ZVAL_BOOL(&__$true, 1);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&config);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 5, &publicKeyStorage, &tokenStorage, &refreshStorage, &config_param, &encryptionUtil);

	if (!publicKeyStorage) {
		publicKeyStorage = &publicKeyStorage_sub;
		publicKeyStorage = &__$null;
	}
	if (!tokenStorage) {
		tokenStorage = &tokenStorage_sub;
		ZEPHIR_CPY_WRT(tokenStorage, &__$null);
	} else {
		ZEPHIR_SEPARATE_PARAM(tokenStorage);
	}
	if (!refreshStorage) {
		refreshStorage = &refreshStorage_sub;
		refreshStorage = &__$null;
	}
	if (!config_param) {
		ZEPHIR_INIT_VAR(&config);
		array_init(&config);
	} else {
		zephir_get_arrval(&config, config_param);
	}
	if (!encryptionUtil) {
		encryptionUtil = &encryptionUtil_sub;
		ZEPHIR_CPY_WRT(encryptionUtil, &__$null);
	} else {
		ZEPHIR_SEPARATE_PARAM(encryptionUtil);
	}


	zephir_update_property_zval(this_ptr, SL("publicKeyStorage"), publicKeyStorage);
	ZEPHIR_INIT_VAR(&_0);
	ZEPHIR_INIT_VAR(&_1);
	zephir_create_array(&_1, 2, 0 TSRMLS_CC);
	zephir_array_update_string(&_1, SL("store_encrypted_token_string"), &__$true, PH_COPY | PH_SEPARATE);
	add_assoc_stringl_ex(&_1, SL("issuer"), SL(""));
	zephir_fast_array_merge(&_0, &_1, &config TSRMLS_CC);
	ZEPHIR_CPY_WRT(&config, &_0);
	if (Z_TYPE_P(tokenStorage) == IS_NULL) {
		ZEPHIR_INIT_NVAR(tokenStorage);
		if (!_2$$3) {
		_2$$3 = zephir_fetch_class_str_ex(SL("OAuth2\\Storage\\Memory"), ZEND_FETCH_CLASS_AUTO);
		}
		object_init_ex(tokenStorage, _2$$3);
		if (zephir_has_constructor(tokenStorage TSRMLS_CC)) {
			ZEPHIR_CALL_METHOD(NULL, tokenStorage, "__construct", NULL, 0);
			zephir_check_call_status();
		}
	}
	if (Z_TYPE_P(encryptionUtil) == IS_NULL) {
		ZEPHIR_INIT_NVAR(encryptionUtil);
		object_init_ex(encryptionUtil, oauth2_encryption_jwt_ce);
		if (zephir_has_constructor(encryptionUtil TSRMLS_CC)) {
			ZEPHIR_CALL_METHOD(NULL, encryptionUtil, "__construct", NULL, 0);
			zephir_check_call_status();
		}
	}
	zephir_update_property_zval(this_ptr, SL("encryptionUtil"), encryptionUtil);
	ZEPHIR_CALL_PARENT(NULL, oauth2_responsetype_jwtaccesstoken_ce, getThis(), "__construct", &_3, 0, tokenStorage, refreshStorage, &config);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

/**
 * Handle the creation of access token, also issue refresh token if supported / desirable.
 *
 * @param mixed  $client_id           - Client identifier related to the access token.
 * @param mixed  $user_id             - User ID associated with the access token
 * @param string $scope               - (optional) Scopes to be stored in space-separated string.
 * @param bool   $includeRefreshToken - If true, a new refresh_token will be added to the response
 * @return array                      - The access token
 *
 * @see http://tools.ietf.org/html/rfc6749#section-5
 * @ingroup oauth2_section_5
 */
PHP_METHOD(OAuth2_ResponseType_JwtAccessToken, createAccessToken) {

	zend_bool _12;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *client_id, client_id_sub, *user_id, user_id_sub, *scope = NULL, scope_sub, *includeRefreshToken = NULL, includeRefreshToken_sub, __$null, __$true, payload, access_token, token_to_store, token, _0, _1, _2, _3, _4, _5, _6, _7, _8, _9, _10, _11, _13, refresh_token$$3, expires$$3, _14$$3, _15$$3, _19$$3, _16$$4, _17$$4, _18$$4;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&client_id_sub);
	ZVAL_UNDEF(&user_id_sub);
	ZVAL_UNDEF(&scope_sub);
	ZVAL_UNDEF(&includeRefreshToken_sub);
	ZVAL_NULL(&__$null);
	ZVAL_BOOL(&__$true, 1);
	ZVAL_UNDEF(&payload);
	ZVAL_UNDEF(&access_token);
	ZVAL_UNDEF(&token_to_store);
	ZVAL_UNDEF(&token);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_5);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_7);
	ZVAL_UNDEF(&_8);
	ZVAL_UNDEF(&_9);
	ZVAL_UNDEF(&_10);
	ZVAL_UNDEF(&_11);
	ZVAL_UNDEF(&_13);
	ZVAL_UNDEF(&refresh_token$$3);
	ZVAL_UNDEF(&expires$$3);
	ZVAL_UNDEF(&_14$$3);
	ZVAL_UNDEF(&_15$$3);
	ZVAL_UNDEF(&_19$$3);
	ZVAL_UNDEF(&_16$$4);
	ZVAL_UNDEF(&_17$$4);
	ZVAL_UNDEF(&_18$$4);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 2, &client_id, &user_id, &scope, &includeRefreshToken);

	if (!scope) {
		scope = &scope_sub;
		scope = &__$null;
	}
	if (!includeRefreshToken) {
		includeRefreshToken = &includeRefreshToken_sub;
		includeRefreshToken = &__$true;
	}


	ZEPHIR_CALL_METHOD(&payload, this_ptr, "createpayload", NULL, 0, client_id, user_id, scope);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(&access_token, this_ptr, "encodetoken", NULL, 0, &payload, client_id);
	zephir_check_call_status();
	zephir_read_property(&_0, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_1, &_0, SL("store_encrypted_token_string"), PH_NOISY | PH_READONLY, "oauth2/responsetype/jwtaccesstoken.zep", 70 TSRMLS_CC);
	if (zephir_is_true(&_1)) {
		ZEPHIR_CPY_WRT(&token_to_store, &access_token);
	} else {
		ZEPHIR_OBS_NVAR(&token_to_store);
		zephir_array_fetch_string(&token_to_store, &payload, SL("id"), PH_NOISY, "oauth2/responsetype/jwtaccesstoken.zep", 70 TSRMLS_CC);
	}
	zephir_read_property(&_2, this_ptr, SL("tokenStorage"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_VAR(&_3);
	zephir_read_property(&_4, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_5, &_4, SL("access_lifetime"), PH_NOISY | PH_READONLY, "oauth2/responsetype/jwtaccesstoken.zep", 71 TSRMLS_CC);
	if (zephir_is_true(&_5)) {
		ZEPHIR_INIT_VAR(&_6);
		zephir_time(&_6);
		zephir_read_property(&_7, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_8, &_7, SL("access_lifetime"), PH_NOISY | PH_READONLY, "oauth2/responsetype/jwtaccesstoken.zep", 71 TSRMLS_CC);
		ZEPHIR_INIT_NVAR(&_3);
		zephir_add_function(&_3, &_6, &_8);
	} else {
		ZEPHIR_INIT_NVAR(&_3);
		ZVAL_NULL(&_3);
	}
	ZEPHIR_CALL_METHOD(NULL, &_2, "setaccesstoken", NULL, 0, &token_to_store, client_id, user_id, &_3, scope);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&token);
	zephir_create_array(&token, 4, 0 TSRMLS_CC);
	zephir_array_update_string(&token, SL("access_token"), &access_token, PH_COPY | PH_SEPARATE);
	zephir_read_property(&_9, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_OBS_VAR(&_10);
	zephir_array_fetch_string(&_10, &_9, SL("access_lifetime"), PH_NOISY, "oauth2/responsetype/jwtaccesstoken.zep", 76 TSRMLS_CC);
	zephir_array_update_string(&token, SL("expires_in"), &_10, PH_COPY | PH_SEPARATE);
	zephir_read_property(&_11, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_OBS_NVAR(&_10);
	zephir_array_fetch_string(&_10, &_11, SL("token_type"), PH_NOISY, "oauth2/responsetype/jwtaccesstoken.zep", 77 TSRMLS_CC);
	zephir_array_update_string(&token, SL("token_type"), &_10, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&token, SL("scope"), scope, PH_COPY | PH_SEPARATE);
	_12 = zephir_is_true(includeRefreshToken);
	if (_12) {
		zephir_read_property(&_13, this_ptr, SL("refreshStorage"), PH_NOISY_CC | PH_READONLY);
		_12 = zephir_is_true(&_13);
	}
	if (_12) {
		ZEPHIR_INIT_VAR(&expires$$3);
		ZVAL_LONG(&expires$$3, 0);
		ZEPHIR_CALL_METHOD(&refresh_token$$3, this_ptr, "generaterefreshtoken", NULL, 0);
		zephir_check_call_status();
		zephir_read_property(&_14$$3, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_15$$3, &_14$$3, SL("refresh_token_lifetime"), PH_NOISY | PH_READONLY, "oauth2/responsetype/jwtaccesstoken.zep", 90 TSRMLS_CC);
		if (ZEPHIR_GT_LONG(&_15$$3, 0)) {
			ZEPHIR_INIT_VAR(&_16$$4);
			zephir_time(&_16$$4);
			zephir_read_property(&_17$$4, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
			zephir_array_fetch_string(&_18$$4, &_17$$4, SL("refresh_token_lifetime"), PH_NOISY | PH_READONLY, "oauth2/responsetype/jwtaccesstoken.zep", 91 TSRMLS_CC);
			ZEPHIR_INIT_NVAR(&expires$$3);
			zephir_add_function(&expires$$3, &_16$$4, &_18$$4);
		}
		zephir_read_property(&_19$$3, this_ptr, SL("refreshStorage"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_METHOD(NULL, &_19$$3, "setrefreshtoken", NULL, 0, &refresh_token$$3, client_id, user_id, &expires$$3, scope);
		zephir_check_call_status();
		zephir_array_update_string(&token, SL("refresh_token"), &refresh_token$$3, PH_COPY | PH_SEPARATE);
	}
	RETURN_CCTOR(&token);

}

/**
 * @param array $token
 * @param mixed $client_id
 * @return mixed
 */
PHP_METHOD(OAuth2_ResponseType_JwtAccessToken, encodeToken) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *token_param = NULL, *client_id = NULL, client_id_sub, __$null, private_key, algorithm, _0, _1, _2;
	zval token;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&token);
	ZVAL_UNDEF(&client_id_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&private_key);
	ZVAL_UNDEF(&algorithm);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &token_param, &client_id);

	zephir_get_arrval(&token, token_param);
	if (!client_id) {
		client_id = &client_id_sub;
		client_id = &__$null;
	}


	zephir_read_property(&_0, this_ptr, SL("publicKeyStorage"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&private_key, &_0, "getprivatekey", NULL, 0, client_id);
	zephir_check_call_status();
	zephir_read_property(&_1, this_ptr, SL("publicKeyStorage"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&algorithm, &_1, "getencryptionalgorithm", NULL, 0, client_id);
	zephir_check_call_status();
	zephir_read_property(&_2, this_ptr, SL("encryptionUtil"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_RETURN_CALL_METHOD(&_2, "encode", NULL, 0, &token, &private_key, &algorithm);
	zephir_check_call_status();
	RETURN_MM();

}

/**
 * This function can be used to create custom JWT payloads
 *
 * @param mixed  $client_id           - Client identifier related to the access token.
 * @param mixed  $user_id             - User ID associated with the access token
 * @param string $scope               - (optional) Scopes to be stored in space-separated string.
 * @return array                      - The access token
 */
PHP_METHOD(OAuth2_ResponseType_JwtAccessToken, createPayload) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *client_id, client_id_sub, *user_id, user_id_sub, *scope = NULL, scope_sub, __$null, expires, id, _0, _1, _2, _3, _4, _5;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&client_id_sub);
	ZVAL_UNDEF(&user_id_sub);
	ZVAL_UNDEF(&scope_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&expires);
	ZVAL_UNDEF(&id);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_5);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 1, &client_id, &user_id, &scope);

	if (!scope) {
		scope = &scope_sub;
		scope = &__$null;
	}


	ZEPHIR_INIT_VAR(&_0);
	zephir_time(&_0);
	zephir_read_property(&_1, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_2, &_1, SL("access_lifetime"), PH_NOISY | PH_READONLY, "oauth2/responsetype/jwtaccesstoken.zep", 126 TSRMLS_CC);
	ZEPHIR_INIT_VAR(&expires);
	zephir_add_function(&expires, &_0, &_2);
	ZEPHIR_CALL_METHOD(&id, this_ptr, "generateaccesstoken", NULL, 0);
	zephir_check_call_status();
	zephir_create_array(return_value, 9, 0 TSRMLS_CC);
	zephir_array_update_string(return_value, SL("id"), &id, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(return_value, SL("jti"), &id, PH_COPY | PH_SEPARATE);
	zephir_read_property(&_3, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_OBS_VAR(&_4);
	zephir_array_fetch_string(&_4, &_3, SL("issuer"), PH_NOISY, "oauth2/responsetype/jwtaccesstoken.zep", 132 TSRMLS_CC);
	zephir_array_update_string(return_value, SL("iss"), &_4, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(return_value, SL("aud"), client_id, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(return_value, SL("sub"), user_id, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(return_value, SL("exp"), &expires, PH_COPY | PH_SEPARATE);
	ZEPHIR_INIT_NVAR(&_0);
	zephir_time(&_0);
	zephir_array_update_string(return_value, SL("iat"), &_0, PH_COPY | PH_SEPARATE);
	zephir_read_property(&_5, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_OBS_NVAR(&_4);
	zephir_array_fetch_string(&_4, &_5, SL("token_type"), PH_NOISY, "oauth2/responsetype/jwtaccesstoken.zep", 137 TSRMLS_CC);
	zephir_array_update_string(return_value, SL("token_type"), &_4, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(return_value, SL("scope"), scope, PH_COPY | PH_SEPARATE);
	RETURN_MM();

}

