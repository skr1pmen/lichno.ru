<?php

namespace app\models;

use app\repository\UserRepository;
use Yii;
use yii\base\Model;

class AuthorizationForm extends Model
{

    public $login;
    public $password;
    public $rememberMe = false;
    private $_user = false;

    public function rules()
    {
        return [
            [['login', 'password'], 'required'],
            ['rememberMe', 'boolean'],
            ['password', 'validatePassword'],
        ];
    }

    public function attributeLabels()
    {
        return [
            "login" => "Логин",
            "password" => "Пароль"
        ];
    }

    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Ошибка в логине или пароле.');
            }
        }
    }
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = UserRepository::getUserByLogin($this->login);
        }
        return $this->_user;
    }

    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(),$this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }
}