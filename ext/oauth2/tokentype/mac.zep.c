
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
#include "kernel/exception.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/memory.h"


/**
* This is not yet supported!
*/
ZEPHIR_INIT_CLASS(OAuth2_TokenType_Mac) {

	ZEPHIR_REGISTER_CLASS(OAuth2\\TokenType, Mac, oauth2, tokentype_mac, oauth2_tokentype_mac_method_entry, 0);

	zend_class_implements(oauth2_tokentype_mac_ce TSRMLS_CC, 1, oauth2_tokentype_tokentypeinterface_ce);
	return SUCCESS;

}

PHP_METHOD(OAuth2_TokenType_Mac, getTokenType) {

	zval *this_ptr = getThis();


	RETURN_STRING("mac");

}

PHP_METHOD(OAuth2_TokenType_Mac, getAccessTokenParameter) {

	zval *request, request_sub, *response, response_sub;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&request_sub);
	ZVAL_UNDEF(&response_sub);

	zephir_fetch_params(0, 2, 0, &request, &response);



	ZEPHIR_THROW_EXCEPTION_DEBUG_STRW(spl_ce_LogicException, "Not supported", "oauth2/tokentype/mac.zep", 20);
	return;

}

