<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionRegister()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return ['message' => 'hello world'];
    }
}