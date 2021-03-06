<?php

namespace backend\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;

class CategoryController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['Author'],
                    ],
                ],
            ],
        ];
    }
    public function actionIndex()
    {
        return $this->render('index');
    }
}

?>