<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Signup;
use app\models\Login;
use app\models\Feedback;
use yii\data\ActiveDataProvider;

class SiteController extends Controller
{
    public function actionIndex(){
        if(Yii::$app->user->isGuest){
            return $this->redirect(['login']);
        }
        else {
            $model = new Feedback();
            $model->user_id = Yii::$app->user->identity->id;
            if ($model->load(Yii::$app->request->post())) {
                if ($model->save()) {
                    Yii::$app->session->setFlash(
                        'success',
                        true
                    );
                    return $this->refresh();
                } else {
                    Yii::$app->session->setFlash(
                        'success',
                        false
                    );
                }
            }
            return $this->render('index', ['model' => $model]);
        }
    }
    public function actionLogout()
    {
        if(!Yii::$app->user->isGuest)
        {
            Yii::$app->user->logout();
            return $this->redirect(['login']);
        }
    }
    public function actionSignup(){
        $model = new Signup();
        if(isset($_POST['Signup'])){
            $model->attributes = Yii::$app->request->post('Signup');
            if($model->validate() &&  $model->signup()){
                return $this->goHome();
            }
        }
        return $this->render('signup', ['model'=>$model]);
    }
    public function actionLogin(){
        if(!Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }

        $login_model = new Login();

        if( Yii::$app->request->post('Login'))
        {
            $login_model->attributes = Yii::$app->request->post('Login');

            if($login_model->validate())
            {
                Yii::$app->user->login($login_model->getUser());
                return $this->goHome();
            }
        }

        return $this->render('login',['login_model'=>$login_model]);
    }
    public function actionPosts(){
        $dataProvider = new ActiveDataProvider([
            'query' => Feedback::find()->orderBy('name DESC'),
        ]);
        $this->view->title = 'Posts List';
        return $this->render('posts', ['listDataProvider' => $dataProvider]);
    }
    public function actionUserposts(){
        $dataProvider = new ActiveDataProvider([
            'query' => Feedback::find()->where(['user_id'=>Yii::$app->user->identity->id])->orderBy('name DESC'),
        ]);
        $this->view->title = 'User posts List';
        return $this->render('posts', ['listDataProvider' => $dataProvider]);
    }

}
