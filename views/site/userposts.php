<?php
use yii\widgets\ListView;

echo '<p>'.$listDataProvider->sort->link('name').'</p>';
echo '<p>'.$listDataProvider->sort->link('surname').'</p>';
echo '<p>'.$listDataProvider->sort->link('phone').'</p>';
echo '<p>'.$listDataProvider->sort->link('email').'</p>';
echo ListView::widget([
    'dataProvider' => $listDataProvider,
    'itemView' => '_list',
]);