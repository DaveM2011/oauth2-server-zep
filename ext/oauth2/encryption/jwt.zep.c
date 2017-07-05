
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
#include "kernel/fcall.h"
#include "kernel/memory.h"
#include "kernel/array.h"
#include "kernel/string.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/exception.h"
#include "kernel/operators.h"
#include "kernel/concat.h"
#include "kernel/object.h"


/**
 * @link https://github.com/F21/jwt
 * @author F21
 */
ZEPHIR_INIT_CLASS(OAuth2_Encryption_Jwt) {

	ZEPHIR_REGISTER_CLASS(OAuth2\\Encryption, Jwt, oauth2, encryption_jwt, oauth2_encryption_jwt_method_entry, 0);

	zend_class_implements(oauth2_encryption_jwt_ce TSRMLS_CC, 1, oauth2_encryption_encryptioninterface_ce);
	return SUCCESS;

}

PHP_METHOD(OAuth2_Encryption_Jwt, encode) {

	zephir_fcall_cache_entry *_2 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *payload_param = NULL, *key_param = NULL, *algo_param = NULL, header, segments, signing_input, signature, _0, _1, _3;
	zval payload, key, algo;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&payload);
	ZVAL_UNDEF(&key);
	ZVAL_UNDEF(&algo);
	ZVAL_UNDEF(&header);
	ZVAL_UNDEF(&segments);
	ZVAL_UNDEF(&signing_input);
	ZVAL_UNDEF(&signature);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_3);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 1, &payload_param, &key_param, &algo_param);

	if (UNEXPECTED(Z_TYPE_P(payload_param) != IS_STRING && Z_TYPE_P(payload_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'payload' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (EXPECTED(Z_TYPE_P(payload_param) == IS_STRING)) {
		zephir_get_strval(&payload, payload_param);
	} else {
		ZEPHIR_INIT_VAR(&payload);
		ZVAL_EMPTY_STRING(&payload);
	}
	if (UNEXPECTED(Z_TYPE_P(key_param) != IS_STRING && Z_TYPE_P(key_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'key' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (EXPECTED(Z_TYPE_P(key_param) == IS_STRING)) {
		zephir_get_strval(&key, key_param);
	} else {
		ZEPHIR_INIT_VAR(&key);
		ZVAL_EMPTY_STRING(&key);
	}
	if (!algo_param) {
		ZEPHIR_INIT_VAR(&algo);
		ZVAL_STRING(&algo, "HS256");
	} else {
	if (UNEXPECTED(Z_TYPE_P(algo_param) != IS_STRING && Z_TYPE_P(algo_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'algo' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (EXPECTED(Z_TYPE_P(algo_param) == IS_STRING)) {
		zephir_get_strval(&algo, algo_param);
	} else {
		ZEPHIR_INIT_VAR(&algo);
		ZVAL_EMPTY_STRING(&algo);
	}
	}


	ZEPHIR_CALL_METHOD(&header, this_ptr, "generatejwtheader", NULL, 0, &payload, &algo);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&segments);
	zephir_create_array(&segments, 2, 0 TSRMLS_CC);
	ZEPHIR_INIT_VAR(&_1);
	zephir_json_encode(&_1, &header, 0 );
	ZEPHIR_CALL_METHOD(&_0, this_ptr, "urlsafeb64encode", &_2, 0, &_1);
	zephir_check_call_status();
	zephir_array_fast_append(&segments, &_0);
	ZEPHIR_INIT_VAR(&_3);
	zephir_json_encode(&_3, &payload, 0 );
	ZEPHIR_CALL_METHOD(&_0, this_ptr, "urlsafeb64encode", &_2, 0, &_3);
	zephir_check_call_status();
	zephir_array_fast_append(&segments, &_0);
	ZEPHIR_INIT_VAR(&signing_input);
	zephir_fast_join_str(&signing_input, SL("."), &segments TSRMLS_CC);
	ZEPHIR_CALL_METHOD(&signature, this_ptr, "sign", NULL, 20, &signing_input, &key, &algo);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(&_0, this_ptr, "urlsafeb64encode", &_2, 0, &signature);
	zephir_check_call_status();
	zephir_array_append(&segments, &_0, PH_SEPARATE, "oauth2/encryption/jwt.zep", 23);
	zephir_fast_join_str(return_value, SL("."), &segments TSRMLS_CC);
	RETURN_MM();

}

PHP_METHOD(OAuth2_Encryption_Jwt, decode) {

	zephir_fcall_cache_entry *_3 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zend_bool verify;
	zval *jwt_param = NULL, *key_param = NULL, *verify_param = NULL, __$true, tks, headb64, payloadb64, cryptob64, sig, payload, header, _0, _1, _2, _4, _5$$7, _6$$7, _7$$7;
	zval jwt, key;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&jwt);
	ZVAL_UNDEF(&key);
	ZVAL_BOOL(&__$true, 1);
	ZVAL_UNDEF(&tks);
	ZVAL_UNDEF(&headb64);
	ZVAL_UNDEF(&payloadb64);
	ZVAL_UNDEF(&cryptob64);
	ZVAL_UNDEF(&sig);
	ZVAL_UNDEF(&payload);
	ZVAL_UNDEF(&header);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_5$$7);
	ZVAL_UNDEF(&_6$$7);
	ZVAL_UNDEF(&_7$$7);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 2, &jwt_param, &key_param, &verify_param);

	if (UNEXPECTED(Z_TYPE_P(jwt_param) != IS_STRING && Z_TYPE_P(jwt_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'jwt' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (EXPECTED(Z_TYPE_P(jwt_param) == IS_STRING)) {
		zephir_get_strval(&jwt, jwt_param);
	} else {
		ZEPHIR_INIT_VAR(&jwt);
		ZVAL_EMPTY_STRING(&jwt);
	}
	if (!key_param) {
		ZEPHIR_INIT_VAR(&key);
		ZVAL_STRING(&key, "");
	} else {
	if (UNEXPECTED(Z_TYPE_P(key_param) != IS_STRING && Z_TYPE_P(key_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'key' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (EXPECTED(Z_TYPE_P(key_param) == IS_STRING)) {
		zephir_get_strval(&key, key_param);
	} else {
		ZEPHIR_INIT_VAR(&key);
		ZVAL_EMPTY_STRING(&key);
	}
	}
	if (!verify_param) {
		verify = 1;
	} else {
		verify = zephir_get_boolval(verify_param);
	}


	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, ".");
	ZEPHIR_INIT_VAR(&_1);
	zephir_fast_strpos(&_1, &jwt, &_0, 0 );
	if (!(zephir_is_true(&_1))) {
		RETURN_MM_NULL();
	}
	ZEPHIR_INIT_VAR(&tks);
	zephir_fast_explode_str(&tks, SL("."), &jwt, LONG_MAX TSRMLS_CC);
	if (zephir_fast_count_int(&tks TSRMLS_CC) != 3) {
		RETURN_MM_NULL();
	}
	ZEPHIR_OBS_VAR(&headb64);
	zephir_array_fetch_long(&headb64, &tks, 0, PH_NOISY, "oauth2/encryption/jwt.zep", 42 TSRMLS_CC);
	ZEPHIR_OBS_VAR(&payloadb64);
	zephir_array_fetch_long(&payloadb64, &tks, 1, PH_NOISY, "oauth2/encryption/jwt.zep", 43 TSRMLS_CC);
	ZEPHIR_OBS_VAR(&cryptob64);
	zephir_array_fetch_long(&cryptob64, &tks, 2, PH_NOISY, "oauth2/encryption/jwt.zep", 44 TSRMLS_CC);
	ZEPHIR_CALL_METHOD(&_2, this_ptr, "urlsafeb64decode", &_3, 0, &headb64);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&header);
	zephir_json_decode(&header, &_2, zephir_get_intval(&__$true) );
	if (Z_TYPE_P(&header) == IS_NULL) {
		RETURN_MM_NULL();
	}
	ZEPHIR_CALL_METHOD(&_4, this_ptr, "urlsafeb64decode", &_3, 0, &payloadb64);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&payload);
	zephir_json_decode(&payload, &_4, zephir_get_intval(&__$true) );
	if (Z_TYPE_P(&payload) == IS_NULL) {
		RETURN_MM_NULL();
	}
	ZEPHIR_CALL_METHOD(&sig, this_ptr, "urlsafeb64decode", &_3, 0, &cryptob64);
	zephir_check_call_status();
	if (verify) {
		if (!(zephir_array_isset_string(&header, SL("alg")))) {
			RETURN_MM_NULL();
		}
		ZEPHIR_INIT_VAR(&_6$$7);
		ZEPHIR_CONCAT_VSV(&_6$$7, &headb64, ".", &payloadb64);
		zephir_array_fetch_string(&_7$$7, &header, SL("alg"), PH_NOISY | PH_READONLY, "oauth2/encryption/jwt.zep", 63 TSRMLS_CC);
		ZEPHIR_CALL_METHOD(&_5$$7, this_ptr, "verifysignature", NULL, 21, &sig, &_6$$7, &key, &_7$$7);
		zephir_check_call_status();
		if (!(zephir_is_true(&_5$$7))) {
			RETURN_MM_NULL();
		}
	}
	RETURN_CCTOR(&payload);

}

PHP_METHOD(OAuth2_Encryption_Jwt, verifySignature) {

	zephir_fcall_cache_entry *_5 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *signature_param = NULL, *input_param = NULL, *key_param = NULL, *algo_param = NULL, _0$$3, _1$$4, _2$$4, _3$$4, _4$$4, _6$$5, _7$$5, _8$$5, _9$$5, _10$$6, _11$$6, _12$$6, _13$$6;
	zval signature, input, key, algo;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&signature);
	ZVAL_UNDEF(&input);
	ZVAL_UNDEF(&key);
	ZVAL_UNDEF(&algo);
	ZVAL_UNDEF(&_0$$3);
	ZVAL_UNDEF(&_1$$4);
	ZVAL_UNDEF(&_2$$4);
	ZVAL_UNDEF(&_3$$4);
	ZVAL_UNDEF(&_4$$4);
	ZVAL_UNDEF(&_6$$5);
	ZVAL_UNDEF(&_7$$5);
	ZVAL_UNDEF(&_8$$5);
	ZVAL_UNDEF(&_9$$5);
	ZVAL_UNDEF(&_10$$6);
	ZVAL_UNDEF(&_11$$6);
	ZVAL_UNDEF(&_12$$6);
	ZVAL_UNDEF(&_13$$6);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 3, 1, &signature_param, &input_param, &key_param, &algo_param);

	zephir_get_strval(&signature, signature_param);
	zephir_get_strval(&input, input_param);
	zephir_get_strval(&key, key_param);
	if (!algo_param) {
		ZEPHIR_INIT_VAR(&algo);
		ZVAL_STRING(&algo, "HS256");
	} else {
		zephir_get_strval(&algo, algo_param);
	}


	do {
		if (ZEPHIR_IS_STRING(&algo, "HS256") || ZEPHIR_IS_STRING(&algo, "HS384") || ZEPHIR_IS_STRING(&algo, "HS512")) {
			ZEPHIR_CALL_METHOD(&_0$$3, this_ptr, "sign", NULL, 20, &input, &key, &algo);
			zephir_check_call_status();
			ZEPHIR_RETURN_CALL_METHOD(this_ptr, "hash_equals", NULL, 0, &_0$$3, &signature);
			zephir_check_call_status();
			RETURN_MM();
		}
		if (ZEPHIR_IS_STRING(&algo, "RS256")) {
			ZEPHIR_INIT_VAR(&_1$$4);
			ZEPHIR_INIT_VAR(&_2$$4);
			ZVAL_STRING(&_2$$4, "OPENSSL_ALGO_SHA256");
			ZEPHIR_CALL_FUNCTION(&_3$$4, "defined", NULL, 22, &_2$$4);
			zephir_check_call_status();
			if (zephir_is_true(&_3$$4)) {
				ZEPHIR_INIT_NVAR(&_1$$4);
				ZVAL_LONG(&_1$$4, 7);
			} else {
				ZEPHIR_INIT_NVAR(&_1$$4);
				ZVAL_STRING(&_1$$4, "sha256");
			}
			ZEPHIR_CALL_FUNCTION(&_4$$4, "openssl_verify", &_5, 23, &input, &signature, &key, &_1$$4);
			zephir_check_call_status();
			RETURN_MM_BOOL(ZEPHIR_IS_LONG_IDENTICAL(&_4$$4, 1));
		}
		if (ZEPHIR_IS_STRING(&algo, "RS384")) {
			ZEPHIR_INIT_VAR(&_6$$5);
			ZEPHIR_INIT_VAR(&_7$$5);
			ZVAL_STRING(&_7$$5, "OPENSSL_ALGO_SHA384");
			ZEPHIR_CALL_FUNCTION(&_8$$5, "defined", NULL, 22, &_7$$5);
			zephir_check_call_status();
			if (zephir_is_true(&_8$$5)) {
				ZEPHIR_INIT_NVAR(&_6$$5);
				ZVAL_LONG(&_6$$5, 8);
			} else {
				ZEPHIR_INIT_NVAR(&_6$$5);
				ZVAL_STRING(&_6$$5, "sha384");
			}
			ZEPHIR_CALL_FUNCTION(&_9$$5, "openssl_verify", &_5, 23, &input, &signature, &key, &_6$$5);
			zephir_check_call_status();
			RETURN_MM_BOOL(ZEPHIR_IS_LONG_IDENTICAL(&_9$$5, 1));
		}
		if (ZEPHIR_IS_STRING(&algo, "RS512")) {
			ZEPHIR_INIT_VAR(&_10$$6);
			ZEPHIR_INIT_VAR(&_11$$6);
			ZVAL_STRING(&_11$$6, "OPENSSL_ALGO_SHA512");
			ZEPHIR_CALL_FUNCTION(&_12$$6, "defined", NULL, 22, &_11$$6);
			zephir_check_call_status();
			if (zephir_is_true(&_12$$6)) {
				ZEPHIR_INIT_NVAR(&_10$$6);
				ZVAL_LONG(&_10$$6, 9);
			} else {
				ZEPHIR_INIT_NVAR(&_10$$6);
				ZVAL_STRING(&_10$$6, "sha512");
			}
			ZEPHIR_CALL_FUNCTION(&_13$$6, "openssl_verify", &_5, 23, &input, &signature, &key, &_10$$6);
			zephir_check_call_status();
			RETURN_MM_BOOL(ZEPHIR_IS_LONG_IDENTICAL(&_13$$6, 1));
		}
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(spl_ce_InvalidArgumentException, "Unsupported or invalid signing algorithm.", "oauth2/encryption/jwt.zep", 93);
		return;
	} while(0);

	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(OAuth2_Encryption_Jwt, sign) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zephir_fcall_cache_entry *_1 = NULL, *_7 = NULL;
	zval *input, input_sub, *key, key_sub, *algo = NULL, algo_sub, __$true, _0$$3, _2$$4, _3$$5, _4$$6, _5$$6, _6$$6, _8$$7, _9$$7, _10$$7, _11$$8, _12$$8, _13$$8;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&input_sub);
	ZVAL_UNDEF(&key_sub);
	ZVAL_UNDEF(&algo_sub);
	ZVAL_BOOL(&__$true, 1);
	ZVAL_UNDEF(&_0$$3);
	ZVAL_UNDEF(&_2$$4);
	ZVAL_UNDEF(&_3$$5);
	ZVAL_UNDEF(&_4$$6);
	ZVAL_UNDEF(&_5$$6);
	ZVAL_UNDEF(&_6$$6);
	ZVAL_UNDEF(&_8$$7);
	ZVAL_UNDEF(&_9$$7);
	ZVAL_UNDEF(&_10$$7);
	ZVAL_UNDEF(&_11$$8);
	ZVAL_UNDEF(&_12$$8);
	ZVAL_UNDEF(&_13$$8);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 1, &input, &key, &algo);

	if (!algo) {
		algo = &algo_sub;
		ZEPHIR_INIT_VAR(algo);
		ZVAL_STRING(algo, "HS256");
	}


	do {
		if (ZEPHIR_IS_STRING(algo, "HS256")) {
			ZEPHIR_INIT_VAR(&_0$$3);
			ZVAL_STRING(&_0$$3, "sha256");
			ZEPHIR_RETURN_CALL_FUNCTION("hash_hmac", &_1, 24, &_0$$3, input, key, &__$true);
			zephir_check_call_status();
			RETURN_MM();
		}
		if (ZEPHIR_IS_STRING(algo, "HS384")) {
			ZEPHIR_INIT_VAR(&_2$$4);
			ZVAL_STRING(&_2$$4, "sha384");
			ZEPHIR_RETURN_CALL_FUNCTION("hash_hmac", &_1, 24, &_2$$4, input, key, &__$true);
			zephir_check_call_status();
			RETURN_MM();
		}
		if (ZEPHIR_IS_STRING(algo, "HS512")) {
			ZEPHIR_INIT_VAR(&_3$$5);
			ZVAL_STRING(&_3$$5, "sha512");
			ZEPHIR_RETURN_CALL_FUNCTION("hash_hmac", &_1, 24, &_3$$5, input, key, &__$true);
			zephir_check_call_status();
			RETURN_MM();
		}
		if (ZEPHIR_IS_STRING(algo, "RS256")) {
			ZEPHIR_INIT_VAR(&_4$$6);
			ZEPHIR_INIT_VAR(&_5$$6);
			ZVAL_STRING(&_5$$6, "OPENSSL_ALGO_SHA256");
			ZEPHIR_CALL_FUNCTION(&_6$$6, "defined", NULL, 22, &_5$$6);
			zephir_check_call_status();
			if (zephir_is_true(&_6$$6)) {
				ZEPHIR_INIT_NVAR(&_4$$6);
				ZVAL_LONG(&_4$$6, 7);
			} else {
				ZEPHIR_INIT_NVAR(&_4$$6);
				ZVAL_STRING(&_4$$6, "sha256");
			}
			ZEPHIR_RETURN_CALL_METHOD(this_ptr, "generatersasignature", &_7, 25, input, key, &_4$$6);
			zephir_check_call_status();
			RETURN_MM();
		}
		if (ZEPHIR_IS_STRING(algo, "RS384")) {
			ZEPHIR_INIT_VAR(&_8$$7);
			ZEPHIR_INIT_VAR(&_9$$7);
			ZVAL_STRING(&_9$$7, "OPENSSL_ALGO_SHA384");
			ZEPHIR_CALL_FUNCTION(&_10$$7, "defined", NULL, 22, &_9$$7);
			zephir_check_call_status();
			if (zephir_is_true(&_10$$7)) {
				ZEPHIR_INIT_NVAR(&_8$$7);
				ZVAL_LONG(&_8$$7, 8);
			} else {
				ZEPHIR_INIT_NVAR(&_8$$7);
				ZVAL_STRING(&_8$$7, "sha384");
			}
			ZEPHIR_RETURN_CALL_METHOD(this_ptr, "generatersasignature", &_7, 25, input, key, &_8$$7);
			zephir_check_call_status();
			RETURN_MM();
		}
		if (ZEPHIR_IS_STRING(algo, "RS512")) {
			ZEPHIR_INIT_VAR(&_11$$8);
			ZEPHIR_INIT_VAR(&_12$$8);
			ZVAL_STRING(&_12$$8, "OPENSSL_ALGO_SHA512");
			ZEPHIR_CALL_FUNCTION(&_13$$8, "defined", NULL, 22, &_12$$8);
			zephir_check_call_status();
			if (zephir_is_true(&_13$$8)) {
				ZEPHIR_INIT_NVAR(&_11$$8);
				ZVAL_LONG(&_11$$8, 9);
			} else {
				ZEPHIR_INIT_NVAR(&_11$$8);
				ZVAL_STRING(&_11$$8, "sha512");
			}
			ZEPHIR_RETURN_CALL_METHOD(this_ptr, "generatersasignature", &_7, 25, input, key, &_11$$8);
			zephir_check_call_status();
			RETURN_MM();
		}
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(zend_exception_get_default(TSRMLS_C), "Unsupported or invalid signing algorithm.", "oauth2/encryption/jwt.zep", 119);
		return;
	} while(0);

	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(OAuth2_Encryption_Jwt, generateRSASignature) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *input, input_sub, *key, key_sub, *algo, algo_sub, signature, _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&input_sub);
	ZVAL_UNDEF(&key_sub);
	ZVAL_UNDEF(&algo_sub);
	ZVAL_UNDEF(&signature);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 3, 0, &input, &key, &algo);



	ZEPHIR_MAKE_REF(&signature);
	ZEPHIR_CALL_FUNCTION(&_0, "openssl_sign", NULL, 26, input, &signature, key, algo);
	ZEPHIR_UNREF(&signature);
	zephir_check_call_status();
	if (!(zephir_is_true(&_0))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(zend_exception_get_default(TSRMLS_C), "Unable to sign data.", "oauth2/encryption/jwt.zep", 127);
		return;
	}
	RETURN_CCTOR(&signature);

}

PHP_METHOD(OAuth2_Encryption_Jwt, urlSafeB64Encode) {

	zval _1, _3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *data, data_sub, b64, _0, _2;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&data_sub);
	ZVAL_UNDEF(&b64);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_3);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &data);



	ZEPHIR_CALL_FUNCTION(&b64, "base64_encode", NULL, 27, data);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&_0);
	ZEPHIR_INIT_VAR(&_1);
	zephir_create_array(&_1, 5, 0 TSRMLS_CC);
	ZEPHIR_INIT_VAR(&_2);
	ZVAL_STRING(&_2, "+");
	zephir_array_fast_append(&_1, &_2);
	ZEPHIR_INIT_NVAR(&_2);
	ZVAL_STRING(&_2, "/");
	zephir_array_fast_append(&_1, &_2);
	ZEPHIR_INIT_NVAR(&_2);
	ZVAL_STRING(&_2, "\\r");
	zephir_array_fast_append(&_1, &_2);
	ZEPHIR_INIT_NVAR(&_2);
	ZVAL_STRING(&_2, "\\n");
	zephir_array_fast_append(&_1, &_2);
	ZEPHIR_INIT_NVAR(&_2);
	ZVAL_STRING(&_2, "=");
	zephir_array_fast_append(&_1, &_2);
	ZEPHIR_INIT_VAR(&_3);
	zephir_create_array(&_3, 2, 0 TSRMLS_CC);
	ZEPHIR_INIT_NVAR(&_2);
	ZVAL_STRING(&_2, "-");
	zephir_array_fast_append(&_3, &_2);
	ZEPHIR_INIT_NVAR(&_2);
	ZVAL_STRING(&_2, "_");
	zephir_array_fast_append(&_3, &_2);
	zephir_fast_str_replace(&_0, &_1, &_3, &b64 TSRMLS_CC);
	ZEPHIR_CPY_WRT(&b64, &_0);
	RETURN_CCTOR(&b64);

}

PHP_METHOD(OAuth2_Encryption_Jwt, urlSafeB64Decode) {

	zval _1, _3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *b64 = NULL, b64_sub, _0, _2;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&b64_sub);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_3);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &b64);

	ZEPHIR_SEPARATE_PARAM(b64);


	ZEPHIR_INIT_VAR(&_0);
	ZEPHIR_INIT_VAR(&_1);
	zephir_create_array(&_1, 2, 0 TSRMLS_CC);
	ZEPHIR_INIT_VAR(&_2);
	ZVAL_STRING(&_2, "-");
	zephir_array_fast_append(&_1, &_2);
	ZEPHIR_INIT_NVAR(&_2);
	ZVAL_STRING(&_2, "_");
	zephir_array_fast_append(&_1, &_2);
	ZEPHIR_INIT_VAR(&_3);
	zephir_create_array(&_3, 2, 0 TSRMLS_CC);
	ZEPHIR_INIT_NVAR(&_2);
	ZVAL_STRING(&_2, "+");
	zephir_array_fast_append(&_3, &_2);
	ZEPHIR_INIT_NVAR(&_2);
	ZVAL_STRING(&_2, "/");
	zephir_array_fast_append(&_3, &_2);
	zephir_fast_str_replace(&_0, &_1, &_3, b64 TSRMLS_CC);
	ZEPHIR_CPY_WRT(b64, &_0);
	ZEPHIR_RETURN_CALL_FUNCTION("base64_decode", NULL, 28, b64);
	zephir_check_call_status();
	RETURN_MM();

}

/**
 * Override to create a custom header
 */
PHP_METHOD(OAuth2_Encryption_Jwt, generateJwtHeader) {

	zval *payload, payload_sub, *algorithm, algorithm_sub;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&payload_sub);
	ZVAL_UNDEF(&algorithm_sub);

	zephir_fetch_params(0, 2, 0, &payload, &algorithm);



	zephir_create_array(return_value, 2, 0 TSRMLS_CC);
	add_assoc_stringl_ex(return_value, SL("typ"), SL("JWT"));
	zephir_array_update_string(return_value, SL("alg"), algorithm, PH_COPY | PH_SEPARATE);
	return;

}

PHP_METHOD(OAuth2_Encryption_Jwt, hash_equals) {

	zend_long i;
	zval *a, a_sub, *b, b_sub;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&a_sub);
	ZVAL_UNDEF(&b_sub);

	zephir_fetch_params(0, 2, 0, &a, &b);



	i = 0;
	if ((zephir_function_exists_ex(SL("hash_equals") TSRMLS_CC) == SUCCESS)) {
		RETURN_BOOL(zephir_hash_equals(a, b));
	}
	RETURN_BOOL(0);

}

