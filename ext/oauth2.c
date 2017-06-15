
/* This file was generated automatically by Zephir do not modify it! */

#ifdef HAVE_CONFIG_H
#include "config.h"
#endif

#include <php.h>

#include "php_ext.h"
#include "oauth2.h"

#include <ext/standard/info.h>

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/globals.h"
#include "kernel/main.h"
#include "kernel/fcall.h"
#include "kernel/memory.h"



zend_class_entry *oauth2_storage_storageinterface_ce;
zend_class_entry *oauth2_granttype_granttypeinterface_ce;
zend_class_entry *oauth2_responsetype_responsetypeinterface_ce;
zend_class_entry *oauth2_clientassertiontype_clientassertiontypeinterface_ce;
zend_class_entry *oauth2_controller_authorizecontrollerinterface_ce;
zend_class_entry *oauth2_controller_resourcecontrollerinterface_ce;
zend_class_entry *oauth2_controller_tokencontrollerinterface_ce;
zend_class_entry *oauth2_responsetype_accesstokeninterface_ce;
zend_class_entry *oauth2_storage_accesstokeninterface_ce;
zend_class_entry *oauth2_storage_scopeinterface_ce;
zend_class_entry *oauth2_tokentype_tokentypeinterface_ce;
zend_class_entry *oauth2_encryption_encryptioninterface_ce;
zend_class_entry *oauth2_requestinterface_ce;
zend_class_entry *oauth2_responseinterface_ce;
zend_class_entry *oauth2_responsetype_authorizationcodeinterface_ce;
zend_class_entry *oauth2_scopeinterface_ce;
zend_class_entry *oauth2_storage_clientinterface_ce;
zend_class_entry *oauth2_storage_jwtaccesstokeninterface_ce;
zend_class_entry *oauth2_storage_authorizationcodeinterface_ce;
zend_class_entry *oauth2_storage_clientcredentialsinterface_ce;
zend_class_entry *oauth2_storage_jwtbearerinterface_ce;
zend_class_entry *oauth2_storage_publickeyinterface_ce;
zend_class_entry *oauth2_storage_refreshtokeninterface_ce;
zend_class_entry *oauth2_storage_usercredentialsinterface_ce;
zend_class_entry *oauth2_clientassertiontype_httpbasic_ce;
zend_class_entry *oauth2_responsetype_accesstoken_ce;
zend_class_entry *oauth2_autoloader_ce;
zend_class_entry *oauth2_controller_authorizecontroller_ce;
zend_class_entry *oauth2_controller_resourcecontroller_ce;
zend_class_entry *oauth2_controller_tokencontroller_ce;
zend_class_entry *oauth2_encryption_jwt_ce;
zend_class_entry *oauth2_exception_ce;
zend_class_entry *oauth2_granttype_authorizationcode_ce;
zend_class_entry *oauth2_granttype_clientcredentials_ce;
zend_class_entry *oauth2_granttype_jwtbearer_ce;
zend_class_entry *oauth2_granttype_refreshtoken_ce;
zend_class_entry *oauth2_granttype_usercredentials_ce;
zend_class_entry *oauth2_request_ce;
zend_class_entry *oauth2_response_ce;
zend_class_entry *oauth2_responsetype_authorizationcode_ce;
zend_class_entry *oauth2_responsetype_jwtaccesstoken_ce;
zend_class_entry *oauth2_scope_ce;
zend_class_entry *oauth2_server_ce;
zend_class_entry *oauth2_storage_jwtaccesstoken_ce;
zend_class_entry *oauth2_tokentype_bearer_ce;
zend_class_entry *oauth2_tokentype_mac_ce;

ZEND_DECLARE_MODULE_GLOBALS(oauth2)

PHP_INI_BEGIN()
	
PHP_INI_END()

static PHP_MINIT_FUNCTION(oauth2)
{
	REGISTER_INI_ENTRIES();
	zephir_module_init();
	ZEPHIR_INIT(OAuth2_Storage_StorageInterface);
	ZEPHIR_INIT(OAuth2_GrantType_GrantTypeInterface);
	ZEPHIR_INIT(OAuth2_ResponseType_ResponseTypeInterface);
	ZEPHIR_INIT(OAuth2_ClientAssertionType_ClientAssertionTypeInterface);
	ZEPHIR_INIT(OAuth2_Controller_AuthorizeControllerInterface);
	ZEPHIR_INIT(OAuth2_Controller_ResourceControllerInterface);
	ZEPHIR_INIT(OAuth2_Controller_TokenControllerInterface);
	ZEPHIR_INIT(OAuth2_ResponseType_AccessTokenInterface);
	ZEPHIR_INIT(OAuth2_Storage_AccessTokenInterface);
	ZEPHIR_INIT(OAuth2_Storage_ScopeInterface);
	ZEPHIR_INIT(OAuth2_TokenType_TokenTypeInterface);
	ZEPHIR_INIT(OAuth2_Encryption_EncryptionInterface);
	ZEPHIR_INIT(OAuth2_RequestInterface);
	ZEPHIR_INIT(OAuth2_ResponseInterface);
	ZEPHIR_INIT(OAuth2_ResponseType_AuthorizationCodeInterface);
	ZEPHIR_INIT(OAuth2_ScopeInterface);
	ZEPHIR_INIT(OAuth2_Storage_ClientInterface);
	ZEPHIR_INIT(OAuth2_Storage_JwtAccessTokenInterface);
	ZEPHIR_INIT(OAuth2_Storage_AuthorizationCodeInterface);
	ZEPHIR_INIT(OAuth2_Storage_ClientCredentialsInterface);
	ZEPHIR_INIT(OAuth2_Storage_JwtBearerInterface);
	ZEPHIR_INIT(OAuth2_Storage_PublicKeyInterface);
	ZEPHIR_INIT(OAuth2_Storage_RefreshTokenInterface);
	ZEPHIR_INIT(OAuth2_Storage_UserCredentialsInterface);
	ZEPHIR_INIT(OAuth2_ClientAssertionType_HttpBasic);
	ZEPHIR_INIT(OAuth2_ResponseType_AccessToken);
	ZEPHIR_INIT(OAuth2_Autoloader);
	ZEPHIR_INIT(OAuth2_Controller_AuthorizeController);
	ZEPHIR_INIT(OAuth2_Controller_ResourceController);
	ZEPHIR_INIT(OAuth2_Controller_TokenController);
	ZEPHIR_INIT(OAuth2_Encryption_Jwt);
	ZEPHIR_INIT(OAuth2_Exception);
	ZEPHIR_INIT(OAuth2_GrantType_AuthorizationCode);
	ZEPHIR_INIT(OAuth2_GrantType_ClientCredentials);
	ZEPHIR_INIT(OAuth2_GrantType_JwtBearer);
	ZEPHIR_INIT(OAuth2_GrantType_RefreshToken);
	ZEPHIR_INIT(OAuth2_GrantType_UserCredentials);
	ZEPHIR_INIT(OAuth2_Request);
	ZEPHIR_INIT(OAuth2_Response);
	ZEPHIR_INIT(OAuth2_ResponseType_AuthorizationCode);
	ZEPHIR_INIT(OAuth2_ResponseType_JwtAccessToken);
	ZEPHIR_INIT(OAuth2_Scope);
	ZEPHIR_INIT(OAuth2_Server);
	ZEPHIR_INIT(OAuth2_Storage_JwtAccessToken);
	ZEPHIR_INIT(OAuth2_TokenType_Bearer);
	ZEPHIR_INIT(OAuth2_TokenType_Mac);
	return SUCCESS;
}

#ifndef ZEPHIR_RELEASE
static PHP_MSHUTDOWN_FUNCTION(oauth2)
{
	zephir_deinitialize_memory(TSRMLS_C);
	UNREGISTER_INI_ENTRIES();
	return SUCCESS;
}
#endif

/**
 * Initialize globals on each request or each thread started
 */
static void php_zephir_init_globals(zend_oauth2_globals *oauth2_globals TSRMLS_DC)
{
	oauth2_globals->initialized = 0;

	/* Memory options */
	oauth2_globals->active_memory = NULL;

	/* Virtual Symbol Tables */
	oauth2_globals->active_symbol_table = NULL;

	/* Cache Enabled */
	oauth2_globals->cache_enabled = 1;

	/* Recursive Lock */
	oauth2_globals->recursive_lock = 0;

	/* Static cache */
	memset(oauth2_globals->scache, '\0', sizeof(zephir_fcall_cache_entry*) * ZEPHIR_MAX_CACHE_SLOTS);


}

/**
 * Initialize globals only on each thread started
 */
static void php_zephir_init_module_globals(zend_oauth2_globals *oauth2_globals TSRMLS_DC)
{

}

static PHP_RINIT_FUNCTION(oauth2)
{

	zend_oauth2_globals *oauth2_globals_ptr;
#ifdef ZTS
	tsrm_ls = ts_resource(0);
#endif
	oauth2_globals_ptr = ZEPHIR_VGLOBAL;

	php_zephir_init_globals(oauth2_globals_ptr TSRMLS_CC);
	zephir_initialize_memory(oauth2_globals_ptr TSRMLS_CC);

	zephir_init_static_properties_OAuth2_Response(TSRMLS_C);

	return SUCCESS;
}

static PHP_RSHUTDOWN_FUNCTION(oauth2)
{
	
	zephir_deinitialize_memory(TSRMLS_C);
	return SUCCESS;
}

static PHP_MINFO_FUNCTION(oauth2)
{
	php_info_print_box_start(0);
	php_printf("%s", PHP_OAUTH2_DESCRIPTION);
	php_info_print_box_end();

	php_info_print_table_start();
	php_info_print_table_header(2, PHP_OAUTH2_NAME, "enabled");
	php_info_print_table_row(2, "Author", PHP_OAUTH2_AUTHOR);
	php_info_print_table_row(2, "Version", PHP_OAUTH2_VERSION);
	php_info_print_table_row(2, "Build Date", __DATE__ " " __TIME__ );
	php_info_print_table_row(2, "Powered by Zephir", "Version " PHP_OAUTH2_ZEPVERSION);
	php_info_print_table_end();

	DISPLAY_INI_ENTRIES();
}

static PHP_GINIT_FUNCTION(oauth2)
{
	php_zephir_init_globals(oauth2_globals TSRMLS_CC);
	php_zephir_init_module_globals(oauth2_globals TSRMLS_CC);
}

static PHP_GSHUTDOWN_FUNCTION(oauth2)
{

}


zend_function_entry php_oauth2_functions[] = {
ZEND_FE_END

};

zend_module_entry oauth2_module_entry = {
	STANDARD_MODULE_HEADER_EX,
	NULL,
	NULL,
	PHP_OAUTH2_EXTNAME,
	php_oauth2_functions,
	PHP_MINIT(oauth2),
#ifndef ZEPHIR_RELEASE
	PHP_MSHUTDOWN(oauth2),
#else
	NULL,
#endif
	PHP_RINIT(oauth2),
	PHP_RSHUTDOWN(oauth2),
	PHP_MINFO(oauth2),
	PHP_OAUTH2_VERSION,
	ZEND_MODULE_GLOBALS(oauth2),
	PHP_GINIT(oauth2),
	PHP_GSHUTDOWN(oauth2),
	NULL,
	STANDARD_MODULE_PROPERTIES_EX
};

#ifdef COMPILE_DL_OAUTH2
ZEND_GET_MODULE(oauth2)
#endif
