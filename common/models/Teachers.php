<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "teachers".
 *
 * @property int $id
 * @property string $ismi
 * @property string $fannomi
 * @property string $short_desc
 * @property string $description
 * @property string $telegrammanzili
 * @property string $facebookmanzili
 * @property string $okmanzili
 * @property string $gmailmanzili
 * @property string $image
 */
class Teachers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $file;

    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ismi', 'fannomi', 'short_desc', 'description'], 'required'],
            [['short_desc', 'description'], 'string'],
            [['ismi', 'fannomi', 'telegrammanzili', 'facebookmanzili', 'okmanzili', 'gmailmanzili', 'image'], 'string', 'max' => 255],
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
            'ismi' => 'Ismi',
            'fannomi' => 'Fannomi',
            'short_desc' => 'Short Desc',
            'description' => 'Description',
            'telegrammanzili' => 'Telegrammanzili',
            'facebookmanzili' => 'Facebookmanzili',
            'okmanzili' => 'Okmanzili',
            'gmailmanzili' => 'Gmailmanzili',
            'image' => 'Image',
        ];
    }
}
