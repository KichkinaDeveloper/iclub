<?php

use yii\db\Migration;

/**
 * Class m190728_175255_create_fact_tableble
 */
class m190728_175255_create_fact_tableble extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%fact}}', [
            'id' => $this->primaryKey(),
            'kitoblar' => $this->string(50)->notNull(),
            'talabalar' => $this->string(50)->notNull(),
            'tajriba' => $this->string(50)->notNull(),
            'oqutuvchilar' => $this->string(50)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190728_175255_create_fact_tableble cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190728_175255_create_fact_tableble cannot be reverted.\n";

        return false;
    }
    */
}
