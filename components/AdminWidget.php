<?php

/**
 * Created by PhpStorm.
 * User: TIN
 * Date: 03.08.2018
 * Time: 15:34
 */

namespace app\components;

use yii\base\Widget;
use app\models\AddAdmin;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use Yii;

class AdminWidget extends Widget
{
    public function run()
    {
        $addAdmin = new AddAdmin();
        if( Yii::$app->request->post('AddAdmin')){
            $formData = Yii::$app->request->post();
            $formData['AddAdmin']['password'] = md5($formData['AddAdmin']['password']);
            if ($addAdmin->load($formData)) {
                $message = 'админ получен!';
                if ($addAdmin->save()) {
                    $message .= 'админ добавлен!';

                }
            }
        }

        return $this->render('addAdmin', ['model' => $addAdmin]);


    }
}

