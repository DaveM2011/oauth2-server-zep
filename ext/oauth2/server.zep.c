
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
#include "kernel/memory.h"
#include "kernel/array.h"
#include "kernel/object.h"
#include "kernel/fcall.h"
#include "kernel/operators.h"
#include "kernel/exception.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/string.h"


/**
* Server class for OAuth2
* This class serves as a convience class which wraps the other Controller classes
*
* @see OAuth2\Controller\ResourceController
* @see OAuth2\Controller\AuthorizeController
* @see OAuth2\Controller\TokenController
*/
ZEPHIR_INIT_CLASS(OAuth2_Server) {

	ZEPHIR_REGISTER_CLASS(OAuth2, Server, oauth2, server, oauth2_server_method_entry, ZEND_ACC_EXPLICIT_ABSTRACT_CLASS);

	zend_declare_property_null(oauth2_server_ce, SL("response"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_server_ce, SL("config"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_server_ce, SL("storages"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_server_ce, SL("authorizeController"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_server_ce, SL("tokenController"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_server_ce, SL("resourceController"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_server_ce, SL("userInfoController"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_server_ce, SL("grantTypes"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_server_ce, SL("responseTypes"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_server_ce, SL("tokenType"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_server_ce, SL("scopeUtil"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_server_ce, SL("clientAssertionType"), ZEND_ACC_PROTECTED TSRMLS_CC);

	/**
	 * @var array
	 */
	zend_declare_property_null(oauth2_server_ce, SL("storageMap"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_server_ce, SL("responseTypeMap"), ZEND_ACC_PROTECTED TSRMLS_CC);

	oauth2_server_ce->create_object = zephir_init_properties_OAuth2_Server;

	zend_class_implements(oauth2_server_ce TSRMLS_CC, 1, oauth2_controller_resourcecontrollerinterface_ce);
	zend_class_implements(oauth2_server_ce TSRMLS_CC, 1, oauth2_controller_authorizecontrollerinterface_ce);
	zend_class_implements(oauth2_server_ce TSRMLS_CC, 1, oauth2_controller_tokencontrollerinterface_ce);
	return SUCCESS;

}

/**
 * @param mixed storage       (array or OAuth2\Storage) - single object or array of objects implementing the
 *                             required storage types (ClientCredentialsInterface and AccessTokenInterface as a minimum)
 * @param array $config        specify a different token lifetime, token header name, etc
 * @param array $grantTypes    An array of OAuth2\GrantType\GrantTypeInterface to use for granting access tokens
 * @param array $responseTypes Response types to use.  array keys should be "code" and and "token" for
 *                             Access Token and Authorization Code response types
 * @param OAuth2\TokenType\TokenTypeInterface                     $tokenType           The token type object to use. Valid token types are "bearer" and "mac"
 * @param OAuth2\ScopeInterface                                   $scopeUtil           The scope utility class to use to validate scope
 * @param OAuth2\ClientAssertionType\ClientAssertionTypeInterface $clientAssertionType The method in which to verify the client identity.  Default is HttpBasic
 *
 * @ingroup oauth2_section_7
 */
PHP_METHOD(OAuth2_Server, __construct) {

	zend_string *_5, *_11, *_15;
	zend_ulong _4, _10, _14;
	zephir_fcall_cache_entry *_6 = NULL, *_12 = NULL, *_16 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *storage_param = NULL, *config_param = NULL, *grantTypes_param = NULL, *responseTypes_param = NULL, *tokenType = NULL, tokenType_sub, *scopeUtil = NULL, scopeUtil_sub, *clientAssertionType = NULL, clientAssertionType_sub, __$false, __$true, __$null, key, service, type, _2, *_3, _7, *_9, *_13;
	zval storage, config, grantTypes, responseTypes, _0, _1, _8;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&storage);
	ZVAL_UNDEF(&config);
	ZVAL_UNDEF(&grantTypes);
	ZVAL_UNDEF(&responseTypes);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_8);
	ZVAL_UNDEF(&tokenType_sub);
	ZVAL_UNDEF(&scopeUtil_sub);
	ZVAL_UNDEF(&clientAssertionType_sub);
	ZVAL_BOOL(&__$false, 0);
	ZVAL_BOOL(&__$true, 1);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&key);
	ZVAL_UNDEF(&service);
	ZVAL_UNDEF(&type);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_7);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 7, &storage_param, &config_param, &grantTypes_param, &responseTypes_param, &tokenType, &scopeUtil, &clientAssertionType);

	if (!storage_param) {
		ZEPHIR_INIT_VAR(&storage);
		array_init(&storage);
	} else {
		zephir_get_arrval(&storage, storage_param);
	}
	if (!config_param) {
		ZEPHIR_INIT_VAR(&config);
		array_init(&config);
	} else {
		zephir_get_arrval(&config, config_param);
	}
	if (!grantTypes_param) {
		ZEPHIR_INIT_VAR(&grantTypes);
		array_init(&grantTypes);
	} else {
		zephir_get_arrval(&grantTypes, grantTypes_param);
	}
	if (!responseTypes_param) {
		ZEPHIR_INIT_VAR(&responseTypes);
		array_init(&responseTypes);
	} else {
		zephir_get_arrval(&responseTypes, responseTypes_param);
	}
	if (!tokenType) {
		tokenType = &tokenType_sub;
		tokenType = &__$null;
	}
	if (!scopeUtil) {
		scopeUtil = &scopeUtil_sub;
		scopeUtil = &__$null;
	}
	if (!clientAssertionType) {
		clientAssertionType = &clientAssertionType_sub;
		clientAssertionType = &__$null;
	}


	ZEPHIR_INIT_VAR(&_0);
	zephir_create_array(&_0, 10, 0 TSRMLS_CC);
	add_assoc_stringl_ex(&_0, SL("access_token"), SL("OAuth2\\Storage\\AccessTokenInterface"));
	add_assoc_stringl_ex(&_0, SL("authorization_code"), SL("OAuth2\\Storage\\AuthorizationCodeInterface"));
	add_assoc_stringl_ex(&_0, SL("client_credentials"), SL("OAuth2\\Storage\\ClientCredentialsInterface"));
	add_assoc_stringl_ex(&_0, SL("client"), SL("OAuth2\\Storage\\ClientInterface"));
	add_assoc_stringl_ex(&_0, SL("refresh_token"), SL("OAuth2\\Storage\\RefreshTokenInterface"));
	add_assoc_stringl_ex(&_0, SL("user_credentials"), SL("OAuth2\\Storage\\UserCredentialsInterface"));
	add_assoc_stringl_ex(&_0, SL("user_claims"), SL("OAuth2\\OpenID\\Storage\\UserClaimsInterface"));
	add_assoc_stringl_ex(&_0, SL("public_key"), SL("OAuth2\\Storage\\PublicKeyInterface"));
	add_assoc_stringl_ex(&_0, SL("jwt_bearer"), SL("OAuth2\\Storage\\JWTBearerInterface"));
	add_assoc_stringl_ex(&_0, SL("scope"), SL("OAuth2\\Storage\\ScopeInterface"));
	zephir_update_property_zval(this_ptr, SL("storageMap"), &_0);
	ZEPHIR_INIT_VAR(&_1);
	zephir_create_array(&_1, 4, 0 TSRMLS_CC);
	add_assoc_stringl_ex(&_1, SL("token"), SL("OAuth2\\ResponseType\\AccessTokenInterface"));
	add_assoc_stringl_ex(&_1, SL("code"), SL("OAuth2\\ResponseType\\AuthorizationCodeInterface"));
	add_assoc_stringl_ex(&_1, SL("id_token"), SL("OAuth2\\OpenID\\ResponseType\\IdTokenInterface"));
	add_assoc_stringl_ex(&_1, SL("id_token token"), SL("OAuth2\\OpenID\\ResponseType\\IdTokenTokenInterface"));
	zephir_update_property_zval(this_ptr, SL("responseTypeMap"), &_1);
	ZEPHIR_INIT_VAR(&_2);
	array_init(&_2);
	zephir_update_property_zval(this_ptr, SL("storages"), &_2);
	if (1 != 1) {
		ZEPHIR_INIT_NVAR(&storage);
		zephir_create_array(&storage, 1, 0 TSRMLS_CC);
		zephir_array_fast_append(&storage, &storage);
	}
	zephir_is_iterable(&storage, 0, "oauth2/server.zep", 123);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&storage), _4, _5, _3)
	{
		ZEPHIR_INIT_NVAR(&key);
		if (_5 != NULL) { 
			ZVAL_STR_COPY(&key, _5);
		} else {
			ZVAL_LONG(&key, _4);
		}
		ZEPHIR_INIT_NVAR(&service);
		ZVAL_COPY(&service, _3);
		ZEPHIR_CALL_METHOD(NULL, this_ptr, "addstorage", &_6, 0, &service, &key);
		zephir_check_call_status();
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&service);
	ZEPHIR_INIT_NVAR(&key);
	ZEPHIR_INIT_VAR(&_7);
	ZEPHIR_INIT_VAR(&_8);
	zephir_create_array(&_8, 14, 0 TSRMLS_CC);
	zephir_array_update_string(&_8, SL("use_jwt_access_tokens"), &__$false, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&_8, SL("store_encrypted_token_string"), &__$true, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&_8, SL("use_openid_connect"), &__$false, PH_COPY | PH_SEPARATE);
	add_assoc_long_ex(&_8, SL("id_lifetime"), 3600);
	add_assoc_long_ex(&_8, SL("access_lifetime"), 3600);
	add_assoc_stringl_ex(&_8, SL("www_realm"), SL("Service"));
	add_assoc_stringl_ex(&_8, SL("token_param_name"), SL("access_token"));
	add_assoc_stringl_ex(&_8, SL("token_bearer_header_name"), SL("Bearer"));
	zephir_array_update_string(&_8, SL("enforce_state"), &__$true, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&_8, SL("require_exact_redirect_uri"), &__$true, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&_8, SL("allow_implicit"), &__$false, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&_8, SL("allow_credentials_in_request_body"), &__$true, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&_8, SL("allow_public_clients"), &__$true, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&_8, SL("always_issue_new_refresh_token"), &__$false, PH_COPY | PH_SEPARATE);
	zephir_fast_array_merge(&_7, &_8, &config TSRMLS_CC);
	zephir_update_property_zval(this_ptr, SL("config"), &_7);
	zephir_is_iterable(&grantTypes, 0, "oauth2/server.zep", 144);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&grantTypes), _10, _11, _9)
	{
		ZEPHIR_INIT_NVAR(&key);
		if (_11 != NULL) { 
			ZVAL_STR_COPY(&key, _11);
		} else {
			ZVAL_LONG(&key, _10);
		}
		ZEPHIR_INIT_NVAR(&type);
		ZVAL_COPY(&type, _9);
		ZEPHIR_CALL_METHOD(NULL, this_ptr, "addgranttype", &_12, 0, &type, &key);
		zephir_check_call_status();
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&type);
	ZEPHIR_INIT_NVAR(&key);
	zephir_is_iterable(&responseTypes, 0, "oauth2/server.zep", 148);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&responseTypes), _14, _15, _13)
	{
		ZEPHIR_INIT_NVAR(&key);
		if (_15 != NULL) { 
			ZVAL_STR_COPY(&key, _15);
		} else {
			ZVAL_LONG(&key, _14);
		}
		ZEPHIR_INIT_NVAR(&type);
		ZVAL_COPY(&type, _13);
		ZEPHIR_CALL_METHOD(NULL, this_ptr, "addresponsetype", &_16, 0, &type, &key);
		zephir_check_call_status();
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&type);
	ZEPHIR_INIT_NVAR(&key);
	zephir_update_property_zval(this_ptr, SL("tokenType"), tokenType);
	zephir_update_property_zval(this_ptr, SL("scopeUtil"), scopeUtil);
	zephir_update_property_zval(this_ptr, SL("clientAssertionType"), clientAssertionType);
	ZEPHIR_MM_RESTORE();

}

/**
 * Set a storage object for the server
 *
 * @param OAuth\Storage\StorageInterface storage An object implementing one of the Storage interfaces
 * @param string key If null, the storage is set to the key of each storage interface it implements
 *
 * @see storageMap
 */
PHP_METHOD(OAuth2_Server, addStorage) {

	zend_string *_32$$10;
	zend_ulong _31$$10;
	zend_bool setStorage = 0, _1, _2$$3, _13$$3, _15$$3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zephir_fcall_cache_entry *_6 = NULL, *_12 = NULL;
	zval key;
	zval *storage, storage_sub, *key_param = NULL, type, interfaceClass, _0, _3$$3, _4$$3, _5$$3, _14$$3, _16$$3, _7$$4, _8$$4, _9$$4, _10$$4, _11$$4, _17$$5, _18$$5, _19$$6, _20$$7, _21$$7, _22$$8, _23$$9, _24$$9, _25$$9, _26$$9, _27$$9, _28$$9, _29$$10, *_30$$10, _33$$11, _34$$13, _35$$13, _36$$13, _37$$13, _38$$13, _39$$13;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&storage_sub);
	ZVAL_UNDEF(&type);
	ZVAL_UNDEF(&interfaceClass);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_4$$3);
	ZVAL_UNDEF(&_5$$3);
	ZVAL_UNDEF(&_14$$3);
	ZVAL_UNDEF(&_16$$3);
	ZVAL_UNDEF(&_7$$4);
	ZVAL_UNDEF(&_8$$4);
	ZVAL_UNDEF(&_9$$4);
	ZVAL_UNDEF(&_10$$4);
	ZVAL_UNDEF(&_11$$4);
	ZVAL_UNDEF(&_17$$5);
	ZVAL_UNDEF(&_18$$5);
	ZVAL_UNDEF(&_19$$6);
	ZVAL_UNDEF(&_20$$7);
	ZVAL_UNDEF(&_21$$7);
	ZVAL_UNDEF(&_22$$8);
	ZVAL_UNDEF(&_23$$9);
	ZVAL_UNDEF(&_24$$9);
	ZVAL_UNDEF(&_25$$9);
	ZVAL_UNDEF(&_26$$9);
	ZVAL_UNDEF(&_27$$9);
	ZVAL_UNDEF(&_28$$9);
	ZVAL_UNDEF(&_29$$10);
	ZVAL_UNDEF(&_33$$11);
	ZVAL_UNDEF(&_34$$13);
	ZVAL_UNDEF(&_35$$13);
	ZVAL_UNDEF(&_36$$13);
	ZVAL_UNDEF(&_37$$13);
	ZVAL_UNDEF(&_38$$13);
	ZVAL_UNDEF(&_39$$13);
	ZVAL_UNDEF(&key);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &storage, &key_param);

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


	zephir_read_property(&_0, this_ptr, SL("storageMap"), PH_NOISY_CC | PH_READONLY);
	_1 = 1 != 0;
	if (_1) {
		_1 = !(zephir_is_numeric(&key));
	}
	if (zephir_array_isset(&_0, &key)) {
		_2$$3 = Z_TYPE_P(storage) != IS_NULL;
		if (_2$$3) {
			zephir_read_property(&_3$$3, this_ptr, SL("storageMap"), PH_NOISY_CC | PH_READONLY);
			zephir_array_fetch(&_4$$3, &_3$$3, &key, PH_NOISY | PH_READONLY, "oauth2/server.zep", 168 TSRMLS_CC);
			ZEPHIR_CALL_FUNCTION(&_5$$3, "is_subclass_of", &_6, 49, storage, &_4$$3);
			zephir_check_call_status();
			_2$$3 = !zephir_is_true(&_5$$3);
		}
		if (_2$$3) {
			ZEPHIR_INIT_VAR(&_7$$4);
			object_init_ex(&_7$$4, spl_ce_InvalidArgumentException);
			zephir_read_property(&_8$$4, this_ptr, SL("storageMap"), PH_NOISY_CC | PH_READONLY);
			zephir_array_fetch(&_9$$4, &_8$$4, &key, PH_NOISY | PH_READONLY, "oauth2/server.zep", 169 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_10$$4);
			ZVAL_STRING(&_10$$4, "storage of type \"%s\" must implement interface \"%s\"");
			ZEPHIR_CALL_FUNCTION(&_11$$4, "sprintf", &_12, 19, &_10$$4, &key, &_9$$4);
			zephir_check_call_status();
			ZEPHIR_CALL_METHOD(NULL, &_7$$4, "__construct", NULL, 41, &_11$$4);
			zephir_check_call_status();
			zephir_throw_exception_debug(&_7$$4, "oauth2/server.zep", 169 TSRMLS_CC);
			ZEPHIR_MM_RESTORE();
			return;
		}
		zephir_update_property_array(this_ptr, SL("storages"), &key, storage TSRMLS_CC);
		_13$$3 = ZEPHIR_IS_STRING_IDENTICAL(&key, "client");
		if (_13$$3) {
			zephir_read_property(&_14$$3, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
			_13$$3 = !(zephir_array_isset_string(&_14$$3, SL("client_credentials")));
		}
		_15$$3 = ZEPHIR_IS_STRING_IDENTICAL(&key, "client_credentials");
		if (_15$$3) {
			zephir_read_property(&_16$$3, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
			_15$$3 = !(zephir_array_isset_string(&_16$$3, SL("client")));
		}
		if (_13$$3) {
			ZEPHIR_INIT_VAR(&_17$$5);
			ZVAL_STRING(&_17$$5, "OAuth2\\Storage\\ClientCredentialsInterface");
			ZEPHIR_CALL_FUNCTION(&_18$$5, "is_subclass_of", &_6, 49, storage, &_17$$5);
			zephir_check_call_status();
			if (zephir_is_true(&_18$$5)) {
				ZEPHIR_INIT_VAR(&_19$$6);
				ZVAL_STRING(&_19$$6, "client_credentials");
				zephir_update_property_array(this_ptr, SL("storages"), &_19$$6, storage TSRMLS_CC);
			}
		} else if (_15$$3) {
			ZEPHIR_INIT_VAR(&_20$$7);
			ZVAL_STRING(&_20$$7, "OAuth2\\Storage\\ClientInterface");
			ZEPHIR_CALL_FUNCTION(&_21$$7, "is_subclass_of", &_6, 49, storage, &_20$$7);
			zephir_check_call_status();
			if (zephir_is_true(&_21$$7)) {
				ZEPHIR_INIT_VAR(&_22$$8);
				ZVAL_STRING(&_22$$8, "client");
				zephir_update_property_array(this_ptr, SL("storages"), &_22$$8, storage TSRMLS_CC);
			}
		}
	} else if (_1) {
		ZEPHIR_INIT_VAR(&_23$$9);
		object_init_ex(&_23$$9, spl_ce_InvalidArgumentException);
		ZEPHIR_INIT_VAR(&_24$$9);
		ZEPHIR_INIT_VAR(&_25$$9);
		zephir_read_property(&_26$$9, this_ptr, SL("storageMap"), PH_NOISY_CC | PH_READONLY);
		zephir_array_keys(&_25$$9, &_26$$9 TSRMLS_CC);
		zephir_fast_join_str(&_24$$9, SL(", "), &_25$$9 TSRMLS_CC);
		ZEPHIR_INIT_VAR(&_27$$9);
		ZVAL_STRING(&_27$$9, "unknown storage key \"%s\", must be one of [%s]");
		ZEPHIR_CALL_FUNCTION(&_28$$9, "sprintf", &_12, 19, &_27$$9, &key, &_24$$9);
		zephir_check_call_status();
		ZEPHIR_CALL_METHOD(NULL, &_23$$9, "__construct", NULL, 41, &_28$$9);
		zephir_check_call_status();
		zephir_throw_exception_debug(&_23$$9, "oauth2/server.zep", 184 TSRMLS_CC);
		ZEPHIR_MM_RESTORE();
		return;
	} else {
		setStorage = 0;
		zephir_read_property(&_29$$10, this_ptr, SL("storageMap"), PH_NOISY_CC | PH_READONLY);
		zephir_is_iterable(&_29$$10, 0, "oauth2/server.zep", 194);
		ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&_29$$10), _31$$10, _32$$10, _30$$10)
		{
			ZEPHIR_INIT_NVAR(&type);
			if (_32$$10 != NULL) { 
				ZVAL_STR_COPY(&type, _32$$10);
			} else {
				ZVAL_LONG(&type, _31$$10);
			}
			ZEPHIR_INIT_NVAR(&interfaceClass);
			ZVAL_COPY(&interfaceClass, _30$$10);
			ZEPHIR_CALL_FUNCTION(&_33$$11, "is_subclass_of", &_6, 49, storage, &interfaceClass);
			zephir_check_call_status();
			if (zephir_is_true(&_33$$11)) {
				zephir_update_property_array(this_ptr, SL("storages"), &type, storage TSRMLS_CC);
				setStorage = 1;
			}
		} ZEND_HASH_FOREACH_END();
		ZEPHIR_INIT_NVAR(&interfaceClass);
		ZEPHIR_INIT_NVAR(&type);
		if (!(setStorage)) {
			ZEPHIR_INIT_VAR(&_34$$13);
			object_init_ex(&_34$$13, spl_ce_InvalidArgumentException);
			ZEPHIR_INIT_VAR(&_35$$13);
			zephir_get_class(&_35$$13, storage, 0 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_36$$13);
			zephir_read_property(&_37$$13, this_ptr, SL("storageMap"), PH_NOISY_CC | PH_READONLY);
			zephir_fast_join_str(&_36$$13, SL(", "), &_37$$13 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_38$$13);
			ZVAL_STRING(&_38$$13, "storage of class \"%s\" must implement one of [%s]");
			ZEPHIR_CALL_FUNCTION(&_39$$13, "sprintf", &_12, 19, &_38$$13, &_35$$13, &_36$$13);
			zephir_check_call_status();
			ZEPHIR_CALL_METHOD(NULL, &_34$$13, "__construct", NULL, 41, &_39$$13);
			zephir_check_call_status();
			zephir_throw_exception_debug(&_34$$13, "oauth2/server.zep", 195 TSRMLS_CC);
			ZEPHIR_MM_RESTORE();
			return;
		}
	}
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(OAuth2_Server, addGrantType) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval key;
	zval *grantType, grantType_sub, *key_param = NULL, _0$$4, _1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&grantType_sub);
	ZVAL_UNDEF(&_0$$4);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&key);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &grantType, &key_param);

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


	if (1 == 1) {
		zephir_update_property_array(this_ptr, SL("grantTypes"), &key, grantType TSRMLS_CC);
	} else {
		ZEPHIR_CALL_METHOD(&_0$$4, grantType, "getquerystringidentifier", NULL, 0);
		zephir_check_call_status();
		zephir_update_property_array(this_ptr, SL("grantTypes"), &_0$$4, grantType TSRMLS_CC);
	}
	ZEPHIR_CALL_METHOD(&_1, this_ptr, "gettokencontroller", NULL, 0);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(NULL, &_1, "addgranttype", NULL, 0, grantType);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(OAuth2_Server, addResponseType) {

	zend_string *_22$$6;
	zend_ulong _21$$6;
	zend_bool setResponse, _2;
	zephir_fcall_cache_entry *_6 = NULL, *_12 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval key;
	zval *responseType, responseType_sub, *key_param = NULL, type, interfaceClass, _0, _1, _3$$3, _4$$3, _5$$3, _7$$4, _8$$4, _9$$4, _10$$4, _11$$4, _13$$5, _14$$5, _15$$5, _16$$5, _17$$5, _18$$5, _19$$6, *_20$$6, _23$$7, _24$$9, _25$$9, _26$$9, _27$$9, _28$$9, _29$$9;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&responseType_sub);
	ZVAL_UNDEF(&type);
	ZVAL_UNDEF(&interfaceClass);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_4$$3);
	ZVAL_UNDEF(&_5$$3);
	ZVAL_UNDEF(&_7$$4);
	ZVAL_UNDEF(&_8$$4);
	ZVAL_UNDEF(&_9$$4);
	ZVAL_UNDEF(&_10$$4);
	ZVAL_UNDEF(&_11$$4);
	ZVAL_UNDEF(&_13$$5);
	ZVAL_UNDEF(&_14$$5);
	ZVAL_UNDEF(&_15$$5);
	ZVAL_UNDEF(&_16$$5);
	ZVAL_UNDEF(&_17$$5);
	ZVAL_UNDEF(&_18$$5);
	ZVAL_UNDEF(&_19$$6);
	ZVAL_UNDEF(&_23$$7);
	ZVAL_UNDEF(&_24$$9);
	ZVAL_UNDEF(&_25$$9);
	ZVAL_UNDEF(&_26$$9);
	ZVAL_UNDEF(&_27$$9);
	ZVAL_UNDEF(&_28$$9);
	ZVAL_UNDEF(&_29$$9);
	ZVAL_UNDEF(&key);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &responseType, &key_param);

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


	setResponse = 0;
	ZEPHIR_CALL_METHOD(&_0, this_ptr, "normalizeresponsetype", NULL, 0, &key);
	zephir_check_call_status();
	zephir_get_strval(&key, &_0);
	zephir_read_property(&_1, this_ptr, SL("responseTypeMap"), PH_NOISY_CC | PH_READONLY);
	_2 = !ZEPHIR_IS_STRING(&key, "");
	if (_2) {
		_2 = !(zephir_is_numeric(&key));
	}
	if (zephir_array_isset(&_1, &key)) {
		zephir_read_property(&_3$$3, this_ptr, SL("responseTypeMap"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch(&_4$$3, &_3$$3, &key, PH_NOISY | PH_READONLY, "oauth2/server.zep", 221 TSRMLS_CC);
		ZEPHIR_CALL_FUNCTION(&_5$$3, "is_subclass_of", &_6, 49, responseType, &_4$$3);
		zephir_check_call_status();
		if (!(zephir_is_true(&_5$$3))) {
			ZEPHIR_INIT_VAR(&_7$$4);
			object_init_ex(&_7$$4, spl_ce_InvalidArgumentException);
			zephir_read_property(&_8$$4, this_ptr, SL("responseTypeMap"), PH_NOISY_CC | PH_READONLY);
			zephir_array_fetch(&_9$$4, &_8$$4, &key, PH_NOISY | PH_READONLY, "oauth2/server.zep", 222 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_10$$4);
			ZVAL_STRING(&_10$$4, "responseType of type \"%s\" must implement interface \"%s\"");
			ZEPHIR_CALL_FUNCTION(&_11$$4, "sprintf", &_12, 19, &_10$$4, &key, &_9$$4);
			zephir_check_call_status();
			ZEPHIR_CALL_METHOD(NULL, &_7$$4, "__construct", NULL, 41, &_11$$4);
			zephir_check_call_status();
			zephir_throw_exception_debug(&_7$$4, "oauth2/server.zep", 222 TSRMLS_CC);
			ZEPHIR_MM_RESTORE();
			return;
		}
		zephir_update_property_array(this_ptr, SL("responseTypes"), &key, responseType TSRMLS_CC);
	} else if (_2) {
		ZEPHIR_INIT_VAR(&_13$$5);
		object_init_ex(&_13$$5, spl_ce_InvalidArgumentException);
		ZEPHIR_INIT_VAR(&_14$$5);
		ZEPHIR_INIT_VAR(&_15$$5);
		zephir_read_property(&_16$$5, this_ptr, SL("responseTypeMap"), PH_NOISY_CC | PH_READONLY);
		zephir_array_keys(&_15$$5, &_16$$5 TSRMLS_CC);
		zephir_fast_join_str(&_14$$5, SL(", "), &_15$$5 TSRMLS_CC);
		ZEPHIR_INIT_VAR(&_17$$5);
		ZVAL_STRING(&_17$$5, "unknown responseType key \"%s\", must be one of [%s]");
		ZEPHIR_CALL_FUNCTION(&_18$$5, "sprintf", &_12, 19, &_17$$5, &key, &_14$$5);
		zephir_check_call_status();
		ZEPHIR_CALL_METHOD(NULL, &_13$$5, "__construct", NULL, 41, &_18$$5);
		zephir_check_call_status();
		zephir_throw_exception_debug(&_13$$5, "oauth2/server.zep", 226 TSRMLS_CC);
		ZEPHIR_MM_RESTORE();
		return;
	} else {
		setResponse = 0;
		zephir_read_property(&_19$$6, this_ptr, SL("responseTypeMap"), PH_NOISY_CC | PH_READONLY);
		zephir_is_iterable(&_19$$6, 0, "oauth2/server.zep", 236);
		ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&_19$$6), _21$$6, _22$$6, _20$$6)
		{
			ZEPHIR_INIT_NVAR(&type);
			if (_22$$6 != NULL) { 
				ZVAL_STR_COPY(&type, _22$$6);
			} else {
				ZVAL_LONG(&type, _21$$6);
			}
			ZEPHIR_INIT_NVAR(&interfaceClass);
			ZVAL_COPY(&interfaceClass, _20$$6);
			ZEPHIR_CALL_FUNCTION(&_23$$7, "is_subclass_of", &_6, 49, responseType, &interfaceClass);
			zephir_check_call_status();
			if (zephir_is_true(&_23$$7)) {
				zephir_update_property_array(this_ptr, SL("responseTypes"), &type, responseType TSRMLS_CC);
				setResponse = 1;
			}
		} ZEND_HASH_FOREACH_END();
		ZEPHIR_INIT_NVAR(&interfaceClass);
		ZEPHIR_INIT_NVAR(&type);
		if (!(setResponse)) {
			ZEPHIR_INIT_VAR(&_24$$9);
			object_init_ex(&_24$$9, spl_ce_InvalidArgumentException);
			ZEPHIR_INIT_VAR(&_25$$9);
			zephir_get_class(&_25$$9, responseType, 0 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_26$$9);
			zephir_read_property(&_27$$9, this_ptr, SL("responseTypeMap"), PH_NOISY_CC | PH_READONLY);
			zephir_fast_join_str(&_26$$9, SL(", "), &_27$$9 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_28$$9);
			ZVAL_STRING(&_28$$9, "Unknown response type %s.  Please implement one of [%s]");
			ZEPHIR_CALL_FUNCTION(&_29$$9, "sprintf", &_12, 19, &_28$$9, &_25$$9, &_26$$9);
			zephir_check_call_status();
			ZEPHIR_CALL_METHOD(NULL, &_24$$9, "__construct", NULL, 41, &_29$$9);
			zephir_check_call_status();
			zephir_throw_exception_debug(&_24$$9, "oauth2/server.zep", 237 TSRMLS_CC);
			ZEPHIR_MM_RESTORE();
			return;
		}
	}
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(OAuth2_Server, setAuthorizeController) {

	zval *authorizeController, authorizeController_sub;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&authorizeController_sub);

	zephir_fetch_params(0, 1, 0, &authorizeController);



	zephir_update_property_zval(this_ptr, SL("authorizeController"), authorizeController);

}

PHP_METHOD(OAuth2_Server, getAuthorizeController) {

	zval _0, _1$$3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1$$3);

	ZEPHIR_MM_GROW();

	ZEPHIR_OBS_VAR(&_0);
	zephir_read_property(&_0, this_ptr, SL("authorizeController"), PH_NOISY_CC);
	if (Z_TYPE_P(&_0) == IS_NULL) {
		ZEPHIR_CALL_METHOD(&_1$$3, this_ptr, "createdefaultauthorizecontroller", NULL, 0);
		zephir_check_call_status();
		zephir_update_property_zval(this_ptr, SL("authorizeController"), &_1$$3);
	}
	RETURN_MM_MEMBER(getThis(), "authorizeController");

}

PHP_METHOD(OAuth2_Server, setTokenController) {

	zval *tokenController, tokenController_sub;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&tokenController_sub);

	zephir_fetch_params(0, 1, 0, &tokenController);



	zephir_update_property_zval(this_ptr, SL("tokenController"), tokenController);

}

PHP_METHOD(OAuth2_Server, getTokenController) {

	zval _0, _1$$3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1$$3);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("tokenController"), PH_NOISY_CC | PH_READONLY);
	if (Z_TYPE_P(&_0) == IS_NULL) {
		ZEPHIR_CALL_METHOD(&_1$$3, this_ptr, "createdefaulttokencontroller", NULL, 0);
		zephir_check_call_status();
		zephir_update_property_zval(this_ptr, SL("tokenController"), &_1$$3);
	}
	RETURN_MM_MEMBER(getThis(), "tokenController");

}

PHP_METHOD(OAuth2_Server, setResourceController) {

	zval *resourceController, resourceController_sub;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&resourceController_sub);

	zephir_fetch_params(0, 1, 0, &resourceController);



	zephir_update_property_zval(this_ptr, SL("resourceController"), resourceController);

}

PHP_METHOD(OAuth2_Server, getResourceController) {

	zval _0, _1$$3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1$$3);

	ZEPHIR_MM_GROW();

	ZEPHIR_OBS_VAR(&_0);
	zephir_read_property(&_0, this_ptr, SL("resourceController"), PH_NOISY_CC);
	if (Z_TYPE_P(&_0) == IS_NULL) {
		ZEPHIR_CALL_METHOD(&_1$$3, this_ptr, "createdefaultresourcecontroller", NULL, 0);
		zephir_check_call_status();
		zephir_update_property_zval(this_ptr, SL("resourceController"), &_1$$3);
	}
	RETURN_MM_MEMBER(getThis(), "resourceController");

}

PHP_METHOD(OAuth2_Server, normalizeResponseType) {

	zend_bool _0;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *name_param = NULL, types, _1, _2;
	zval name;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&name);
	ZVAL_UNDEF(&types);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &name_param);

	if (UNEXPECTED(Z_TYPE_P(name_param) != IS_STRING && Z_TYPE_P(name_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'name' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (EXPECTED(Z_TYPE_P(name_param) == IS_STRING)) {
		zephir_get_strval(&name, name_param);
	} else {
		ZEPHIR_INIT_VAR(&name);
		ZVAL_EMPTY_STRING(&name);
	}


	_0 = !(ZEPHIR_IS_EMPTY(&name));
	if (_0) {
		ZEPHIR_INIT_VAR(&_1);
		ZVAL_STRING(&_1, " ");
		ZEPHIR_INIT_VAR(&_2);
		zephir_fast_strpos(&_2, &name, &_1, 0 );
		_0 = !ZEPHIR_IS_FALSE_IDENTICAL(&_2);
	}
	if (_0) {
		ZEPHIR_INIT_VAR(&types);
		zephir_fast_explode_str(&types, SL(" "), &name, LONG_MAX TSRMLS_CC);
		ZEPHIR_MAKE_REF(&types);
		ZEPHIR_CALL_FUNCTION(NULL, "sort", NULL, 14, &types);
		ZEPHIR_UNREF(&types);
		zephir_check_call_status();
		ZEPHIR_INIT_NVAR(&name);
		zephir_fast_join_str(&name, SL(" "), &types TSRMLS_CC);
	}
	RETURN_CTOR(&name);

}

PHP_METHOD(OAuth2_Server, createDefaultAuthorizeController) {

	zend_class_entry *_19$$7 = NULL;
	zend_bool _5;
	zval _0, _1, _3, _4, _6, config, _13, _14, _15, _16, _17, _18, _25, _26, _27, _28, _2$$4, _7$$5, _8$$5, _9$$5, _10$$5, _11$$6, _12$$6, _20$$7, _21$$7, _22$$7, _23$$7;
	zephir_fcall_cache_entry *_24 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&config);
	ZVAL_UNDEF(&_13);
	ZVAL_UNDEF(&_14);
	ZVAL_UNDEF(&_15);
	ZVAL_UNDEF(&_16);
	ZVAL_UNDEF(&_17);
	ZVAL_UNDEF(&_18);
	ZVAL_UNDEF(&_25);
	ZVAL_UNDEF(&_26);
	ZVAL_UNDEF(&_27);
	ZVAL_UNDEF(&_28);
	ZVAL_UNDEF(&_2$$4);
	ZVAL_UNDEF(&_7$$5);
	ZVAL_UNDEF(&_8$$5);
	ZVAL_UNDEF(&_9$$5);
	ZVAL_UNDEF(&_10$$5);
	ZVAL_UNDEF(&_11$$6);
	ZVAL_UNDEF(&_12$$6);
	ZVAL_UNDEF(&_20$$7);
	ZVAL_UNDEF(&_21$$7);
	ZVAL_UNDEF(&_22$$7);
	ZVAL_UNDEF(&_23$$7);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	if (!(zephir_array_isset_string(&_0, SL("client")))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(spl_ce_LogicException, "You must supply a storage object implementing \\OAuth2\\Storage\\ClientInterface to use the authorize server", "oauth2/server.zep", 298);
		return;
	}
	zephir_read_property(&_1, this_ptr, SL("responseTypes"), PH_NOISY_CC | PH_READONLY);
	if (0 == zephir_fast_count_int(&_1 TSRMLS_CC)) {
		ZEPHIR_CALL_METHOD(&_2$$4, this_ptr, "getdefaultresponsetypes", NULL, 0);
		zephir_check_call_status();
		zephir_update_property_zval(this_ptr, SL("responseTypes"), &_2$$4);
	}
	zephir_read_property(&_3, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_4, &_3, SL("use_openid_connect"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 303 TSRMLS_CC);
	_5 = zephir_is_true(&_4);
	if (_5) {
		zephir_read_property(&_6, this_ptr, SL("responseTypes"), PH_NOISY_CC | PH_READONLY);
		_5 = !(zephir_array_isset_string(&_6, SL("id_token")));
	}
	if (_5) {
		ZEPHIR_CALL_METHOD(&_7$$5, this_ptr, "createdefaultidtokenresponsetype", NULL, 0);
		zephir_check_call_status();
		ZEPHIR_INIT_VAR(&_8$$5);
		ZVAL_STRING(&_8$$5, "id_token");
		zephir_update_property_array(this_ptr, SL("responseTypes"), &_8$$5, &_7$$5 TSRMLS_CC);
		zephir_read_property(&_9$$5, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_10$$5, &_9$$5, SL("allow_implicit"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 305 TSRMLS_CC);
		if (zephir_is_true(&_10$$5)) {
			ZEPHIR_CALL_METHOD(&_11$$6, this_ptr, "createdefaultidtokentokenresponsetype", NULL, 0);
			zephir_check_call_status();
			ZEPHIR_INIT_VAR(&_12$$6);
			ZVAL_STRING(&_12$$6, "id_token token");
			zephir_update_property_array(this_ptr, SL("responseTypes"), &_12$$6, &_11$$6 TSRMLS_CC);
		}
	}
	zephir_read_property(&_13, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_VAR(&_14);
	ZEPHIR_INIT_VAR(&_15);
	ZVAL_STRING(&_15, "allow_implicit enforce_state require_exact_redirect_uri");
	zephir_fast_explode_str(&_14, SL(" "), &_15, LONG_MAX TSRMLS_CC);
	ZEPHIR_CALL_FUNCTION(&_16, "array_flip", NULL, 50, &_14);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(&config, "array_intersect_key", NULL, 51, &_13, &_16);
	zephir_check_call_status();
	zephir_read_property(&_17, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_18, &_17, SL("use_openid_connect"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 312 TSRMLS_CC);
	if (zephir_is_true(&_18)) {
		if (!_19$$7) {
		_19$$7 = zephir_fetch_class_str_ex(SL("OAuth2\\OpenIDAuthorizeController"), ZEND_FETCH_CLASS_AUTO);
		}
		object_init_ex(return_value, _19$$7);
		if (zephir_has_constructor(return_value TSRMLS_CC)) {
			zephir_read_property(&_20$$7, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
			zephir_array_fetch_string(&_21$$7, &_20$$7, SL("client"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 313 TSRMLS_CC);
			zephir_read_property(&_22$$7, this_ptr, SL("responseTypes"), PH_NOISY_CC | PH_READONLY);
			ZEPHIR_CALL_METHOD(&_23$$7, this_ptr, "getscopeutil", &_24, 0);
			zephir_check_call_status();
			ZEPHIR_CALL_METHOD(NULL, return_value, "__construct", NULL, 0, &_21$$7, &_22$$7, &config, &_23$$7);
			zephir_check_call_status();
		}
		RETURN_MM();
	}
	object_init_ex(return_value, oauth2_controller_authorizecontroller_ce);
	zephir_read_property(&_25, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_26, &_25, SL("client"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 316 TSRMLS_CC);
	zephir_read_property(&_27, this_ptr, SL("responseTypes"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&_28, this_ptr, "getscopeutil", &_24, 0);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(NULL, return_value, "__construct", NULL, 52, &_26, &_27, &config, &_28);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(OAuth2_Server, createDefaultTokenController) {

	zval _0, _2, _16, accessTokenResponseType, _17, _18, _19, _20, _21, _1$$3, grantType$$4, config$$4, _3$$4, *_4$$4, _5$$6, _6$$6, _7$$6, _8$$6, _9$$6, _12$$6, _13$$6, _14$$6;
	zephir_fcall_cache_entry *_10 = NULL, *_11 = NULL, *_15 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_16);
	ZVAL_UNDEF(&accessTokenResponseType);
	ZVAL_UNDEF(&_17);
	ZVAL_UNDEF(&_18);
	ZVAL_UNDEF(&_19);
	ZVAL_UNDEF(&_20);
	ZVAL_UNDEF(&_21);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&grantType$$4);
	ZVAL_UNDEF(&config$$4);
	ZVAL_UNDEF(&_3$$4);
	ZVAL_UNDEF(&_5$$6);
	ZVAL_UNDEF(&_6$$6);
	ZVAL_UNDEF(&_7$$6);
	ZVAL_UNDEF(&_8$$6);
	ZVAL_UNDEF(&_9$$6);
	ZVAL_UNDEF(&_12$$6);
	ZVAL_UNDEF(&_13$$6);
	ZVAL_UNDEF(&_14$$6);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("grantTypes"), PH_NOISY_CC | PH_READONLY);
	if (0 == zephir_fast_count_int(&_0 TSRMLS_CC)) {
		ZEPHIR_CALL_METHOD(&_1$$3, this_ptr, "getdefaultgranttypes", NULL, 0);
		zephir_check_call_status();
		zephir_update_property_zval(this_ptr, SL("grantTypes"), &_1$$3);
	}
	zephir_read_property(&_2, this_ptr, SL("clientAssertionType"), PH_NOISY_CC | PH_READONLY);
	if (Z_TYPE_P(&_2) == IS_NULL) {
		zephir_read_property(&_3$$4, this_ptr, SL("grantTypes"), PH_NOISY_CC | PH_READONLY);
		zephir_is_iterable(&_3$$4, 0, "oauth2/server.zep", 338);
		ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(&_3$$4), _4$$4)
		{
			ZEPHIR_INIT_NVAR(&grantType$$4);
			ZVAL_COPY(&grantType$$4, _4$$4);
			if (!(zephir_instance_of_ev(&grantType$$4, oauth2_clientassertiontype_clientassertiontypeinterface_ce TSRMLS_CC))) {
				zephir_read_property(&_5$$6, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
				if (!(zephir_array_isset_string(&_5$$6, SL("client_credentials")))) {
					ZEPHIR_THROW_EXCEPTION_DEBUG_STR(spl_ce_LogicException, "You must supply a storage object implementing OAuth2\\Storage\\ClientCredentialsInterface to use the token server", "oauth2/server.zep", 331);
					return;
				}
				zephir_read_property(&_6$$6, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
				ZEPHIR_INIT_NVAR(&_7$$6);
				ZEPHIR_INIT_NVAR(&_8$$6);
				ZVAL_STRING(&_8$$6, "allow_credentials_in_request_body allow_public_clients");
				zephir_fast_explode_str(&_7$$6, SL(" "), &_8$$6, LONG_MAX TSRMLS_CC);
				ZEPHIR_CALL_FUNCTION(&_9$$6, "array_flip", &_10, 50, &_7$$6);
				zephir_check_call_status();
				ZEPHIR_CALL_FUNCTION(&config$$4, "array_intersect_key", &_11, 51, &_6$$6, &_9$$6);
				zephir_check_call_status();
				ZEPHIR_INIT_NVAR(&_12$$6);
				object_init_ex(&_12$$6, oauth2_clientassertiontype_httpbasic_ce);
				zephir_read_property(&_13$$6, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
				zephir_array_fetch_string(&_14$$6, &_13$$6, SL("client_credentials"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 334 TSRMLS_CC);
				ZEPHIR_CALL_METHOD(NULL, &_12$$6, "__construct", &_15, 53, &_14$$6, &config$$4);
				zephir_check_call_status();
				zephir_update_property_zval(this_ptr, SL("clientAssertionType"), &_12$$6);
				break;
			}
		} ZEND_HASH_FOREACH_END();
		ZEPHIR_INIT_NVAR(&grantType$$4);
	}
	zephir_read_property(&_16, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	if (!(zephir_array_isset_string(&_16, SL("client")))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(spl_ce_LogicException, "You must supply a storage object implementing OAuth2\\Storage\\ClientInterface to use the token server", "oauth2/server.zep", 341);
		return;
	}
	ZEPHIR_CALL_METHOD(&accessTokenResponseType, this_ptr, "getaccesstokenresponsetype", NULL, 0);
	zephir_check_call_status();
	object_init_ex(return_value, oauth2_controller_tokencontroller_ce);
	zephir_read_property(&_17, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_18, &_17, SL("client"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 346 TSRMLS_CC);
	zephir_read_property(&_19, this_ptr, SL("grantTypes"), PH_NOISY_CC | PH_READONLY);
	zephir_read_property(&_20, this_ptr, SL("clientAssertionType"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&_21, this_ptr, "getscopeutil", NULL, 0);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(NULL, return_value, "__construct", NULL, 54, &accessTokenResponseType, &_18, &_19, &_20, &_21);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(OAuth2_Server, getDefaultResponseTypes) {

	zend_class_entry *_19$$7 = NULL, *_23$$7 = NULL;
	zval responseTypes, _0, _1, _3, _4, _9, _2$$3, _5$$4, _6$$4, _7$$4, _8$$5, config$$6, _10$$6, _11$$6, _12$$6, _13$$6, _14$$6, _15$$6, _16$$7, _17$$7, _18$$7, _20$$7, _21$$7, _22$$7, _24$$7, _25$$7, _26$$9, _27$$9, _28$$9;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&responseTypes);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_9);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_5$$4);
	ZVAL_UNDEF(&_6$$4);
	ZVAL_UNDEF(&_7$$4);
	ZVAL_UNDEF(&_8$$5);
	ZVAL_UNDEF(&config$$6);
	ZVAL_UNDEF(&_10$$6);
	ZVAL_UNDEF(&_11$$6);
	ZVAL_UNDEF(&_12$$6);
	ZVAL_UNDEF(&_13$$6);
	ZVAL_UNDEF(&_14$$6);
	ZVAL_UNDEF(&_15$$6);
	ZVAL_UNDEF(&_16$$7);
	ZVAL_UNDEF(&_17$$7);
	ZVAL_UNDEF(&_18$$7);
	ZVAL_UNDEF(&_20$$7);
	ZVAL_UNDEF(&_21$$7);
	ZVAL_UNDEF(&_22$$7);
	ZVAL_UNDEF(&_24$$7);
	ZVAL_UNDEF(&_25$$7);
	ZVAL_UNDEF(&_26$$9);
	ZVAL_UNDEF(&_27$$9);
	ZVAL_UNDEF(&_28$$9);

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(&responseTypes);
	array_init(&responseTypes);
	zephir_read_property(&_0, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_1, &_0, SL("allow_implicit"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 353 TSRMLS_CC);
	if (zephir_is_true(&_1)) {
		ZEPHIR_CALL_METHOD(&_2$$3, this_ptr, "getaccesstokenresponsetype", NULL, 0);
		zephir_check_call_status();
		zephir_array_update_string(&responseTypes, SL("token"), &_2$$3, PH_COPY | PH_SEPARATE);
	}
	zephir_read_property(&_3, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_4, &_3, SL("use_openid_connect"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 357 TSRMLS_CC);
	if (zephir_is_true(&_4)) {
		ZEPHIR_CALL_METHOD(&_5$$4, this_ptr, "getidtokenresponsetype", NULL, 0);
		zephir_check_call_status();
		zephir_array_update_string(&responseTypes, SL("id_token"), &_5$$4, PH_COPY | PH_SEPARATE);
		zephir_read_property(&_6$$4, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_7$$4, &_6$$4, SL("allow_implicit"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 359 TSRMLS_CC);
		if (zephir_is_true(&_7$$4)) {
			ZEPHIR_CALL_METHOD(&_8$$5, this_ptr, "getidtokentokenresponsetype", NULL, 0);
			zephir_check_call_status();
			zephir_array_update_string(&responseTypes, SL("id_token token"), &_8$$5, PH_COPY | PH_SEPARATE);
		}
	}
	zephir_read_property(&_9, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset_string(&_9, SL("authorization_code"))) {
		zephir_read_property(&_10$$6, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_INIT_VAR(&_11$$6);
		ZEPHIR_INIT_VAR(&_12$$6);
		ZVAL_STRING(&_12$$6, "enforce_redirect auth_code_lifetime");
		zephir_fast_explode_str(&_11$$6, SL(" "), &_12$$6, LONG_MAX TSRMLS_CC);
		ZEPHIR_CALL_FUNCTION(&_13$$6, "array_flip", NULL, 50, &_11$$6);
		zephir_check_call_status();
		ZEPHIR_CALL_FUNCTION(&config$$6, "array_intersect_key", NULL, 51, &_10$$6, &_13$$6);
		zephir_check_call_status();
		zephir_read_property(&_14$$6, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_15$$6, &_14$$6, SL("use_openid_connect"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 367 TSRMLS_CC);
		if (zephir_is_true(&_15$$6)) {
			zephir_read_property(&_16$$7, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
			ZEPHIR_OBS_VAR(&_17$$7);
			zephir_array_fetch_string(&_17$$7, &_16$$7, SL("authorization_code"), PH_NOISY, "oauth2/server.zep", 368 TSRMLS_CC);
			if (!(zephir_is_instance_of(&_17$$7, SL("OAuth2\\OpenIDAuthorizationCodeInterface") TSRMLS_CC))) {
				ZEPHIR_THROW_EXCEPTION_DEBUG_STR(spl_ce_LogicException, "Your authorization_code storage must implement OAuth2\\OpenID\\Storage\\AuthorizationCodeInterface to work when 'use_openid_connect' is true", "oauth2/server.zep", 369);
				return;
			}
			ZEPHIR_INIT_VAR(&_18$$7);
			if (!_19$$7) {
			_19$$7 = zephir_fetch_class_str_ex(SL("OAuth2\\OpenIDAuthorizationCodeResponseType"), ZEND_FETCH_CLASS_AUTO);
			}
			object_init_ex(&_18$$7, _19$$7);
			if (zephir_has_constructor(&_18$$7 TSRMLS_CC)) {
				zephir_read_property(&_20$$7, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
				zephir_array_fetch_string(&_21$$7, &_20$$7, SL("authorization_code"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 371 TSRMLS_CC);
				ZEPHIR_CALL_METHOD(NULL, &_18$$7, "__construct", NULL, 0, &_21$$7, &config$$6);
				zephir_check_call_status();
			}
			zephir_array_update_string(&responseTypes, SL("code"), &_18$$7, PH_COPY | PH_SEPARATE);
			ZEPHIR_INIT_VAR(&_22$$7);
			if (!_23$$7) {
			_23$$7 = zephir_fetch_class_str_ex(SL("OAuth2\\CodeIdToken"), ZEND_FETCH_CLASS_AUTO);
			}
			object_init_ex(&_22$$7, _23$$7);
			if (zephir_has_constructor(&_22$$7 TSRMLS_CC)) {
				zephir_array_fetch_string(&_24$$7, &responseTypes, SL("code"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 372 TSRMLS_CC);
				zephir_array_fetch_string(&_25$$7, &responseTypes, SL("id_token"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 372 TSRMLS_CC);
				ZEPHIR_CALL_METHOD(NULL, &_22$$7, "__construct", NULL, 0, &_24$$7, &_25$$7);
				zephir_check_call_status();
			}
			zephir_array_update_string(&responseTypes, SL("code id_token"), &_22$$7, PH_COPY | PH_SEPARATE);
		} else {
			ZEPHIR_INIT_VAR(&_26$$9);
			object_init_ex(&_26$$9, oauth2_responsetype_authorizationcode_ce);
			zephir_read_property(&_27$$9, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
			zephir_array_fetch_string(&_28$$9, &_27$$9, SL("authorization_code"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 374 TSRMLS_CC);
			ZEPHIR_CALL_METHOD(NULL, &_26$$9, "__construct", NULL, 55, &_28$$9, &config$$6);
			zephir_check_call_status();
			zephir_array_update_string(&responseTypes, SL("code"), &_26$$9, PH_COPY | PH_SEPARATE);
		}
	}
	if (zephir_fast_count_int(&responseTypes TSRMLS_CC) == 0) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(spl_ce_LogicException, "You must supply an array of response_types in the constructor or implement a OAuth2\\Storage\\AuthorizationCodeInterface storage object or set 'allow_implicit' to true and implement a OAuth2\\Storage\\AccessTokenInterface storage object", "oauth2/server.zep", 379);
		return;
	}
	RETURN_CCTOR(&responseTypes);

}

PHP_METHOD(OAuth2_Server, createDefaultResourceController) {

	zend_bool _4$$3;
	zval _12;
	zval _0, _1, _2, _9, config, _11, _13, _14, _15, _16, _3$$3, _5$$3, _6$$3, _7$$4, _8$$4, _10$$6;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_9);
	ZVAL_UNDEF(&config);
	ZVAL_UNDEF(&_11);
	ZVAL_UNDEF(&_13);
	ZVAL_UNDEF(&_14);
	ZVAL_UNDEF(&_15);
	ZVAL_UNDEF(&_16);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_5$$3);
	ZVAL_UNDEF(&_6$$3);
	ZVAL_UNDEF(&_7$$4);
	ZVAL_UNDEF(&_8$$4);
	ZVAL_UNDEF(&_10$$6);
	ZVAL_UNDEF(&_12);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_1, &_0, SL("use_jwt_access_tokens"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 387 TSRMLS_CC);
	zephir_read_property(&_2, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	if (zephir_is_true(&_1)) {
		zephir_read_property(&_3$$3, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
		_4$$3 = !(zephir_array_isset_string(&_3$$3, SL("access_token")));
		if (!(_4$$3)) {
			zephir_read_property(&_5$$3, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
			ZEPHIR_OBS_VAR(&_6$$3);
			zephir_array_fetch_string(&_6$$3, &_5$$3, SL("access_token"), PH_NOISY, "oauth2/server.zep", 389 TSRMLS_CC);
			_4$$3 = !(zephir_instance_of_ev(&_6$$3, oauth2_storage_jwtaccesstokeninterface_ce TSRMLS_CC));
		}
		if (_4$$3) {
			ZEPHIR_CALL_METHOD(&_7$$4, this_ptr, "createdefaultjwtaccesstokenstorage", NULL, 0);
			zephir_check_call_status();
			ZEPHIR_INIT_VAR(&_8$$4);
			ZVAL_STRING(&_8$$4, "access_token");
			zephir_update_property_array(this_ptr, SL("storages"), &_8$$4, &_7$$4 TSRMLS_CC);
		}
	} else if (!(zephir_array_isset_string(&_2, SL("access_token")))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(spl_ce_LogicException, "You must supply a storage object implementing OAuth2\\Storage\\AccessTokenInterface or use JwtAccessTokens to use the resource server", "oauth2/server.zep", 393);
		return;
	}
	zephir_read_property(&_9, this_ptr, SL("tokenType"), PH_NOISY_CC | PH_READONLY);
	if (!(zephir_is_true(&_9))) {
		ZEPHIR_CALL_METHOD(&_10$$6, this_ptr, "getdefaulttokentype", NULL, 0);
		zephir_check_call_status();
		zephir_update_property_zval(this_ptr, SL("tokenType"), &_10$$6);
	}
	zephir_read_property(&_11, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_VAR(&_12);
	zephir_create_array(&_12, 1, 0 TSRMLS_CC);
	add_assoc_stringl_ex(&_12, SL("www_realm"), SL(""));
	ZEPHIR_CALL_FUNCTION(&config, "array_intersect_key", NULL, 51, &_11, &_12);
	zephir_check_call_status();
	object_init_ex(return_value, oauth2_controller_resourcecontroller_ce);
	zephir_read_property(&_13, this_ptr, SL("tokenType"), PH_NOISY_CC | PH_READONLY);
	zephir_read_property(&_14, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_15, &_14, SL("access_token"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 403 TSRMLS_CC);
	ZEPHIR_CALL_METHOD(&_16, this_ptr, "getscopeutil", NULL, 0);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(NULL, return_value, "__construct", NULL, 56, &_13, &_15, &config, &_16);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(OAuth2_Server, createDefaultUserInfoController) {

	zend_bool _4$$3;
	zend_class_entry *_14 = NULL;
	zval _13;
	zval _0, _1, _2, _9, _10, config, _12, _15, _16, _17, _18, _19, _20, _3$$3, _5$$3, _6$$3, _7$$4, _8$$4, _11$$7;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_9);
	ZVAL_UNDEF(&_10);
	ZVAL_UNDEF(&config);
	ZVAL_UNDEF(&_12);
	ZVAL_UNDEF(&_15);
	ZVAL_UNDEF(&_16);
	ZVAL_UNDEF(&_17);
	ZVAL_UNDEF(&_18);
	ZVAL_UNDEF(&_19);
	ZVAL_UNDEF(&_20);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_5$$3);
	ZVAL_UNDEF(&_6$$3);
	ZVAL_UNDEF(&_7$$4);
	ZVAL_UNDEF(&_8$$4);
	ZVAL_UNDEF(&_11$$7);
	ZVAL_UNDEF(&_13);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_1, &_0, SL("use_jwt_access_tokens"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 408 TSRMLS_CC);
	zephir_read_property(&_2, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	if (zephir_is_true(&_1)) {
		zephir_read_property(&_3$$3, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
		_4$$3 = !(zephir_array_isset_string(&_3$$3, SL("access_token")));
		if (!(_4$$3)) {
			zephir_read_property(&_5$$3, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
			ZEPHIR_OBS_VAR(&_6$$3);
			zephir_array_fetch_string(&_6$$3, &_5$$3, SL("access_token"), PH_NOISY, "oauth2/server.zep", 410 TSRMLS_CC);
			_4$$3 = !(zephir_instance_of_ev(&_6$$3, oauth2_storage_jwtaccesstokeninterface_ce TSRMLS_CC));
		}
		if (_4$$3) {
			ZEPHIR_CALL_METHOD(&_7$$4, this_ptr, "createdefaultjwtaccesstokenstorage", NULL, 0);
			zephir_check_call_status();
			ZEPHIR_INIT_VAR(&_8$$4);
			ZVAL_STRING(&_8$$4, "access_token");
			zephir_update_property_array(this_ptr, SL("storages"), &_8$$4, &_7$$4 TSRMLS_CC);
		}
	} else if (!(zephir_array_isset_string(&_2, SL("access_token")))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(spl_ce_LogicException, "You must supply a storage object implementing OAuth2\\Storage\\AccessTokenInterface or use JwtAccessTokens to use the UserInfo server", "oauth2/server.zep", 414);
		return;
	}
	zephir_read_property(&_9, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	if (!(zephir_array_isset_string(&_9, SL("user_claims")))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(spl_ce_LogicException, "You must supply a storage object implementing OAuth2\\OpenID\\Storage\\UserClaimsInterface to use the UserInfo server", "oauth2/server.zep", 418);
		return;
	}
	zephir_read_property(&_10, this_ptr, SL("tokenType"), PH_NOISY_CC | PH_READONLY);
	if (!(zephir_is_true(&_10))) {
		ZEPHIR_CALL_METHOD(&_11$$7, this_ptr, "getdefaulttokentype", NULL, 0);
		zephir_check_call_status();
		zephir_update_property_zval(this_ptr, SL("tokenType"), &_11$$7);
	}
	zephir_read_property(&_12, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_VAR(&_13);
	zephir_create_array(&_13, 1, 0 TSRMLS_CC);
	add_assoc_stringl_ex(&_13, SL("www_realm"), SL(""));
	ZEPHIR_CALL_FUNCTION(&config, "array_intersect_key", NULL, 51, &_12, &_13);
	zephir_check_call_status();
	if (!_14) {
	_14 = zephir_fetch_class_str_ex(SL("OAuth2\\UserInfoController"), ZEND_FETCH_CLASS_AUTO);
	}
	object_init_ex(return_value, _14);
	if (zephir_has_constructor(return_value TSRMLS_CC)) {
		zephir_read_property(&_15, this_ptr, SL("tokenType"), PH_NOISY_CC | PH_READONLY);
		zephir_read_property(&_16, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_17, &_16, SL("access_token"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 428 TSRMLS_CC);
		zephir_read_property(&_18, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_19, &_18, SL("user_claims"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 428 TSRMLS_CC);
		ZEPHIR_CALL_METHOD(&_20, this_ptr, "getscopeutil", NULL, 0);
		zephir_check_call_status();
		ZEPHIR_CALL_METHOD(NULL, return_value, "__construct", NULL, 0, &_15, &_17, &_19, &config, &_20);
		zephir_check_call_status();
	}
	RETURN_MM();

}

PHP_METHOD(OAuth2_Server, getDefaultGrantTypes) {

	zend_class_entry *_25$$7 = NULL;
	zval _6$$4;
	zval grantTypes, config, _0, _4, _11, _19, _1$$3, _2$$3, _3$$3, _5$$4, _8$$4, _9$$4, _10$$4, _12$$5, _13$$5, _14$$5, _15$$5, _16$$5, _17$$5, _18$$5, _20$$6, _21$$6, _22$$7, _23$$7, _24$$7, _26$$7, _27$$7, _28$$9, _29$$9, _30$$9;
	zephir_fcall_cache_entry *_7 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&grantTypes);
	ZVAL_UNDEF(&config);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_11);
	ZVAL_UNDEF(&_19);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_5$$4);
	ZVAL_UNDEF(&_8$$4);
	ZVAL_UNDEF(&_9$$4);
	ZVAL_UNDEF(&_10$$4);
	ZVAL_UNDEF(&_12$$5);
	ZVAL_UNDEF(&_13$$5);
	ZVAL_UNDEF(&_14$$5);
	ZVAL_UNDEF(&_15$$5);
	ZVAL_UNDEF(&_16$$5);
	ZVAL_UNDEF(&_17$$5);
	ZVAL_UNDEF(&_18$$5);
	ZVAL_UNDEF(&_20$$6);
	ZVAL_UNDEF(&_21$$6);
	ZVAL_UNDEF(&_22$$7);
	ZVAL_UNDEF(&_23$$7);
	ZVAL_UNDEF(&_24$$7);
	ZVAL_UNDEF(&_26$$7);
	ZVAL_UNDEF(&_27$$7);
	ZVAL_UNDEF(&_28$$9);
	ZVAL_UNDEF(&_29$$9);
	ZVAL_UNDEF(&_30$$9);
	ZVAL_UNDEF(&_6$$4);

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(&grantTypes);
	array_init(&grantTypes);
	zephir_read_property(&_0, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset_string(&_0, SL("user_credentials"))) {
		ZEPHIR_INIT_VAR(&_1$$3);
		object_init_ex(&_1$$3, oauth2_granttype_usercredentials_ce);
		zephir_read_property(&_2$$3, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_3$$3, &_2$$3, SL("user_credentials"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 437 TSRMLS_CC);
		ZEPHIR_CALL_METHOD(NULL, &_1$$3, "__construct", NULL, 57, &_3$$3);
		zephir_check_call_status();
		zephir_array_update_string(&grantTypes, SL("password"), &_1$$3, PH_COPY | PH_SEPARATE);
	}
	zephir_read_property(&_4, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset_string(&_4, SL("client_credentials"))) {
		zephir_read_property(&_5$$4, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_INIT_VAR(&_6$$4);
		zephir_create_array(&_6$$4, 1, 0 TSRMLS_CC);
		add_assoc_stringl_ex(&_6$$4, SL("allow_credentials_in_request_body"), SL(""));
		ZEPHIR_CALL_FUNCTION(&config, "array_intersect_key", &_7, 51, &_5$$4, &_6$$4);
		zephir_check_call_status();
		ZEPHIR_INIT_VAR(&_8$$4);
		object_init_ex(&_8$$4, oauth2_granttype_clientcredentials_ce);
		zephir_read_property(&_9$$4, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_10$$4, &_9$$4, SL("client_credentials"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 442 TSRMLS_CC);
		ZEPHIR_CALL_METHOD(NULL, &_8$$4, "__construct", NULL, 58, &_10$$4, &config);
		zephir_check_call_status();
		zephir_array_update_string(&grantTypes, SL("client_credentials"), &_8$$4, PH_COPY | PH_SEPARATE);
	}
	zephir_read_property(&_11, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset_string(&_11, SL("refresh_token"))) {
		zephir_read_property(&_12$$5, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_INIT_VAR(&_13$$5);
		ZEPHIR_INIT_VAR(&_14$$5);
		ZVAL_STRING(&_14$$5, "always_issue_new_refresh_token unset_refresh_token_after_use");
		zephir_fast_explode_str(&_13$$5, SL(" "), &_14$$5, LONG_MAX TSRMLS_CC);
		ZEPHIR_CALL_FUNCTION(&_15$$5, "array_flip", NULL, 50, &_13$$5);
		zephir_check_call_status();
		ZEPHIR_CALL_FUNCTION(&config, "array_intersect_key", &_7, 51, &_12$$5, &_15$$5);
		zephir_check_call_status();
		ZEPHIR_INIT_VAR(&_16$$5);
		object_init_ex(&_16$$5, oauth2_granttype_refreshtoken_ce);
		zephir_read_property(&_17$$5, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_18$$5, &_17$$5, SL("refresh_token"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 447 TSRMLS_CC);
		ZEPHIR_CALL_METHOD(NULL, &_16$$5, "__construct", NULL, 59, &_18$$5, &config);
		zephir_check_call_status();
		zephir_array_update_string(&grantTypes, SL("refresh_token"), &_16$$5, PH_COPY | PH_SEPARATE);
	}
	zephir_read_property(&_19, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset_string(&_19, SL("authorization_code"))) {
		zephir_read_property(&_20$$6, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_21$$6, &_20$$6, SL("use_openid_connect"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 451 TSRMLS_CC);
		if (zephir_is_true(&_21$$6)) {
			zephir_read_property(&_22$$7, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
			ZEPHIR_OBS_VAR(&_23$$7);
			zephir_array_fetch_string(&_23$$7, &_22$$7, SL("authorization_code"), PH_NOISY, "oauth2/server.zep", 452 TSRMLS_CC);
			if (!(zephir_is_instance_of(&_23$$7, SL("OAuth2\\OpenIDAuthorizationCodeInterface") TSRMLS_CC))) {
				ZEPHIR_THROW_EXCEPTION_DEBUG_STR(spl_ce_LogicException, "Your authorization_code storage must implement OAuth2\\OpenID\\Storage\\AuthorizationCodeInterface to work when 'use_openid_connect' is true", "oauth2/server.zep", 453);
				return;
			}
			ZEPHIR_INIT_VAR(&_24$$7);
			if (!_25$$7) {
			_25$$7 = zephir_fetch_class_str_ex(SL("OAuth2\\OpenIDAuthorizationCodeGrantType"), ZEND_FETCH_CLASS_AUTO);
			}
			object_init_ex(&_24$$7, _25$$7);
			if (zephir_has_constructor(&_24$$7 TSRMLS_CC)) {
				zephir_read_property(&_26$$7, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
				zephir_array_fetch_string(&_27$$7, &_26$$7, SL("authorization_code"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 455 TSRMLS_CC);
				ZEPHIR_CALL_METHOD(NULL, &_24$$7, "__construct", NULL, 0, &_27$$7);
				zephir_check_call_status();
			}
			zephir_array_update_string(&grantTypes, SL("authorization_code"), &_24$$7, PH_COPY | PH_SEPARATE);
		} else {
			ZEPHIR_INIT_VAR(&_28$$9);
			object_init_ex(&_28$$9, oauth2_granttype_authorizationcode_ce);
			zephir_read_property(&_29$$9, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
			zephir_array_fetch_string(&_30$$9, &_29$$9, SL("authorization_code"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 457 TSRMLS_CC);
			ZEPHIR_CALL_METHOD(NULL, &_28$$9, "__construct", NULL, 60, &_30$$9);
			zephir_check_call_status();
			zephir_array_update_string(&grantTypes, SL("authorization_code"), &_28$$9, PH_COPY | PH_SEPARATE);
		}
	}
	if (zephir_fast_count_int(&grantTypes TSRMLS_CC) == 0) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(spl_ce_LogicException, "Unable to build default grant types - You must supply an array of grant_types in the constructor", "oauth2/server.zep", 462);
		return;
	}
	RETURN_CCTOR(&grantTypes);

}

PHP_METHOD(OAuth2_Server, getAccessTokenResponseType) {

	zval _0, _3, _4, _1$$3, _2$$3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_2$$3);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("responseTypes"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset_string(&_0, SL("token"))) {
		zephir_read_property(&_1$$3, this_ptr, SL("responseTypes"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_2$$3, &_1$$3, SL("token"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 471 TSRMLS_CC);
		RETURN_CTOR(&_2$$3);
	}
	zephir_read_property(&_3, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_4, &_3, SL("use_jwt_access_tokens"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 474 TSRMLS_CC);
	if (zephir_is_true(&_4)) {
		ZEPHIR_RETURN_CALL_METHOD(this_ptr, "createdefaultjwtaccesstokenresponsetype", NULL, 0);
		zephir_check_call_status();
		RETURN_MM();
	}
	ZEPHIR_RETURN_CALL_METHOD(this_ptr, "createdefaultaccesstokenresponsetype", NULL, 0);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(OAuth2_Server, getIdTokenResponseType) {

	zval _0, _1$$3, _2$$3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_2$$3);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("responseTypes"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset_string(&_0, SL("id_token"))) {
		zephir_read_property(&_1$$3, this_ptr, SL("responseTypes"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_2$$3, &_1$$3, SL("id_token"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 484 TSRMLS_CC);
		RETURN_CTOR(&_2$$3);
	}
	ZEPHIR_RETURN_CALL_METHOD(this_ptr, "createdefaultidtokenresponsetype", NULL, 0);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(OAuth2_Server, getIdTokenTokenResponseType) {

	zval _0, _1$$3, _2$$3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_2$$3);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("responseTypes"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset_string(&_0, SL("id_token token"))) {
		zephir_read_property(&_1$$3, this_ptr, SL("responseTypes"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_2$$3, &_1$$3, SL("id_token token"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 493 TSRMLS_CC);
		RETURN_CTOR(&_2$$3);
	}
	ZEPHIR_RETURN_CALL_METHOD(this_ptr, "createdefaultidtokentokenresponsetype", NULL, 0);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(OAuth2_Server, getScopeUtil) {

	zval _0, storage$$3, _1$$3, _2$$3, _3$$3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&storage$$3);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_3$$3);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("scopeUtil"), PH_NOISY_CC | PH_READONLY);
	if (!(zephir_is_true(&_0))) {
		zephir_read_property(&_1$$3, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
		if (zephir_array_isset_string(&_1$$3, SL("scope"))) {
			zephir_read_property(&_2$$3, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
			ZEPHIR_OBS_VAR(&storage$$3);
			zephir_array_fetch_string(&storage$$3, &_2$$3, SL("scope"), PH_NOISY, "oauth2/server.zep", 503 TSRMLS_CC);
		} else {
			ZEPHIR_INIT_NVAR(&storage$$3);
			ZVAL_NULL(&storage$$3);
		}
		ZEPHIR_INIT_VAR(&_3$$3);
		object_init_ex(&_3$$3, oauth2_scope_ce);
		ZEPHIR_CALL_METHOD(NULL, &_3$$3, "__construct", NULL, 11, &storage$$3);
		zephir_check_call_status();
		zephir_update_property_zval(this_ptr, SL("scopeUtil"), &_3$$3);
	}
	RETURN_MM_MEMBER(getThis(), "scopeUtil");

}

PHP_METHOD(OAuth2_Server, getDefaultTokenType) {

	zval config, _0, _1, _2, _3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&config);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_3);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_VAR(&_1);
	ZEPHIR_INIT_VAR(&_2);
	ZVAL_STRING(&_2, "token_param_name token_bearer_header_name");
	zephir_fast_explode_str(&_1, SL(" "), &_2, LONG_MAX TSRMLS_CC);
	ZEPHIR_CALL_FUNCTION(&_3, "array_flip", NULL, 50, &_1);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(&config, "array_intersect_key", NULL, 51, &_0, &_3);
	zephir_check_call_status();
	object_init_ex(return_value, oauth2_tokentype_bearer_ce);
	ZEPHIR_CALL_METHOD(NULL, return_value, "__construct", NULL, 61, &config);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(OAuth2_Server, createDefaultJwtAccessTokenStorage) {

	zend_bool _3;
	zval _0, tokenStorage, _1, _2, _4, _6, _7, _5$$4;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&tokenStorage);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_7);
	ZVAL_UNDEF(&_5$$4);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	if (!(zephir_array_isset_string(&_0, SL("public_key")))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(spl_ce_LogicException, "You must supply a storage object implementing OAuth2\\Storage\\PublicKeyInterface to use crypto tokens", "oauth2/server.zep", 520);
		return;
	}
	ZEPHIR_INIT_VAR(&tokenStorage);
	ZVAL_NULL(&tokenStorage);
	zephir_read_property(&_1, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_2, &_1, SL("store_encrypted_token_string"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 523 TSRMLS_CC);
	_3 = !(ZEPHIR_IS_EMPTY(&_2));
	if (_3) {
		zephir_read_property(&_4, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
		_3 = zephir_array_isset_string(&_4, SL("access_token"));
	}
	if (_3) {
		zephir_read_property(&_5$$4, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_OBS_NVAR(&tokenStorage);
		zephir_array_fetch_string(&tokenStorage, &_5$$4, SL("access_token"), PH_NOISY, "oauth2/server.zep", 524 TSRMLS_CC);
	}
	object_init_ex(return_value, oauth2_storage_jwtaccesstoken_ce);
	zephir_read_property(&_6, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_7, &_6, SL("public_key"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 527 TSRMLS_CC);
	ZEPHIR_CALL_METHOD(NULL, return_value, "__construct", NULL, 62, &_7, &tokenStorage);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(OAuth2_Server, createDefaultJwtAccessTokenResponseType) {

	zval _0, tokenStorage, _1, refreshStorage, _3, config, _5, _6, _7, _8, _9, _10, _2$$4, _4$$5;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&tokenStorage);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&refreshStorage);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&config);
	ZVAL_UNDEF(&_5);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_7);
	ZVAL_UNDEF(&_8);
	ZVAL_UNDEF(&_9);
	ZVAL_UNDEF(&_10);
	ZVAL_UNDEF(&_2$$4);
	ZVAL_UNDEF(&_4$$5);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	if (!(zephir_array_isset_string(&_0, SL("public_key")))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(spl_ce_LogicException, "You must supply a storage object implementing OAuth2\\Storage\\PublicKeyInterface to use crypto tokens", "oauth2/server.zep", 533);
		return;
	}
	ZEPHIR_INIT_VAR(&tokenStorage);
	ZVAL_NULL(&tokenStorage);
	zephir_read_property(&_1, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset_string(&_1, SL("access_token"))) {
		zephir_read_property(&_2$$4, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_OBS_NVAR(&tokenStorage);
		zephir_array_fetch_string(&tokenStorage, &_2$$4, SL("access_token"), PH_NOISY, "oauth2/server.zep", 538 TSRMLS_CC);
	}
	ZEPHIR_INIT_VAR(&refreshStorage);
	ZVAL_NULL(&refreshStorage);
	zephir_read_property(&_3, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset_string(&_3, SL("refresh_token"))) {
		zephir_read_property(&_4$$5, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_OBS_NVAR(&refreshStorage);
		zephir_array_fetch_string(&refreshStorage, &_4$$5, SL("refresh_token"), PH_NOISY, "oauth2/server.zep", 543 TSRMLS_CC);
	}
	zephir_read_property(&_5, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_VAR(&_6);
	ZEPHIR_INIT_VAR(&_7);
	ZVAL_STRING(&_7, "store_encrypted_token_string issuer access_lifetime refresh_token_lifetime");
	zephir_fast_explode_str(&_6, SL(" "), &_7, LONG_MAX TSRMLS_CC);
	ZEPHIR_CALL_FUNCTION(&_8, "array_flip", NULL, 50, &_6);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(&config, "array_intersect_key", NULL, 51, &_5, &_8);
	zephir_check_call_status();
	object_init_ex(return_value, oauth2_responsetype_jwtaccesstoken_ce);
	zephir_read_property(&_9, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_10, &_9, SL("public_key"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 549 TSRMLS_CC);
	ZEPHIR_CALL_METHOD(NULL, return_value, "__construct", NULL, 63, &_10, &tokenStorage, &refreshStorage, &config);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(OAuth2_Server, createDefaultAccessTokenResponseType) {

	zval _0, refreshStorage, _1, config, _3, _4, _5, _6, _7, _8, _9, _10, _11, _12, _2$$4;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&refreshStorage);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&config);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_5);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_7);
	ZVAL_UNDEF(&_8);
	ZVAL_UNDEF(&_9);
	ZVAL_UNDEF(&_10);
	ZVAL_UNDEF(&_11);
	ZVAL_UNDEF(&_12);
	ZVAL_UNDEF(&_2$$4);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	if (!(zephir_array_isset_string(&_0, SL("access_token")))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(spl_ce_LogicException, "You must supply a response type implementing OAuth2\\ResponseType\\AccessTokenInterface, or a storage object implementing OAuth2\\Storage\\AccessTokenInterface to use the token server", "oauth2/server.zep", 555);
		return;
	}
	ZEPHIR_INIT_VAR(&refreshStorage);
	ZVAL_NULL(&refreshStorage);
	zephir_read_property(&_1, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	if (zephir_array_isset_string(&_1, SL("refresh_token"))) {
		zephir_read_property(&_2$$4, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_OBS_NVAR(&refreshStorage);
		zephir_array_fetch_string(&refreshStorage, &_2$$4, SL("refresh_token"), PH_NOISY, "oauth2/server.zep", 560 TSRMLS_CC);
	}
	zephir_read_property(&_3, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_VAR(&_4);
	ZEPHIR_INIT_VAR(&_5);
	ZVAL_STRING(&_5, "access_lifetime refresh_token_lifetime");
	zephir_fast_explode_str(&_4, SL(" "), &_5, LONG_MAX TSRMLS_CC);
	ZEPHIR_CALL_FUNCTION(&_6, "array_flip", NULL, 50, &_4);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(&config, "array_intersect_key", NULL, 51, &_3, &_6);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&_7);
	zephir_read_property(&_8, this_ptr, SL("tokenType"), PH_NOISY_CC | PH_READONLY);
	if (zephir_is_true(&_8)) {
		zephir_read_property(&_9, this_ptr, SL("tokenType"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_METHOD(&_7, &_9, "gettokentype", NULL, 0);
		zephir_check_call_status();
	} else {
		ZEPHIR_CALL_METHOD(&_10, this_ptr, "getdefaulttokentype", NULL, 0);
		zephir_check_call_status();
		ZEPHIR_CALL_METHOD(&_7, &_10, "gettokentype", NULL, 0);
		zephir_check_call_status();
	}
	zephir_array_update_string(&config, SL("token_type"), &_7, PH_COPY | PH_SEPARATE);
	object_init_ex(return_value, oauth2_responsetype_accesstoken_ce);
	zephir_read_property(&_11, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_12, &_11, SL("access_token"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 567 TSRMLS_CC);
	ZEPHIR_CALL_METHOD(NULL, return_value, "__construct", NULL, 64, &_12, &refreshStorage, &config);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(OAuth2_Server, createDefaultIdTokenResponseType) {

	zend_class_entry *_6 = NULL;
	zval _0, _1, config, _2, _3, _4, _5, _7, _8, _9, _10;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&config);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_5);
	ZVAL_UNDEF(&_7);
	ZVAL_UNDEF(&_8);
	ZVAL_UNDEF(&_9);
	ZVAL_UNDEF(&_10);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	if (!(zephir_array_isset_string(&_0, SL("user_claims")))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(spl_ce_LogicException, "You must supply a storage object implementing OAuth2\\OpenID\\Storage\\UserClaimsInterface to use openid connect", "oauth2/server.zep", 573);
		return;
	}
	zephir_read_property(&_1, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
	if (!(zephir_array_isset_string(&_1, SL("public_key")))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(spl_ce_LogicException, "You must supply a storage object implementing OAuth2\\Storage\\PublicKeyInterface to use openid connect", "oauth2/server.zep", 576);
		return;
	}
	zephir_read_property(&_2, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_VAR(&_3);
	ZEPHIR_INIT_VAR(&_4);
	ZVAL_STRING(&_4, "issuer id_lifetime");
	zephir_fast_explode_str(&_3, SL(" "), &_4, LONG_MAX TSRMLS_CC);
	ZEPHIR_CALL_FUNCTION(&_5, "array_flip", NULL, 50, &_3);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(&config, "array_intersect_key", NULL, 51, &_2, &_5);
	zephir_check_call_status();
	if (!_6) {
	_6 = zephir_fetch_class_str_ex(SL("OAuth2\\IdToken"), ZEND_FETCH_CLASS_AUTO);
	}
	object_init_ex(return_value, _6);
	if (zephir_has_constructor(return_value TSRMLS_CC)) {
		zephir_read_property(&_7, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_8, &_7, SL("user_claims"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 582 TSRMLS_CC);
		zephir_read_property(&_9, this_ptr, SL("storages"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_10, &_9, SL("public_key"), PH_NOISY | PH_READONLY, "oauth2/server.zep", 582 TSRMLS_CC);
		ZEPHIR_CALL_METHOD(NULL, return_value, "__construct", NULL, 0, &_8, &_10, &config);
		zephir_check_call_status();
	}
	RETURN_MM();

}

PHP_METHOD(OAuth2_Server, createDefaultIdTokenTokenResponseType) {

	zval _1, _2;
	zend_class_entry *_0 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();

	if (!_0) {
	_0 = zephir_fetch_class_str_ex(SL("OAuth2\\IdTokenToken"), ZEND_FETCH_CLASS_AUTO);
	}
	object_init_ex(return_value, _0);
	if (zephir_has_constructor(return_value TSRMLS_CC)) {
		ZEPHIR_CALL_METHOD(&_1, this_ptr, "getaccesstokenresponsetype", NULL, 0);
		zephir_check_call_status();
		ZEPHIR_CALL_METHOD(&_2, this_ptr, "getidtokenresponsetype", NULL, 0);
		zephir_check_call_status();
		ZEPHIR_CALL_METHOD(NULL, return_value, "__construct", NULL, 0, &_1, &_2);
		zephir_check_call_status();
	}
	RETURN_MM();

}

zend_object *zephir_init_properties_OAuth2_Server(zend_class_entry *class_type TSRMLS_DC) {

		zval _0, _2, _1$$3, _3$$4;
		ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_3$$4);

		ZEPHIR_MM_GROW();
	
	{
		zval local_this_ptr, *this_ptr = &local_this_ptr;
		ZEPHIR_CREATE_OBJECT(this_ptr, class_type);
		zephir_read_property(&_0, this_ptr, SL("responseTypeMap"), PH_NOISY_CC | PH_READONLY);
		if (Z_TYPE_P(&_0) == IS_NULL) {
			ZEPHIR_INIT_VAR(&_1$$3);
			array_init(&_1$$3);
			zephir_update_property_zval(this_ptr, SL("responseTypeMap"), &_1$$3);
		}
		zephir_read_property(&_2, this_ptr, SL("storageMap"), PH_NOISY_CC | PH_READONLY);
		if (Z_TYPE_P(&_2) == IS_NULL) {
			ZEPHIR_INIT_VAR(&_3$$4);
			array_init(&_3$$4);
			zephir_update_property_zval(this_ptr, SL("storageMap"), &_3$$4);
		}
		ZEPHIR_MM_RESTORE();
		return Z_OBJ_P(this_ptr);
	}

}

