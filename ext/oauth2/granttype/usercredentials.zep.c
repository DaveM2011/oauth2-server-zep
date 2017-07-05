
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
#include "ext/spl/spl_exceptions.h"


/**
 * @package \OAuth2\GrantType
 * @author Brent Shaffer <bshafs at gmail dot com>
 */
ZEPHIR_INIT_CLASS(OAuth2_GrantType_UserCredentials) {

	ZEPHIR_REGISTER_CLASS(OAuth2\\GrantType, UserCredentials, oauth2, granttype_usercredentials, oauth2_granttype_usercredentials_method_entry, 0);

	zend_declare_property_null(oauth2_granttype_usercredentials_ce, SL("userInfo"), ZEND_ACC_PRIVATE TSRMLS_CC);

	zend_declare_property_null(oauth2_granttype_usercredentials_ce, SL("storage"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_class_implements(oauth2_granttype_usercredentials_ce TSRMLS_CC, 1, oauth2_granttype_granttypeinterface_ce);
	return SUCCESS;

}

/**
 * Constructor
 *
 * @param OAuth2\Storage\UserCredentialsInterface $storage REQUIRED Storage class for retrieving user credentials information
 */
PHP_METHOD(OAuth2_GrantType_UserCredentials, __construct) {

	zval *storage, storage_sub;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&storage_sub);

	zephir_fetch_params(0, 1, 0, &storage);



	zephir_update_property_zval(this_ptr, SL("storage"), storage);

}

PHP_METHOD(OAuth2_GrantType_UserCredentials, getQuerystringIdentifier) {

	zval *this_ptr = getThis();


	RETURN_STRING("password");

}

PHP_METHOD(OAuth2_GrantType_UserCredentials, validateRequest) {

	zend_bool _2;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *request, request_sub, *response, response_sub, userInfo, _0, _1, _3, _7, _8, _9, _10, _14, _15, _4$$3, _5$$3, _6$$3, _11$$4, _12$$4, _13$$4, _16$$5, _17$$5, _18$$5;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&request_sub);
	ZVAL_UNDEF(&response_sub);
	ZVAL_UNDEF(&userInfo);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_7);
	ZVAL_UNDEF(&_8);
	ZVAL_UNDEF(&_9);
	ZVAL_UNDEF(&_10);
	ZVAL_UNDEF(&_14);
	ZVAL_UNDEF(&_15);
	ZVAL_UNDEF(&_4$$3);
	ZVAL_UNDEF(&_5$$3);
	ZVAL_UNDEF(&_6$$3);
	ZVAL_UNDEF(&_11$$4);
	ZVAL_UNDEF(&_12$$4);
	ZVAL_UNDEF(&_13$$4);
	ZVAL_UNDEF(&_16$$5);
	ZVAL_UNDEF(&_17$$5);
	ZVAL_UNDEF(&_18$$5);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &request, &response);



	ZEPHIR_INIT_VAR(&_1);
	ZVAL_STRING(&_1, "password");
	ZEPHIR_CALL_METHOD(&_0, request, "request", NULL, 0, &_1);
	zephir_check_call_status();
	_2 = !zephir_is_true(&_0);
	if (!(_2)) {
		ZEPHIR_INIT_NVAR(&_1);
		ZVAL_STRING(&_1, "username");
		ZEPHIR_CALL_METHOD(&_3, request, "request", NULL, 0, &_1);
		zephir_check_call_status();
		_2 = !zephir_is_true(&_3);
	}
	if (_2) {
		ZVAL_LONG(&_4$$3, 400);
		ZEPHIR_INIT_VAR(&_5$$3);
		ZVAL_STRING(&_5$$3, "invalid_request");
		ZEPHIR_INIT_VAR(&_6$$3);
		ZVAL_STRING(&_6$$3, "Missing parameters: \"username\" and \"password\" required");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_4$$3, &_5$$3, &_6$$3);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	zephir_read_property(&_7, this_ptr, SL("storage"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_NVAR(&_1);
	ZVAL_STRING(&_1, "username");
	ZEPHIR_CALL_METHOD(&_9, request, "request", NULL, 0, &_1);
	zephir_check_call_status();
	ZEPHIR_INIT_NVAR(&_1);
	ZVAL_STRING(&_1, "password");
	ZEPHIR_CALL_METHOD(&_10, request, "request", NULL, 0, &_1);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(&_8, &_7, "checkusercredentials", NULL, 0, &_9, &_10);
	zephir_check_call_status();
	if (!(zephir_is_true(&_8))) {
		ZVAL_LONG(&_11$$4, 401);
		ZEPHIR_INIT_VAR(&_12$$4);
		ZVAL_STRING(&_12$$4, "invalid_grant");
		ZEPHIR_INIT_VAR(&_13$$4);
		ZVAL_STRING(&_13$$4, "Invalid username and password combination");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_11$$4, &_12$$4, &_13$$4);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	zephir_read_property(&_14, this_ptr, SL("storage"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_NVAR(&_1);
	ZVAL_STRING(&_1, "username");
	ZEPHIR_CALL_METHOD(&_15, request, "request", NULL, 0, &_1);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(&userInfo, &_14, "getuserdetails", NULL, 0, &_15);
	zephir_check_call_status();
	if (ZEPHIR_IS_EMPTY(&userInfo)) {
		ZVAL_LONG(&_16$$5, 400);
		ZEPHIR_INIT_VAR(&_17$$5);
		ZVAL_STRING(&_17$$5, "invalid_grant");
		ZEPHIR_INIT_VAR(&_18$$5);
		ZVAL_STRING(&_18$$5, "Unable to retrieve user information");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_16$$5, &_17$$5, &_18$$5);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	if (!(zephir_array_isset_string(&userInfo, SL("user_id")))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(spl_ce_LogicException, "you must set the user_id on the array returned by getUserDetails", "oauth2/granttype/usercredentials.zep", 56);
		return;
	}
	zephir_update_property_zval(this_ptr, SL("userInfo"), &userInfo);
	RETURN_MM_BOOL(1);

}

PHP_METHOD(OAuth2_GrantType_UserCredentials, getClientId) {

	zval *this_ptr = getThis();


	RETURN_NULL();

}

PHP_METHOD(OAuth2_GrantType_UserCredentials, getUserId) {

	zval _0, _1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);


	zephir_read_property(&_0, this_ptr, SL("userInfo"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_1, &_0, SL("user_id"), PH_NOISY | PH_READONLY, "oauth2/granttype/usercredentials.zep", 71 TSRMLS_CC);
	RETURN_CTORW(&_1);

}

PHP_METHOD(OAuth2_GrantType_UserCredentials, getScope) {

	zval _0, _1, _2;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(&_0);
	zephir_read_property(&_1, this_ptr, SL("userInfo"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset_string(&_1, SL("scope"))) {
		zephir_read_property(&_2, this_ptr, SL("userInfo"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_0, &_2, SL("scope"), PH_NOISY, "oauth2/granttype/usercredentials.zep", 76 TSRMLS_CC);
	} else {
		ZVAL_NULL(&_0);
	}
	RETURN_CCTOR(&_0);

}

PHP_METHOD(OAuth2_GrantType_UserCredentials, createAccessToken) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval client_id, user_id, scope;
	zval *accessToken, accessToken_sub, *client_id_param = NULL, *user_id_param = NULL, *scope_param = NULL;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&accessToken_sub);
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


	ZEPHIR_RETURN_CALL_METHOD(accessToken, "createaccesstoken", NULL, 0, &client_id, &user_id, &scope);
	zephir_check_call_status();
	RETURN_MM();

}

