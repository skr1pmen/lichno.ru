<?php

namespace app\models;

use app\repository\UserRepository;
use yii\base\Model;

class RegistrationForm extends Model
{
    public $login;
    public $password;
    public $passwordRepeat;
    public $username;
    public $phone;
    public $email;
    public $is_executor;
    public $policy;

    public function rules()
    {
        return [
            [['login', 'password', 'passwordRepeat', 'username', 'phone', 'email', 'is_executor', 'policy'], 'required'],
            ['login', 'string', 'min' => 6, 'max' => 50],
            ['password', 'string', 'min' => 8, 'max' => 16],
            ['passwordRepeat', 'compare', 'compareAttribute' => 'password'],
            ['email', 'email'],
            ['login', 'validateLogin'],
            ['email', 'validateEmail'],
            ['phone', 'validatePhone'],
        ];
    }

    public function attributeLabels()
    {
        return [
            "login" => "Логин",
            "password" => "Пароль",
            "passwordRepeat" => "Повторённые пароль",
            "username" => "Имя Фамилия",
            "phone" => "Номер телефона",
            "email" => "Почта",
            "is_executor" => "Роль",
            "policy" => "Политика конфиденциальности",
        ];
    }

    public function validateLogin($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = UserRepository::getUserByLogin($this->login);
            if ($user) {
                $this->addError($attribute, "Пользователь с таким логином уже существует");
            }
        }
    }

    public function validateEmail($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = UserRepository::getUserByEmail($this->email);
            if ($user) {
                $this->addError($attribute, "Пользователь с такой почтой уже существует");
            }
        }
    }

    public function validatePhone($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = UserRepository::getUserByLogin($this->phone);
            if ($user) {
                $this->addError($attribute, "Пользователь с таким номером телефона уже существует");
            }
        }
    }
}