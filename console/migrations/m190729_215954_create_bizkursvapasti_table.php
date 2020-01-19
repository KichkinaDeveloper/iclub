<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%bizkursvapasti}}`.
 */
class m190729_215954_create_bizkursvapasti_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bizkursvapasti}}', [
            'id' => $this->primaryKey(),
            'bizningkurs' => $this->string()->notNull(),
            'bizkurs_description' => $this->text()->notNull(),
            'yangikurs' => $this->string()->notNull(),
            'yangikurs_description' => $this->text()->notNull(),
            'oqituvchi' => $this->string()->notNull(),
            'oqituvchi_description' => $this->text()->notNull(),
            'aloqa' => $this->string()->notNull(),
            'manzil' => $this->string()->notNull(),
            'telefon' => $this->string()->notNull(),
            'website' => $this->string()->notNull(),
            'footeroxiri' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%bizkursvapasti}}');
    }
}
