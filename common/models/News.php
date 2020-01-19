<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $author
 * @property string $title
 * @property string $short_desc
 * @property string $description
 * @property string $date
 * @property string $image
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file;
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author', 'title', 'short_desc', 'description', 'image'], 'required'],
            [['short_desc', 'description'], 'string'],
            [['date'], 'safe'],
            [['author', 'title', 'image'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'short_desc' => 'Short Desc',
            'description' => 'Description',
            'date' => 'Date',
            'image' => 'Image',
        ];
    }
}
