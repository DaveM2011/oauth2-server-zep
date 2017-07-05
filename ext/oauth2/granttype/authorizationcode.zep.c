
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
#include "kernel/exception.h"
#include "kernel/time.h"
#include "ext/spl/spl_exceptions.h"


/**
 * @package \OAuth2\GrantType
 * @author Brent Shaffer <bshafs at gmail dot com>
 */
ZEPHIR_INIT_CLASS(OAuth2_GrantType_AuthorizationCode) {

	ZEPHIR_REGISTER_CLASS(OAuth2\\GrantType, AuthorizationCode, oauth2, granttype_authorizationcode, oauth2_granttype_authorizationcode_method_entry, 0);

	zend_declare_property_null(oauth2_granttype_authorizationcode_ce, SL("storage"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_granttype_authorizationcode_ce, SL("authCode"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_class_implements(oauth2_granttype_authorizationcode_ce TSRMLS_CC, 1, oauth2_granttype_granttypeinterface_ce);
	return SUCCESS;

}

/**
 * @param OAuth2\Storage\AuthorizationCodeInterface storage REQUIRED Storage class for retrieving authorization code information
 */
PHP_METHOD(OAuth2_GrantType_AuthorizationCode, __construct) {

	zval *storage, storage_sub;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&storage_sub);

	zephir_fetch_params(0, 1, 0, &storage);



	zephir_update_property_zval(this_ptr, SL("storage"), storage);

}

PHP_METHOD(OAuth2_GrantType_AuthorizationCode, getQuerystringIdentifier) {

	zval *this_ptr = getThis();


	RETURN_STRING("authorization_code");

}

PHP_METHOD(OAuth2_GrantType_AuthorizationCode, validateRequest) {

	zend_bool _9, _13$$5;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *request, request_sub, *response, response_sub, code, authCode, _0, _1, _5, _10, _21, _2$$3, _3$$3, _4$$3, _6$$4, _7$$4, _8$$4, _11$$5, _12$$5, _14$$5, _15$$5, _16$$5, _17$$6, _18$$6, _19$$6, _20$$6, _22$$8, _23$$8, _24$$8;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&request_sub);
	ZVAL_UNDEF(&response_sub);
	ZVAL_UNDEF(&code);
	ZVAL_UNDEF(&authCode);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_5);
	ZVAL_UNDEF(&_10);
	ZVAL_UNDEF(&_21);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_4$$3);
	ZVAL_UNDEF(&_6$$4);
	ZVAL_UNDEF(&_7$$4);
	ZVAL_UNDEF(&_8$$4);
	ZVAL_UNDEF(&_11$$5);
	ZVAL_UNDEF(&_12$$5);
	ZVAL_UNDEF(&_14$$5);
	ZVAL_UNDEF(&_15$$5);
	ZVAL_UNDEF(&_16$$5);
	ZVAL_UNDEF(&_17$$6);
	ZVAL_UNDEF(&_18$$6);
	ZVAL_UNDEF(&_19$$6);
	ZVAL_UNDEF(&_20$$6);
	ZVAL_UNDEF(&_22$$8);
	ZVAL_UNDEF(&_23$$8);
	ZVAL_UNDEF(&_24$$8);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &request, &response);



	ZEPHIR_INIT_VAR(&_1);
	ZVAL_STRING(&_1, "code");
	ZEPHIR_CALL_METHOD(&_0, request, "request", NULL, 0, &_1);
	zephir_check_call_status();
	if (!(zephir_is_true(&_0))) {
		ZVAL_LONG(&_2$$3, 400);
		ZEPHIR_INIT_VAR(&_3$$3);
		ZVAL_STRING(&_3$$3, "invalid_request");
		ZEPHIR_INIT_VAR(&_4$$3);
		ZVAL_STRING(&_4$$3, "Missing parameter: \"code\" is required");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_2$$3, &_3$$3, &_4$$3);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	ZEPHIR_INIT_NVAR(&_1);
	ZVAL_STRING(&_1, "code");
	ZEPHIR_CALL_METHOD(&code, request, "request", NULL, 0, &_1);
	zephir_check_call_status();
	zephir_read_property(&_5, this_ptr, SL("storage"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&authCode, &_5, "getauthorizationcode", NULL, 0, &code);
	zephir_check_call_status();
	if (!(zephir_is_true(&authCode))) {
		ZVAL_LONG(&_6$$4, 400);
		ZEPHIR_INIT_VAR(&_7$$4);
		ZVAL_STRING(&_7$$4, "invalid_grant");
		ZEPHIR_INIT_VAR(&_8$$4);
		ZVAL_STRING(&_8$$4, "Authorization code doesn't exist or is invalid for the client");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_6$$4, &_7$$4, &_8$$4);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	_9 = zephir_array_isset_string(&authCode, SL("redirect_uri"));
	if (_9) {
		zephir_array_fetch_string(&_10, &authCode, SL("redirect_uri"), PH_NOISY | PH_READONLY, "oauth2/granttype/authorizationcode.zep", 51 TSRMLS_CC);
		_9 = zephir_is_true(&_10);
	}
	if (_9) {
		ZEPHIR_INIT_VAR(&_12$$5);
		ZVAL_STRING(&_12$$5, "redirect_uri");
		ZEPHIR_CALL_METHOD(&_11$$5, request, "request", NULL, 0, &_12$$5);
		zephir_check_call_status();
		_13$$5 = !zephir_is_true(&_11$$5);
		if (!(_13$$5)) {
			ZEPHIR_INIT_NVAR(&_12$$5);
			ZVAL_STRING(&_12$$5, "redirect_uri");
			ZEPHIR_CALL_METHOD(&_14$$5, request, "request", NULL, 0, &_12$$5);
			zephir_check_call_status();
			ZEPHIR_CALL_FUNCTION(&_15$$5, "urldecode", NULL, 29, &_14$$5);
			zephir_check_call_status();
			zephir_array_fetch_string(&_16$$5, &authCode, SL("redirect_uri"), PH_NOISY | PH_READONLY, "oauth2/granttype/authorizationcode.zep", 52 TSRMLS_CC);
			_13$$5 = !ZEPHIR_IS_EQUAL(&_15$$5, &_16$$5);
		}
		if (_13$$5) {
			ZVAL_LONG(&_17$$6, 400);
			ZEPHIR_INIT_VAR(&_18$$6);
			ZVAL_STRING(&_18$$6, "redirect_uri_mismatch");
			ZEPHIR_INIT_VAR(&_19$$6);
			ZVAL_STRING(&_19$$6, "The redirect URI is missing or do not match");
			ZEPHIR_INIT_VAR(&_20$$6);
			ZVAL_STRING(&_20$$6, "#section-4.1.3");
			ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_17$$6, &_18$$6, &_19$$6, &_20$$6);
			zephir_check_call_status();
			RETURN_MM_BOOL(0);
		}
	}
	if (!(zephir_array_isset_string(&authCode, SL("expires")))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(zend_exception_get_default(TSRMLS_C), "Storage must return authcode with a value for \"expires\"", "oauth2/granttype/authorizationcode.zep", 59);
		return;
	}
	zephir_array_fetch_string(&_21, &authCode, SL("expires"), PH_NOISY | PH_READONLY, "oauth2/granttype/authorizationcode.zep", 62 TSRMLS_CC);
	ZEPHIR_INIT_NVAR(&_1);
	zephir_time(&_1);
	if (ZEPHIR_LT(&_21, &_1)) {
		ZVAL_LONG(&_22$$8, 400);
		ZEPHIR_INIT_VAR(&_23$$8);
		ZVAL_STRING(&_23$$8, "invalid_grant");
		ZEPHIR_INIT_VAR(&_24$$8);
		ZVAL_STRING(&_24$$8, "The authorization code has expired");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_22$$8, &_23$$8, &_24$$8);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	if (!(zephir_array_isset_string(&authCode, SL("code")))) {
		zephir_array_update_string(&authCode, SL("code"), &code, PH_COPY | PH_SEPARATE);
	}
	zephir_update_property_zval(this_ptr, SL("authCode"), &authCode);
	RETURN_MM_BOOL(1);

}

PHP_METHOD(OAuth2_GrantType_AuthorizationCode, getClientId) {

	zval _0, _1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);


	zephir_read_property(&_0, this_ptr, SL("authCode"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_1, &_0, SL("client_id"), PH_NOISY | PH_READONLY, "oauth2/granttype/authorizationcode.zep", 79 TSRMLS_CC);
	RETURN_CTORW(&_1);

}

PHP_METHOD(OAuth2_GrantType_AuthorizationCode, getScope) {

	zval _0, _1, _2;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(&_0);
	zephir_read_property(&_1, this_ptr, SL("authCode"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset_string(&_1, SL("scope"))) {
		zephir_read_property(&_2, this_ptr, SL("authCode"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_0, &_2, SL("scope"), PH_NOISY, "oauth2/granttype/authorizationcode.zep", 84 TSRMLS_CC);
	} else {
		ZVAL_NULL(&_0);
	}
	RETURN_CCTOR(&_0);

}

PHP_METHOD(OAuth2_GrantType_AuthorizationCode, getUserId) {

	zval _0, _1, _2;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(&_0);
	zephir_read_property(&_1, this_ptr, SL("authCode"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset_string(&_1, SL("user_id"))) {
		zephir_read_property(&_2, this_ptr, SL("authCode"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_0, &_2, SL("user_id"), PH_NOISY, "oauth2/granttype/authorizationcode.zep", 89 TSRMLS_CC);
	} else {
		ZVAL_NULL(&_0);
	}
	RETURN_CCTOR(&_0);

}

PHP_METHOD(OAuth2_GrantType_AuthorizationCode, createAccessToken) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval client_id, user_id, scope;
	zval *accessToken, accessToken_sub, *client_id_param = NULL, *user_id_param = NULL, *scope_param = NULL, token, _0, _1, _2;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&accessToken_sub);
	ZVAL_UNDEF(&token);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
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


	ZEPHIR_CALL_METHOD(&token, accessToken, "createaccesstoken", NULL, 0, &client_id, &user_id, &scope);
	zephir_check_call_status();
	zephir_read_property(&_0, this_ptr, SL("storage"), PH_NOISY_CC | PH_READONLY);
	zephir_read_property(&_1, this_ptr, SL("authCode"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_2, &_1, SL("code"), PH_NOISY | PH_READONLY, "oauth2/granttype/authorizationcode.zep", 96 TSRMLS_CC);
	ZEPHIR_CALL_METHOD(NULL, &_0, "expireauthorizationcode", NULL, 0, &_2);
	zephir_check_call_status();
	RETURN_CCTOR(&token);

}

