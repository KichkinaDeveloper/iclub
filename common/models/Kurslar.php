<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kurslar".
 *
 * @property int $id
 * @property string $title
 * @property int $summa
 * @property string $place
 * @property int $student_soni
 * @property string $start_day
 * @property string $short_desc
 * @property string $description
 * @property string $date
 * @property int $status
 * @property string $image
 *
 * @property VideoActive[] $videoActives
 * @property Vidio[] $vidios
 */
class Kurslar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $file;

    public static function tableName()
    {
        return 'kurslar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'summa', 'place', 'student_soni', 'start_day', 'short_desc', 'description', 'image'], 'required'],
            [['summa', 'student_soni', 'status'], 'integer'],
            [['short_desc', 'description'], 'string'],
            [['date'], 'safe'],
            [['title', 'place', 'start_day', 'image'], 'string', 'max' => 255],
            ['file', 'file', 'skipOnEmpty' => true],
            [['image'], 'file', 'skipOnEmpty' => false],
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
            'summa' => 'Summa',
            'place' => 'Place',
            'student_soni' => 'Student Soni',
            'start_day' => 'Start Day',
            'short_desc' => 'Short Desc',
            'description' => 'Description',
            'date' => 'Date',
            'status' => 'Status',
            'image' => 'Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVideoActives()
    {
        return $this->hasMany(VideoActive::className(), ['kurs_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVidios()
    {
        return $this->hasMany(Vidio::className(), ['kurslar_id' => 'id']);
    }
}
