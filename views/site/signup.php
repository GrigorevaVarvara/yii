<?php
 
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
 
$this->title = 'Signup';
?>
<div class="entrance">
    <h2 class="pink">регистрация</h2>
    <div class="div_input">
        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
        <?= $form->field($model, 'username')->textInput(['class' => '']) ?>
        <?= $form->field($model, 'email')->textInput(['class' => '']) ?>
        <?= $form->field($model, 'password_hash')->passwordInput(['class' => '']) ?>
        <div class="div_btn">
            <?= Html::submitButton('Зарегистрироваться', ['class' => 'start_btn', 'name' => 'signup-button']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>