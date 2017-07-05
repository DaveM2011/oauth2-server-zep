
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
#include "kernel/operators.h"
#include "kernel/memory.h"
#include "kernel/object.h"
#include "kernel/exception.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/fcall.h"
#include "kernel/concat.h"
#include "kernel/array.h"
#include "kernel/string.h"


/**
 * @see OAuth2\Controller\TokenControllerInterface
 */
ZEPHIR_INIT_CLASS(OAuth2_Controller_TokenController) {

	ZEPHIR_REGISTER_CLASS(OAuth2\\Controller, TokenController, oauth2, controller_tokencontroller, oauth2_controller_tokencontroller_method_entry, 0);

	zend_declare_property_null(oauth2_controller_tokencontroller_ce, SL("accessToken"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_controller_tokencontroller_ce, SL("grantTypes"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_controller_tokencontroller_ce, SL("clientAssertionType"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_controller_tokencontroller_ce, SL("scopeUtil"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_controller_tokencontroller_ce, SL("clientStorage"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_class_implements(oauth2_controller_tokencontroller_ce TSRMLS_CC, 1, oauth2_controller_tokencontrollerinterface_ce);
	return SUCCESS;

}

PHP_METHOD(OAuth2_Controller_TokenController, __construct) {

	zval _4$$7;
	zephir_fcall_cache_entry *_2 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval grantTypes;
	zval *accessToken, accessToken_sub, *clientStorage, clientStorage_sub, *grantTypes_param = NULL, *clientAssertionType = NULL, clientAssertionType_sub, *scopeUtil = NULL, scopeUtil_sub, __$null, grantType, *_1, *_0$$3, _3$$7;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&accessToken_sub);
	ZVAL_UNDEF(&clientStorage_sub);
	ZVAL_UNDEF(&clientAssertionType_sub);
	ZVAL_UNDEF(&scopeUtil_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&grantType);
	ZVAL_UNDEF(&_3$$7);
	ZVAL_UNDEF(&grantTypes);
	ZVAL_UNDEF(&_4$$7);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 3, &accessToken, &clientStorage, &grantTypes_param, &clientAssertionType, &scopeUtil);

	if (!grantTypes_param) {
		ZEPHIR_INIT_VAR(&grantTypes);
		array_init(&grantTypes);
	} else {
		zephir_get_arrval(&grantTypes, grantTypes_param);
	}
	if (!clientAssertionType) {
		clientAssertionType = &clientAssertionType_sub;
		clientAssertionType = &__$null;
	}
	if (!scopeUtil) {
		scopeUtil = &scopeUtil_sub;
		scopeUtil = &__$null;
	}


	if (Z_TYPE_P(clientAssertionType) == IS_NULL) {
		zephir_is_iterable(&grantTypes, 0, "oauth2/controller/tokencontroller.zep", 34);
		ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(&grantTypes), _0$$3)
		{
			ZEPHIR_INIT_NVAR(&grantType);
			ZVAL_COPY(&grantType, _0$$3);
			if (!(zephir_instance_of_ev(&grantType, oauth2_clientassertiontype_clientassertiontypeinterface_ce TSRMLS_CC))) {
				ZEPHIR_THROW_EXCEPTION_DEBUG_STR(spl_ce_InvalidArgumentException, "You must supply an instance of OAuth2\\ClientAssertionType\\ClientAssertionTypeInterface or only use grant types which implement OAuth2\\ClientAssertionType\\ClientAssertionTypeInterface", "oauth2/controller/tokencontroller.zep", 31);
				return;
			}
		} ZEND_HASH_FOREACH_END();
		ZEPHIR_INIT_NVAR(&grantType);
	}
	zephir_update_property_zval(this_ptr, SL("clientAssertionType"), clientAssertionType);
	zephir_update_property_zval(this_ptr, SL("accessToken"), accessToken);
	zephir_update_property_zval(this_ptr, SL("clientStorage"), clientStorage);
	zephir_is_iterable(&grantTypes, 0, "oauth2/controller/tokencontroller.zep", 44);
	ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(&grantTypes), _1)
	{
		ZEPHIR_INIT_NVAR(&grantType);
		ZVAL_COPY(&grantType, _1);
		ZEPHIR_CALL_METHOD(NULL, this_ptr, "addgranttype", &_2, 0, &grantType);
		zephir_check_call_status();
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&grantType);
	if (Z_TYPE_P(scopeUtil) == IS_NULL) {
		ZEPHIR_INIT_VAR(&_3$$7);
		object_init_ex(&_3$$7, spl_ce_LogicException);
		ZEPHIR_INIT_VAR(&_4$$7);
		ZEPHIR_CONCAT_SS(&_4$$7, "Must pass a scope to ", "TokenController:__construct");
		ZEPHIR_CALL_METHOD(NULL, &_3$$7, "__construct", NULL, 18, &_4$$7);
		zephir_check_call_status();
		zephir_throw_exception_debug(&_3$$7, "oauth2/controller/tokencontroller.zep", 45 TSRMLS_CC);
		ZEPHIR_MM_RESTORE();
		return;
	}
	zephir_update_property_zval(this_ptr, SL("scopeUtil"), scopeUtil);
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(OAuth2_Controller_TokenController, handleTokenRequest) {

	zval _1$$3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *request, request_sub, *response, response_sub, token, _0$$3;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&request_sub);
	ZVAL_UNDEF(&response_sub);
	ZVAL_UNDEF(&token);
	ZVAL_UNDEF(&_0$$3);
	ZVAL_UNDEF(&_1$$3);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &request, &response);



	ZEPHIR_CALL_METHOD(&token, this_ptr, "grantaccesstoken", NULL, 0, request, response);
	zephir_check_call_status();
	if (zephir_is_true(&token)) {
		ZVAL_LONG(&_0$$3, 200);
		ZEPHIR_CALL_METHOD(NULL, response, "setstatuscode", NULL, 0, &_0$$3);
		zephir_check_call_status();
		ZEPHIR_CALL_METHOD(NULL, response, "addparameters", NULL, 0, &token);
		zephir_check_call_status();
		ZEPHIR_INIT_VAR(&_1$$3);
		zephir_create_array(&_1$$3, 2, 0 TSRMLS_CC);
		add_assoc_stringl_ex(&_1$$3, SL("Cache-Control"), SL("no-store"));
		add_assoc_stringl_ex(&_1$$3, SL("Pragma"), SL("no-cache"));
		ZEPHIR_CALL_METHOD(NULL, response, "addhttpheaders", NULL, 0, &_1$$3);
		zephir_check_call_status();
	}
	ZEPHIR_MM_RESTORE();

}

/**
 * Grant or deny a requested access token.
 * This would be called from the "/token" endpoint as defined in the spec.
 * You can call your endpoint whatever you want.
 *
 * @param RequestInterface request Request object to grant access token
 * @param ResponseInterface response
 *
 * @throws InvalidArgumentException
 * @throws LogicException
 *
 * @see http://tools.ietf.org/html/rfc6749#section-4
 * @see http://tools.ietf.org/html/rfc6749#section-10.6
 * @see http://tools.ietf.org/html/rfc6749#section-4.1.3
 *
 * @ingroup oauth2_section_4
 */
PHP_METHOD(OAuth2_Controller_TokenController, grantAccessToken) {

	zend_bool _21$$10;
	zval _7$$3;
	zephir_fcall_cache_entry *_14 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *request, request_sub, *response, response_sub, grantTypeIdentifier, grantType, clientId, storedClientId, requestedScope, availableScope, clientScope, defaultScope, _0, _1, _2, _11, _16, _20, _25, _26, _30, _51, _52, _3$$3, _4$$3, _5$$3, _6$$3, _8$$4, _9$$4, _10$$4, _12$$5, _13$$5, _15$$5, _17$$6, _18$$6, _19$$6, _22$$11, _23$$11, _24$$11, _27$$12, _28$$12, _29$$12, _31$$14, _32$$14, _33$$15, _34$$15, _35$$15, _36$$16, _37$$16, _38$$16, _39$$17, _40$$17, _41$$18, _42$$18, _43$$18, _44$$19, _45$$19, _46$$19, _47$$21, _48$$22, _49$$22, _50$$22;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&request_sub);
	ZVAL_UNDEF(&response_sub);
	ZVAL_UNDEF(&grantTypeIdentifier);
	ZVAL_UNDEF(&grantType);
	ZVAL_UNDEF(&clientId);
	ZVAL_UNDEF(&storedClientId);
	ZVAL_UNDEF(&requestedScope);
	ZVAL_UNDEF(&availableScope);
	ZVAL_UNDEF(&clientScope);
	ZVAL_UNDEF(&defaultScope);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_11);
	ZVAL_UNDEF(&_16);
	ZVAL_UNDEF(&_20);
	ZVAL_UNDEF(&_25);
	ZVAL_UNDEF(&_26);
	ZVAL_UNDEF(&_30);
	ZVAL_UNDEF(&_51);
	ZVAL_UNDEF(&_52);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_4$$3);
	ZVAL_UNDEF(&_5$$3);
	ZVAL_UNDEF(&_6$$3);
	ZVAL_UNDEF(&_8$$4);
	ZVAL_UNDEF(&_9$$4);
	ZVAL_UNDEF(&_10$$4);
	ZVAL_UNDEF(&_12$$5);
	ZVAL_UNDEF(&_13$$5);
	ZVAL_UNDEF(&_15$$5);
	ZVAL_UNDEF(&_17$$6);
	ZVAL_UNDEF(&_18$$6);
	ZVAL_UNDEF(&_19$$6);
	ZVAL_UNDEF(&_22$$11);
	ZVAL_UNDEF(&_23$$11);
	ZVAL_UNDEF(&_24$$11);
	ZVAL_UNDEF(&_27$$12);
	ZVAL_UNDEF(&_28$$12);
	ZVAL_UNDEF(&_29$$12);
	ZVAL_UNDEF(&_31$$14);
	ZVAL_UNDEF(&_32$$14);
	ZVAL_UNDEF(&_33$$15);
	ZVAL_UNDEF(&_34$$15);
	ZVAL_UNDEF(&_35$$15);
	ZVAL_UNDEF(&_36$$16);
	ZVAL_UNDEF(&_37$$16);
	ZVAL_UNDEF(&_38$$16);
	ZVAL_UNDEF(&_39$$17);
	ZVAL_UNDEF(&_40$$17);
	ZVAL_UNDEF(&_41$$18);
	ZVAL_UNDEF(&_42$$18);
	ZVAL_UNDEF(&_43$$18);
	ZVAL_UNDEF(&_44$$19);
	ZVAL_UNDEF(&_45$$19);
	ZVAL_UNDEF(&_46$$19);
	ZVAL_UNDEF(&_47$$21);
	ZVAL_UNDEF(&_48$$22);
	ZVAL_UNDEF(&_49$$22);
	ZVAL_UNDEF(&_50$$22);
	ZVAL_UNDEF(&_7$$3);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &request, &response);



	ZEPHIR_INIT_VAR(&_0);
	ZEPHIR_INIT_VAR(&_2);
	ZVAL_STRING(&_2, "REQUEST_METHOD");
	ZEPHIR_CALL_METHOD(&_1, request, "server", NULL, 0, &_2);
	zephir_check_call_status();
	zephir_fast_strtolower(&_0, &_1);
	if (!ZEPHIR_IS_STRING(&_0, "post")) {
		ZVAL_LONG(&_3$$3, 405);
		ZEPHIR_INIT_VAR(&_4$$3);
		ZVAL_STRING(&_4$$3, "invalid_request");
		ZEPHIR_INIT_VAR(&_5$$3);
		ZVAL_STRING(&_5$$3, "The request method must be POST when requesting an access token");
		ZEPHIR_INIT_VAR(&_6$$3);
		ZVAL_STRING(&_6$$3, "#section-3.2");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_3$$3, &_4$$3, &_5$$3, &_6$$3);
		zephir_check_call_status();
		ZEPHIR_INIT_VAR(&_7$$3);
		zephir_create_array(&_7$$3, 1, 0 TSRMLS_CC);
		add_assoc_stringl_ex(&_7$$3, SL("Allow"), SL("POST"));
		ZEPHIR_CALL_METHOD(NULL, response, "addhttpheaders", NULL, 0, &_7$$3);
		zephir_check_call_status();
		RETURN_MM_NULL();
	}
	ZEPHIR_INIT_NVAR(&_2);
	ZVAL_STRING(&_2, "grant_type");
	ZEPHIR_CALL_METHOD(&grantTypeIdentifier, request, "request", NULL, 0, &_2);
	zephir_check_call_status();
	if (!(zephir_is_true(&grantTypeIdentifier))) {
		ZVAL_LONG(&_8$$4, 400);
		ZEPHIR_INIT_VAR(&_9$$4);
		ZVAL_STRING(&_9$$4, "invalid_request");
		ZEPHIR_INIT_VAR(&_10$$4);
		ZVAL_STRING(&_10$$4, "The grant type was not specified in the request");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_8$$4, &_9$$4, &_10$$4);
		zephir_check_call_status();
		RETURN_MM_NULL();
	}
	zephir_read_property(&_11, this_ptr, SL("grantTypes"), PH_NOISY_CC | PH_READONLY);
	if (!(zephir_array_isset(&_11, &grantTypeIdentifier))) {
		ZEPHIR_INIT_VAR(&_12$$5);
		ZVAL_STRING(&_12$$5, "Grant type '%s' not supported");
		ZEPHIR_CALL_FUNCTION(&_13$$5, "sprintf", &_14, 19, &_12$$5, &grantTypeIdentifier);
		zephir_check_call_status();
		ZVAL_LONG(&_15$$5, 400);
		ZEPHIR_INIT_NVAR(&_12$$5);
		ZVAL_STRING(&_12$$5, "unsupported_grant_type");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_15$$5, &_12$$5, &_13$$5);
		zephir_check_call_status();
		RETURN_MM_NULL();
	}
	zephir_read_property(&_16, this_ptr, SL("grantTypes"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_OBS_VAR(&grantType);
	zephir_array_fetch(&grantType, &_16, &grantTypeIdentifier, PH_NOISY, "oauth2/controller/tokencontroller.zep", 108 TSRMLS_CC);
	if (!(zephir_instance_of_ev(&grantType, oauth2_clientassertiontype_clientassertiontypeinterface_ce TSRMLS_CC))) {
		zephir_read_property(&_17$$6, this_ptr, SL("clientAssertionType"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_METHOD(&_18$$6, &_17$$6, "validaterequest", NULL, 0, request, response);
		zephir_check_call_status();
		if (!(zephir_is_true(&_18$$6))) {
			RETURN_MM_NULL();
		}
		zephir_read_property(&_19$$6, this_ptr, SL("clientAssertionType"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_METHOD(&clientId, &_19$$6, "getclientid", NULL, 0);
		zephir_check_call_status();
	}
	ZEPHIR_CALL_METHOD(&_20, &grantType, "validaterequest", NULL, 0, request, response);
	zephir_check_call_status();
	if (!(zephir_is_true(&_20))) {
		RETURN_MM_NULL();
	}
	if (zephir_instance_of_ev(&grantType, oauth2_clientassertiontype_clientassertiontypeinterface_ce TSRMLS_CC)) {
		ZEPHIR_CALL_METHOD(&clientId, &grantType, "getclientid", NULL, 0);
		zephir_check_call_status();
	} else {
		ZEPHIR_CALL_METHOD(&storedClientId, &grantType, "getclientid", NULL, 0);
		zephir_check_call_status();
		_21$$10 = Z_TYPE_P(&storedClientId) != IS_NULL;
		if (_21$$10) {
			_21$$10 = !ZEPHIR_IS_EQUAL(&storedClientId, &clientId);
		}
		if (_21$$10) {
			ZEPHIR_INIT_VAR(&_22$$11);
			ZVAL_STRING(&_22$$11, "%s doesn't exist or is invalid for the client");
			ZEPHIR_CALL_FUNCTION(&_23$$11, "sprintf", &_14, 19, &_22$$11, &grantTypeIdentifier);
			zephir_check_call_status();
			ZVAL_LONG(&_24$$11, 400);
			ZEPHIR_INIT_NVAR(&_22$$11);
			ZVAL_STRING(&_22$$11, "invalid_grant");
			ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_24$$11, &_22$$11, &_23$$11);
			zephir_check_call_status();
			RETURN_MM_NULL();
		}
	}
	zephir_read_property(&_25, this_ptr, SL("clientStorage"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&_26, &_25, "checkrestrictedgranttype", NULL, 0, &clientId, &grantTypeIdentifier);
	zephir_check_call_status();
	if (!(zephir_is_true(&_26))) {
		ZVAL_LONG(&_27$$12, 400);
		ZEPHIR_INIT_VAR(&_28$$12);
		ZVAL_STRING(&_28$$12, "unauthorized_client");
		ZEPHIR_INIT_VAR(&_29$$12);
		ZVAL_STRING(&_29$$12, "The grant type is unauthorized for this client_id");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_27$$12, &_28$$12, &_29$$12);
		zephir_check_call_status();
		RETURN_MM_NULL();
	}
	zephir_read_property(&_30, this_ptr, SL("scopeUtil"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&requestedScope, &_30, "getscopefromrequest", NULL, 0, request);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(&availableScope, &grantType, "getscope", NULL, 0);
	zephir_check_call_status();
	if (zephir_is_true(&requestedScope)) {
		if (zephir_is_true(&availableScope)) {
			zephir_read_property(&_31$$14, this_ptr, SL("scopeUtil"), PH_NOISY_CC | PH_READONLY);
			ZEPHIR_CALL_METHOD(&_32$$14, &_31$$14, "checkscope", NULL, 0, &requestedScope, &availableScope);
			zephir_check_call_status();
			if (!(zephir_is_true(&_32$$14))) {
				ZVAL_LONG(&_33$$15, 400);
				ZEPHIR_INIT_VAR(&_34$$15);
				ZVAL_STRING(&_34$$15, "invalid_scope");
				ZEPHIR_INIT_VAR(&_35$$15);
				ZVAL_STRING(&_35$$15, "The scope requested is invalid for this request");
				ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_33$$15, &_34$$15, &_35$$15);
				zephir_check_call_status();
				RETURN_MM_NULL();
			}
		} else {
			zephir_read_property(&_36$$16, this_ptr, SL("clientStorage"), PH_NOISY_CC | PH_READONLY);
			ZEPHIR_CALL_METHOD(&clientScope, &_36$$16, "getclientscope", NULL, 0, &clientId);
			zephir_check_call_status();
			zephir_read_property(&_37$$16, this_ptr, SL("scopeUtil"), PH_NOISY_CC | PH_READONLY);
			ZEPHIR_CALL_METHOD(&_38$$16, &_37$$16, "scopeexists", NULL, 0, &requestedScope);
			zephir_check_call_status();
			if (zephir_is_true(&clientScope)) {
				zephir_read_property(&_39$$17, this_ptr, SL("scopeUtil"), PH_NOISY_CC | PH_READONLY);
				ZEPHIR_CALL_METHOD(&_40$$17, &_39$$17, "checkscope", NULL, 0, &requestedScope, &clientScope);
				zephir_check_call_status();
				if (!(zephir_is_true(&_40$$17))) {
					ZVAL_LONG(&_41$$18, 400);
					ZEPHIR_INIT_VAR(&_42$$18);
					ZVAL_STRING(&_42$$18, "invalid_scope");
					ZEPHIR_INIT_VAR(&_43$$18);
					ZVAL_STRING(&_43$$18, "The scope requested is invalid for this client");
					ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_41$$18, &_42$$18, &_43$$18);
					zephir_check_call_status();
					RETURN_MM_NULL();
				}
			} else if (!(zephir_is_true(&_38$$16))) {
				ZVAL_LONG(&_44$$19, 400);
				ZEPHIR_INIT_VAR(&_45$$19);
				ZVAL_STRING(&_45$$19, "invalid_scope");
				ZEPHIR_INIT_VAR(&_46$$19);
				ZVAL_STRING(&_46$$19, "An unsupported scope was requested");
				ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_44$$19, &_45$$19, &_46$$19);
				zephir_check_call_status();
				RETURN_MM_NULL();
			}
		}
	} else if (zephir_is_true(&availableScope)) {
		ZEPHIR_CPY_WRT(&requestedScope, &availableScope);
	} else {
		zephir_read_property(&_47$$21, this_ptr, SL("scopeUtil"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_METHOD(&defaultScope, &_47$$21, "getdefaultscope", NULL, 0, &clientId);
		zephir_check_call_status();
		if (ZEPHIR_IS_FALSE_IDENTICAL(&defaultScope)) {
			ZVAL_LONG(&_48$$22, 400);
			ZEPHIR_INIT_VAR(&_49$$22);
			ZVAL_STRING(&_49$$22, "invalid_scope");
			ZEPHIR_INIT_VAR(&_50$$22);
			ZVAL_STRING(&_50$$22, "This application requires you specify a scope parameter");
			ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_48$$22, &_49$$22, &_50$$22);
			zephir_check_call_status();
			RETURN_MM_NULL();
		}
		ZEPHIR_CPY_WRT(&requestedScope, &defaultScope);
	}
	zephir_read_property(&_51, this_ptr, SL("accessToken"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&_52, &grantType, "getuserid", NULL, 0);
	zephir_check_call_status();
	ZEPHIR_RETURN_CALL_METHOD(&grantType, "createaccesstoken", NULL, 0, &_51, &clientId, &_52, &requestedScope);
	zephir_check_call_status();
	RETURN_MM();

}

/**
 * addGrantType
 *
 * @param grantType - OAuth2\GrantTypeInterface
 * the grant type to add for the specified identifier
 * @param identifier - string
 * a string passed in as "grant_type" in the response that will call this grantType
 */
PHP_METHOD(OAuth2_Controller_TokenController, addGrantType) {

	zend_bool _0;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *grantType, grantType_sub, *identifier = NULL, identifier_sub, __$null;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&grantType_sub);
	ZVAL_UNDEF(&identifier_sub);
	ZVAL_NULL(&__$null);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &grantType, &identifier);

	if (!identifier) {
		identifier = &identifier_sub;
		ZEPHIR_CPY_WRT(identifier, &__$null);
	} else {
		ZEPHIR_SEPARATE_PARAM(identifier);
	}


	_0 = Z_TYPE_P(identifier) == IS_NULL;
	if (!(_0)) {
		_0 = zephir_is_numeric(identifier);
	}
	if (_0) {
		ZEPHIR_CALL_METHOD(identifier, grantType, "getquerystringidentifier", NULL, 0);
		zephir_check_call_status();
	}
	zephir_update_property_array(this_ptr, SL("grantTypes"), identifier, grantType TSRMLS_CC);
	ZEPHIR_MM_RESTORE();

}

