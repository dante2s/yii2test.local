<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<div class="news-item">
    <h2><?= Html::encode($model->name) ?></h2>
    <p>Фамилия: <?= HtmlPurifier::process($model->surname) ?></p>
    <p>Телефон: <?= HtmlPurifier::process($model->phone) ?></p>
    <p>E-mail: <?= HtmlPurifier::process($model->email) ?></p>
    <p>Сообщение: <?= HtmlPurifier::process($model->text) ?></p>
</div>