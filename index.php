<?php

use app\services\App;

spl_autoload_register();

App::init();

require_once __DIR__ . '/router/routes.php';