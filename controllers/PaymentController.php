<?php

namespace app\controllers;

use app\repository\UserRepository;
use yii\web\Controller;

class PaymentController extends Controller
{
    public function actionSuccess($OutSum, $InvId, $SignatureValue, $IsTest=null, $Culture)
    {
        if ($IsTest) {
            var_dump("Тестовый платёж прошёл успешно");
            sleep(10);
            $this->redirect('/');
        }
        UserRepository::addingBalance($OutSum);
        $this->redirect('/');
    }
}