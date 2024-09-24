<?php
/**
 * @var $model
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="page">
    <?php $form = ActiveForm::begin([
        'options' => [
            'class' => 'user_form_auth',
        ],
        'fieldConfig' => [
            'template' => "{input}<br>{error}",
            'labelOptions' => ['class' => 'label'],
            'inputOptions' => ['class' => 'input'],
            'errorOptions' => ['class' => 'error'],
        ],
    ]) ?>
    <div class="title">Вход</div>
    <?= $form->field($model, 'login')->textInput(['placeholder' => "Логин"]) ?>
    <?= $form->field($model, 'password')->passwordInput(['placeholder' => "Пароль"]) ?>
    <div class="form_footer">
        <?= $form->field($model, 'rememberMe',
            ['template'=>'<div>
                                <label class="checkbox_label">
                                    {input}
                                    <div class="custom_checkbox"></div>
                                    Запомнить меня
                                </label>
                            </div>'])->textInput(['class'=>"checkbox",'type'=>'checkbox'])?>

        <!--        <div class="checkbox">-->
<!--            <span class="checkbox_custom"></span>-->
<!--            --><?php //= $form->field($model, 'rememberMe')->checkbox(['label' => "Запомнить меня"]) ?>
<!--        </div>-->
        <a href="">Забыли пароль?</a>
    </div>

    <?= Html::submitButton('Войти', ['class' => 'btn btn_active']) ?>
    <span>Нет аккаунта? <a href="/user/registration">Зарегистрироваться</a></span>
    <?php ActiveForm::end() ?>
</div>

