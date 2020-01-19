<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%wishlist}}`.
 */
class m191031_133442_create_wishlist_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%wishlist}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(10)->notNull(),
            'pro_id' => $this->integer(2)->notNull(),
            'data_create' => $this->date(),
            'status' => $this->integer()->defaultValue(0)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%wishlist}}');
    }
}
