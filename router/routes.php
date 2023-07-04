<?php

use app\services\Router;

spl_autoload_register();

Router::getPage('/test', 'test');
Router::getPage('/test2', 'test2');

Router::enable();