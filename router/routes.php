<?php

use app\services\Router;
use app\controllers\Authorize;

Router::getPage('/', 'home');
Router::getPage('/login', 'login');
Router::getPage('/register', 'register');

Router::post('/auth/register', Authorize::class, 'register');

Router::enable();