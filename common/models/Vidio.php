<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vidio".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $videoname
 * @property int $status
 * @property int $kurslar_id
 *
 * @property Kurslar $kurslar
 */
class Vidio extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vidio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'kurslar_id'], 'required'],
            [['status', 'kurslar_id'], 'integer'],
            [['title', 'description', 'videoname'], 'string', 'max' => 255],
            [['kurslar_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kurslar::className(), 'targetAttribute' => ['kurslar_id' => 'id']],
            ['file', 'file', 'skipOnEmpty' => true],
            [['videoname'], 'file', 'extensions' => 'jpg,png,gif,mp4,mov,3gp', 'skipOnEmpty' => false],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'videoname' => 'Videoname',
            'status' => 'Status',
            'kurslar_id' => 'Kurslar ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKurslar()
    {
        return $this->hasOne(Kurslar::className(), ['id' => 'kurslar_id']);
    }
}
