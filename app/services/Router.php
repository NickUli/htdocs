<?php

namespace app\services;

class Router
{
    private static array $uriList = [];

    public static function getPage(string $uri, string $page): void
    {
        self::$uriList[] = [
            'uri' => $uri,
            'page' => $page
        ];
    }

    public static function post($uri, $class, $method): void
    {
        self::$uriList[] = [
            'post' => true,
            'uri' => $uri,
            'class' => $class,
            'method' => $method
        ];
    }

    public static function enable(): void
    {
        $query = '/' . ($_GET['route'] ?? '');
        foreach (self::$uriList as $route) {
            if ($route['uri'] === $query) {
                if ($route['post'] ?? false) {
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $class = new $route['class'];
                        $method = $route['method'];
                        $class->$method();
                    } else {
                        require_once 'web/errors/page404.php';
                    }
                } else {
                    require_once "web/pages/$route[page].php";
                }
                die();
            }
        }
        require_once 'web/errors/page404.php';
    }
}