<?php

use app\services\Router;
use app\controllers\Authorize;

Router::page('/', 'home');
Router::page('/login', 'login');
Router::page('/register', 'register');
Router::page('/profile', 'profile');
Router::page('/admin', 'admin');

Router::post('/auth/register', Authorize::class, 'register', true, true);
Router::post('/auth/login', Authorize::class, 'login', true);
Router::post('/auth/logout', Authorize::class, 'logout');

Router::enable();