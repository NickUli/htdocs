<?php

namespace app\controllers;

use app\services\Router;

class Authorize
{
    public function register($data = [], $files = ''): void
    {

        /**
         *  Validation of field!!!
         */

        $email = $data['email'];
        $username = $data['username'];
        $surname = $data['surname'];
        $password = $data['password'];
        $password_confirm = $data['password_confirm'];

        if ($password !== $password_confirm) {
            Router::error(500);
            die();
        }

        $avatar = $files['avatar'];
        $fileName = time() . '_' . $avatar['name'];
        $path = "uploads/avatars/$fileName";

        if (move_uploaded_file($avatar['tmp_name'], $path)) {
            $user = \R::dispense('users');
            $user->email = $email;
            $user->username = $username;
            $user->surname = $surname;
            $user->avatar = "/$path";
            $user->password = password_hash($password, PASSWORD_DEFAULT);
            \R::store($user);
            Router::redirect('/login');
        } else {
            Router::error(500);
        }
    }
}