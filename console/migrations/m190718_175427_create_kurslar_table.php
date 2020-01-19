<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%kurslar}}`.
 */
class m190718_175427_create_kurslar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%kurslar}}', [
            'id' => $this->primaryKey(),
            'title' =>$this->string()->notNull(),
            'summa' => $this->integer()->notNull(),
            'place' => $this->string()->notNull(),
            'student_soni' => $this->integer()->notNull(),
            'start_day' => $this->string()->notNull(),
            'short_desc'=>$this->text()->notNull(),
            'description' =>$this->text()->notNull(),
            'date'=>$this->date(),
            'status'=>$this->smallInteger()->notNull()->defaultValue(0),
            'image' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%kurslar}}');
    }
}
