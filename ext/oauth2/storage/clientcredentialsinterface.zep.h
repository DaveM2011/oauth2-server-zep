
extern zend_class_entry *oauth2_storage_clientcredentialsinterface_ce;

ZEPHIR_INIT_CLASS(OAuth2_Storage_ClientCredentialsInterface);

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_storage_clientcredentialsinterface_checkclientcredentials, 0, 0, 1)
	ZEND_ARG_INFO(0, client_id)
	ZEND_ARG_INFO(0, client_secret)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_oauth2_storage_clientcredentialsinterface_ispublicclient, 0, 0, 1)
	ZEND_ARG_INFO(0, client_id)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(oauth2_storage_clientcredentialsinterface_method_entry) {
	PHP_ABSTRACT_ME(OAuth2_Storage_ClientCredentialsInterface, checkClientCredentials, arginfo_oauth2_storage_clientcredentialsinterface_checkclientcredentials)
	PHP_ABSTRACT_ME(OAuth2_Storage_ClientCredentialsInterface, isPublicClient, arginfo_oauth2_storage_clientcredentialsinterface_ispublicclient)
	PHP_FE_END
};
