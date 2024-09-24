<?php

namespace app\controllers;

use app\entity\Categories;
use yii\web\Controller;

class SiteController extends Controller
{    public function actionIndex()
    {
        $categories = Categories::getAll();
        return $this->render('index', ['categories' => $categories]);
    }
}
