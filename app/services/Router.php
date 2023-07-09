<?php

namespace app\services;

class Router
{
    private static array $uriList = [];

    public static function page(string $uri, string $page): void
    {
        self::$uriList[] = [
            'uri' => $uri,
            'page' => $page
        ];
    }

    public static function post($uri, $class, $method, $formdata = false, $files = false): void
    {
        self::$uriList[] = [
            'post' => true,
            'uri' => $uri,
            'class' => $class,
            'method' => $method,
            'formdata' => $formdata,
            'files' => $files
        ];
    }

    public static function enable(): void
    {
        $query = '/' . ($_GET['route'] ?? '');
        foreach (self::$uriList as $route) {
            if ($route['uri'] === $query) {
//                echo $_SERVER['REQUEST_METHOD'];
//                die();
                if ($route['post'] ?? false) {
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $class = new $route['class'];
                        $method = $route['method'];
                        if ($route['formdata'] && $route['files']) {
                            $class->$method($_POST, $_FILES);
                        } elseif ($route['formdata'] && !$route['files']) {
                            $class->$method($_POST);
                        } else {
                            $class->$method();
                        }
                    } else {
                        self::error('404');
                    }
                } else {
                    require_once "web/pages/$route[page].php";
                }
                die();
            }
        }
        self::error('404');
    }

    private static function error($error): void
    {
        require_once "web/errors/page$error.php";
    }

    private static function redirect() {}
}