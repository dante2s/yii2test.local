<h1>Авторизация</h1>
<?php
use \yii\widgets\ActiveForm;
$form = ActiveForm::begin(['class' =>'form-horizontal']);
?>

<?
echo $form->field($login_model,'email')->textInput(['autofocus'=>true]);
echo $form->field($login_model,'password')->passwordInput();
?>
<div>
    <button type="submit" class="btn btn-primary">Авторизация</button>
</div>
<?
ActiveForm::end();
?>
