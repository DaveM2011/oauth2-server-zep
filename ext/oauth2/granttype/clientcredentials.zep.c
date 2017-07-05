
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
#include "kernel/array.h"
#include "kernel/fcall.h"
#include "kernel/memory.h"
#include "kernel/operators.h"
#include "kernel/object.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/exception.h"


/**
 * @author Brent Shaffer <bshafs at gmail dot com>
 *
 * @see OAuth2\ClientAssertionType_HttpBasic
 */
ZEPHIR_INIT_CLASS(OAuth2_GrantType_ClientCredentials) {

	ZEPHIR_REGISTER_CLASS_EX(OAuth2\\GrantType, ClientCredentials, oauth2, granttype_clientcredentials, oauth2_clientassertiontype_httpbasic_ce, oauth2_granttype_clientcredentials_method_entry, 0);

	zend_declare_property_null(oauth2_granttype_clientcredentials_ce, SL("clientData"), ZEND_ACC_PRIVATE TSRMLS_CC);

	zend_class_implements(oauth2_granttype_clientcredentials_ce TSRMLS_CC, 1, oauth2_granttype_granttypeinterface_ce);
	return SUCCESS;

}

PHP_METHOD(OAuth2_GrantType_ClientCredentials, __construct) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zephir_fcall_cache_entry *_0 = NULL;
	zval config;
	zval *storage, storage_sub, *config_param = NULL, __$false;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&storage_sub);
	ZVAL_BOOL(&__$false, 0);
	ZVAL_UNDEF(&config);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &storage, &config_param);

	if (!config_param) {
		ZEPHIR_INIT_VAR(&config);
		array_init(&config);
	} else {
		zephir_get_arrval(&config, config_param);
	}


	zephir_array_update_string(&config, SL("allow_public_clients"), &__$false, PH_COPY | PH_SEPARATE);
	ZEPHIR_CALL_PARENT(NULL, oauth2_granttype_clientcredentials_ce, getThis(), "__construct", &_0, 0, storage, &config);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(OAuth2_GrantType_ClientCredentials, getQuerystringIdentifier) {

	zval *this_ptr = getThis();


	RETURN_STRING("client_credentials");

}

PHP_METHOD(OAuth2_GrantType_ClientCredentials, getScope) {

	zval _0, _1, _2;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();

	ZEPHIR_CALL_METHOD(NULL, this_ptr, "loadclientdata", NULL, 30);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&_0);
	zephir_read_property(&_1, this_ptr, SL("clientData"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset_string(&_1, SL("scope"))) {
		zephir_read_property(&_2, this_ptr, SL("clientData"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_0, &_2, SL("scope"), PH_NOISY, "oauth2/granttype/clientcredentials.zep", 35 TSRMLS_CC);
	} else {
		ZVAL_NULL(&_0);
	}
	RETURN_CCTOR(&_0);

}

PHP_METHOD(OAuth2_GrantType_ClientCredentials, getUserId) {

	zval _0, _1, _2;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();

	ZEPHIR_CALL_METHOD(NULL, this_ptr, "loadclientdata", NULL, 30);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&_0);
	zephir_read_property(&_1, this_ptr, SL("clientData"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset_string(&_1, SL("user_id"))) {
		zephir_read_property(&_2, this_ptr, SL("clientData"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_0, &_2, SL("user_id"), PH_NOISY, "oauth2/granttype/clientcredentials.zep", 41 TSRMLS_CC);
	} else {
		ZVAL_NULL(&_0);
	}
	RETURN_CCTOR(&_0);

}

PHP_METHOD(OAuth2_GrantType_ClientCredentials, createAccessToken) {

	zend_bool includeRefreshToken = 0;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval client_id, user_id, scope;
	zval *accessToken, accessToken_sub, *client_id_param = NULL, *user_id_param = NULL, *scope_param = NULL, _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&accessToken_sub);
	ZVAL_UNDEF(&_0);
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


	includeRefreshToken = 0;
	if (includeRefreshToken) {
		ZVAL_BOOL(&_0, 1);
	} else {
		ZVAL_BOOL(&_0, 0);
	}
	ZEPHIR_RETURN_CALL_METHOD(accessToken, "createaccesstoken", NULL, 0, &client_id, &user_id, &scope, &_0);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(OAuth2_GrantType_ClientCredentials, loadClientData) {

	zval _0, _1$$3, _2$$3, _3$$3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_3$$3);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("clientData"), PH_NOISY_CC | PH_READONLY);
	if (!(zephir_is_true(&_0))) {
		zephir_read_property(&_1$$3, this_ptr, SL("storage"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_METHOD(&_3$$3, this_ptr, "getclientid", NULL, 0);
		zephir_check_call_status();
		ZEPHIR_CALL_METHOD(&_2$$3, &_1$$3, "getclientdetails", NULL, 0, &_3$$3);
		zephir_check_call_status();
		zephir_update_property_zval(this_ptr, SL("clientData"), &_2$$3);
	}
	ZEPHIR_MM_RESTORE();

}

