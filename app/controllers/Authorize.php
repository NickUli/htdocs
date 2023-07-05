<?php

namespace app\controllers;

class Authorize
{
    public function register($data, $files): void
    {
        $email = $data['email'];
        $username = $data['username'];
        $surname = $data['surname'];
        $password = $data['password'];
        $password_confirm = $data['password_confirm'];

        $avatar = $files['avatar'];
    }
}