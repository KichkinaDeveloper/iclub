<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%video_active}}`.
 */
class m190720_213528_create_video_active_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%video_active}}', [
            'id' => $this->primaryKey(),
            'kurs_id' => $this->integer(5)->notNull(),
            'user_id' => $this->integer(7)->notNull(),
        ]);
        $this->addForeignKey('video_active-kurslar', 'video_active', 'kurs_id', 'kurslar', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('video_active-user', 'video_active', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%video_active}}');
    }
}
