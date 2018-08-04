<?php
/**
 * Created by PhpStorm.
 * User: TIN
 * Date: 04.08.2018
 * Time: 21:02
 */

namespace app\controllers;

use app\models\UserIdentity;
use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\forms\AddAdmin;
use yii\widgets\ActiveForm;

class AjaxController extends AppController
{
    public $layout = 'ajax';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'layout' => 'login',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionAddAdmin()
    {

        $addAdmin = new AddAdmin();
        $formData = Yii::$app->request->post();
        if (Yii::$app->request->isAjax && $addAdmin->load($formData)) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            if (!empty ($errorForm = ActiveForm::validate($addAdmin))) {
                return $errorForm;
            } elseif($formData['identSubmit'] == 'submit') {
                $user = new UserIdentity();
                $formData['AddAdmin']['password'] = md5($formData['AddAdmin']['password']);
                if ($user->load($formData, 'AddAdmin')) {
                    if ($user->save()) {
                        $message = 'Админ успешно добавлен!';
                    } else {
                        $message = 'Что-то пошло не так, данные не сохранены!';
                    }
                }
            } else {
                $message = 'не пришли контрольные данные формы!';
            }
            return $this->render('addAdmin',[
                'message'=> $message,
            ]);
        }


    }
}