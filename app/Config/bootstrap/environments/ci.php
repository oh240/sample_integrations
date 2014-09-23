<?php
Environment::configure('ci',true,[
	'MYSQL_DB_HOST' => 'localhost',
	'MYSQL_USERNAME' => 'root',
	'MYSQL_PASSWORD' => 'password',
	'MYSQL_DB_NAME' => 'test_blog',
	'MYSQL_TEST_DB_TEST' => 'test_blog',
	'MYSQL_PREFIX' => '',
],function(){
	CakePlugin::load('Bdd');
});