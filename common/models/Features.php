<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "features".
 *
 * @property int $id
 * @property string $title
 * @property string $short_desc
 */
class Features extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'features';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'short_desc'], 'required'],
            [['title','short_desc'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'title' => 'Sarlavha',
            'short_desc' => 'Izoh',
        ];
    }
}
