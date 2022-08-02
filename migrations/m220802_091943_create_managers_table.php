<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%managers}}`.
 */
class m220802_091943_create_managers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%managers}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%managers}}');
    }
}
