<?php

//class MyCustomStorage implements OAuth2\Storage\AccessTokenInterface, OAuth2\Storage\ClientCredentialsInterface, OAuth2\Storage\AuthorizationCodeInterface
//{
	
//}


$token = new OAuth2\Encryption\Jwt;
$key = "hehy54y643";
$str = "hello world";
$enc = $token->encode($str, $key);
$dec = $token->decode($enc, $key, true);

var_dump($key, $str, $enc, $dec);

?>