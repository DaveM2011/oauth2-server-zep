
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
#include "kernel/memory.h"
#include "kernel/array.h"
#include "kernel/object.h"
#include "kernel/operators.h"
#include "kernel/fcall.h"
#include "kernel/string.h"
#include "kernel/concat.h"


/**
 * Bearer token
 * @package \OAuth2\TokenType
 */
ZEPHIR_INIT_CLASS(OAuth2_TokenType_Bearer) {

	ZEPHIR_REGISTER_CLASS(OAuth2\\TokenType, Bearer, oauth2, tokentype_bearer, oauth2_tokentype_bearer_method_entry, 0);

	zend_declare_property_null(oauth2_tokentype_bearer_ce, SL("config"), ZEND_ACC_PRIVATE TSRMLS_CC);

	zend_class_implements(oauth2_tokentype_bearer_ce TSRMLS_CC, 1, oauth2_tokentype_tokentypeinterface_ce);
	return SUCCESS;

}

PHP_METHOD(OAuth2_TokenType_Bearer, __construct) {

	zval *config_param = NULL, _0;
	zval config, _1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&config);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 1, &config_param);

	if (!config_param) {
		ZEPHIR_INIT_VAR(&config);
		array_init(&config);
	} else {
		zephir_get_arrval(&config, config_param);
	}


	ZEPHIR_INIT_VAR(&_0);
	ZEPHIR_INIT_VAR(&_1);
	zephir_create_array(&_1, 2, 0 TSRMLS_CC);
	add_assoc_stringl_ex(&_1, SL("token_param_name"), SL("access_token"));
	add_assoc_stringl_ex(&_1, SL("token_bearer_header_name"), SL("Bearer"));
	zephir_fast_array_merge(&_0, &_1, &config TSRMLS_CC);
	zephir_update_property_zval(this_ptr, SL("config"), &_0);
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(OAuth2_TokenType_Bearer, getTokenType) {

	zval *this_ptr = getThis();


	RETURN_STRING("Bearer");

}

/**
 * Check if the request has supplied token
 *
 * @param \OAuth2\RequestInterface request
 * @return boolean
 * @see https://github.com/bshaffer/oauth2-server-php/issues/349#issuecomment-37993588
 */
PHP_METHOD(OAuth2_TokenType_Bearer, requestHasToken) {

	zend_bool _1, _5;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *request, request_sub, headers, _0, _2, _3, _4, _6, _7;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&request_sub);
	ZVAL_UNDEF(&headers);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_7);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &request);



	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "AUTHORIZATION");
	ZEPHIR_CALL_METHOD(&headers, request, "headers", NULL, 0, &_0);
	zephir_check_call_status();
	_1 = !(ZEPHIR_IS_EMPTY(&headers));
	if (!(_1)) {
		zephir_read_property(&_3, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_4, &_3, SL("token_param_name"), PH_NOISY | PH_READONLY, "oauth2/tokentype/bearer.zep", 42 TSRMLS_CC);
		ZEPHIR_CALL_METHOD(&_2, request, "request", NULL, 0, &_4);
		zephir_check_call_status();
		_1 = zephir_get_boolval(&_2);
	}
	_5 = _1;
	if (!(_5)) {
		zephir_read_property(&_6, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_7, &_6, SL("token_param_name"), PH_NOISY | PH_READONLY, "oauth2/tokentype/bearer.zep", 42 TSRMLS_CC);
		ZEPHIR_CALL_METHOD(&_2, request, "query", NULL, 0, &_7);
		zephir_check_call_status();
		_5 = zephir_get_boolval(&_2);
	}
	RETURN_MM_BOOL(_5);

}

/**
 * This is a convenience function that can be used to get the token, which can then
 * be passed to getAccessTokenData(). The constraints specified by the draft are
 * attempted to be adheared to in this method.
 *
 * As per the Bearer spec (draft 8, section 2) - there are three ways for a client
 * to specify the bearer token, in order of preference: Authorization Header,
 * POST and GET.
 *
 * NB: Resource servers MUST accept tokens via the Authorization scheme
 * (http://tools.ietf.org/html/rfc6750#section-2).
 *
 * @param \OAuth2\RequestInterface request
 * @param \OAuth2\ResponseInterface request
 * @return string
 * @todo Should we enforce TLS/SSL in this function?
 *
 * @see http://tools.ietf.org/html/rfc6750#section-2.1
 * @see http://tools.ietf.org/html/rfc6750#section-2.2
 * @see http://tools.ietf.org/html/rfc6750#section-2.3
 *
 * Old Android version bug (at least with version 2.2)
 * @see http://code.google.com/p/android/issues/detail?id=6684
 *
 */
PHP_METHOD(OAuth2_TokenType_Bearer, getAccessTokenParameter) {

	zend_bool _29$$7;
	zval _22$$7;
	zend_long ZEPHIR_LAST_CALL_STATUS, methodsUsed = 0;
	zval *request, request_sub, *response, response_sub, headers, matches, contentType, pos, _0, _1, _2, _3, _4, _5, _18, _19, _35, _36, _6$$3, _7$$3, _8$$3, _9$$4, _10$$5, _11$$5, _12$$5, _13$$5, _17$$5, _14$$6, _15$$6, _16$$6, _20$$7, _21$$7, _33$$7, _34$$7, _23$$8, _24$$8, _25$$8, _26$$8, _27$$9, _28$$9, _30$$10, _31$$10, _32$$10;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&request_sub);
	ZVAL_UNDEF(&response_sub);
	ZVAL_UNDEF(&headers);
	ZVAL_UNDEF(&matches);
	ZVAL_UNDEF(&contentType);
	ZVAL_UNDEF(&pos);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_5);
	ZVAL_UNDEF(&_18);
	ZVAL_UNDEF(&_19);
	ZVAL_UNDEF(&_35);
	ZVAL_UNDEF(&_36);
	ZVAL_UNDEF(&_6$$3);
	ZVAL_UNDEF(&_7$$3);
	ZVAL_UNDEF(&_8$$3);
	ZVAL_UNDEF(&_9$$4);
	ZVAL_UNDEF(&_10$$5);
	ZVAL_UNDEF(&_11$$5);
	ZVAL_UNDEF(&_12$$5);
	ZVAL_UNDEF(&_13$$5);
	ZVAL_UNDEF(&_17$$5);
	ZVAL_UNDEF(&_14$$6);
	ZVAL_UNDEF(&_15$$6);
	ZVAL_UNDEF(&_16$$6);
	ZVAL_UNDEF(&_20$$7);
	ZVAL_UNDEF(&_21$$7);
	ZVAL_UNDEF(&_33$$7);
	ZVAL_UNDEF(&_34$$7);
	ZVAL_UNDEF(&_23$$8);
	ZVAL_UNDEF(&_24$$8);
	ZVAL_UNDEF(&_25$$8);
	ZVAL_UNDEF(&_26$$8);
	ZVAL_UNDEF(&_27$$9);
	ZVAL_UNDEF(&_28$$9);
	ZVAL_UNDEF(&_30$$10);
	ZVAL_UNDEF(&_31$$10);
	ZVAL_UNDEF(&_32$$10);
	ZVAL_UNDEF(&_22$$7);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &request, &response);



	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "AUTHORIZATION");
	ZEPHIR_CALL_METHOD(&headers, request, "headers", NULL, 0, &_0);
	zephir_check_call_status();
	zephir_read_property(&_2, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_3, &_2, SL("token_param_name"), PH_NOISY | PH_READONLY, "oauth2/tokentype/bearer.zep", 78 TSRMLS_CC);
	ZEPHIR_CALL_METHOD(&_1, request, "query", NULL, 0, &_3);
	zephir_check_call_status();
	zephir_read_property(&_4, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_5, &_4, SL("token_param_name"), PH_NOISY | PH_READONLY, "oauth2/tokentype/bearer.zep", 78 TSRMLS_CC);
	ZEPHIR_CALL_METHOD(&_1, request, "request", NULL, 0, &_5);
	zephir_check_call_status();
	methodsUsed = ((ZEPHIR_IS_EMPTY(&headers) + zephir_get_boolval(&_1)) + zephir_get_boolval(&_1));
	if (methodsUsed > 1) {
		ZVAL_LONG(&_6$$3, 400);
		ZEPHIR_INIT_VAR(&_7$$3);
		ZVAL_STRING(&_7$$3, "invalid_request");
		ZEPHIR_INIT_VAR(&_8$$3);
		ZVAL_STRING(&_8$$3, "Only one method may be used to authenticate at a time (Auth header, GET or POST)");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_6$$3, &_7$$3, &_8$$3);
		zephir_check_call_status();
		RETURN_MM_NULL();
	}
	if (methodsUsed == 0) {
		ZVAL_LONG(&_9$$4, 401);
		ZEPHIR_CALL_METHOD(NULL, response, "setstatuscode", NULL, 0, &_9$$4);
		zephir_check_call_status();
		RETURN_MM_NULL();
	}
	if (!(ZEPHIR_IS_EMPTY(&headers))) {
		ZEPHIR_INIT_VAR(&matches);
		ZVAL_NULL(&matches);
		ZEPHIR_INIT_VAR(&_10$$5);
		zephir_read_property(&_11$$5, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_12$$5, &_11$$5, SL("token_bearer_header_name"), PH_NOISY | PH_READONLY, "oauth2/tokentype/bearer.zep", 95 TSRMLS_CC);
		ZEPHIR_INIT_VAR(&_13$$5);
		ZEPHIR_CONCAT_SVS(&_13$$5, "/", &_12$$5, "\\s(\\S+)/");
		zephir_preg_match(&_10$$5, &_13$$5, &headers, &matches, 0, 0 , 0  TSRMLS_CC);
		if (!(zephir_is_true(&_10$$5))) {
			ZVAL_LONG(&_14$$6, 400);
			ZEPHIR_INIT_VAR(&_15$$6);
			ZVAL_STRING(&_15$$6, "invalid_request");
			ZEPHIR_INIT_VAR(&_16$$6);
			ZVAL_STRING(&_16$$6, "Malformed auth header");
			ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_14$$6, &_15$$6, &_16$$6);
			zephir_check_call_status();
			RETURN_MM_NULL();
		}
		zephir_array_fetch_long(&_17$$5, &matches, 1, PH_NOISY | PH_READONLY, "oauth2/tokentype/bearer.zep", 100 TSRMLS_CC);
		RETURN_CTOR(&_17$$5);
	}
	zephir_read_property(&_18, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_19, &_18, SL("token_param_name"), PH_NOISY | PH_READONLY, "oauth2/tokentype/bearer.zep", 103 TSRMLS_CC);
	ZEPHIR_CALL_METHOD(&_1, request, "request", NULL, 0, &_19);
	zephir_check_call_status();
	if (zephir_is_true(&_1)) {
		ZEPHIR_INIT_VAR(&_21$$7);
		ZVAL_STRING(&_21$$7, "REQUEST_METHOD");
		ZEPHIR_CALL_METHOD(&_20$$7, request, "server", NULL, 0, &_21$$7);
		zephir_check_call_status();
		ZEPHIR_INIT_VAR(&_22$$7);
		zephir_create_array(&_22$$7, 2, 0 TSRMLS_CC);
		ZEPHIR_INIT_NVAR(&_21$$7);
		ZVAL_STRING(&_21$$7, "POST");
		zephir_array_fast_append(&_22$$7, &_21$$7);
		ZEPHIR_INIT_NVAR(&_21$$7);
		ZVAL_STRING(&_21$$7, "PUT");
		zephir_array_fast_append(&_22$$7, &_21$$7);
		if (!(zephir_fast_in_array(&_20$$7, &_22$$7 TSRMLS_CC))) {
			ZVAL_LONG(&_23$$8, 400);
			ZEPHIR_INIT_VAR(&_24$$8);
			ZVAL_STRING(&_24$$8, "invalid_request");
			ZEPHIR_INIT_VAR(&_25$$8);
			ZVAL_STRING(&_25$$8, "When putting the token in the body, the method must be POST or PUT");
			ZEPHIR_INIT_VAR(&_26$$8);
			ZVAL_STRING(&_26$$8, "#section-2.2");
			ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_23$$8, &_24$$8, &_25$$8, &_26$$8);
			zephir_check_call_status();
			RETURN_MM_NULL();
		}
		ZEPHIR_INIT_NVAR(&_21$$7);
		ZVAL_STRING(&_21$$7, "CONTENT_TYPE");
		ZEPHIR_CALL_METHOD(&contentType, request, "server", NULL, 0, &_21$$7);
		zephir_check_call_status();
		ZEPHIR_INIT_NVAR(&_21$$7);
		ZVAL_STRING(&_21$$7, ";");
		ZEPHIR_INIT_VAR(&pos);
		zephir_fast_strpos(&pos, &contentType, &_21$$7, 0 );
		if (!ZEPHIR_IS_FALSE_IDENTICAL(&pos)) {
			ZVAL_LONG(&_27$$9, 0);
			ZEPHIR_INIT_VAR(&_28$$9);
			zephir_substr(&_28$$9, &contentType, 0 , zephir_get_intval(&pos), 0);
			ZEPHIR_CPY_WRT(&contentType, &_28$$9);
		}
		_29$$7 = Z_TYPE_P(&contentType) != IS_NULL;
		if (_29$$7) {
			_29$$7 = !ZEPHIR_IS_STRING(&contentType, "application/x-www-form-urlencoded");
		}
		if (_29$$7) {
			ZVAL_LONG(&_30$$10, 400);
			ZEPHIR_INIT_VAR(&_31$$10);
			ZVAL_STRING(&_31$$10, "invalid_request");
			ZEPHIR_INIT_VAR(&_32$$10);
			ZVAL_STRING(&_32$$10, "The content type for POST requests must be \"application/x-www-form-urlencoded\"");
			ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_30$$10, &_31$$10, &_32$$10);
			zephir_check_call_status();
			RETURN_MM_NULL();
		}
		zephir_read_property(&_33$$7, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_34$$7, &_33$$7, SL("token_param_name"), PH_NOISY | PH_READONLY, "oauth2/tokentype/bearer.zep", 123 TSRMLS_CC);
		ZEPHIR_RETURN_CALL_METHOD(request, "request", NULL, 0, &_34$$7);
		zephir_check_call_status();
		RETURN_MM();
	}
	zephir_read_property(&_35, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_36, &_35, SL("token_param_name"), PH_NOISY | PH_READONLY, "oauth2/tokentype/bearer.zep", 127 TSRMLS_CC);
	ZEPHIR_RETURN_CALL_METHOD(request, "query", NULL, 0, &_36);
	zephir_check_call_status();
	RETURN_MM();

}

