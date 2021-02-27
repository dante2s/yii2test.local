<?php

namespace app\models;
use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    public function setPassword($password){
        $this->password = Yii::$app->getSecurity()->generatePasswordHash($password);
    }
    public function validatePassword($password)
    {
        if(Yii::$app->getSecurity()->validatePassword($password, $this->password)) {
            return true;
        }
        else{
            return false;
        }
    }
    //=============================================
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    public function getId()
    {
        return $this->id;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {

    }

    public function getAuthKey()
    {

    }

    public function validateAuthKey($authKey)
    {

    }
}
