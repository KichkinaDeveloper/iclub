<?php


namespace frontend\models;

use yii\base\Model;


class SearchForm extends Model {

    public $text;

    public function rules (){
        return [
            ['text', 'required', 'message' => \Yii::t("app", "{attribute} cannot be blank.")],
            ['text', 'string'],
        ];
    }
}