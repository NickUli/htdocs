<?php

namespace app\controllers;

use app\services\Debug;
class Authorize
{
    public function register($data = [], $files = ''): void
    {
        Debug::getTable();

        /**
         *  Validation of field!!!
         */

        $email = $data['email'];
        $username = $data['username'];
        $surname = $data['surname'];
        $password = $data['password'];
        $password_confirm = $data['password_confirm'];

        $avatar = $files['avatar'];
        $fileName = time() . '_' . $avatar['name'];

        if (move_uploaded_file($avatar['tmp_name'], "uploads/avatars/$fileName")) {

        } else {
            die('Ошибка загрузки аватарки');
        }
    }
}