<h1>Регистрация</h1>
<?php
    use \yii\widgets\ActiveForm;
    $form = ActiveForm::begin(['class' =>'form-horizontal']);
?>

<?
    echo $form->field($model,'email')->textInput(['autofocus'=>true]);
    echo $form->field($model,'password')->passwordInput();
?>
<div>
    <button type="submit" class="btn btn-primary">Регистрация</button>
</div>
<?
    ActiveForm::end();
?>
