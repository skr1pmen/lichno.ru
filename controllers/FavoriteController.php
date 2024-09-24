<?php

namespace app\controllers;

use yii\web\Controller;

class FavoriteController extends Controller
{
    public function actionIndex($page=null)
    {
        function isMobile() {
            return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
        }

        $mobile = isMobile();

        if ($mobile) {
            $page = 'all';
        }

        if (empty($id) && empty($page)) {
            $page = 'users';
        }

        return $this->render('index', ['page' => $page]);
    }
}