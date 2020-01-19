<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tagline".
 *
 * @property int $id
 * @property string $learn_online_title
 * @property string $learn_online_value
 * @property string $expert_teachers_title
 * @property string $expert_teachers_value
 * @property string $best_classrooms_title
 * @property string $best_classrooms_value
 */
class Tagline extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tagline';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['learn_online_title', 'learn_online_value', 'expert_teachers_title', 'expert_teachers_value', 'best_classrooms_title', 'best_classrooms_value'], 'required'],
            [['learn_online_value', 'expert_teachers_value', 'best_classrooms_value'], 'string'],
            [['learn_online_title', 'expert_teachers_title', 'best_classrooms_title'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'learn_online_title' => 'Learn Online Title',
            'learn_online_value' => 'Learn Online Value',
            'expert_teachers_title' => 'Expert Teachers Title',
            'expert_teachers_value' => 'Expert Teachers Value',
            'best_classrooms_title' => 'Best Classrooms Title',
            'best_classrooms_value' => 'Best Classrooms Value',
        ];
    }
}
