<h1>Главная</h1>
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
    <?php if (Yii::$app->session->getFlash('success')): ?>
        <p>Данные формы прошли валидацию</p>
    <?php else: ?>
        <p>Данные формы не прошли валидацию</p>
    <?php endif; ?>
<?php endif; ?>

<div class="page-feedback">
    <?php $form = ActiveForm::begin(['id' => 'feedback-form','class' =>'form-horizontal', 'options' => ['novalidate' => '']]); ?>
    <?= $form->field($model, 'name')->textInput(); ?>
    <?= $form->field($model, 'surname')->textInput(); ?>
    <?= $form->field($model, 'phone')->textInput(); ?>
    <?= $form->field($model, 'email')->textInput(); ?>
    <?= $form->field($model, 'text')->textarea(['rows' => 5]); ?>
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']); ?>
    <?php ActiveForm::end(); ?>
</div>