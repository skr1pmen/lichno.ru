<?php

namespace app\controllers;

use app\entity\Categories;
use yii\web\Controller;

class ArticleController extends Controller
{
    public function actionIndex($page=null)
    {
        $categories = Categories::getAll();
        return $this->render('index', ['categories' => $categories]);
    }
}