<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "wishlist".
 *
 * @property int $id
 * @property int $user_id
 * @property int $pro_id
 * @property string $data_create
 * @property int $status
 */
class Wishlist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wishlist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'pro_id'], 'required'],
            [['user_id', 'pro_id', 'status'], 'integer'],
            [['data_create'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'pro_id' => Yii::t('app', 'Pro ID'),
            'data_create' => Yii::t('app', 'Data Create'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
