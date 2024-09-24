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
    <div class="title">Регистрация</div>
    <?= $form->field($model, 'login')->textInput(['placeholder' => "Логин"]) ?>
    <?= $form->field($model, 'password')->passwordInput(['placeholder' => "Пароль"]) ?>
    <?= $form->field($model, 'passwordRepeat')->passwordInput(['placeholder' => "Повторить пароль"]) ?>
    <div class="form_footer">
        <?= $form->field($model, 'is_executor')->radioList([true=>"Я исполнитель", false=>"Я заказчик"],
            ["item"=> function($index, $label, $name, $checked, $value) {
                return '<label class="checkbox_label">
                    <input type="radio" class="checkbox" name="'.$name.'" value="'.$value.'">
                    <div class="custom_checkbox"></div>
                    '.$label.'
                    </label>';
            }]) ?>
    </div>
<!--    <div class="form_footer">-->
<!--        --><?php //= $form->field($model, 'is_executor',
//            ['template'=>'<div>
//                                <label class="checkbox_label">
//                                    {input}
//                                    <div class="custom_checkbox"></div>
//                                    Я исполнитель
//                                </label>
//                            </div>'])->textInput(['class'=>"checkbox", 'type'=>'radio', 'name' => 'status', 'value' => 1])?>
<!--        --><?php //= $form->field($model, 'is_executor',
//            ['template'=>'<div>
//                                <label class="checkbox_label">
//                                    {input}
//                                    <div class="custom_checkbox"></div>
//                                    Я заказчик
//                                </label>
//                            </div>'])->textInput(['class'=>"checkbox", 'type'=>'radio', 'name' => 'status', 'value' => 0])?>
<!--    </div>-->
    <?= $form->field($model, 'username')->textInput(['placeholder' => "Имя Фамилия"]) ?>
    <?= $form->field($model, 'phone')->textInput(['placeholder' => "Телефон"]) ?>
    <?= $form->field($model, 'email')->textInput(['placeholder' => "Email"]) ?>
    <?= $form->field($model, 'policy',
        ['template'=>'<div>
                                <label class="checkbox_label">
                                    {input}
                                    <div class="custom_checkbox"></div>
                                    Я даю согласие на обработку персональных данных
                                </label>
                            </div>'])->textInput(['class'=>"checkbox",'type'=>'checkbox'])?>

    <?= Html::submitButton('Регистрация', ['class' => 'btn btn_active']) ?>
    <span>Есть аккаунт? <a href="/user/authorization">Войти</a></span>
    <?php ActiveForm::end() ?>
</div>