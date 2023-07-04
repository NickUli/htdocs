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
        print_r(self::$uriList);
    }
}