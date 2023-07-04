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

    public static function enable(): void
    {
        $query = '/' . ($_GET['route'] ?? '');
        foreach (self::$uriList as $route) {
            if ($route['uri'] === $query) {
                require_once "web/pages/$route[page].php";
                die();
            }
        }
        require_once 'web/errors/page404.php';
    }
}