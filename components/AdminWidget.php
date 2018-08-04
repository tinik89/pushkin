<?php

/**
 * Created by PhpStorm.
 * User: TIN
 * Date: 03.08.2018
 * Time: 15:34
 */

namespace app\components;

use app\models\UserIdentity;
use yii\base\Widget;
use app\models\forms\AddAdmin;
use Yii;

class AdminWidget extends Widget
{
    public function run()
    {
        $addAdmin = new AddAdmin();


        return $this->render('addAdmin', ['model' => $addAdmin]);


    }
}

