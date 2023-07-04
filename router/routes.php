<?php

use app\services\Router;

Router::getPage('/login', 'login');
Router::getPage('/register', 'register');


Router::enable();