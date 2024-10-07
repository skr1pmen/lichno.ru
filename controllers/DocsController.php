<?php

namespace app\controllers;

use yii\web\Controller;

class DocsController extends Controller
{
    public function actionPolicy()
    {
        return $this->redirect('privacy_policy.pdf');
    }

    public function actionOffer()
    {
        return $this->redirect('public_offer.pdf');
    }
}