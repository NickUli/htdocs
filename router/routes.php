<?php

use app\services\Router;
use app\controllers\Auth;

Router::getPage('/', 'home');
Router::getPage('/login', 'login');
Router::getPage('/register', 'register');

Router::post('/auth/register', Auth::class, 'register');

Router::enable();