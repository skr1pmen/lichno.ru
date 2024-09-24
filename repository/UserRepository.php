<?php

namespace app\repository;

use app\entity\Users;

class UserRepository
{
    public static function getUserById($id)
    {
        return Users::findOne(['id' => $id]);
    }

    public static function getUserByLogin($login)
    {
        return Users::findOne(['login' => $login]);
    }

    public static function getUserByEmail($email)
    {
        return Users::findOne(['email' => $email]);
    }

    public static function getUserByPhone($phone)
    {
        return Users::findOne(['phone' => $phone]);
    }

    public static function createUser($login, $password, $username, $phone, $email, $is_executor)
    {
        $user = new Users();
        $user->login = $login;
        $user->password = $password;
        $user->username = $username;
        $user->phone = $phone;
        $user->email = $email;
        $user->is_executor = $is_executor;
        $user->save();
        return $user->id;
    }
}