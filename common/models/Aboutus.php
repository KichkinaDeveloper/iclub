<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "aboutus".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $video_url
 */
class Aboutus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aboutus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'video_url'], 'required'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 50],
            [['video_url'], 'string', 'max' => 255],
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
            'video_url' => 'Video Url',
        ];
    }
}
