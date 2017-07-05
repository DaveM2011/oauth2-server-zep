
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
#include "kernel/time.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/exception.h"


/**
 * @package \OAuth2\GrantType
 * @author Brent Shaffer <bshafs at gmail dot com>
 */
ZEPHIR_INIT_CLASS(OAuth2_GrantType_RefreshToken) {

	ZEPHIR_REGISTER_CLASS(OAuth2\\GrantType, RefreshToken, oauth2, granttype_refreshtoken, oauth2_granttype_refreshtoken_method_entry, 0);

	zend_declare_property_null(oauth2_granttype_refreshtoken_ce, SL("refreshToken"), ZEND_ACC_PRIVATE TSRMLS_CC);

	zend_declare_property_null(oauth2_granttype_refreshtoken_ce, SL("storage"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_granttype_refreshtoken_ce, SL("config"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_class_implements(oauth2_granttype_refreshtoken_ce TSRMLS_CC, 1, oauth2_granttype_granttypeinterface_ce);
	return SUCCESS;

}

/**
 * @param OAuth2\Storage\RefreshTokenInterface storage REQUIRED Storage class for retrieving refresh token information
 * @param array config  OPTIONAL Configuration options for the server
 * <code>
 * $config = array(
 * "always_issue_new_refresh_token": true, // whether to issue a new refresh token upon successful token request
 * );
 * </code>
 */
PHP_METHOD(OAuth2_GrantType_RefreshToken, __construct) {

	zval config, _1;
	zval *storage, storage_sub, *config_param = NULL, __$false, _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&storage_sub);
	ZVAL_BOOL(&__$false, 0);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&config);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &storage, &config_param);

	if (!config_param) {
		ZEPHIR_INIT_VAR(&config);
		array_init(&config);
	} else {
		zephir_get_arrval(&config, config_param);
	}


	zephir_update_property_zval(this_ptr, SL("storage"), storage);
	ZEPHIR_INIT_VAR(&_0);
	ZEPHIR_INIT_VAR(&_1);
	zephir_create_array(&_1, 1, 0 TSRMLS_CC);
	zephir_array_update_string(&_1, SL("always_issue_new_refresh_token"), &__$false, PH_COPY | PH_SEPARATE);
	zephir_fast_array_merge(&_0, &_1, &config TSRMLS_CC);
	zephir_update_property_zval(this_ptr, SL("config"), &_0);
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(OAuth2_GrantType_RefreshToken, getQuerystringIdentifier) {

	zval *this_ptr = getThis();


	RETURN_STRING("refresh_token");

}

PHP_METHOD(OAuth2_GrantType_RefreshToken, validateRequest) {

	zend_bool _11;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *request, request_sub, *response, response_sub, refreshToken, _0, _1, _5, _6, _10, _12, _2$$3, _3$$3, _4$$3, _7$$4, _8$$4, _9$$4, _13$$5, _14$$5, _15$$5;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&request_sub);
	ZVAL_UNDEF(&response_sub);
	ZVAL_UNDEF(&refreshToken);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_5);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_10);
	ZVAL_UNDEF(&_12);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_4$$3);
	ZVAL_UNDEF(&_7$$4);
	ZVAL_UNDEF(&_8$$4);
	ZVAL_UNDEF(&_9$$4);
	ZVAL_UNDEF(&_13$$5);
	ZVAL_UNDEF(&_14$$5);
	ZVAL_UNDEF(&_15$$5);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &request, &response);



	ZEPHIR_INIT_VAR(&_1);
	ZVAL_STRING(&_1, "refresh_token");
	ZEPHIR_CALL_METHOD(&_0, request, "request", NULL, 0, &_1);
	zephir_check_call_status();
	if (!(zephir_is_true(&_0))) {
		ZVAL_LONG(&_2$$3, 400);
		ZEPHIR_INIT_VAR(&_3$$3);
		ZVAL_STRING(&_3$$3, "invalid_request");
		ZEPHIR_INIT_VAR(&_4$$3);
		ZVAL_STRING(&_4$$3, "Missing parameter: \"refresh_token\" is required");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_2$$3, &_3$$3, &_4$$3);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	zephir_read_property(&_5, this_ptr, SL("storage"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_NVAR(&_1);
	ZVAL_STRING(&_1, "refresh_token");
	ZEPHIR_CALL_METHOD(&_6, request, "request", NULL, 0, &_1);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(&refreshToken, &_5, "getrefreshtoken", NULL, 0, &_6);
	zephir_check_call_status();
	if (!(zephir_is_true(&refreshToken))) {
		ZVAL_LONG(&_7$$4, 400);
		ZEPHIR_INIT_VAR(&_8$$4);
		ZVAL_STRING(&_8$$4, "invalid_grant");
		ZEPHIR_INIT_VAR(&_9$$4);
		ZVAL_STRING(&_9$$4, "Invalid refresh token");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_7$$4, &_8$$4, &_9$$4);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	zephir_array_fetch_string(&_10, &refreshToken, SL("expires"), PH_NOISY | PH_READONLY, "oauth2/granttype/refreshtoken.zep", 57 TSRMLS_CC);
	_11 = ZEPHIR_GT_LONG(&_10, 0);
	if (_11) {
		zephir_array_fetch_string(&_12, &refreshToken, SL("expires"), PH_NOISY | PH_READONLY, "oauth2/granttype/refreshtoken.zep", 57 TSRMLS_CC);
		ZEPHIR_INIT_NVAR(&_1);
		zephir_time(&_1);
		_11 = ZEPHIR_LT(&_12, &_1);
	}
	if (_11) {
		ZVAL_LONG(&_13$$5, 400);
		ZEPHIR_INIT_VAR(&_14$$5);
		ZVAL_STRING(&_14$$5, "invalid_grant");
		ZEPHIR_INIT_VAR(&_15$$5);
		ZVAL_STRING(&_15$$5, "Refresh token has expired");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_13$$5, &_14$$5, &_15$$5);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	zephir_update_property_zval(this_ptr, SL("refreshToken"), &refreshToken);
	RETURN_MM_BOOL(1);

}

PHP_METHOD(OAuth2_GrantType_RefreshToken, getClientId) {

	zval _0, _1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);


	zephir_read_property(&_0, this_ptr, SL("refreshToken"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_1, &_0, SL("client_id"), PH_NOISY | PH_READONLY, "oauth2/granttype/refreshtoken.zep", 70 TSRMLS_CC);
	RETURN_CTORW(&_1);

}

PHP_METHOD(OAuth2_GrantType_RefreshToken, getUserId) {

	zval _0, _1, _2;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(&_0);
	zephir_read_property(&_1, this_ptr, SL("refreshToken"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset_string(&_1, SL("user_id"))) {
		zephir_read_property(&_2, this_ptr, SL("refreshToken"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_0, &_2, SL("user_id"), PH_NOISY, "oauth2/granttype/refreshtoken.zep", 75 TSRMLS_CC);
	} else {
		ZVAL_NULL(&_0);
	}
	RETURN_CCTOR(&_0);

}

PHP_METHOD(OAuth2_GrantType_RefreshToken, getScope) {

	zval _0, _1, _2;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(&_0);
	zephir_read_property(&_1, this_ptr, SL("refreshToken"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset_string(&_1, SL("scope"))) {
		zephir_read_property(&_2, this_ptr, SL("refreshToken"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_0, &_2, SL("scope"), PH_NOISY, "oauth2/granttype/refreshtoken.zep", 80 TSRMLS_CC);
	} else {
		ZVAL_NULL(&_0);
	}
	RETURN_CCTOR(&_0);

}

PHP_METHOD(OAuth2_GrantType_RefreshToken, createAccessToken) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval client_id, user_id, scope;
	zval *accessToken, accessToken_sub, *client_id_param = NULL, *user_id_param = NULL, *scope_param = NULL, issueNewRefreshToken, token, _0, _1$$3, _2$$3, _3$$3;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&accessToken_sub);
	ZVAL_UNDEF(&issueNewRefreshToken);
	ZVAL_UNDEF(&token);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&client_id);
	ZVAL_UNDEF(&user_id);
	ZVAL_UNDEF(&scope);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 4, 0, &accessToken, &client_id_param, &user_id_param, &scope_param);

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


	zephir_read_property(&_0, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_OBS_VAR(&issueNewRefreshToken);
	zephir_array_fetch_string(&issueNewRefreshToken, &_0, SL("always_issue_new_refresh_token"), PH_NOISY, "oauth2/granttype/refreshtoken.zep", 90 TSRMLS_CC);
	ZEPHIR_CALL_METHOD(&token, accessToken, "createaccesstoken", NULL, 0, &client_id, &user_id, &scope, &issueNewRefreshToken);
	zephir_check_call_status();
	if (zephir_is_true(&issueNewRefreshToken)) {
		zephir_read_property(&_1$$3, this_ptr, SL("storage"), PH_NOISY_CC | PH_READONLY);
		zephir_read_property(&_2$$3, this_ptr, SL("refreshToken"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_3$$3, &_2$$3, SL("refresh_token"), PH_NOISY | PH_READONLY, "oauth2/granttype/refreshtoken.zep", 94 TSRMLS_CC);
		ZEPHIR_CALL_METHOD(NULL, &_1$$3, "unsetrefreshtoken", NULL, 0, &_3$$3);
		zephir_check_call_status();
	}
	RETURN_CCTOR(&token);

}

