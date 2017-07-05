
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
#include "kernel/exception.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/concat.h"


/**
 * Validate a client via Http Basic authentication
 *
 * @author Brent Shaffer <bshafs at gmail dot com>
 */
ZEPHIR_INIT_CLASS(OAuth2_ClientAssertionType_HttpBasic) {

	ZEPHIR_REGISTER_CLASS(OAuth2\\ClientAssertionType, HttpBasic, oauth2, clientassertiontype_httpbasic, oauth2_clientassertiontype_httpbasic_method_entry, 0);

	zend_declare_property_null(oauth2_clientassertiontype_httpbasic_ce, SL("clientData"), ZEND_ACC_PRIVATE TSRMLS_CC);

	zend_declare_property_null(oauth2_clientassertiontype_httpbasic_ce, SL("storage"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_clientassertiontype_httpbasic_ce, SL("config"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_class_implements(oauth2_clientassertiontype_httpbasic_ce TSRMLS_CC, 1, oauth2_clientassertiontype_clientassertiontypeinterface_ce);
	return SUCCESS;

}

/**
 * @param \OAuth2\Storage\ClientCredentialsInterface clientStorage
 * REQUIRED Storage class for retrieving client credentials information
 * @param array config OPTIONAL Configuration options for the server
 * <code>
 * $config = array(
 * "allow_credentials_in_request_body" => true, // whether to look for credentials in the POST body in addition to the Authorize HTTP Header
 * "allow_public_clients"  => true // if true, "public clients" (clients without a secret) may be authenticated
 * );
 * </code>
 */
PHP_METHOD(OAuth2_ClientAssertionType_HttpBasic, __construct) {

	zval config, _1;
	zval *storage, storage_sub, *config_param = NULL, __$true, _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&storage_sub);
	ZVAL_BOOL(&__$true, 1);
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
	zephir_create_array(&_1, 2, 0 TSRMLS_CC);
	zephir_array_update_string(&_1, SL("allow_credentials_in_request_body"), &__$true, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&_1, SL("allow_public_clients"), &__$true, PH_COPY | PH_SEPARATE);
	zephir_fast_array_merge(&_0, &_1, &config TSRMLS_CC);
	zephir_update_property_zval(this_ptr, SL("config"), &_0);
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(OAuth2_ClientAssertionType_HttpBasic, validateRequest) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *request, request_sub, *response, response_sub, clientData, _0, _1$$5, _5$$5, _6$$5, _7$$5, _2$$6, _3$$6, _4$$6, _8$$7, _9$$7, _10$$7, _11$$8, _12$$8, _13$$8, _14$$8, _15$$9, _16$$9, _17$$9;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&request_sub);
	ZVAL_UNDEF(&response_sub);
	ZVAL_UNDEF(&clientData);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1$$5);
	ZVAL_UNDEF(&_5$$5);
	ZVAL_UNDEF(&_6$$5);
	ZVAL_UNDEF(&_7$$5);
	ZVAL_UNDEF(&_2$$6);
	ZVAL_UNDEF(&_3$$6);
	ZVAL_UNDEF(&_4$$6);
	ZVAL_UNDEF(&_8$$7);
	ZVAL_UNDEF(&_9$$7);
	ZVAL_UNDEF(&_10$$7);
	ZVAL_UNDEF(&_11$$8);
	ZVAL_UNDEF(&_12$$8);
	ZVAL_UNDEF(&_13$$8);
	ZVAL_UNDEF(&_14$$8);
	ZVAL_UNDEF(&_15$$9);
	ZVAL_UNDEF(&_16$$9);
	ZVAL_UNDEF(&_17$$9);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &request, &response);



	ZEPHIR_CALL_METHOD(&clientData, this_ptr, "getclientcredentials", NULL, 0, request, response);
	zephir_check_call_status();
	if (!(zephir_is_true(&clientData))) {
		RETURN_MM_BOOL(0);
	}
	if (!(zephir_array_isset_string(&clientData, SL("client_id")))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(spl_ce_LogicException, "The clientData array must have \"client_id\" set", "oauth2/clientassertiontype/httpbasic.zep", 50);
		return;
	}
	zephir_array_fetch_string(&_0, &clientData, SL("client_secret"), PH_NOISY | PH_READONLY, "oauth2/clientassertiontype/httpbasic.zep", 54 TSRMLS_CC);
	if (ZEPHIR_IS_EMPTY(&_0)) {
		zephir_read_property(&_1$$5, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		if (!(zephir_array_isset_string(&_1$$5, SL("allow_public_clients")))) {
			ZVAL_LONG(&_2$$6, 400);
			ZEPHIR_INIT_VAR(&_3$$6);
			ZVAL_STRING(&_3$$6, "invalid_client");
			ZEPHIR_INIT_VAR(&_4$$6);
			ZVAL_STRING(&_4$$6, "client credentials are required");
			ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_2$$6, &_3$$6, &_4$$6);
			zephir_check_call_status();
			RETURN_MM_BOOL(0);
		}
		zephir_read_property(&_5$$5, this_ptr, SL("storage"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_7$$5, &clientData, SL("client_id"), PH_NOISY | PH_READONLY, "oauth2/clientassertiontype/httpbasic.zep", 60 TSRMLS_CC);
		ZEPHIR_CALL_METHOD(&_6$$5, &_5$$5, "ispublicclient", NULL, 0, &_7$$5);
		zephir_check_call_status();
		if (!(zephir_is_true(&_6$$5))) {
			ZVAL_LONG(&_8$$7, 400);
			ZEPHIR_INIT_VAR(&_9$$7);
			ZVAL_STRING(&_9$$7, "invalid_client");
			ZEPHIR_INIT_VAR(&_10$$7);
			ZVAL_STRING(&_10$$7, "This client is invalid or must authenticate using a client secret");
			ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_8$$7, &_9$$7, &_10$$7);
			zephir_check_call_status();
			RETURN_MM_BOOL(0);
		}
	} else {
		zephir_read_property(&_11$$8, this_ptr, SL("storage"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_13$$8, &clientData, SL("client_id"), PH_NOISY | PH_READONLY, "oauth2/clientassertiontype/httpbasic.zep", 65 TSRMLS_CC);
		zephir_array_fetch_string(&_14$$8, &clientData, SL("client_secret"), PH_NOISY | PH_READONLY, "oauth2/clientassertiontype/httpbasic.zep", 65 TSRMLS_CC);
		ZEPHIR_CALL_METHOD(&_12$$8, &_11$$8, "checkclientcredentials", NULL, 0, &_13$$8, &_14$$8);
		zephir_check_call_status();
		if (ZEPHIR_IS_FALSE_IDENTICAL(&_12$$8)) {
			ZVAL_LONG(&_15$$9, 400);
			ZEPHIR_INIT_VAR(&_16$$9);
			ZVAL_STRING(&_16$$9, "invalid_client");
			ZEPHIR_INIT_VAR(&_17$$9);
			ZVAL_STRING(&_17$$9, "The client credentials are invalid");
			ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_15$$9, &_16$$9, &_17$$9);
			zephir_check_call_status();
			RETURN_MM_BOOL(0);
		}
	}
	zephir_update_property_zval(this_ptr, SL("clientData"), &clientData);
	RETURN_MM_BOOL(1);

}

PHP_METHOD(OAuth2_ClientAssertionType_HttpBasic, getClientId) {

	zval _0, _1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);


	zephir_read_property(&_0, this_ptr, SL("clientData"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_1, &_0, SL("client_id"), PH_NOISY | PH_READONLY, "oauth2/clientassertiontype/httpbasic.zep", 78 TSRMLS_CC);
	RETURN_CTORW(&_1);

}

/**
 * Internal function used to get the client credentials from HTTP basic
 * auth or POST data.
 *
 * According to the spec (draft 20), the client_id can be provided in
 * the Basic Authorization header (recommended) or via GET/POST.
 *
 * @return array
 * A list containing the client identifier and password, for example
 * @code
 * return array(
 *     "client_id"     => CLIENT_ID,        // REQUIRED the client id
 *     "client_secret" => CLIENT_SECRET,    // OPTIONAL the client secret (may be omitted for public clients)
 * );
 * @endcode
 *
 * @see http://tools.ietf.org/html/rfc6749#section-2.3.1
 *
 * @ingroup oauth2_section_2
 */
PHP_METHOD(OAuth2_ClientAssertionType_HttpBasic, getClientCredentials) {

	zend_bool _2;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *request, request_sub, *response = NULL, response_sub, __$null, message, _0, _1, _3, _6, _4$$3, _5$$3, _7$$4, _8$$4, _9$$4, _10$$5, _11$$5, _12$$6, _13$$6, _14$$6, _15$$6;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&request_sub);
	ZVAL_UNDEF(&response_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&message);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_4$$3);
	ZVAL_UNDEF(&_5$$3);
	ZVAL_UNDEF(&_7$$4);
	ZVAL_UNDEF(&_8$$4);
	ZVAL_UNDEF(&_9$$4);
	ZVAL_UNDEF(&_10$$5);
	ZVAL_UNDEF(&_11$$5);
	ZVAL_UNDEF(&_12$$6);
	ZVAL_UNDEF(&_13$$6);
	ZVAL_UNDEF(&_14$$6);
	ZVAL_UNDEF(&_15$$6);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &request, &response);

	if (!response) {
		response = &response_sub;
		response = &__$null;
	}


	ZEPHIR_INIT_VAR(&_1);
	ZVAL_STRING(&_1, "PHP_AUTH_USER");
	ZEPHIR_CALL_METHOD(&_0, request, "headers", NULL, 0, &_1);
	zephir_check_call_status();
	_2 = Z_TYPE_P(&_0) != IS_NULL;
	if (_2) {
		ZEPHIR_INIT_NVAR(&_1);
		ZVAL_STRING(&_1, "PHP_AUTH_PW");
		ZEPHIR_CALL_METHOD(&_3, request, "headers", NULL, 0, &_1);
		zephir_check_call_status();
		_2 = Z_TYPE_P(&_3) != IS_NULL;
	}
	if (_2) {
		zephir_create_array(return_value, 2, 0 TSRMLS_CC);
		ZEPHIR_INIT_VAR(&_5$$3);
		ZVAL_STRING(&_5$$3, "PHP_AUTH_USER");
		ZEPHIR_CALL_METHOD(&_4$$3, request, "headers", NULL, 0, &_5$$3);
		zephir_check_call_status();
		zephir_array_update_string(return_value, SL("client_id"), &_4$$3, PH_COPY | PH_SEPARATE);
		ZEPHIR_INIT_NVAR(&_5$$3);
		ZVAL_STRING(&_5$$3, "PHP_AUTH_PW");
		ZEPHIR_CALL_METHOD(&_4$$3, request, "headers", NULL, 0, &_5$$3);
		zephir_check_call_status();
		zephir_array_update_string(return_value, SL("client_secret"), &_4$$3, PH_COPY | PH_SEPARATE);
		RETURN_MM();
	}
	zephir_read_property(&_6, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset_string(&_6, SL("allow_credentials_in_request_body"))) {
		ZEPHIR_INIT_VAR(&_8$$4);
		ZVAL_STRING(&_8$$4, "client_id");
		ZVAL_NULL(&_9$$4);
		ZEPHIR_CALL_METHOD(&_7$$4, request, "request", NULL, 0, &_8$$4, &_9$$4);
		zephir_check_call_status();
		if (Z_TYPE_P(&_7$$4) != IS_NULL) {
			zephir_create_array(return_value, 2, 0 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_11$$5);
			ZVAL_STRING(&_11$$5, "client_id");
			ZEPHIR_CALL_METHOD(&_10$$5, request, "request", NULL, 0, &_11$$5);
			zephir_check_call_status();
			zephir_array_update_string(return_value, SL("client_id"), &_10$$5, PH_COPY | PH_SEPARATE);
			ZEPHIR_INIT_NVAR(&_11$$5);
			ZVAL_STRING(&_11$$5, "client_secret");
			ZEPHIR_CALL_METHOD(&_10$$5, request, "request", NULL, 0, &_11$$5);
			zephir_check_call_status();
			zephir_array_update_string(return_value, SL("client_secret"), &_10$$5, PH_COPY | PH_SEPARATE);
			RETURN_MM();
		}
	}
	if (zephir_is_true(response)) {
		zephir_read_property(&_12$$6, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		if (zephir_array_isset_string(&_12$$6, SL("allow_credentials_in_request_body"))) {
			ZEPHIR_INIT_VAR(&message);
			ZVAL_STRING(&message, " or body");
		} else {
			ZEPHIR_INIT_NVAR(&message);
			ZVAL_STRING(&message, "");
		}
		ZEPHIR_INIT_VAR(&_13$$6);
		ZEPHIR_CONCAT_SV(&_13$$6, "Client credentials were not found in the headers", &message);
		ZVAL_LONG(&_14$$6, 400);
		ZEPHIR_INIT_VAR(&_15$$6);
		ZVAL_STRING(&_15$$6, "invalid_client");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_14$$6, &_15$$6, &_13$$6);
		zephir_check_call_status();
	}
	RETURN_MM_NULL();

}

