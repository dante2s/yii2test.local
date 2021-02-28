<?php


namespace app\models;
use yii\db\ActiveRecord;

class Feedback extends ActiveRecord
{

    public function attributeLabels() {
        return [
            'name' => 'Ваше имя',
            'surname' => 'Ваша фамилия',
            'phone' => 'Ваше телефон',
            'email' => 'Ваш email',
            'text' => 'Сообщение',
        ];
    }

    public function rules() {
        return [
            ['name', 'required', 'message' => 'Поле «Ваше имя» обязательно для заполнения'],
            ['surname', 'required', 'message' => 'Поле «Ваша фамилия» обязательно для заполнения'],
            ['phone', 'required', 'message' => 'Поле «Ваш телефон» обязательно для заполнения'],
            ['email', 'required', 'message' => 'Поле «Ваш email» обязательно для заполнения'],
            ['email', 'email', 'message' => 'Поле «Ваш email» должно быть адресом почты'],
            ['text', 'required', 'message' => 'Поле «Сообщение» обязательно для заполнения'],
        ];
    }
}