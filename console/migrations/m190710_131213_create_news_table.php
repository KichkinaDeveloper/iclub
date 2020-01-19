<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m190710_131213_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' =>$this->primaryKey(),
            'author' =>$this->string()->notNull(),
            'title' =>$this->string()->notNull(),
            'short_desc'=>$this->text()->notNull(),
            'description' =>$this->text()->notNull(),
            'date'=>$this->date(),
            'image' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}
