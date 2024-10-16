<?php

namespace app\entity;

use app\repository\UserRepository;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;


/**
 * @property integer id
 * @property string login
 * @property string password
 * @property string username
 * @property string email
 * @property string phone
 * @property float rating
 * @property string links
 * @property string description
 * @property integer category_id
 * @property boolean is_executor
 */
class Users extends ActiveRecord implements IdentityInterface
{

    public static function findIdentity($id)
    {
        return new static(UserRepository::getUserById($id));
    }

    public function getId()
    {
        return $this->id;
    }

    public function validatePassword($password)
    {
        return $password === $this->password;
    }

    public function findUserByEmail($email)
    {
        return new static(UserRepository::getUserByEmail($email));
    }

    public function getCategory()
    {
        return $this->hasMany(Categories::class, ['category_id' => 'id']);
    }

    public static function findIdentityByAccessToken($token, $type = null){}

    public function getAuthKey(){}

    public function validateAuthKey($authKey){}
}