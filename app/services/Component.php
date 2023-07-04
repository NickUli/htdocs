<?php

namespace app\services;

class Component
{
    public static function addPart(string $part): void
    {
        require_once "web/components/$part.php";
    }
}