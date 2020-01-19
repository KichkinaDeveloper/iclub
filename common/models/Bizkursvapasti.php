<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bizkursvapasti".
 *
 * @property int $id
 * @property string $bizningkurs
 * @property string $bizkurs_description
 * @property string $yangikurs
 * @property string $yangikurs_description
 * @property string $oqituvchi
 * @property string $oqituvchi_description
 * @property string $aloqa
 * @property string $manzil
 * @property string $telefon
 * @property string $website
 * @property string $footeroxiri
 */
class Bizkursvapasti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bizkursvapasti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bizningkurs', 'bizkurs_description', 'yangikurs', 'yangikurs_description', 'oqituvchi', 'oqituvchi_description', 'aloqa', 'manzil', 'telefon', 'website', 'footeroxiri'], 'required'],
            [['bizkurs_description', 'yangikurs_description', 'oqituvchi_description'], 'string'],
            [['bizningkurs', 'yangikurs', 'oqituvchi', 'aloqa', 'manzil', 'telefon', 'website', 'footeroxiri'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bizningkurs' => 'Bizningkurs',
            'bizkurs_description' => 'Bizkurs Description',
            'yangikurs' => 'Yangikurs',
            'yangikurs_description' => 'Yangikurs Description',
            'oqituvchi' => 'Oqituvchi',
            'oqituvchi_description' => 'Oqituvchi Description',
            'aloqa' => 'Aloqa',
            'manzil' => 'Manzil',
            'telefon' => 'Telefon',
            'website' => 'Website',
            'footeroxiri' => 'Footeroxiri',
        ];
    }
}
