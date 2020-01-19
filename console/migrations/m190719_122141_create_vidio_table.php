<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vidio}}`.
 */
class m190719_122141_create_vidio_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vidio}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->string(),
            'videoname' => $this->string()->notNull(),
            'status' => $this->smallInteger()   ->defaultValue(0),
            'kurslar_id' => $this->integer(5)->notNull(),
        ]);
        $this->addForeignKey('vidio-kurslar', 'vidio', 'kurslar_id', 'kurslar', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%vidio}}');
    }
}
