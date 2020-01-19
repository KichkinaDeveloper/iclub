<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%teachers}}`.
 */
class m190727_181701_create_teachers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%teachers}}', [
            'id' => $this->primaryKey(),
            'ismi' => $this->string()->notNull(),
            'fannomi' => $this->string()->notNull(),
            'short_desc'=>$this->text()->notNull(),
            'description' =>$this->text()->notNull(),
            'telegrammanzili' => $this->string(),
            'facebookmanzili' => $this->string(),
            'okmanzili' => $this->string(),
            'gmailmanzili' => $this->string(),
            'image' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%teachers}}');
    }
}
