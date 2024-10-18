<?php

namespace app\controllers;

use app\entity\Users;
use app\models\AuthorizationForm;
use app\models\PaymentForm;
use app\models\RegistrationForm;
use app\repository\UserRepository;
use Yii;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex($page=null, $id=null)
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
            $page = 'settings';
        }


        if (!Yii::$app->user->identity->is_executor) {
            if ($page === 'services' || $page === 'purse') {
                return $this->redirect('/user');
            }
        }

        if ($page === 'purse' || $page === 'all') {
            $model = new PaymentForm();
            if ($model->load(\Yii::$app->request->post())) {
                UserRepository::replenishmentBalance($model->payment);
            }
        }

        return $this->render('index', ['page' => $page, 'model' => $model]);
    }

    public function actionAuthorization()
    {
        $this->view->title = 'Авторизация';

        if (!Yii::$app->user->isGuest) {
            return $this->redirect('/user');
        }

        $model = new AuthorizationForm();
        if ($model->load(\Yii::$app->request->post()) && $model->login()) {
            return $this->redirect('/user');
        }

        return $this->render('authorization' , ['model' => $model]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionRegistration()
    {
        $this->view->title = 'Регистрация';

        if (!\Yii::$app->user->isGuest) {
            return $this->redirect('/user');
        }

        $model = new RegistrationForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $userId = UserRepository::createUser(
                    $model->login,
                    $model->password,
                    $model->username,
                    $model->phone,
                    $model->email,
                    (boolean)$model->is_executor
                );
                if ($userId) {
                    Yii::$app->user->login(Users::findIdentity($userId));
                    return $this->redirect('/user');
                }
            }
        }

        return $this->render('registration', ['model' => $model]);
    }
}