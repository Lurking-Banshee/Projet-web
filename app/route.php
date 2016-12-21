<?php
/*
	Routes
	controller needs to be registered in dependency.php
*/

$app->get('/', 'App\Controllers\HomeController:dispatch')->setName('homepage');

$app->get('/signup', 'App\Controllers\HomeController:signup')->setName('signup');

$app->get('/users', 'App\Controllers\UserController:dispatch')->setName('userpage');