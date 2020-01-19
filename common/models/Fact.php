<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "fact".
 *
 * @property int $id
 * @property string $kitoblar
 * @property string $talabalar
 * @property string $tajriba
 * @property string $oqutuvchilar
 */
class Fact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kitoblar', 'talabalar', 'tajriba', 'oqutuvchilar'], 'required'],
            [['kitoblar', 'talabalar', 'tajriba', 'oqutuvchilar'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kitoblar' => 'Kitoblar',
            'talabalar' => 'Talabalar',
            'tajriba' => 'Tajriba',
            'oqutuvchilar' => 'Oqutuvchilar',
        ];
    }
}
