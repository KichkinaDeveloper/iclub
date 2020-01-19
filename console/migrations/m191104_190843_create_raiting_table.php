<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%raiting}}`.
 */
class m191104_190843_create_raiting_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%raiting}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(10)->notNull(),
            'pro_id' => $this->integer(2)->notNull(),
            'data_create' => $this->date(),
            'raiting' => $this->integer(2)->defaultValue(0)
        ]);
    }   

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%raiting}}');
    }
}
