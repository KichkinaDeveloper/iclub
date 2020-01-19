<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "video_active".
 *
 * @property int $id
 * @property int $kurs_id
 * @property int $user_id
 *
 * @property Kurslar $kurs
 * @property User $user
 */
class VideoActive extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'video_active';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kurs_id', 'user_id'], 'required'],
            [['kurs_id', 'user_id'], 'integer'],
            [['kurs_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kurslar::className(), 'targetAttribute' => ['kurs_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kurs_id' => 'Kurs ID',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKurs()
    {
        return $this->hasOne(Kurslar::className(), ['id' => 'kurs_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
