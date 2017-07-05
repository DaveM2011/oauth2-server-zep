
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
#include "kernel/fcall.h"
#include "kernel/memory.h"
#include "kernel/operators.h"
#include "kernel/object.h"
#include "kernel/array.h"
#include "kernel/string.h"
#include "kernel/exception.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/file.h"
#include "kernel/concat.h"


/**
 * OAuth2\Request
 * This class is taken from the Symfony2 Framework and is part of the Symfony package.
 * See Symfony\Component\HttpFoundation\Request (https://github.com/symfony/symfony)
 */
ZEPHIR_INIT_CLASS(OAuth2_Request) {

	ZEPHIR_REGISTER_CLASS(OAuth2, Request, oauth2, request, oauth2_request_method_entry, 0);

	zend_declare_property_null(oauth2_request_ce, SL("attributes"), ZEND_ACC_PUBLIC TSRMLS_CC);

	zend_declare_property_null(oauth2_request_ce, SL("request"), ZEND_ACC_PUBLIC TSRMLS_CC);

	zend_declare_property_null(oauth2_request_ce, SL("query"), ZEND_ACC_PUBLIC TSRMLS_CC);

	zend_declare_property_null(oauth2_request_ce, SL("server"), ZEND_ACC_PUBLIC TSRMLS_CC);

	zend_declare_property_null(oauth2_request_ce, SL("files"), ZEND_ACC_PUBLIC TSRMLS_CC);

	zend_declare_property_null(oauth2_request_ce, SL("cookies"), ZEND_ACC_PUBLIC TSRMLS_CC);

	zend_declare_property_null(oauth2_request_ce, SL("headers"), ZEND_ACC_PUBLIC TSRMLS_CC);

	zend_declare_property_null(oauth2_request_ce, SL("content"), ZEND_ACC_PUBLIC TSRMLS_CC);

	zend_class_implements(oauth2_request_ce TSRMLS_CC, 1, oauth2_requestinterface_ce);
	return SUCCESS;

}

/**
 * Constructor.
 *
 * @param array  $query      - The GET parameters
 * @param array  $request    - The POST parameters
 * @param array  $attributes - The request attributes (parameters parsed from the PATH_INFO, ...)
 * @param array  $cookies    - The COOKIE parameters
 * @param array  $files      - The FILES parameters
 * @param array  $server     - The SERVER parameters
 * @param string $content    - The raw body data
 * @param array  $headers    - The headers
 *
 * @api
 */
PHP_METHOD(OAuth2_Request, __construct) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *query_param = NULL, *request_param = NULL, *attributes_param = NULL, *cookies_param = NULL, *files_param = NULL, *server_param = NULL, *content = NULL, content_sub, *headers_param = NULL, __$null;
	zval query, request, attributes, cookies, files, server, headers;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&query);
	ZVAL_UNDEF(&request);
	ZVAL_UNDEF(&attributes);
	ZVAL_UNDEF(&cookies);
	ZVAL_UNDEF(&files);
	ZVAL_UNDEF(&server);
	ZVAL_UNDEF(&headers);
	ZVAL_UNDEF(&content_sub);
	ZVAL_NULL(&__$null);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 8, &query_param, &request_param, &attributes_param, &cookies_param, &files_param, &server_param, &content, &headers_param);

	if (!query_param) {
		ZEPHIR_INIT_VAR(&query);
		array_init(&query);
	} else {
		zephir_get_arrval(&query, query_param);
	}
	if (!request_param) {
		ZEPHIR_INIT_VAR(&request);
		array_init(&request);
	} else {
		zephir_get_arrval(&request, request_param);
	}
	if (!attributes_param) {
		ZEPHIR_INIT_VAR(&attributes);
		array_init(&attributes);
	} else {
		zephir_get_arrval(&attributes, attributes_param);
	}
	if (!cookies_param) {
		ZEPHIR_INIT_VAR(&cookies);
		array_init(&cookies);
	} else {
		zephir_get_arrval(&cookies, cookies_param);
	}
	if (!files_param) {
		ZEPHIR_INIT_VAR(&files);
		array_init(&files);
	} else {
		zephir_get_arrval(&files, files_param);
	}
	if (!server_param) {
		ZEPHIR_INIT_VAR(&server);
		array_init(&server);
	} else {
		zephir_get_arrval(&server, server_param);
	}
	if (!content) {
		content = &content_sub;
		content = &__$null;
	}
	if (!headers_param) {
		ZEPHIR_INIT_VAR(&headers);
		array_init(&headers);
	} else {
		zephir_get_arrval(&headers, headers_param);
	}


	ZEPHIR_CALL_METHOD(NULL, this_ptr, "initialize", NULL, 0, &query, &request, &attributes, &cookies, &files, &server, content, &headers);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

/**
 * Sets the parameters for this request.
 *
 * This method also re-initializes all properties.
 *
 * @param array  $query      - The GET parameters
 * @param array  $request    - The POST parameters
 * @param array  $attributes - The request attributes (parameters parsed from the PATH_INFO, ...)
 * @param array  $cookies    - The COOKIE parameters
 * @param array  $files      - The FILES parameters
 * @param array  $server     - The SERVER parameters
 * @param string $content    - The raw body data
 * @param array  $headers    - The headers
 *
 * @api
 */
PHP_METHOD(OAuth2_Request, initialize) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *query_param = NULL, *request_param = NULL, *attributes_param = NULL, *cookies_param = NULL, *files_param = NULL, *server_param = NULL, *content = NULL, content_sub, *headers_param = NULL, __$null, _0, _1;
	zval query, request, attributes, cookies, files, server, headers;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&query);
	ZVAL_UNDEF(&request);
	ZVAL_UNDEF(&attributes);
	ZVAL_UNDEF(&cookies);
	ZVAL_UNDEF(&files);
	ZVAL_UNDEF(&server);
	ZVAL_UNDEF(&headers);
	ZVAL_UNDEF(&content_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 8, &query_param, &request_param, &attributes_param, &cookies_param, &files_param, &server_param, &content, &headers_param);

	if (!query_param) {
		ZEPHIR_INIT_VAR(&query);
		array_init(&query);
	} else {
		zephir_get_arrval(&query, query_param);
	}
	if (!request_param) {
		ZEPHIR_INIT_VAR(&request);
		array_init(&request);
	} else {
		zephir_get_arrval(&request, request_param);
	}
	if (!attributes_param) {
		ZEPHIR_INIT_VAR(&attributes);
		array_init(&attributes);
	} else {
		zephir_get_arrval(&attributes, attributes_param);
	}
	if (!cookies_param) {
		ZEPHIR_INIT_VAR(&cookies);
		array_init(&cookies);
	} else {
		zephir_get_arrval(&cookies, cookies_param);
	}
	if (!files_param) {
		ZEPHIR_INIT_VAR(&files);
		array_init(&files);
	} else {
		zephir_get_arrval(&files, files_param);
	}
	if (!server_param) {
		ZEPHIR_INIT_VAR(&server);
		array_init(&server);
	} else {
		zephir_get_arrval(&server, server_param);
	}
	if (!content) {
		content = &content_sub;
		content = &__$null;
	}
	if (!headers_param) {
		ZEPHIR_INIT_VAR(&headers);
		array_init(&headers);
	} else {
		zephir_get_arrval(&headers, headers_param);
	}


	zephir_update_property_zval(this_ptr, SL("request"), &request);
	zephir_update_property_zval(this_ptr, SL("query"), &query);
	zephir_update_property_zval(this_ptr, SL("attributes"), &attributes);
	zephir_update_property_zval(this_ptr, SL("cookies"), &cookies);
	zephir_update_property_zval(this_ptr, SL("files"), &files);
	zephir_update_property_zval(this_ptr, SL("server"), &server);
	zephir_update_property_zval(this_ptr, SL("content"), content);
	ZEPHIR_INIT_VAR(&_0);
	if (Z_TYPE_P(&headers) == IS_NULL) {
		zephir_read_property(&_1, this_ptr, SL("server"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_METHOD(&_0, this_ptr, "getheadersfromserver", NULL, 32, &_1);
		zephir_check_call_status();
	} else {
		ZEPHIR_CPY_WRT(&_0, &headers);
	}
	zephir_update_property_zval(this_ptr, SL("headers"), &_0);
	ZEPHIR_MM_RESTORE();

}

/**
 * @param string $name
 * @param mixed  $default
 * @return mixed
 */
PHP_METHOD(OAuth2_Request, query) {

	zval *name, name_sub, *_default = NULL, _default_sub, __$null, _0, _1, _2;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&name_sub);
	ZVAL_UNDEF(&_default_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &name, &_default);

	if (!_default) {
		_default = &_default_sub;
		_default = &__$null;
	}


	ZEPHIR_INIT_VAR(&_0);
	zephir_read_property(&_1, this_ptr, SL("query"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset(&_1, name)) {
		zephir_read_property(&_2, this_ptr, SL("query"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch(&_0, &_2, name, PH_NOISY, "oauth2/request.zep", 75 TSRMLS_CC);
	} else {
		ZEPHIR_CPY_WRT(&_0, _default);
	}
	RETURN_CCTOR(&_0);

}

/**
 * @param string $name
 * @param mixed  $default
 * @return mixed
 */
PHP_METHOD(OAuth2_Request, request) {

	zval *name, name_sub, *_default = NULL, _default_sub, __$null, _0, _1, _2;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&name_sub);
	ZVAL_UNDEF(&_default_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &name, &_default);

	if (!_default) {
		_default = &_default_sub;
		_default = &__$null;
	}


	ZEPHIR_INIT_VAR(&_0);
	zephir_read_property(&_1, this_ptr, SL("request"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset(&_1, name)) {
		zephir_read_property(&_2, this_ptr, SL("request"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch(&_0, &_2, name, PH_NOISY, "oauth2/request.zep", 85 TSRMLS_CC);
	} else {
		ZEPHIR_CPY_WRT(&_0, _default);
	}
	RETURN_CCTOR(&_0);

}

/**
 * @param string $name
 * @param mixed  $default
 * @return mixed
 */
PHP_METHOD(OAuth2_Request, server) {

	zval *name, name_sub, *_default = NULL, _default_sub, __$null, _0, _1, _2;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&name_sub);
	ZVAL_UNDEF(&_default_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &name, &_default);

	if (!_default) {
		_default = &_default_sub;
		_default = &__$null;
	}


	ZEPHIR_INIT_VAR(&_0);
	zephir_read_property(&_1, this_ptr, SL("server"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset(&_1, name)) {
		zephir_read_property(&_2, this_ptr, SL("server"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch(&_0, &_2, name, PH_NOISY, "oauth2/request.zep", 95 TSRMLS_CC);
	} else {
		ZEPHIR_CPY_WRT(&_0, _default);
	}
	RETURN_CCTOR(&_0);

}

/**
 * @param string $name
 * @param mixed  $default
 * @return mixed
 */
PHP_METHOD(OAuth2_Request, headers) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *name = NULL, name_sub, *_default = NULL, _default_sub, __$null, headers, _0, _1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&name_sub);
	ZVAL_UNDEF(&_default_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&headers);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &name, &_default);

	ZEPHIR_SEPARATE_PARAM(name);
	if (!_default) {
		_default = &_default_sub;
		_default = &__$null;
	}


	zephir_read_property(&_0, this_ptr, SL("headers"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_FUNCTION(&headers, "array_change_key_case", NULL, 33, &_0);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&_1);
	zephir_fast_strtolower(&_1, name);
	ZEPHIR_CPY_WRT(name, &_1);
	ZEPHIR_INIT_NVAR(&_1);
	if (zephir_array_isset(&headers, name)) {
		zephir_array_fetch(&_1, &headers, name, PH_NOISY, "oauth2/request.zep", 109 TSRMLS_CC);
	} else {
		ZEPHIR_CPY_WRT(&_1, _default);
	}
	RETURN_CCTOR(&_1);

}

/**
 * @return array
 */
PHP_METHOD(OAuth2_Request, getAllQueryParameters) {

	zval *this_ptr = getThis();


	RETURN_MEMBER(getThis(), "query");

}

/**
 * Returns the request body content.
 *
 * @param boolean $asResource - If true, a resource will be returned
 * @return string|resource    - The request body content or a resource to read the body stream.
 *
 * @throws LogicException
 */
PHP_METHOD(OAuth2_Request, getContent) {

	zend_bool _1, _2;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *asResource = NULL, asResource_sub, __$true, __$false, _0, _3, _6, _4$$4, _5$$4, _7$$5, _8$$5;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&asResource_sub);
	ZVAL_BOOL(&__$true, 1);
	ZVAL_BOOL(&__$false, 0);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_4$$4);
	ZVAL_UNDEF(&_5$$4);
	ZVAL_UNDEF(&_7$$5);
	ZVAL_UNDEF(&_8$$5);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 1, &asResource);

	if (!asResource) {
		asResource = &asResource_sub;
		asResource = &__$false;
	}


	zephir_read_property(&_0, this_ptr, SL("content"), PH_NOISY_CC | PH_READONLY);
	_1 = ZEPHIR_IS_FALSE_IDENTICAL(&_0);
	if (!(_1)) {
		_2 = ZEPHIR_IS_TRUE(asResource);
		if (_2) {
			zephir_read_property(&_3, this_ptr, SL("content"), PH_NOISY_CC | PH_READONLY);
			_2 = Z_TYPE_P(&_3) != IS_NULL;
		}
		_1 = _2;
	}
	if (_1) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(spl_ce_LogicException, "getContent() can only be called once when using the resource return type.", "oauth2/request.zep", 131);
		return;
	}
	if (ZEPHIR_IS_TRUE(asResource)) {
		if (0) {
			zephir_update_property_zval(this_ptr, SL("content"), &__$true);
		} else {
			zephir_update_property_zval(this_ptr, SL("content"), &__$false);
		}
		ZEPHIR_INIT_VAR(&_4$$4);
		ZVAL_STRING(&_4$$4, "php://input");
		ZEPHIR_INIT_VAR(&_5$$4);
		ZVAL_STRING(&_5$$4, "rb");
		ZEPHIR_RETURN_CALL_FUNCTION("fopen", NULL, 34, &_4$$4, &_5$$4);
		zephir_check_call_status();
		RETURN_MM();
	}
	zephir_read_property(&_6, this_ptr, SL("content"), PH_NOISY_CC | PH_READONLY);
	if (Z_TYPE_P(&_6) == IS_NULL) {
		ZEPHIR_INIT_VAR(&_7$$5);
		ZEPHIR_INIT_VAR(&_8$$5);
		ZVAL_STRING(&_8$$5, "php://input");
		zephir_file_get_contents(&_7$$5, &_8$$5 TSRMLS_CC);
		zephir_update_property_zval(this_ptr, SL("content"), &_7$$5);
	}
	RETURN_MM_MEMBER(getThis(), "content");

}

/**
 * @param array $server
 * @return array
 */
PHP_METHOD(OAuth2_Request, getHeadersFromServer) {

	zval _5$$3;
	zend_string *_2;
	zend_ulong _1;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *server, server_sub, headers, key, value, *_0, _3$$3, _4$$3, _6$$3, _7$$4, _8$$4, _9$$6, _10$$6, authorizationHeader$$7, requestHeaders$$10, _11$$10, _12$$10, _13$$10, _14$$10, _15$$10, _16$$11, _17$$12, _18$$12, exploded$$13, _19$$13, _20$$13, _21$$13, _22$$14, _23$$14, _24$$15, _25$$15, _26$$15, _27$$15, _28$$15;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&server_sub);
	ZVAL_UNDEF(&headers);
	ZVAL_UNDEF(&key);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_4$$3);
	ZVAL_UNDEF(&_6$$3);
	ZVAL_UNDEF(&_7$$4);
	ZVAL_UNDEF(&_8$$4);
	ZVAL_UNDEF(&_9$$6);
	ZVAL_UNDEF(&_10$$6);
	ZVAL_UNDEF(&authorizationHeader$$7);
	ZVAL_UNDEF(&requestHeaders$$10);
	ZVAL_UNDEF(&_11$$10);
	ZVAL_UNDEF(&_12$$10);
	ZVAL_UNDEF(&_13$$10);
	ZVAL_UNDEF(&_14$$10);
	ZVAL_UNDEF(&_15$$10);
	ZVAL_UNDEF(&_16$$11);
	ZVAL_UNDEF(&_17$$12);
	ZVAL_UNDEF(&_18$$12);
	ZVAL_UNDEF(&exploded$$13);
	ZVAL_UNDEF(&_19$$13);
	ZVAL_UNDEF(&_20$$13);
	ZVAL_UNDEF(&_21$$13);
	ZVAL_UNDEF(&_22$$14);
	ZVAL_UNDEF(&_23$$14);
	ZVAL_UNDEF(&_24$$15);
	ZVAL_UNDEF(&_25$$15);
	ZVAL_UNDEF(&_26$$15);
	ZVAL_UNDEF(&_27$$15);
	ZVAL_UNDEF(&_28$$15);
	ZVAL_UNDEF(&_5$$3);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &server);



	ZEPHIR_INIT_VAR(&headers);
	array_init(&headers);
	zephir_is_iterable(server, 0, "oauth2/request.zep", 164);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(server), _1, _2, _0)
	{
		ZEPHIR_INIT_NVAR(&key);
		if (_2 != NULL) { 
			ZVAL_STR_COPY(&key, _2);
		} else {
			ZVAL_LONG(&key, _1);
		}
		ZEPHIR_INIT_NVAR(&value);
		ZVAL_COPY(&value, _0);
		ZEPHIR_INIT_NVAR(&_3$$3);
		ZVAL_STRING(&_3$$3, "HTTP_");
		ZEPHIR_INIT_NVAR(&_4$$3);
		zephir_fast_strpos(&_4$$3, &key, &_3$$3, 0 );
		ZEPHIR_INIT_NVAR(&_5$$3);
		zephir_create_array(&_5$$3, 3, 0 TSRMLS_CC);
		ZEPHIR_INIT_NVAR(&_6$$3);
		ZVAL_STRING(&_6$$3, "CONTENT_LENGTH");
		zephir_array_fast_append(&_5$$3, &_6$$3);
		ZEPHIR_INIT_NVAR(&_6$$3);
		ZVAL_STRING(&_6$$3, "CONTENT_MD5");
		zephir_array_fast_append(&_5$$3, &_6$$3);
		ZEPHIR_INIT_NVAR(&_6$$3);
		ZVAL_STRING(&_6$$3, "CONTENT_TYPE");
		zephir_array_fast_append(&_5$$3, &_6$$3);
		if (ZEPHIR_IS_LONG(&_4$$3, 0)) {
			ZVAL_LONG(&_7$$4, 5);
			ZEPHIR_INIT_NVAR(&_8$$4);
			zephir_substr(&_8$$4, &key, 5 , 0, ZEPHIR_SUBSTR_NO_LENGTH);
			zephir_array_update_zval(&headers, &_8$$4, &value, PH_COPY | PH_SEPARATE);
		} else if (zephir_fast_in_array(&key, &_5$$3 TSRMLS_CC)) {
			zephir_array_update_zval(&headers, &key, &value, PH_COPY | PH_SEPARATE);
		}
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&value);
	ZEPHIR_INIT_NVAR(&key);
	if (zephir_array_isset_string(server, SL("PHP_AUTH_USER"))) {
		zephir_array_fetch_string(&_9$$6, server, SL("PHP_AUTH_USER"), PH_NOISY | PH_READONLY, "oauth2/request.zep", 165 TSRMLS_CC);
		zephir_array_update_string(&headers, SL("PHP_AUTH_USER"), &_9$$6, PH_COPY | PH_SEPARATE);
		ZEPHIR_INIT_VAR(&_10$$6);
		if (zephir_array_isset_string(server, SL("PHP_AUTH_PW"))) {
			ZEPHIR_OBS_NVAR(&_10$$6);
			zephir_array_fetch_string(&_10$$6, server, SL("PHP_AUTH_PW"), PH_NOISY, "oauth2/request.zep", 166 TSRMLS_CC);
		} else {
			ZEPHIR_INIT_NVAR(&_10$$6);
			ZVAL_STRING(&_10$$6, "");
		}
		zephir_array_update_string(&headers, SL("PHP_AUTH_PW"), &_10$$6, PH_COPY | PH_SEPARATE);
	} else {
		if (zephir_array_isset_string(server, SL("HTTP_AUTHORIZATION"))) {
			ZEPHIR_OBS_VAR(&authorizationHeader$$7);
			zephir_array_fetch_string(&authorizationHeader$$7, server, SL("HTTP_AUTHORIZATION"), PH_NOISY, "oauth2/request.zep", 182 TSRMLS_CC);
		} else if (zephir_array_isset_string(server, SL("REDIRECT_HTTP_AUTHORIZATION"))) {
			ZEPHIR_OBS_NVAR(&authorizationHeader$$7);
			zephir_array_fetch_string(&authorizationHeader$$7, server, SL("REDIRECT_HTTP_AUTHORIZATION"), PH_NOISY, "oauth2/request.zep", 184 TSRMLS_CC);
		} else if ((zephir_function_exists_ex(SL("apache_request_headers") TSRMLS_CC) == SUCCESS)) {
			ZEPHIR_INIT_VAR(&_11$$10);
			ZVAL_STRING(&_11$$10, "apache_request_headers");
			ZEPHIR_INIT_VAR(&requestHeaders$$10);
			ZEPHIR_CALL_USER_FUNC(&requestHeaders$$10, &_11$$10);
			zephir_check_call_status();
			ZEPHIR_INIT_VAR(&_12$$10);
			zephir_array_keys(&_12$$10, &requestHeaders$$10 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_13$$10);
			ZVAL_STRING(&_13$$10, "ucwords");
			ZEPHIR_CALL_FUNCTION(&_14$$10, "array_map", NULL, 35, &_13$$10, &_12$$10);
			zephir_check_call_status();
			ZEPHIR_CALL_FUNCTION(&_15$$10, "array_values", NULL, 36, &requestHeaders$$10);
			zephir_check_call_status();
			ZEPHIR_CALL_FUNCTION(&requestHeaders$$10, "array_combine", NULL, 37, &_14$$10, &_15$$10);
			zephir_check_call_status();
			if (zephir_array_isset_string(&requestHeaders$$10, SL("Authorization"))) {
				zephir_array_fetch_string(&_16$$11, &requestHeaders$$10, SL("Authorization"), PH_NOISY | PH_READONLY, "oauth2/request.zep", 193 TSRMLS_CC);
				ZEPHIR_INIT_NVAR(&authorizationHeader$$7);
				zephir_fast_trim(&authorizationHeader$$7, &_16$$11, NULL , ZEPHIR_TRIM_BOTH TSRMLS_CC);
			}
		}
		if (Z_TYPE_P(&authorizationHeader$$7) != IS_NULL) {
			zephir_array_update_string(&headers, SL("AUTHORIZATION"), &authorizationHeader$$7, PH_COPY | PH_SEPARATE);
			ZEPHIR_INIT_VAR(&_17$$12);
			ZVAL_STRING(&_17$$12, "basic");
			ZEPHIR_CALL_FUNCTION(&_18$$12, "stripos", NULL, 38, &authorizationHeader$$7, &_17$$12);
			zephir_check_call_status();
			if (ZEPHIR_IS_LONG(&_18$$12, 0)) {
				ZVAL_LONG(&_19$$13, 6);
				ZEPHIR_INIT_VAR(&_20$$13);
				zephir_substr(&_20$$13, &authorizationHeader$$7, 6 , 0, ZEPHIR_SUBSTR_NO_LENGTH);
				ZEPHIR_CALL_FUNCTION(&_21$$13, "base64_decode", NULL, 28, &_20$$13);
				zephir_check_call_status();
				ZEPHIR_INIT_VAR(&exploded$$13);
				zephir_fast_explode_str(&exploded$$13, SL(":"), &_21$$13, LONG_MAX TSRMLS_CC);
				if (zephir_fast_count_int(&exploded$$13 TSRMLS_CC) == 2) {
					zephir_array_fetch_long(&_22$$14, &exploded$$13, 0, PH_NOISY | PH_READONLY, "oauth2/request.zep", 205 TSRMLS_CC);
					zephir_array_update_string(&headers, SL("PHP_AUTH_USER"), &_22$$14, PH_COPY | PH_SEPARATE);
					zephir_array_fetch_long(&_23$$14, &exploded$$13, 1, PH_NOISY | PH_READONLY, "oauth2/request.zep", 206 TSRMLS_CC);
					zephir_array_update_string(&headers, SL("PHP_AUTH_PW"), &_23$$14, PH_COPY | PH_SEPARATE);
				}
			}
		}
	}
	if (zephir_array_isset_string(&headers, SL("PHP_AUTH_USER"))) {
		zephir_array_fetch_string(&_24$$15, &headers, SL("PHP_AUTH_USER"), PH_NOISY | PH_READONLY, "oauth2/request.zep", 214 TSRMLS_CC);
		zephir_array_fetch_string(&_25$$15, &headers, SL("PHP_AUTH_PW"), PH_NOISY | PH_READONLY, "oauth2/request.zep", 214 TSRMLS_CC);
		ZEPHIR_INIT_VAR(&_26$$15);
		ZEPHIR_CONCAT_VSV(&_26$$15, &_24$$15, ":", &_25$$15);
		ZEPHIR_CALL_FUNCTION(&_27$$15, "base64_encode", NULL, 27, &_26$$15);
		zephir_check_call_status();
		ZEPHIR_INIT_VAR(&_28$$15);
		ZEPHIR_CONCAT_SV(&_28$$15, "Basic ", &_27$$15);
		zephir_array_update_string(&headers, SL("AUTHORIZATION"), &_28$$15, PH_COPY | PH_SEPARATE);
	}
	RETURN_CCTOR(&headers);

}

/**
 * Creates a new request with values from PHP's super globals.
 *
 * @return Request - A new request
 *
 * @api
 */
PHP_METHOD(OAuth2_Request, createFromGlobals) {

	zend_bool _4, _9;
	zval _1, _6, _11;
	zval *_GET, *_POST, *_COOKIE, *_FILES, *_SERVER, __$true, request, contentType, requestMethod, data, _0, _2, _3, _5, _7, _8, _10, _12, _13$$3, _14$$4;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_BOOL(&__$true, 1);
	ZVAL_UNDEF(&request);
	ZVAL_UNDEF(&contentType);
	ZVAL_UNDEF(&requestMethod);
	ZVAL_UNDEF(&data);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_5);
	ZVAL_UNDEF(&_7);
	ZVAL_UNDEF(&_8);
	ZVAL_UNDEF(&_10);
	ZVAL_UNDEF(&_12);
	ZVAL_UNDEF(&_13$$3);
	ZVAL_UNDEF(&_14$$4);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_11);

	ZEPHIR_MM_GROW();
	zephir_get_global(&_SERVER, SL("_SERVER"));
	if (!_SERVER) {
		ZEPHIR_THROW_EXCEPTION_STR(zend_exception_get_default(), "Invalid superglobal");
		return;
	}
	zephir_get_global(&_FILES, SL("_FILES"));
	if (!_FILES) {
		ZEPHIR_THROW_EXCEPTION_STR(zend_exception_get_default(), "Invalid superglobal");
		return;
	}
	zephir_get_global(&_COOKIE, SL("_COOKIE"));
	if (!_COOKIE) {
		ZEPHIR_THROW_EXCEPTION_STR(zend_exception_get_default(), "Invalid superglobal");
		return;
	}
	zephir_get_global(&_POST, SL("_POST"));
	if (!_POST) {
		ZEPHIR_THROW_EXCEPTION_STR(zend_exception_get_default(), "Invalid superglobal");
		return;
	}
	zephir_get_global(&_GET, SL("_GET"));
	if (!_GET) {
		ZEPHIR_THROW_EXCEPTION_STR(zend_exception_get_default(), "Invalid superglobal");
		return;
	}

	ZEPHIR_INIT_VAR(&_0);
	zephir_get_called_class(&_0 TSRMLS_CC);
	ZEPHIR_INIT_VAR(&_1);
	zephir_create_array(&_1, 6, 0 TSRMLS_CC);
	zephir_array_fast_append(&_1, _GET);
	zephir_array_fast_append(&_1, _POST);
	ZEPHIR_INIT_VAR(&_2);
	array_init(&_2);
	zephir_array_fast_append(&_1, &_2);
	zephir_array_fast_append(&_1, _COOKIE);
	zephir_array_fast_append(&_1, _FILES);
	zephir_array_fast_append(&_1, _SERVER);
	ZEPHIR_INIT_VAR(&request);
	ZEPHIR_LAST_CALL_STATUS = zephir_create_instance_params(&request, &_0, &_1 TSRMLS_CC);
	zephir_check_call_status();
	ZEPHIR_INIT_NVAR(&_2);
	ZVAL_STRING(&_2, "CONTENT_TYPE");
	ZEPHIR_INIT_VAR(&_3);
	ZVAL_STRING(&_3, "");
	ZEPHIR_CALL_METHOD(&contentType, &request, "server", NULL, 0, &_2, &_3);
	zephir_check_call_status();
	ZEPHIR_INIT_NVAR(&_2);
	ZVAL_STRING(&_2, "REQUEST_METHOD");
	ZEPHIR_INIT_NVAR(&_3);
	ZVAL_STRING(&_3, "GET");
	ZEPHIR_CALL_METHOD(&requestMethod, &request, "server", NULL, 0, &_2, &_3);
	zephir_check_call_status();
	ZEPHIR_INIT_NVAR(&_2);
	ZVAL_STRING(&_2, "application/x-www-form-urlencoded");
	ZEPHIR_INIT_NVAR(&_3);
	zephir_fast_strpos(&_3, &contentType, &_2, 0 );
	_4 = ZEPHIR_IS_LONG_IDENTICAL(&_3, 0);
	if (_4) {
		ZEPHIR_INIT_VAR(&_5);
		zephir_fast_strtoupper(&_5, &requestMethod);
		ZEPHIR_INIT_VAR(&_6);
		zephir_create_array(&_6, 2, 0 TSRMLS_CC);
		ZEPHIR_INIT_VAR(&_7);
		ZVAL_STRING(&_7, "PUT");
		zephir_array_fast_append(&_6, &_7);
		ZEPHIR_INIT_NVAR(&_7);
		ZVAL_STRING(&_7, "DELETE");
		zephir_array_fast_append(&_6, &_7);
		_4 = zephir_fast_in_array(&_5, &_6 TSRMLS_CC);
	}
	ZEPHIR_INIT_NVAR(&_7);
	ZVAL_STRING(&_7, "application/json");
	ZEPHIR_INIT_VAR(&_8);
	zephir_fast_strpos(&_8, &contentType, &_7, 0 );
	_9 = ZEPHIR_IS_LONG_IDENTICAL(&_8, 0);
	if (_9) {
		ZEPHIR_INIT_VAR(&_10);
		zephir_fast_strtoupper(&_10, &requestMethod);
		ZEPHIR_INIT_VAR(&_11);
		zephir_create_array(&_11, 3, 0 TSRMLS_CC);
		ZEPHIR_INIT_VAR(&_12);
		ZVAL_STRING(&_12, "POST");
		zephir_array_fast_append(&_11, &_12);
		ZEPHIR_INIT_NVAR(&_12);
		ZVAL_STRING(&_12, "PUT");
		zephir_array_fast_append(&_11, &_12);
		ZEPHIR_INIT_NVAR(&_12);
		ZVAL_STRING(&_12, "DELETE");
		zephir_array_fast_append(&_11, &_12);
		_9 = zephir_fast_in_array(&_10, &_11 TSRMLS_CC);
	}
	if (_4) {
		ZEPHIR_CALL_METHOD(&_13$$3, &request, "getcontent", NULL, 0);
		zephir_check_call_status();
		ZEPHIR_MAKE_REF(&data);
		ZEPHIR_CALL_FUNCTION(NULL, "parse_str", NULL, 39, &_13$$3, &data);
		ZEPHIR_UNREF(&data);
		zephir_check_call_status();
		zephir_update_property_zval(&request, SL("request"), &data);
	} else if (_9) {
		ZEPHIR_CALL_METHOD(&_14$$4, &request, "getcontent", NULL, 0);
		zephir_check_call_status();
		ZEPHIR_INIT_VAR(&data);
		zephir_json_decode(&data, &_14$$4, zephir_get_intval(&__$true) );
		zephir_update_property_zval(&request, SL("request"), &data);
	}
	RETURN_CCTOR(&request);

}

