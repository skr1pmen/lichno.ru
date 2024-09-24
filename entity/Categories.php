<?php

namespace app\entity;

use yii\db\ActiveRecord;

/**
 * @property integer id
 * @property string name
 */
class Categories extends ActiveRecord
{
    public static function getAll()
    {
        return self::find()->all();
    }
}