
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
#include "kernel/fcall.h"
#include "kernel/operators.h"
#include "kernel/string.h"
#include "kernel/concat.h"


/**
 * @see AuthorizeControllerInterface
 */
ZEPHIR_INIT_CLASS(OAuth2_Controller_AuthorizeController) {

	ZEPHIR_REGISTER_CLASS(OAuth2\\Controller, AuthorizeController, oauth2, controller_authorizecontroller, oauth2_controller_authorizecontroller_method_entry, 0);

	zend_declare_property_null(oauth2_controller_authorizecontroller_ce, SL("scope"), ZEND_ACC_PRIVATE TSRMLS_CC);

	zend_declare_property_null(oauth2_controller_authorizecontroller_ce, SL("state"), ZEND_ACC_PRIVATE TSRMLS_CC);

	zend_declare_property_null(oauth2_controller_authorizecontroller_ce, SL("client_id"), ZEND_ACC_PRIVATE TSRMLS_CC);

	zend_declare_property_null(oauth2_controller_authorizecontroller_ce, SL("redirect_uri"), ZEND_ACC_PRIVATE TSRMLS_CC);

	zend_declare_property_null(oauth2_controller_authorizecontroller_ce, SL("response_type"), ZEND_ACC_PRIVATE TSRMLS_CC);

	zend_declare_property_null(oauth2_controller_authorizecontroller_ce, SL("clientStorage"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_controller_authorizecontroller_ce, SL("responseTypes"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_controller_authorizecontroller_ce, SL("config"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(oauth2_controller_authorizecontroller_ce, SL("scopeUtil"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_class_implements(oauth2_controller_authorizecontroller_ce TSRMLS_CC, 1, oauth2_controller_authorizecontrollerinterface_ce);
	return SUCCESS;

}

/**
 * Constructor
 *
 * @param ClientInterface $clientStorage REQUIRED Instance of OAuth2\Storage\ClientInterface to retrieve client information
 * @param array           $responseTypes OPTIONAL Array of OAuth2\ResponseType\ResponseTypeInterface objects.  Valid array
 *                                       keys are "code" and "token"
 * @param array           $config        OPTIONAL Configuration options for the server:
 * @param ScopeInterface  $scopeUtil     OPTIONAL Instance of OAuth2\ScopeInterface to validate the requested scope
 * @code
 *     $config = array(
 *         "allow_implicit" => false,            // if the controller should allow the "implicit" grant type
 *         "enforce_state"  => true              // if the controller should require the "state" parameter
 *         "require_exact_redirect_uri" => true, // if the controller should require an exact match on the "redirect_uri" parameter
 *         "redirect_status_code" => 302,        // HTTP status code to use for redirect responses
 *     );
 * @endcode
 */
PHP_METHOD(OAuth2_Controller_AuthorizeController, __construct) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval responseTypes, config, _1;
	zval *clientStorage, clientStorage_sub, *responseTypes_param = NULL, *config_param = NULL, *scopeUtil = NULL, scopeUtil_sub, __$false, __$true, __$null, _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&clientStorage_sub);
	ZVAL_UNDEF(&scopeUtil_sub);
	ZVAL_BOOL(&__$false, 0);
	ZVAL_BOOL(&__$true, 1);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&responseTypes);
	ZVAL_UNDEF(&config);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 3, &clientStorage, &responseTypes_param, &config_param, &scopeUtil);

	if (!responseTypes_param) {
		ZEPHIR_INIT_VAR(&responseTypes);
		array_init(&responseTypes);
	} else {
		zephir_get_arrval(&responseTypes, responseTypes_param);
	}
	if (!config_param) {
		ZEPHIR_INIT_VAR(&config);
		array_init(&config);
	} else {
		zephir_get_arrval(&config, config_param);
	}
	if (!scopeUtil) {
		scopeUtil = &scopeUtil_sub;
		ZEPHIR_CPY_WRT(scopeUtil, &__$null);
	} else {
		ZEPHIR_SEPARATE_PARAM(scopeUtil);
	}


	zephir_update_property_zval(this_ptr, SL("clientStorage"), clientStorage);
	zephir_update_property_zval(this_ptr, SL("responseTypes"), &responseTypes);
	ZEPHIR_INIT_VAR(&_0);
	ZEPHIR_INIT_VAR(&_1);
	zephir_create_array(&_1, 4, 0 TSRMLS_CC);
	zephir_array_update_string(&_1, SL("allow_implicit"), &__$false, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&_1, SL("enforce_state"), &__$true, PH_COPY | PH_SEPARATE);
	zephir_array_update_string(&_1, SL("require_exact_redirect_uri"), &__$true, PH_COPY | PH_SEPARATE);
	add_assoc_long_ex(&_1, SL("redirect_status_code"), 302);
	zephir_fast_array_merge(&_0, &_1, &config TSRMLS_CC);
	zephir_update_property_zval(this_ptr, SL("config"), &_0);
	if (Z_TYPE_P(scopeUtil) == IS_NULL) {
		ZEPHIR_INIT_NVAR(scopeUtil);
		object_init_ex(scopeUtil, oauth2_scope_ce);
		ZEPHIR_CALL_METHOD(NULL, scopeUtil, "__construct", NULL, 11);
		zephir_check_call_status();
	}
	zephir_update_property_zval(this_ptr, SL("scopeUtil"), scopeUtil);
	ZEPHIR_MM_RESTORE();

}

/**
 * Handle the authorization request
 *
 * @param RequestInterface  $request
 * @param ResponseInterface $response
 * @param boolean           $is_authorized
 * @param mixed             $user_id
 * @return mixed|void
 * @throws InvalidArgumentException
 */
PHP_METHOD(OAuth2_Controller_AuthorizeController, handleAuthorizeRequest) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zend_bool is_authorized, _9;
	zval *request, request_sub, *response, response_sub, *is_authorized_param = NULL, *user_id = NULL, user_id_sub, __$null, _0, clientData, registered_redirect_uri, redirect_uri, params, authResult, uri, uri_params, _1, _6, _7, _8, _10, _11, _2$$4, _3$$4, _4$$5, _5$$5;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&request_sub);
	ZVAL_UNDEF(&response_sub);
	ZVAL_UNDEF(&user_id_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&clientData);
	ZVAL_UNDEF(&registered_redirect_uri);
	ZVAL_UNDEF(&redirect_uri);
	ZVAL_UNDEF(&params);
	ZVAL_UNDEF(&authResult);
	ZVAL_UNDEF(&uri);
	ZVAL_UNDEF(&uri_params);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_7);
	ZVAL_UNDEF(&_8);
	ZVAL_UNDEF(&_10);
	ZVAL_UNDEF(&_11);
	ZVAL_UNDEF(&_2$$4);
	ZVAL_UNDEF(&_3$$4);
	ZVAL_UNDEF(&_4$$5);
	ZVAL_UNDEF(&_5$$5);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 3, 1, &request, &response, &is_authorized_param, &user_id);

	is_authorized = zephir_get_boolval(is_authorized_param);
	if (!user_id) {
		user_id = &user_id_sub;
		user_id = &__$null;
	}


	ZEPHIR_CALL_METHOD(&_0, this_ptr, "validateauthorizerequest", NULL, 0, request, response);
	zephir_check_call_status();
	if (!(zephir_is_true(&_0))) {
		RETURN_MM_NULL();
	}
	zephir_read_property(&_1, this_ptr, SL("redirect_uri"), PH_NOISY_CC | PH_READONLY);
	if (ZEPHIR_IS_EMPTY(&_1)) {
		zephir_read_property(&_2$$4, this_ptr, SL("clientStorage"), PH_NOISY_CC | PH_READONLY);
		zephir_read_property(&_3$$4, this_ptr, SL("client_id"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_METHOD(&clientData, &_2$$4, "getclientdetails", NULL, 0, &_3$$4);
		zephir_check_call_status();
		ZEPHIR_OBS_VAR(&registered_redirect_uri);
		zephir_array_fetch_string(&registered_redirect_uri, &clientData, SL("redirect_uri"), PH_NOISY, "oauth2/controller/authorizecontroller.zep", 80 TSRMLS_CC);
	}
	if (is_authorized == 0) {
		ZEPHIR_INIT_VAR(&_4$$5);
		zephir_read_property(&_5$$5, this_ptr, SL("redirect_uri"), PH_NOISY_CC | PH_READONLY);
		if (zephir_is_true(&_5$$5)) {
			ZEPHIR_OBS_NVAR(&_4$$5);
			zephir_read_property(&_4$$5, this_ptr, SL("redirect_uri"), PH_NOISY_CC);
		} else {
			ZEPHIR_CPY_WRT(&_4$$5, &registered_redirect_uri);
		}
		ZEPHIR_CPY_WRT(&redirect_uri, &_4$$5);
		ZEPHIR_CALL_METHOD(NULL, this_ptr, "setnotauthorizedresponse", NULL, 0, request, response, &redirect_uri, user_id);
		zephir_check_call_status();
		RETURN_MM_NULL();
	}
	ZEPHIR_CALL_METHOD(&params, this_ptr, "buildauthorizeparameters", NULL, 0, request, response, user_id);
	zephir_check_call_status();
	if (!(zephir_is_true(&params))) {
		RETURN_MM_NULL();
	}
	zephir_read_property(&_6, this_ptr, SL("responseTypes"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_OBS_VAR(&_8);
	zephir_read_property(&_8, this_ptr, SL("response_type"), PH_NOISY_CC);
	zephir_array_fetch(&_7, &_6, &_8, PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 97 TSRMLS_CC);
	ZEPHIR_CALL_METHOD(&authResult, &_7, "getauthorizeresponse", NULL, 0, &params, user_id);
	zephir_check_call_status();
	ZEPHIR_OBS_NVAR(&redirect_uri);
	zephir_array_fetch_long(&redirect_uri, &authResult, 0, PH_NOISY, "oauth2/controller/authorizecontroller.zep", 98 TSRMLS_CC);
	ZEPHIR_OBS_VAR(&uri_params);
	zephir_array_fetch_long(&uri_params, &authResult, 1, PH_NOISY, "oauth2/controller/authorizecontroller.zep", 99 TSRMLS_CC);
	_9 = ZEPHIR_IS_EMPTY(&redirect_uri);
	if (_9) {
		_9 = !(ZEPHIR_IS_EMPTY(&registered_redirect_uri));
	}
	if (_9) {
		ZEPHIR_CPY_WRT(&redirect_uri, &registered_redirect_uri);
	}
	ZEPHIR_CALL_METHOD(&uri, this_ptr, "builduri", NULL, 12, &redirect_uri, &uri_params);
	zephir_check_call_status();
	zephir_read_property(&_10, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_11, &_10, SL("redirect_status_code"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 109 TSRMLS_CC);
	ZEPHIR_CALL_METHOD(NULL, response, "setredirect", NULL, 0, &_11, &uri);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

/**
 * Set not authorized response
 *
 * @param RequestInterface  $request
 * @param ResponseInterface $response
 * @param string            $redirect_uri
 * @param mixed             $user_id
 */
PHP_METHOD(OAuth2_Controller_AuthorizeController, setNotAuthorizedResponse) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *request, request_sub, *response, response_sub, *redirect_uri, redirect_uri_sub, *user_id = NULL, user_id_sub, __$null, error, error_message, _0, _1, _2;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&request_sub);
	ZVAL_UNDEF(&response_sub);
	ZVAL_UNDEF(&redirect_uri_sub);
	ZVAL_UNDEF(&user_id_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&error);
	ZVAL_UNDEF(&error_message);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 3, 1, &request, &response, &redirect_uri, &user_id);

	if (!user_id) {
		user_id = &user_id_sub;
		user_id = &__$null;
	}


	ZEPHIR_INIT_VAR(&error);
	ZVAL_STRING(&error, "access_denied");
	ZEPHIR_INIT_VAR(&error_message);
	ZVAL_STRING(&error_message, "The user denied access to your application");
	zephir_read_property(&_0, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_1, &_0, SL("redirect_status_code"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 123 TSRMLS_CC);
	zephir_read_property(&_2, this_ptr, SL("state"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(NULL, response, "setredirect", NULL, 0, &_1, redirect_uri, &_2, &error, &error_message);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

/**
 * We have made this protected so this class can be extended to add/modify
 * these parameters
 *
 * @TODO: add dependency injection for the parameters in this method
 *
 * @param RequestInterface $request
 * @param ResponseInterface $response
 * @param mixed $user_id
 * @return array
 */
PHP_METHOD(OAuth2_Controller_AuthorizeController, buildAuthorizeParameters) {

	zval *request, request_sub, *response, response_sub, *user_id, user_id_sub, _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&request_sub);
	ZVAL_UNDEF(&response_sub);
	ZVAL_UNDEF(&user_id_sub);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 3, 0, &request, &response, &user_id);



	zephir_create_array(return_value, 5, 0 TSRMLS_CC);
	ZEPHIR_OBS_VAR(&_0);
	zephir_read_property(&_0, this_ptr, SL("scope"), PH_NOISY_CC);
	zephir_array_update_string(return_value, SL("scope"), &_0, PH_COPY | PH_SEPARATE);
	ZEPHIR_OBS_NVAR(&_0);
	zephir_read_property(&_0, this_ptr, SL("state"), PH_NOISY_CC);
	zephir_array_update_string(return_value, SL("state"), &_0, PH_COPY | PH_SEPARATE);
	ZEPHIR_OBS_NVAR(&_0);
	zephir_read_property(&_0, this_ptr, SL("client_id"), PH_NOISY_CC);
	zephir_array_update_string(return_value, SL("client_id"), &_0, PH_COPY | PH_SEPARATE);
	ZEPHIR_OBS_NVAR(&_0);
	zephir_read_property(&_0, this_ptr, SL("redirect_uri"), PH_NOISY_CC);
	zephir_array_update_string(return_value, SL("redirect_uri"), &_0, PH_COPY | PH_SEPARATE);
	ZEPHIR_OBS_NVAR(&_0);
	zephir_read_property(&_0, this_ptr, SL("response_type"), PH_NOISY_CC);
	zephir_array_update_string(return_value, SL("response_type"), &_0, PH_COPY | PH_SEPARATE);
	RETURN_MM();

}

/**
 * Validate the OAuth request
 *
 * @param RequestInterface $request
 * @param ResponseInterface $response
 * @return bool
 */
PHP_METHOD(OAuth2_Controller_AuthorizeController, validateAuthorizeRequest) {

	zend_bool _34, _99, _10$$5, _15$$5, _58$$13, _79$$20, _82$$20, _83$$20;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *request, request_sub, *response, response_sub, client_id, clientData, registered_redirect_uri, supplied_redirect_uri, parts, redirect_uri, _0, _1, _5, _9, response_type, types, state, _29, _30, _32, _33, _35, requestedScope, clientScope, defaultScope, _77, _97, _98, _2$$3, _3$$3, _4$$3, _6$$4, _7$$4, _8$$4, _11$$5, _16$$5, _12$$6, _13$$6, _14$$6, _17$$7, _18$$7, _19$$7, _20$$7, _21$$9, _22$$9, _23$$9, _24$$8, _25$$10, _26$$10, _27$$10, _28$$10, _31$$11, _36$$12, _37$$12, _38$$12, _39$$12, _40$$12, _41$$13, _47$$13, _48$$13, _49$$13, _55$$13, _56$$13, _57$$13, _42$$14, _43$$14, _44$$14, _45$$14, _46$$14, _50$$15, _51$$15, _52$$15, _53$$15, _54$$15, _59$$16, _60$$16, _61$$16, _62$$17, _63$$17, _69$$17, _70$$17, _71$$17, _64$$18, _65$$18, _66$$18, _67$$18, _68$$18, _72$$19, _73$$19, _74$$19, _75$$19, _76$$19, _78$$20, _80$$20, _81$$20, _84$$20, _85$$20, _86$$21, _87$$21, _88$$21, _89$$21, _90$$21, _91$$22, _92$$23, _93$$23, _94$$23, _95$$23, _96$$23, _100$$24, _101$$24, _102$$24, _103$$24, _104$$24;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&request_sub);
	ZVAL_UNDEF(&response_sub);
	ZVAL_UNDEF(&client_id);
	ZVAL_UNDEF(&clientData);
	ZVAL_UNDEF(&registered_redirect_uri);
	ZVAL_UNDEF(&supplied_redirect_uri);
	ZVAL_UNDEF(&parts);
	ZVAL_UNDEF(&redirect_uri);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_5);
	ZVAL_UNDEF(&_9);
	ZVAL_UNDEF(&response_type);
	ZVAL_UNDEF(&types);
	ZVAL_UNDEF(&state);
	ZVAL_UNDEF(&_29);
	ZVAL_UNDEF(&_30);
	ZVAL_UNDEF(&_32);
	ZVAL_UNDEF(&_33);
	ZVAL_UNDEF(&_35);
	ZVAL_UNDEF(&requestedScope);
	ZVAL_UNDEF(&clientScope);
	ZVAL_UNDEF(&defaultScope);
	ZVAL_UNDEF(&_77);
	ZVAL_UNDEF(&_97);
	ZVAL_UNDEF(&_98);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_4$$3);
	ZVAL_UNDEF(&_6$$4);
	ZVAL_UNDEF(&_7$$4);
	ZVAL_UNDEF(&_8$$4);
	ZVAL_UNDEF(&_11$$5);
	ZVAL_UNDEF(&_16$$5);
	ZVAL_UNDEF(&_12$$6);
	ZVAL_UNDEF(&_13$$6);
	ZVAL_UNDEF(&_14$$6);
	ZVAL_UNDEF(&_17$$7);
	ZVAL_UNDEF(&_18$$7);
	ZVAL_UNDEF(&_19$$7);
	ZVAL_UNDEF(&_20$$7);
	ZVAL_UNDEF(&_21$$9);
	ZVAL_UNDEF(&_22$$9);
	ZVAL_UNDEF(&_23$$9);
	ZVAL_UNDEF(&_24$$8);
	ZVAL_UNDEF(&_25$$10);
	ZVAL_UNDEF(&_26$$10);
	ZVAL_UNDEF(&_27$$10);
	ZVAL_UNDEF(&_28$$10);
	ZVAL_UNDEF(&_31$$11);
	ZVAL_UNDEF(&_36$$12);
	ZVAL_UNDEF(&_37$$12);
	ZVAL_UNDEF(&_38$$12);
	ZVAL_UNDEF(&_39$$12);
	ZVAL_UNDEF(&_40$$12);
	ZVAL_UNDEF(&_41$$13);
	ZVAL_UNDEF(&_47$$13);
	ZVAL_UNDEF(&_48$$13);
	ZVAL_UNDEF(&_49$$13);
	ZVAL_UNDEF(&_55$$13);
	ZVAL_UNDEF(&_56$$13);
	ZVAL_UNDEF(&_57$$13);
	ZVAL_UNDEF(&_42$$14);
	ZVAL_UNDEF(&_43$$14);
	ZVAL_UNDEF(&_44$$14);
	ZVAL_UNDEF(&_45$$14);
	ZVAL_UNDEF(&_46$$14);
	ZVAL_UNDEF(&_50$$15);
	ZVAL_UNDEF(&_51$$15);
	ZVAL_UNDEF(&_52$$15);
	ZVAL_UNDEF(&_53$$15);
	ZVAL_UNDEF(&_54$$15);
	ZVAL_UNDEF(&_59$$16);
	ZVAL_UNDEF(&_60$$16);
	ZVAL_UNDEF(&_61$$16);
	ZVAL_UNDEF(&_62$$17);
	ZVAL_UNDEF(&_63$$17);
	ZVAL_UNDEF(&_69$$17);
	ZVAL_UNDEF(&_70$$17);
	ZVAL_UNDEF(&_71$$17);
	ZVAL_UNDEF(&_64$$18);
	ZVAL_UNDEF(&_65$$18);
	ZVAL_UNDEF(&_66$$18);
	ZVAL_UNDEF(&_67$$18);
	ZVAL_UNDEF(&_68$$18);
	ZVAL_UNDEF(&_72$$19);
	ZVAL_UNDEF(&_73$$19);
	ZVAL_UNDEF(&_74$$19);
	ZVAL_UNDEF(&_75$$19);
	ZVAL_UNDEF(&_76$$19);
	ZVAL_UNDEF(&_78$$20);
	ZVAL_UNDEF(&_80$$20);
	ZVAL_UNDEF(&_81$$20);
	ZVAL_UNDEF(&_84$$20);
	ZVAL_UNDEF(&_85$$20);
	ZVAL_UNDEF(&_86$$21);
	ZVAL_UNDEF(&_87$$21);
	ZVAL_UNDEF(&_88$$21);
	ZVAL_UNDEF(&_89$$21);
	ZVAL_UNDEF(&_90$$21);
	ZVAL_UNDEF(&_91$$22);
	ZVAL_UNDEF(&_92$$23);
	ZVAL_UNDEF(&_93$$23);
	ZVAL_UNDEF(&_94$$23);
	ZVAL_UNDEF(&_95$$23);
	ZVAL_UNDEF(&_96$$23);
	ZVAL_UNDEF(&_100$$24);
	ZVAL_UNDEF(&_101$$24);
	ZVAL_UNDEF(&_102$$24);
	ZVAL_UNDEF(&_103$$24);
	ZVAL_UNDEF(&_104$$24);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &request, &response);



	ZEPHIR_INIT_VAR(&_1);
	ZVAL_STRING(&_1, "client_id");
	ZEPHIR_CALL_METHOD(&_0, request, "request", NULL, 0, &_1);
	zephir_check_call_status();
	ZEPHIR_INIT_NVAR(&_1);
	ZVAL_STRING(&_1, "client_id");
	ZEPHIR_CALL_METHOD(&client_id, request, "query", NULL, 0, &_1, &_0);
	zephir_check_call_status();
	if (!(zephir_is_true(&client_id))) {
		ZVAL_LONG(&_2$$3, 400);
		ZEPHIR_INIT_VAR(&_3$$3);
		ZVAL_STRING(&_3$$3, "invalid_client");
		ZEPHIR_INIT_VAR(&_4$$3);
		ZVAL_STRING(&_4$$3, "No client id supplied");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_2$$3, &_3$$3, &_4$$3);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	zephir_read_property(&_5, this_ptr, SL("clientStorage"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&clientData, &_5, "getclientdetails", NULL, 0, &client_id);
	zephir_check_call_status();
	if (!(zephir_is_true(&clientData))) {
		ZVAL_LONG(&_6$$4, 400);
		ZEPHIR_INIT_VAR(&_7$$4);
		ZVAL_STRING(&_7$$4, "invalid_client");
		ZEPHIR_INIT_VAR(&_8$$4);
		ZVAL_STRING(&_8$$4, "The client id supplied is invalid");
		ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_6$$4, &_7$$4, &_8$$4);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	if (zephir_array_isset_string(&clientData, SL("redirect_uri"))) {
		ZEPHIR_OBS_VAR(&registered_redirect_uri);
		zephir_array_fetch_string(&registered_redirect_uri, &clientData, SL("redirect_uri"), PH_NOISY, "oauth2/controller/authorizecontroller.zep", 175 TSRMLS_CC);
	} else {
		ZEPHIR_INIT_NVAR(&registered_redirect_uri);
		ZVAL_STRING(&registered_redirect_uri, "");
	}
	ZEPHIR_INIT_NVAR(&_1);
	ZVAL_STRING(&_1, "redirect_uri");
	ZEPHIR_CALL_METHOD(&_9, request, "request", NULL, 0, &_1);
	zephir_check_call_status();
	ZEPHIR_INIT_NVAR(&_1);
	ZVAL_STRING(&_1, "redirect_uri");
	ZEPHIR_CALL_METHOD(&supplied_redirect_uri, request, "query", NULL, 0, &_1, &_9);
	zephir_check_call_status();
	if (zephir_is_true(&supplied_redirect_uri)) {
		ZEPHIR_CALL_FUNCTION(&parts, "parse_url", NULL, 13, &supplied_redirect_uri);
		zephir_check_call_status();
		_10$$5 = zephir_array_isset_string(&parts, SL("fragment"));
		if (_10$$5) {
			zephir_array_fetch_string(&_11$$5, &parts, SL("fragment"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 185 TSRMLS_CC);
			_10$$5 = zephir_is_true(&_11$$5);
		}
		if (_10$$5) {
			ZVAL_LONG(&_12$$6, 400);
			ZEPHIR_INIT_VAR(&_13$$6);
			ZVAL_STRING(&_13$$6, "invalid_uri");
			ZEPHIR_INIT_VAR(&_14$$6);
			ZVAL_STRING(&_14$$6, "The redirect URI must not contain a fragment");
			ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_12$$6, &_13$$6, &_14$$6);
			zephir_check_call_status();
			RETURN_MM_BOOL(0);
		}
		_15$$5 = zephir_is_true(&registered_redirect_uri);
		if (_15$$5) {
			ZEPHIR_CALL_METHOD(&_16$$5, this_ptr, "validateredirecturi", NULL, 0, &supplied_redirect_uri, &registered_redirect_uri);
			zephir_check_call_status();
			_15$$5 = !zephir_is_true(&_16$$5);
		}
		if (_15$$5) {
			ZVAL_LONG(&_17$$7, 400);
			ZEPHIR_INIT_VAR(&_18$$7);
			ZVAL_STRING(&_18$$7, "redirect_uri_mismatch");
			ZEPHIR_INIT_VAR(&_19$$7);
			ZVAL_STRING(&_19$$7, "The redirect URI provided is missing or does not match");
			ZEPHIR_INIT_VAR(&_20$$7);
			ZVAL_STRING(&_20$$7, "#section-3.1.2");
			ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_17$$7, &_18$$7, &_19$$7, &_20$$7);
			zephir_check_call_status();
			RETURN_MM_BOOL(0);
		}
		ZEPHIR_CPY_WRT(&redirect_uri, &supplied_redirect_uri);
	} else {
		if (!(zephir_is_true(&registered_redirect_uri))) {
			ZVAL_LONG(&_21$$9, 400);
			ZEPHIR_INIT_VAR(&_22$$9);
			ZVAL_STRING(&_22$$9, "invalid_uri");
			ZEPHIR_INIT_VAR(&_23$$9);
			ZVAL_STRING(&_23$$9, "No redirect URI was supplied or stored");
			ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_21$$9, &_22$$9, &_23$$9);
			zephir_check_call_status();
			RETURN_MM_BOOL(0);
		}
		ZEPHIR_INIT_VAR(&_24$$8);
		zephir_fast_explode_str(&_24$$8, SL(" "), &registered_redirect_uri, LONG_MAX TSRMLS_CC);
		if (zephir_fast_count_int(&_24$$8 TSRMLS_CC) > 1) {
			ZVAL_LONG(&_25$$10, 400);
			ZEPHIR_INIT_VAR(&_26$$10);
			ZVAL_STRING(&_26$$10, "invalid_uri");
			ZEPHIR_INIT_VAR(&_27$$10);
			ZVAL_STRING(&_27$$10, "A redirect URI must be supplied when multiple redirect URIs are registered");
			ZEPHIR_INIT_VAR(&_28$$10);
			ZVAL_STRING(&_28$$10, "#section-3.1.2.3");
			ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_25$$10, &_26$$10, &_27$$10, &_28$$10);
			zephir_check_call_status();
			RETURN_MM_BOOL(0);
		}
		ZEPHIR_CPY_WRT(&redirect_uri, &registered_redirect_uri);
	}
	ZEPHIR_INIT_NVAR(&_1);
	ZVAL_STRING(&_1, "response_type");
	ZEPHIR_CALL_METHOD(&_29, request, "request", NULL, 0, &_1);
	zephir_check_call_status();
	ZEPHIR_INIT_NVAR(&_1);
	ZVAL_STRING(&_1, "response_type");
	ZEPHIR_CALL_METHOD(&response_type, request, "query", NULL, 0, &_1, &_29);
	zephir_check_call_status();
	ZEPHIR_INIT_NVAR(&_1);
	ZVAL_STRING(&_1, " ");
	ZEPHIR_INIT_VAR(&_30);
	zephir_fast_strpos(&_30, &response_type, &_1, 0 );
	if (!ZEPHIR_IS_FALSE_IDENTICAL(&_30)) {
		ZEPHIR_INIT_VAR(&types);
		zephir_fast_explode_str(&types, SL(" "), &response_type, LONG_MAX TSRMLS_CC);
		ZEPHIR_MAKE_REF(&types);
		ZEPHIR_CALL_FUNCTION(NULL, "sort", NULL, 14, &types);
		ZEPHIR_UNREF(&types);
		zephir_check_call_status();
		ZEPHIR_INIT_VAR(&_31$$11);
		zephir_fast_join_str(&_31$$11, SL(" "), &types TSRMLS_CC);
		ZEPHIR_INIT_NVAR(&response_type);
		zephir_fast_trim(&response_type, &_31$$11, NULL , ZEPHIR_TRIM_LEFT TSRMLS_CC);
	}
	ZEPHIR_INIT_VAR(&_33);
	ZVAL_STRING(&_33, "state");
	ZEPHIR_CALL_METHOD(&_32, request, "request", NULL, 0, &_33);
	zephir_check_call_status();
	ZEPHIR_INIT_NVAR(&_33);
	ZVAL_STRING(&_33, "state");
	ZEPHIR_CALL_METHOD(&state, request, "query", NULL, 0, &_33, &_32);
	zephir_check_call_status();
	_34 = !zephir_is_true(&response_type);
	if (!(_34)) {
		ZEPHIR_CALL_METHOD(&_35, this_ptr, "getvalidresponsetypes", NULL, 0);
		zephir_check_call_status();
		_34 = !(zephir_fast_in_array(&response_type, &_35 TSRMLS_CC));
	}
	if (_34) {
		zephir_read_property(&_36$$12, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_37$$12, &_36$$12, SL("redirect_status_code"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 228 TSRMLS_CC);
		ZEPHIR_INIT_VAR(&_38$$12);
		ZVAL_STRING(&_38$$12, "invalid_request");
		ZEPHIR_INIT_VAR(&_39$$12);
		ZVAL_STRING(&_39$$12, "Invalid or missing response type");
		ZVAL_NULL(&_40$$12);
		ZEPHIR_CALL_METHOD(NULL, response, "setredirect", NULL, 0, &_37$$12, &redirect_uri, &state, &_38$$12, &_39$$12, &_40$$12);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	if (ZEPHIR_IS_STRING(&response_type, "code")) {
		zephir_read_property(&_41$$13, this_ptr, SL("responseTypes"), PH_NOISY_CC | PH_READONLY);
		if (!(zephir_array_isset_string(&_41$$13, SL("code")))) {
			zephir_read_property(&_42$$14, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
			zephir_array_fetch_string(&_43$$14, &_42$$14, SL("redirect_status_code"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 235 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_44$$14);
			ZVAL_STRING(&_44$$14, "unsupported_response_type");
			ZEPHIR_INIT_VAR(&_45$$14);
			ZVAL_STRING(&_45$$14, "authorization code grant type not supported");
			ZVAL_NULL(&_46$$14);
			ZEPHIR_CALL_METHOD(NULL, response, "setredirect", NULL, 0, &_43$$14, &redirect_uri, &state, &_44$$14, &_45$$14, &_46$$14);
			zephir_check_call_status();
			RETURN_MM_BOOL(0);
		}
		zephir_read_property(&_47$$13, this_ptr, SL("clientStorage"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_INIT_VAR(&_49$$13);
		ZVAL_STRING(&_49$$13, "authorization_code");
		ZEPHIR_CALL_METHOD(&_48$$13, &_47$$13, "checkrestrictedgranttype", NULL, 0, &client_id, &_49$$13);
		zephir_check_call_status();
		if (!(zephir_is_true(&_48$$13))) {
			zephir_read_property(&_50$$15, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
			zephir_array_fetch_string(&_51$$15, &_50$$15, SL("redirect_status_code"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 240 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_52$$15);
			ZVAL_STRING(&_52$$15, "unauthorized_client");
			ZEPHIR_INIT_VAR(&_53$$15);
			ZVAL_STRING(&_53$$15, "The grant type is unauthorized for this client_id");
			ZVAL_NULL(&_54$$15);
			ZEPHIR_CALL_METHOD(NULL, response, "setredirect", NULL, 0, &_51$$15, &redirect_uri, &state, &_52$$15, &_53$$15, &_54$$15);
			zephir_check_call_status();
			RETURN_MM_BOOL(0);
		}
		zephir_read_property(&_55$$13, this_ptr, SL("responseTypes"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_56$$13, &_55$$13, SL("code"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 244 TSRMLS_CC);
		ZEPHIR_CALL_METHOD(&_57$$13, &_56$$13, "enforceredirect", NULL, 0);
		zephir_check_call_status();
		_58$$13 = zephir_is_true(&_57$$13);
		if (_58$$13) {
			_58$$13 = !zephir_is_true(&redirect_uri);
		}
		if (_58$$13) {
			ZVAL_LONG(&_59$$16, 400);
			ZEPHIR_INIT_VAR(&_60$$16);
			ZVAL_STRING(&_60$$16, "redirect_uri_mismatch");
			ZEPHIR_INIT_VAR(&_61$$16);
			ZVAL_STRING(&_61$$16, "The redirect URI is mandatory and was not supplied");
			ZEPHIR_CALL_METHOD(NULL, response, "seterror", NULL, 0, &_59$$16, &_60$$16, &_61$$16);
			zephir_check_call_status();
			RETURN_MM_BOOL(0);
		}
	} else {
		zephir_read_property(&_62$$17, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_63$$17, &_62$$17, SL("allow_implicit"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 250 TSRMLS_CC);
		if (!(zephir_is_true(&_63$$17))) {
			zephir_read_property(&_64$$18, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
			zephir_array_fetch_string(&_65$$18, &_64$$18, SL("redirect_status_code"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 251 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_66$$18);
			ZVAL_STRING(&_66$$18, "unsupported_response_type");
			ZEPHIR_INIT_VAR(&_67$$18);
			ZVAL_STRING(&_67$$18, "implicit grant type not supported");
			ZVAL_NULL(&_68$$18);
			ZEPHIR_CALL_METHOD(NULL, response, "setredirect", NULL, 0, &_65$$18, &redirect_uri, &state, &_66$$18, &_67$$18, &_68$$18);
			zephir_check_call_status();
			RETURN_MM_BOOL(0);
		}
		zephir_read_property(&_69$$17, this_ptr, SL("clientStorage"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_INIT_VAR(&_71$$17);
		ZVAL_STRING(&_71$$17, "implicit");
		ZEPHIR_CALL_METHOD(&_70$$17, &_69$$17, "checkrestrictedgranttype", NULL, 0, &client_id, &_71$$17);
		zephir_check_call_status();
		if (!(zephir_is_true(&_70$$17))) {
			zephir_read_property(&_72$$19, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
			zephir_array_fetch_string(&_73$$19, &_72$$19, SL("redirect_status_code"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 256 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_74$$19);
			ZVAL_STRING(&_74$$19, "unauthorized_client");
			ZEPHIR_INIT_VAR(&_75$$19);
			ZVAL_STRING(&_75$$19, "The grant type is unauthorized for this client_id");
			ZVAL_NULL(&_76$$19);
			ZEPHIR_CALL_METHOD(NULL, response, "setredirect", NULL, 0, &_73$$19, &redirect_uri, &state, &_74$$19, &_75$$19, &_76$$19);
			zephir_check_call_status();
			RETURN_MM_BOOL(0);
		}
	}
	zephir_read_property(&_77, this_ptr, SL("scopeUtil"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&requestedScope, &_77, "getscopefromrequest", NULL, 0, request);
	zephir_check_call_status();
	if (zephir_is_true(&requestedScope)) {
		zephir_read_property(&_78$$20, this_ptr, SL("clientStorage"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_METHOD(&clientScope, &_78$$20, "getclientscope", NULL, 0, &client_id);
		zephir_check_call_status();
		_79$$20 = ZEPHIR_IS_EMPTY(&clientScope);
		if (_79$$20) {
			zephir_read_property(&_80$$20, this_ptr, SL("scopeUtil"), PH_NOISY_CC | PH_READONLY);
			ZEPHIR_CALL_METHOD(&_81$$20, &_80$$20, "scopeexists", NULL, 0, &requestedScope);
			zephir_check_call_status();
			_79$$20 = !zephir_is_true(&_81$$20);
		}
		_82$$20 = _79$$20;
		if (!(_82$$20)) {
			_83$$20 = !(ZEPHIR_IS_EMPTY(&clientScope));
			if (_83$$20) {
				zephir_read_property(&_84$$20, this_ptr, SL("scopeUtil"), PH_NOISY_CC | PH_READONLY);
				ZEPHIR_CALL_METHOD(&_85$$20, &_84$$20, "checkscope", NULL, 0, &requestedScope, &clientScope);
				zephir_check_call_status();
				_83$$20 = !zephir_is_true(&_85$$20);
			}
			_82$$20 = _83$$20;
		}
		if (_82$$20) {
			zephir_read_property(&_86$$21, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
			zephir_array_fetch_string(&_87$$21, &_86$$21, SL("redirect_status_code"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 270 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_88$$21);
			ZVAL_STRING(&_88$$21, "invalid_scope");
			ZEPHIR_INIT_VAR(&_89$$21);
			ZVAL_STRING(&_89$$21, "An unsupported scope was requested");
			ZVAL_NULL(&_90$$21);
			ZEPHIR_CALL_METHOD(NULL, response, "setredirect", NULL, 0, &_87$$21, &redirect_uri, &state, &_88$$21, &_89$$21, &_90$$21);
			zephir_check_call_status();
			RETURN_MM_BOOL(0);
		}
	} else {
		zephir_read_property(&_91$$22, this_ptr, SL("scopeUtil"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_METHOD(&defaultScope, &_91$$22, "getdefaultscope", NULL, 0, &client_id);
		zephir_check_call_status();
		if (ZEPHIR_IS_FALSE_IDENTICAL(&defaultScope)) {
			zephir_read_property(&_92$$23, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
			zephir_array_fetch_string(&_93$$23, &_92$$23, SL("redirect_status_code"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 279 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_94$$23);
			ZVAL_STRING(&_94$$23, "invalid_client");
			ZEPHIR_INIT_VAR(&_95$$23);
			ZVAL_STRING(&_95$$23, "This application requires you specify a scope parameter");
			ZVAL_NULL(&_96$$23);
			ZEPHIR_CALL_METHOD(NULL, response, "setredirect", NULL, 0, &_93$$23, &redirect_uri, &state, &_94$$23, &_95$$23, &_96$$23);
			zephir_check_call_status();
			RETURN_MM_BOOL(0);
		}
		ZEPHIR_CPY_WRT(&requestedScope, &defaultScope);
	}
	zephir_read_property(&_97, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch_string(&_98, &_97, SL("enforce_state"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 288 TSRMLS_CC);
	_99 = zephir_is_true(&_98);
	if (_99) {
		_99 = !zephir_is_true(&state);
	}
	if (_99) {
		zephir_read_property(&_100$$24, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_101$$24, &_100$$24, SL("redirect_status_code"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 289 TSRMLS_CC);
		ZVAL_NULL(&_102$$24);
		ZEPHIR_INIT_VAR(&_103$$24);
		ZVAL_STRING(&_103$$24, "invalid_request");
		ZEPHIR_INIT_VAR(&_104$$24);
		ZVAL_STRING(&_104$$24, "The state parameter is required");
		ZEPHIR_CALL_METHOD(NULL, response, "setredirect", NULL, 0, &_101$$24, &redirect_uri, &_102$$24, &_103$$24, &_104$$24);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	zephir_update_property_zval(this_ptr, SL("scope"), &requestedScope);
	zephir_update_property_zval(this_ptr, SL("state"), &state);
	zephir_update_property_zval(this_ptr, SL("client_id"), &client_id);
	zephir_update_property_zval(this_ptr, SL("redirect_uri"), &supplied_redirect_uri);
	zephir_update_property_zval(this_ptr, SL("response_type"), &response_type);
	RETURN_MM_BOOL(1);

}

/**
 * Build the absolute URI based on supplied URI and parameters.
 *
 * @param string $uri    An absolute URI.
 * @param array  $params Parameters to be append as GET.
 *
 * @return string
 * An absolute URI with supplied parameters.
 *
 * @ingroup oauth2_section_4
 */
PHP_METHOD(OAuth2_Controller_AuthorizeController, buildUri) {

	zend_bool _22;
	zend_string *_2;
	zend_ulong _1;
	zephir_fcall_cache_entry *_6 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *uri, uri_sub, *params, params_sub, parse_url, k, v, *_0, _11, _12, _13, _14, _15, _16, _17, _18, _19, _20, _21, _23, _24, _25, _26, _3$$4, _4$$4, _5$$4, _7$$4, _8$$5, _9$$5, _10$$5;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&uri_sub);
	ZVAL_UNDEF(&params_sub);
	ZVAL_UNDEF(&parse_url);
	ZVAL_UNDEF(&k);
	ZVAL_UNDEF(&v);
	ZVAL_UNDEF(&_11);
	ZVAL_UNDEF(&_12);
	ZVAL_UNDEF(&_13);
	ZVAL_UNDEF(&_14);
	ZVAL_UNDEF(&_15);
	ZVAL_UNDEF(&_16);
	ZVAL_UNDEF(&_17);
	ZVAL_UNDEF(&_18);
	ZVAL_UNDEF(&_19);
	ZVAL_UNDEF(&_20);
	ZVAL_UNDEF(&_21);
	ZVAL_UNDEF(&_23);
	ZVAL_UNDEF(&_24);
	ZVAL_UNDEF(&_25);
	ZVAL_UNDEF(&_26);
	ZVAL_UNDEF(&_3$$4);
	ZVAL_UNDEF(&_4$$4);
	ZVAL_UNDEF(&_5$$4);
	ZVAL_UNDEF(&_7$$4);
	ZVAL_UNDEF(&_8$$5);
	ZVAL_UNDEF(&_9$$5);
	ZVAL_UNDEF(&_10$$5);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &uri, &params);



	ZEPHIR_CALL_FUNCTION(&parse_url, "parse_url", NULL, 13, uri);
	zephir_check_call_status();
	zephir_is_iterable(params, 0, "oauth2/controller/authorizecontroller.zep", 331);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(params), _1, _2, _0)
	{
		ZEPHIR_INIT_NVAR(&k);
		if (_2 != NULL) { 
			ZVAL_STR_COPY(&k, _2);
		} else {
			ZVAL_LONG(&k, _1);
		}
		ZEPHIR_INIT_NVAR(&v);
		ZVAL_COPY(&v, _0);
		if (zephir_array_isset(&parse_url, &k)) {
			ZEPHIR_INIT_NVAR(&_3$$4);
			ZVAL_STRING(&_3$$4, "");
			ZEPHIR_INIT_NVAR(&_4$$4);
			ZVAL_STRING(&_4$$4, "&");
			ZEPHIR_CALL_FUNCTION(&_5$$4, "http_build_query", &_6, 15, &v, &_3$$4, &_4$$4);
			zephir_check_call_status();
			ZEPHIR_INIT_LNVAR(_7$$4);
			ZEPHIR_CONCAT_SV(&_7$$4, "&", &_5$$4);
			zephir_array_update_zval(&parse_url, &k, &_7$$4, PH_COPY | PH_SEPARATE);
		} else {
			ZEPHIR_INIT_NVAR(&_8$$5);
			ZVAL_STRING(&_8$$5, "");
			ZEPHIR_INIT_NVAR(&_9$$5);
			ZVAL_STRING(&_9$$5, "&");
			ZEPHIR_CALL_FUNCTION(&_10$$5, "http_build_query", &_6, 15, &v, &_8$$5, &_9$$5);
			zephir_check_call_status();
			zephir_array_update_zval(&parse_url, &k, &_10$$5, PH_COPY | PH_SEPARATE);
		}
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&v);
	ZEPHIR_INIT_NVAR(&k);
	ZEPHIR_INIT_VAR(&_11);
	if (zephir_array_isset_string(&parse_url, SL("scheme"))) {
		zephir_array_fetch_string(&_12, &parse_url, SL("scheme"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 332 TSRMLS_CC);
		ZEPHIR_INIT_NVAR(&_11);
		ZEPHIR_CONCAT_VS(&_11, &_12, "://");
	} else {
		ZEPHIR_INIT_NVAR(&_11);
		ZVAL_STRING(&_11, "");
	}
	ZEPHIR_INIT_VAR(&_13);
	if (zephir_array_isset_string(&parse_url, SL("user"))) {
		zephir_array_fetch_string(&_14, &parse_url, SL("user"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 334 TSRMLS_CC);
		ZEPHIR_INIT_VAR(&_15);
		if (zephir_array_isset_string(&parse_url, SL("pass"))) {
			zephir_array_fetch_string(&_16, &parse_url, SL("pass"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 334 TSRMLS_CC);
			ZEPHIR_INIT_NVAR(&_15);
			ZEPHIR_CONCAT_SV(&_15, ":", &_16);
		} else {
			ZEPHIR_INIT_NVAR(&_15);
			ZVAL_STRING(&_15, "");
		}
		ZEPHIR_INIT_NVAR(&_13);
		ZEPHIR_CONCAT_VVS(&_13, &_14, &_15, "@");
	} else {
		ZEPHIR_INIT_NVAR(&_13);
		ZVAL_STRING(&_13, "");
	}
	ZEPHIR_INIT_VAR(&_17);
	if (zephir_array_isset_string(&parse_url, SL("host"))) {
		ZEPHIR_OBS_NVAR(&_17);
		zephir_array_fetch_string(&_17, &parse_url, SL("host"), PH_NOISY, "oauth2/controller/authorizecontroller.zep", 335 TSRMLS_CC);
	} else {
		ZEPHIR_INIT_NVAR(&_17);
		ZVAL_STRING(&_17, "");
	}
	ZEPHIR_INIT_VAR(&_18);
	if (zephir_array_isset_string(&parse_url, SL("port"))) {
		zephir_array_fetch_string(&_19, &parse_url, SL("port"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 336 TSRMLS_CC);
		ZEPHIR_INIT_NVAR(&_18);
		ZEPHIR_CONCAT_SV(&_18, ":", &_19);
	} else {
		ZEPHIR_INIT_NVAR(&_18);
		ZVAL_STRING(&_18, "");
	}
	ZEPHIR_INIT_VAR(&_20);
	if (zephir_array_isset_string(&parse_url, SL("path"))) {
		ZEPHIR_OBS_NVAR(&_20);
		zephir_array_fetch_string(&_20, &parse_url, SL("path"), PH_NOISY, "oauth2/controller/authorizecontroller.zep", 337 TSRMLS_CC);
	} else {
		ZEPHIR_INIT_NVAR(&_20);
		ZVAL_STRING(&_20, "");
	}
	ZEPHIR_INIT_VAR(&_21);
	_22 = zephir_array_isset_string(&parse_url, SL("query"));
	if (_22) {
		zephir_array_fetch_string(&_23, &parse_url, SL("query"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 338 TSRMLS_CC);
		_22 = !(ZEPHIR_IS_EMPTY(&_23));
	}
	if (_22) {
		zephir_array_fetch_string(&_24, &parse_url, SL("query"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 338 TSRMLS_CC);
		ZEPHIR_INIT_NVAR(&_21);
		ZEPHIR_CONCAT_SV(&_21, "?", &_24);
	} else {
		ZEPHIR_INIT_NVAR(&_21);
		ZVAL_STRING(&_21, "");
	}
	ZEPHIR_INIT_VAR(&_25);
	if (zephir_array_isset_string(&parse_url, SL("fragment"))) {
		zephir_array_fetch_string(&_26, &parse_url, SL("fragment"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 339 TSRMLS_CC);
		ZEPHIR_INIT_NVAR(&_25);
		ZEPHIR_CONCAT_SV(&_25, "#", &_26);
	} else {
		ZEPHIR_INIT_NVAR(&_25);
		ZVAL_STRING(&_25, "");
	}
	ZEPHIR_CONCAT_VVVVVVV(return_value, &_11, &_13, &_17, &_18, &_20, &_21, &_25);
	RETURN_MM();

}

PHP_METHOD(OAuth2_Controller_AuthorizeController, getValidResponseTypes) {

	zval _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();

	zephir_create_array(return_value, 2, 0 TSRMLS_CC);
	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "token");
	zephir_array_fast_append(return_value, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "code");
	zephir_array_fast_append(return_value, &_0);
	RETURN_MM();

}

/**
 * Internal method for validating redirect URI supplied
 *
 * @param string $inputUri The submitted URI to be validated
 * @param string $registeredUriString The allowed URI(s) to validate against.  Can be a space-delimited string of URIs to
 *                                    allow for multiple URIs
 * @return bool
 * @see http://tools.ietf.org/html/rfc6749#section-3.1.2
 */
PHP_METHOD(OAuth2_Controller_AuthorizeController, validateRedirectUri) {

	zend_bool _0;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zephir_fcall_cache_entry *_5 = NULL, *_9 = NULL;
	zval *inputUri, inputUri_sub, *registeredUriString, registeredUriString_sub, registered_uris, registered_uri, *_1, _2$$4, _3$$4, _4$$5, registered_uri_length$$7, _6$$7, _7$$7, _8$$7;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&inputUri_sub);
	ZVAL_UNDEF(&registeredUriString_sub);
	ZVAL_UNDEF(&registered_uris);
	ZVAL_UNDEF(&registered_uri);
	ZVAL_UNDEF(&_2$$4);
	ZVAL_UNDEF(&_3$$4);
	ZVAL_UNDEF(&_4$$5);
	ZVAL_UNDEF(&registered_uri_length$$7);
	ZVAL_UNDEF(&_6$$7);
	ZVAL_UNDEF(&_7$$7);
	ZVAL_UNDEF(&_8$$7);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &inputUri, &registeredUriString);



	_0 = !zephir_is_true(inputUri);
	if (!(_0)) {
		_0 = !zephir_is_true(registeredUriString);
	}
	if (_0) {
		RETURN_MM_BOOL(0);
	}
	ZEPHIR_INIT_VAR(&registered_uris);
	zephir_fast_explode_str(&registered_uris, SL(" "), registeredUriString, LONG_MAX TSRMLS_CC);
	zephir_is_iterable(&registered_uris, 0, "oauth2/controller/authorizecontroller.zep", 386);
	ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(&registered_uris), _1)
	{
		ZEPHIR_INIT_NVAR(&registered_uri);
		ZVAL_COPY(&registered_uri, _1);
		zephir_read_property(&_2$$4, this_ptr, SL("config"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_string(&_3$$4, &_2$$4, SL("require_exact_redirect_uri"), PH_NOISY | PH_READONLY, "oauth2/controller/authorizecontroller.zep", 366 TSRMLS_CC);
		if (zephir_is_true(&_3$$4)) {
			ZEPHIR_CALL_FUNCTION(&_4$$5, "strcmp", &_5, 16, inputUri, &registered_uri);
			zephir_check_call_status();
			if (ZEPHIR_IS_LONG_IDENTICAL(&_4$$5, 0)) {
				RETURN_MM_BOOL(1);
			}
		} else {
			ZEPHIR_INIT_NVAR(&registered_uri_length$$7);
			ZVAL_LONG(&registered_uri_length$$7, zephir_fast_strlen_ev(&registered_uri));
			if (ZEPHIR_IS_LONG_IDENTICAL(&registered_uri_length$$7, 0)) {
				RETURN_MM_BOOL(0);
			}
			ZVAL_LONG(&_6$$7, 0);
			ZEPHIR_INIT_NVAR(&_7$$7);
			zephir_substr(&_7$$7, inputUri, 0 , zephir_get_intval(&registered_uri_length$$7), 0);
			ZEPHIR_CALL_FUNCTION(&_8$$7, "strcasecmp", &_9, 17, &_7$$7, &registered_uri);
			zephir_check_call_status();
			if (ZEPHIR_IS_LONG_IDENTICAL(&_8$$7, 0)) {
				RETURN_MM_BOOL(1);
			}
		}
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&registered_uri);
	RETURN_MM_BOOL(0);

}

/**
 * Convenience method to access the scope
 *
 * @return string
 */
PHP_METHOD(OAuth2_Controller_AuthorizeController, getScope) {

	zval *this_ptr = getThis();


	RETURN_MEMBER(getThis(), "scope");

}

/**
 * Convenience method to access the state
 *
 * @return int
 */
PHP_METHOD(OAuth2_Controller_AuthorizeController, getState) {

	zval *this_ptr = getThis();


	RETURN_MEMBER(getThis(), "state");

}

/**
 * Convenience method to access the client id
 *
 * @return mixed
 */
PHP_METHOD(OAuth2_Controller_AuthorizeController, getClientId) {

	zval *this_ptr = getThis();


	RETURN_MEMBER(getThis(), "client_id");

}

/**
 * Convenience method to access the redirect url
 *
 * @return string
 */
PHP_METHOD(OAuth2_Controller_AuthorizeController, getRedirectUri) {

	zval *this_ptr = getThis();


	RETURN_MEMBER(getThis(), "redirect_uri");

}

/**
 * Convenience method to access the response type
 *
 * @return string
 */
PHP_METHOD(OAuth2_Controller_AuthorizeController, getResponseType) {

	zval *this_ptr = getThis();


	RETURN_MEMBER(getThis(), "response_type");

}

