<?php

use app\services\Router;

spl_autoload_register();

var_dump($_GET['url']);
Router::test();