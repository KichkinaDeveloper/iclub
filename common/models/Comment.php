<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property int $id
 * @property string $author
 * @property string $job
 * @property string $text
 * @property string $image
 */
class Comment extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author', 'job', 'text', 'image'], 'required'],
            [['author', 'job', 'text', 'image'], 'string', 'max' => 255],
            ['file', 'file', 'skipOnEmpty' => true]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Author',
            'job' => 'Job',
            'text' => 'Text',
            'image' => 'Image',
        ];
    }
}
