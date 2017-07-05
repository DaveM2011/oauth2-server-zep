
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
#include "kernel/operators.h"
#include "kernel/fcall.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/exception.h"
#include "kernel/time.h"
#include "kernel/string.h"
#include "kernel/file.h"
#include "kernel/concat.h"


/**
 * @package \OAuth2\ResponseType
 * @author Brent Shaffer <bshafs at gmail dot com>
 */
ZEPHIR_INIT_CLASS(OAuth2_ResponseType_AccessToken) {

	ZEPHIR_REGISTER_CLASS(OAuth2\\ResponseType, AccessToken, oauth2, responsetype_accesstoken, oauth2_responsetype_accesstoken_method_entry, 0);

	zend_declare_property_null(oauth2_responsetype_accesstoken_ce, SL("tokenStorage"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_responsetype_accesstoken_ce, SL("refreshStorage"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_responsetype_accesstoken_ce, SL("config"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_class_implements(oauth2_responsetype_accesstoken_ce TSRMLS_CC, 1, oauth2_responsetype_accesstokeninterface_ce);
	return SUCCESS;

}

/**
 * @param OAuth2\Storage\AccessTokenInterface tokenStorage Storage class for saving access token information
 * @param OAuth2\Storage\RefreshTokenInterface refreshStorage OPTIONAL Storage class for saving refresh token information
 * @param array config OPTIONAL Configuration options for the server
 * <code>
 * $config = array(
 * "token_type": "bearer",              // token type identifier
 * "access_lifetime": 3600,             // time before access token expires
 * "refresh_token_lifetime": 1209600,   // time before refresh token expires
 * );
 * </endcode>
 */
PHP_METHOD(OAuth2_ResponseType_AccessToken, __construct) {

	zval config, _1;
	zval *tokenStorage, tokenStorage_sub, *refreshStorage = NULL, refreshStorage_sub, *config_param = NULL, __$null, _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&tokenStorage_sub);
	ZVAL_UNDEF(&refreshStorage_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&config);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 2, &tokenStorage, &refreshStorage, &config_param);

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


	zephir_update_property_zval(this_ptr, SL("tokenStorage"), tokenStorage);
	zephir_update_property_zval(this_ptr, SL("refreshStorage"), refreshStorage);
	ZEPHIR_INIT_VAR(&_0);
	ZEPHIR_INIT_VAR(&_1);
	zephir_create_array(&_1, 3, 0 TSRMLS_CC);
	add_assoc_stringl_ex(&_1, SL("token_type"), SL("bearer"));
	add_assoc_long_ex(&_1, SL("access_lifetime"), 3600);
	add_assoc_long_ex(&_1, SL("refresh_token_lifetime"), 1209600);
	zephir_fast_array_merge(&_0, &_1, &config TSRMLS_CC);
	zephir_update_property_zval(this_ptr, SL("config"), &_0);
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(OAuth2_ResponseType_AccessToken, getAuthorizeResponse) {

	zval _1;
	zend_bool includeRefreshToken = 0;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval user_id;
	zval *params = NULL, params_sub, *user_id_param = NULL, __$null, result, _0, _2, _3, _4, _5, _7, _6$$3;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&params_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&result);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_5);
	ZVAL_UNDEF(&_7);
	ZVAL_UNDEF(&_6$$3);
	ZVAL_UNDEF(&user_id);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &params, &user_id_param);

	ZEPHIR_SEPARATE_PARAM(params);
	if (!user_id_param) {
		ZEPHIR_INIT_VAR(&user_id);
		ZVAL_STRING(&user_id, "");
	} else {
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
	}


	ZEPHIR_INIT_VAR(&result);
	zephir_create_array(&result, 1, 0 TSRMLS_CC);
	ZEPHIR_INIT_VAR(&_0);
	array_init(&_0);
	zephir_array_update_string(&result, SL("query"), &_0, PH_COPY | PH_SEPARATE);
	ZEPHIR_INIT_NVAR(&_0);
	ZEPHIR_INIT_VAR(&_1);
	zephir_create_array(&_1, 2, 0 TSRMLS_CC);
	zephir_array_update_string(&_1, SL("scope"), &__$null, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&_1, SL("state"), &__$null, PH_COPY | PH_SEPARATE);
	zephir_fast_array_merge(&_0, &_1, params TSRMLS_CC);
	ZEPHIR_CPY_WRT(params, &_0);
	includeRefreshToken = 0;
	zephir_array_fetch_string(&_3, params, SL("client_id"), PH_NOISY | PH_READONLY, "oauth2/responsetype/accesstoken.zep", 58 TSRMLS_CC);
	zephir_array_fetch_string(&_4, params, SL("scope"), PH_NOISY | PH_READONLY, "oauth2/responsetype/accesstoken.zep", 58 TSRMLS_CC);
	if (includeRefreshToken) {
		ZVAL_BOOL(&_5, 1);
	} else {
		ZVAL_BOOL(&_5, 0);
	}
	ZEPHIR_CALL_METHOD(&_2, this_ptr, "createaccesstoken", NULL, 0, &_3, &user_id, &_4, &_5);
	zephir_check_call_status();
	zephir_array_update_string(&result, SL("fragment"), &_2, PH_COPY | PH_SEPARATE);
	if (zephir_array_isset_string(params, SL("state"))) {
		zephir_array_fetch_string(&_6$$3, params, SL("state"), PH_NOISY | PH_READONLY, "oauth2/responsetype/accesstoken.zep", 61 TSRMLS_CC);
		zephir_array_update_multi(&result, &_6$$3 TSRMLS_CC, SL("ss"), 4, SL("fragment"), SL("state"));
	}
	zephir_create_array(return_value, 2, 0 TSRMLS_CC);
	ZEPHIR_OBS_VAR(&_7);
	zephir_array_fetch_string(&_7, params, SL("redirect_uri"), PH_NOISY, "oauth2/responsetype/accesstoken.zep", 64 TSRMLS_CC);
	zephir_array_fast_append(return_value, &_7);
	zephir_array_fast_append(return_value, &result);
	RETURN_MM();

}

/**
 * Handle the creation of access token, also issue refresh token if supported / desirable.
 *
 * @param string client_id client identifier related to the access token.
 * @param string user_id user ID associated with the access token
 * @param $scope OPTIONAL scopes to be stored in space-separated string.
 * @param bool includeRefreshToken if true, a new refresh_token will be added to the response
 * @return string
 *
 * @see http://tools.ietf.org/html/rfc6749#section-5
 * @ingroup oauth2_section_5
 */
PHP_METHOD(OAuth2_ResponseType_AccessToken, createAccessToken) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zend_bool includeRefreshToken, _12;
	zval *client_id_param = NULL, *user_id_param = NULL, *scope_param = NULL, *includeRefreshToken_param = NULL, token, expires, _0, _1, _2, _3, _4, _5, _6, _7, _8, _9, _10, _11, _13, _14$$3, _15$$3, _16$$3, _20$$3, _21$$3, _17$$4, _18$$4, _19$$4;
	zval client_id, user_id, scope;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&client_id);
	ZVAL_UNDEF(&user_id);
	ZVAL_UNDEF(&scope);
	ZVAL_UNDEF(&token);
	ZVAL_UNDEF(&expires);
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
	ZVAL_UNDEF(&_14$$3);
	ZVAL_UNDEF(&_15$$3);
	ZVAL_UNDEF(&_16$$3);
	ZVAL_UNDEF(&_20$$3);
	ZVAL_UNDEF(&_21$$3);
	ZVAL_UNDEF(&_17$$4);
	ZVAL_UNDEF(&_18$$4);
	ZVAL_UNDEF(&_19$$4);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 2, &client_id_param, &user_id_param, &scope_param, &includeRefreshToken_param);

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
	if (!includeRefreshToken_param) {
		includeRefreshToken = 1;
	} else {
		includeRefreshToken = zephir_get_boolval(includeRefreshToken_param);
	}


	ZEPHIR_INIT_VAR(&token);
	zephir_create_array(&token, 4, 0 TSRMLS_CC);
	ZEPHIR_CALL_METHOD(&_0, this_ptr, "generateaccesstoken", NULL, 0);
	zephir_check_call_status();
	zephir_array_update_string(&token, SL("access_token"), &_0, PH_COPY | PH_SEPARATE);
	zephir_read_property(&_1, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_OBS_VAR(&_2);
	zephir_array_fetch_string(&_2, &_1, SL("access_lifetime"), PH_NOISY, "oauth2/responsetype/accesstoken.zep", 85 TSRMLS_CC);
	zephir_array_update_string(&token, SL("expires_in"), &_2, PH_COPY | PH_SEPARATE);
	zephir_read_property(&_3, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_OBS_NVAR(&_2);
	zephir_array_fetch_string(&_2, &_3, SL("token_type"), PH_NOISY, "oauth2/responsetype/accesstoken.zep", 86 TSRMLS_CC);
	zephir_array_update_string(&token, SL("token_type"), &_2, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&token, SL("scope"), &scope, PH_COPY | PH_SEPARATE);
	zephir_read_property(&_4, this_ptr, SL("tokenStorage"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_5, &token, SL("access_token"), PH_NOISY | PH_READONLY, "oauth2/responsetype/accesstoken.zep", 90 TSRMLS_CC);
	ZEPHIR_INIT_VAR(&_6);
	zephir_read_property(&_7, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_8, &_7, SL("access_lifetime"), PH_NOISY | PH_READONLY, "oauth2/responsetype/accesstoken.zep", 90 TSRMLS_CC);
	if (zephir_is_true(&_8)) {
		ZEPHIR_INIT_VAR(&_9);
		zephir_time(&_9);
		zephir_read_property(&_10, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_11, &_10, SL("access_lifetime"), PH_NOISY | PH_READONLY, "oauth2/responsetype/accesstoken.zep", 90 TSRMLS_CC);
		ZEPHIR_INIT_NVAR(&_6);
		zephir_add_function(&_6, &_9, &_11);
	} else {
		ZEPHIR_INIT_NVAR(&_6);
		ZVAL_NULL(&_6);
	}
	ZEPHIR_CALL_METHOD(NULL, &_4, "setaccesstoken", NULL, 0, &_5, &client_id, &user_id, &_6, &scope);
	zephir_check_call_status();
	_12 = includeRefreshToken;
	if (_12) {
		zephir_read_property(&_13, this_ptr, SL("refreshStorage"), PH_NOISY_CC | PH_READONLY);
		_12 = zephir_is_true(&_13);
	}
	if (_12) {
		ZEPHIR_CALL_METHOD(&_14$$3, this_ptr, "generaterefreshtoken", NULL, 0);
		zephir_check_call_status();
		zephir_array_update_string(&token, SL("refresh_token"), &_14$$3, PH_COPY | PH_SEPARATE);
		ZEPHIR_INIT_VAR(&expires);
		ZVAL_LONG(&expires, 0);
		zephir_read_property(&_15$$3, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_16$$3, &_15$$3, SL("refresh_token_lifetime"), PH_NOISY | PH_READONLY, "oauth2/responsetype/accesstoken.zep", 98 TSRMLS_CC);
		if (ZEPHIR_GT_LONG(&_16$$3, 0)) {
			ZEPHIR_INIT_VAR(&_17$$4);
			zephir_time(&_17$$4);
			zephir_read_property(&_18$$4, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
			zephir_array_fetch_string(&_19$$4, &_18$$4, SL("refresh_token_lifetime"), PH_NOISY | PH_READONLY, "oauth2/responsetype/accesstoken.zep", 99 TSRMLS_CC);
			ZEPHIR_INIT_NVAR(&expires);
			zephir_add_function(&expires, &_17$$4, &_19$$4);
		}
		zephir_read_property(&_20$$3, this_ptr, SL("refreshStorage"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_21$$3, &token, SL("refresh_token"), PH_NOISY | PH_READONLY, "oauth2/responsetype/accesstoken.zep", 101 TSRMLS_CC);
		ZEPHIR_CALL_METHOD(NULL, &_20$$3, "setrefreshtoken", NULL, 0, &_21$$3, &client_id, &user_id, &expires, &scope);
		zephir_check_call_status();
	}
	RETURN_CCTOR(&token);

}

/**
 * Generates an unique access token.
 *
 * Implementing classes may want to override this function to implement
 * other access token generation schemes.
 *
 * @return string An unique access token.
 *
 * @ingroup oauth2_section_4
 */
PHP_METHOD(OAuth2_ResponseType_AccessToken, generateAccessToken) {

	zend_bool _2$$3, _5$$5, _10$$7;
	zval __$false, __$null, __$true, randomData, _6, _11, _13, _14, _15, _16, _17, _18, _19, _20, _21, _22, _0$$3, _1$$3, _4$$5, _7$$7, _8$$7, _9$$7;
	zephir_fcall_cache_entry *_3 = NULL, *_12 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_BOOL(&__$false, 0);
	ZVAL_NULL(&__$null);
	ZVAL_BOOL(&__$true, 1);
	ZVAL_UNDEF(&randomData);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_11);
	ZVAL_UNDEF(&_13);
	ZVAL_UNDEF(&_14);
	ZVAL_UNDEF(&_15);
	ZVAL_UNDEF(&_16);
	ZVAL_UNDEF(&_17);
	ZVAL_UNDEF(&_18);
	ZVAL_UNDEF(&_19);
	ZVAL_UNDEF(&_20);
	ZVAL_UNDEF(&_21);
	ZVAL_UNDEF(&_22);
	ZVAL_UNDEF(&_0$$3);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_4$$5);
	ZVAL_UNDEF(&_7$$7);
	ZVAL_UNDEF(&_8$$7);
	ZVAL_UNDEF(&_9$$7);

	ZEPHIR_MM_GROW();

	if ((zephir_function_exists_ex(SL("mcrypt_create_iv") TSRMLS_CC) == SUCCESS)) {
		ZVAL_LONG(&_0$$3, 20);
		ZVAL_LONG(&_1$$3, 1);
		ZEPHIR_CALL_FUNCTION(&randomData, "mcrypt_create_iv", NULL, 1, &_0$$3, &_1$$3);
		zephir_check_call_status();
		_2$$3 = !ZEPHIR_IS_FALSE_IDENTICAL(&randomData);
		if (_2$$3) {
			_2$$3 = zephir_fast_strlen_ev(&randomData) == 20;
		}
		if (_2$$3) {
			ZEPHIR_RETURN_CALL_FUNCTION("bin2hex", &_3, 2, &randomData);
			zephir_check_call_status();
			RETURN_MM();
		}
	}
	if ((zephir_function_exists_ex(SL("openssl_random_pseudo_bytes") TSRMLS_CC) == SUCCESS)) {
		ZVAL_LONG(&_4$$5, 20);
		ZEPHIR_CALL_FUNCTION(&randomData, "openssl_random_pseudo_bytes", NULL, 3, &_4$$5);
		zephir_check_call_status();
		_5$$5 = !ZEPHIR_IS_FALSE_IDENTICAL(&randomData);
		if (_5$$5) {
			_5$$5 = zephir_fast_strlen_ev(&randomData) == 20;
		}
		if (_5$$5) {
			ZEPHIR_RETURN_CALL_FUNCTION("bin2hex", &_3, 2, &randomData);
			zephir_check_call_status();
			RETURN_MM();
		}
	}
	ZEPHIR_INIT_VAR(&_6);
	ZVAL_STRING(&_6, "/dev/urandom");
	if ((zephir_file_exists(&_6 TSRMLS_CC) == SUCCESS)) {
		ZEPHIR_INIT_VAR(&_7$$7);
		ZVAL_STRING(&_7$$7, "/dev/urandom");
		ZVAL_LONG(&_8$$7, 0);
		ZVAL_LONG(&_9$$7, 20);
		ZEPHIR_CALL_FUNCTION(&randomData, "file_get_contents", NULL, 4, &_7$$7, &__$false, &__$null, &_8$$7, &_9$$7);
		zephir_check_call_status();
		_10$$7 = !ZEPHIR_IS_FALSE_IDENTICAL(&randomData);
		if (_10$$7) {
			_10$$7 = zephir_fast_strlen_ev(&randomData) == 20;
		}
		if (_10$$7) {
			ZEPHIR_RETURN_CALL_FUNCTION("bin2hex", &_3, 2, &randomData);
			zephir_check_call_status();
			RETURN_MM();
		}
	}
	ZEPHIR_CALL_FUNCTION(&_11, "mt_rand", &_12, 5);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(&_13, "mt_rand", &_12, 5);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(&_14, "mt_rand", &_12, 5);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(&_15, "mt_rand", &_12, 5);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&_16);
	zephir_microtime(&_16, &__$true TSRMLS_CC);
	ZEPHIR_CALL_FUNCTION(&_17, "mt_rand", &_12, 5);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(&_18, "uniqid", NULL, 6, &_17, &__$true);
	zephir_check_call_status();
	ZEPHIR_INIT_NVAR(&randomData);
	ZEPHIR_CONCAT_VVVVVV(&randomData, &_11, &_13, &_14, &_15, &_16, &_18);
	ZEPHIR_INIT_VAR(&_19);
	ZVAL_STRING(&_19, "sha512");
	ZEPHIR_CALL_FUNCTION(&_20, "hash", NULL, 7, &_19, &randomData);
	zephir_check_call_status();
	ZVAL_LONG(&_21, 0);
	ZVAL_LONG(&_22, 40);
	zephir_substr(return_value, &_20, 0 , 40 , 0);
	RETURN_MM();

}

/**
 * Generates an unique refresh token
 *
 * Implementing classes may want to override this function to implement
 * other refresh token generation schemes.
 *
 * @return string An unique refresh.
 *
 * @ingroup oauth2_section_4
 * @see OAuth2::generateAccessToken()
 */
PHP_METHOD(OAuth2_ResponseType_AccessToken, generateRefreshToken) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();


	ZEPHIR_MM_GROW();

	ZEPHIR_RETURN_CALL_METHOD(this_ptr, "generateaccesstoken", NULL, 0);
	zephir_check_call_status();
	RETURN_MM();

}

