<?php

session_start();

use app\services\App;
use app\services\Debug;

spl_autoload_register();

App::init();

require_once __DIR__ . '/router/routes.php';