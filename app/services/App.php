<?php

namespace app\services;

class App
{
    public static function init(): void
    {
        self::getLibs();
        self::getConnection();
    }

    private static function getLibs(): void
    {
        $config = require_once 'config/libs.php';
        foreach ($config['libs'] as $lib) {
            require_once "libs/$lib.php";
        }
    }

    private static function getConnection(): void
    {
        $config = require_once 'config/db.php';
        if ($config['enable']) {
            \R::setup("mysql:
            host=$config[host]';
            port=$config[port];
            dbname=$config[dbname]",
                $config['username'],
                $config['password']);
            if (!\R::testConnection()) {
                die('Error database connect');
            }
        }
    }
}