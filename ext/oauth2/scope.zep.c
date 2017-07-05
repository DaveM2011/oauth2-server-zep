
#ifdef HAVE_CONFIG_H
#include "../ext_config.h"
#endif

#include <php.h>
#include "../php_ext.h"
#include "../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/exception.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/object.h"
#include "kernel/memory.h"
#include "kernel/string.h"
#include "kernel/fcall.h"
#include "kernel/operators.h"
#include "kernel/array.h"


/**
* @see OAuth2\ScopeInterface
*/
ZEPHIR_INIT_CLASS(OAuth2_Scope) {

	ZEPHIR_REGISTER_CLASS(OAuth2, Scope, oauth2, scope, oauth2_scope_method_entry, 0);

	zend_declare_property_null(oauth2_scope_ce, SL("storage"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_class_implements(oauth2_scope_ce TSRMLS_CC, 1, oauth2_scopeinterface_ce);
	return SUCCESS;

}

/**
 * @param mixed storage
 * Either an array of supported scopes, or an instance of OAuth2\Storage\ScopeInterface
 */
PHP_METHOD(OAuth2_Scope, __construct) {

	zval *storage = NULL, storage_sub, __$null;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&storage_sub);
	ZVAL_NULL(&__$null);

	zephir_fetch_params(0, 0, 1, &storage);

	if (!storage) {
		storage = &storage_sub;
		storage = &__$null;
	}


	if (Z_TYPE_P(storage) != IS_OBJECT) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STRW(spl_ce_InvalidArgumentException, "Argument 1 to OAuth2\\Scope must be null, an array, or instance of OAuth2\\Storage\\ScopeInterface", "oauth2/scope.zep", 21);
		return;
	}
	if (!(zephir_instance_of_ev(storage, oauth2_storage_scopeinterface_ce TSRMLS_CC))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STRW(spl_ce_InvalidArgumentException, "Argument 1 to OAuth2\\Scope must be null, an array, or instance of OAuth2\\Storage\\ScopeInterface", "oauth2/scope.zep", 25);
		return;
	}
	zephir_update_property_zval(this_ptr, SL("storage"), storage);

}

/**
 * Check if everything in required scope is contained in available scope.
 *
 * @param string required_scope A space-separated string of scopes.
 *
 * @return boolean  TRUE if everything in required scope is contained in available scope,
 * and FALSE if it isn't.
 *
 * @see http://tools.ietf.org/html/rfc6749#section-7
 *
 * @ingroup oauth2_section_7
 */
PHP_METHOD(OAuth2_Scope, checkScope) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *required_scope_param = NULL, *available_scope_param = NULL, scope1, scope2, _0, _1, _2;
	zval required_scope, available_scope;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&required_scope);
	ZVAL_UNDEF(&available_scope);
	ZVAL_UNDEF(&scope1);
	ZVAL_UNDEF(&scope2);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &required_scope_param, &available_scope_param);

	if (UNEXPECTED(Z_TYPE_P(required_scope_param) != IS_STRING && Z_TYPE_P(required_scope_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'required_scope' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (EXPECTED(Z_TYPE_P(required_scope_param) == IS_STRING)) {
		zephir_get_strval(&required_scope, required_scope_param);
	} else {
		ZEPHIR_INIT_VAR(&required_scope);
		ZVAL_EMPTY_STRING(&required_scope);
	}
	if (UNEXPECTED(Z_TYPE_P(available_scope_param) != IS_STRING && Z_TYPE_P(available_scope_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'available_scope' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (EXPECTED(Z_TYPE_P(available_scope_param) == IS_STRING)) {
		zephir_get_strval(&available_scope, available_scope_param);
	} else {
		ZEPHIR_INIT_VAR(&available_scope);
		ZVAL_EMPTY_STRING(&available_scope);
	}


	ZEPHIR_INIT_VAR(&_0);
	zephir_fast_trim(&_0, &required_scope, NULL , ZEPHIR_TRIM_BOTH TSRMLS_CC);
	ZEPHIR_INIT_VAR(&scope1);
	zephir_fast_explode_str(&scope1, SL(" "), &_0, LONG_MAX TSRMLS_CC);
	ZEPHIR_INIT_VAR(&_1);
	zephir_fast_trim(&_1, &available_scope, NULL , ZEPHIR_TRIM_BOTH TSRMLS_CC);
	ZEPHIR_INIT_VAR(&scope2);
	zephir_fast_explode_str(&scope2, SL(" "), &_1, LONG_MAX TSRMLS_CC);
	ZEPHIR_CALL_FUNCTION(&_2, "array_diff", NULL, 48, &scope1, &scope2);
	zephir_check_call_status();
	RETURN_MM_BOOL(zephir_fast_count_int(&_2 TSRMLS_CC) == 0);

}

/**
 * Check if the provided scope exists in storage.
 *
 * @param string! scope A space-separated string of scopes.
 *
 * @return boolean TRUE if it exists, FALSE otherwise.
 */
PHP_METHOD(OAuth2_Scope, scopeExists) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *scope_param = NULL, scopes, reservedScope, nonReservedScopes, _0, _1, _2;
	zval scope;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&scope);
	ZVAL_UNDEF(&scopes);
	ZVAL_UNDEF(&reservedScope);
	ZVAL_UNDEF(&nonReservedScopes);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &scope_param);

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


	ZEPHIR_INIT_VAR(&_0);
	zephir_fast_trim(&_0, &scope, NULL , ZEPHIR_TRIM_BOTH TSRMLS_CC);
	ZEPHIR_INIT_VAR(&scopes);
	zephir_fast_explode_str(&scopes, SL(" "), &_0, LONG_MAX TSRMLS_CC);
	ZEPHIR_CALL_METHOD(&reservedScope, this_ptr, "getreservedscopes", NULL, 0);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(&nonReservedScopes, "array_diff", NULL, 48, &scopes, &reservedScope);
	zephir_check_call_status();
	if (zephir_fast_count_int(&nonReservedScopes TSRMLS_CC) == 0) {
		RETURN_MM_BOOL(1);
	}
	ZEPHIR_INIT_VAR(&_1);
	zephir_fast_join_str(&_1, SL(" "), &nonReservedScopes TSRMLS_CC);
	ZEPHIR_CPY_WRT(&nonReservedScopes, &_1);
	zephir_read_property(&_2, this_ptr, SL("storage"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_RETURN_CALL_METHOD(&_2, "scopeexists", NULL, 0, &nonReservedScopes);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(OAuth2_Scope, getScopeFromRequest) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *request, request_sub, _0, _1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&request_sub);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &request);



	ZEPHIR_INIT_VAR(&_1);
	ZVAL_STRING(&_1, "scope");
	ZEPHIR_CALL_METHOD(&_0, request, "query", NULL, 0, &_1);
	zephir_check_call_status();
	ZEPHIR_INIT_NVAR(&_1);
	ZVAL_STRING(&_1, "scope");
	ZEPHIR_RETURN_CALL_METHOD(request, "request", NULL, 0, &_1, &_0);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(OAuth2_Scope, getDefaultScope) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *client_id_param = NULL, _0;
	zval client_id;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&client_id);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 1, &client_id_param);

	if (!client_id_param) {
		ZEPHIR_INIT_VAR(&client_id);
		ZVAL_STRING(&client_id, "");
	} else {
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
	}


	zephir_read_property(&_0, this_ptr, SL("storage"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_RETURN_CALL_METHOD(&_0, "getdefaultscope", NULL, 0, &client_id);
	zephir_check_call_status();
	RETURN_MM();

}

/**
 * Get reserved scopes needed by the server.
 *
 * In case OpenID Connect is used, these scopes must include:
 * 'openid', offline_access'.
 *
 * @return
 * An array of reserved scopes.
 */
PHP_METHOD(OAuth2_Scope, getReservedScopes) {

	zval _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();

	zephir_create_array(return_value, 2, 0 TSRMLS_CC);
	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "openid");
	zephir_array_fast_append(return_value, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "offline_access");
	zephir_array_fast_append(return_value, &_0);
	RETURN_MM();

}

