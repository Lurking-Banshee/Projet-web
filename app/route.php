<?php
/*
	Routes
	controller needs to be registered in dependency.php
*/

$app->get('/', 'App\Controllers\HomeController:dispatch')->setName('homepage');

$app->get('/signup', 'App\Controllers\HomeController:signup')->setName('signup');

$app->post('/signup', 'App\Controllers\HomeController:addUser');

$app->get('/signin', 'App\Controllers\HomeController:signin')->setName('signin');

$app->post('/signin', 'App\Controllers\HomeController:loginUser');

$app->get('/show/{id}', 'App\Controllers\HomeController:show')->setName('show');

$app->post('/ajax/addEpisode/{id}','App\Controllers\AjaxController:addEpisode');

$app->post('/ajax/deleteEpisode/{id}','App\Controllers\AjaxController:deleteEpisode');

$app->get('/search', 'App\Controllers\HomeController:search')->setName('search');

$app->post('/search', 'App\Controllers\HomeController:resultSearch')->setName('resultSearch');

$app->get('/profile', 'App\Controllers\HomeController:profile')->setName('profile');

$app->get('/users', 'App\Controllers\UserController:dispatch')->setName('userpage');

$app->get('/logout', 'App\Controllers\HomeController:logout')->setName('logout');

$app->get('/add', 'App\Controllers\HomeController:addEpisode')->setName('addEpisode');