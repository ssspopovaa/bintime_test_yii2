<?php

namespace app\models;

use yii\base\Model;
use app\models\Users;

/**
 * Validate editing users
 */
class EditUserValidate extends Model
{
    public $id;
    public $login;
    public $password;
    public $name;
    public $surname;
    public $email;
    public $sex;
    public $date;
    public $zip;
    public $country;
    public $city;
    public $street;
    public $house;
    public $office;
    
    public function rules()
    {
        return [
            [['name', 'login', 'password', 'surname', 'email',
              'zip', 'country', 'city', 'street', 'house'], 'required'],
            [['email'], 'email'],
            [['login'], 'string', 'min' => 4],
            [['password'], 'string', 'min' => 6],
            ['name', 'match', 'pattern' => '/^[A-Z]/'],
            ['surname', 'match', 'pattern' => '/^[A-Z]/'],
            ['login', 'validateLogin'],
            ['email', 'validateEmail'],
            
        ];
    }
    
    public function validateLogin()
    {
        $user = Users::find()->where(['=', 'login', $this->login])
                ->andWhere(['<>', 'id', $this->id])
                ->limit(1)->one();
        if ( $user['id'] ) {
            $this->addError('login', 'Такой логин уже существует');
        }
    }
    
    public function validateEmail()
    {
        $user = Users::find()->where(['=', 'email', $this->email ])
                ->andWhere(['<>', 'id', $this->id])
                ->limit(1)->one();

        if ($user['id']) {
            $this->addError('email', 'Такой email уже существует');
        }
    }

}

