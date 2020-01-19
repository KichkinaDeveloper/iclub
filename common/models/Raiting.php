<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "raiting".
 *
 * @property int $id
 * @property int $user_id
 * @property int $pro_id
 * @property string $data_create
 * @property int $raiting
 */
class Raiting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'raiting';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'pro_id'], 'required'],
            [['user_id', 'pro_id', 'raiting'], 'integer'],
            [['data_create'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'pro_id' => 'Pro ID',
            'data_create' => 'Data Create',
            'raiting' => 'Raiting',
        ];
    }
}
