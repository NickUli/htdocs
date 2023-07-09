<?php

use app\services\Router;
use app\controllers\Authorize;

Router::page('/', 'home');
Router::page('/login', 'login');
Router::page('/register', 'register');
Router::page('/profile', 'profile');

Router::post('/auth/register', Authorize::class, 'register', true, true);

Router::enable();