<?php
session_start();

$GLOBALS['config'] = array(
	'mysql' => array(
		//heroku credentials
		// 'host' => '23.21.55.25',
		// 'username' => 'dekixmpqcprkpu',
		// 'password' => 'MNbCC56WQ1ZaNRqX8GHmTBaUv-',
		// 'db' => 'd3fn4lugik4eop',
		// 'port' => '5432'
		'host' => '107.180.69.1788',
		'username' => 'primpyma_adm',
		'password' => 'D3@2016!',
		'db' => 'primpyma_test'
	),
	'remember' => array(
		'cookie_name' => 'hash',
		'cookie_expiry' => 604800
	),
	'session' => array(
		'session_name' => 'user',
		'token_name' => 'token'
	),
);

spl_autoload_register(function($class){
	if(file_exists(__DIR__ . "/../classes/" . $class . ".php"))
		require_once( __DIR__ . "/../classes/" . $class . ".php");
});

require_once __DIR__ . "/../functions/sanitize.php";