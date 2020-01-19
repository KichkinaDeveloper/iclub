<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%aboutus}}`.
 */
class m190728_175200_create_aboutus_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%aboutus}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(50)->notNull(),
            'description' => $this->text()->notNull(),
            'video_url' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%aboutus}}');
    }
}
