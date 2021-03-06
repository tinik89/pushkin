<?php

namespace app\models\forms;

use yii\base\Model;
use app\models\UserIdentity;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $auth_key
 * @property string $access_token
 */
class AddAdmin extends Model
{

    public $username;
    public $password;

    private $_user = false;
    /**
     * {@inheritdoc}
     */
//    public static function tableName()
//    {
//        return 'user';
//    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username','password'], 'required'],
            ['username', 'string'],
            ['username', 'validateUsername'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Логин',
            'password' => 'Пароль',
        ];
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = UserIdentity::findByUsername($this->username);
        }

        return $this->_user;
    }

    public function validateUsername($attribute, $params){
        $user = $this->getUser();

        if ($user) {
            $this->addError($attribute, 'Администратор с таким логином уже существует.');
        }
    }
}
