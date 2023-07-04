<?php

use app\services\Router;

Router::getPage('/test', 'test');
Router::getPage('/test2', 'test2');

Router::enable();