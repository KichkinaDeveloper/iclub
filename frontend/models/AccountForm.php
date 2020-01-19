<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;

class AccountForm extends Model{

    public $username;    
    public $fullname;
    public $old_password;
    public $avatar;
    public $password;
    public $confirm_password;

    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'string', 'max' => 255],

            ['fullname', 'trim'],
            ['fullname', 'string', 'min' => 6, 'max' => 255],

            ['old_password', 'string', 'min' => 6],            
            ['old_password', 'findPasswords'],

            ['password', 'string', 'min' => 6],

            ['confirm_password', 'compare', 'compareAttribute'=>'password', 'message'=> 'Parollar mos kelmayapti' ],

            ['avatar', 'string'],
  
        ];
    }

    public static function getForm($id)
    {
        $admin = User::findOne($id);
        $form = new self();
        $form->username = $admin->username;
        $form->fullname = $admin->fullname;

        return $form;
    }

    public function findPasswords($attribute, $params) {
        $user = User::findOne(Yii::$app->user->identity->id);
        $passwords = $user->password_hash;

        if (!Yii::$app->security->validatePassword($this->old_password, $passwords)) {
            $this->addError($attribute, 'Eski parol xato!');
        }
    }

}   
?>