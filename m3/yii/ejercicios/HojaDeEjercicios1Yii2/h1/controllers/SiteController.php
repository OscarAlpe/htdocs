<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Entradas;
use yii\data\ActiveDataProvider;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionListar() {
        $s = Entradas::find()->asArray()->all();
        
        return $this->render("listar",
                  [
                      "datos"=>$s,
                  ]);
                
    }
    public function actionListar1() {
        $s = Entradas::find()->all();

        return $this->render("listarTodos",
                  [
                      "datos"=>$s,
                  ]);
    }
    
    public function actionListar2() {
        $salida= Entradas::find()->select(['texto'])->asArray()->all();
        return $this->render('listarTodos', ["datos"=>$salida]);
    }
    
    public function actionListar3() {
        $salida = Entradas::find()->select(['texto'])->all();
        return $this->render('listarTodos', ["datos"=>$salida]);
    }
    
    public function actionListar4() {
        $salida = new Entradas();
        return $this->render('listarTodos', [
                "datos"=>$salida->find()->all()
            ]);
    }
    
    public function actionListar5() {
        $salida = new Entradas();
        return $this->render('listarTodos', [
                "datos"=>$salida->findOne(1)
            ]);
    }
    
    public function actionListar6() {
        return $this->render('listarTodos',[
            "datos"=> Yii::$app->db->createCommand("SELECT * FROM entradas")->queryAll(),
        ]);
    }
    
    public function actionMostrar() {
        $dataProvider = new ActiveDataProvider([
            'query' => Entradas::find(),
        ]);
        
        return $this->render('mostrar', [
            'dataProvider' => $dataProvider,
        ]);
    }
}
