<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%features}}`.
 */
class m190711_091154_create_features_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%features}}', [
            'id' => $this->primaryKey(),
            'title'=> $this->string()->notNull(),
            'short_desc' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%features}}');
    }
}
