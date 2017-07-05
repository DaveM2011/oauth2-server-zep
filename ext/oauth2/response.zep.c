
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
#include "kernel/object.h"
#include "kernel/memory.h"
#include "kernel/operators.h"
#include "kernel/array.h"
#include "kernel/concat.h"
#include "kernel/string.h"
#include "kernel/exception.h"
#include "ext/spl/spl_exceptions.h"


/**
 * Class to handle OAuth2 Responses in a graceful way.  Use this interface
 * to output the proper OAuth2 responses.
 *
 * @see OAuth2\ResponseInterface
 *
 * This class borrows heavily from the Symfony2 Framework and is part of the symfony package
 * @see Symfony\Component\HttpFoundation\Request (https://github.com/symfony/symfony)
 */
ZEPHIR_INIT_CLASS(OAuth2_Response) {

	ZEPHIR_REGISTER_CLASS(OAuth2, Response, oauth2, response, oauth2_response_method_entry, 0);

	/**
	 * @var string
	 */
	zend_declare_property_null(oauth2_response_ce, SL("version"), ZEND_ACC_PUBLIC TSRMLS_CC);

	/**
	 * @var int
	 */
	zend_declare_property_long(oauth2_response_ce, SL("statusCode"), 200, ZEND_ACC_PROTECTED TSRMLS_CC);

	/**
	 * @var string
	 */
	zend_declare_property_null(oauth2_response_ce, SL("statusText"), ZEND_ACC_PROTECTED TSRMLS_CC);

	/**
	 * @var array
	 */
	zend_declare_property_null(oauth2_response_ce, SL("parameters"), ZEND_ACC_PROTECTED TSRMLS_CC);

	/**
	 * @var array
	 */
	zend_declare_property_null(oauth2_response_ce, SL("httpHeaders"), ZEND_ACC_PROTECTED TSRMLS_CC);

	/**
	 * @var array
	 */
	zend_declare_property_null(oauth2_response_ce, SL("statusTexts"), ZEND_ACC_PUBLIC|ZEND_ACC_STATIC TSRMLS_CC);

	oauth2_response_ce->create_object = zephir_init_properties_OAuth2_Response;

	zend_class_implements(oauth2_response_ce TSRMLS_CC, 1, oauth2_responseinterface_ce);
	return SUCCESS;

}

/**
 * @param array $parameters
 * @param int   $statusCode
 * @param array $headers
 */
PHP_METHOD(OAuth2_Response, __construct) {

	zend_long statusCode, ZEPHIR_LAST_CALL_STATUS;
	zval *parameters_param = NULL, *statusCode_param = NULL, *headers_param = NULL, _0, _1;
	zval parameters, headers;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&parameters);
	ZVAL_UNDEF(&headers);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 3, &parameters_param, &statusCode_param, &headers_param);

	if (!parameters_param) {
		ZEPHIR_INIT_VAR(&parameters);
		array_init(&parameters);
	} else {
		zephir_get_arrval(&parameters, parameters_param);
	}
	if (!statusCode_param) {
		statusCode = 200;
	} else {
		statusCode = zephir_get_intval(statusCode_param);
	}
	if (!headers_param) {
		ZEPHIR_INIT_VAR(&headers);
		array_init(&headers);
	} else {
		zephir_get_arrval(&headers, headers_param);
	}


	ZEPHIR_CALL_METHOD(NULL, this_ptr, "setparameters", NULL, 0, &parameters);
	zephir_check_call_status();
	ZVAL_LONG(&_0, statusCode);
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "setstatuscode", NULL, 0, &_0);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "sethttpheaders", NULL, 0, &headers);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&_1);
	ZEPHIR_INIT_NVAR(&_1);
	ZVAL_STRING(&_1, "1.1");
	zephir_update_property_zval(this_ptr, SL("version"), &_1);
	ZEPHIR_MM_RESTORE();

}

/**
 * Converts the response object to string containing all headers and the response content.
 *
 * @return string The response with headers and content
 */
PHP_METHOD(OAuth2_Response, __toString) {

	zval _4$$3;
	zend_string *_3;
	zend_ulong _2;
	zval headers, name, value, _0, *_1, _5, _6, _7, _8, _9, _10, _11;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&headers);
	ZVAL_UNDEF(&name);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_5);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_7);
	ZVAL_UNDEF(&_8);
	ZVAL_UNDEF(&_9);
	ZVAL_UNDEF(&_10);
	ZVAL_UNDEF(&_11);
	ZVAL_UNDEF(&_4$$3);

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(&headers);
	array_init(&headers);
	zephir_read_property(&_0, this_ptr, SL("httpHeaders"), PH_NOISY_CC | PH_READONLY);
	zephir_is_iterable(&_0, 0, "oauth2/response.zep", 113);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&_0), _2, _3, _1)
	{
		ZEPHIR_INIT_NVAR(&name);
		if (_3 != NULL) { 
			ZVAL_STR_COPY(&name, _3);
		} else {
			ZVAL_LONG(&name, _2);
		}
		ZEPHIR_INIT_NVAR(&value);
		ZVAL_COPY(&value, _1);
		zephir_get_arrval(&_4$$3, &value);
		zephir_array_update_zval(&headers, &name, &_4$$3, PH_COPY | PH_SEPARATE);
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&value);
	ZEPHIR_INIT_NVAR(&name);
	zephir_read_property(&_5, this_ptr, SL("version"), PH_NOISY_CC | PH_READONLY);
	zephir_read_property(&_6, this_ptr, SL("statusCode"), PH_NOISY_CC | PH_READONLY);
	zephir_read_property(&_7, this_ptr, SL("statusText"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_VAR(&_8);
	ZVAL_STRING(&_8, "HTTP/%s %s %s");
	ZEPHIR_CALL_FUNCTION(&_9, "sprintf", NULL, 19, &_8, &_5, &_6, &_7);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(&_10, this_ptr, "gethttpheadersasstring", NULL, 40, &headers);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(&_11, this_ptr, "getresponsebody", NULL, 0);
	zephir_check_call_status();
	ZEPHIR_CONCAT_VSVSV(return_value, &_9, "\r\n", &_10, "\r\n", &_11);
	RETURN_MM();

}

/**
 * Returns the build header line.
 *
 * @param string $name  The header name
 * @param string $value The header value
 *
 * @return string The built header line
 */
PHP_METHOD(OAuth2_Response, buildHeader) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *name, name_sub, *value, value_sub, _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&name_sub);
	ZVAL_UNDEF(&value_sub);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &name, &value);



	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "%s: %s\n");
	ZEPHIR_RETURN_CALL_FUNCTION("sprintf", NULL, 19, &_0, name, value);
	zephir_check_call_status();
	RETURN_MM();

}

/**
 * @return int
 */
PHP_METHOD(OAuth2_Response, getStatusCode) {

	zval *this_ptr = getThis();


	RETURN_MEMBER(getThis(), "statusCode");

}

/**
 * @param int $statusCode
 * @param string $text
 * @throws InvalidArgumentException
 */
PHP_METHOD(OAuth2_Response, setStatusCode) {

	zval *statusCode_param = NULL, *text = NULL, text_sub, __$null, _0, _1, _2, _3;
	zend_long statusCode, ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&text_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_3);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &statusCode_param, &text);

	statusCode = zephir_get_intval(statusCode_param);
	if (!text) {
		text = &text_sub;
		text = &__$null;
	}


	ZEPHIR_INIT_ZVAL_NREF(_0);
	ZVAL_LONG(&_0, statusCode);
	zephir_update_property_zval(this_ptr, SL("statusCode"), &_0);
	ZEPHIR_CALL_METHOD(&_1, this_ptr, "isinvalid", NULL, 0);
	zephir_check_call_status();
	if (zephir_is_true(&_1)) {
	}
	ZEPHIR_INIT_VAR(&_2);
	if (ZEPHIR_IS_FALSE(text)) {
		ZEPHIR_INIT_NVAR(&_2);
		ZVAL_STRING(&_2, "");
	} else {
		if (Z_TYPE_P(text) == IS_NULL) {
			zephir_read_static_property_ce(&_0, oauth2_response_ce, SL("statusTexts"), PH_NOISY_CC | PH_READONLY);
			ZEPHIR_OBS_NVAR(&_2);
			ZEPHIR_OBS_VAR(&_3);
			zephir_read_property(&_3, this_ptr, SL("statusCode"), PH_NOISY_CC);
			zephir_array_fetch(&_2, &_0, &_3, PH_NOISY, "oauth2/response.zep", 151 TSRMLS_CC);
		} else {
			ZEPHIR_CPY_WRT(&_2, text);
		}
	}
	zephir_update_property_zval(this_ptr, SL("statusText"), &_2);
	ZEPHIR_MM_RESTORE();

}

/**
 * @return string
 */
PHP_METHOD(OAuth2_Response, getStatusText) {

	zval *this_ptr = getThis();


	RETURN_MEMBER(getThis(), "statusText");

}

/**
 * @return array
 */
PHP_METHOD(OAuth2_Response, getParameters) {

	zval *this_ptr = getThis();


	RETURN_MEMBER(getThis(), "parameters");

}

/**
 * @param array $parameters
 */
PHP_METHOD(OAuth2_Response, setParameters) {

	zval *parameters_param = NULL;
	zval parameters;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&parameters);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &parameters_param);

	zephir_get_arrval(&parameters, parameters_param);


	zephir_update_property_zval(this_ptr, SL("parameters"), &parameters);
	ZEPHIR_MM_RESTORE();

}

/**
 * @param array $parameters
 */
PHP_METHOD(OAuth2_Response, addParameters) {

	zval *parameters_param = NULL, _0, _1;
	zval parameters;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&parameters);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &parameters_param);

	zephir_get_arrval(&parameters, parameters_param);


	ZEPHIR_INIT_VAR(&_0);
	zephir_read_property(&_1, this_ptr, SL("parameters"), PH_NOISY_CC | PH_READONLY);
	zephir_fast_array_merge(&_0, &_1, &parameters TSRMLS_CC);
	zephir_update_property_zval(this_ptr, SL("parameters"), &_0);
	ZEPHIR_MM_RESTORE();

}

/**
 * @param string $name
 * @param mixed  $default
 * @return mixed
 */
PHP_METHOD(OAuth2_Response, getParameter) {

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
	zephir_read_property(&_1, this_ptr, SL("parameters"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset(&_1, name)) {
		zephir_read_property(&_2, this_ptr, SL("parameters"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch(&_0, &_2, name, PH_NOISY, "oauth2/response.zep", 193 TSRMLS_CC);
	} else {
		ZEPHIR_CPY_WRT(&_0, _default);
	}
	RETURN_CCTOR(&_0);

}

/**
 * @param string $name
 * @param mixed  $value
 */
PHP_METHOD(OAuth2_Response, setParameter) {

	zval *name, name_sub, *value, value_sub;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&name_sub);
	ZVAL_UNDEF(&value_sub);

	zephir_fetch_params(0, 2, 0, &name, &value);



	zephir_update_property_array(this_ptr, SL("parameters"), name, value TSRMLS_CC);

}

/**
 * @param array $httpHeaders
 */
PHP_METHOD(OAuth2_Response, setHttpHeaders) {

	zval *httpHeaders_param = NULL;
	zval httpHeaders;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&httpHeaders);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &httpHeaders_param);

	zephir_get_arrval(&httpHeaders, httpHeaders_param);


	zephir_update_property_zval(this_ptr, SL("httpHeaders"), &httpHeaders);
	ZEPHIR_MM_RESTORE();

}

/**
 * @param string $name
 * @param mixed $value
 */
PHP_METHOD(OAuth2_Response, setHttpHeader) {

	zval *name, name_sub, *value, value_sub;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&name_sub);
	ZVAL_UNDEF(&value_sub);

	zephir_fetch_params(0, 2, 0, &name, &value);



	zephir_update_property_array(this_ptr, SL("httpHeaders"), name, value TSRMLS_CC);

}

/**
 * @param array $httpHeaders
 */
PHP_METHOD(OAuth2_Response, addHttpHeaders) {

	zval *httpHeaders_param = NULL, _0, _1;
	zval httpHeaders;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&httpHeaders);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &httpHeaders_param);

	zephir_get_arrval(&httpHeaders, httpHeaders_param);


	ZEPHIR_INIT_VAR(&_0);
	zephir_read_property(&_1, this_ptr, SL("httpHeaders"), PH_NOISY_CC | PH_READONLY);
	zephir_fast_array_merge(&_0, &_1, &httpHeaders TSRMLS_CC);
	zephir_update_property_zval(this_ptr, SL("httpHeaders"), &_0);
	ZEPHIR_MM_RESTORE();

}

/**
 * @return array
 */
PHP_METHOD(OAuth2_Response, getHttpHeaders) {

	zval *this_ptr = getThis();


	RETURN_MEMBER(getThis(), "httpHeaders");

}

/**
 * @param string $name
 * @param mixed  $default
 * @return mixed
 */
PHP_METHOD(OAuth2_Response, getHttpHeader) {

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
	zephir_read_property(&_1, this_ptr, SL("httpHeaders"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset(&_1, name)) {
		zephir_read_property(&_2, this_ptr, SL("httpHeaders"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch(&_0, &_2, name, PH_NOISY, "oauth2/response.zep", 245 TSRMLS_CC);
	} else {
		ZEPHIR_CPY_WRT(&_0, _default);
	}
	RETURN_CCTOR(&_0);

}

/**
 * @param string $format
 * @return mixed
 * @throws InvalidArgumentException
 */
PHP_METHOD(OAuth2_Response, getResponseBody) {

	zend_string *_7$$4;
	zend_ulong _6$$4;
	zephir_fcall_cache_entry *_8 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *format = NULL, format_sub, xml, key, param, _9, _10, _11, _0$$3, _1$$3, _2$$3, _3$$4, _4$$4, *_5$$4;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&format_sub);
	ZVAL_UNDEF(&xml);
	ZVAL_UNDEF(&key);
	ZVAL_UNDEF(&param);
	ZVAL_UNDEF(&_9);
	ZVAL_UNDEF(&_10);
	ZVAL_UNDEF(&_11);
	ZVAL_UNDEF(&_0$$3);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_3$$4);
	ZVAL_UNDEF(&_4$$4);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 1, &format);

	if (!format) {
		format = &format_sub;
		ZEPHIR_INIT_VAR(format);
		ZVAL_STRING(format, "json");
	}


	do {
		if (ZEPHIR_IS_STRING(format, "json")) {
			ZEPHIR_INIT_VAR(&_0$$3);
			zephir_read_property(&_1$$3, this_ptr, SL("parameters"), PH_NOISY_CC | PH_READONLY);
			if (zephir_is_true(&_1$$3)) {
				zephir_read_property(&_2$$3, this_ptr, SL("parameters"), PH_NOISY_CC | PH_READONLY);
				zephir_json_encode(&_0$$3, &_2$$3, 0 );
			} else {
				ZVAL_STRING(&_0$$3, "");
			}
			RETURN_CCTOR(&_0$$3);
		}
		if (ZEPHIR_IS_STRING(format, "xml")) {
			ZEPHIR_INIT_VAR(&xml);
			object_init_ex(&xml, zephir_get_internal_ce(SL("simplexmlelement")));
			ZEPHIR_INIT_VAR(&_3$$4);
			ZVAL_STRING(&_3$$4, "<response/>");
			ZEPHIR_CALL_METHOD(NULL, &xml, "__construct", NULL, 0, &_3$$4);
			zephir_check_call_status();
			zephir_read_property(&_4$$4, this_ptr, SL("parameters"), PH_NOISY_CC | PH_READONLY);
			zephir_is_iterable(&_4$$4, 0, "oauth2/response.zep", 265);
			ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&_4$$4), _6$$4, _7$$4, _5$$4)
			{
				ZEPHIR_INIT_NVAR(&key);
				if (_7$$4 != NULL) { 
					ZVAL_STR_COPY(&key, _7$$4);
				} else {
					ZVAL_LONG(&key, _6$$4);
				}
				ZEPHIR_INIT_NVAR(&param);
				ZVAL_COPY(&param, _5$$4);
				ZEPHIR_CALL_METHOD(NULL, &xml, "addchild", &_8, 0, &key, &param);
				zephir_check_call_status();
			} ZEND_HASH_FOREACH_END();
			ZEPHIR_INIT_NVAR(&param);
			ZEPHIR_INIT_NVAR(&key);
			ZEPHIR_RETURN_CALL_METHOD(&xml, "asxml", NULL, 0);
			zephir_check_call_status();
			RETURN_MM();
		}
	} while(0);

	ZEPHIR_INIT_VAR(&_9);
	object_init_ex(&_9, spl_ce_InvalidArgumentException);
	ZEPHIR_INIT_VAR(&_10);
	ZVAL_STRING(&_10, "The format %s is not supported");
	ZEPHIR_CALL_FUNCTION(&_11, "sprintf", NULL, 19, &_10, format);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(NULL, &_9, "__construct", NULL, 41, &_11);
	zephir_check_call_status();
	zephir_throw_exception_debug(&_9, "oauth2/response.zep", 268 TSRMLS_CC);
	ZEPHIR_MM_RESTORE();
	return;

}

/**
 * @param string $format
 */
PHP_METHOD(OAuth2_Response, send) {

	zend_string *_16;
	zend_ulong _15;
	zephir_fcall_cache_entry *_3 = NULL, *_11 = NULL, *_12 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *format = NULL, format_sub, _0, _6, _7, _8, _9, _10, name, header, _13, *_14, _19, _1$$4, _2$$4, _4$$5, _5$$5, _17$$6, _18$$6;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&format_sub);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_7);
	ZVAL_UNDEF(&_8);
	ZVAL_UNDEF(&_9);
	ZVAL_UNDEF(&_10);
	ZVAL_UNDEF(&name);
	ZVAL_UNDEF(&header);
	ZVAL_UNDEF(&_13);
	ZVAL_UNDEF(&_19);
	ZVAL_UNDEF(&_1$$4);
	ZVAL_UNDEF(&_2$$4);
	ZVAL_UNDEF(&_4$$5);
	ZVAL_UNDEF(&_5$$5);
	ZVAL_UNDEF(&_17$$6);
	ZVAL_UNDEF(&_18$$6);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 1, &format);

	if (!format) {
		format = &format_sub;
		ZEPHIR_INIT_VAR(format);
		ZVAL_STRING(format, "json");
	}


	ZEPHIR_CALL_FUNCTION(&_0, "headers_sent", NULL, 42);
	zephir_check_call_status();
	if (zephir_is_true(&_0)) {
		RETURN_MM_NULL();
	}
	do {
		if (ZEPHIR_IS_STRING(format, "json")) {
			ZEPHIR_INIT_VAR(&_1$$4);
			ZVAL_STRING(&_1$$4, "Content-Type");
			ZEPHIR_INIT_VAR(&_2$$4);
			ZVAL_STRING(&_2$$4, "application/json");
			ZEPHIR_CALL_METHOD(NULL, this_ptr, "sethttpheader", &_3, 0, &_1$$4, &_2$$4);
			zephir_check_call_status();
			break;
		}
		if (ZEPHIR_IS_STRING(format, "xml")) {
			ZEPHIR_INIT_VAR(&_4$$5);
			ZVAL_STRING(&_4$$5, "Content-Type");
			ZEPHIR_INIT_VAR(&_5$$5);
			ZVAL_STRING(&_5$$5, "text/xml");
			ZEPHIR_CALL_METHOD(NULL, this_ptr, "sethttpheader", &_3, 0, &_4$$5, &_5$$5);
			zephir_check_call_status();
			break;
		}
	} while(0);

	zephir_read_property(&_6, this_ptr, SL("version"), PH_NOISY_CC | PH_READONLY);
	zephir_read_property(&_7, this_ptr, SL("statusCode"), PH_NOISY_CC | PH_READONLY);
	zephir_read_property(&_8, this_ptr, SL("statusText"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_VAR(&_9);
	ZVAL_STRING(&_9, "HTTP/%s %s %s");
	ZEPHIR_CALL_FUNCTION(&_10, "sprintf", &_11, 19, &_9, &_6, &_7, &_8);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(NULL, "header", &_12, 43, &_10);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(&_13, this_ptr, "gethttpheaders", NULL, 0);
	zephir_check_call_status();
	zephir_is_iterable(&_13, 0, "oauth2/response.zep", 296);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&_13), _15, _16, _14)
	{
		ZEPHIR_INIT_NVAR(&name);
		if (_16 != NULL) { 
			ZVAL_STR_COPY(&name, _16);
		} else {
			ZVAL_LONG(&name, _15);
		}
		ZEPHIR_INIT_NVAR(&header);
		ZVAL_COPY(&header, _14);
		ZEPHIR_INIT_NVAR(&_17$$6);
		ZVAL_STRING(&_17$$6, "%s: %s");
		ZEPHIR_CALL_FUNCTION(&_18$$6, "sprintf", &_11, 19, &_17$$6, &name, &header);
		zephir_check_call_status();
		ZEPHIR_CALL_FUNCTION(NULL, "header", &_12, 43, &_18$$6);
		zephir_check_call_status();
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&header);
	ZEPHIR_INIT_NVAR(&name);
	ZEPHIR_CALL_METHOD(&_19, this_ptr, "getresponsebody", NULL, 0, format);
	zephir_check_call_status();
	zend_print_zval(&_19, 0);
	ZEPHIR_MM_RESTORE();

}

/**
 * @param int $statusCode
 * @param string $error
 * @param string $errorDescription
 * @param string $errorUri
 * @return mixed
 * @throws InvalidArgumentException
 */
PHP_METHOD(OAuth2_Response, setError) {

	unsigned char _1$$3;
	zend_bool _5, _0$$3;
	zval errorUri, _2$$4;
	zval *statusCode_param = NULL, *error, error_sub, *errorDescription = NULL, errorDescription_sub, *errorUri_param = NULL, __$null, parameters, httpHeaders, _3, _4, _6;
	zend_long statusCode, ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&error_sub);
	ZVAL_UNDEF(&errorDescription_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&parameters);
	ZVAL_UNDEF(&httpHeaders);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&errorUri);
	ZVAL_UNDEF(&_2$$4);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 2, &statusCode_param, &error, &errorDescription, &errorUri_param);

	statusCode = zephir_get_intval(statusCode_param);
	if (!errorDescription) {
		errorDescription = &errorDescription_sub;
		errorDescription = &__$null;
	}
	if (!errorUri_param) {
		ZEPHIR_INIT_VAR(&errorUri);
		ZVAL_STRING(&errorUri, "");
	} else {
	if (UNEXPECTED(Z_TYPE_P(errorUri_param) != IS_STRING && Z_TYPE_P(errorUri_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'errorUri' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (EXPECTED(Z_TYPE_P(errorUri_param) == IS_STRING)) {
		zephir_get_strval(&errorUri, errorUri_param);
	} else {
		ZEPHIR_INIT_VAR(&errorUri);
		ZVAL_EMPTY_STRING(&errorUri);
	}
	}


	ZEPHIR_INIT_VAR(&parameters);
	zephir_create_array(&parameters, 2, 0 TSRMLS_CC);
	zephir_array_update_string(&parameters, SL("error"), error, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&parameters, SL("error_description"), errorDescription, PH_COPY | PH_SEPARATE);
	if (!(Z_TYPE_P(&errorUri) == IS_NULL)) {
		_0$$3 = zephir_fast_strlen_ev(&errorUri) > 0;
		if (_0$$3) {
			_1$$3 = ZEPHIR_STRING_OFFSET(&errorUri, 0);
			_0$$3 = _1$$3 == '#';
		}
		if (_0$$3) {
			ZEPHIR_INIT_VAR(&_2$$4);
			ZEPHIR_CONCAT_SV(&_2$$4, "http://tools.ietf.org/html/rfc6749", &errorUri);
			ZEPHIR_CPY_WRT(&errorUri, &_2$$4);
		}
		zephir_array_update_string(&parameters, SL("error_uri"), &errorUri, PH_COPY | PH_SEPARATE);
	}
	ZEPHIR_INIT_VAR(&httpHeaders);
	zephir_create_array(&httpHeaders, 1, 0 TSRMLS_CC);
	add_assoc_stringl_ex(&httpHeaders, SL("Cache-Control"), SL("no-store"));
	ZVAL_LONG(&_3, statusCode);
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "setstatuscode", NULL, 0, &_3);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "addparameters", NULL, 0, &parameters);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "addhttpheaders", NULL, 0, &httpHeaders);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(&_4, this_ptr, "isclienterror", NULL, 0);
	zephir_check_call_status();
	_5 = !zephir_is_true(&_4);
	if (_5) {
		ZEPHIR_CALL_METHOD(&_6, this_ptr, "isservererror", NULL, 0);
		zephir_check_call_status();
		_5 = !zephir_is_true(&_6);
	}
	if (_5) {
	}
	ZEPHIR_MM_RESTORE();

}

/**
 * @param int $statusCode
 * @param string $url
 * @param string $state
 * @param string $error
 * @param string $errorDescription
 * @param string $errorUri
 * @return mixed
 * @throws InvalidArgumentException
 */
PHP_METHOD(OAuth2_Response, setRedirect) {

	zend_bool _2$$5;
	zval _7;
	zval *statusCode_param = NULL, *url, url_sub, *state = NULL, state_sub, *error = NULL, error_sub, *errorDescription = NULL, errorDescription_sub, *errorUri = NULL, errorUri_sub, __$null, parameters, _1, _8, _0$$4, parts$$5, sep$$5, _3$$5, _4$$5, _5$$5, _6$$5;
	zend_long statusCode, ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&url_sub);
	ZVAL_UNDEF(&state_sub);
	ZVAL_UNDEF(&error_sub);
	ZVAL_UNDEF(&errorDescription_sub);
	ZVAL_UNDEF(&errorUri_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&parameters);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_8);
	ZVAL_UNDEF(&_0$$4);
	ZVAL_UNDEF(&parts$$5);
	ZVAL_UNDEF(&sep$$5);
	ZVAL_UNDEF(&_3$$5);
	ZVAL_UNDEF(&_4$$5);
	ZVAL_UNDEF(&_5$$5);
	ZVAL_UNDEF(&_6$$5);
	ZVAL_UNDEF(&_7);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 4, &statusCode_param, &url, &state, &error, &errorDescription, &errorUri);

	statusCode = zephir_get_intval(statusCode_param);
	ZEPHIR_SEPARATE_PARAM(url);
	if (!state) {
		state = &state_sub;
		state = &__$null;
	}
	if (!error) {
		error = &error_sub;
		error = &__$null;
	}
	if (!errorDescription) {
		errorDescription = &errorDescription_sub;
		errorDescription = &__$null;
	}
	if (!errorUri) {
		errorUri = &errorUri_sub;
		errorUri = &__$null;
	}


	if (ZEPHIR_IS_EMPTY(url)) {
	}
	ZEPHIR_INIT_VAR(&parameters);
	array_init(&parameters);
	if (!(Z_TYPE_P(state) == IS_NULL)) {
		zephir_array_update_string(&parameters, SL("state"), state, PH_COPY | PH_SEPARATE);
	}
	if (!(Z_TYPE_P(error) == IS_NULL)) {
		ZVAL_LONG(&_0$$4, 400);
		ZEPHIR_CALL_METHOD(NULL, this_ptr, "seterror", NULL, 0, &_0$$4, error, errorDescription, errorUri);
		zephir_check_call_status();
	}
	ZVAL_LONG(&_1, statusCode);
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "setstatuscode", NULL, 0, &_1);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "addparameters", NULL, 0, &parameters);
	zephir_check_call_status();
	zephir_read_property(&_1, this_ptr, SL("parameters"), PH_NOISY_CC | PH_READONLY);
	if (zephir_fast_count_int(&_1 TSRMLS_CC) > 0) {
		ZEPHIR_CALL_FUNCTION(&parts$$5, "parse_url", NULL, 13, url);
		zephir_check_call_status();
		_2$$5 = zephir_array_isset_string(&parts$$5, SL("query"));
		if (_2$$5) {
			zephir_array_fetch_string(&_3$$5, &parts$$5, SL("query"), PH_NOISY | PH_READONLY, "oauth2/response.zep", 363 TSRMLS_CC);
			_2$$5 = zephir_fast_count_int(&_3$$5 TSRMLS_CC) > 0;
		}
		if (_2$$5) {
			ZEPHIR_INIT_VAR(&sep$$5);
			ZVAL_STRING(&sep$$5, "&");
		} else {
			ZEPHIR_INIT_NVAR(&sep$$5);
			ZVAL_STRING(&sep$$5, "?");
		}
		zephir_read_property(&_4$$5, this_ptr, SL("parameters"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_FUNCTION(&_5$$5, "http_build_query", NULL, 15, &_4$$5);
		zephir_check_call_status();
		ZEPHIR_INIT_VAR(&_6$$5);
		ZEPHIR_CONCAT_VV(&_6$$5, &sep$$5, &_5$$5);
		zephir_concat_self(url, &_6$$5 TSRMLS_CC);
	}
	ZEPHIR_INIT_VAR(&_7);
	zephir_create_array(&_7, 1, 0 TSRMLS_CC);
	zephir_array_update_string(&_7, SL("Location"), url, PH_COPY | PH_SEPARATE);
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "addhttpheaders", NULL, 0, &_7);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(&_8, this_ptr, "isredirection", NULL, 0);
	zephir_check_call_status();
	if (!(zephir_is_true(&_8))) {
	}
	ZEPHIR_MM_RESTORE();

}

/**
 * @return Boolean
 *
 * @api
 *
 * @see http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html
 */
PHP_METHOD(OAuth2_Response, isInvalid) {

	zend_bool _1;
	zval _0, _2;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2);


	zephir_read_property(&_0, this_ptr, SL("statusCode"), PH_NOISY_CC | PH_READONLY);
	_1 = ZEPHIR_LT_LONG(&_0, 100);
	if (!(_1)) {
		zephir_read_property(&_2, this_ptr, SL("statusCode"), PH_NOISY_CC | PH_READONLY);
		_1 = ZEPHIR_GE_LONG(&_2, 600);
	}
	RETURN_BOOL(_1);

}

/**
 * @return Boolean
 *
 * @api
 */
PHP_METHOD(OAuth2_Response, isInformational) {

	zend_bool _1;
	zval _0, _2;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2);


	zephir_read_property(&_0, this_ptr, SL("statusCode"), PH_NOISY_CC | PH_READONLY);
	_1 = ZEPHIR_GE_LONG(&_0, 100);
	if (_1) {
		zephir_read_property(&_2, this_ptr, SL("statusCode"), PH_NOISY_CC | PH_READONLY);
		_1 = ZEPHIR_LT_LONG(&_2, 200);
	}
	RETURN_BOOL(_1);

}

/**
 * @return Boolean
 *
 * @api
 */
PHP_METHOD(OAuth2_Response, isSuccessful) {

	zend_bool _1;
	zval _0, _2;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2);


	zephir_read_property(&_0, this_ptr, SL("statusCode"), PH_NOISY_CC | PH_READONLY);
	_1 = ZEPHIR_GE_LONG(&_0, 200);
	if (_1) {
		zephir_read_property(&_2, this_ptr, SL("statusCode"), PH_NOISY_CC | PH_READONLY);
		_1 = ZEPHIR_LT_LONG(&_2, 300);
	}
	RETURN_BOOL(_1);

}

/**
 * @return Boolean
 *
 * @api
 */
PHP_METHOD(OAuth2_Response, isRedirection) {

	zend_bool _1;
	zval _0, _2;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2);


	zephir_read_property(&_0, this_ptr, SL("statusCode"), PH_NOISY_CC | PH_READONLY);
	_1 = ZEPHIR_GE_LONG(&_0, 300);
	if (_1) {
		zephir_read_property(&_2, this_ptr, SL("statusCode"), PH_NOISY_CC | PH_READONLY);
		_1 = ZEPHIR_LT_LONG(&_2, 400);
	}
	RETURN_BOOL(_1);

}

/**
 * @return Boolean
 *
 * @api
 */
PHP_METHOD(OAuth2_Response, isClientError) {

	zend_bool _1;
	zval _0, _2;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2);


	zephir_read_property(&_0, this_ptr, SL("statusCode"), PH_NOISY_CC | PH_READONLY);
	_1 = ZEPHIR_GE_LONG(&_0, 400);
	if (_1) {
		zephir_read_property(&_2, this_ptr, SL("statusCode"), PH_NOISY_CC | PH_READONLY);
		_1 = ZEPHIR_LT_LONG(&_2, 500);
	}
	RETURN_BOOL(_1);

}

/**
 * @return Boolean
 *
 * @api
 */
PHP_METHOD(OAuth2_Response, isServerError) {

	zend_bool _1;
	zval _0, _2;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2);


	zephir_read_property(&_0, this_ptr, SL("statusCode"), PH_NOISY_CC | PH_READONLY);
	_1 = ZEPHIR_GE_LONG(&_0, 500);
	if (_1) {
		zephir_read_property(&_2, this_ptr, SL("statusCode"), PH_NOISY_CC | PH_READONLY);
		_1 = ZEPHIR_LT_LONG(&_2, 600);
	}
	RETURN_BOOL(_1);

}

/**
 * Function from Symfony2 HttpFoundation - output pretty header
 *
 * @param array $headers
 * @return string
 */
PHP_METHOD(OAuth2_Response, getHttpHeadersAsString) {

	zend_string *_6;
	zend_ulong _5;
	zephir_fcall_cache_entry *_10 = NULL, *_13 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *headers, headers_sub, max, content, name, values, value, _0, _1, _2, _3, *_4, *_7$$4, _8$$5, _9$$5, _11$$5, _12$$5;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&headers_sub);
	ZVAL_UNDEF(&max);
	ZVAL_UNDEF(&content);
	ZVAL_UNDEF(&name);
	ZVAL_UNDEF(&values);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_8$$5);
	ZVAL_UNDEF(&_9$$5);
	ZVAL_UNDEF(&_11$$5);
	ZVAL_UNDEF(&_12$$5);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &headers);



	if (zephir_fast_count_int(headers TSRMLS_CC) == 0) {
		RETURN_MM_STRING("");
	}
	ZEPHIR_INIT_VAR(&content);
	ZVAL_STRING(&content, "");
	ZEPHIR_INIT_VAR(&_0);
	zephir_array_keys(&_0, headers TSRMLS_CC);
	ZEPHIR_INIT_VAR(&_1);
	ZVAL_STRING(&_1, "strlen");
	ZEPHIR_CALL_FUNCTION(&_2, "array_map", NULL, 35, &_1, &_0);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(&_3, "max", NULL, 44, &_2);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&max);
	ZVAL_LONG(&max, (zephir_get_numberval(&_3) + 1));
	ZEPHIR_MAKE_REF(headers);
	ZEPHIR_CALL_FUNCTION(NULL, "ksort", NULL, 45, headers);
	ZEPHIR_UNREF(headers);
	zephir_check_call_status();
	zephir_is_iterable(headers, 0, "oauth2/response.zep", 457);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(headers), _5, _6, _4)
	{
		ZEPHIR_INIT_NVAR(&name);
		if (_6 != NULL) { 
			ZVAL_STR_COPY(&name, _6);
		} else {
			ZVAL_LONG(&name, _5);
		}
		ZEPHIR_INIT_NVAR(&values);
		ZVAL_COPY(&values, _4);
		zephir_is_iterable(&values, 0, "oauth2/response.zep", 455);
		ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(&values), _7$$4)
		{
			ZEPHIR_INIT_NVAR(&value);
			ZVAL_COPY(&value, _7$$4);
			ZEPHIR_INIT_LNVAR(_8$$5);
			ZEPHIR_CONCAT_SVS(&_8$$5, "%-{", &max, "}s %s\r\n");
			ZEPHIR_CALL_METHOD(&_9$$5, this_ptr, "beautifyheadername", &_10, 46, &name);
			zephir_check_call_status();
			ZEPHIR_INIT_LNVAR(_11$$5);
			ZEPHIR_CONCAT_VS(&_11$$5, &_9$$5, ":");
			ZEPHIR_CALL_FUNCTION(&_12$$5, "sprintf", &_13, 19, &_8$$5, &_11$$5, &value);
			zephir_check_call_status();
			zephir_concat_self(&content, &_12$$5 TSRMLS_CC);
		} ZEND_HASH_FOREACH_END();
		ZEPHIR_INIT_NVAR(&value);
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&values);
	ZEPHIR_INIT_NVAR(&name);
	RETURN_CCTOR(&content);

}

/**
 * Function from Symfony2 HttpFoundation - output pretty header
 *
 * @param string $name
 * @return mixed
 */
PHP_METHOD(OAuth2_Response, beautifyHeaderName) {

	zval _0;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *name, name_sub, _1, _2;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&name_sub);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &name);



	ZEPHIR_INIT_VAR(&_0);
	zephir_create_array(&_0, 2, 0 TSRMLS_CC);
	zephir_array_fast_append(&_0, this_ptr);
	ZEPHIR_INIT_VAR(&_1);
	ZVAL_STRING(&_1, "beautifyCallback");
	zephir_array_fast_append(&_0, &_1);
	ZEPHIR_INIT_NVAR(&_1);
	zephir_ucfirst(&_1, name);
	ZEPHIR_INIT_VAR(&_2);
	ZVAL_STRING(&_2, "/\\-(.)/");
	ZEPHIR_RETURN_CALL_FUNCTION("preg_replace_callback", NULL, 47, &_2, &_0, &_1);
	zephir_check_call_status();
	RETURN_MM();

}

/**
 * Function from Symfony2 HttpFoundation - output pretty header
 *
 * @param array $match
 * @return string
 */
PHP_METHOD(OAuth2_Response, beautifyCallback) {

	zval *match, match_sub, _0, _1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&match_sub);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &match);



	ZEPHIR_INIT_VAR(&_0);
	zephir_array_fetch_long(&_1, match, 1, PH_NOISY | PH_READONLY, "oauth2/response.zep", 479 TSRMLS_CC);
	zephir_fast_strtoupper(&_0, &_1);
	ZEPHIR_CONCAT_SV(return_value, "-", &_0);
	RETURN_MM();

}

zend_object *zephir_init_properties_OAuth2_Response(zend_class_entry *class_type TSRMLS_DC) {

		zval _0, _2, _1$$3, _3$$4;
		ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_3$$4);

		ZEPHIR_MM_GROW();
	
	{
		zval local_this_ptr, *this_ptr = &local_this_ptr;
		ZEPHIR_CREATE_OBJECT(this_ptr, class_type);
		zephir_read_property(&_0, this_ptr, SL("httpHeaders"), PH_NOISY_CC | PH_READONLY);
		if (Z_TYPE_P(&_0) == IS_NULL) {
			ZEPHIR_INIT_VAR(&_1$$3);
			array_init(&_1$$3);
			zephir_update_property_zval(this_ptr, SL("httpHeaders"), &_1$$3);
		}
		zephir_read_property(&_2, this_ptr, SL("parameters"), PH_NOISY_CC | PH_READONLY);
		if (Z_TYPE_P(&_2) == IS_NULL) {
			ZEPHIR_INIT_VAR(&_3$$4);
			array_init(&_3$$4);
			zephir_update_property_zval(this_ptr, SL("parameters"), &_3$$4);
		}
		ZEPHIR_MM_RESTORE();
		return Z_OBJ_P(this_ptr);
	}

}

void zephir_init_static_properties_OAuth2_Response(TSRMLS_D) {

	zval _0;
		ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(&_0);
	zephir_create_array(&_0, 41, 0 TSRMLS_CC);
	add_index_stringl(&_0, 100, SL("Continue"));
	add_index_stringl(&_0, 101, SL("Switching Protocols"));
	add_index_stringl(&_0, 200, SL("OK"));
	add_index_stringl(&_0, 201, SL("Created"));
	add_index_stringl(&_0, 202, SL("Accepted"));
	add_index_stringl(&_0, 203, SL("Non-Authoritative Information"));
	add_index_stringl(&_0, 204, SL("No Content"));
	add_index_stringl(&_0, 205, SL("Reset Content"));
	add_index_stringl(&_0, 206, SL("Partial Content"));
	add_index_stringl(&_0, 300, SL("Multiple Choices"));
	add_index_stringl(&_0, 301, SL("Moved Permanently"));
	add_index_stringl(&_0, 302, SL("Found"));
	add_index_stringl(&_0, 303, SL("See Other"));
	add_index_stringl(&_0, 304, SL("Not Modified"));
	add_index_stringl(&_0, 305, SL("Use Proxy"));
	add_index_stringl(&_0, 307, SL("Temporary Redirect"));
	add_index_stringl(&_0, 400, SL("Bad Request"));
	add_index_stringl(&_0, 401, SL("Unauthorized"));
	add_index_stringl(&_0, 402, SL("Payment Required"));
	add_index_stringl(&_0, 403, SL("Forbidden"));
	add_index_stringl(&_0, 404, SL("Not Found"));
	add_index_stringl(&_0, 405, SL("Method Not Allowed"));
	add_index_stringl(&_0, 406, SL("Not Acceptable"));
	add_index_stringl(&_0, 407, SL("Proxy Authentication Required"));
	add_index_stringl(&_0, 408, SL("Request Timeout"));
	add_index_stringl(&_0, 409, SL("Conflict"));
	add_index_stringl(&_0, 410, SL("Gone"));
	add_index_stringl(&_0, 411, SL("Length Required"));
	add_index_stringl(&_0, 412, SL("Precondition Failed"));
	add_index_stringl(&_0, 413, SL("Request Entity Too Large"));
	add_index_stringl(&_0, 414, SL("Request-URI Too Long"));
	add_index_stringl(&_0, 415, SL("Unsupported Media Type"));
	add_index_stringl(&_0, 416, SL("Requested Range Not Satisfiable"));
	add_index_stringl(&_0, 417, SL("Expectation Failed"));
	add_index_stringl(&_0, 418, SL("I\"m a teapot"));
	add_index_stringl(&_0, 500, SL("Internal Server Error"));
	add_index_stringl(&_0, 501, SL("Not Implemented"));
	add_index_stringl(&_0, 502, SL("Bad Gateway"));
	add_index_stringl(&_0, 503, SL("Service Unavailable"));
	add_index_stringl(&_0, 504, SL("Gateway Timeout"));
	add_index_stringl(&_0, 505, SL("HTTP Version Not Supported"));
	zend_update_static_property(oauth2_response_ce, ZEND_STRL("statusTexts"), &_0);
	ZEPHIR_MM_RESTORE();

}

