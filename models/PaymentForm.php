<?php

namespace app\models;

use yii\base\Model;

class PaymentForm extends Model
{
    public $payment;

    public function rules(){
        return [
            ['payment', 'required'],
            ['payment', 'integer', 'min' => 1],
        ];
    }


    public function attributeLabels()
    {
        return [
            "payment" => "Сумма пополнения"
        ];
    }
}