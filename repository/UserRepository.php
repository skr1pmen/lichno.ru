<?php

namespace app\repository;

use app\entity\Users;
use Yii;

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

    public static function replenishmentBalance($balance)
    {
        $login = "Lichno.com";
        $pass1  = "kCO36aXqnxI7z62EznaV";
        $invId = rand(1, 2147483647);
        $desc = "Пополнение баланса";
        $isTest = 0;
        $signatureValue = md5("$login:$balance:$invId:$pass1");

        Yii::$app->response->redirect("https://auth.robokassa.ru/Merchant/Index.aspx?MerchantLogin=$login&OutSum=$balance&InvId=$invId&Description=$desc&SignatureValue=$signatureValue&IsTest=$isTest");
    }


    public static function addingBalance($balance)
    {
        $user = self::getUserById(Yii::$app->user->id);
        $user->balance += $balance;
        $user->update();
    }
}