<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tagline}}`.
 */
class m190728_122506_create_tagline_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tagline}}', [
            'id' => $this->primaryKey(),
            'learn_online_title' => $this->string(50)->notNull(),
            'learn_online_value' => $this->text()->notNull(),
            'expert_teachers_title' => $this->string(50)->notNull(),
            'expert_teachers_value' => $this->text()->notNull(),
            'best_classrooms_title' => $this->string(50)->notNull(),
            'best_classrooms_value' => $this->text()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tagline}}');
    }
}
