
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
#include "kernel/file.h"
#include "kernel/concat.h"
#include "kernel/string.h"


/**
 * @package \OAuth2\ResponseType
 * @author Brent Shaffer <bshafs at gmail dot com>
 */
ZEPHIR_INIT_CLASS(OAuth2_ResponseType_AuthorizationCode) {

	ZEPHIR_REGISTER_CLASS(OAuth2\\ResponseType, AuthorizationCode, oauth2, responsetype_authorizationcode, oauth2_responsetype_authorizationcode_method_entry, 0);

	zend_declare_property_null(oauth2_responsetype_authorizationcode_ce, SL("storage"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_responsetype_authorizationcode_ce, SL("config"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_class_implements(oauth2_responsetype_authorizationcode_ce TSRMLS_CC, 1, oauth2_responsetype_authorizationcodeinterface_ce);
	return SUCCESS;

}

PHP_METHOD(OAuth2_ResponseType_AuthorizationCode, __construct) {

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
	zephir_create_array(&_1, 2, 0 TSRMLS_CC);
	zephir_array_update_string(&_1, SL("enforce_redirect"), &__$false, PH_COPY | PH_SEPARATE);
	add_assoc_long_ex(&_1, SL("auth_code_lifetime"), 30);
	zephir_fast_array_merge(&_0, &_1, &config TSRMLS_CC);
	zephir_update_property_zval(this_ptr, SL("config"), &_0);
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(OAuth2_ResponseType_AuthorizationCode, getAuthorizeResponse) {

	zval _1;
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
		zephir_get_strval(&user_id, user_id_param);
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
	zephir_array_fetch_string(&_3, params, SL("client_id"), PH_NOISY | PH_READONLY, "oauth2/responsetype/authorizationcode.zep", 37 TSRMLS_CC);
	zephir_array_fetch_string(&_4, params, SL("redirect_uri"), PH_NOISY | PH_READONLY, "oauth2/responsetype/authorizationcode.zep", 37 TSRMLS_CC);
	zephir_array_fetch_string(&_5, params, SL("scope"), PH_NOISY | PH_READONLY, "oauth2/responsetype/authorizationcode.zep", 37 TSRMLS_CC);
	ZEPHIR_CALL_METHOD(&_2, this_ptr, "createauthorizationcode", NULL, 0, &_3, &user_id, &_4, &_5);
	zephir_check_call_status();
	zephir_array_update_multi(&result, &_2 TSRMLS_CC, SL("ss"), 4, SL("query"), SL("code"));
	if (zephir_array_isset_string(params, SL("state"))) {
		zephir_array_fetch_string(&_6$$3, params, SL("state"), PH_NOISY | PH_READONLY, "oauth2/responsetype/authorizationcode.zep", 40 TSRMLS_CC);
		zephir_array_update_multi(&result, &_6$$3 TSRMLS_CC, SL("ss"), 4, SL("query"), SL("state"));
	}
	zephir_create_array(return_value, 2, 0 TSRMLS_CC);
	ZEPHIR_OBS_VAR(&_7);
	zephir_array_fetch_string(&_7, params, SL("redirect_uri"), PH_NOISY, "oauth2/responsetype/authorizationcode.zep", 43 TSRMLS_CC);
	zephir_array_fast_append(return_value, &_7);
	zephir_array_fast_append(return_value, &result);
	RETURN_MM();

}

/**
 * Handle the creation of the authorization code.
 *
 * @param string client_id Client identifier related to the authorization code
 * @param string user_id User ID associated with the authorization code
 * @param string redirect_uri An absolute URI to which the authorization server will redirect the
 * user-agent to when the end-user authorization step is completed.
 * @param string scope (optional) Scopes to be stored in space-separated string.
 * @return strin
 *
 * @see http://tools.ietf.org/html/rfc6749#section-4
 * @ingroup oauth2_section_4
 */
PHP_METHOD(OAuth2_ResponseType_AuthorizationCode, createAuthorizationCode) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *client_id_param = NULL, *user_id_param = NULL, *redirect_uri_param = NULL, *scope_param = NULL, code, _0, _1, _2, _3, _4;
	zval client_id, user_id, redirect_uri, scope;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&client_id);
	ZVAL_UNDEF(&user_id);
	ZVAL_UNDEF(&redirect_uri);
	ZVAL_UNDEF(&scope);
	ZVAL_UNDEF(&code);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_4);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 3, 1, &client_id_param, &user_id_param, &redirect_uri_param, &scope_param);

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
	if (UNEXPECTED(Z_TYPE_P(redirect_uri_param) != IS_STRING && Z_TYPE_P(redirect_uri_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'redirect_uri' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (EXPECTED(Z_TYPE_P(redirect_uri_param) == IS_STRING)) {
		zephir_get_strval(&redirect_uri, redirect_uri_param);
	} else {
		ZEPHIR_INIT_VAR(&redirect_uri);
		ZVAL_EMPTY_STRING(&redirect_uri);
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


	ZEPHIR_CALL_METHOD(&code, this_ptr, "generateauthorizationcode", NULL, 0);
	zephir_check_call_status();
	zephir_read_property(&_0, this_ptr, SL("storage"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_VAR(&_1);
	zephir_time(&_1);
	zephir_read_property(&_2, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_3, &_2, SL("auth_code_lifetime"), PH_NOISY | PH_READONLY, "oauth2/responsetype/authorizationcode.zep", 64 TSRMLS_CC);
	ZEPHIR_INIT_VAR(&_4);
	zephir_add_function(&_4, &_1, &_3);
	ZEPHIR_CALL_METHOD(NULL, &_0, "setauthorizationcode", NULL, 0, &code, &client_id, &user_id, &redirect_uri, &_4, &scope);
	zephir_check_call_status();
	RETURN_CCTOR(&code);

}

/**
 * @return boolean  TRUE if the grant type requires a redirect_uri, FALSE if not
 */
PHP_METHOD(OAuth2_ResponseType_AuthorizationCode, enforceRedirect) {

	zval _0, _1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);


	zephir_read_property(&_0, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_1, &_0, SL("enforce_redirect"), PH_NOISY | PH_READONLY, "oauth2/responsetype/authorizationcode.zep", 74 TSRMLS_CC);
	RETURN_CTORW(&_1);

}

/**
 * Generates an unique auth code.
 *
 * Implementing classes may want to override this function to implement
 * other auth code generation schemes.
 *
 * @return string An unique auth code.
 *
 * @ingroup oauth2_section_4
 */
PHP_METHOD(OAuth2_ResponseType_AuthorizationCode, generateAuthorizationCode) {

	zephir_fcall_cache_entry *_9 = NULL;
	zval __$false, __$null, __$true, randomData, _0, _18, _19, _20, _21, _1$$3, _2$$3, _3$$4, _4$$5, _5$$5, _6$$5, _7$$5, _8$$5, _10$$5, _11$$6, _12$$6, _13$$6, _14$$6, _15$$6, _16$$6, _17$$6;
	zend_long ZEPHIR_LAST_CALL_STATUS, tokenLen = 0;
	zval *this_ptr = getThis();

	ZVAL_BOOL(&__$false, 0);
	ZVAL_NULL(&__$null);
	ZVAL_BOOL(&__$true, 1);
	ZVAL_UNDEF(&randomData);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_18);
	ZVAL_UNDEF(&_19);
	ZVAL_UNDEF(&_20);
	ZVAL_UNDEF(&_21);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_3$$4);
	ZVAL_UNDEF(&_4$$5);
	ZVAL_UNDEF(&_5$$5);
	ZVAL_UNDEF(&_6$$5);
	ZVAL_UNDEF(&_7$$5);
	ZVAL_UNDEF(&_8$$5);
	ZVAL_UNDEF(&_10$$5);
	ZVAL_UNDEF(&_11$$6);
	ZVAL_UNDEF(&_12$$6);
	ZVAL_UNDEF(&_13$$6);
	ZVAL_UNDEF(&_14$$6);
	ZVAL_UNDEF(&_15$$6);
	ZVAL_UNDEF(&_16$$6);
	ZVAL_UNDEF(&_17$$6);

	ZEPHIR_MM_GROW();

	tokenLen = 40;
	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "/dev/urandom");
	if ((zephir_function_exists_ex(SL("mcrypt_create_iv") TSRMLS_CC) == SUCCESS)) {
		ZVAL_LONG(&_1$$3, 100);
		ZVAL_LONG(&_2$$3, 1);
		ZEPHIR_CALL_FUNCTION(&randomData, "mcrypt_create_iv", NULL, 1, &_1$$3, &_2$$3);
		zephir_check_call_status();
	} else if ((zephir_function_exists_ex(SL("openssl_random_pseudo_bytes") TSRMLS_CC) == SUCCESS)) {
		ZVAL_LONG(&_3$$4, 100);
		ZEPHIR_CALL_FUNCTION(&randomData, "openssl_random_pseudo_bytes", NULL, 3, &_3$$4);
		zephir_check_call_status();
	} else if ((zephir_file_exists(&_0 TSRMLS_CC) == SUCCESS)) {
		ZEPHIR_INIT_VAR(&_4$$5);
		ZVAL_STRING(&_4$$5, "/dev/urandom");
		ZVAL_LONG(&_5$$5, 0);
		ZVAL_LONG(&_6$$5, 100);
		ZEPHIR_CALL_FUNCTION(&_7$$5, "file_get_contents", NULL, 4, &_4$$5, &__$false, &__$null, &_5$$5, &_6$$5);
		zephir_check_call_status();
		ZEPHIR_CALL_FUNCTION(&_8$$5, "mt_rand", &_9, 5);
		zephir_check_call_status();
		ZEPHIR_CALL_FUNCTION(&_10$$5, "uniqid", NULL, 6, &_8$$5, &__$true);
		zephir_check_call_status();
		ZEPHIR_INIT_NVAR(&randomData);
		ZEPHIR_CONCAT_VV(&randomData, &_7$$5, &_10$$5);
	} else {
		ZEPHIR_CALL_FUNCTION(&_11$$6, "mt_rand", &_9, 5);
		zephir_check_call_status();
		ZEPHIR_CALL_FUNCTION(&_12$$6, "mt_rand", &_9, 5);
		zephir_check_call_status();
		ZEPHIR_CALL_FUNCTION(&_13$$6, "mt_rand", &_9, 5);
		zephir_check_call_status();
		ZEPHIR_CALL_FUNCTION(&_14$$6, "mt_rand", &_9, 5);
		zephir_check_call_status();
		ZEPHIR_INIT_VAR(&_15$$6);
		zephir_microtime(&_15$$6, &__$true TSRMLS_CC);
		ZEPHIR_CALL_FUNCTION(&_16$$6, "mt_rand", &_9, 5);
		zephir_check_call_status();
		ZEPHIR_CALL_FUNCTION(&_17$$6, "uniqid", NULL, 6, &_16$$6, &__$true);
		zephir_check_call_status();
		ZEPHIR_INIT_NVAR(&randomData);
		ZEPHIR_CONCAT_VVVVVV(&randomData, &_11$$6, &_12$$6, &_13$$6, &_14$$6, &_15$$6, &_17$$6);
	}
	ZEPHIR_INIT_VAR(&_18);
	ZVAL_STRING(&_18, "sha512");
	ZEPHIR_CALL_FUNCTION(&_19, "hash", NULL, 7, &_18, &randomData);
	zephir_check_call_status();
	ZVAL_LONG(&_20, 0);
	ZVAL_LONG(&_21, tokenLen);
	zephir_substr(return_value, &_19, 0 , zephir_get_intval(&_21), 0);
	RETURN_MM();

}

