
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
#include "kernel/fcall.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/exception.h"
#include "kernel/operators.h"
#include "kernel/array.h"
#include "kernel/time.h"


/**
 * The JWT bearer authorization grant implements JWT (JSON Web Tokens) as a grant type per the IETF draft.
 *
 * @see http://tools.ietf.org/html/draft-ietf-oauth-jwt-bearer-04#section-4
 *
 * @author F21
 * @author Brent Shaffer <bshafs at gmail dot com>
 */
ZEPHIR_INIT_CLASS(OAuth2_GrantType_JwtBearer) {

	ZEPHIR_REGISTER_CLASS(OAuth2\\GrantType, JwtBearer, oauth2, granttype_jwtbearer, oauth2_granttype_jwtbearer_method_entry, 0);

	zend_declare_property_null(oauth2_granttype_jwtbearer_ce, SL("jwt"), ZEND_ACC_PRIVATE TSRMLS_CC);

	zend_declare_property_null(oauth2_granttype_jwtbearer_ce, SL("storage"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_granttype_jwtbearer_ce, SL("audience"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_granttype_jwtbearer_ce, SL("jwtUtil"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_class_implements(oauth2_granttype_jwtbearer_ce TSRMLS_CC, 1, oauth2_granttype_granttypeinterface_ce);
	zend_class_implements(oauth2_granttype_jwtbearer_ce TSRMLS_CC, 1, oauth2_clientassertiontype_clientassertiontypeinterface_ce);
	return SUCCESS;

}

/**
 * Creates an instance of the JWT bearer grant type.
 *
 * @param OAuth2\Storage\JWTBearerInterface storage A valid storage interface that implements storage hooks for the JWT bearer grant type.
 * @param string audience The audience to validate the token against. This is usually the full URI of the OAuth token requests endpoint.
 * @param OAuth2\Encryption\Jwt jwtUtil OPTONAL The class used to decode, encode and verify JWTs.
 */
PHP_METHOD(OAuth2_GrantType_JwtBearer, __construct) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval audience;
	zval *storage, storage_sub, *audience_param = NULL, *jwtUtil = NULL, jwtUtil_sub, __$null;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&storage_sub);
	ZVAL_UNDEF(&jwtUtil_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&audience);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 1, &storage, &audience_param, &jwtUtil);

	if (UNEXPECTED(Z_TYPE_P(audience_param) != IS_STRING && Z_TYPE_P(audience_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'audience' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (EXPECTED(Z_TYPE_P(audience_param) == IS_STRING)) {
		zephir_get_strval(&audience, audience_param);
	} else {
		ZEPHIR_INIT_VAR(&audience);
		ZVAL_EMPTY_STRING(&audience);
	}
	if (!jwtUtil) {
		jwtUtil = &jwtUtil_sub;
		ZEPHIR_CPY_WRT(jwtUtil, &__$null);
	} else {
		ZEPHIR_SEPARATE_PARAM(jwtUtil);
	}


	zephir_update_property_zval(this_ptr, SL("storage"), storage);
	zephir_update_property_zval(this_ptr, SL("audience"), &audience);
	if (Z_TYPE_P(jwtUtil) == IS_NULL) {
		ZEPHIR_INIT_NVAR(jwtUtil);
		object_init_ex(jwtUtil, oauth2_encryption_jwt_ce);
		if (zephir_has_constructor(jwtUtil TSRMLS_CC)) {
			ZEPHIR_CALL_METHOD(NULL, jwtUtil, "__construct", NULL, 0);
			zephir_check_call_status();
		}
	}
	zephir_update_property_zval(this_ptr, SL("jwtUtil"), jwtUtil);
	ZEPHIR_MM_RESTORE();

}

/**
 * Returns the grant_type get parameter to identify the grant type request as JWT bearer authorization grant.
 *
 * @return string The string identifier for grant_type.
 *
 * @see OAuth2\GrantType\GrantTypeInterface::getQuerystringIdentifier()
 */
PHP_METHOD(OAuth2_GrantType_JwtBearer, getQuerystringIdentifier) {

	zval *this_ptr = getThis();


	RETURN_STRING("urn:ietf:params:oauth:grant-type:jwt-bearer");

}

/**
 * Validates the data from the decoded JWT.
 *
 * @return boolean  TRUE if the JWT request is valid and can be decoded. Otherwise, FALSE is returned.
 *
 * @see OAuth2\GrantType\GrantTypeInterface::getTokenData()
 */
PHP_METHOD(OAuth2_GrantType_JwtBearer, validateRequest) {

	zend_bool _41, _52$$16;
	zval _12;
	zephir_fcall_cache_entry *_24 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *request, request_sub, *response, response_sub, __$null, undecodedJWT, jwt, notBefore, jti, key, _0, _1, _5, _6, _7, _8, _22, _23, _42, _64, _65, _69, _70, _71, _2$$3, _3$$3, _4$$3, _9$$4, _10$$4, _11$$4, _13$$5, _14$$5, _15$$5, _16$$6, _17$$6, _18$$6, _19$$7, _20$$7, _21$$7, _25$$8, _26$$8, _27$$9, _28$$9, _29$$9, _30$$10, _31$$10, _32$$10, _33$$11, _34$$12, _35$$13, _36$$13, _37$$13, _38$$14, _39$$14, _40$$14, _43$$15, _44$$15, _45$$15, _46$$16, _47$$16, _48$$16, _49$$16, _50$$16, _51$$16, _53$$16, _54$$16, _55$$17, _56$$17, _57$$17, _58$$18, _59$$18, _60$$18, _61$$18, _62$$18, _63$$18, _66$$19, _67$$19, _68$$19, _72$$20, _73$$20, _74$$20;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&request_sub);
	ZVAL_UNDEF(&response_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&undecodedJWT);
	ZVAL_UNDEF(&jwt);
	ZVAL_UNDEF(&notBefore);
	ZVAL_UNDEF(&jti);
	ZVAL_UNDEF(&key);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_5);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_7);
	ZVAL_UNDEF(&_8);
	ZVAL_UNDEF(&_22);
	ZVAL_UNDEF(&_23);
	ZVAL_UNDEF(&_42);
	ZVAL_UNDEF(&_64);
	ZVAL_UNDEF(&_65);
	ZVAL_UNDEF(&_69);
	ZVAL_UNDEF(&_70);
	ZVAL_UNDEF(&_71);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_4$$3);
	ZVAL_UNDEF(&_9$$4);
	ZVAL_UNDEF(&_10$$4);
	ZVAL_UNDEF(&_11$$4);
	ZVAL_UNDEF(&_13$$5);
	ZVAL_UNDEF(&_14$$5);
	ZVAL_UNDEF(&_15$$5);
	ZVAL_UNDEF(&_16$$6);
	ZVAL_UNDEF(&_17$$6);
	ZVAL_UNDEF(&_18$$6);
	ZVAL_UNDEF(&_19$$7);
	ZVAL_UNDEF(&_20$$7);
	ZVAL_UNDEF(&_21$$7);
	ZVAL_UNDEF(&_25$$8);
	ZVAL_UNDEF(&_26$$8);
	ZVAL_UNDEF(&_27$$9);
	ZVAL_UNDEF(&_28$$9);
	ZVAL_UNDEF(&_29$$9);
	ZVAL_UNDEF(&_30$$10);
	ZVAL_UNDEF(&_31$$10);
	ZVAL_UNDEF(&_32$$10);
	ZVAL_UNDEF(&_33$$11);
	ZVAL_UNDEF(&_34$$12);
	ZVAL_UNDEF(&_35$$13);
	ZVAL_UNDEF(&_36$$13);
	ZVAL_UNDEF(&_37$$13);
	ZVAL_UNDEF(&_38$$14);
	ZVAL_UNDEF(&_39$$14);
	ZVAL_UNDEF(&_40$$14);
	ZVAL_UNDEF(&_43$$15);
	ZVAL_UNDEF(&_44$$15);
	ZVAL_UNDEF(&_45$$15);
	ZVAL_UNDEF(&_46$$16);
	ZVAL_UNDEF(&_47$$16);
	ZVAL_UNDEF(&_48$$16);
	ZVAL_UNDEF(&_49$$16);
	ZVAL_UNDEF(&_50$$16);
	ZVAL_UNDEF(&_51$$16);
	ZVAL_UNDEF(&_53$$16);
	ZVAL_UNDEF(&_54$$16);
	ZVAL_UNDEF(&_55$$17);
	ZVAL_UNDEF(&_56$$17);
	ZVAL_UNDEF(&_57$$17);
	ZVAL_UNDEF(&_58$$18);
	ZVAL_UNDEF(&_59$$18);
	ZVAL_UNDEF(&_60$$18);
	ZVAL_UNDEF(&_61$$18);
	ZVAL_UNDEF(&_62$$18);
	ZVAL_UNDEF(&_63$$18);
	ZVAL_UNDEF(&_66$$19);
	ZVAL_UNDEF(&_67$$19);
	ZVAL_UNDEF(&_68$$19);
	ZVAL_UNDEF(&_72$$20);
	ZVAL_UNDEF(&_73$$20);
	ZVAL_UNDEF(&_74$$20);
	ZVAL_UNDEF(&_12);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &request, &response);



	ZEPHIR_INIT_VAR(&_1);
	ZVAL_STRING(&_1, "assertion");
	ZEPHIR_CALL_METHOD(&_0, request, "request", NULL, 0, &_1);
	zephir_check_call_status();
	if (!(zephir_is_true(&_0))) {
		ZVAL_LONG(&_2$$3, 400);
		ZEPHIR_INIT_VAR(&_3$$3);
		ZVAL_STRING(&_3$$3, "invalid_request");
		ZEPHIR_INIT_VAR(&_4$$3);
		ZVAL_STRING(&_4$$3, "Missing parameters: \"assertion\" required");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_2$$3, &_3$$3, &_4$$3);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	ZEPHIR_INIT_NVAR(&_1);
	ZVAL_STRING(&_1, "assertion");
	ZEPHIR_CALL_METHOD(&undecodedJWT, request, "request", NULL, 0, &_1);
	zephir_check_call_status();
	zephir_read_property(&_5, this_ptr, SL("jwtUtil"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_NVAR(&_1);
	ZVAL_STRING(&_1, "assertion");
	ZEPHIR_CALL_METHOD(&_6, request, "request", NULL, 0, &_1);
	zephir_check_call_status();
	ZVAL_NULL(&_7);
	ZVAL_BOOL(&_8, 0);
	ZEPHIR_CALL_METHOD(&jwt, &_5, "decode", NULL, 0, &_6, &_7, &_8);
	zephir_check_call_status();
	if (!(zephir_is_true(&jwt))) {
		ZVAL_LONG(&_9$$4, 400);
		ZEPHIR_INIT_VAR(&_10$$4);
		ZVAL_STRING(&_10$$4, "invalid_request");
		ZEPHIR_INIT_VAR(&_11$$4);
		ZVAL_STRING(&_11$$4, "JWT is malformed");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_9$$4, &_10$$4, &_11$$4);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	ZEPHIR_INIT_NVAR(&_1);
	ZEPHIR_INIT_VAR(&_12);
	zephir_create_array(&_12, 9, 0 TSRMLS_CC);
	zephir_array_update_string(&_12, SL("scope"), &__$null, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&_12, SL("iss"), &__$null, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&_12, SL("sub"), &__$null, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&_12, SL("aud"), &__$null, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&_12, SL("exp"), &__$null, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&_12, SL("nbf"), &__$null, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&_12, SL("iat"), &__$null, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&_12, SL("jti"), &__$null, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&_12, SL("typ"), &__$null, PH_COPY | PH_SEPARATE);
	zephir_fast_array_merge(&_1, &_12, &jwt TSRMLS_CC);
	ZEPHIR_CPY_WRT(&jwt, &_1);
	if (!(zephir_array_isset_string(&jwt, SL("iss")))) {
		ZVAL_LONG(&_13$$5, 400);
		ZEPHIR_INIT_VAR(&_14$$5);
		ZVAL_STRING(&_14$$5, "invalid_grant");
		ZEPHIR_INIT_VAR(&_15$$5);
		ZVAL_STRING(&_15$$5, "Invalid issuer (iss) provided");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_13$$5, &_14$$5, &_15$$5);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	if (!(zephir_array_isset_string(&jwt, SL("sub")))) {
		ZVAL_LONG(&_16$$6, 400);
		ZEPHIR_INIT_VAR(&_17$$6);
		ZVAL_STRING(&_17$$6, "invalid_grant");
		ZEPHIR_INIT_VAR(&_18$$6);
		ZVAL_STRING(&_18$$6, "Invalid subject (sub) provided");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_16$$6, &_17$$6, &_18$$6);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	if (!(zephir_array_isset_string(&jwt, SL("exp")))) {
		ZVAL_LONG(&_19$$7, 400);
		ZEPHIR_INIT_VAR(&_20$$7);
		ZVAL_STRING(&_20$$7, "invalid_grant");
		ZEPHIR_INIT_VAR(&_21$$7);
		ZVAL_STRING(&_21$$7, "Expiration (exp) time must be present");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_19$$7, &_20$$7, &_21$$7);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	zephir_array_fetch_string(&_22, &jwt, SL("exp"), PH_NOISY | PH_READONLY, "oauth2/granttype/jwtbearer.zep", 115 TSRMLS_CC);
	ZEPHIR_CALL_FUNCTION(&_23, "ctype_digit", &_24, 31, &_22);
	zephir_check_call_status();
	if (zephir_is_true(&_23)) {
		zephir_array_fetch_string(&_25$$8, &jwt, SL("exp"), PH_NOISY | PH_READONLY, "oauth2/granttype/jwtbearer.zep", 116 TSRMLS_CC);
		ZEPHIR_INIT_VAR(&_26$$8);
		zephir_time(&_26$$8);
		if (ZEPHIR_LE(&_25$$8, &_26$$8)) {
			ZVAL_LONG(&_27$$9, 400);
			ZEPHIR_INIT_VAR(&_28$$9);
			ZVAL_STRING(&_28$$9, "invalid_grant");
			ZEPHIR_INIT_VAR(&_29$$9);
			ZVAL_STRING(&_29$$9, "JWT has expired");
			ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_27$$9, &_28$$9, &_29$$9);
			zephir_check_call_status();
			RETURN_MM_BOOL(0);
		}
	} else {
		ZVAL_LONG(&_30$$10, 400);
		ZEPHIR_INIT_VAR(&_31$$10);
		ZVAL_STRING(&_31$$10, "invalid_grant");
		ZEPHIR_INIT_VAR(&_32$$10);
		ZVAL_STRING(&_32$$10, "Expiration (exp) time must be a unix time stamp");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_30$$10, &_31$$10, &_32$$10);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	ZEPHIR_OBS_VAR(&notBefore);
	zephir_array_fetch_string(&notBefore, &jwt, SL("nbf"), PH_NOISY, "oauth2/granttype/jwtbearer.zep", 126 TSRMLS_CC);
	if (zephir_is_true(&notBefore)) {
		ZEPHIR_CALL_FUNCTION(&_33$$11, "ctype_digit", &_24, 31, &notBefore);
		zephir_check_call_status();
		if (zephir_is_true(&_33$$11)) {
			ZEPHIR_INIT_VAR(&_34$$12);
			zephir_time(&_34$$12);
			if (ZEPHIR_GT(&notBefore, &_34$$12)) {
				ZVAL_LONG(&_35$$13, 400);
				ZEPHIR_INIT_VAR(&_36$$13);
				ZVAL_STRING(&_36$$13, "invalid_grant");
				ZEPHIR_INIT_VAR(&_37$$13);
				ZVAL_STRING(&_37$$13, "JWT cannot be used before the Not Before (nbf) time");
				ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_35$$13, &_36$$13, &_37$$13);
				zephir_check_call_status();
				RETURN_MM_BOOL(0);
			}
		} else {
			ZVAL_LONG(&_38$$14, 400);
			ZEPHIR_INIT_VAR(&_39$$14);
			ZVAL_STRING(&_39$$14, "invalid_grant");
			ZEPHIR_INIT_VAR(&_40$$14);
			ZVAL_STRING(&_40$$14, "Not Before (nbf) time must be a unix time stamp");
			ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_38$$14, &_39$$14, &_40$$14);
			zephir_check_call_status();
			RETURN_MM_BOOL(0);
		}
	}
	_41 = !(zephir_array_isset_string(&jwt, SL("aud")));
	if (!(_41)) {
		zephir_array_fetch_string(&_42, &jwt, SL("aud"), PH_NOISY | PH_READONLY, "oauth2/granttype/jwtbearer.zep", 140 TSRMLS_CC);
		zephir_read_property(&_7, this_ptr, SL("audience"), PH_NOISY_CC | PH_READONLY);
		_41 = !ZEPHIR_IS_EQUAL(&_42, &_7);
	}
	if (_41) {
		ZVAL_LONG(&_43$$15, 400);
		ZEPHIR_INIT_VAR(&_44$$15);
		ZVAL_STRING(&_44$$15, "invalid_grant");
		ZEPHIR_INIT_VAR(&_45$$15);
		ZVAL_STRING(&_45$$15, "Invalid audience (aud)");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_43$$15, &_44$$15, &_45$$15);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	if (zephir_array_isset_string(&jwt, SL("jti"))) {
		zephir_read_property(&_46$$16, this_ptr, SL("storage"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_47$$16, &jwt, SL("iss"), PH_NOISY | PH_READONLY, "oauth2/granttype/jwtbearer.zep", 148 TSRMLS_CC);
		zephir_array_fetch_string(&_48$$16, &jwt, SL("sub"), PH_NOISY | PH_READONLY, "oauth2/granttype/jwtbearer.zep", 148 TSRMLS_CC);
		zephir_array_fetch_string(&_49$$16, &jwt, SL("aud"), PH_NOISY | PH_READONLY, "oauth2/granttype/jwtbearer.zep", 148 TSRMLS_CC);
		zephir_array_fetch_string(&_50$$16, &jwt, SL("exp"), PH_NOISY | PH_READONLY, "oauth2/granttype/jwtbearer.zep", 148 TSRMLS_CC);
		zephir_array_fetch_string(&_51$$16, &jwt, SL("jti"), PH_NOISY | PH_READONLY, "oauth2/granttype/jwtbearer.zep", 148 TSRMLS_CC);
		ZEPHIR_CALL_METHOD(&jti, &_46$$16, "getjti", NULL, 0, &_47$$16, &_48$$16, &_49$$16, &_50$$16, &_51$$16);
		zephir_check_call_status();
		_52$$16 = zephir_is_true(&jti);
		if (_52$$16) {
			zephir_array_fetch_string(&_53$$16, &jti, SL("expires"), PH_NOISY | PH_READONLY, "oauth2/granttype/jwtbearer.zep", 151 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_54$$16);
			zephir_time(&_54$$16);
			_52$$16 = ZEPHIR_GT(&_53$$16, &_54$$16);
		}
		if (_52$$16) {
			ZVAL_LONG(&_55$$17, 400);
			ZEPHIR_INIT_VAR(&_56$$17);
			ZVAL_STRING(&_56$$17, "invalid_grant");
			ZEPHIR_INIT_VAR(&_57$$17);
			ZVAL_STRING(&_57$$17, "JSON Token Identifier (jti) has already been used");
			ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_55$$17, &_56$$17, &_57$$17);
			zephir_check_call_status();
			RETURN_MM_BOOL(0);
		} else {
			zephir_read_property(&_58$$18, this_ptr, SL("storage"), PH_NOISY_CC | PH_READONLY);
			zephir_array_fetch_string(&_59$$18, &jwt, SL("iss"), PH_NOISY | PH_READONLY, "oauth2/granttype/jwtbearer.zep", 155 TSRMLS_CC);
			zephir_array_fetch_string(&_60$$18, &jwt, SL("sub"), PH_NOISY | PH_READONLY, "oauth2/granttype/jwtbearer.zep", 155 TSRMLS_CC);
			zephir_array_fetch_string(&_61$$18, &jwt, SL("aud"), PH_NOISY | PH_READONLY, "oauth2/granttype/jwtbearer.zep", 155 TSRMLS_CC);
			zephir_array_fetch_string(&_62$$18, &jwt, SL("exp"), PH_NOISY | PH_READONLY, "oauth2/granttype/jwtbearer.zep", 155 TSRMLS_CC);
			zephir_array_fetch_string(&_63$$18, &jwt, SL("jti"), PH_NOISY | PH_READONLY, "oauth2/granttype/jwtbearer.zep", 155 TSRMLS_CC);
			ZEPHIR_CALL_METHOD(NULL, &_58$$18, "setjti", NULL, 0, &_59$$18, &_60$$18, &_61$$18, &_62$$18, &_63$$18);
			zephir_check_call_status();
		}
	}
	zephir_read_property(&_8, this_ptr, SL("storage"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_64, &jwt, SL("iss"), PH_NOISY | PH_READONLY, "oauth2/granttype/jwtbearer.zep", 161 TSRMLS_CC);
	zephir_array_fetch_string(&_65, &jwt, SL("sub"), PH_NOISY | PH_READONLY, "oauth2/granttype/jwtbearer.zep", 161 TSRMLS_CC);
	ZEPHIR_CALL_METHOD(&key, &_8, "getclientkey", NULL, 0, &_64, &_65);
	zephir_check_call_status();
	if (!(zephir_is_true(&key))) {
		ZVAL_LONG(&_66$$19, 400);
		ZEPHIR_INIT_VAR(&_67$$19);
		ZVAL_STRING(&_67$$19, "invalid_grant");
		ZEPHIR_INIT_VAR(&_68$$19);
		ZVAL_STRING(&_68$$19, "Invalid issuer (iss) or subject (sub) provided");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_66$$19, &_67$$19, &_68$$19);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	zephir_read_property(&_69, this_ptr, SL("jwtUtil"), PH_NOISY_CC | PH_READONLY);
	ZVAL_BOOL(&_71, 1);
	ZEPHIR_CALL_METHOD(&_70, &_69, "decode", NULL, 0, &undecodedJWT, &key, &_71);
	zephir_check_call_status();
	if (!(zephir_is_true(&_70))) {
		ZVAL_LONG(&_72$$20, 400);
		ZEPHIR_INIT_VAR(&_73$$20);
		ZVAL_STRING(&_73$$20, "invalid_grant");
		ZEPHIR_INIT_VAR(&_74$$20);
		ZVAL_STRING(&_74$$20, "JWT failed signature verification");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_72$$20, &_73$$20, &_74$$20);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	zephir_update_property_zval(this_ptr, SL("jwt"), &jwt);
	RETURN_MM_BOOL(1);

}

PHP_METHOD(OAuth2_GrantType_JwtBearer, getClientId) {

	zval _0, _1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);


	zephir_read_property(&_0, this_ptr, SL("jwt"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_1, &_0, SL("iss"), PH_NOISY | PH_READONLY, "oauth2/granttype/jwtbearer.zep", 180 TSRMLS_CC);
	RETURN_CTORW(&_1);

}

PHP_METHOD(OAuth2_GrantType_JwtBearer, getUserId) {

	zval _0, _1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);


	zephir_read_property(&_0, this_ptr, SL("jwt"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_1, &_0, SL("sub"), PH_NOISY | PH_READONLY, "oauth2/granttype/jwtbearer.zep", 185 TSRMLS_CC);
	RETURN_CTORW(&_1);

}

PHP_METHOD(OAuth2_GrantType_JwtBearer, getScope) {

	zval *this_ptr = getThis();


	RETURN_NULL();

}

/**
 * Creates an access token that is NOT associated with a refresh token.
 * If a subject (sub) the name of the user/account we are accessing data on behalf of.
 *
 * @see OAuth2\GrantType\GrantTypeInterface::createAccessToken()
 */
PHP_METHOD(OAuth2_GrantType_JwtBearer, createAccessToken) {

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


	ZVAL_BOOL(&_0, 0);
	ZEPHIR_RETURN_CALL_METHOD(accessToken, "createaccesstoken", NULL, 0, &client_id, &user_id, &scope, &_0);
	zephir_check_call_status();
	RETURN_MM();

}

