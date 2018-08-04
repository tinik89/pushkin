<?php
/**
 * Created by PhpStorm.
 * User: TIN
 * Date: 31.07.2018
 * Time: 22:59
 */

namespace app\controllers;
use yii\web\Controller;
use Yii;

class AppController extends Controller
{

    public static function goLogin()
    {
        return Yii::$app->getResponse()->redirect('/site/login');
    }

}