
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
#include "kernel/exception.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/fcall.h"
#include "kernel/concat.h"
#include "kernel/operators.h"
#include "kernel/time.h"


/**
 * @see OAuth2\Controller\ResourceControllerInterface
 */
ZEPHIR_INIT_CLASS(OAuth2_Controller_ResourceController) {

	ZEPHIR_REGISTER_CLASS(OAuth2\\Controller, ResourceController, oauth2, controller_resourcecontroller, oauth2_controller_resourcecontroller_method_entry, 0);

	zend_declare_property_null(oauth2_controller_resourcecontroller_ce, SL("token"), ZEND_ACC_PRIVATE TSRMLS_CC);

	zend_declare_property_null(oauth2_controller_resourcecontroller_ce, SL("tokenType"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_controller_resourcecontroller_ce, SL("tokenStorage"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_controller_resourcecontroller_ce, SL("config"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_controller_resourcecontroller_ce, SL("scopeUtil"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_class_implements(oauth2_controller_resourcecontroller_ce TSRMLS_CC, 1, oauth2_controller_resourcecontrollerinterface_ce);
	return SUCCESS;

}

PHP_METHOD(OAuth2_Controller_ResourceController, __construct) {

	zval _3$$3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval config, _1;
	zval *tokenType, tokenType_sub, *tokenStorage, tokenStorage_sub, *config_param = NULL, *scopeUtil = NULL, scopeUtil_sub, __$null, _0, _2$$3;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&tokenType_sub);
	ZVAL_UNDEF(&tokenStorage_sub);
	ZVAL_UNDEF(&scopeUtil_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&config);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_3$$3);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 2, &tokenType, &tokenStorage, &config_param, &scopeUtil);

	if (!config_param) {
		ZEPHIR_INIT_VAR(&config);
		array_init(&config);
	} else {
		zephir_get_arrval(&config, config_param);
	}
	if (!scopeUtil) {
		scopeUtil = &scopeUtil_sub;
		scopeUtil = &__$null;
	}


	zephir_update_property_zval(this_ptr, SL("tokenType"), tokenType);
	zephir_update_property_zval(this_ptr, SL("tokenStorage"), tokenStorage);
	ZEPHIR_INIT_VAR(&_0);
	ZEPHIR_INIT_VAR(&_1);
	zephir_create_array(&_1, 1, 0 TSRMLS_CC);
	add_assoc_stringl_ex(&_1, SL("www_realm"), SL("Service"));
	zephir_fast_array_merge(&_0, &_1, &config TSRMLS_CC);
	zephir_update_property_zval(this_ptr, SL("config"), &_0);
	if (Z_TYPE_P(scopeUtil) == IS_NULL) {
		ZEPHIR_INIT_VAR(&_2$$3);
		object_init_ex(&_2$$3, spl_ce_LogicException);
		ZEPHIR_INIT_VAR(&_3$$3);
		ZEPHIR_CONCAT_SS(&_3$$3, "Must pass a scope to ", "ResourceController:__construct");
		ZEPHIR_CALL_METHOD(NULL, &_2$$3, "__construct", NULL, 18, &_3$$3);
		zephir_check_call_status();
		zephir_throw_exception_debug(&_2$$3, "oauth2/controller/resourcecontroller.zep", 33 TSRMLS_CC);
		ZEPHIR_MM_RESTORE();
		return;
	}
	zephir_update_property_zval(this_ptr, SL("scopeUtil"), scopeUtil);
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(OAuth2_Controller_ResourceController, verifyResourceRequest) {

	zval _10$$4;
	zend_bool _0, _1, _3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval scope;
	zval *request, request_sub, *response, response_sub, *scope_param = NULL, token, _2, _4, _5, _6, _7$$4, _8$$4, _9$$4, _11$$4, _12$$4, _13$$4, _14$$4, _15$$4, _16$$4;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&request_sub);
	ZVAL_UNDEF(&response_sub);
	ZVAL_UNDEF(&token);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_5);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_7$$4);
	ZVAL_UNDEF(&_8$$4);
	ZVAL_UNDEF(&_9$$4);
	ZVAL_UNDEF(&_11$$4);
	ZVAL_UNDEF(&_12$$4);
	ZVAL_UNDEF(&_13$$4);
	ZVAL_UNDEF(&_14$$4);
	ZVAL_UNDEF(&_15$$4);
	ZVAL_UNDEF(&_16$$4);
	ZVAL_UNDEF(&scope);
	ZVAL_UNDEF(&_10$$4);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 1, &request, &response, &scope_param);

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


	ZEPHIR_INIT_VAR(&token);
	ZVAL_BOOL(&token, 0);
	ZEPHIR_CALL_METHOD(&token, this_ptr, "getaccesstokendata", NULL, 0, request, response);
	zephir_check_call_status();
	if (Z_TYPE_P(&token) == IS_NULL) {
		RETURN_MM_BOOL(0);
	}
	_0 = zephir_is_true(&scope);
	if (_0) {
		_1 = !(zephir_array_isset_string(&token, SL("scope")));
		if (!(_1)) {
			ZEPHIR_OBS_VAR(&_2);
			zephir_array_fetch_string(&_2, &token, SL("scope"), PH_NOISY, "oauth2/controller/resourcecontroller.zep", 54 TSRMLS_CC);
			_1 = !zephir_is_true(&_2);
		}
		_3 = _1;
		if (!(_3)) {
			zephir_read_property(&_4, this_ptr, SL("scopeUtil"), PH_NOISY_CC | PH_READONLY);
			zephir_array_fetch_string(&_6, &token, SL("scope"), PH_NOISY | PH_READONLY, "oauth2/controller/resourcecontroller.zep", 54 TSRMLS_CC);
			ZEPHIR_CALL_METHOD(&_5, &_4, "checkscope", NULL, 0, &scope, &_6);
			zephir_check_call_status();
			_3 = !zephir_is_true(&_5);
		}
		_0 = _3;
	}
	if (_0) {
		ZVAL_LONG(&_7$$4, 403);
		ZEPHIR_INIT_VAR(&_8$$4);
		ZVAL_STRING(&_8$$4, "insufficient_scope");
		ZEPHIR_INIT_VAR(&_9$$4);
		ZVAL_STRING(&_9$$4, "The request requires higher privileges than provided by the access token");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_7$$4, &_8$$4, &_9$$4);
		zephir_check_call_status();
		ZEPHIR_INIT_VAR(&_10$$4);
		zephir_create_array(&_10$$4, 1, 0 TSRMLS_CC);
		zephir_read_property(&_7$$4, this_ptr, SL("tokenType"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_METHOD(&_11$$4, &_7$$4, "gettokentype", NULL, 0);
		zephir_check_call_status();
		zephir_read_property(&_12$$4, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_13$$4, &_12$$4, SL("www_realm"), PH_NOISY | PH_READONLY, "oauth2/controller/resourcecontroller.zep", 60 TSRMLS_CC);
		ZEPHIR_INIT_NVAR(&_8$$4);
		ZVAL_STRING(&_8$$4, "error");
		ZEPHIR_CALL_METHOD(&_14$$4, response, "getparameter", NULL, 0, &_8$$4);
		zephir_check_call_status();
		ZEPHIR_INIT_NVAR(&_8$$4);
		ZVAL_STRING(&_8$$4, "error_description");
		ZEPHIR_CALL_METHOD(&_15$$4, response, "getparameter", NULL, 0, &_8$$4);
		zephir_check_call_status();
		ZEPHIR_INIT_NVAR(&_8$$4);
		ZVAL_STRING(&_8$$4, "%s realm=\"%s\", scope=\"%s\", error=\"%s\", error_description=\"%s\"");
		ZEPHIR_CALL_FUNCTION(&_16$$4, "sprintf", NULL, 19, &_8$$4, &_11$$4, &_13$$4, &scope, &_14$$4, &_15$$4);
		zephir_check_call_status();
		zephir_array_update_string(&_10$$4, SL("WWW-Authenticate"), &_16$$4, PH_COPY | PH_SEPARATE);
		ZEPHIR_CALL_METHOD(NULL, response, "addhttpheaders", NULL, 0, &_10$$4);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	zephir_update_property_zval(this_ptr, SL("token"), &token);
	RETURN_CCTOR(&token);

}

PHP_METHOD(OAuth2_Controller_ResourceController, getAccessTokenData) {

	zend_bool _2$$3, _3$$3;
	zval _25;
	zephir_fcall_cache_entry *_20 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *request, request_sub, *response, response_sub, token_param, token, authHeader, error, error_description, _0, _15, _16, _17, _18, _19, _1$$3, _4$$3, _5$$3, _6$$4, _7$$4, _8$$4, _9$$5, _10$$5, _11$$5, _12$$6, _13$$6, _14$$6, _21$$8, _22$$8, _23$$9, _24$$9;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&request_sub);
	ZVAL_UNDEF(&response_sub);
	ZVAL_UNDEF(&token_param);
	ZVAL_UNDEF(&token);
	ZVAL_UNDEF(&authHeader);
	ZVAL_UNDEF(&error);
	ZVAL_UNDEF(&error_description);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_15);
	ZVAL_UNDEF(&_16);
	ZVAL_UNDEF(&_17);
	ZVAL_UNDEF(&_18);
	ZVAL_UNDEF(&_19);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_4$$3);
	ZVAL_UNDEF(&_5$$3);
	ZVAL_UNDEF(&_6$$4);
	ZVAL_UNDEF(&_7$$4);
	ZVAL_UNDEF(&_8$$4);
	ZVAL_UNDEF(&_9$$5);
	ZVAL_UNDEF(&_10$$5);
	ZVAL_UNDEF(&_11$$5);
	ZVAL_UNDEF(&_12$$6);
	ZVAL_UNDEF(&_13$$6);
	ZVAL_UNDEF(&_14$$6);
	ZVAL_UNDEF(&_21$$8);
	ZVAL_UNDEF(&_22$$8);
	ZVAL_UNDEF(&_23$$9);
	ZVAL_UNDEF(&_24$$9);
	ZVAL_UNDEF(&_25);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &request, &response);



	ZEPHIR_INIT_VAR(&authHeader);
	ZVAL_STRING(&authHeader, "");
	zephir_read_property(&_0, this_ptr, SL("tokenType"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&token_param, &_0, "getaccesstokenparameter", NULL, 0, request, response);
	zephir_check_call_status();
	if (zephir_is_true(&token_param)) {
		zephir_read_property(&_1$$3, this_ptr, SL("tokenStorage"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_METHOD(&token, &_1$$3, "getaccesstoken", NULL, 0, &token_param);
		zephir_check_call_status();
		_2$$3 = !(zephir_array_isset_string(&token, SL("expires")));
		if (!(_2$$3)) {
			_2$$3 = !(zephir_array_isset_string(&token, SL("client_id")));
		}
		_3$$3 = zephir_array_isset_string(&token, SL("expires"));
		if (_3$$3) {
			ZEPHIR_INIT_VAR(&_4$$3);
			zephir_time(&_4$$3);
			zephir_array_fetch_string(&_5$$3, &token, SL("expires"), PH_NOISY | PH_READONLY, "oauth2/controller/resourcecontroller.zep", 93 TSRMLS_CC);
			_3$$3 = ZEPHIR_GT(&_4$$3, &_5$$3);
		}
		if (!(zephir_is_true(&token))) {
			ZVAL_LONG(&_6$$4, 401);
			ZEPHIR_INIT_VAR(&_7$$4);
			ZVAL_STRING(&_7$$4, "invalid_token");
			ZEPHIR_INIT_VAR(&_8$$4);
			ZVAL_STRING(&_8$$4, "The access token provided is invalid");
			ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_6$$4, &_7$$4, &_8$$4);
			zephir_check_call_status();
		} else if (_2$$3) {
			ZVAL_LONG(&_9$$5, 401);
			ZEPHIR_INIT_VAR(&_10$$5);
			ZVAL_STRING(&_10$$5, "malformed_token");
			ZEPHIR_INIT_VAR(&_11$$5);
			ZVAL_STRING(&_11$$5, "Malformed token (missing 'expires')");
			ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_9$$5, &_10$$5, &_11$$5);
			zephir_check_call_status();
		} else if (_3$$3) {
			ZVAL_LONG(&_12$$6, 401);
			ZEPHIR_INIT_VAR(&_13$$6);
			ZVAL_STRING(&_13$$6, "expired_token");
			ZEPHIR_INIT_VAR(&_14$$6);
			ZVAL_STRING(&_14$$6, "The access token provided has expired");
			ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_12$$6, &_13$$6, &_14$$6);
			zephir_check_call_status();
		} else {
			RETURN_CCTOR(&token);
		}
	}
	zephir_read_property(&_15, this_ptr, SL("tokenType"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&_16, &_15, "gettokentype", NULL, 0);
	zephir_check_call_status();
	zephir_read_property(&_17, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_18, &_17, SL("www_realm"), PH_NOISY | PH_READONLY, "oauth2/controller/resourcecontroller.zep", 104 TSRMLS_CC);
	ZEPHIR_INIT_VAR(&_19);
	ZVAL_STRING(&_19, "%s realm=\"%s\"");
	ZEPHIR_CALL_FUNCTION(&authHeader, "sprintf", &_20, 19, &_19, &_16, &_18);
	zephir_check_call_status();
	ZEPHIR_INIT_NVAR(&_19);
	ZVAL_STRING(&_19, "error");
	ZEPHIR_CALL_METHOD(&error, response, "getparameter", NULL, 0, &_19);
	zephir_check_call_status();
	if (zephir_is_true(&error)) {
		ZEPHIR_INIT_VAR(&_21$$8);
		ZVAL_STRING(&_21$$8, "%s, error=\"%s\"");
		ZEPHIR_CALL_FUNCTION(&_22$$8, "sprintf", &_20, 19, &_21$$8, &authHeader, &error);
		zephir_check_call_status();
		ZEPHIR_CPY_WRT(&authHeader, &_22$$8);
		ZEPHIR_INIT_NVAR(&_21$$8);
		ZVAL_STRING(&_21$$8, "error_description");
		ZEPHIR_CALL_METHOD(&error_description, response, "getparameter", NULL, 0, &_21$$8);
		zephir_check_call_status();
		if (zephir_is_true(&error_description)) {
			ZEPHIR_INIT_VAR(&_23$$9);
			ZVAL_STRING(&_23$$9, "%s, error_description=\"%s\"");
			ZEPHIR_CALL_FUNCTION(&_24$$9, "sprintf", &_20, 19, &_23$$9, &authHeader, &error_description);
			zephir_check_call_status();
			ZEPHIR_CPY_WRT(&authHeader, &_24$$9);
		}
	}
	ZEPHIR_INIT_VAR(&_25);
	zephir_create_array(&_25, 1, 0 TSRMLS_CC);
	zephir_array_update_string(&_25, SL("WWW-Authenticate"), &authHeader, PH_COPY | PH_SEPARATE);
	ZEPHIR_CALL_METHOD(NULL, response, "addhttpheaders", NULL, 0, &_25);
	zephir_check_call_status();
	RETURN_MM_NULL();

}

PHP_METHOD(OAuth2_Controller_ResourceController, getToken) {

	zval *this_ptr = getThis();


	RETURN_MEMBER(getThis(), "token");

}

