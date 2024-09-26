<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class FavoriteController extends Controller
{
    public function actionIndex($page=null)
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('user/authorization');
        }

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